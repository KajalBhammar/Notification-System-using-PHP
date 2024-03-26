<?php
include 'connect.php';

$isread = 1;
$did = intval($_GET['id']);
date_default_timezone_set('Asia/Kolkata');
$admremarkdate = date('Y-m-d G:i:s ', strtotime("now"));
$sql = "UPDATE notifications SET is_read=:isread WHERE id=:did";
$query = $dbh->prepare($sql);
$query->bindParam(':isread', $isread, PDO::PARAM_INT);
$query->bindParam(':did', $did, PDO::PARAM_INT);
$query->execute();
?>

<html>
    <body>
        <?php
        $lid = intval($_GET['id']);
        $sql_select = "SELECT id as lid, comment_subject, comment_text FROM notifications WHERE id = :lid";
        $query_select = $dbh->prepare($sql_select);
        $query_select->bindParam(':lid', $lid, PDO::PARAM_INT);
        $query_select->execute();
        $results = $query_select->fetchAll(PDO::FETCH_OBJ);
        if ($query_select->rowCount() > 0) {
            foreach ($results as $result) {
        ?>
                <h1> Notification Details </h1><hr>
                <h3><p>Comment subject: <?php echo htmlentities($result->comment_subject);?> </h3> <br>
                <h3><p>Comment text :  <?php echo htmlentities($result->comment_text);?> </h3>
        <?php 
            }
        } 
        ?>
    </body>
</html>

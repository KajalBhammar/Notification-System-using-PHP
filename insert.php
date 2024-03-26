<?php
// insert.php

if(isset($_POST["subject"], $_POST["comment"])) {
    include("connect.php");
    
    // Escape user inputs for security
    $subject = mysqli_real_escape_string($con, $_POST["subject"]);
    $comment = mysqli_real_escape_string($con, $_POST["comment"]);
    
    // Insert data into the notifications table
    $query = "INSERT INTO notifications (comment_subject, comment_text) VALUES ('$subject', '$comment')";
    mysqli_query($con, $query);

    // Close connection
    mysqli_close($con);
}
?>

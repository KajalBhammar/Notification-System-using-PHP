<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Notifications using PHP Ajax Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Custom CSS for Notification UI */
        .navbar-brand {
            font-size: 24px;
        }
        .notification {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        .notification:hover {
            background-color: #f5f5f5;
        }
        .notification-icon {
            float: left;
            margin-right: 10px;
            background-color: #4285f4;
            color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
        }
        .notification-text {
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .notification-drop-title {
            font-weight: bold;
            padding: 10px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <br /><br />
    <h1 style="text-align: center; font-weight: bold;">Notification System</h1>

    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Notification</a>
                </div>
                <?php
                include 'connect.php';
                $isread = 0;
                $sql = "SELECT id from notifications where is_read=:isread";
                $query = $dbh->prepare($sql);
                $query->bindParam(':isread', $isread, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $unreadcount = $query->rowCount();
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="label label-pill label-danger count"><?php echo htmlentities($unreadcount); ?></span>
                            <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span>
                        </a>       
                        <ul class="dropdown-menu">
                            <li class="notification-drop-title">Notifications</li>
                            <?php
                            $is_read = 0;
                            $sql = "SELECT id as lid, comment_subject, comment_text FROM notifications WHERE is_read = :isread";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':isread', $is_read, PDO::PARAM_INT);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                                    ?>
                                    <li>
                                        <a href="Notification_Details.php?id=<?php echo htmlentities($result->lid); ?>">
                                            <div class="notification">
                                                <div class="notification-icon">
                                                    <i  class="glyphicon glyphicon-bell" ></i>
                                                </div>
                                                <div class="notification-text">
                                                    <p><b><?php echo htmlentities($result->comment_subject); ?></b></p>
                                                    <p><?php echo htmlentities($result->comment_text); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                }
                            } else {
                                echo "<li><a href='#'>No new notifications</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <br />
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

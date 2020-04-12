<?php

    $data = array(
        "joseph" => array('8:05 call mom', '8:10 email Martha'),
        "james" => array('password ebay: james123', 'password gmail: qweasd'),
        "jojo" => array('account pin: 2202', 'bankcard: 1252233')
    );

    session_start();

    if (isset($_SESSION['username']) && array_key_exists($_SESSION['username'], $data)) { 
        $user = $_SESSION['username'];

        echo '<ul>';
        echo '<li><a href="main.php">Home</a></li>';
        echo '<li><a href="notes.php">My notes</a></li>';
        echo ' <li><a href="logout.php"> Logout</a></li>';
        echo '</ul>';

        foreach($data[$user] as $note) {
            echo $note . "<br />";
        }
    } else {
        echo "<h1>Not logged in</h1>";
    }
   
?>

<title>Notes app</title>

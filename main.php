<?php

function validLogin($usr, $pass) {
    //insert code for authentication validation
    //to see if user exists on DB
    return true;
}


$username = $_POST['username'];
$password = $_POST['password'];

if (validLogin($username, $password)) {
    //start the session
    session_start();

    //register the session variables
    $_SESSION['username'] = $username;
}
?>

<title>Notes app</title>
<ul>
    <li><a href="main.php">Home</a></li>
    <li><a href="notes.php">My notes</a></li>
    <li><a href="logout.php"> Logout</a></li>
</ul>






    
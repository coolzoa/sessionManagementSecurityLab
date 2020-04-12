<?php

function validLogin($usr, $pass) {
    //insert code for authentication validation
    //to see if user exists on DB
    return true;
}


/*
    lifetime: how long the session should be valid
    path: where is the session valid within domain
    domain: domain name
    secure: for only to be accessed via secure connections
    httpOnly: cannot be accessed by JS

*/
function startSession($lifetime, $path, $domain, $secure, $httpOnly) {
    session_set_cookie_params($lifetime, $path, $domain, $secure, $httpOnly);
    session_start();
}


$username = $_POST['username'];
$password = $_POST['password'];

if (validLogin($username, $password)) {
    //start the session
    startSession(0, '/', 'localhost', false, true);

    //register the session variables
    $_SESSION['username'] = $username;
}
?>

<title>Notes app</title>
<ul>
    <li><a href="main2.php">Home</a></li>
    <li><a href="notes.php">My notes</a></li>
    <li><a href="logout.php"> Logout</a></li>
</ul>






    
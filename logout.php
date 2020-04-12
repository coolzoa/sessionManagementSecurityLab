<?php

    session_start();

    //get rid of sessionID
    session_destroy();

    header('Location: index.html');
?>
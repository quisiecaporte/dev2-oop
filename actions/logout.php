<?php

    session_start();
    session_unset();
    session_destroy();

    header("location: ../views");
    exit;

// this is logout main update 2

?>

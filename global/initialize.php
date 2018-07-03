<?php

    ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 1);

    session_start();
    date_default_timezone_set('Europe/Istanbul');

    require ('cdn.php');
    require ('function.php');
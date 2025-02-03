<?php

session_start();

// kosongkan sesion user login
$_SESSION = [];

session_unset();
session_destroy();
header("Location: index.php");
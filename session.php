<?php
session_start();

$is_logged_in = isset($_SESSION['id']);

$first_name = ($is_logged_in && isset($_SESSION['first_name']))
    ? $_SESSION['first_name']
    : 'Guest';
?>

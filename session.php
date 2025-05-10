<?php
session_start();
$is_logged_in = isset($_SESSION['id']);
$first_name = $_SESSION['first_name'] ?? 'Guest';
?>

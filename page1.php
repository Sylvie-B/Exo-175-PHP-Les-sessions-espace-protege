<?php
session_start();

$_SESSION['pass'] = $_POST['password'];

print_r($_SESSION['pass']);


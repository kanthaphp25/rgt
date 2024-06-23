<?php

session_start(); 
require_once 'includes/dbconnect_rgt.php';
require_once 'includes/validate_rgt.php';
require_once 'includes/constants.php';
require_once 'header.php';
 if(empty($_SESSION['user_id']))
{
	session_unset();
	session_destroy();
	header('location:index.php');
}



?>
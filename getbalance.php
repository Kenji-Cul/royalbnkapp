<?php 
session_start();
include "projectfile.php";
$user = new User;
$new = $user->select_user($_SESSION['uniqueId']);
echo $new['account_balance']
?>
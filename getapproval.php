<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueId'];
$admin = new User;
$admincheck = $admin->selectCheck($uniqueid);
if($admincheck['status'] == 'Approved'){
    echo "success";
} else {
    echo "unsuccessful";
}
?>
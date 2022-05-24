<?php 
session_start();
include_once "projectfile.php";
$uniqueid = $_SESSION['uniqueId'];
$member = new User;
$checkuser = $member->selectWire($uniqueid);
if(isset($checkuser['amount'])){
    echo $checkuser['amount'];
    } else {
        echo "noamount";
    }
?>
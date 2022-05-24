<?php 
session_start();
include "projectfile.php";
if(isset($_SESSION['emailad'])){
$teacher = new User;
$teacherpic = $teacher->select_profile($_SESSION['emailad']);
}
?>
<?php 
session_start();
include "projectfile.php";
$email = $_POST['seenemail'];
$password = $_POST['seenpassword'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($email) || empty($password)){
        $errormsg = "Email and password required to login";
    }else{
        $member = new User;
        $loggedinuser = $member->login(check_input($email));
        if(isset($loggedinuser['password'])){
        if(password_verify($password,$loggedinuser['password'])){
            $_SESSION['firstusername'] = $loggedinuser['firstname'];
             $_SESSION['lastusername'] = $loggedinuser['lastname'];
             $_SESSION['middleusername'] = $loggedinuser['middlename'];
             $_SESSION['phonenum'] = $loggedinuser['phonenumber'];
             $_SESSION['emailad'] = $loggedinuser['emailaddress'];
             $_SESSION['usercountry'] = $loggedinuser['country'];
             $_SESSION['useraddress'] =$loggedinuser['addressof'];
             $_SESSION['useraccountnum'] = $loggedinuser['account_number'];
             $_SESSION['uniqueId'] = $loggedinuser['unique_id'];
             $_SESSION['nameofuser'] = "great123";
             echo "successful";
        }
        else{
            $errormsg = "Invalid login details try again";
        }
    } else{
        $errormsg = "User not found please sign up below";
    }
    }

    if(isset($errormsg)){
        echo $errormsg;}
}

function check_input($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
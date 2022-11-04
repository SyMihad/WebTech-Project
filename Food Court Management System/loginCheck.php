<?php
session_start();
$userType = $_POST['userType'];
$username = $_POST['username'];
$password = $_POST['password'];

if($username=='' or $password==''){
    header('location: home.php?err=null');
}
else if(($username!='' and $password!='') and $userType==''){
    header('location: home.php?err=userTypeError');
}

if($userType=='customer'){
    $file = fopen('dataFiles/customer.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[5])==$password){
            $status = true;
        }
    }
    if($status){
        header('location: customerHome.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

?>
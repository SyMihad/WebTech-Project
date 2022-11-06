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
    $file = fopen('customer/data/customer.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[7])==$password){
            $status = true;
        }
    }
    if($status){
        setcookie('status', 'true', time()+60*60*72, '/');
        setcookie('fullname', $user[0]." ".$user[1], time()+60*60*72, '/');
        setcookie('username', $username, time()+60*60*72, '/');
        header('location: customer/customerDashboard.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='admin'){
    $status = false;
    if($username=='admin' and $password=='admin'){
        $status = true;
    }
    if($status){
        setcookie('status', 'true', time()+60*60*72, '/');
        setcookie('username', $username, time()+60*60*72, '/');
        header('location: admin/adminDashboard.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='restaurantManager'){
    $file = fopen('restaurantManager/data/restuarantManagers.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[7])==$password){
            $status = true;
        }
    }
    if($status){
        setcookie('status', 'true', time()+60*60*72, '/');
        setcookie('restaurantName', $user[4], time()+60*60*72, '/');
        setcookie('restaurantID', $user[4], time()+60*60*72, '/');
        setcookie('username', $username, time()+60*60*72, '/');
        header('location: restaurantManager/restaurantManagerDashboard.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='restaurantOwner'){
    $file = fopen('restaurantOwner/data/restuarantOwners.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[7])==$password){
            $status = true;
        }
    }
    if($status){
        setcookie('status', 'true', time()+60*60*72, '/');
        setcookie('restaurantName', $user[4], time()+60*60*72, '/');
        setcookie('username', $username, time()+60*60*72, '/');
        header('location: restaurantOwner/restaurantOwnerDashboard.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

?>
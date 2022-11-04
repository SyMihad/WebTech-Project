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
    $file = fopen('customer/customer.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[5])==$password){
            $status = true;
        }
    }
    if($status){
        header('location: customer/customerHome.php');
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
        header('location: admin/admin.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='foodCourtManager'){
    $file = fopen('foodCourtManager/foodCourtManager.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[5])==$password){
            $status = true;
        }
    }
    if($status){
        header('location: foodCourtManager/foodCourtManager.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='restaurantManager'){
    $file = fopen('restaurantManager/restaurantManager.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[5])==$password){
            $status = true;
        }
    }
    if($status){
        header('location: restaurantManager/restaurantManager.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

else if($userType=='restaurantOwner'){
    $file = fopen('restaurantOwner/restaurantOwner.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        if(trim($user[2])==$username and trim($user[5])==$password){
            $status = true;
        }
    }
    if($status){
        header('location: restaurantOwner/restaurantOwner.php');
    }
    else{
        header('location: home.php?err=invalid');
    }
}

?>
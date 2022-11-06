<?php
    session_start();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $restaurantName = $_POST['restaurantName'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhoneNum'];
    $password = $_POST['userPassword'];
    $confirmPassword = $_POST['userConfirmPassword'];
    $src = $_FILES['ownerProfilePic']['tmp_name'];
    $des ="../restaurantManager/data/pictures/".$userName.".png";
    
   
    if($password != $confirmPassword){
    header('location: adminAddingRestaurantManager.php?err==passNotMatch');
    }
    else if($firstName=="" or $lastName=="" or $userName=="" or $restaurantName=="" or $email=="" or $phone=="" or $password=="" or $confirmPassword==""){
    header('location: adminAddingRestaurantManager.php?err=null');
    }
    else{
        $userData = "\r\n".$firstName."|".$lastName."|".$userName."|".$gender."|".$restaurantName."|".$email."|".$phone."|".$password;
        $file = fopen("../restaurantManager/data/restuarantManagers.txt",'a');
        fwrite($file, $userData);
        fclose($file);
        if(move_uploaded_file($src, $des)){
            header('location: adminAddingRestaurantManager.php');
        }
        else{
            header('location: adminAddingRestaurantManager.php?message=Manager_pic_setting_failed');
        }
        
    }

?>
<?php
    session_start();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhoneNum'];
    $password = $_POST['userPassword'];
    $confirmPassword = $_POST['userConfirmPassword'];

    if($password != $confirmPassword){
    header('location: registration.php?err==passNotMatch');
    }
    else if($firstName=="" or $lastName=="" or $userName=="" or $email=="" or $phone=="" or $password=="" or $confirmPassword==""){
    header('location: registration.php?err=null');
    }
    else{
        $userData = "\r\n".$firstName."|".$lastName."|".$userName."|".$gender."|".$birthDate."|".$email."|".$phone."|".$password;
        $file = fopen("customer/data/customer.txt",'a');
        fwrite($file, $userData);
        fclose($file);
        header('location: home.php');
    }

?>
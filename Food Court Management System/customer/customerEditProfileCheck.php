<?php
    function removeLine($filePath){
        $fileRead = fopen($filePath, 'r');
        $readData[] = array();
        $rowNum=0;
        $i =0;
        $willDelete = false;
        while(!feof($fileRead)){
            $data = fgets($fileRead);
            $user = explode("|", $data);
            $readData[$i]=$data;
            if(trim($user[2])==''){
                $willDelete = true;
                $rowNum = $i;
            }
            $i++;
        }
        fclose($fileRead);
        if($willDelete){
            $file_out = file($filePath);
            unset($file_out[$rowNum]);
            file_put_contents($filePath, implode("", $file_out));
        }
    }
?>
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
    //header('location: registration.php?err==passNotMatch');
    }
    else if($firstName=="" or $lastName=="" or $userName=="" or $email=="" or $phone=="" or $password=="" or $confirmPassword==""){
    //header('location: registration.php?err=null');
    }
    else{
        removeLine('data/customer.txt');
        $fileRead = fopen('data/customer.txt', 'r');
        $readData[] = array();
        $i = 0;
        while(!feof($fileRead)){
            $data = fgets($fileRead);
            $user = explode("|", $data);
            if(trim($user[2])!=$_COOKIE['username']){
                $readData[$i]=$data;
            }
            $i++;
        }
        fclose($fileRead);
        removeLine('data/customer.txt');
        $fileWrite = fopen('data/customer.txt', 'w');
        foreach($readData as $write){
            
            fwrite($fileWrite, $write);
            
        }
        fclose($fileWrite);

        removeLine('data/customer.txt');

        $userData = "\r\n".$firstName."|".$lastName."|".$userName."|".$gender."|".$birthDate."|".$email."|".$phone."|".$password;
        $file = fopen("data/customer.txt",'a');
        fwrite($file, $userData);
        fclose($file);
        removeLine('data/customer.txt');
        header('location: customerViewProfile.php');
    }

?>
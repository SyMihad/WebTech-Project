<?php
    $foodSelect = $_POST['foodSelect'];
    $quantity = $_POST['quantity'];
    $restaurantSelect = $_COOKIE['restaurantSelect'];
    $username = $_COOKIE['username'];

    $record= "\r\n".$foodSelect."|".$quantity."|".$restaurantSelect."|".$username; 
    $file =fopen('data/foodOrderList.txt','a');
    fwrite($file,  $record);    
    fclose($file);
    header('location: thankingCustomer.php');
?>
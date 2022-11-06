<?php
session_start();
$foodID=trim($_POST['foodID']);
$foodName=trim($_POST['foodName']);
$foodPrice=trim($_POST['foodPrice']);

if($foodID == "" || $foodName == "" || $foodPrice == "" ){

    header('location: restaurantOwnerAddFoodItem.php?err=null');
    
}

else{
    $food_record= "\r\n".$foodID."|".$foodName."|".$foodPrice."|".$_COOKIE['restaurantName']; 
    setcookie('foodID', $foodID, time()+60*60*72, '/');
    $file =fopen('../restaurantManager/data/foodItems.txt','a');
    fwrite($file,  $food_record);    
    fclose($file);
    header('location: restaurantOwnerAddFoodItem.php');

     }
?>
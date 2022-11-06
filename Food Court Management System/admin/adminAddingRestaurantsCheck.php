<?php
session_start();
$restaurantName=trim($_POST['restaurantName']);
$restaurantID=trim($_POST['restaurantID']);
$restaurantOwnerName=trim($_POST['restaurantOwnerName']);

$already_exists=false;

if($restaurantName == "" || $restaurantID == "" || $restaurantOwnerName == "" ){

    header('location: adminAddingRestaurants.php?err=null');
    
}

else{
    $restaurant_record= "\r\n".$restaurantName."|".$restaurantID."|".$restaurantOwnerName; 
    setcookie('restaurantName', $restaurantName, time()+60*60*72, '/');
    $file =fopen('../restaurantOwner/data/restaurant.txt','a');
    fwrite($file,  $restaurant_record);    
    fclose($file);
    header('location: adminChoosingRestaurantImage.php?message=restaurant_added');

     }
?>
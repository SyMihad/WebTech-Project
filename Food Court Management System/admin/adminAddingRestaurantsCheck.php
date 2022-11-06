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
    $_SESSION['restaurantName']=$restaurantName;
    $file =fopen('../restaurantOwner/data/restaurantOwners.txt','a');
    fwrite($file,  $restaurant_record."\r\n");    
    fclose($file);
    header('location: adminChoosingRestaurantImage.php?message=restaurant_added');

     }
?>
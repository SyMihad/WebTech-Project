<?php 

    //print_r($_FILES);
    
    $src = $_FILES['myfile']['tmp_name'];
    $des ="../restaurantOwner/data/".$_COOKIE['restaurantName'].".png";
    if(move_uploaded_file($src, $des)){
        header('location: adminDashboard.php?message=restaurant_pic_set_successfully');
    }
    else{
        header('location: adminDashboard.php?message=restaurant_pic_setting_failed');
    }
?>
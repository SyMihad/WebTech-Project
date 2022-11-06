<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>All Restaurant Manager</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center"   border="1">
                    <tr><td align="center"><h1>All Restaurant Manager</h1></td></tr>
                    <tr><td><hr></td></tr>

                   <?php
                        if(isset($_GET['message']))
                        {
                            if($_GET['message'] == 'reg_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome to your new account, '.$_COOKIE['username'].'!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'log_in_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome back to your account, '.$_COOKIE['username'].'!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'profile_picture_change_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Profile Picture Changed Successfully!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'restaurant_added'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Restaurant Added Successfully!<b></p></td></tr>';  
                            }

                            
  
                        } 
                      ?>

                     

                    <tr>
                        <td>
                            <table align="center" border="1" width="100%" height="100%"  >
                        
                                
                                 
                                <tr>
                                <td width="30%">
                      <ul style="line-height:250%">

                      <li><a href="adminDashboard.php">Dashboard</a><br></li>
                     <li><a href="adminAddingRestaurants.php">Add Restaurant</a><br></li>
                     <li><a href="adminViewingRestaurants.php">View Restaurants</a><br></li>

                     <li><a href="adminAddingRestaurantOwner.php">Add Restaurant Owner</a></li>
                     <li><a href="adminViewingRestaurantOwner.php">View Restaurant Owner</a></li>

                     <li><a href="adminAddingRestaurantManager.php">Add Restaurant Manager</a></li>
                     <li><a href="adminViewingRestaurantManager.php">View Restaurant Manager</a></li>
                     
                     <li><a href="logOut.php">LogOut</a></li>

                    </ul>
 
                        </td>

                        


                        <td>
                            <table border="1">
                                <tr>
                                    <td><b>First Name</b></td>
                                    <td><b>Last Name</b></td>
                                    <td><b>Username</b></td>
                                    <td><b>Gender</b></td>
                                    <td><b>Restaurant Name</b></td>
                                    <td><b>Email</b></td>
                                    <td><b>Phone Number</b></td>
                                    <td><b>Profile Picture</b></td>
                                </tr>
                                <?php
                                    $file = fopen("../restaurantManager/data/restuarantManagers.txt",'r');
                                    while(!feof($file)){
                                        $data = fgets($file);
                                        $user = explode('|', $data);
                                        print("<tr><td>$user[0]</td><td>$user[1]</td><td>$user[2]</td><td>$user[3]</td><td>$user[4]</td><td>$user[5]</td><td>$user[6]</td><td><img src='../restaurantOwner/data/pictures/$user[2].png' width='80px' height='80px'></td></tr>");
                                    }
                                ?>
                            </table>
                       </td>
                    </tr>
                                <tr>
                                    <td colspan="2"><hr></td>
                                </tr>

                                <tr align="center">
                                    <td colspan="2"><a href="logOut.php"><p  style="color:red; font-size:20px;"><b>Log Out<b></p></a></td>
                                </tr>
                                 
                            </table>
                        </td>
                    </tr>
                </table>
            </fieldset>
         
    </body>
    </html>
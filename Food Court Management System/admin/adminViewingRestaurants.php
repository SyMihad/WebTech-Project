<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Set Restaurant Image</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="800px"  border="1">
                    <tr><td align="center"><h1>Add Restaurants</h1></td></tr>
                    <tr><td><hr></td></tr>

                   <?php
                        if(isset($_GET['message']))
                        { 
                            
                            if($_GET['message'] == 'restaurant_added'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Now set Logo/Image for this Restaurant<b></p></td></tr>';  
                            }

                          
  
                        } 
                      ?>

                     

                    <tr>
                        <td>
                            <table align="center" border="1" width="100%" height="100%"  >
                        
                                
                                 
                                <tr>
                                <td width="30%">
                      <ul style="line-height:250%">

                     <li><a href="restaurantOwnerDashboard.php">Dashboard</a><br></li>
                     <li><a href="adminAddingRestaurants.php">Add Restaurant</a><br></li>
                     <li><a href="adminViewingRestaurants.php">View Restaurants</a><br></li>  
                     <li><a href="viewProfile.php">View Profile</a></li>
                     <li><a href="editProfile.php">Edit Profile</a></li>
                     
                     <li><a href="logOut.php">LogOut</a></li>

                    </ul>
 
                        </td>

                        


                        <td>
                            <table border="1">
                                <tr>
                                    <td><b>Restaurant Name</b></td>
                                    <td><b>Restaurant ID</b></td>
                                    <td><b>Owner Name</b></td>
                                    <td><b>Picture</b></td>
                                </tr>
                                <?php
                                    $file = fopen('../restaurantOwner/data/restaurant.txt','r');
                                    while(!feof($file)){
                                        $data = fgets($file);
                                        $user = explode('|', $data);
                                        print("<tr><td>$user[0]</td><td>$user[1]</td><td>$user[2]</td><td><img src='../restaurantOwner/data/$user[0].png' width='80px' height='80px'></td></tr>");
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
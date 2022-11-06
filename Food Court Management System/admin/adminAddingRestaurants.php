<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Admin Adding Restaurants</title>
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
                            if($_GET['message'] == 'reg_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome to your new account!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'log_in_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Welcome back to your account!<b></p></td></tr>';  
                            }

                            else if($_GET['message'] == 'profile_picture_change_success'){
                                echo '<tr><td align="center"><p  style="color:green; font-size:20px;"><b>Profile Picture Changed Successfully!<b></p></td></tr>';  
                            }

                             

                            
  
                        } 


                        if(isset($_GET['err']))
                        {
                            if($_GET['err'] == 'null'){
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Please Input All The Fields Properly!<b></p></td></tr>';  
                            }

                            else if($_GET['err'] == 'already_taken'){
                                echo '<tr><td align="center"><p  style="color:red; font-size:20px;"><b>Restaurant/Owner Already Registered!<b></p></td></tr>';  
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
                        <table border="1" align="center">    
                      

                      <form method="post" action="adminAddingRestaurantsCheck.php" enctype="" >  
                      
                     <tr> <td colspan="2" align="center"><h2> Enter Info of The New Restaurant  <h2>  </td></tr>
                     <tr> <td colspan="2"> <hr>  </td></tr>

                   
                      <tr><td style="padding:10px">Restaurant Name:  </td>  <td><input style="width: 230px; height: 30px;" type="text"     name="restaurantName"          value=""       placeholder="Restaurant Name">  </td></tr> 
                      <tr><td style="padding:10px">Restaurant ID: </td><td><input style="width: 230px; height: 30px;" type="number"     name="restaurantID"       value=""       placeholder="Restaurant ID"> </td> </tr>
                      <tr><td style="padding:10px">Owner Name: </td><td>     <input style="width: 230px; height: 30px;" type="text"     name="restaurantOwnerName"     value=""       placeholder="Restaurant Owner's Name"> </td> </tr>
                    
                     
                      <tr><td align="center" colspan="2" style="padding:10px"> <input type="submit" name="" value="Add"> &nbsp <input type="reset" name="" value="Reset"> </td></tr>
                      </form>
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
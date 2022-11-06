<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: home.php?err=bad_request');
}

?>



<html>
    <head>
        <title>Add Restaurant Manager</title>
    </head>
    <body>
        
            <fieldset>
                <legend><p  style="font-size:20px;">Food Court Management System</p></legend>
                <table align="center" height="700px" width="700px"  border="1">
                    <tr><td align="center"><h1>Add Restaurant Manager</h1></td></tr>
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

                      <li><a href="restaurantOwnerDashboard.php">Dashboard</a><br></li>
                     <li><a href="restaurantOwnerAddManager.php">Add Manager</a><br></li>
                     <li><a href="restaurantOwnerAddFoodItem.php">Add Food Item</a><br></li>
                     <li><a href="restaurantOwnerViewFoodItem.php">View Food Item</a></li>
                     <li><a href="logOut.php">LogOut</a></li>

                    </ul>
 
                    </td>
                        <td>
                        <form method="post" action="restaurantOwnerAddingRestaurantManagerCheck.php" enctype="multipart/form-data">   
                        <table align="center">
                    
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="firstName" placeholder="first name"></td>
                            </tr>
                            
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="lastName" placeholder="last name"></td>
                            </tr>

                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="userName" placeholder="user name"></td>
                            </tr>

                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="gender" value="male"/>Male
                                    <input type="radio" name="gender" value="female"/>Female
                                    <input type="radio" name="gender" value="other"/>Other
                                </td>
                            </tr>

                            <tr>
                                <td>Restaurant Name</td>
                                <td><input type="text" name="restaurantName" placeholder="restuarant name"></td>
                            </tr>

                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="userEmail" value="" placeholder="email"></td>
                            </tr> 
                            
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="tel" name="userPhoneNum" value="" ></td>
                            </tr>

                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="userPassword" value="" placeholder="password"></td>
                            </tr>

                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" name="userConfirmPassword" value=""></td>
                            </tr>

                            <tr>
                                <td>Profile Picture:</td>
                                <td><input type="file" name="ownerProfilePic" value=""></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="" value="Register">
                                    <input type="reset" name="" value="Reset">
                                </td>
                            </tr>

                        </table>
                    </form>
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
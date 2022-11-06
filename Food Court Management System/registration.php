<?php

if(isset($_GET['err'])){
    if($_GET['err']=='null'){
        echo "Please fillup all the data.";
    }
    else if($_GET['err']=='passNotMatch'){
        echo "Please type the password correctly.";
    }
}

?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <form method="post" action="checkCustomerRegistration.php" enctype="">
            <fieldset>
                <legend>Registration For Customer</legend>
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
                        <td>Birthdate:</td>
                        <td><input type="date" name="birthDate"></td>
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
                        <td></td>
                        <td>
                            <input type="submit" name="" value="Register">
                            <input type="reset" name="" value="Reset">
                        </td>
                    </tr>

                </table>
            </fieldset>
        </form>
    </body>
</html>
<!DOCTYPE>
<html>
    <head>
        <title>Form-Submission Php</title>
    </head>

    <body>
        <?php

             $fnameErr=$lnameErr=$genderErr=$dobErr=$errorMessage=$religionErr=$emailErr=$successfulMessage=$userNameErr=$passwordErr="";
             
             $flag=false;
             
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                

                if(empty($_POST['fname']))
                {
                    $fnameErr="* First name can not be  empty.";
                    $flag=true;
                    
                }
                
                if(empty($_POST['lname']))
                {
                    $lnameErr="* Last name can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['gender']))
                {
                    $genderErr="* Gender  can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['dob']))
                {
                    $dobErr="* Date of birth can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['religion']))
                {
                    $religionErr="* Religion can not be empty";
                    $flag=true;
                }
                if(empty($_POST['email']))
                {
                    $emailErr="* Email can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['username']))
                {
                    $userNameErr="* User name can not be empty.";
                    $flag=true;
                }
                if(empty($_POST['password']))
                {
                    $passwordErr="* Password can not be  empty.";
                    $flag=true;
                    
                }

                if(!$flag)
                {
                
                    $successfulMessage= "Success full";
                   
                }
                

            }
            function test_name($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }

            
        ?>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <h2>Registration Form:</h2>
            <fieldset>
                <legend>Basic Information:</legend>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" ><span style="color : red;"><?php echo $fnameErr; ?></span>
                <br><br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" ><span style="color : red;"><?php echo $lnameErr; ?></span>
                <br><br>
                <label for ="gender">Gender :</label>
                <br>
                <input type="radio" id="male" name="gender" value="male" >
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" >
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other" >
                <label for="other">Other</label>
                <span style="color : red;"><?php echo $genderErr; ?></span>
                <br><br>
                <label for="dob">Date of Birth:</label>

                <input type="date" id="dob" name="dob" ><span style="color : red;"><?php echo $dobErr; ?></span>
                <br><br>
                <label for="religion">Religion:</label>
                <select name="religion" id="religion" >
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Cristan">Cristan</option>
                    <option value="Buddhism">Buddhism</option>
                </select>
                <span style="color : red;"><?php echo $religionErr; ?></span>
                
                <br>

            </fieldset>

            <fieldset>
                <legend>Contact Information:</legend>
                <label for="address">Present Address:</label>
                <br>
                <textarea name="address" id="address" cols="40" rows="3"></textarea>
                <br>
                <label for="paddress">Parmanent Address:</label>
                <br>
                <textarea name="paddress" id="paddress" cols="40" rows="3"></textarea>
                <br><br>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="12345-123456" pattern="[0-9]{5}[0-9]{6}">
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="abcd@gmail.com" pattern=".+@+.+.com" ><span style="color : red;"><?php echo $emailErr; ?></span>
                <br><br>
                <label for="link">Personal Website Link(url):</label>
                <input type="url" name="link" id="link">
                <br>
                <br>
                

            </fieldset>

            <fieldset>
                <legend>Account Information:</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" ><span style="color : red;"><?php echo $userNameErr; ?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".{4,}" ><span style="color : red;"><?php echo $passwordErr; ?></span>
                <br><br>
                <input type="submit" value="submit">
                <br><br>
                <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                
            </fieldset>

            

        </form>


    </body>
</html>
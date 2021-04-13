<!DOCTYPE html>
<html>
<body>
<?php
    //khai báo và cài đặt
    $nameErr = $emailErr = $genderErr = $WebsiteErr = "";
    $name = $email = $gender = $comment = $website ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"]))
        {
            $nameErr = "Name is require";
        }else
        {
            $name = test_input($_POST['name']);
               // check if name only contains letters and whitespace
               if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
            {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST['email']))
            {
                $emailErr = 'email is require';
            }
        else
            {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $emailErr = "Invalid email format";
                }
            }
                 

        if(empty($_POST['website']))
            {
                $Website ="";
            }
        else
            {
                $website = test_input($_POST["website"]);
                            // check if URL address syntax is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
                {
                    $websiteErr = "Invalid URL";
                }    
            }

        if(empty($_POST["comment"]))
            {
                $comment = "";
            }else
            {
                $comment = test_input($_POST["comment"]);
            }

        if (empty($_POST["gender"]))
        {
            $genderErr = "Gender is required";
        }
        else
        {
            $gender = test_input($_POST["gender"]);
        }
    }

    function  test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<form method="post" action="">
    Name:<input type="text" name='name' value="<?php echo $name ?> ">
    <span class="error">*<?php echo $nameErr;?></span><br>
    Email:<input type="email" name="email" value="<?php echo $email?>">
    <span class="error">*<?php echo $emailErr;?></span><br>
    Website:<input type="text" name="text" value="<?php echo $website?>">
    <span class="error">*<?php echo $WebsiteErr;?></span><br>
    Comment: 
        <textarea name="comment" row="5" cols="40"></textarea>
    Gender:<input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender =="female") echo "checked";?>>female
            <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>Male 
            <input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender == "other") echo "checked";?>>Other
            <br>
            <span class="error">*<?php echo $genderErr;?></span>
    <input type="submit" name="submit" value="Submit">

</form>
<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "</br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>
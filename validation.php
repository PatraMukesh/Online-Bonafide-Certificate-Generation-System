<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error
        {
            color:red;
        }
    </style>
</head>
<body>
    
</body>
<?php
    $userErr=$emailErr=$passErr=$cpassErr="";
    $user=$email=$pass=$cpass="";
    if($_SERVER["REQUEST_METHOD"=="POST"])
    {
        if(empty($_POST['user']))
        {
            $userErr="Please Enter a Username";
        }
        else
        {
            $user=test_input($_POST["user"]);
            if(!preg_match("/^[a-zA-Z-']*$/",$user))
            {
                $userErr="Only latter and White spaces allowed";
            }
        }
        if(empty($_POST['email']))
        {
            $userErr="Please Enter a your Email";
        }
        else
        {
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $emailErr="Email address is incorrect";
            }
        }
        if(empty($_POST['pass']))
        {
            $passErr="Please Enter a password";
        }
        else
        {
            $pass=test_input($_POST["pass"]);
        }
        if(empty($_POST['cpass']))
        {
            $cpassErr="Please Enter confirm password";
        }
        else
        {
            $cpass=test_input($_POST["cpass"]);
        }
    }
?>
</html>
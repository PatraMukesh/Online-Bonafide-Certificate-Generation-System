<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Create Account</title>
    <style>
        body
        {
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        .bg_image
        {
            position: absolute;
            height: 800px;
            width: 100%;
        }
        .main_div
        {
            height: 510px;
            width: 800px;
            border: 2px solid black;
            background-color:whitesmoke;
            position: absolute;
            left: 24%;
            top:140px;
            border-radius: 40px;
            box-shadow: 2px 2px 4px 4px gray;
        }
        .main_div:hover
        {
            box-shadow: 3px 3px 8px 8px gray;
        }
        .p1
        {
            color:black;
            font-size:x-large;
            font-weight:bold;
            text-align: center;
        }
        .form1
        {
            background-color:whitesmoke;
            height: 80%;
            position: absolute;
        }
        .lbl_email
        {
            font-weight:bold;
            font-size: 15px;
            width: 100px;
            position: absolute;
            left: 450px;
            top: 20px;
        }
        .txt_email
        {
            height: 28px;
            width: 200px;
            border:none;
            border-radius: 20px;
            text-align: center;
            background-color: lightgray;
            border-spacing: 2px;
            font-size: 12px;
            position: absolute;
            left: 450px;
            top: 50px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, 0.02);
        }
        .lbl_pass
        {
            font-weight:bold;
            font-size: 15px;
            width: 200px;
            position: absolute;
            left: 100px;
            top: 110px;
        }
        .txt_pass
        {
            height: 28px;
            width: 200px;
            border:none;
            border-radius: 20px;
            text-align: center;
            background-color: lightgray;
            border-spacing: 2px;
            font-size: 12px;
            position: absolute;
            left: 100px;
            top: 140px;
        }
        .lbl_user
        {
            font-weight:bold;
            font-size: 15px;
            width: 100px;
            position: absolute;
            left: 100px;
            top: 20px;
        }
        .txt_user
        {
            height: 28px;
            width: 200px;
            border:none;
            border-radius: 20px;
            text-align: center;
            background-color: lightgray;
            border-spacing: 2px;
            font-size: 12px;
            position: absolute;
            left: 100px;
            top: 50px;
        }
        .lbl_cpass
        {
            font-weight:bold;
            font-size: 15px;
            width: 200px;
            position: absolute;
            left: 450px;
            top: 110px;
        }
        .txt_cpass
        {
            height: 28px;
            width: 200px;
            border:none;
            border-radius: 20px;
            text-align: center;
            background-color: lightgray;
            border-spacing: 2px;
            font-size: 12px;
            position: absolute;
            left: 450px;
            top: 140px;
        }
        .btn_create
        {
            width: 110px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:limegreen;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 2px solid lightslategray;
            text-align: center;
            position: absolute;
            left: 320px;
            top: 230px;
        }
        .btn_create:hover
        {
            cursor:pointer;
            background-color: green;
        }
        .chk_box
        {
            position: absolute;
            left: 230px;
            top: 197px;
            height: 13px;
            width: 13px;
        }
        .lbl_term
        {
            width:max-content;
            position: absolute;
            left: 260px;
            top: 200px;
            font-size: small;
        }
        .lbl_or
        {
            font-weight: 600;
            position: absolute;
            left: 360px;
            top: 270px;
        }
        .btn_google
        {
            width: 130px;
            height: 40px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightslategray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 2px solid lightslategray;
            text-align: center;
            position: absolute;
            left: 100px;
            top: 330px;
        }
        .btn_google:hover
        {
            cursor:pointer;
            background-color: lightskyblue;
        }
        .btn_facebook
        {
            width: 130px;
            height: 40px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightslategray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 2px solid lightslategray;
            text-align: center;
            position: absolute;
            left: 315px;
            top: 330px;
        }
        .btn_facebook:hover
        {
            cursor:pointer;
            background-color: lightskyblue;
        }
        .btn_twitter
        {
            width: 130px;
            height: 40px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightslategray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 2px solid lightslategray;
            text-align: center;
            position: absolute;
            left: 530px;
            top: 330px;
        }
        .btn_twitter:hover
        {
            cursor:pointer;
            background-color: lightskyblue;
        }
        /*.bg_image
        {
            height: 50px;
            width: 370px;
            border: 2px solid black;
            background-color:lightgreen;
            position: absolute;
            left: 34%;
            top:5px;
            border-radius: 40px;
            box-shadow: 1px 1px 2px 2px gray;
        }*/
        .succ
        {
            height: 55px;
            width: 450px;
            border: 2px solid black;
            background-color:lightgreen;
            position: absolute;
            left: 33%;
            top:15px;
            border-radius: 40px;
            box-shadow: 1px 1px 2px 2px gray;
        }
        .p2
        {
            position: absolute; 
            left: 90px;
            bottom: 0px;
            color:black;
            font-size:large;
            font-weight:bold;
            text-align: center;
        }
        .unsucc
        {
            height: 65px;
            width: 500px;
            border: 2px solid black;
            background-color:lightcoral;
            position: absolute;
            left: 33%;
            top:15px;
            border-radius: 40px;
            box-shadow: 1px 1px 2px 2px gray;
        }
        .p3
        {
            position: absolute;
            margin-top: 5px;
            left: 160px;
            color:black;
            font-size:large;
            font-weight:bold;
        }
        .p4
        {
            position: absolute;
            margin-top: 15px;
            left: 155px;
            color:black;
            font-size: small;
            font-weight:bold;
        }
        .home
        {
            position: absolute;
            background-color: whitesmoke;
            font-weight:400;
            height: 45px;
            width: 90px;
            top: 12px;
            left: 10px;
            border-radius: 35px;
            box-shadow: 1px 1px 2px 2px gray;
            font-weight: bold;
        }
        .home a
        {
            text-decoration: none;
            color: black;
        }
        .home:hover
        {
            background-color: lightgreen;
            cursor: pointer;
        }
        .signin
        {
            position: absolute;
            background-color: whitesmoke;
            font-weight:400;
            height: 45px;
            width: 90px;
            top: 12px;
            right: 10px;
            border-radius: 35px;
            box-shadow: 1px 1px 2px 2px gray;
            font-weight: bold;
        }
        .signin a
        {
            text-decoration: none;
            color: black;
        }
        .signin:hover
        {
            background-color: lightgreen;
            cursor: pointer;
        }
        #togglePassword
        {
            position: absolute;
            left: 280px;
            top: 147px;
            cursor: pointer;
        }
        #con_pass
        {
            position: absolute;
            left: 632px;
            top: 147px;
            cursor: pointer;
        }
       /* .error_user
        {
            color: red;
            position: absolute;
            top: 85px;
            left: 100px;
            font-size: 14px;
            width: 300px;
        }
        .error_email
        {
            color: red;
            position: absolute;
            top: 85px;
            left: 450px;
            font-size: 14px;
            width: 300px;
        }
        .error_pass
        {
            color: red;
            position: absolute;
            top: 175px;
            left: 100px;
            font-size: 14px;
            width: 300px;
        }
        .error_cpass
        {
            color: red;
            position: absolute;
            top: 175px;
            left: 450px;
            font-size: 14px;
            width: 300px;
        }*/
        .chk_box:hover
        {
            cursor: pointer;
        }
    </style>
    </head>
<body>
    <img class="bg_image" src="https://i.pinimg.com/originals/1d/c7/12/1dc7123a696649bf5887c8ff1916a755.jpg">
    <div class="main_div">
        <p class="p1">Create An Account</p>
        <form class="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label class="lbl_pass">PASSWORD</label>
            <input class="txt_pass" type="password" name="pass" placeholder="patra#@133@#m" id="id_password" required>
            <i class="far fa-eye" id="togglePassword"></i>
            <label class="lbl_user">USER NAME</label>
            <input class="txt_user" type="text" name="user" placeholder="mukeshpatra123" required>
            <label class="lbl_email">E-MAIL ID</label>
            <input class="txt_email" type="text" name="email" placeholder="patramukesh721435@gmail.com" required>
            <label class="lbl_cpass">CONFIRM PASSWORD</label>
            <input class="txt_cpass" type="password" name="cpass" placeholder="patra#@133@#m" id="id_cpass" required>
            <i class="far fa-eye" id="con_pass"></i>
            <?php 
                if(!empty($cpassErr))
                {
            ?>
            <span class="error_cpass"><?php echo $cpassErr;?></span>
            <?php
                } ?>
            <input class="btn_create" type="submit" value="CREATE" name="sub">
            <input class="chk_box" type="checkbox" name="chk_box">
            <label class="lbl_term">I Accept Terms And Conditions and Privacy Policy</label>
            <p class="lbl_or">OR</p>
            <input class="btn_google" type="button" value="GOOGLE">
            <input class="btn_facebook" type="button" value="FACEBOOK">
            <input class="btn_twitter" type="button" value="TWITTER">
        </form>
        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#id_password');
            togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
            });     
        </script>
        <script>
            const togglePassword2 = document.querySelector('#con_pass');
            const password2 = document.querySelector('#id_cpass');
            togglePassword2.addEventListener('click', function (e) {
            // toggle the type attribute
            const type2 = password2.getAttribute('type') === 'password' ? 'text' : 'password';
            password2.setAttribute('type', type2);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
            });     
        </script>
    </div>
    <button  class="home"><a href="index.html">Home</a></button>
    <button  class="signin"><a href="Student_Login.php">Login</a></button>
    <?php
        if($_POST)
        {
             /*$userErr=$emailErr=$passErr=$cpassErr="";
             $user=$email=$pass=$cpass="";
             //this funtion is use to remove spaces / etc..
                function test_input($data)
                {
                    $data=trim($data);
                    $data=stripslashes($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
                 if(empty($_POST['user']))
                 {
                   $userErr="* Please Enter a Username";
                 }
                 else
                 {
                     $user=test_input($_POST["user"]);
                 }
                 if(empty($_POST['email']))
                 {
                     $emailErr="* Please Enter a your Email";
                 }
                 else
                 {
                    $email=test_input($_POST["email"]);
                     if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                     {
                         $emailErr="* Email address is incorrect";
                     }
                 }
                 if(empty($_POST['pass']))
                 {
                     $passErr="* Please Enter a password";
                 }
                 else
                 {
                     $pass=test_input($_POST["pass"]);
                 }
                 if(empty($_POST['cpass']))
                 {
                     $cpassErr="* Please Enter confirm password";
                 }
                 else
                 {
                     $cpass=test_input($_POST["cpass"]);
                     if($cpass!=$pass)
                     {
                        $cpassErr="* Confirm Password Not Matched";
                     }
                     else
                     {
                        $cpass=test_input($_POST["cpass"]);
                     }
                 }*/
                 $cpassErr="";
                 $usertype="Normal User";
                 $user=$_POST['user'];
                 $email=$_POST['email'];
                 $pass=$_POST['pass'];
                 $cpass=$_POST['cpass'];
                 if($cpass!=$pass)
                 {
                    $cpassErr="* Confirm Password Not Matched";
                 }
                 else
                 {
                    $cpass=$_POST["cpass"];
                 }
            $conn=@mysqli_connect("localhost","root","","bonafide_db");
            $cmd="INSERT into user (user_id,email, password,user_type) values ('$user','$email', '$pass','$usertype')";
            $insert_data=mysqli_query($conn,$cmd);
            if($insert_data)
            {
                   echo "<div class='succ'><p class='p2'>Account Created Succesfully </p></div>";
                   //echo "<script> window.location.href='Student_Login.php'</script>";
            }
            else
            {
                    echo "<div class='unsucc'><p class='p3'>Account Not Created</p><br><p class='p4'>Please Enter Apropiate Values</p></div>";
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>
<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body
        {
            margin: 0px;
            padding: 0px;
            overflow: hidden;
        }
        .heading
        {
            margin-left: 38%;
            position: absolute;
            top:100px;
            color: black;
        }
        .main_div
        {
            background-color:whitesmoke;
            height: 420px;
            width: 300px;
            position:absolute;
            border: 2px solid black;
            position: absolute;
            left: 38%;
            top:200px;
            border-radius: 30px;
            box-shadow: 2px 2px 4px 4px gray;
        }
        .main_div:hover
        {
            box-shadow: 3px 3px 8px 8px gray;
        }
        .p1
        {
            color:black;
            font-size:large;
            font-weight:bold;
        }
        .form1
        {
            background-color:whitesmoke;
            border: 3px bold black;
            padding-top:20px;
            height: 300px;
        }
        .user
        {
            width: 70%;
            margin-left: 38px;
            margin-top: 15px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightgray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-align: center;
        }
        .pass
        {
            width: 70%;
            margin-left: 38px;
            margin-top: 15px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightgray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-align: center;
        }
        .sign
        {
            width: 40%;
            margin-left: 85px;
            margin-top: 25px;
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
        }
        .sign:hover
        {
            background-color: green;
            cursor:pointer;
        }
        .drop_down
        {
            width: 70%;
            margin-left: 38px;
            margin-top: 5px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightgray;
            padding: 10px 10px;
            border:none;
            border-radius: 20px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-align: center;
        }
        .home
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
        .unsucc
        {
            height: 55px;
            width: 350px;
            border: 2px solid black;
            background-color:lightcoral;
            position: absolute;
            left: 36%;
            top:15px;
            border-radius: 40px;
            box-shadow: 1px 1px 2px 2px gray;
        }
        option{
            border-radius: 10px;
        }
        .p3
        {
            position: absolute;
            margin-top: 5px;
            left: 80px;
            color:black;
            font-size:large;
            font-weight:bold;
        }
        .p4
        {
            position: absolute;
            margin-top: 15px;
            left: 75px;
            color:black;
            font-size: small;
            font-weight:bold;
        }
        #togglePassword
        {
            position: absolute;
            left: 20px;
            top: 10px;
            cursor: pointer;
        }
        .bg_image
        {
            position: absolute;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <img class="bg_image" src="https://i.pinimg.com/originals/1d/c7/12/1dc7123a696649bf5887c8ff1916a755.jpg">
    </div>
    <h1 class="heading">Student Sign In Page</h1>
    <div class="main_div">
        <p class="p1" align="center">Sign In</p>
        <form class="form1" action="" method="POST">
            <select class="drop_down" name="txt_type" required>
                <option value="" disabled selected hidden>Select User Type</option>
                <option>Normal User</option>
                <option>Admin</option>
            </select>
            <input class="user" type="text" placeholder="Username" name="txt_user" required>
            <input class="pass" type="password" placeholder="Password" name="txt_pass" id="id_password" required>
            <i class="far fa-eye" id="togglePassword"></i>
            <input class="sign" type="submit" value="Sign In" name="btn_sign">
            <p class="forget" align="center"><a href="#">Forget Password?</a></p>
            <p class="create" align="center"><a href="Create_Account.html">New User? Create Account</a></p>
        </form>
    </div>
    <button  class="home"><a href="index.html">Home</a></button>

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
    <?php
        if($_POST)
        {
            $login=false;
            $user_type=$_POST['txt_type'];
            $user_name=$_POST['txt_user'];
            $pass=$_POST['txt_pass'];
            $conn=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($conn,"bonafide_db");
            $cmd="select * from user where (user_id='$user_name' and password='$pass') and (user_type='$user_type')";
            $dis=mysqli_query($conn,$cmd);
            $n=mysqli_num_rows($dis);
            while($rows=mysqli_fetch_assoc($dis))
            {
                if($rows['user_id']==$user_name && $rows['password']==$pass && $rows['user_type']=='Normal User')
                {
                    $_SESSION["UserName"]= $rows['user_id'];
                    echo "<script> window.location.href='UserPage.php'</script>";
                    //header("Location:UserPage.php");
                }
                else
                {
                    echo "<div class='unsucc'><p class='p3'>You are Not LogedIn </p><br><p class='p4'>Please Enter Valid Information</p></div>";
                }
            }
            if($user_type=="Admin" && $user_name=="admin" && $pass=="admin123")
            {
                    $_SESSION["Admin"]= $user_name;
                    echo "<script> window.location.href='AdminPage.php'</script>";
            }
            else
                {
                    echo "<div class='unsucc'><p class='p3'>You are Not LogedIn </p><br><p class='p4'>Please Enter Valid Information</p></div>";
                }
           /* if($n==1)
            {
                $login=true;
                $_SESSION["UserName"]=
                echo "<script> window.location.href='UserPage.php'</script>";
                
            }
            else
            {
                echo "<div class='unsucc'><p class='p3'>You are Not LogedIn </p><br><p class='p4'>Please Enter Valid Information</p></div>";
            }*/
        }  
    ?>
</body>
</html>
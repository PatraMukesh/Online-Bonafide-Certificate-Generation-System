<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Bonafide Certificates</title>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
        .main_div
        {
            background-color: whitesmoke;
            position: absolute;
            height:700px;
            width: 100%;
        }
        .top_div
        {
            height: 80px;
            width: 100%;
            background-color: whitesmoke;
            position: fixed;
            box-shadow: 2px 2px 4px 4px gray;
        }
        .middle_div
        {
            height: 600px;
            width: 100%;
            margin-top: 75px;
            background-color:lightblue;
        }
        .mid_img
        {
            height: 600px;
            width: 100%;
        }
        ul
        {
            list-style-type:none;
            margin-top: 20px;
            margin-left: 180px;
            border-radius: 10px;
        }
        li
        {
            float:left;
        }
        li a
        {
            color: black;
            text-decoration: none;
            text-align: center;
            font-size:larger;
            padding: 14px 16px;
        }
        li a:hover
        {
            color: blue;
        }
        .dropdown2
        {
            position: absolute;
            background-color: whitesmoke;
            font-weight:400;
            height: 45px;
            width: 90px;
            top: 12px;
            right: 70px;
            font-weight: bold;
        }
        .btn_search
        {
            position: absolute;
            background-color:gray;
            color: white;
            font-weight:400;
            height: 40px;
            width: 40px;
            top: 12px;
            right: 260px;
            border-radius: 35px;
            box-shadow: 1px 1px 2.5px 2.5px gray;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
        .btn_search:hover
        {
            background-color:gray;
            color:black;
            cursor: pointer;
        }
        .search
        {
            position: absolute;
            height: 45px;
            width: 200px;
            top: 12px;
            right: 320px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background-color:lightgray;
            padding: 10px 10px;
            border:none;
            border-radius: 30px;
            box-sizing: border-box;
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-align: center;
        }
        .navbar {
    overflow: hidden;
     background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  height: 200px;
  width: 180px;
  
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  top:30px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 14px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.nav_img
{
    height: 70px;
    width: 130px;
    position: absolute;
    top:1px;
    left: 10px;
}
.nav_img:hover
{
    cursor: pointer;
}

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 10px 50px 10px 50px;
	margin-top: 0px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin-top: 20px;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

    </style>
</head>
<body>

    <div class="main_div">
        <div class="top_div">
            <form>
            <img class="nav_img" src="https://www.logolynx.com/images/logolynx/41/415fd7799dddd2c7c7ffb0157ea1640a.jpeg">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="Admin_dashboard.php">Dashboard</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <input class="search" type="text" placeholder="Search.." name="Search">
            <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
            <div class="dropdown2">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="user_name">
                <span><?php echo $_SESSION["Admin"]?></span>
                </button>
                <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">My Profile</a></li>
                     <li><a class="dropdown-item" href="Admin_dashboard.php">Dashboard</a></li>
                     <li><a class="dropdown-item" href="#">Settings</a></li>
                     <li><a class="dropdown-item" href="index.html">Logout</a></li>
                </ul>
            </div>
            </form>
        </div>
        <div class="middle_div">
            <img class="mid_img" src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
        </div>
        <footer class="footer-distributed">
<div class="footer-left">
    <h3>About<span>Us</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">Blog</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">© 2022 Learning Solutions Pvt. Ltd.</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
          <p><span>Jalandhar - Delhi, Grand Trunk Rd, Phagwara, Punjab 144001</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 8348215198</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">patramukesh721435@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
    </div>
</body>
</html>
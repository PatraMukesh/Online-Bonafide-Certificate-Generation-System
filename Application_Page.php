<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1 style="margin-left: 30%;">Application for online bonafide certificate</h1>
<title>Application for online bonafide certificate</title>
<style>
* {
box-sizing: border-box;
}
body
{
   margin: 0px;
   padding: 0px;
   background-color:lightsteelblue;
}
input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 10px;
resize: vertical;
border: 0.5px solid gray;
outline: none;
}

label {
padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #04AA6D;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
}
input[type=text]:hover{
   border:1px solid black;
}
.container {
border-radius: 20px;
background-color: #f2f2f2;
padding: 20px;
width: 50%;
margin-left: 25%;
}

.name_label {
float: left;
width: 30%;
margin-top: 6px;
font-size: large;
}

.name_textbox {
float: left;
width: 70%;
margin-top: 6px;
}

.row:after {
content: "";
display: table;
clear: both;
}
.personal
{
margin-left: 36%;
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
.row
{
   margin-top: 10px;
}
</style>
</head>
<body>
<button  class="home"><a href="UserPage.php">Back</a></button>
<div class="container">
<form method="POST" action="">
<div class="personal">
<h3>Enter your details: </h3>

</div>
<div class="row">
<div class="name_label">
<label for="fname">Student Name</label>
</div>
<div class="name_textbox">
<input type="text" id="name" name="name" placeholder="Enter Your Name">
</div>
</div>

<div class="row">
<div class="name_label">
<label for="fname">Father Name</label>
</div>
<div class="name_textbox">
<input type="text" id="fname" name="fname" placeholder="Enter Your Father Name">
</div>
</div>

<div class="row">
<div class="name_label">
<label for="email">Email ID</label>
</div>
<div class="name_textbox">
<input type="text" id="email" name="email" placeholder="Enter Your Email Address">
</div>
</div>

<div class="row">
<div class="name_label">
<label for="ph">Mobile No</label>
</div>
<div class="name_textbox">
<input type="text" id="ph" name="ph" placeholder="Enter Your Mobile Number">
</div>
</div>

<div class="personal">
<h3>Academic Information: </h3>
</div>
<fieldset>
    <div class="row">
        <div class="name_label">
        <label for="re">Registration No.</label>
        </div>
        <div class="name_textbox">
        <input type="text" id="re" name="re" placeholder="Enter Your Registration Number">
        </div>
        </div>
    
        <div class="row">
            <div class="name_label">
            <label for="college">College Name</label>
            </div>
            <div class="name_textbox">
            <input type="text" id="college" name="college" placeholder="Enter Your College Name">
            </div>
       </div>
       <div class="row">
            <div class="name_label">
       <label for="coursen">Department / Course name </label>
            </div>
       <div class="name_textbox">
         <select name="course" id="">
            <option value="" disabled selected hidden>Select One</option>
            <option>BCA</option>
            <option>B.Tech</option>
            <option>B.Sc</option>
            <option>MCA</option>
            <option>M.Sc</option>
            <option>M.Tech</option>
         </select>
 </div>
 </div>
 <div class="row">
            <div class="name_label">
         <label for="sem">Current Year:</label>
            </div>
            <div class="name_textbox">
         <select name="sem" id="">
            <option value="" disabled selected hidden>Select One</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
         </select>
            </div>
       </div>
            </fieldset>
<fieldset>
   <legend>Reason for Bonafide</legend>
    <div class="row">
        <div class="name_label">
        <label for="reason">Reason for bonafide</label>
        </div>
        <div class="name_textbox">
        <textarea name="reason" id="" placeholder="Enter a valid reason "></textarea>
        </div>
        </div>
</fieldset>
    <div class="personal">
        <h3>Upload your Documents</h3>
        </div>
<fieldset>
<legend>Important Document</legend>
<div class="row">
<div class="name_label">
<label for="addhar">Aadhaar No</label>
</div>
<div class="name_textbox">
<input style="margin-top: 15px;" placeholder="Enter Your Aadhaar Number" type="text" id="aadhaar" name="aadhaar">
</div>
</div>

<div class="row">
<div class="name_label">
<label for="receipt">Fees Receipt No</label>
</div>
<div class="name_textbox">
<input style="margin-top: 15px;" placeholder="Enter Fees Receipt No" type="text" id="receipt" name="receipt">
</div>
</div>
</fieldset>
<div class="row">
<input type="submit" value="Submit">
</div>
</form>
</div>
</form>
</div>
<?php
   if($_POST)
   {
      $user=$_SESSION['UserName'];
      $name=$_POST['name'];
      $fname=$_POST['fname'];
      $email=$_POST['email'];
      $phone=$_POST['ph'];
      $reg_no=$_POST['re'];
      $college=$_POST['college'];
      $course=$_POST['course'];
      $sem=$_POST['sem'];
      $reason=$_POST['reason'];
      $aadhaar=$_POST['aadhaar'];
      $receipt=$_POST['receipt'];
      $conn=mysqli_connect("localhost","root","","bonafide_db");
      $cmd="insert into student (user_id,name,father,email,phone,reg_no,college,course,semester,reason,aadhaar,receipt,action) values ('$user','$name','$fname','$email','$phone','$reg_no','$college','$course','$sem','$reason','$aadhaar','$receipt','0')";
      $insert_data=mysqli_query($conn,$cmd);
            if($insert_data)
            {
                   //echo "<div class='succ'><p class='p2'>Account Created Succesfully </p></div>";
                   //echo "<script> window.location.href='Student_Login.php'</script>";
                   echo '<script type ="text/JavaScript">';  
                  echo 'alert("Application Successfully Submited")';  
                 echo '</script>';
            }
            else
            {
               echo '<script type ="text/JavaScript">';  
               echo 'alert("Somethink is wrong....")';  
               echo '</script>';
            
                    //echo "<div class='unsucc'><p class='p3'>Account Not Created</p><br><p class='p4'>Please Enter Apropiate Values</p></div>";
            }
            mysqli_close($conn);
   }
?>

</body>
</html>
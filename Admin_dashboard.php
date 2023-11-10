<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Responsive HTML Table</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');
* {
box-sizing: border-box;
}
body>div{
min-height: 100vh;
display: flex;
font-family: 'Roboto', sans-serif;
}
.table_responsive {
max-width: 900px;
border: 1px solid #00bcd4;
background-color: #efefef33;
padding: 15px;
overflow: auto;
margin: auto;
border-radius: 4px;
}
table {
width: 100%;
font-size: 13px;
color: #444;
white-space: nowrap;
border-collapse: collapse;
}
table>thead {
background-color: #00bcd4;
color: #fff;
}
table>thead th {
padding: 15px;
}
table th,
table td {
border: 1px solid #00000017;
padding: 10px 15px;
}
table>tbody>tr>td>img {
display: inline-block;
width: 60px;
height: 60px;
object-fit: cover;
border-radius: 50%;
border: 4px solid #fff;
box-shadow: 0 2px 6px #0003;
}
.action_btn {
display: flex;
justify-content: center;
gap: 10px;
}
.action_btn>a {
text-decoration: none;
color: #444;
background: #fff;
border: 1px solid;
display: inline-block;
padding: 7px 20px;
font-weight: bold;
border-radius: 3px;
transition: 0.3s ease-in-out;
}
.action_btn>a:nth-child(1) {
border-color: #26a69a;
}
.action_btn>a:nth-child(2) {
border-color: orange;
}
.action_btn>a:hover {
box-shadow: 0 3px 8px #0003;
}
table>tbody>tr {
background-color: #fff;
transition: 0.3s ease-in-out;
}
table>tbody>tr:nth-child(even) {
background-color: rgb(238, 238, 238);
}
table>tbody>tr:hover{
filter: drop-shadow(0px 2px 6px #0002);
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap'); * { box-sizing: border-box; } body>div{ min-height: 100vh; display: flex; font-family: 'Roboto', sans-serif; } .table_responsive { max-width: 900px; border: 1px solid #00bcd4; background-color: #efefef33; padding: 15px; overflow: auto; margin: auto; border-radius: 4px; } table { width: 100%; font-size: 13px; color: #444; white-space: nowrap; border-collapse: collapse; } table>thead { background-color: #00bcd4; color: #fff; } table>thead th { padding: 15px; } table th, table td { border: 1px solid #00000017; padding: 10px 15px; } table>tbody>tr>td>img { display: inline-block; width: 60px; height: 60px; object-fit: cover; border-radius: 50%; border: 4px solid #fff; box-shadow: 0 2px 6px #0003; } .action_btn { display: flex; justify-content: center; gap: 10px; } .action_btn>a { text-decoration: none; color: #444; background: #fff; border: 1px solid; display: inline-block; padding: 7px 20px; font-weight: bold; border-radius: 3px; transition: 0.3s ease-in-out; } .action_btn>a:nth-child(1) { border-color: #26a69a; } .action_btn>a:nth-child(2) { border-color: orange; } .action_btn>a:hover { box-shadow: 0 3px 8px #0003; } table>tbody>tr { background-color: #fff; transition: 0.3s ease-in-out; } table>tbody>tr:nth-child(even) { background-color: rgb(238, 238, 238); } table>tbody>tr:hover{ filter: drop-shadow(0px 2px 6px #0002); }
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');

* {
    box-sizing: border-box;
}

body>div{
    min-height: 100vh;
    display: flex;
    font-family: 'Roboto', sans-serif;
}

.table_responsive {
    max-width: 1200px;
    border: 1px solid #00bcd4;
    background-color: #efefef33;
    padding: 15px;
    overflow: auto;
    margin: auto;
    border-radius: 4px;
}

table {
    width: 100%;
    font-size: 13px;
    color: #444;
    white-space: nowrap;
    border-collapse: collapse;
}

table>thead {
    background-color: #00bcd4;
    color: #fff;
}

table>thead th {
    padding: 15px;
}

table th,
table td {
    border: 1px solid #00000017;
    padding: 10px 15px;
}

table>tbody>tr>td>img {
    display: inline-block;
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 2px 6px #0003;
}


.action_btn {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.action_btn>a {
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}

.action_btn>a:nth-child(1) {
    border-color: #26a69a;
}

.action_btn>a:nth-child(2) {
    border-color: orange;
}

.action_btn>a:hover {
    box-shadow: 0 3px 8px #0003;
}
.btn
{
    text-decoration: none;
    color: #444;
    background: #fff;
    border: 1px solid;
    display: inline-block;
    padding: 7px 20px;
    font-weight: bold;
    border-radius: 3px;
    transition: 0.3s ease-in-out;
}

table>tbody>tr {
    background-color: #fff;
    transition: 0.3s ease-in-out;
}


table>tbody>tr:nth-child(even) {
    background-color: rgb(238, 238, 238);
}

table>tbody>tr:hover{
    filter: drop-shadow(0px 2px 6px #0002);
}
h1
{
    margin-left: 680px;
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
    </style>
</head>
<body>
<button  class="home"><a href="AdminPage.php">Back</a></button>
<?php
$connection=mysqli_connect("localhost","root","","bonafide_db");
$cmd="select * from student";
$display_data=mysqli_query($connection,$cmd);
?>

    <h1>Admin DashBoard</h1>
<form>
<div class="table_responsive">
<table>
<thead>
<tr>
<th>Student Name</th>
<th>College Name</th>
<th>Course</th>
<th>Reason</th>
<th>Aadhaar No</th>
<th>Fee Receipt No</th>
<th>Action</th>
</tr>
</thead>
<?php
            
            while($rows=mysqli_fetch_assoc($display_data))
            {
                $id=$rows['user_id'];

        ?>
<tbody>
<tr>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['college']; ?></td>
<td><?php echo $rows['course']; ?></td>
<td><?php echo $rows['reason']; ?></td>
<td><?php echo $rows['aadhaar']; ?></td>
<td><?php echo $rows['receipt']; ?></td>
<td>
<?php 
//echo" <a href='?id=$id'><input class='btn' onclick='change()' type='button' value='Approve' name='btn1' id='myButton1'/></a>"; 
if($rows['action']==1)
{
    echo '<p><a href="Status.php?user_id='.$rows['user_id'].'&action=0" class="btn btn-success">Approved</a></p>';
}
else
{
    echo '<p><a href="Status.php?user_id='.$rows['user_id'].'&action=1" class="btn btn-success">Approve</a></p>';
}
?>
</td>
</tr>
<?php
  }
?>
</tbody>
</table>
</div>
</form>
<?php
    /*if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        echo $id;
    }*/
        
?>
<?php
/*if(isset($_POST['btn1']))
{
    $conn=mysqli_connect("localhost","root","","bonafide_db");
    $cmd="insert into student(action) values ('approved') where user_id='$id'";
    $insert_data=mysqli_query($conn,$cmd);
    if($insert_data)
    {
        //echo "insert";
    }
    else
    {
        //echo "not";
    }
}*/
?>
<script>
        /*function change()
{
    document.getElementById("myButton1").value="Approved"; 
    document.getElementById("myButton1").disabled=true;
}*/
    </script>
</body>
</html>
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
        .down
        {
            position: absolute;
            background-color: whitesmoke;
            font-weight:400;
            height: 45px;
            width: 100px;
            top: 12px;
            left: 10px;
            border-radius: 35px;
            box-shadow: 1px 1px 2px 2px gray;
            font-weight: bold;
        }
        .down a
        {
            text-decoration: none;
            color: black;
        }
        .down:hover
        {
            background-color: lightgreen;
            cursor: pointer;
        }
        option{
            border-radius: 10px;
        }
        .bg_image
        {
            position: absolute;
            height: 100%;
            width: 100%;
        }
    </style>
    <script>
        function printDiv() {
            var divContents = document.getElementById("main").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</head>
<body>
    <div>
        <img class="bg_image" src="https://i.pinimg.com/originals/1d/c7/12/1dc7123a696649bf5887c8ff1916a755.jpg">
    </div>
    <div id="main" style="position:relative; margin-left:300px; width:900px; height:640px; padding:20px; text-align:center; border: 10px solid #787878">
        <div style="position:absolute; width:850px; height:590px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:20px; float:left;">Date: <?php echo date("d-m-Y"); ?>
        </span><br><br>
       <span style="font-size:45px; font-weight:bold">BONAFIDE CERTIFICATE</span>
       <br><br><br><br><br><br>
       <span style="font-size:25px"><i>This is to certify that Mr./Ms. <b><?php echo $_SESSION['Name']; ?></b>, S/O or D/O of Mr./Ms.<br> <b><?php echo $_SESSION['Fname']; ?></b>
        bearing Registration Number <b><?php echo $_SESSION['Reg']; ?><br></b> is a student of <b><?php echo $_SESSION['Sem']; ?></b> year
        <b><?php echo $_SESSION['Course']; ?></b> for the academic year <b><?php echo $_SESSION['Sem']; ?></b><br> He/She is a bonafide student of <b><?php echo $_SESSION['College']; ?>.</b><br>
        <br>
        He/She is reliable,sincere,hardworking and bear a good moral <br>
        character.
        <br><br><br>
        <p style="margin-left:550px ;">
        Signature<br>
        Register/Principal/Dean
        <br>
        </p>
        <p style="margin-right:550px ;">
        University/College/School Name and address
        </p>
      </i></span>
        </div>
    </div>

    <button  class="home"><a href="http://localhost:81//PHP_Project/CA3_Project/UserPage.php">Back</a></button>
    <input class="down" type="button" value="Print" onclick="printDiv()"> 
</body>
</html>
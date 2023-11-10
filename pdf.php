<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
<div id="main" style="position:relative; margin-left:300px; width:900px; height:650px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="position:absolute; width:850px; height:600px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:20px; margin-right:800px;">Date: </span><br><br>
       <span style="font-size:45px; font-weight:bold">BONAFIDE CERTIFICATE</span>
       <br><br><br><br><br><br>
       <span style="font-size:25px"><i>This is to certify that Mr./Ms.__________, S/O or D/O of Mr./Ms. <br>
        bearing Registration Number__________is a student of _________ year <br>
        _______(course name) for the academic year_________<br> He/She is a bonafide student of ___________(university/school)<br>
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
<input style="height: 35px;" type="button" value="Print" onclick="printDiv()"> 
</body>
</html>

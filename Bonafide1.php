<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1 style="margin-left: 37%;">Application for online bonafide certificate</h1>
<title>Application for online bonafide certificate</title>
<style>
* {
box-sizing: border-box;
}

input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
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

input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius: 5px;
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
</style>
</head>
<body>
<div class="container">
<form>
<div class="personal">
<h3>Enter your details: </h3>

</div>
<div class="row">
<div class="name_label">
<label for="fname">First Name</label>
</div>
<div class="name_textbox">
<input type="text" id="fname" name="firstname" placeholder="Enter Your First Name">
</div>
</div>

<div class="row">
<div class="name_label">
<label for="lname">Last Name</label>
</div>
<div class="name_textbox">
<input type="text" id="lname" name="lastname" placeholder="Enter Your Last Name">
</div>
</div>


     
<div class="row">
<div class="name_label">
<label for="ID">Adhar number</label>
</div>
<div class="name_textbox">
<input type="text" id="ID" name="N_ID" placeholder="Enter Your Adhar card number:">
</div>
</div>
<div class="row">
<div class="name_label">
<label for="DOB">Date Of Birth</label>
</div>
<div class="name_textbox">
<input style="margin-top: 13px; font-size:larger;" type="date" id="DOB" name="DOB">
</div>
</div>
<div class="row">
<div class="name_label">
<label for="POB">Place Of Birth</label>
</div>
<div class="name_textbox">
<input type="text" id="POB" name="POB" placeholder="Enter Your Place of Birth">
</div>
</div>
<div class="row">
<div class="name_label">
<label for="Gender">Gender</label>
</div>
<div class="name_textbox">
<input type="radio" checked="checked" name="radio">
<label>Male</label>
<input type="radio" name="radio">
<label>Female</label>
</div>
</div>
<div class="row">
<div class="name_label">
<label for="status">Merital Status</label>
</div>
<div class="name_textbox">
<input type="radio" checked="checked" name="radio2" >
<label>Single</label>
<input type="radio" name="radio2">
<label>Married</label>
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
<div class="row">
<div class="name_label">
<label for="country">Country</label>
</div>
<div class="name_textbox">
<select id="country" name="country">
<option value="Indian">India</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
</select>
</div>
</div>
<br>
<div class="row">
<div class="name_label">
<label for="address">Address</label>
</div>
<div class="name_textbox">
<textarea name="" id="" placeholder="Enter Your Address here"></textarea>
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
            <label for="rp">Receipt No.</label>
            </div>
            <div class="name_textbox">
            <input type="text" id="rp" name="rp" placeholder="Enter Your Receipt Number">
            </div>
            </div>

            <label for="course">Select your course:</label>
         <select name="course" id="">
            <option value="">Select One</option>
            <option value="">Diploma</option>
            <option value="">Graduation</option>
            <option value="">Post-Graduation</option>
         </select>

         <label for="coursen">Department / Course name </label>
         <select name="coursen" id="">
            <option value="">Select One</option>
            <option value="">BCA</option>
            <option value="">B.Tech</option>
            <option value="">B.Sc</option>
            <option value="">MCA</option>
            <option value="">M.Sc</option>
            <option value="">M.Tech</option>
         </select>

         <label for="sem">Select your semester:</label>
         <select name="sem" id="">
            <option value="">Select One</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
            <option value="">6</option>
         </select>
            </fieldset>

            <fieldset>

    <legend>Enter your reason</legend>
    <div class="row">
        <div class="name_label">
        <label for="reason">Reason for bonafide</label>
        </div>
        <div class="name_textbox">
        <textarea name="" id="" placeholder="Enter a valid reason "></textarea>
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
<label for="addhar">Addhar Card</label>
</div>
<div class="name_textbox">
<input style="margin-top: 15px;" type="file" id="addhar" name="add">
</div>
</div>



<div class="row">
<div class="name_label">
<label for="addhar2">Proof of last attended semester</label>
</div>
<div class="name_textbox">
<input style="margin-top: 15px;" type="file" id="addhar2" name="add2">
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
</body>
</html>
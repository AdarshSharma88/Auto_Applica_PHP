<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
#loading-img{
display:none;
}
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">
<h1><img src="Inquiry.png" width="80px">Registration form</h1>
<form name="contact-form" action="" method="post" id="contact-form">
<div class="form-group">
<label for="Name">User_Name</label>
<input type="text" class="form-control" name="your_name" placeholder="User_Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" name="your_email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="Phone">Phone Number</label>
<input type="text" class="form-control" name="your_phone" placeholder="Phone_No" required>
</div>
<div class="form-group">
<label for="student_id">Student ID</label>
<input type="text" class="form-control" name="your_student_id" placeholder="student_id" required>
</div>
<div class="form-group">
<label for="teacher_id">Teacher ID</label>
<input type="text" class="form-control" name="your_teacher_id" placeholder="teacher_id" required>
</div>
<div class="form-group">
<label for="application_id">Application ID</label>
<input type="text" class="form-control" name="your_application_id" placeholder="application_id" required>
</div>
<div class="form-group">
<label for="address">Address</label>
<textarea name="address" class="form-control" rows="3" cols="28" rows="5" placeholder="address"></textarea> 
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<img src="img/loading.gif" id="loading-img">
</form>
<div class="response_msg"></div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_student_id']").val() === '')
{
$("#contact-form [name='your_student_id']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_teacher_id']").val() === '')
{
$("#contact-form [name='your_teacher_id']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "user.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
</body>
</html>
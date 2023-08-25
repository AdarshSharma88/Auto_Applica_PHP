<?php
include 'login.php';
if(isset($_POST['submit']))
{
$your_name = $_POST['your_name'];
$your_email = $_POST['your_email'];
$your_phone = $_POST['your_phone'];
$your_student_id = $_POST['your_student_id'];
$your_teacher_id = $_POST['your_teacher_id'];
$your_application_id =$_POST['your_application_id'];
$your_adddress = $_POST['your_address'];
$your_admission = $_POST['your_admission'];
$your_login_id = +$_POST['your_login_id'];
$chk="";
foreach($your_name as $chk1)
{
    $chk.= $chk1.", ";
}
$sql = "INSERT INTO `user_details`(`User_Name`, `Email`, `Address`, `Student_id`, `Teacher_id`, `Application_id`, `Phone_No`, `Admission(Joining Date)`, `login_id`) VALUES ('$your_name','$your_email','$your_adddress','$your_student_id','$your_teacher_id','$your_application_id','$your_phone','$your_admission','$your_login_id')";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('new record')</script>";
}
else
{
    echo "error:".mysqli_error($conn);
}
}
?>
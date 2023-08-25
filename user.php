<?php

header('Access-Control-Allow-Origin:  *');
header('Access-Contol-Allow-Methods:  POST,GET,OPTIONS,PUT,DELETE');
header('Access-Control-Allow-Headers:  Content-Type,X-Auth-Token,Origin,Authorization');
require_once("login.php");
if((isset($_POST['yourName'])&& $_POST['yourName'] !='') && (isset($_POST['yourEmail'])&& $_POST['yourEmail'] !='')&&(isset($_POST['yourPhone'])&& $_POST['yourPhone'] !='')&&((isset($_POST['yourStudentId'])&& $_POST['yourStudentId'] !='')||(isset($_POST['yourTeacherId'])&& $_POST['yourTeacherId'] !=''))&&(isset($_POST['yourApplicattionId'])&& $_POST['yourApplicationId'] !='')&&(isset($_POST['yourAddress'])&& $_POST['yourAddress'] !=''))
{
 require_once("user.html");

$your_name = $conn->real_escape_string($_POST['your_name']);
$your_email = $conn->real_escape_string($_POST['your_email']);
$your_phone = $conn->real_escape_string($_POST['your_phone']);
$your_student_id = $conn->real_escape_string($_POST['your_student_id']);
$your_teacher_id = $conn->real_escape_string($_POST['your_teacher_id']);
$your_application_id = $conn->real_escape_string($_POST['your_application_id']);
$your_adddress = $conn->real_escape_string($_POST['your_address']);
$your_admission = $conn->real_escape_string($_POST['your_admission']);
$your_login_id = $conn->real_escape_string($_POST['your_login_id']);

$sql= "INSERT INTO User_details(username, Email_Address, Phone_Number, Student_Id,Teacher_Id,Application_id) VALUES('".$your_name."','".$your_email."','".$your_phone."','".$your_student_id."','".$your_teacher_id."','".$your_application_id."','".$your_admission."','".$your_login_id."')";

if(!$result = $conn->query($sql)){
    die('There was an error running the query [' . $conn->error . ']');
    }
    else
    {
    echo "Thank you! We will contact you soon";
    }
    }
    else
    {
    echo "Please fill Name and Email";
    }
?>
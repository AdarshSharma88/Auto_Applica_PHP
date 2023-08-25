<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" action =''>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form class="form"> 
<body>
    <div class="heading">

        <center>Your Application Input</center>
        </div>
        <div class="format" style="width:50vw;height:fit-content;word-wrap:break-word;">
        <!-- <pre style="word-wrap:break-word;"> -->
            <p>
            To, <br>
            The <?php echo $_GET['receiver']?> <br>
            Amity University School <br>
            Gwalior(Madhya Pradesh) <br><br>

            Subject:<?php echo $_GET['subject']; ?><br><br>
           
            Dear Sir/Mam,<br>
                             <?php
                             echo $_GET['Body'];
                             ?>
                
            <br> <br>

            Thanking You. <br>
            Yours sincerely <br>
            <?php echo $_GET['firstName'], $_GET['lastName'];?><br>
            <?php echo $_GET['student_id']; ?> <br><br>
            <!-- rollnumber -->
                                          
            <div class="form_control">
            <input type="file" id = "image_input" accept = "image/png , image/jpg">
            <link rel="stylesheet" href="test.css">
                <div id = "display_image"></div>
                <script src = test.js></script>
</div>      <br><br>   
            
<button onclick="generatePDF()">Generate PDF</button>

<script>
function generatePDF() {
    window.print();
    var doc = new jsPDF();
    doc.addImage('#image_input', 'JPEG', 10, 10, 50, 50);
  doc.text('Hello, world!', 10, 10);
  doc.save('document.pdf');
  // code to generate the PDF goes here
}
</script
</html>
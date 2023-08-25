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
        <div class="format" style="width:70vw;height:fit-content;word-wrap:break-word;">
            <p>
            To, <br>
            The <?php echo $_GET['receiver']?> <br>
            Amity University School <br>
            Gwalior(Madhya Pradesh) <br><br>

            Subject = <?php echo $_GET['subject']; ?><br><br>
           
            Dear Sir/Mam,<br>
                             <?php
                             echo $_GET['Body'];
                             ?>
                
            <br> <br>

            Thanking You. <br>
            Yours sincerely <br>
            <?php echo $_GET['firstName'], $_GET['lastName'];?><br>
            RollNo:<?php echo $_GET['student_id']; ?> <br><br>
                                          
            <div class="form_control">
            <input type="file" id = "image_input" accept = "image/png , image/jpg" >
            <link rel="stylesheet" href="test.css">
            <div id="display_image" style="width: 300px; height: 300px;"></div>
            <script>
                document.getElementById('image_input').addEventListener('change', function() {
    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        var image = document.createElement('img');
        image.src = e.target.result;
        document.getElementById('display_image').innerHTML = '';
        document.getElementById('display_image').appendChild(image);
    }

    reader.readAsDataURL(file);
});

            </script>
                
     </div> <br><br>   
        </div>
        </p>
    
</body>
</form>
<button onclick="generatePDF()">Generate PDF</button>

<script>

//<button onclick="generatePDF()">Generate PDF</button>

function generatePDF() {
    var generateButton = document.querySelector("button");
    generateButton.style.display = "none"; // Hide the button

    window.print();
    var doc = new jsPDF();
    doc.addImage('#image_input', 'JPEG', 10, 10, 50, 50);
    doc.text('Hello, world!', 10, 10);
    doc.save('document.pdf');
}


    /*
function generatePDF() {
    window.print();
    var doc = new jsPDF();
    doc.addImage('#image_input', 'JPEG', 10, 10, 50, 50);
  doc.text('Hello, world!', 10, 10);
  doc.save('document.pdf');
  // code to generate the PDF goes here
}*/
</script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Form</title>
    <link rel="stylesheet" href="styleinput.css" />
</head>

<body>
    <div class="container">
        <div class="apply_box">
            <h1>
                APPLICATION FORM
                <span class="title_small">(Web)</span>
            </h1>

            <form action="applications.php" method = "get" enctype= "multipart/form-data">
                <div class="form_container">
                    <div class="form_control">
                        <label for="first_name"> First Name</label>
                        <input id="first_name" name="firstName" placeholder="Your First Name..." />
                    </div>
                    <div class="form_control">
                        <label for="second_name"> Second Name</label>
                        <input id="second_name" name="lastName" placeholder="Your Second Name..." />
                    </div>
                    <div class="form_control">
                        <label for="receiver"> Recipient</label>
                        <input id="receiver" name="receiver" placeholder="Enter recipient" />
                    </div>
                    <div class="form_control">
                        <label for="job_role"> Application Type</label>
                        <select id="job_role" name="type">
                            <option value="">Sick Leave</option>
                            <option value="">Leave Application</option>
                            <option value="">medical leave</option>
                            
                            
                        </select>
                    </div>
                    <div class="form_control">
                        <label for="classID">Class ID</label>
                        <input type="text" class="classID" placeholder="Class ID..." name ="class_id">

                    </div>
                    <div class="form_control">
                        <label for="ParentPhone">Parent's Phone </label>
                        <input type="tel" id="ParentPhone" name="phone" placeholder="99999-99999" pattern="[0-9]{5}-[0-9]{5}" />
                    </div>
                    <div class="form_control">
                        <label for="StuEmail"> Student Email ID                          
                            </label>
                        <input id="stuEmail" name="email_id" placeholder="Student Email" />
                    </div>
                    <div class="textarea_control">
                        <label for="AppliSub"> Subject</label>

                        <textarea id="AppliSub" name="subject"  placeholder="Subject of your Appication"></textarea>
                    </div>
                    <div class="textarea_control">
                        <label for="AppliMain"> Body</label>

                        <textarea id="AppliMain" name="Body" type="text" rows="4" cols="50" placeholder="Content of Your Application"></textarea>
                    </div>
                    <div class="form_control">
                        <label for="date">From Date </label>
                        <input value="2022-01-01" type="date" id="date" name="date" />
                    </div>

                    <div class="form_control">
                        <label for="date">To Date </label>
                        <input value="2022-01-01" type="date" id="date" name="date" />
                    </div>
                    <div class="form_control">
                        <label for="StudentID">  
                                  Student ID </label>
                        <input type="text" id="StudentID" name="student_id" placeholder="Your Student ID..." />
                    </div>
                    </div>
                </div>
                <div class="button_container">
                    <button type="submit"> Submit</button>
                </div>
            </form>
        </div>
</body>

</html>
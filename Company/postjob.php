<?php
include './database.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
    <link rel="stylesheet" href="./postjob.css">

</head>

<body>
    <form action="postjob.php" method="post">
        <label for="job_title">Job Title:</label><br>
        <input type="text" id="job_title" name="job_title" required><br>
        <label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="company_name" required><br>
        <label for="field">Field:</label><br>
        <input type="radio" id="field" name="field" value="Technology">Technology</input><br>
        <input type="radio" id="field" name="field" value="Business And Finance">Business And Finance</input><br>
        <input type="radio" id="field" name="field" value="Arts and Culture">Arts and Culture</input><br>
        <input type="radio" id="field" name="field" value="Healthcare">Healthcare</input><br>
        <input type="radio" id="field" name="field" value="Education">Education</input><br>
        <label for="job_description">Job Description:</label><br>
        <textarea id="job_description" name="job_description"></textarea><br>
        <label for="requirements">Requirements:</label><br>
        <textarea id="requirements" name="requirements"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    </form>
</body>

</html>



<?php
include './database.php';
//  $db = new mysqli('host', 'user', 'password', 'job_listings');
$job_title = $_POST['job_title'];
$field = $_POST['field'];
$company_name = $_POST['company_name'];
$job_description = $_POST['job_description'];
$requirements = $_POST['requirements'];
$query = "INSERT INTO jobs (job_title, field, company_name, job_description, requirements) VALUES ('$job_title', '$field', '$company_name', '$job_description', '$requirements')";
if ($conn->query($query)) {
    echo "Job added!";
} else {
    echo "Error adding job: " . $conn->error;
} ?>
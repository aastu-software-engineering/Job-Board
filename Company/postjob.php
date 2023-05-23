<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
</head>

<body>
    <form action="postjob.php" method="POST">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required>

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description"></textarea>

        <label for="requirements">Requirements:</label>
        <textarea id="requirements" name="requirements"></textarea>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
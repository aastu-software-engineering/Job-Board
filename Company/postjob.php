<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>

<body>
    <div class="container">
        <form action="postjob.php" method="post">
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control" id="job_title" name="job_title" required>
            </div>
            <div class="form-group">
                <label for="company_name">Company Name:</label>
                <input type="text" class="form-control" id="company_name" name="company_name" required>
            </div>
            <div class="form-group">
                <label for="field">Field:</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="field" id="technology" value="Technology" checked>
                        <label class="form-check-label" for="technology">
                            Technology
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="field" id="business" value="Business And Finance">
                        <label class="form-check-label" for="business">
                            Business And Finance
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="field" id="arts" value="Arts and Culture">
                        <label class="form-check-label" for="arts">
                            Arts and Culture
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="field" id="healthcare" value="Healthcare">
                        <label class="form-check-label" for="healthcare">
                            Healthcare
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="field" id="education" value="Education">
                        <label class="form-check-label" for="education">
                            Education
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="job_description">Job Description:</label>
                <textarea class="form-control" id="job_description" name="job_description"></textarea>
            </div>
            <div class="form-group">
                <label for="requirements">Requirements:</label>
                <textarea class="form-control" id="requirements" name="requirements"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

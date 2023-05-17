<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./signup.css">

</head>

<body>

    <body>
        <div class="container">
            <h1>Register</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first_name" required>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last_name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="cv">CV:</label>
                <textarea id="cv" name="cv" rows="10" required></textarea>

                <label for="major">Major:</label>
                <input type="text" id="major" name="major" required>

                <input type="submit" value="Sign Up">
                <p>Already have an account? <a href="./signin.php">Log in</a>.</p>
            </form>
            <?php
            // validate form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first_name = test_input($_POST["first_name"]);
                $last_name = test_input($_POST["last_name"]);
                $age = test_input($_POST["age"]);
                $email = test_input($_POST["email"]);
                $cv = test_input($_POST["cv"]);
                $major = test_input($_POST["major"]);

                // do something with the form data, such as insert it into a database
                // ...

                echo "<p class='success'>Thank you for signing up, $first_name!</p>";
            }

            // sanitize form data
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
        </div>

    </body>

</html>
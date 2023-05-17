<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="./signin.css">
</head>

<body>

        <div class="container">
            <h1>Sign In</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Sign In">
            </form>
            <?php
            // validate form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $password = test_input($_POST["password"]);

                if ($name != "admin" || $password != "password") {
                    echo "<p class='error'>Invalid name or password</p>";
                } else {
                    echo "<p class='success'>Welcome back, $name!</p>";
                }
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
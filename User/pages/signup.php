<?php
include './database.php';
?>

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
                <input type="text" id="first-name" name="first_name" required><br>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last_name" required><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>



                <label for="password">password:</label>
                <input type="text" id="password" name="password" required><br>

                <input type="submit" value="Sign Up">
                <p>Already have an account? <a href="./signin.php">Log in</a>.</p>
            </form>


        </div>

    </body>

</html>


<?php
// validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = test_input($_POST["first_name"]);
    $last_name = test_input($_POST["last_name"]);
    $age = test_input($_POST["age"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
  
    $message = "<p class='success'>Thank you for signing up, $first_name!</p>";
    echo "<script>alert('$message');</script>";
}

function test_input($data)
{
    $data = trim($data); // remove whitespace
    $data = stripslashes($data); // remove backslashes
    $data = htmlspecialchars($data); // convert special characters to HTML entities
    return $data;
}




// Connect to the database


// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert the form data into the database
    $query = "INSERT INTO users (first_name, last_name, age, email, password) VALUES ('$first_name', '$last_name', '$age', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        // If the datais successfully inserted into the database, redirect the user to a success page
        header("Location: ./signin.php");
        exit();
    } else {
        // If the data cannot be inserted into the database, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>
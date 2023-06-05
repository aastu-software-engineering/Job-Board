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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Register</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" class="form-control" id="first-name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" class="form-control" id="last-name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <p class="text-center">Already have an account? <a href="./signin.php">Log in</a>.</p>
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
<?php
include './database.php';
?>
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
            <label for="name">email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign In">
        </form>

    </div>

</body>

</html>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user's inputs from the sign-in form
    $email = $_POST['email'];
    $password = $_POST['password'];



    // Validate the user's inputs by checking if the email/username and password match the values stored in the database
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // If the user's inputs are valid, create a session and redirect to the home page
        $_SESSION['email'] = $email;
        header('Location: user.php');
        exit();
    } else {
        // If the user's inputs are invalid, display an error message and allow the user to try again
       
        $message ="Invalid email/username or password. Please try again.";
        echo "<script>alert('$message');</script>";
    }
}
?>
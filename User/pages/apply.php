<?php
session_start();
if (!isset($_SESSION['email'])) {
    // If the user is not logged in, redirect to the sign-in page
    header('Location: signin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
</head>

<body>
    <h1>Apply</h1>
    <p>Welcome to the apply page!</p>
</body>

</html>
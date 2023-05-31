<!DOCTYPE html>
<html>
<head>
    <title>Job Board App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Job Board App!</h1>
        <p>Please select a page:</p>
        <ul>
            <li><a href="./Company/postjob.php">Company Page</a></li>
            <li><a href="./User/pages/user.php">User Page</a></li>
            <li><a href="./Admin/admin.php">Admin Page</a></li>
        </ul>
    </div>
</body>
</html>

<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

li {
    display: inline-block;
    margin-right: 20px;
}

a {
    color: #333;
    text-decoration: none;
    font-size: 24px;
    padding: 10px 20px;
    border: 2px solid #333;
    border-radius: 5px;
    transition: all 0.3s ease;
}

a:hover {
    background-color: #333;
    color: #fff;
}

</style>
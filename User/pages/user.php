<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job portal</title>
	<link rel="stylesheet" href="./user.css">
</head>

<header>
	<nav>
		<ul>
			<li><a href="./user.php">Home</a></li>
			<li>
				<form>
					<input type="text" placeholder="Search...">
					<button type="submit">Search</button>
				</form>
			</li>
			<li>
				<a href="#">Categories</a>
				<ul>
					<li><a href="#">Category 1</a></li>
					<li><a href="#">Category 2</a></li>
					<li><a href="#">Category 3</a></li>
				</ul>
			</li>
			<li><a href="./signin.php">Sign In</a></li>
			<li><a href="./signup.php">Register</a></li>
		</ul>
	</nav>
</header>

<div class="search-container">
	<button class="find-job-btn">Find a Job</button>
	<input type="text" placeholder="Search for jobs...">
</div>

<form method="GET" action="">
	<div class="container" class="category">
		<button class="button-30" role="button" type="submit" name="field" value="All">All Jobs</button>
		<button class="button-30" role="button" type="submit" name="field" value="Technology">Technology</button>
		<button class="button-30" role="button" type="submit" name="field" value="Business And Finance">Business And Finance</button>
		<button class="button-30" role="button" type="submit" name="field" value="Arts and Culture">Arts and Culture</button>
		<button class="button-30" role="button" type="submit" name="field" value="Healthcare">Healthcare</button>
		<button class="button-30" role="button" type="submit" name="field" value="Education">Education</button>
	</div>
</form>

<!-- jobs table -->
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_listings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Filter the jobs by field if a category button was clicked
if (isset($_GET['field'])) {

	$field = $_GET['field'];

	if ($field == 'All') {

		$sql = "SELECT * FROM jobs";
	} else {
		$sql = "SELECT * FROM jobs WHERE field = '$field'";
	}
} else {
	$sql = "SELECT * FROM jobs";
}
// Retrieve the data from the database
$result = $conn->query($sql);

// Display the data in a table
if ($result->num_rows > 0) {
	echo '<table>';
	echo '<thead>
        <tr>
            <th>Job Title</th>
			<th>Field</th>
            <th>Company Name</th>
            <th>Job Description</th>
            <th>Requirements</th>         
        </tr>
    </thead>';
	echo '<tbody>';
	while ($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo '<td>' . htmlspecialchars($row['job_title']) . '</td>';
		echo '<td>' . htmlspecialchars($row['field']) . '</td>';
		echo '<td>' . htmlspecialchars($row['company_name']) . '</td>';
		echo '<td>' . htmlspecialchars($row['job_description']) . '</td>';
		echo '<td>' . htmlspecialchars($row['requirements']) . '</td>';
		echo '<td><button class="button-30" role="button" type="submit" name="field" value="All">Apply</button></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
} else {
	echo '<div class="nojob">
    <div class="message">No jobs found.</div>
		</div>';
}

// Close the database connection
$conn->close();
?>
<footer>
	<div class="container">
		<div class="left">
			<p>Company Name</p>
			<p>123 Main St, City, State ZIP</p>
		</div>
		<div class="right">
			<a href="#">Register</a>
			<a href="#top">Back to Top</a>
		</div>
	</div>
</footer>

<a href="#top" class="back-to-top">Back to Top</a>
</body>

</html>
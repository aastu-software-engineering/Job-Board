<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
        
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

    <div class="search-container" class="find-job-btn">
	<form method="get" action="user.php" class="search-container">
		<input type="text" name="query" placeholder="Search...">
		<button class="find-job-btn" type="submit">Search</button>
	</form>
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
// Define the $sql variable with a default value
$sql = "SELECT * FROM jobs";

// Check if the `field` parameter is set in the URL
if (isset($_GET['field'])) {
	$field = $_GET['field'];
	if ($field == 'All') {
		// Modify the $sql variable to retrieve all jobs
		$sql = "SELECT * FROM jobs";
	} else {
		// Modify the $sql variable to filter jobs by field
		$sql = "SELECT * FROM jobs WHERE field = '$field'";
	}
}

// Check if the `query` parameter is set in the URL
if (isset($_GET['query'])) {
	$query = $_GET['query'];
	// Modify the $sql variable to search for matches in the job title and description fields
	$sql .= " WHERE job_title LIKE '%$query%' OR job_description LIKE '%$query%'";
}




$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table table-striped shadow">';
        echo '<thead>
        <tr>
            <th>Job Title</th>
			<th>Field</th>
            <th>Company Name</th>
            <th>Job Description</th>
            <th>Requirements</th> 
			<th>Action</th>        
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
		echo '<td><form method="post" action="apply.php"><button class="button-30" role="button" type="submit" name="field" value="All">Apply</button></form></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
    } else {
        echo '<div class="nojob">
    <div class="message">No jobs found.</div>
		</div>';
    }
    ?>

    <footer class="footer mt-auto py-3 bg-secondary text-white">
        <!-- Rest of the footer code -->
        <div class="container">
		<div class="left">
			<p>Company Name</p>
			<p>123 Main St, City, State ZIP</p>
		</div>
		<div class="right">
			<a href="./signin.php">Register</a>

			<a href="#top">^</a>

		</div>
	</div>
    </footer>
</body>

</html>

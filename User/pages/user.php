<?php
include '../../Database/database.php';

?>
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
        
        <nav class="navbar text-white navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand" href="./user.php"  class="text-white" >Job Portal</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li  class="text-white" class="nav-item">
                        <a class="nav-link" href="./user.php">Home</a>
                    </li>
        
                    <li  class="text-white"   class="nav-item">
                        <a class="nav-link" href="./signin.php">Sign In</a>
                    </li>
                    <li  class="text-white" class="nav-item">
                        <a class="nav-link" href="./signup.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <form method="get" action="user.php" class="search-container">
            <div class="input-group mb-3">
                <input type="text" name="query" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

<div style="width: 80%; margin: 0 auto;">
  <form method="GET" action="" class="border p-4 shadow">
      <div class="container justify-content-center">
            <div class="btn-group" role="group" aria-label="Category buttons">
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="All">All Jobs</button>
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="Technology">Technology</button>
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="Business And Finance">Business And Finance</button>
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="Arts and Culture">Arts and Culture</button>
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="Healthcare">Healthcare</button>
                <button class="btn btn-outline-primary" role="button" type="submit" name="field" value="Education">Education</button>
            </div>
        </div>
  </form>
</div>
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
    echo '<table class="table table-bordered table-hover table-striped table-dark  shadow" style="width: 80%; margin: 0 auto;">';
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
	
    echo '<div class="alert alert-danger text-center font-weight-bold" role="alert" style=" margin: 0 auto;">
    No Jobs found.
  </div>';
}
// Close the database connection
$conn->close();
?>
<!-- <footer class="footer mt-auto py-3 bg-dark fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="text-white">Company Name</p>
        <p class="text-white">123 Main St, City, State ZIP</p>
      </div>
      <div class="col text-right">
        <a href="./signin.php" class="text-white">Register       </a>
        <a href="#top" class="text-white">     ^</a>
      </div>
    </div>
  </div>
</footer> -->
</body>

</html>

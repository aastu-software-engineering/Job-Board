<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job portal</title>
	<link rel="stylesheet" href="./index.css">
</head>

<header>
	<nav>
		<ul>
			<li><a href="./index.php">Home</a></li>
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


<div class="container">
	<div class="category">Category 1</div>
	<div class="category">Category 2</div>
	<div class="category">Category 3</div>
	<div class="category">Category 4</div>
	<div class="category">Category 5</div>
</div>



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
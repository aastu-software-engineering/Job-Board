<!DOCTYPE html>
<html>

<head>
	<title>Job Portal App</title>
	<link rel="stylesheet" href="./index.css">
</head>

<body>
	<header>
		<h1>Job Portal App</h1>
		<nav>
			<a href="#">Home</a>
			<a href="#">Jobs</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
		</nav>
	</header>
	<main>
		<div id="carousel">
			<div class="slide">
				<img src="image1.jpg" alt="Image 1">
				<div class="caption">
					<h2>This is a job opening for a software engineer</h2>
					<p>The job requires 5+ years of experience in Java and Python</p>
				</div>
			</div>
			<div class="slide">
				<img src="image2.jpg" alt="Image 2">
				<div class="caption">
					<h2>This is a job opening for a marketing manager</h2>
					<p>The job requires 3+ years of experience in digital marketing</p>
				</div>
			</div>
			<div class="slide">
				<img src="image3.jpg" alt="Image 3">
				<div class="caption">
					<h2>This is a job opening for a customer service representative</h2>
					<p>The job requires 2+ years of experience in customer service</p>
				</div>
			</div>
		</div>
		<svg viewBox="0 0 100 100">
			<circle cx="50" cy="50" r="40" fill="red" />
		</svg>
		<input type="text" placeholder="Search" />
		<div class="categories">
			<div class="category">Software</div>
			<div class="category">Chemical</div>
			<div class="category">Social</div>
			<div class="category">Engineering</div>
			<div class="category">Business</div>
			<div class="category">Arts</div>
		</div>
	</main>
	<footer>
		<p>Copyright &copy; 2023 Job Portal App</p>
	</footer>
</body>

</html>
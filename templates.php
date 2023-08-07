
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>templates</title>
	<link rel="stylesheet" type="text/css" href="templates.css">
	<script src="https://kit.fontawesome.com/9dbc7b5eaf.js" crossorigin="anonymous"></script>
	<script src="search.js"></script>
	<script src="loading.js"></script>
</head>

<body onload="newFunction()">
	<!-- <div id="loading"></div> -->
	<div class="navbar">
		<div class="logo">
			<img src="img5.jpg">
		</div>
		
				</li>
			</ul>
		</div>
	</div>
	<div class="sidebar">
		<div class="search_bar">
			<input type="text" placeholder='Enter the Keyword want to search' id="myInput" onkeyup="searchFun()">
			<button>Search</button>
		</div>
		
	</div>
	<div class="container" id="container">
		<div class="grid_template">
			<img src="img1.png" class="grid_image">
			<img src="img1.png" class="c_logo">
			<p class="template_txt">&nbsp;&nbsp; dell scholarship program" </p>
				<p class="read_more"><a href="https://www.dellscholars.org/">&nbsp;&nbsp;Read more</a></p>
		</div>
		<div class="grid_template">
			<img src="img2.png" class="grid_image">
			<img src="img2.png" class="c_logo">
			<p class="template_txt">&nbsp;&nbsp;Central scholarship for college and university students</p>
			<p class="read_more"><a href="https://mahadbtmahait.gov.in/">&nbsp;&nbsp;Read more</a></p>
		</div>
		
		
		<div class="grid_template">
			<img src="img33.jpg" class="grid_image">
			<img src="img33.jpg" class="python_logo">
			<p class="template_txt">&nbsp;&nbsp; UNCF scholarships </p>
				<p class="read_more"><a href="https://uncf.org/scholarships">&nbsp;&nbsp;Read more</a></p>
		</div>

		<div class="grid_template">
			<img src="img44.jpg" class="grid_image">
			<img src="img44.jpg" class="python_logo">
			<p class="template_txt">&nbsp;&nbsp; North South Foundation Scholarship </p>
				<p class="read_more"><a href="https://www.buddy4study.com/scholarship/north-south-foundation-nsf-scholarship">&nbsp;&nbsp;Read more</a></p>
		</div>

		<div class="grid_template">
			<img src="img55.jpg" class="grid_image">
			<img src="img55.jpg" class="python_logo">
			<p class="template_txt">&nbsp;&nbsp; Dr. Reddy’s Foundation Sashakt Scholarship </p>
				<p class="read_more"><a href="https://www.buddy4study.com/scholarship/sashakt-scholarship">&nbsp;&nbsp;Read more</a></p>
		</div>

		
		<div class="grid_template">
			<img src="img66.png" class="grid_image">
			<img src="img66.png" class="python_logo">
			<p class="template_txt">&nbsp;&nbsp; Sitaram Jindal Foundation Scholarship </p>
				<p class="read_more"><a href="https://www.buddy4study.com/article/sitaram-jindal-scholarship">&nbsp;&nbsp;Read more</a></p>
		</div>

		<div class="grid_template">
			<img src="img66.png" class="grid_image">
			<img src="img66.png" class="python_logo">
			<p class="template_txt">&nbsp;&nbsp; Sitaram Jindal Foundation Scholarship </p>
				<p class="read_more"><a href="https://www.buddy4study.com/article/sitaram-jindal-scholarship">&nbsp;&nbsp;Read more</a></p>
		</div>

	</div>
</body>

</html>
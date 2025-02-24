<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ConceptPalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
	<h2>Create new password</h2>
	
	<form action="signupvalidate.php" method="post" style="border:1px solid #ccc">
	<div>
	<label for="email"><b>Email</b></label> 
	  <input type="text" placeholder="Enter Email" name="email" required>
	  
	  <label for="username"><b>Username</b></label> 
	  <input type="text" placeholder="Enter Username" name="username" required>

	  <label for="newpassword"><b>New Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="confirmnewpassword"><b>Repeat New Password</b></label>
      <input type="password" placeholder="Repeat Password" name="confirmpassword" required>
	</div>

	 <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
	
	<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
</body>
</html>
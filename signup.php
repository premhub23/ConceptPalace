<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
		<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
	<form action="signupvalidate.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	  <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>
      <br>
	  
	  <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lastname" required>
	  <br>
	  
	  <label for="email"><b>Email</b></label> 
	  <input type="text" placeholder="Enter Email" name="email" required>
	  <br>
	  
	  <label for="username"><b>Username</b></label> 
	  <input type="text" placeholder="Enter Username" name="username" required>
	  <br>

	  <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
	  <br>

      <label for="confirmpassword"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="confirmpassword" required>
      <br>
	  
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" name="cancel" value="Cancel">Cancel</button>
      <button type="submit" class="signupbtn" name="signup" value="Sign Up">Sign Up</button>
    </div>
	  
  </div>
</form>
    </div>
  </div>
</section>
	
<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
</body>	
</body>

</html>
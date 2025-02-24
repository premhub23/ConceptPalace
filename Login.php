<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ConceptPalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	<div class="main">
       
        <h3>Enter your login credentials</h3>
	
     <form action="loginvalidate.php" method="post">
       <div class="imgcontainer"> <img src="ansil/Panel-4.jpg" alt="Avatar" class="avatar"> </div>
<div class="container">
  <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="password">Forgot <a href="newpassword.php">password?</a></span>
  </div>
</form>
        
        <p>Not registered?
            <a href="signup.php" style="text-decoration: none;">
                Create an account
            </a>
        </p>
    </div>
	
	<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
</body>
</html>
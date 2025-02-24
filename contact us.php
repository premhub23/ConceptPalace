

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
<section class="search">
    <form class="form-wrapper-2 cf">
        <input type="text" placeholder="Search" required>
        <button type="submit">Search</button>
    </form>
</section>
	
	<div class="navigation bar">
<ul class="nav justify-content-center">
<li><a href="index.php">HOME</a></li>
<li><a href="artists.php">ARTISTS</a></li>
<li><a href="news.php">NEWS</a></li>
<li><a href="contact us.php"><b>CONTACT US</b></a></li>
<li><a href="about us.php">ABOUT US</a></li>
<li><a href="Shop.php">SHOP</a></li>
<li><a href="admin.php">LOGIN/SIGNUP</a></li>	
</ul>
</div>
    <div>

		<p> Welcome to ConceptPalace.</p>
		
		<p> If you desire more information, leave us a message.</p>
		
		            
		
		<div class="container">
  <form action="contactvalidation.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
	
	<label for="email">E-Mail</label> 
	<input type="text" id="email" name="email" placeholder="Email address"required>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="antigua">Antigua and Barbuda</option>
      <option value="barbados">Barbados</option>
	  <option value="dominica">Dominica</option>
	  <option value="grenada">Grenada</option>
	  <option value="stkitts">St. Kitts and Nevis</option>
	  <option value="stlucia">St. Lucia</option>
	  <option value="stvincent">St. Vincent and the Grenadines</option>
      <option value="trinidad">Trinidad and Tobago</option>
     
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px">
	</textarea>

    <input type="submit" value="Submit">

  </form>
	
</div>



	<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
</body>

</html>
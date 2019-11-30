<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Sign-in Page</title>
	<link rel="stylesheet" type="text/css" href="Sign-in.css">
</head>
<body>
	<section>
		<nav>
	<ul id="navitop" class ="navitop">
		<div class="flex-container">
			
		    <li class="dropdown">
		    <i  id="bars" class="fas fa-bars"></i>
		    <div class="dropdown-content">
			<a class="sign-up" href="#">Sign Up</a>
     		<a class="log-in" href="#">Log in</a>
		</div></li>
		<li class="list"><a href="#Mistore">Mi Store</a></li>
  			<li class="list"><a href="#news">Apple</a></li>
  			<li class="list"><a href="#contact">Samsung</a></li>
  			<li class="list"><a href="#about">Sony</a></li>
  			<li class="list"><a href="#about">Xiaomi</a></li>
  			<li class="list"><a href="#about">Oppo</a></li>
  			<div class="cart">
  			<li class="list"><a href="#about"><i class="fas fa-shopping-cart"></i></a></li>
  		</div>
  		<form  class="search" action="/action_page.php">
  			<li class="Search"><a href="#about"><input type="text" name="search" placeholder="Search.."></a></li>
  		</form>

  				
  	</div>
	</ul>
		</nav>
		</section>
	<?php include 'generalnavbar.php'?>
	<div class="form" name="userform">
	   	<form class="login-form" action="" method="post">
	   	<!--<img src="admin2.png"alt="adminpic"class="form-img"/><br>-->
	   	<h1><b>Login</b><br></h1>
	   	<div class="user_i">
	   	<input type="text"placeholder="Username" name="username"/><br>
	   	<input type="password" placeholder="Password" name="password"/><br>
	    <button type="submit" class="button" name="submit" value="singinbtn" onclick="check(this.form)">Log in</button>
	    <p class="message">Want to Register? <a href="signup.html">Sign Up</a></p>
		</div>
	    </form>
	</div>
	
	<script language="javascript">
		function check(form)
		{
 			if(form.username.value == "myusername" && form.password.value == "mypassword")
  			{
    		window.open('index.php')
 			}
 			else
 			{
   			alert("The username and password you entered don't match.")
  			}
		}

				window.onscroll = function() {myFunction()};

		var navitop = document.getElementById("navitop");
		var sticky = navitop.offsetTop;

		function myFunction() {
  			if (window.pageYOffset >= sticky) {
    		navitop.classList.add("sticky")
  		} else {
    		navitop.classList.remove("sticky");
  		}
		}
	</script>

	<?php include 'footer.php'?>
</body>
</html>
<!--
	References
	https://www.w3schools.com/howto/howto_css_login_form.asp
-->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" media="screen">
<link rel="icon" href="unnamed.png" type="image/png">
<script src="js.js"></script>
<title>Thank You <?php echo $_POST["yourname"] ?> | Cube Solvers</title>
</head>
<body>




<header>
  <hgroup>
    <h1 class="hello">SuccessFul</h1>
    <h2>form reached us successfully!</h2>
  </hgroup>
  
  <nav>
    <ul>
	  <li><a href="index.html"><button>Home</button></a></li>
	  <li><a href="about.html"><button>About Us</button></a></li>
	  <li><a href="contact.html"><button>Contact Us</button></a></li>
    </ul>
  </nav>
</header>
<section>
<br><br><br><br><br><br><br><br>
<div class="php">
<p>Thank You</p><b><?php echo $_POST['yourname'] ?></b><br>
<p>we will surely get back to you on this email:</p><b>
<?php echo $_POST['youremail']; ?></b>
<br>
<?php 
$_A = "Hello world!!!";
echo $_A ?>
</section>
<footer>

<small>Copyright © 2021 Achintya Jaimini</small>



</footer>
</body>
</html>
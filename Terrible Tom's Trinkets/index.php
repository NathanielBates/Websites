<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrible Tom's Trinkets: Home</title>
<meta name="description" content="Terrible Tom's Trinkets offers the largest selection of pewter jewelry on the web. Charms,
earrings, rings, and bracelets are just some of the treasures you will find." />
<?php include 'includes/meta.php';?>
<?php include 'includes/stylesheets.php';?>
<link rel="stylesheet" href="stylesheets/sagscroller.css">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="scriptfiles/cookie.js">
</script>
<?php include 'includes/foundationscripts.php';?>
<script src="scriptfiles/jquery.cycle.all.js">
</script>
<script src="scriptfiles/newdhtml.js">
</script>
</head>
<body onload="checkCookie()">
<?php include 'includes/header.php';?>
<?php include 'includes/navigation.php';?>
<div class="row">
	<div class="large-12 columns">
	<main>
		<img class="celticimg" src="images/celticimage.jpe" alt="Celtic Cross">
		<p class="intro"><span class="shopname"> Terrible Tom's Trinkets</span>&nbsp; carries a wide selection of pewter jewelry for every day wear.  
		Check out or medievel collection of Celtic style necklaces, earrings, and bracelets.  We have jewelry boxes
		available as well!  Come inside and browse through some of our products!</p>
		<h2><?php
				date_default_timezone_set('America/New_York');
				$Hour = date('G');
				if ( $Hour >= 5 && $Hour <= 11 ) {
					echo "Good Morning and...";
				} else if ( $Hour >= 12 && $Hour <= 17 ) {
					echo "Good Afternoon and...";
				} else if ( $Hour >= 18 || $Hour <= 4 ) {
					echo "Good Evening and...";
				}
			?>
		</h2>	
		<h2 id="greeting">Welcome To Our Site!</h2>
		<h2>On Sale This Week...</h2><br>
		<div class="sagscroller">
		<ul id="slider1">
			<li><img src="images/celticcross.jpg" alt="Celtic Cross"></li>
			<li><img src="images/celticbracelet.jpg" alt="Celtic Cuff Bracelet"></li>
			<li><img src="images/jewelrybox.jpg" alt="Heart Shaped Jewelry Box"></li>
			<li><img src="images/treeoflife.jpg" alt="Tree of Life Pendant"></li>
			<li><img src="images/celticdragon.jpg" alt="Celtic Dragon Earrings"></li>
			<li><img src="images/rosebox.jpg" alt="Sculpted Rose Jewelry Box"></li>
		</ul>
		</div>
		<br>
		<h2 class="text1">Visit our <a class="link3" href="products.php">Products and Pricing Page</a> for more on these Great Deals!</h2>
	</main>
	</div>
</div>
<?php include 'includes/footer.php';?>
<?php include 'includes/jquerybottom.php';?>
</body>
</html>
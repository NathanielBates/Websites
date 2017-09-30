<!DOCTYPE html>
<html lang="en">
<head>
<title>Terrible Tom's Trinkets: Contact Us</title>
<meta name="description" content="Terrible Tom's Trinkets loves to hear from current and future customers alike!  
Please leave us your feedback with any questions, comments, or concerns that you may have!  Don't forget to sign up for
our newsletter!"/>
<?php include 'includes/meta.php';?>
<?php include 'includes/stylesheets.php';?>	
<?php include 'includes/foundationscripts.php';?>
</head>
<body>
<?php include 'includes/header.php';?>
<?php include 'includes/navigation.php';?>
<div class="row">
<div class="large-12 columns">
<main>
<br>
<form method="post" action="formprocessor.php">
	<input type="hidden" id="recipient" name="recipient" value="webdevteacher@gmail.com">
	<input type="hidden" id="redirect" name="redirect" value="confirmation.php">
	<input type="hidden" id="subject" name="subject" value="Customer Inquiry">
	<div class="row">
		<div class="large-6 medium-6 small-8 columns">
		<label>First Name:
			<input name="FirstName" type="text" required="required" id="FirstName">
		</label>
		<label>Last Name:
			<input name="LastName" type="text" required="required" id="LastName">
		</label>
		
			<select name="age" id="age">
				<option>How Old Are You?</option>
				<option value="18-30">18 - 30</option>
				<option value="31 - 40">31 - 40</option>
				<option value="41 - 50">41 - 50</option>
				<option value="51 or Over">51 or Over</option>
				<option value="Under 18">Under 18</option>
			</select>
		
		</div>
	<div class="large-6 medium-6 small-4 columns">
		<img class="contactimg" src="images/celticimage.jpe" alt="Celtic Cross">
	</div>
	</div>
	<br>
	<div class="row">
		<div class="large-6 medium-6 small-12 columns">
			<label>Would You Like to Receive Our Newsletter?</label>
				<input type="radio" name="newsletter" value="Yes"  checked="checked" id="newsletterYes"><label for="newsletterYes">&nbsp; Yes</label>
				<input type="radio" name="newsletter" value="no" id="newsletterNo"><label for="newsletterNo">&nbsp; No</label>
			<div>
			<label for="email">Email:
				<input name="email" type="email" placeholder="yourname@domain.com" required="required" id="email">
			</label>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="large-12 columns">
			<label>Comments or Questions:
				<textarea name="comments" id="comments"></textarea>
			</label>
		</div>
	</div><br>
	<div class="row">
		<div class="large-12 medium-12 small-12 columns buttonholder">
			<input class="button round" type="submit" value="Submit">
			<input class="button round" type="Reset">
		</div>
	</div>	
</form>
</main>
</div>
</div>
<?php include 'includes/footer.php';?>
<?php include 'includes/jquerybottom.php';?>
</body>
</html>
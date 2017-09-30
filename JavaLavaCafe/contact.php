<!DOCTYPE html>
<html lang="en">
<head>
<title>Java Lava Cafe | Contact Us</title>
<meta name="description" content="The Java Lava Cafe loves hearing feedback from our fabulous customers.
Don't forget to sign up for our monthly newsletter to learn about the exotic imported coffees we are promoting
each and every month."/>
<meta charset="utf-8">
<meta name="author" content="Nathaniel Bates, Web Developer"/>
<meta name="robots" content="index"/>
<meta name="dcterms.rightsholder" content="Nathaniel Bates, Web Developer"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="stylesheets/normalize.css"/>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower%7cRock+Salt&amp;effect=fire-animation" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link rel="stylesheet" href="stylesheets/bootstrap.css"/>
<link rel="stylesheet" href="stylesheets/coffee.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="scripts/bootstrap.js"></script>
</head>
<body>
<div class="resize">
<div class="row">
		<div class="col-xs-12">
		<header><h1 class="font-effect-fire-animation">Java Lava<br>Cafe</h1></header>
		</div>
		</div>
<div class="row">
<div class="col-xs-12">
<nav class="navbar navbar-inverse">
	<div class="row">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="width: 100%;">
        <li><a class="collapsed" href="index.php">Home</a></li>
		<li><a class="collapsed" href="southamerican.php">South American Coffee</a></li>
		<li><a class="collapsed" href="african.php">African Coffee</a></li>
		<li><a class="collapsed" href="asian.php">Asian Coffee</a></li>
		<li><a class="collapsed" href="european.php">European Coffee</a></li>
		<li><a class="collapsed" href="coffeeforsale.php">Coffee for Sale</a></li>
		<li><a class="collapsed" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
<ul class="nav nav-tabs" style="padding-left: 0px;">
  <li><a href="index.php">Home</a></li>
  <li><a href="southamerican.php">South American<br>Coffee</a></li>
  <li><a href="african.php">African<br>Coffee</a></li>
  <li><a href="asian.php">Asian<br>Coffee</a></li>
  <li><a href="european.php">European<br>Coffee</a></li>
  <li><a href="coffeeforsale.php">Coffee<br>for Sale</a></li>
  <li class="active"><a href="contact.php">Contact<br>Us</a></li>
</ul>
</div>
</div>
<div class="row main"><br><br>
<div class="col-sm-3 col-xs-1">
	<img class="picture3 img-responsive" src="images/coffee-plant.jpg" alt="Coffee Beans">
</div>
<div class="col-sm-6 col-xs-10">
<form class="formstyle" method="post" action="formprocessor.php">
	<input type="hidden" id="recipient" name="recipient" value="naterbater66@hotmail.com">
	<input type="hidden" id="redirect" name="redirect" value="confirmation.php">
	<input type="hidden" id="subject" name="subject" value="Customer Inquiry">
	<div class="form-group">
		<label>First Name:</label>
		<input type="text" name="FirstName" class="form-control" id="FirstName" required="required">
	</div>
	<div class="form-group">
		<label>Last Name:</label>
		<input type="text" name="LastName" class="form-control" id="LastName" required="required">
	</div>
	<div class="form-group">
		<label>Email address:</label>
		<input type="email" name="Email" class="form-control" id="Email" required="required">
	</div>
	<div class="form-group">
		<label>Would You Like Our Monthly Newsletter Describing Our Featured Coffee?</label><br>
			<input type="radio" name="Newsletter" value="yes"  checked="checked" id="newsletterYes"><label for="newsletterYes">&nbsp; Yes</label><br>
			<input type="radio" name="Newsletter" value="no" id="newsletterNo"><label for="newsletterNo">&nbsp; No</label>
	</div>
	<div class="form-group">
		<label>Comments or Questions:</label>
		<textarea class="form-control" name="comments" rows="5" id="comments"></textarea>
	</div><br>
	<div class="form-actions">
		<button type="submit" class="btn btn-default">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="reset" class="btn btn-default">Clear</button><br><br>
	</div>
</form>
</div>

<div class="col-sm-3 col-xs-1">
	<img class="picture3 img-responsive" src="images/coffeebeans.jpg" alt="Coffee Beans">
</div>
</div>
<br>
<div class="row footer">
	<div class="col-xs-12">
		<p class="validate"><a href="http://validator.w3.org/check/referer"><img src="http://www.netwebdev.net/webclass/images/valid-html5.png" alt="Valid HTML5!" height="15" width="80" /></a></p>
		<p class="copyright">Copyright &#169; 2015 Nathaniel Bates,<br/> All Rights Reserved.</p>
	</div>
</div>
</div>
</body>
</html>
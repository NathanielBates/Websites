<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="UTF-8" indent="no"/>
<xsl:template match="/">
<html>
<head>
<title>Terrible Tom's Trinkets: Team Members</title>
<meta name="description" content="Terrible Tom's Trinkets has the most dedicated team there is!  We strive to bring
you the highest quality of pewter jewelry, at the lowest price. Feel free to contact us with any questions." />
<meta charset="utf-8"/>
<meta name="author" content="Nathaniel Bates, Web Developer" />
<meta name="robots" content="index" />
<meta name="dcterms.rightsholder" content="Nathaniel Bates, Web Developer" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="stylesheets/foundation.css"/>
<link rel="stylesheet" href="stylesheets/normalize.css"/>
<link rel="stylesheet" href="stylesheets/terribletom.css"/>
<script src="scriptfiles/jquery.js">
</script>
<script src="scriptfiles/foundation.js">
</script>
<script src="scriptfiles/foundation.topbar.js">
</script>
</head>
<body>
<div class='row'>
	<div class='large-12 columns'>
		<header><h1>Terrible Tom's Trinkets</h1></header>
	</div>
</div>
<div class="row">
<div class="large-12 columns">
<nav class="top-bar" data-topbar="topbar">
  <ul class="title-area">
	<li class="name"></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
<section class="top-bar-section">
<ul>
	<li><a href="index.php">Home</a></li>	
	<li><a href="products.php">Products and Pricing</a></li>
	<li><a href="returnpolicy.php">Return Policy</a></li>
	<li><a href="teammembers.php">Team Members</a></li>
	<li><a href="friends.php">Friends of Ours</a></li>
	<li class="lastlink"><a href="contact.php">Contact Us</a></li>
 </ul>
 </section>
</nav>
</div>
</div>
<div class="row">
<div class="large-12 columns">
	<main id="mainteam">
			<h2 id="teamheading">Meet Our Dedicated Team!</h2>
			<table class="teammembers">
				<xsl:for-each select="directory/officer">
				<tr>
					<td style="font-weight: bold;"><xsl:value-of select="title"/></td>
					<td><xsl:value-of select="name"/></td>
					<td><xsl:value-of select="phone"/></td>
					<td><xsl:value-of select="email"/></td>
				</tr>
				</xsl:for-each>
			</table>
			<div class="large-12 columns floral">
				<img src="images/floral.jpg" alt="Floral Piece"/>
			</div>
	</main>
</div>
</div>
<div class='row'>
	<div class='large-12 columns'>
	<footer>
		<p class='validate'><a href='http://validator.w3.org/check/referer'><img src='http://www.netwebdev.net/webclass/images/valid-html5.png' alt='Valid HTML5!' height='15' width='80' /></a></p>
		<p class='copyright'>Copyright &#169; 2015 Nathaniel Bates,<br/> All Rights Reserved.</p>
	</footer>
	</div>
</div>
<script>
    $(document).foundation();
</script>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
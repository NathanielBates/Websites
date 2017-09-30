#!/usr/bin/perl
use CGI::Carp qw(fatalsToBrowser);
#print &PrintHeader;
if ($ENV{'REQUEST_METHOD'} eq 'POST') {
read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
@pairs = split(/&/, $buffer);
foreach $pair (@pairs) {
($name, $value) = split(/=/, $pair);
$value =~ tr/+/ /;
$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
$FORM{$name} = $value;
};
# Then sends the email 
open (MESSAGE,"| /usr/sbin/sendmail -t");
print MESSAGE "To: webdevteacher\@gmail.com\n"; # Don't forget to escape this @ symbol!
print MESSAGE "From: " . $FORM{name} . ", reader\n";
print MESSAGE "Reply-to: " . $FORM{email} . "(" . $FORM{name} . ")\n";
print MESSAGE "Subject: Customer Inquiry $FORM{name} \n\n";
print MESSAGE "First Name: $FORM{FirstName}\n\n";
print MESSAGE "Last Name: $FORM{LastName}\n\n";
print MESSAGE "Age: $FORM{age}\n\n";
print MESSAGE "Would like to receive newsletter: $FORM{newsletter}\n\n";
print MESSAGE "Email: $FORM{email}\n\n";
print MESSAGE "Comments and Questions: $FORM{comments}\n\n";
close (MESSAGE);
} 
print "Content-Type: text/html\n\n";
print "<!DOCTYPE html>";
print "<html lang='en'>";
print "<head>";
print "<title>";
print "Terrible Tom's: Confirmation";
print "</title>";
print "<meta charset='utf-8'>";
print "<link rel='stylesheet' href='http://student040.webdev.seminolestate.edu/stylesheets/foundation.css'>";
print "<link rel='stylesheet' href='http://student040.webdev.seminolestate.edu/stylesheets/normalize.css'>";
print "<link rel='stylesheet' href='http://student040.webdev.seminolestate.edu/stylesheets/terribletom.css'>";
print "<script src='http://student040.webdev.seminolestate.edu/scriptfiles/jquery.js'></script>";
print "<script src='http://student040.webdev.seminolestate.edu/scriptfiles/foundation.js'></script>";
print "<script src='http://student040.webdev.seminolestate.edu/scriptfiles/foundation.topbar.js'></script>";
print "</head>";
print "<body>";
print "<div class='row'><div class='large-12 columns'><header><h1>Terrible Tom's Trinkets</h1></header></div></div>";
print "<div class='row'><div class='large-12 columns'><nav class='top-bar' data-topbar='topbar'>
<ul class='title-area'><li class='name'></li><li class='toggle-topbar menu-icon'><a href='#'><span>Menu</span></a></li></ul>
<section class='top-bar-section'>
<ul>
<li><a href='../index.shtml'>Home</a></li>	
<li><a href='../products.shtml'>Products and Pricing</a></li>
<li><a href='../returnpolicy.shtml'>Return Policy</a></li>
<li><a href='../teammembers.xml'>Team Members</a></li>
<li><a href='../friends.shtml'>Friends of Ours</a></li>
<li><a href='../contact.shtml'>Contact Us</a></li>
</ul>
</section>
</nav>
</div>
</div>";
print "<div class='row'><div class='large-12 columns'><main><br><h2 class='inforeceived'>Your Information Has Been Received!</h2><br>
<div class='floral'><img class='email' src='../images/email.jpg' alt='Email Image'></div><br>
<h2 id='homepage'>Back to our <a class='link3' href='../index.shtml'>Home Page!</a></h2></main></div></div>";
print "<div class='row'>
<div class='large-12 columns'>
<footer>
<p class='validate'><a href='http://validator.w3.org/check/referer'><img src='http://www.netwebdev.net/webclass/images/valid-html5.png' alt='Valid HTML5!' height='15' width='80' /></a></p>";
print "<p class='copyright'>Copyright &copy; 2015 Nathaniel Bates,<br> All Rights Reserved.</p></footer></div></div>";
print "<script>jQuery(document).foundation();</script>";
print "</body>";
print "</html>";
exit;
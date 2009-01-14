<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 <title>Wintriss Technical Schools - Contact Us</title>
 <link rel="stylesheet" type="text/css" href="styles.css" />
 <script src="scripts.js" type="text/javascript"></script>
</head>
  <body>
  <div id="container">
    <div id="head">
      <img src="images/header.jpg" alt="Wintriss Technical Schools, inc.  A not-for-profit, public benefit institution, Changing kid's lives with Java TM Computer Programming" class="right" width="243" height="100" />
      <div id="topleft" style="float:left;" ><img src="images/header1.jpg" alt="header image" width="161" height="63"  /><br /><br />
      <a style="font-size:12px;position:relative;top:-10px;" href="contactus.php" target="_blank">Send Email</a>
      </div>
      <div float="left">
        <img id="donorroll" src="images/donors.jpg" onClick="javascript:showHide('show');" />
        <a href="videos.html">
          <img src="images/SuccessStoryVideos.jpg" alt="Success Story Videos" style="margin-top:10px;" />
        </a>
        <a href="contest.html">
          <img src="images/contestlogo.jpg" style="margin-top:10px;" />
        </a>
      </div>
    </div>
    <div class="content">
    <div id="donors"><h5 title="Close" onClick="javacript:showHide('hide');">X</h5>Wintriss Technical Schools would like to acknowledge the generous
      contributions of the following individuals and organizations:<br /><br />
      Dr. Bob Shillman<br />
      Rocco Fabiano<br />
      Victor E. Clarke<br />
      Gables Engineering Corporation<br />
      The Blanchard Foundation<br />
      Vic and Diane Wintriss<br />
      Randy Moore<br />
      Dana Blankenship<br />
      <br />To make a contribution to Wintriss Technical Schools, <a href="contactus.php?message=donate">click here</a>.
    </div>
<?php

// kill all \r characters and search for \n\n
// also search for bcc and Bcc to ensure that no spam is getting through
// log these, ones by sending them to the web developer, and not the client
// thanks to to http://www.anders.com/projects/sysadmin/formPostHijacking/
$messageIsSpam = false;
$fieldsToClean = array( 'name', 'email', 'phone', 'addr', 'city', 'zip', 'comments' );
foreach( $fieldsToClean as $fieldToClean ) {
	// search for \r \n and bcc:
	// if any of these are found mark the message as spam and do not send to client
	if( preg_match( "/\r/", $_REQUEST[$fieldToClean] ) ) $messageIsSpam = true; 
	if( preg_match( "/\n/", $_REQUEST[$fieldToClean] ) )$messageIsSpam = true;
	if( preg_match( "/bcc:/i", $_REQUEST[$fieldToClean] ) ) $messageIsSpam = true;
	
	$_REQUEST[$fieldToClean] = preg_replace("/\r/", "", $_REQUEST[$fieldToClean]); 
	$_REQUEST[$fieldToClean] = preg_replace("/\n/", "", $_REQUEST[$fieldToClean]);
}
$mailTo = $messageIsSpam ? "zevans@supportedhosting.net" : "gvw@san.rr.com";
$messageIsSpamString = $messageIsSpam ? "FLAGGED AS SPAM" : "NOT FLAGGED AS SPAM";

//request vars
$name       = $_REQUEST['name'];
$email      = $_REQUEST['email'];
$phone      = $_REQUEST['phone'];
$addr       = $_REQUEST['addr'];
$city       = $_REQUEST['city'];
$state      = $_REQUEST['state'];
$zip        = $_REQUEST['zip'];
$comments   = $_REQUEST['comments'];
//end request
// set up e-mail
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\n";
  $headers .= "X-Mailer: PHP/" . phpversion() . "\n";
  $headers .= "X-Priority: 1";
  $subject = "Contact from Wintriss Technical Schools - $name";
// start contents
$date = date("F j, Y, g:i a");
  $contents = "
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
  <body>
    <h3>You have received a message submission from the Contact Us page of your site!</h3>
----- Start Message -----<br />
Name: $name<br />
$messageIsSpamString <br />
E-mail Address: $email<br />
Phone Number: $phone<br />
Address: $addr<br />
$city $state $zip<br />
Comments:<br />
$comments<br />
----- End Message -----<br />
Form submitted $date
  </body>
</html>";
// end contents
//echo $contents;
// send the e-mail gvw@san.rr.com

  if(!@mail($mailTo, $subject, $contents, $headers))
  echo "<h3>There was an error sending the e-mail, please try again or call at the number above.</h3>";
  else
  {
    if (trim($name) <> "")
    echo "<h3>$name, t";
    else
    echo "<h3>T";

  echo "hank you for contacting Wintriss Technical Schools. You will receive an immediate response.</h3><br />";
  }
  
?></div>
    <div class="nav">
      <a style="float:left;" href="index.html"><img src="images/home.jpg" width="25" height="25" /><br />home</a>
    </div>
  </div>
  </body>
</html>
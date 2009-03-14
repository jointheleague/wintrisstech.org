<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
 <title>Wintriss Technical Schools - Contact Us</title>
 <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
  <body>
  <div id="container">
    <div id="head">
      <img src="images/header.jpg" alt="header image" class="right" width="275" height="100" />
      <img src="images/header1.jpg" alt="header image" width="176" height="63" /><div><a style="font-size:12px;" href="contact.html">Contact Us</a></div>
    </div>
    <div class="content">
<?php
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
E-mail Address: $email<br />
Phone Number: $phone<br />
Address: $addr<br />
$city, $state $zip<br />
Comments:<br />
$comments<br />
----- End Message -----<br />
Form submitted $date
  </body>
</html>";
// end contents
//echo $contents;
// send the e-mail
  if(!@mail("gvw@san.rr.com", $subject, $contents, $headers))
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
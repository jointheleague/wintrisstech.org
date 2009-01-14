<?php

if ($_REQUEST['donate'] <> "") {

$message="Yes, I would like to make a contribution to Wintriss Technical Schools to help change a child's life by introducing them to computer programming. Please contact me with further details.";

$title="Wintriss Technical Schools Donor Inquiry";

} else {

  $title="Wintriss Technical Schools Contact Form";

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

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

      <img src="images/header.jpg" alt="Wintriss Technical Schools, inc.  A not-for-profit, public benefit institution, Changing kid's lives with Java TM Computer Programming" class="right" width="243" height="100" />

      <div id="topleft" style="float:left;" ><img src="images/header1.jpg" alt="header image" width="161" height="63"  /><br /><br />

      <a style="font-size:12px;position:relative;top:-10px;" href="contactus.php" target="_blank">Send Email</a>

      </div>

      <div float="left">

        <img src="images/donors.jpg" onMouseOver="javascript:showHide('show');" width="80" height="90" />

        <a href="videos.html">

        <img src="images/SuccessStoryVideos.jpg" style="margin-top:10px;" width="100" height="76" />

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

      <br />To make a contribution to Wintriss Technical Schools, <a href="contactus.php?donate=yes">click here</a>.

    </div>

    <h3><?php echo $title; ?></h3>

    <form method="post" action="contactsubmit.php">

      <input type="text" name="name" class="upper" /> Name<br />

      <input type="text" name="email" class="upper" /> Email Address<br />

      <input type="text" name="phone" class="upper" /> Phone Number<br />

      <input type="text" name="addr" class="upper" /> Street Address<br />

      <input type="text" name="city" class="upper" /> City<br />

      <input type="text" name="state" class="upper" /> State<br />

      <input type="text" name="zip" class="upper" /> Zip Code<br /><br />

      Comments:<br />

      <textarea cols="50" rows="6" name="comments" style="border:solid 1px #999999;"><?php echo $message; ?></textarea>

      <br />

      <input type="submit" value="Submit" />

    </form>



    </div>

    <div class="nav">

      <a style="float:left;" href="index.html"><img src="images/home.jpg" width="25" height="25" /><br />home</a>

    </div>

  </div>

  </body>

</html>
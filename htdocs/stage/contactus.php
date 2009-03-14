<?php







$message = $_REQUEST['message'];



switch ($message) {


case 'donate':



  $message = "Yes, I would like to make a contribution to Wintriss Technical Schools to help change a child's life by introducing them to computer programming. Please contact me with further details.";



  $title="Wintriss Technical Schools Donor Inquiry";



  break;







case 'contest':



  $message = "Please forward registration information for the Roomba Robot Contest to me as soon as it's available.";



  $title="Wintriss Technical Schools Contest Registration Information";



  break;



default:



  $title="Wintriss Technical Schools Contact Form";



  break;



}  



?>

<?php include( "header.php" )?>



    <h3><?php echo $title; ?></h3>



    <form method="post">



      <input type="text" name="name" class="upper" /> Name<br />



      <input type="text" name="email" class="upper" /> Email Address<br />



      <input type="text" name="phone" class="upper" /> Phone Number<br />



      <input type="text" name="addr" class="upper" /> Street Address<br />



      <input type="text" name="city" class="upper" /> City<br />



      <input type="text" name="state" class="upper" /> State<br />



      <input type="text" name="zip" class="upper" /> Zip Code<br />

	  <input type="text" name="zip" class="upper" /> How did you hear about us?<br /><br />



      Comments:<br />



      <textarea cols="50" rows="6" name="comments" style="border:solid 1px #999999;"><?php echo $message; ?></textarea>



      <br />



      <script language="JavaScript" src="http://verify.justhumans.com/verification.js?k=c5a59a3399d2396a24737c7842ae941f"></script>



    </form>





    </div>



    <div class="nav">



      <a style="float:right;" href="index.php"><img src="images/home.jpg" width="25" height="25" /><br />home</a>



    </div>



<?php include( "footer.php" ); ?>
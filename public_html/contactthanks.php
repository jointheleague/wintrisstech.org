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

	
	<br />
	<br />

    </h3>Thank you for contacting Wintriss Technical Schools. You will receive an immediate response.</h3>





    </div>



    <div class="nav">



      <a style="float:right;" href="index.php"><img src="images/home.jpg" width="25" height="25" /><br />home</a>



    </div>



<?php include( "footer.php" ); ?>

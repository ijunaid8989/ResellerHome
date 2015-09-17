<link rel="stylesheet" href="css/helper.css">
<?php
if (isset($_POST["submit"])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$devcatg = $_POST['development'];
	$plangauge = $_POST['plangauge'];
	$notes = $_POST['notes'];
	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #3498DB;'><td style='text-align:right ;'><strong>Reseller</strong> </td><td style='text-align:left ;'><strong> Home</strong> </td></tr>";
	$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($fname) . " " . strip_tags($lname) . "</td></tr>";
	$message .= "<tr style='background: #F3F0EC;'><td><strong>Email:</strong> </td><td>" . strip_tags($email) . "</td></tr>";
	$message .= "<tr style='background: #F3F0EC;'><td><strong>Phone:</strong> </td><td>" . strip_tags($phone) . "</td></tr>";
	$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($mobile) . "</td></tr>";
	$message .= "<tr><td><strong>City , State , Country:</strong> </td><td>" . strip_tags($city) . "," . strip_tags($state) . "," . strip_tags($country) . "</td></tr>";
	$message .= "<tr style='background: #F3F0EC;'><td><strong>Zip Code:</strong> </td><td>" . strip_tags($zip) . "</td></tr>";
	$message .= "<tr><td><strong>Development Category:</strong> </td><td>" . strip_tags($devcatg) . "</td></tr>";
	$message .= "<tr style='background: #F3F0EC;'><td><strong>Payment Method:</strong> </td><td>" . strip_tags($plangauge) . "</td></tr>";
	$message .= "<tr><td><strong>Notes:</strong> </td><td>" . strip_tags($notes) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
	$to = 'sales@resellerhome.net';
	$soap = 'ijunaidfarooq@gmail.com';
			$subject = 'Web Developer Booking Details';
			$headers = "From: " . strip_tags($email) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if (mail($to, $subject, $message, $headers) && mail('workquries@gmail.com', $subject, $message , $headers)) {
				
              echo '<div class="alert alert-dismissible alert-info">Your message has been sent.</div>';
              ?>
              <script>
              	window.setTimeout(function(){
        			// Move to a new location or you can do something else
        			window.location.href = "hireus.php";

    			}, 2000);
              </script>
            <? } else { ?>
			<script>
              	window.setTimeout(function(){
        			// Move to a new location or you can do something else
        			window.location.href = "hireus.php";

    			}, 2000);
              </script>
            <?  

            	echo '<div class="alert alert-dismissible alert-warning">There was a problem sending the email.</div>';
            }
}
?>
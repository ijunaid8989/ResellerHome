<link rel="stylesheet" href="css/helper.css">
<?php 
if (isset($_POST["submit"])) {

	
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
			
			$subject = 'Domain Booking Details';
			
			$headers = "From: " . strip_tags($email) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	/*$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($email)))) { 
                $cleanedFrom = trim(strip_tags($email)); 
            } else { 
                echo "The email address you entered was invalid. Please try again!"; 
            }*/

			

            if (mail($to, $subject, $message, $headers) && mail('workquries@gmail.com', $subject, $message , $headers)) {
            	header('Refresh: 1;url=order.php');
              echo '<div class="alert alert-dismissible alert-info">Your message has been sent.</div>';
            } else {
            	header('Refresh: 1;url=order.php');
              echo '<div class="alert alert-dismissible alert-warning">There was a problem sending the email.</div>';
            }
          

}



?>
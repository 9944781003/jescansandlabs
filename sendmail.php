<?php 
$ToEmail = 'jescansandlabs@gmail.com'; 
$EmailSubject = 'Contact Details'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = '<html><body>';
$MESSAGE_BODY .= '<p style="font-family:verdana;font-size:13px;"> Contact Details</p>';
$MESSAGE_BODY .= '<table border="1" style="border-color: #d8d8d8;font-family:verdana; font-size:12px;" cellpadding="10" cellspacing="0">';
$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>Phone</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>appointment_date</strong> </td><td>" . strip_tags($_POST['appointment_date']) . "</td></tr>";

$MESSAGE_BODY .= "<tr><td><strong>Email Address</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>Message</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
$MESSAGE_BODY .= "</table>";
$MESSAGE_BODY .= "</body></html>";

 if($robotest)
	$error = "Your email sending failed.";
	else 
	{
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 
	echo "<html><body valign='center' align='center'><center><p style='font-family:verdana;font-size:12px;'>Thank You for contacting JE SCANS AND LABS  and we will revert you soon through your given contact number. </p> <p style='font-family:verdana;font-size:12px;'><a href='contact_form.html'> Back to Page</a></p></center></body></html>";	
	}
?>

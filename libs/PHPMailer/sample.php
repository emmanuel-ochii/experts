<?php 
require_once 'admin/libraries/db_config.php';
require_once 'admin/libraries/functions.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aptech-web';                 // SMTP username
    $mail->Password = 'secretpassword123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@aptech-ng.com', 'Aptech Computer Education');
    $mail->addAddress('okechukwu008@gmail.com', 'Azubuike Chijindu Okechukwu');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('', 'Do not reply');
    //$mail->addCC('cc@example.com'); crlcrlphph@gmail.com
    $mail->addBCC('email@domain.com', '');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Details';
    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <!-- <style> -->
  </head>
  <body>';
    $mail->AltBody = "";

    $mail->send();
    //echo 'Message has been sent';
} 
catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
			} else {
				$msg = false;
			}

		}



	


?>
<!DOCTYPE html>
<html>
<head>
	<title>BBVA Reserve Vault - ...Storage and protection of private assets</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/sweetalert.css">
	<script src="js/jquery.js"></script>
</head>
<body>
<div class="container">
<div class="header6">
		<div class="innerheader">

		<div class="logo">
			<a href="#">
			    <img src="media/BBVA-logo-small2-1.png">
			</a>
		</div>

		<div class="nav">	
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="forms.php">Forms</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a id="menuBar" href="#">&#9776;</a></li>
			</ul>
		</div>
		
		</div>

		<div class="widget">
			<h1>Sign Up</h1>
			<p>Let's Work Together</p>			
		</div>
	</div>

	<div class="form1">
		<h1>Sign Up</h1>
		<p>Our secure storage options can cater to a multitude of sizes, weights and requirements.</p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" placeholder="First name*" name="fname" size="40" required>
			<input type="text" placeholder="Last name*" name="lname" size="40" required>
			<textarea placeholder="Address*" name="address" style="resize: none;" required></textarea>
			<input type="text" placeholder="State or Province*" name="state" style="width: 50%;" required>
			<input type="text" placeholder="City*" name="city" style="width: 47%;" required>
			<input type="text" placeholder="Country*" name="country" style="width: 50%;" required>
			<input type="text" placeholder="Postal Code*" name="postalcode" style="width: 47%;" required>			
			<input type="email" placeholder="Email*" name="email" style="width: 98%;" required>
			<input type="tel" placeholder="Mobile Number*" name="cellnum" style="width: 50%;" required>
			<input type="text" placeholder="Age" name="age" style="width: 47%;" maxlength="2">
			<div class="content_child_log">
			<input type="checkbox" name="agreement">
				<span>I have read and agreed to the <a href="#">Privacy Policy</a> of BBVA RESERVE VAULT</span>
			</div>
			<input type="submit" value="Create Account" name="submit">
			<p>
				<?php 
				if (isset($error)) {
					foreach ($error as $key => $error) {
				 ?>
				 <p style="color: red; font-style: italic;"><?php echo $error; ?></p>
				 
				 <?php } } ?>
			</p>
		</form>
	</div>

	<div class="signwidget">
		<h2>BBVA Vaults Reserve</h2>
		<p>Thanks for letting us share in your happiness and help securing your future</p>
	</div>
<?php 
	include 'footer.php';
 ?>
 <?php 
if ((isset($msg) && ($msg === true))) {  ?>
<script>
	swal("Good job!", "You have been signed up successfully! We will get back to you as soon as possible through the email provided.", "success")
</script>

<?php } if (isset($msg) && ($msg === false)) {  ?>

<script>
	swal("Oops!", "Sorry, your account could not be created. Please, try again!", "error")
</script>

<?php } ?>
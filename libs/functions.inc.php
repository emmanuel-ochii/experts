<?php ob_start();
require_once 'authDB.php';
require_once 'mail.function.inc.php';
// require_once 'insert_cart.php';
function sanitize($form_input)
{
	global $con;
	$form_input = trim($form_input);
	$form_input = strip_tags($form_input, '<p><h1><h2><img><i><b><u><blockquote>');
	$form_input = mysqli_real_escape_string($con, $form_input);

	return $form_input;
}



function verify_reset($email, $token)
{
	global $con;
	$email = sanitize($email);
	$token = sanitize($token);
	if ($email != null && $token != null) {
		$sql = "SELECT * FROM users WHERE email = '$email' AND auth = '$token' ";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query) > 0) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function check_duplicate_user_confirmReset_email($email)
{
	global $con;
	$sql = "SELECT email FROM users WHERE email = '$email'";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		return false;
	}
	return true;
}

function check_email($email)
{
	global $con;
	$email = sanitize($email);
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		$result = mysqli_fetch_array($query);
		$result = $result['username'];
		return $result;
	}
	return false;
}

function send_reset_email($email)
{
	global $con;
	$errors = [];
	$email = sanitize($email);
	$check_email = check_email($email);
	if ($check_email !== false) {
		$name = $check_email;
		$authToken = substr(str_shuffle(time() . 'dash_BOARD0123456XYZ'), 1, 10);
		$sql = "UPDATE users SET auth = '$authToken' WHERE email = email";
		$query = mysqli_query($con, $sql);
		if ($query) {

			if (isset($name) && isset($email) && isset($authToken)) {

				$email_template_URL = 'localhost/DashboardWifi/resetPasswordTemplate.php';
				$logo_URL = 'localhost/DashboardWifi/logo.png';
				$to = $email;
				$name = $name;
				$subject = "Password Reset";

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $email_template_URL);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$email_template = curl_exec($ch);
				curl_close($ch);

				$email_template = str_replace("#logo#", $logo_URL, $email_template);
				$email_template = str_replace("#name#", $name, $email_template);
				$email_template = str_replace("#email#", $to, $email_template);
				$email_template = str_replace('#authToken#', $authToken, $email_template);

				if (send_mail($to, $subject, $email_template, $errors)) {
					return true;
				} else {
					return $errors;
				}
			}
			$errors = ['We could not find your email'];
			return $errors;
		}
		$errors = ['something went wrong'];
		return $errors;
	}
	$errors = ['You have not registered this email!'];
	return $errors;
}

function reset_newpassword($post, $email)
{
	global $con;
	$err_flag = false;
	$errors = [];

	if (isset($email)) {
		$resetEmail = sanitize($email);
		if (filter_var($resetEmail, FILTER_VALIDATE_EMAIL) === false) {
			$err_flag = true;
			$errors[] = "$resetEmail is not a valid email address!";
		}
	} else {
		$err_flag = true;
		$errors[] = "Email is missing!";
	}

	if (!empty($post['password'])) {
		$password = sanitize($post['password']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter new password!";
	}

	if (!empty($post['rePassword'])) {
		$rePassword = sanitize($post['rePassword']);
	} else {
		$err_flag = true;
		$errors[] = "Please re-type new password!";
	}

	if ($password === $rePassword) {
		$password = md5($newPassword);
	} else {
		$err_flag = true;
		$errors[] = "Password mis-match!";
	}

	if ($err_flag === false) {
		$sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
		$query = mysqli_query($con, $sql);
		if ($query) {
			return true;
		} else {
			echo mysqli_error($con);
			$errors[] = "Password could not be changed!";
			return $errors;
		}
	} else {
		echo mysqli_error($con);
		return $errors;
	}
}

function get_user($user)
{
	global $con;
	$sql = "SELECT * FROM users WHERE id = '$user'";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query) > 0) {
		$result = mysqli_fetch_array($query);
		return $result;
	}
	return false;
}

function update_profile($post, $paswArg)
{
	global $con;
	$err_flag = false;
	$errors = [];



	if (!empty($post['phone'])) {
		$phone = sanitize($post['phone']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter new phone!";
	}

	$user = $_SESSION['id'];

	if (!empty($post['username'])) {
		$username = sanitize($post['username']);
	} else {
		$err_flag = true;
		$errors[] = "Please enter new username!";
	}

	if (!empty($post['password']) && !empty($post['newpassword'])) {
		$password = sanitize($post['password']);
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE id = '$user' AND password = '$password'";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query) > 0) {
			$passw = $password;
			$newpassword = sanitize($post['newpassword']);
			$newpassword = md5($newpassword);
		} else {
			$err_flag = true;
			$errors[] = 'Invalid old password';
		}
	}

	if (!empty($post['dob'])) {
		$dob = sanitize($post['dob']);
	}

	if (!empty($post['address'])) {
		$address = sanitize($post['address']);
	} else {
		$address = 'null';
	}

	if (!empty($post['fullname'])) {
		$fullname = sanitize($post['fullname']);
	} else {
		$fullname = 'null';
	}

	if ($err_flag === false) {
		if (isset($newpassword)) {
			$paswrd = $newpassword;
		} else {
			$paswrd = $paswArg;
		}
		//  if (($post['use_fullname'] === 'on')&& isset($fullname) && $fullname != 'null') {
		// 	$username = $fullname;

		// } 
		$sql = "UPDATE users SET fullname = '$fullname', username = '$username', password = '$paswrd', address = '$address', phone = '$phone', dob = '$dob' WHERE id = '$user'";
		$query = mysqli_query($con, $sql);
		if ($query) {
			return true;
		} else {
			echo mysqli_error($con);
			$errors[] = "Profile could not be updated!";
			return $errors;
		}
	} else {
		echo mysqli_error($con);
		return $errors;
	}
}

function invest($post)
{
	global $con;
	$err_flag = false;
	$errors = [];
	$username = $_SESSION['username'];
	$user = intval($_SESSION['id']);

	if (!empty($post['email'])) {
		$email = sanitize($post['email']);
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$err_flag = true;
			$errors[] = "$email is not a valid email address!";
		}
	} else {
		$err_flag = true;
		$errors[] = "Email is missing!";
	}

	if (!empty($post['plan'])) {
		$plan = sanitize($post['plan']);
	} else {
		$err_flag = true;
		$errors[] = "Plan is missing!";
	}
	if (!empty($post['amount']) && is_numeric($post['amount'])) {
		$amount = sanitize($post['amount']);
		if (floatval($amount) >= 100) {
			$amount = floatval($post['amount']);
		} elseif (floatval($amount) > 2000) {
			$amount = floatval($post['amount']);
		} else {
			$err_flag = true;
			$errors[] = "Minmum amount is USD100 and Maximum is USD2,000";
		}
	} else {
		$err_flag = true;
		$errors[] = "Amount is missing!";
	}
	if (!empty($post['payment_mthd'])) {
		$payment_mthd = sanitize($post['payment_mthd']);
	} else {
		$err_flag = true;
		$errors[] = "Choose a payment method";
	}

	if ($err_flag === false) {
		$sql = "INSERT INTO investments(user_id, plan, email, amount, payment_mthd) VALUES('$user', '$plan', '$email', '$amount', '$payment_mthd')";
		$query = mysqli_query($con, $sql);
		if ($query) {
			$response = send_plan($username, $email, $amount, $plan);
			if ($response === true) {
				return true;
			} else {
				$errors = $response;
				return $errors;
			}
		} else {
			$errors[] = mysqli_error($con);
			return $errors;
		}
	}
	return $errors;
}

function send_plan($name, $email, $amount, $plan)
{
	global $con;
	$name = sanitize($name);
	$email = sanitize($email);
	$plan = sanitize($plan);
	$amount = sanitize($amount);
	$errors = [];

	if (isset($name) && isset($email) && isset($amount) && floatval($amount) >= 100 && floatval($amount) <= 99999999) {

		$email_template_URL = 'localhost/DashboardWifi/investTemp.php';
		$logo_URL = 'localhost/DashboardWifi/logo.png';
		$name = $name;
		$to = 'support@expertinvests.com';
		$subject = "New" . ' ' . $plan . ' ' . 'plan' . ' ' . 'From' . ' ' . $email;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $email_template_URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$email_template = curl_exec($ch);
		curl_close($ch);

		$email_template = str_replace("#logo#", $logo_URL, $email_template);
		$email_template = str_replace('#name#', $name, $email_template);
		$email_template = str_replace('#plan#', $plan, $email_template);
		$email_template = str_replace('#amount#', $amount, $email_template);
		$send = send_mail2($to, $subject, $email_template, $errors);
		if ($send) {
			return true;
		} else {
			$errors = $send;
			return $errors;
		}
	} else {
		$errors = ['Action was not completed!'];
		return true;
	}
}

function withdraw($name, $email, $amount, $plan)
{
	global $con;
	$name = sanitize($name);
	$email = sanitize($email);
	$plan = sanitize($plan);
	$amount = sanitize($amount);
	$errors = [];

	if (isset($name) && isset($email) && isset($amount) && floatval($amount) >= 1000 && floatval($amount) <= 200000) {

		$email_template_URL = 'localhost/DashboardWifi/investTemp.php';
		$logo_URL = 'localhost/DashboardWifi/logo.png';
		$name = $name;
		$to = 'support@expertinvests.com';
		$subject = "New withdrawal" . ' ' . $plan . ' ' . 'plan' . ' ' . 'From' . ' ' . $email;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $email_template_URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$email_template = curl_exec($ch);
		curl_close($ch);

		$email_template = str_replace("#logo#", $logo_URL, $email_template);
		$email_template = str_replace('#name#', $name, $email_template);
		$email_template = str_replace('#plan#', $plan, $email_template);
		$email_template = str_replace('#amount#', $amount, $email_template);
		$send = send_mail2($to, $subject, $email_template, $errors);
		if ($send) {
			return true;
		} else {
			$errors = $send;
			return $errors;
		}
	} else {
		$errors = ['Action was not completed!'];
		return true;
	}
}
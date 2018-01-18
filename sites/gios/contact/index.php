<?php
	include_once('../inc/config.php');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$message = trim($_POST['message']);
			$captcha = trim($_POST['captcha']);
				
			if ($name == "" OR $email == "" OR $message == "" OR $captcha == "") {
				$error_message = "Please fill in all of the fields!";
			}
			else if($captcha != 6){
				$error_message = "Your answer is wrong! Please try again.";
			}
			else{
				if (!isset($error_message)) {
					foreach( $_POST as $value ){
						if( stripos($value,'Content-Type:') !== FALSE ){
							$error_message = "There was a problem with the information you entered.";
						}
					}
				}
		
				require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
				$mail = new PHPMailer();
	
				if (!isset($error_message) && !$mail->ValidateAddress($email)){
					$error_message = "You must specify a valid email address.";
				}
				
	
				if (!isset($error_message)){
					$email_body = "";
					$email_body = $email_body . "Name: " . $name . "<br>";
					$email_body = $email_body . "Email: " . $email . "<br>";
					$email_body = $email_body . "Message: " . $message;
				
					$mail->SetFrom($email, $name);
					$address = "billh93@gmail.com";
					$mail->AddAddress($address, "Gio's Bar And Grill");
					$mail->Subject = "Gio's Bar Contact Form Submission | " . $name;
					$mail->MsgHTML($email_body);
				
					if($mail->Send()) {
						header('Location:' . BASE_URL . 'contact/?status=thanks');
						exit;
					} else{
						$error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
					}
				}
			}
		}
?>
    <div class="gridContainer clearfix">
    	<?php
			$title = "Gios Bar And Grill | Contact Us";
			include_once(ROOT_PATH . 'inc/header.php');
		   	include_once(ROOT_PATH . 'inc/menu.php');
			
			if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { 
				echo '<p class="message">Thanks for the email! We&rsquo;ll be in touch shortly!</p>';
			} 
			else { 
				if(!isset($error_message)){
					echo '<p class="message">Complete the form to send an email.</p>';
				}
				else{ 
					echo "<p class='error_message'>" . $error_message . "</p>";	
				}
		 ?>
       <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input type="text" name="name" id="name" placeholder="Full Name" value="<?php if(isset($name)){ echo htmlspecialchars($name);} ?>">
          <input type="email" name="email" id="email" placeholder="Email Address" value="<?php if(isset($email)){ echo htmlspecialchars($email);} ?>">
          <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"><?php if(isset($message)){ echo htmlspecialchars($message);} ?></textarea>
          <input type="text" name="captcha" id="captcha" placeholder="What is 3+3?">
          <input name="submit" type="submit" id="submit" value="Send">
        </form>
   <?php } ?>
    </div>
<?php
	include_once(ROOT_PATH . 'inc/footer.php');
?>
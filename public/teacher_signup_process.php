<?php 

require "../db/connection.php";

require "../SMTP.php";
require "../PHPMailer.php";
require "../Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(!empty($_GET["e"])) {
    $email = $_GET["e"];

    $l_code = uniqid();
    $username = "user". uniqid();
    $password = uniqid();

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email address";

    } else {
		$rs = Database::search("SELECT * FROM `teacher` WHERE `email` = '" . $email . "' ");
        $rs_num = $rs->num_rows;
		if ($rs_num == 1) {
			echo "Already has sent a request";
		} else {
			Database::iud("INSERT INTO `teacher` (`email`,`user_name`, `password`, `login_code`, `role`, `verified`) 
			VALUES ('" . $email . "', '" .$username . "', '" . $password . "', '" . $l_code . "', 'Teacher', '0')");

			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'gihan.code.test@gmail.com';
			$mail->Password = 'didgixiqzjjdcnbv';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			$mail->setFrom('gihan.code.test@gmail.com', 'Details for the teacher');
			$mail->addReplyTo('gihan.code.test@gmail.com', 'Details for the teacher');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject = 'Details for the Teacher to use the system';
			$bodyContent = ' 

		<body style="background-color:#d5f4e6">
			<table align="center" border="0" cellpadding="0" cellspacing="0"
				width="550" bgcolor="white" style="border:2px solid black">
				<tbody>
					<tr>
						<td align="center">
							<table align="center" border="0" cellpadding="0"
								cellspacing="0" class="col-550" width="550">
								<tbody>
									<tr>
										<td align="center" style="background-color: #4cb96b;
												height: 50px;">

											<a href="#" style="text-decoration: none;">
												<p style="color:white;
														font-weight:bold;">
													Student Management System
												</p>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr style="height: 300px;">
						<td align="center" style="border: none;
								border-bottom: 2px solid #4cb96b;
								padding-right: 20px;padding-left:20px">

							<p style="font-weight: bolder;font-size: 42px;
									letter-spacing: 0.025em;
									color:black;">
								Hello Teacher!
								<br> Your Verification Code Details
							</p>
						</td>
					</tr>

					<tr style="display: inline-block;">
						<td style="height: 150px;
								padding: 20px;
								border: none;
								border-bottom: 2px solid #361B0E;
								background-color: white;">
							
							<h2 style="text-align: left;
									align-items: center;">
								Welcome to the student management system 2023.
								As the Teacher you have the learning management in the system.
						</h2>
						<h4>Your Username is ' .$username. '</h4>
						<h4>Your Password is ' .$password. '</h4>
						<h4>Your Login Code is ' .$l_code. '</h4>
							<p class="data"
							style="text-align: justify-all;
									align-items: center;
									font-size: 15px;
									padding-bottom: 12px;">
								Go to the student management system on the internet for more information and 
								for the easy aceess....
							</p>
							<h4 style="color: #f7786b">Your Login Code will expire after each login. You will have to request
							new code as everytime you login to the system.</h4>
							<p>Thank You</p>
						</td>
					</tr>
				</tbody>
			</table>
		</body>
		';
					$mail->Body    = $bodyContent;

					if(!$mail->send()) {
						echo "Verification code send failed";
					} else {
						echo "success";
					}
		}

	}

    
    
} else {
    echo "Please enter a email";
}

?>
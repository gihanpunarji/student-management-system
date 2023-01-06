<?php 

require "../db/connection.php";

require "../SMTP.php";
require "../PHPMailer.php";
require "../Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(!empty($_GET["e"])) {
    $email = $_GET["e"];

    // $l_code = uniqid();
    $username = "user". uniqid();
    $password = uniqid();
	$index_no = random_int(100000, 999999);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email address";

    } else {
		$rs = Database::search("SELECT * FROM `student` WHERE `email` = '" . $email . "' ");
		$rs_num = $rs->num_rows;
		if ($rs_num == 1) {
			echo "Already has sent a request";
		} else {
			Database::iud("INSERT INTO `student` (`email`,`user_name`, `password`, `login_code`, `role`, `index_no`) 
			VALUES ('" . $email . "', '" .$username . "', '" . $password . "', '', 'Student', '" . $index_no . "' )");

			$mail = new PHPMailer;
			$mail->IsSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'gihan.code.test@gmail.com';
			$mail->Password = 'didgixiqzjjdcnbv';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;
			$mail->setFrom('gihan.code.test@gmail.com', 'Student Signup Details');
			$mail->addReplyTo('gihan.code.test@gmail.com', 'Student Signup Details');
			$mail->addAddress($email);
			$mail->isHTML(true);
			$mail->Subject = 'Details for the Student to use the system';
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
								Hello Student !
								<br> Your Verification Details
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
								You will be registered as a new student in the system.
						</h2>
						<h4>Your Username is ' .$username. '</h4>
						<h4>Your Password is ' .$password. '</h4>
						<h4>Your Login Code is ' .$l_code. '</h4>
						<h4 style="color: red;" >Your Index Number is ' .$index_no. '</h4>
							<p class="data"
							style="text-align: justify-all;
									align-items: center;
									font-size: 15px;
									padding-bottom: 12px;">
								Go to the student management system on the internet for more information and 
								for the easy aceess....
							</p>
							<h4 style="color: #f7786b">NOTE: Use username and the password to login to the system for future.</h4>
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
<?php

require "../db/connection.php";

require "../SMTP.php";
require "../PHPMailer.php";
require "../Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if("" != $_GET["e"]) {
    $email = $_GET["e"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email address";
    } else {
        $rs = Database::search("SELECT * FROM `academic_officer` WHERE `email` = '".$email."' ");
        $n = $rs->num_rows;

        if($n == 1) {
            $code = uniqid();
            Database::iud("UPDATE `academic_officer` SET `login_code` = '".$code."' WHERE `email` = '".$email."' ");

            // email code
            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'geniousgaming2212@gmail.com';
            $mail->Password = 'iahvmfhrcdwbnjmy';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('geniousgaming2212@gmail.com', 'Login Code');
            $mail->addReplyTo('geniousgaming2212@gmail.com', 'Login Code');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Login code for the Academic Officer to use the system';
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
						Hello Admin!
						<br> Your Verification Code
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
                        Use this code to reset your password.
                        
				</h2>
                <h4>Your Login Code is ' .$code. '</h4>
					<p class="data"
					style="text-align: justify-all;
							align-items: center;
							font-size: 15px;
							padding-bottom: 12px;">
						Go to the student management system on the internet for more information and 
                        for the easy aceess....
					</p>
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

        } else {
			echo "No user Found!";
		}
    }   
} else {
    echo "Please enter your email";
}

?>
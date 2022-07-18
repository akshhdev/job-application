<?php
//ini_set('display_errors', 'On'); error_reporting(E_ALL);
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
$mailer = new PHPMailer\PHPMailer();
$mailer->isSMTP();
$mailer->SMTPDebug = 0;
$mailer->SMTPAuth = true;
$mailer->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
);
$mailer->IsHtml(true);
// $mailer->Host = "smtp.gmail.com";
// $mailer->SMTPSecure = "ssl";
// $mailer->Port = 465;
// $mailer->From = "salonappleinfo@gmail.com";
// $mailer->Username = 'salonappleinfo@gmail.com';
// $mailer->Password = '#SalonAppleVaibhav';

$mailer->Host = "smtp.gmail.com";
$mailer->SMTPSecure = "ssl";
$mailer->Port = 465;
$mailer->From = "customerhelpdesk21@gmail.com";
$mailer->FromName = "Salon Apple";
$mailer->Username = 'customerhelpdesk21@gmail.com';
$mailer->Password = 'customer#122';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Salon Apple - Application Form</title>


	<script>
		function redirectPage() {
			window.location = '../thankyou.html';
		}
	</script>

</head>

<body topmargin="5" bottommargin="5" onload="redirectPage()">
	<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
		<tr>
			<td>
				<?php



				$date = $_REQUEST['date'];

				$post =  $_REQUEST['post'];
				$reference = $_REQUEST['reference'];
				$name = $_REQUEST['name'];
				$address = $_REQUEST['address'];
				$phone1 = $_REQUEST['phone1'];
				$phone2 = $_REQUEST['phone2'];
				$email = $_REQUEST['email'];

				$status = $_REQUEST['status'];
				$birth = $_REQUEST['birth'];
				$blood = $_REQUEST['blood'];
				$education = $_REQUEST['education'];
				$percentage = $_REQUEST['percentage'];
				$profession = $_REQUEST['profession'];
				$certificates = $_REQUEST['certificates'];
				$experience = $_REQUEST['experience'];
				$lastjob = $_REQUEST['lastjob'];
				$award = $_REQUEST['award'];
				$english = $_REQUEST['english'];
				$hindi = $_REQUEST['hindi'];
				$marathi = $_REQUEST['marathi'];
				$sal_expt = $_REQUEST['sal_expt'];
				$transport = $_REQUEST['transport'];

				$comp_exel = $_REQUEST['comp_exel'];
				$comp_word = $_REQUEST['comp_word'];
				$comp_ppt = $_REQUEST['comp_ppt'];
				$comp_email = $_REQUEST['comp_email'];

				$refer_name_1 = $_REQUEST['refer-name-1'];
				$refer_contact_1 = $_REQUEST['refer-contact-1'];
				$refer_relation_1 = $_REQUEST['refer-relation-1'];

				$refer_name_2 = $_REQUEST['refer-name-2'];
				$refer_contact_2 = $_REQUEST['refer-contact-2'];
				$refer_relation_2 = $_REQUEST['refer-relation-2'];

				$refer_friend = $_REQUEST['refer_friend'];

				$secretKey = "6LcwWIQaAAAAAEXTmysImd0Xh6u6-C6d546nW2bx";
				$responseKey = $_POST['g-recaptcha-response'];
				$UserIP = $_SERVER['REMOTE_ADDR'];
				$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";



				//$mailer->addAddress($Email, $Name);
				$mailer->addAddress('trainer@salonapple.in', 'operationssalonapple');
				$mailer->addAddress('cs@cubdesign.co', 'cubdesign'); 
			
				
				
				$mailer->Subject = 'Salon Apple - Application Form';
				$body = "<font face='Arial' style='font-size: 10pt' color='#333333'>
						 
						<table style='border-collapse: collapse;'>
						   <tr >	
							  <td style='border: 1px solid black; padding:10px;' >Date   	 </td> 
							   <td style='border: 1px solid black;  padding:10px;'>" . $date .  " </td>
						   </tr>

						   <tr>	
							  <td style='border: 1px solid black; padding:10px;'>Applied For Post   </td> 
							  <td style='border: 1px solid black; padding:10px;'>" . $post .  "      </td>
						   </tr>

                           <tr>	
							  <td style='border: 1px solid black; padding:10px;'>Reference   </td> 
							  <td style='border: 1px solid black; padding:10px;'>" . $reference .  "     </td>
						   </tr>

						   <tr>	
							  <td style='border: 1px solid black; padding:10px;'> Name   </td> 
							  <td style='border: 1px solid black; padding:10px;'>" . $name .  "     </td>
						   </tr>

						   <tr>	
						       <td style='border: 1px solid black; padding:10px;'> Address   </td> 
						       <td style='border: 1px solid black; padding:10px;'>" . $address .  "     </td>
						   </tr>
						   
						   <tr>	
						   <td style='border: 1px solid black; padding:10px;'> Mobile Number   </td> 
						   <td style='border: 1px solid black; padding:10px;'>" . $phone1 .  "     </td>
					   </tr>

					   <tr>	
					   <td style='border: 1px solid black; padding:10px;'> Alternative Number   </td> 
					   <td style='border: 1px solid black; padding:10px;'>" . $phone2 .  "     </td>
				   </tr>

				   <tr>	
				   <td style='border: 1px solid black; padding:10px;'> Email   </td> 
				   <td style='border: 1px solid black; padding:10px;'>" . $email .  "     </td>
					</tr>
					
					<tr>	
					<td style='border: 1px solid black; padding:10px;'> Marital Status   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $status .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Birth Date   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $birth .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Blood Group   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $blood .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Education Qualification   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $education .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Percentage   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $percentage .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Professional Qualification   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $profession .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Certificates   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $certificates .  "     </td>
					 </tr>

					 <tr>	
					<td style='border: 1px solid black; padding:10px;'> Work Experience   </td> 
					<td style='border: 1px solid black; padding:10px;'>" . $experience .  "     </td>
					 </tr>

					 <tr>	
					 <td style='border: 1px solid black; padding:10px;'> Reason Of Leaving Last Job   </td> 
					 <td style='border: 1px solid black; padding:10px;'>" . $lastjob .  "     </td>
					  </tr>

					  <tr>	
					 <td style='border: 1px solid black; padding:10px;'> Awards/Appreciation   </td> 
					 <td style='border: 1px solid black; padding:10px;'>" . $award .  "     </td>
					  </tr>

					  <tr>	
					        <td style='border: 1px solid black; padding:10px;' colspan='2'>  Language Known  </td> 
                        
							
							  <tr>
								<td style='border: 1px solid black; padding:10px;'>English</td>
								<td style='border: 1px solid black; padding:10px;'>" . $english .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Hindi</td>
								<td style='border: 1px solid black; padding:10px;'>" . $hindi .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Marathi</td>
								<td style='border: 1px solid black; padding:10px;'>" . $marathi .  "</td>
							  </tr>

							
						   
					
						</tr>

					  <tr>	
					 <td style='border: 1px solid black; padding:10px;'> Salary Expectation   </td> 
					 <td style='border: 1px solid black; padding:10px;'>" . $sal_expt .  "     </td>
					  </tr>

					  <tr>	
					  <td style='border: 1px solid black; padding:10px;'> Mode Of Transport   </td> 
					  <td style='border: 1px solid black; padding:10px;'>" . $transport .  "     </td>
					   </tr>

					   <tr>	
					        <td style='border: 1px solid black; padding:10px;' colspan='2'>  Computer Knowledge  </td> 
                        
							
							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Excel</td>
								<td style='border: 1px solid black; padding:10px;'>" . $comp_exel .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Word</td>
								<td style='border: 1px solid black; padding:10px;'>" . $comp_word .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>PPT</td>
								<td style='border: 1px solid black; padding:10px;'>" . $comp_ppt .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Email</td>
								<td style='border: 1px solid black; padding:10px;'>" . $comp_email .  "</td>
							  </tr>
						   
					
						</tr>

						<tr>	
					        <td style='border: 1px solid black; padding:10px;' colspan='2'>  References for Verification 1  </td> 
                        
							
							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Name</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_name_1 .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Contact</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_contact_1 .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Relation</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_relation_1 .  "</td>
							  </tr>

						</tr>

						<tr>	
					        <td style='border: 1px solid black; padding:10px;' colspan='2'>  References for Verification 2  </td> 
                        
							
							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Name</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_name_2 .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Contact</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_contact_2 .  "</td>
							  </tr>

							  <tr>
								<td style='border: 1px solid black; padding:10px;'>Relation</td>
								<td style='border: 1px solid black; padding:10px;'>" . $refer_relation_2 .  "</td>
							  </tr>

						</tr>

						<tr>	
						<td style='border: 1px solid black; padding:10px;'> 
						              Would you like to refer any friends of <br/>
									 yours, Looking for job Opportunity  
					   </td> 
						<td style='border: 1px solid black; padding:10px;'>" . $refer_friend .  "     </td>
						 </tr>


						   </table>   
							   	 
							   	                 

						
							
						
						
	 					</font>";


				//$mailer->MsgHTML($body);
				$mailer->Body = $body;
				//var_dump($mailer->send());die;
				if (!$mailer->send()) {
					//echo "Mailer Error: " . $mailer->ErrorInfo; die;

				} else {
					echo "Message sent!";
				}
				?>
			</td>
		</tr>
	</table>
</body>

</html>
<?php
require ('phpmailer/PHPMailerAutoload.php');	

$mail = new PHPMailer();
 if(isset($_POST['submit']))
    {
		$name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['mobile']; // Get Mobile No
        $subject = $_POST['subject']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
		
	   $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Contact No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        
                        <!--<tr>
                            <td style='width:150px'><strong>Subject: </strong></td>
                            <td style='width:400px'>$subject</td>
                        </tr>-->
                        
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
		



$mail->From = 'Asif.shaikh@inceptiosystems.com';
$mail->FromName = 'Kaybe Networking';
$mail->AddAddress('kb-uae@outlook.com ');    // Add a recipient
$mail->AddAddress('shaikh_asif789@rediffmail.com');  


//$mail->addAttachment('');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;


if(!$mail->send()) {
		
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else {
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Thank you for getting in touch! We have received your message and would like to thank you for writing to us.");'; 
	echo 'window.location = "index.html";';
	echo '</script>';
	
}

}
//Start Rewart Email 

///////////////////

$mail = new PHPMailer;
   
    if(isset($_POST['submit'])) {
       	
	$mail->From = 'kb-uae@outlook.com';
	$mail->FromName = 'Kaybe Networking';
		
	$mail->AddAddress(''.$_POST['email'].'');	

    $mail->isHTML(true);                                 
    $mail->Subject = 'Kaybe Networking';
	//
	$mail->AddEmbeddedImage('img/logo/logo.png', 'logoimg', 'img/logo/logo.png'); // attach file logo.jpg, and later link to it using identfier logoimg
$mail->Body = "<h3>Thank you for your message,</h3>
   <h3>Your message will be passed to one of our expert advisors who will be in contact as soon as possible.</h3>
   <img src=\"cid:logoimg\" />
   <h5>Tel :  +971 4 2232485 / +9714 2216557</h5>   
   <h5>e-mail: kb-uae@outlook.com</h5>
   <h5>URL: www.kaybenetworking.com</h5>";
	
    if(!$mail->send()) {
       //Finally redirect
            echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      //Finally redirect
    echo '<script type="text/javascript">'; 
	echo 'alert("Thank you for getting in touch! We have received your message and would like to thank you for writing to us.");'; 
	echo 'window.location = "index.html";';
	echo '</script>';
    }
    }

//End Rewart Email

?>
                            
<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/src/SMTP.php';

class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {
        
        $this->sender = "sowmiya.teds@gmail.com"; 

                    
        $this->password = "sowmiya@123";  

          
        $this->receiver = $receiver;  

         
        $this->smtpHost="smtp.gmail.com ";        
        
        
        $this->smtpPort = 587;

    }
    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "JLPT registration {$this->code}";
        $mail->SetFrom($this->sender,"successfully registered");
        $mail->AddAddress($this->receiver);
		$link_address="upload_form.html";
        if($mail->send()){
          echo "<CENTER><H2><b>Thank You for registering!!</b></H2>";
		  echo "<CENTER><BR><a href='".$link_address."'>UPLOAD FORM</a>";
          // return true;
          exit;  
        }
        echo "FAILED TO SEND MAIL";
        // return false;

    }
    public function getHTMLMessage(){      
        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
         <body>
            <h1>You have successfully registered for JLPT examination.</h1>
         </body>
        </html>        
MSG;
    return $htmlMessage;
    }
}
// pass your recipient's email
$strValue = $_GET['id'];
//echo $strValue;
$vc=new VerificationCode($strValue); 
$vc->sendMail(); // MAIL SENT SUCCESSFULLY
//header("Location: upload_form.html");
<?php

if( count($_POST)==1 && !empty($_POST["code"]) ){

}


class Mail
{
    public static function verifCode($route)
    {
        $code = trim($_POST["code"]);
    
        if (isset($_SESSION["info"]["email"])) {
            $email = $_SESSION["info"]["email"];
        }else {
            $email = $_SESSION["email"];
        }
        $result = UserModel::findByEmail($email);
        
        if($results["Confcode"]!=$code){
            echo '<div class="alert alert-danger">Code incorrect</div>';
        }else if( $results["Confcode"] == $code ){
            $status = UserModel::updateOneById($id,["check" => 1]);

    
            $_SESSION["auth"]=true;
            $_SESSION["info"]=$results;
        
            echo '<div class="alert alert-sucess">Connexion réussie</div>';
            header("Location: Profil.php");
        
            $_SESSION["auth"]=true;
            $_SESSION["info"]=$results;
        
            echo '<div class="alert alert-sucess">Connexion réussie</div>';
            header("Location: Profil.php");
        }else{
            echo '<div class="alert alert-danger">Identifiants incorrects</div>';
        }
    }
    
    public static function sendMail($email,$content)
    {
    //Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 2;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                 				    //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'play.kccorp@gmail.com';                   						  //SMTP username
		$mail->Password   = EMAILPWD;                              //SMTP password
		$mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('no-reply@easyscooter.fr', 'no-reply');
		$mail->addAddress($email);     //Add a recipient



		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('Images\logo.svg', 'logo.svg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Ton code de validation PLAY.fr';
		$mail->Body    = $content;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

    
    }

}
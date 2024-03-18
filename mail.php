<?php
 include("PHPMailer/src/OAuth.php");
 include("PHPMailer/src/Exception.php");
 include("PHPMailer/src/POP3.php");
 include("PHPMailer/src/PHPMailer.php");
 include("PHPMailer/src/SMTP.php");
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    $mail= new PHPMailer(true);
    try{
        $mail->SMTPDebug=2;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='phanduyeen12112003@gmail.com';
        $mail->Password='sauzrsbipapzdiqr';
        $mail->SMTPSecure='tls';
        $mail->Port=587;
        $mail->CharSet='UTF-8';
        $mail->setFrom('phanduyeen12112003@gmail.com');
        $mail->addAddress('phanduyenqh@gmail.com','Duyen');
        $mail->isHTML(true);
        $mail->Subject='Cam on!';
        $mail->Body='Cam on b da quan tam noi dung web';
        $mail->send();
        echo'Email has been sent';
    }
    catch (Exception $e){
       echo 'Mailer Error',
       $mail->ErrorInfo;
    }   
    
    
    
    ?>
    </body>
</html>

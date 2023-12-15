<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

function GuiMail($toEmail)
{
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'phucpvpc06866@fpt.edu.vn';
        $mail->Password = 'iuoy byaq qaiz dtwr';  
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //Recipients
        $mail->setFrom('phucpvpc06866@fpt.edu.vn', 'MUTI SHOP');
        $mail->addAddress($toEmail); // Sử dụng thông tin email vừa lấy từ cơ sở dữ liệu

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Thư Liên Hệ Từ Khách Hàng:';

        $noidungthu = "
            <h3>Á đù z hia</h3>
            <p>Cảm ơn bạn đã quan tâm! Chúng tôi sẽ liên hệ để hỗ trợ bạn trong thời gian sớm nhất.</p>
        ";

        $mail->Body = $noidungthu;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->smtpConnect(array(
            "ssl" => array(
                "verifypeer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();

        ob_end_flush();

    } catch (Exception $e) {
        echo "không đc: {$mail->ErrorInfo}";
    }
}

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>

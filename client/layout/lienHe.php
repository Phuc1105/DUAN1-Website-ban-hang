<?php
require '../../global.php';
$email = $_POST['email'];

require_once '../../dao/pdo.php';
$sql = "INSERT INTO email( email) 
        VALUES (?)";
try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    // Lấy thông tin email vừa insert
    $insertedEmail = $email;

    // Gửi email
    GuiMail($insertedEmail);

} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
} finally {
    unset($conn);
}

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
        <h3>Xin chào vị khách hàng thân mến của chúng tôi</h3>
        
        <p>Cảm ơn bạn đã đăng ký thành viên hoặc liên hệ với chúng tôi.</p>
        
        <p>Chúng tôi sẽ xử lý yêu cầu của bạn trong thời gian sớm nhất và sẽ liên hệ lại nếu cần thiết.</p>
        
        <p>Nếu bạn có bất kỳ câu hỏi nào khác, đừng ngần ngại liên hệ với chúng tôi qua địa chỉ email phucpvpc06866@fpt.edu.vn hoặc số điện thoại 0347219161 của chúng tôi.</p>
        
        <p>Cảm ơn bạn một lần nữa và chúng tôi mong muốn được phục vụ bạn!</p>
        
        <p>Trân trọng,<br>
        MILTI SHOP</p>
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
?>
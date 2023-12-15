<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Nhập mã xác nhận đã gửi về email của bạn</h4>
        <form action="#" method="post">

            <input type="hidden" name="ma_kh">
            <div class="form-group last mb-4">
                <label for="email">Mã Xác Nhận</label>
                <input name="token" type="text" class="form-control" id="email">

            </div>

            <input name="btn_forgot_xac-nhan" type="submit" value="Gửi" class="btn btn-primary btn-block">
        </form>
    </div>
</div>
</div>
</body>

<?php
function GuiMial()
{
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {

        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'phucpvpc06866@fpt.edu.vn';                     //SMTP username
        $mail->Password = 'iuoy byaq qaiz dtwr';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('phucpvpc06866@fpt.edu.vn', 'MULTI SHOP');
        $mail->addAddress($_SESSION['email']); // Add a recipient from the session
        //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Thư Liên Hệ Từ Khách Hàng:';
        $token = substr(rand(0, 999999), 0, 6);
        $_SESSION['token'] = $token;

        $noidungthu = "
            <h3>Mã Xác Nhận Của Bạn Là    <h3 class='text-danger font-weight-bold'>{$token}</h3>     Vui Lòng Không Tiết Lộ Cho Ai!</h3>
         
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
<?php
GuiMial();
?>
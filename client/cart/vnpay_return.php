<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VNPAY RESPONSE</title>
    <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet" />
    <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
    <link href="<?= $CONTENT_URL ?>/css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px 200px auto;
        }

        .header {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .btn-home,
        .btn-export {
            width: 200px;
            height: 30px;
            background-color: gold;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;

        }

        .btn-home:hover,
        .btn-export:hover {
            background-color: goldenrod;
        }

        .d-flex {
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <?php
    require '../../global.php';
    require '../../dao/invoice.php';
    require '../../dao/user.php';
    $vnp_TxnRef = $_GET['vnp_TxnRef'];
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_PayDate = $_GET['vnp_PayDate'];

    // Thực hiện INSERT vào database
    invoice__vnpay_insert($vnp_TxnRef, $vnp_Amount, $vnp_OrderInfo, $vnp_ResponseCode, $vnp_TransactionNo, $vnp_BankCode, $vnp_PayDate);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['export'])) {

        $filename = 'invoice_' . $_GET['vnp_TxnRef'] . '.txt';
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        echo "Mã đơn hàng: " . $_GET['vnp_TxnRef'] . "\n";
        echo "Số tiền: " . $_GET['vnp_Amount'] . "\n";
        echo "Nội dung thanh toán: " . $_GET['vnp_OrderInfo'] . "\n";
        echo "Thanh toán qua ngân hàng: " . $_GET['vnp_BankCode'] . "\n";
        echo "Thời gian thanh toán: " . $_GET['vnp_PayDate'] . "\n";
        exit;
    }
    clearCart();
    function clearCart()
    {
        // Kiểm tra xem phiên đã bắt đầu chưa
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Xóa giỏ hàng bằng cách unset biến $_SESSION['cart']
        unset($_SESSION['cart']);
    }
?>
    <div class="container">
        <div class="header">
            <h3 class="text-muted">Thông Tin Thanh Toán VNPAY</h3>
        </div>
        <div class="form-group">
            <label>Mã đơn hàng:</label>
            <label><?php echo $_GET['vnp_TxnRef'] ?></label>
        </div>
        <div class="form-group">
            <label>Số tiền:</label>
            <label><?php echo $_GET['vnp_Amount'] ?></label>
        </div>
        <div class="form-group">
            <label>Nội dung thanh toán:</label>
            <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã phản hồi (vnp_ResponseCode):</label>
            <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã GD Tại VNPAY:</label>
            <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
        </div>
        <div class="form-group">
            <label>Mã Ngân hàng:</label>
            <label><?php echo $_GET['vnp_BankCode'] ?></label>
        </div>
        <div class="form-group">
            <label>Thời gian thanh toán:</label>
            <label><?php echo $_GET['vnp_PayDate'] ?></label>
        </div>

        <!-- Nút để trở về trang chủ và nút để xuất hóa đơn -->
        <div class="d-flex">
                <a href="../trang-chinh/">
                    <button type="submit" class="btn btn-home text-white mb-2">Trở về trang chủ</button>
                </a>
            <form method="post">
                <button type="submit" class="btn btn-export text-white " name="export">Xuất hóa đơn</button>
            </form>
        </div>

</body>

</html>
<?php
require '../../global.php';
require '../../dao/product.php';
require '../../dao/user.php';
require '../../dao/invoice.php';
//-------------------------------//
check_login();
extract($_REQUEST);
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

function clearCart()
{
    // Kiểm tra xem phiên đã bắt đầu chưa
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Xóa giỏ hàng bằng cách unset biến $_SESSION['cart']
    unset($_SESSION['cart']);
}
if (exist_param("form_invoice")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/form_invoice.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else if (exist_param("delivery_momo")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/delivery_momo.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else if (exist_param("delivery")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/delivery.php";
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
} else if (exist_param("delivery_vnpay")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $VIEW_NAME = "../cart/delivery_vnpay.php";
    }
} else if (exist_param("btn_insert")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $user_id = $kh['user_id'];
        $voucher_id = 1;
        $order_date = $_POST['order_date'];
        $img_product = $_POST['image'];
        $status = "1";
        $currentDateTime = date('Y-m-d');
        $receiving_date = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
        $note = "";
        $price = $_POST['price'];
        $order_id = $_POST['order_id'];
        $name_product = $_POST['name'];
        $quantity = $_POST['quantity'];
        invoice_insert($user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status);
        invoice_details_insert($order_id, $address, $order_date, $receiving_date);
        unset($_SESSION['total_cart']);
        clearCart();
        $VIEW_NAME = "../cart/cart.php";
    }
} else if (exist_param("payUrl")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $user_id = $kh['user_id'];
        $voucher_id = 1;
        $order_date = $_POST['order_date'];
        $img_product = $_POST['image'];
        $status = "1";
        $currentDateTime = date('Y-m-d');
        $receiving_date = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
        $note = "";
        $price = $_POST['price'];
        $order_id = $_POST['order_id'];
        $name_product = $_POST['name'];
        $quantity = $_POST['quantity'];
        invoice_insert($user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status);
        invoice_details_insert($order_id, $address, $order_date, $receiving_date);
        clearCart();
        $VIEW_NAME = "../cart/cart.php";
    }
    $VIEW_NAME = "../cart/cart.php";
} else if (exist_param("btn_insert_vnpay")) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $kh = user_select_by_id($id['user_id']);
        extract($kh);
        $user_id = $kh['user_id'];
        $voucher_id = 1;
        $order_date = $_POST['order_date'];
        $img_product = $_POST['image'];
        $status = "1";
        $currentDateTime = date('Y-m-d');
        $receiving_date = date('Y-m-d', strtotime($currentDateTime . ' + 5 days'));
        $note = "";
        $price = $_POST['price'];
        $order_id = $_POST['order_id'];
        $name_product = $_POST['name'];
        $quantity = $_POST['quantity'];
        invoice_insert($user_id, $order_id, $voucher_id, $order_date, $img_product, $quantity, $name_product, $price, $status);
        invoice_details_insert($order_id, $address, $order_date, $receiving_date);
        clearCart();
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/DUAN1-Website-ban-hang/client/cart/vnpay_return.php";
        $vnp_TmnCode = "YTH94E2V"; //Mã website tại VNPAY 
        $vnp_HashSecret = "YJTYOYVIPDPYBWZCDCCOOCMYERBRDRGT"; //Chuỗi bí mật

        $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toan don hang';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $price * 1000;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    } else {
        header("location:" . $CLIENT_URL . "/account/login.php");
    }
    $VIEW_NAME = "../cart/cart.php";
} else {
    $VIEW_NAME = "../cart/cart.php";
}
$items = product_select_all();
require '../layout.php';

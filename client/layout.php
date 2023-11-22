<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= $CONTENT_URL ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= $CONTENT_URL ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= $CONTENT_URL ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= $CONTENT_URL ?>/css/style.css" rel="stylesheet">
    
    
</head>

<body>
               

    <?php require "layout/menu.php" ?>
    <!-- Featured Start -->

    <main>
        <!-- Tùy từng request hiện view tương ứng -->
        <?php include $VIEW_NAME ?>
    </main>


    <?php require "layout/footer.php" ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/lib/easing/easing.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?= $CONTENT_URL ?>/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= $CONTENT_URL ?>/js/main.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/jquery.validation.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/validation.js"></script>

</body>

</html>
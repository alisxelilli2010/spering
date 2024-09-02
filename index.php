<?php
include_once 'config/app.php';
?>


<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Spering</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css"
          href="assets/css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>


<div class="hero_area"> </div>

    <?php
    include_once 'views/include/header.php';

    include_once 'views/include/slider.php';
    include_once 'views/include/experience.php';
    include_once 'views/include/category.php';
    include_once 'views/include/about.php';
    include_once 'views/include/freelance.php';
    include_once 'views/include/client.php';
    include_once 'views/include/info.php';

    include_once 'views/include/footer.php';
    ?>





<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/custom.js"></script>


</body>
</body>

</html>
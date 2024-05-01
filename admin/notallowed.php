<?php
require_once('db.php')
?>

<!DOCTYPE html>
<html lang="en" class="pos-relative">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="<?= spy_sabbir_update('theme_default', 'company_name'); ?> Dashboard.">
    <meta name="author" content="<?= spy_sabbir_update('theme_default', 'company_name'); ?>">

    <title><?= spy_sabbir_update('theme_default', 'company_name'); ?> | Stop! Not allowed here.</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
</head>

<body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
        <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
            <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">Stop!</h1>
            <h5 class="tx-xs-24 tx-normal tx-info mg-b-30 lh-5">Visitors are not allowed on this page.</h5>
            <p class="tx-16 mg-b-30">If you are an authorized person then sign in.</p>

            <div class="d-flex justify-content-center">
                <div class="wd-xs-300">
                    <a href="signin.php" class="text-white bg-info py-2 px-3">Sign In</a>
                </div>
            </div><!-- d-flex -->
        </div>
    </div><!-- ht-100v -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>
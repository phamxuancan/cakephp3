<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Funtap</title>
    <?php $webroot = '/cakephp3/webroot/admin'; ?>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $webroot ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $webroot ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo $webroot ?>/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo $webroot ?>/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo $webroot ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->fetch('content') ?>
    <script src="<?php echo $webroot ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $webroot ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $webroot ?>/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo $webroot ?>/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo $webroot ?>/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo $webroot ?>/data/morris-data.js"></script>
    <script src="<?php echo $webroot ?>/dist/js/sb-admin-2.js"></script>
</body>

</html>

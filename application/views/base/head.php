<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?? "Unknown page name" ?></title>

    <link rel="stylesheet" href="<?php echo base_url() . 'vendor/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'vendor/css/index.css?'.date('l jS \of F Y h:i:s A'); ?>">
</head>

<body>
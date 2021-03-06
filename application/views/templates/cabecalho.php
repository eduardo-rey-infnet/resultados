<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>
        <?php echo isset($title) ? $title . ' - ' : '' ?>
        Sistema de Resultados de Competências - Instituto Infnet
    </title>

    <?php echo link_tag('assets/img/favicon.ico', 'shortcut icon', 'image/ico'); ?>

    <?php if (isset($css_files)): ?>
        <?php foreach($css_files as $file): ?>
    <link rel="stylesheet" href="<?php echo $file; ?>" type="text/css"/>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    echo link_tag('assets/css/vendor/bootstrap.css');
    echo link_tag('assets/css/vendor/animate.css');
    echo link_tag('assets/css/vendor/jquery.mmenu.all.css');
    echo link_tag('assets/css/vendor/tooltipster.css');
    echo link_tag('assets/css/estilo.css');
    ?>

</head>
<body>


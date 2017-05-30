<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>-->
    <link rel="stylesheet" href="/libs/slick-1.6.0/slick/slick.css">
    <link rel="stylesheet" href="/libs/slick-1.6.0/slick/slick-theme.css">

    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/catalog_open.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/news_page.css">
</head>
<body>

    <?= $this->element('nav') ?>

    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>



    <?= $this->fetch('script') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>-->
    <script src="/libs/slick-1.6.0/slick/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAM9V3jBpj5JRH4CIlgbt1UZG8ooMScvZI&callback=initMap"
            async defer></script>
    <script src="/js/main.js"></script>
</body>
</html>

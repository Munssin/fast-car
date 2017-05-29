<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/catalog_open.css">
</head>
<body>

    <?= $this->element('nav') ?>

    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>



    <?= $this->fetch('script') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>

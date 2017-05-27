<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

    <?= $this->fetch('content') ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="/img/footer-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-nav">
                        <h6>НАВІГАЦІЯ</h6>
                        <ul>
                            <li><a href="#">АВТО ЗІ США</a></li>
                            <li><a href="#">АВТО В НАЯВНОСТІ</a></li>
                            <li><a href="#">НОВИНИ</a></li>
                            <li><a href="#">КОНТАКТИ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-services">
                        <h6>ПОСЛУГИ</h6>
                        <ul>
                            <li><a href="#">ДОСТАВКА</a></li>
                            <li><a href="#">ПОКУПКА</a></li>
                            <li><a href="#">РОЗМИТНЕННЯ</a></li>
                            <li><a href="#">АВТО НА ЗАПЧАСТИНИ</a></li>
                            <li><a href="#">АВТО ПІД КЛЮЧ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-contact">
                        <h6>КОНТАКТИ</h6>
                        <ul>
                            <li><a href="#">+38 (097) 12 32 122 - </a></li>
                            <li><a href="#">support@fastcars-usa.com</a></li>
                            <li><a href="#">Вконтакте</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?= $this->fetch('script') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script scr="/js/main.js"></script>
</body>
</html>

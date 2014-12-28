<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="I am a young webdesigner and developer from the Netherlands. Currently I am working for DigitaleFactuur and Studio Projectie">
    <meta name="keywords" content="webdesigner, daan, rosbergen, daan rosbergen, nederland, boskoop, dribbble, github, twitter, digitalefactuur, digitale factuur, studio projectie, leiden, webdeveloper, frontend developer, front end developer, frontenddeveloper">
    <meta name="author" content="Daan Rosbergen">
    <meta name="theme-color" content="#27303d">
    <title>Webdesigner - Daan Rosbergen</title>
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="">
    <div class="header" id="header">
        <h1 class="letters rotate-2">
            <span class="light">I am a</span>
            <span class="word-wrapper">
                <b class="is-visible">webdesigner</b>
                <b>webdeveloper</b>
            </span>
        </h1>
    </div>
    <div class="page">
        <nav>
            <div class="container">
                <div class="logo">
                    Daan <span class="light">Rosbergen</span>
                </div>
                <ul>
                    <li class="active"><a href="#work">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div id="work" class="work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-6 item">
                        <img src="img/digitalefactuur-homepage.jpg" alt="DigitaleFactuur homepage" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="img/digitalefactuur-app.jpg" alt="DigitaleFactuur App" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="img/digitalefactuur-prijzen-aanmelden.jpg" alt="DigitaleFactuur Dashboard" data-toggle="modal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 pull-right">
                        <span></span>
                    </div>
                    <div class="col-lg-6 item pull-right">
                        <img src="img/digitalefactuur-dashboard.jpg" alt="DigitaleFactuur Dashboard" data-toggle="modal">
                    </div>
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="img/digitalefactuur-offerte.jpg" alt="DigitaleFactuur offerte pagina" data-toggle="modal">
                    </div>
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="img/digitalefactuur-projecten.jpg" alt="DigitaleFactuur iPhone en Android App" data-toggle="modal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="img/kluskar-groen.jpg" alt="Aannemersbedrijf Kluskargroen" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="img/derbiteamzuidholland.jpg" alt="Blog Derbi Team Zuid Holland" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="img/dehaarwinkel.jpg" alt="Schoolproject: De Haarwinkel" data-toggle="modal">
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="contact">
            <div class="container">
                <div class="col-lg-offset-3 col-lg-5">
                    <h1>Contact</h1>
                    <form action="" method="POST">
                        <ul>
                            <li>
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                            </li>
                            <li>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </li>
                            <li>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </li>
                            <li>
                                <input type="submit" name="submit" value="Submit">
                            </li>
                        </ul>
                    </form>
                    <ul class="social">
                        <li><a target="_blank" href="https://twitter.com/daanrosbergen"><i class="icon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://dribbble.com/daanrosbergen"><i class="icon-dribbble"></i></a></li>
                        <li><a target="_blank" href="https://github.com/Badmuts"><i class="icon-github"></i></a></li>
                        <li><a target="_blank" href="https://soundcloud.com/kickekees"><i class="icon-soundcloud"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <img src="img/digitalefactuur-homepage.jpg" alt="DigitaleFactuur homepage">
        <div class="content">
            <div class="close">&times;</div>
            <h1>Traffic is for gays!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda expedita culpa ipsum eveniet nobis. Hic iure quisquam consectetur optio saepe accusantium sint explicabo necessitatibus, iste quo unde dolorem facilis, repellat.</p>
            <ul class="buttons">
                <li><a href="#" class="btn btn-default">Bekijk website</a></li>
                <li><a href="#" class="btn btn-link">Gek linkje</a></li>
            </ul>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="bower_components/velocity/velocity.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

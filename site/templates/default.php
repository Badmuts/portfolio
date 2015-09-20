<?= snippet('header') ?>
    <main class="page">
        <?= snippet('menu') ?>
        <div id="work" class="work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-6 item">
                        <img src="assets/images/digitalefactuur-homepage.jpg" alt="DigitaleFactuur homepage" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="assets/images/digitalefactuur-app.jpg" alt="DigitaleFactuur App" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="assets/images/digitalefactuur-prijzen-aanmelden.jpg" alt="DigitaleFactuur Dashboard" data-toggle="modal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 pull-right">
                        <span></span>
                    </div>
                    <div class="col-lg-6 item pull-right">
                        <img src="assets/images/digitalefactuur-dashboard.jpg" alt="DigitaleFactuur Dashboard" data-toggle="modal">
                    </div>
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="assets/images/digitalefactuur-offerte.jpg" alt="DigitaleFactuur offerte pagina" data-toggle="modal">
                    </div>
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="assets/images/digitalefactuur-projecten.jpg" alt="DigitaleFactuur iPhone en Android App" data-toggle="modal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-3 item">
                        <img src="assets/images/kluskar-groen.jpg" alt="Aannemersbedrijf Kluskargroen" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="assets/images/derbiteamzuidholland.jpg" alt="Blog Derbi Team Zuid Holland" data-toggle="modal">
                    </div>
                    <div class="col-lg-3 item">
                        <img src="assets/images/dehaarwinkel.jpg" alt="Schoolproject: De Haarwinkel" data-toggle="modal">
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
                    <footer>
                        <ul class="social text-center">
                            <li><a target="_blank" href="<?= $site->twitter() ?>"><i class="icon-twitter"></i></a></li>
                            <li><a target="_blank" href="<?= $site->dribbble() ?>"><i class="icon-dribbble"></i></a></li>
                            <li><a target="_blank" href="<?= $site->github() ?>"><i class="icon-github"></i></a></li>
                            <li><a target="_blank" href="<?= $site->soundcloud() ?>"><i class="icon-soundcloud"></i></a></li>
                        </ul>
                        <?= kirbytext($site->copyright()) ?>
                    </footer>
                </div>
            </div>
        </div>
    </main>

    <div class="modal">
        <img src="assets/images/digitalefactuur-homepage.jpg" alt="DigitaleFactuur homepage">
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
    <script src="assets/components/velocity/velocity.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

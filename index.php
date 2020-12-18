<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyCompany</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?// попробовать удалить ссылку ниже после создания макета и проверить шрифты на сайте?>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="http://faviconka.ru/ico/faviconka_ru_2034.ico" type="image/png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <div class="header__logo"><p>mycompany</p></div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#">HOME</a>
                <a href="#about">ABOUT</a>
                <a href="#services">SERVICES</a>
                <a href="#portfolio">PORTFOLIO</a>
                <a href="#testimonials">TESTIMONIALS</a>
                <a href="#contact">CONTACT</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="main__welcome">
            <h1>WELCOME ON <span class="mycompany">MYCOMPANY</span></h1>
            <p>We are a digital agency with <span>years of experience</span> and with <span>extraordinary people</span></p>
        </div>
        <div class="wrapper">
            <div id="about" class="main__about">
                <div class="about__left">
                    <img class="img-100" src="image/mac.png" alt="mac">
                </div>
                <div class="about__right">
                    <h2>SOME WORDS <span>ABOUT US</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus .</p>
                    <ul>
                        <li>Mission - <span>We deliver uniqueness and quality</span></li>
                        <li>Skills - <span>Delivering fast and excellent results</span></li>
                        <li>Clients - <span>Satisfied clients thanks to our experience</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main__team">
            <h2>OUR TEAM</h2>
            <div class="line"></div>
            <div class="team__cards">
                <div class="card">
                    <div class="photo"></div>
                    <div class="name">Vlad Ivanov</div>
                    <p class="position">Designer</p>
                    <p class="about__position">Do not seek to change what has come before. Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <div class="name">Bogdan Makarov</div>
                    <p class="position">Manager</p>
                    <p class="about__position">Do not seek to change what has come before. Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <div class="name">Pavel Konov</div>
                    <p class="position">Copywriter</p>
                    <p class="about__position">Do not seek to change what has come before. Seek to create that which has not.</p>
                </div>
                <div class="card">
                    <div class="photo"></div>
                    <div class="name">Max Belov</div>
                    <p class="position">SEO</p>
                    <p class="about__position">Do not seek to change what has come before. Seek to create that which has not.</p>
                </div>
            </div>
        </div>
        <div id="services" class="main__services">
            <div class="wrapper">
                <p>OUR SERVICES</p>
                <div class="line"></div>
                <p class="italic"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa tenetur.</i></p>
                <div class="services__cards">
                    <div class="services__card">
                        <img src="image/webdesign.png" alt="web design">
                        <p>WEB DESIGN</p>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                    <div class="services__card">
                        <img src="image/mobileapps.png" alt="mobile apps">
                        <p>MOBILE APPS</p>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                    <div class="services__card">
                        <img src="image/photography.png" alt="web design">
                        <p>PHOTOGRAPHY</p>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                    <div class="services__card">
                        <img src="image/marketing.png" alt="web design">
                        <p>MARKETING</p>
                        <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__clients">
            <div class="wrapper">
                <h2>SOME OF <span>OUR CLIENTS</span></h2>
                <div class="line"></div>
                <div class="clients">
                    <img src="image/chanel.png" alt="chanel">
                    <img src="image/zara.png" alt="zara">
                    <img src="image/guerlain.png" alt="guerlain">
                    <img src="image/lancime.png" alt="lancime">
                    <img src="image/lacoste.png" alt="lacoste">
                </div>
            </div>
        </div>

        <div id="portfolio" class="wrapper">
            <div class="main__work">
                <h2>take a look at <span>our work</span></h2>
                <div class="line"></div>
                <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa tenetur.</i></p>
                <div class="gallery">
                    <div class="item1">
                        <img src="image/1.png" alt="1">
                    </div>
                    <div class="del2">
                        <img src="image/1.png" alt="1">
                    </div>
                    <div class="del1">
                        <img src="image/1.png" alt="1">
                    </div>
                    <div class="del1">
                        <img src="image/1.png" alt="1">
                    </div>
                    <div class="item2">
                        <img src="image/2.png" alt="2">
                    </div>
                    <div class="del2">
                        <img src="image/2.png" alt="2">
                    </div>
                    <div class="del1">
                        <img src="image/2.png" alt="2">
                    </div>
                    <div class="del1">
                        <img src="image/2.png" alt="2">
                    </div>
                    <div class="item3">
                        <img src="image/3.png" alt="3">
                    </div>
                    <div class="del2">
                        <img src="image/3.png" alt="3">
                    </div>
                    <div class="del1">
                        <img src="image/3.png" alt="3">
                    </div>
                    <div class="del1">
                        <img src="image/3.png" alt="3">
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials" class="main__testimonials">
            <div class="wrapper">
                <h2>our clients’ <span>testimonials</span></h2>
                <div class="line"></div>
                <p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <p>Dean Martin, <span>CEO Acme Inc.</span></p>
            </div>
        </div>

        <section class="contact__form">
            <div id="contact" class="contact__wrapper">
                <h2>CONTACT US</h2>
                <div class="line"></div>
                <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ex quidem maiores ullam quis, at asperiores minus ad eaque maxime possimus cum ab iusto assumenda velit excepturi porro ipsa tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. </i></p>
                <form class="myform" action="#" name="newform" method="post">
                    <div class="form__inputs">
                        <p><label for="name">Name <span class="red">*</span></label><br>
                            <input type="text"  id="name" required/></p>
                        <p><label for="mail">Email address <span class="red">*</span></label><br>
                            <input type="email"  id="mail" required/></p>
                    </div>
                    <label for="text">Message <span class="red">*</span></label>
                    <textarea name="text" id="text" required></textarea>
                    <div class="button__block">
                        <input class="button" type="submit" value="SEND">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="social">
            <a href=""><img src="image/facebook.png" alt="facebook"></a>
            <a href=""><img src="image/twitter.png" alt="twitter"></a>
            <a href=""><img src="image/google.png" alt="google"></a>
            <a href=""><img src="image/linkedin.png" alt="linkedin"></a>
            <a href=""><img src="image/dribbble.png" alt="dribbble"></a>
        </div>
    </footer>


<script src="js/myscript.js"></script>
</body>
</html>
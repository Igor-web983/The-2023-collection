<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <section class=" top-txt ">
        <div class="head container ">
            <div class="head-txt ">
                <p>Бесплатная доставка, 30-дневная гарантия возврата товара.</p>
            </div>
            <div class="sing_in_up ">
                <a href="# ">войти в систему</a>
                <a href="# ">подписатся</a>
            </div>
        </div>
    </section>
    <nav class="navbar">
        <div class="navbar-container">
            <input type="checkbox" name="" id="checkbox">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Домой</a></li>
                <li><a href="#sellers">Магазин</a></li>
                <li><a href="#news">Блог</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="home_page ">
            <div class="home_img ">
                <img src="https://i.postimg.cc/t403yfn9/home2.jpg" alt="img ">
            </div>
            <div class="home_txt ">
                <p class="collectio "></p>
                <h2>ОСЕНЬ - ЗИМА<br>Коллекция 2023 года</h2>
                <div class="home_label ">
                    <p>Специализированный бренд, создающий предметы первой необходимости класса люкс. <br> Изделия изготовлены с соблюдением этических норм и отличаются неизменным <br> стремлением  к исключительному качеству.</p>
                </div>
                <button><a href="#sellers">ДЕЛАЙТЕ ПОКУПКИ <br> ПРЯМО СЕЙЧАС</a><i class='bx bx-right-arrow-alt'></i></button>
                <div class="home_social_icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="collection">
        <div class="collections container">
            <div class="content">
                <img src="https://i.postimg.cc/Xqmwr12c/clothing.webp" alt="img" />
                <div class="img-content">
                    <p>Коллекции одежды</p>
                    <button><a href="#sellers">Делай покупки прямо сейчас</a></button>
                </div>
            </div>
            <div class="content2">
                <img src="https://i.postimg.cc/8CmBZH5N/shoes.webp" alt="img" />
                <div class="img-content2">
                    <p>Обувь Весенняя</p>
                    <button><a href="#sellers">Делай покупки прямо сейчас</a></button>
                </div>
            </div>
            <div class="content3">
                <img src="https://i.postimg.cc/MHv7KJYp/access.webp" alt="img" />
                <div class="img-content3">
                    <p>Аксессуары</p>
                    <button><a href="#sellers">Делай покупки прямо сейчас</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="sellers">
        <div class="seller container">
            <h2>Лучшие продажи</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="https://i.postimg.cc/8CmBZH5N/shoes.webp" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Обувь PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                            &dollar;37.24
                            <div class="colors">
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle blue'></i>
                                <i class='bx bxs-circle white'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                        <!-- <div class="add-cart">
                            <button>Добавить в Корзину</button>
                        </div> -->
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/76X9ZV8m/Screenshot_from_2022-06-03_18-45-12.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>PS Куртка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                            &dollar;17.24
                            <div class="colors">
                                <i class='bx bxs-circle green'></i>
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle brown'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/j2FhzSjf/bs2.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Футболка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                            &dollar;27.24
                            <div class="colors">
                                <i class='bx bxs-circle brown'></i>
                                <i class='bx bxs-circle green'></i>
                                <i class='bx bxs-circle blue'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/QtjSDzPF/bs3.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Обувь PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;43.67
                            <div class="colors">
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle blue'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seller container">
            <h2>Новые поступления</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="https://i.postimg.cc/fbnB2yfj/na1.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Футболка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;10.23
                            <div class="colors">
                                <i class='bx bxs-circle blank'></i>
                                <i class='bx bxs-circle blue'></i>
                                <i class='bx bxs-circle brown'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/zD02zJq8/na2.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Сумка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                            &dollar;09.28
                            <div class="colors">
                                <i class='bx bxs-circle brown'></i>
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle green'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/Dfj5VBcz/sunglasses1.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Солнцезащитные очки PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;06.24
                            <div class="colors">
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle blank'></i>
                                <i class='bx bxs-circle blank'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/FszW12Kc/na4.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Обувь PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;43.67
                            <div class="colors">
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle blue'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seller container">
            <h2>Горячие продажи</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="https://i.postimg.cc/jS7pSQLf/na4.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Обувь PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;37.24
                            <div class="colors">
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle black'></i>
                                <i class='bx bxs-circle blue'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/fbnB2yfj/na1.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Футболка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;10.23
                            <div class="colors">
                                <i class='bx bxs-circle blank'></i>
                                <i class='bx bxs-circle blue'></i>
                                <i class='bx bxs-circle brown'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/RhVP7YQk/hs1.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Футболка PS England
                            </p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            &dollar;15.24
                            <div class="colors">
                                <i class='bx bxs-circle blank'></i>
                                <i class='bx bxs-circle red'></i>
                                <i class='bx bxs-circle blue'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="https://i.postimg.cc/zD02zJq8/na2.png" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p">
                            <p>Сумка PS England</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price">
                            &dollar;09.28
                            <div class="colors">
                                <i class='bx bxs-circle blank'></i>
                                <i class='bx bxs-circle grey'></i>
                                <i class='bx bxs-circle brown'></i>
                            </div>
                        </div>
                        <div class="buy-now">
                            <button><a href="https://codepen.io/sanketbodke/full/mdprZOq">купить сейчас</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="news-heading">
            <p>ПОСЛЕДНИЕ НОВОСТИ</p>
            <h2>Новые тенденции в моде</h2>
        </div>
        <div class="l-news container">
            <div class="l-news1">
                <div class="news1-img">
                    <img src="https://i.postimg.cc/2y6wbZCm/news1.jpg" alt="img">
                </div>
                <div class="news1-conte">
                    <div class="date-news1">
                        <p><i class='bx bxs-calendar'></i> 12 февраля 2022 года
                        </p>
                        <h4>Какие Щипцы Для Завивки Самые Лучшие</h4>
                        <a href="https://www.vogue.com/article/best-curling-irons" target="_blank">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="l-news2">
                <div class="news2-img">
                    <img src="https://i.postimg.cc/9MXPK7RT/news2.jpg" alt="img">
                </div>
                <div class="news2-conte">
                    <div class="date-news2">
                        <p><i class='bx bxs-calendar'></i> 17 февраля 2022 года
                        </p>
                        <h4>Польза Солнцезащитных Очков для здоровья</h4>
                        <a href="https://www.rivieraopticare.com/blog/314864-the-health-benefits-of-wearing-sunglasses_2/" target="_blank">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="l-news3">
                <div class="news3-img">
                    <img src="https://i.postimg.cc/x1KKdRLM/news3.jpg" alt="img">
                </div>
                <div class="news3-conte">
                    <div class="date-news3">
                        <p><i class='bx bxs-calendar'></i> 26 февраля 2022 года</p>
                        <h4>Группы Eternity Действительно существуют вечно</h4>
                        <a href="https://www.briangavindiamonds.com/news/eternity-bands-symbolize-love-that-lasts-forever/" target="_blank">подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.121169986175!2d73.90618951442687!3d18.568575172551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c131ed5b54a7%3A0xad718b8b2c93d36d!2sSky%20Vista!5e0!3m2!1sen!2sin!4v1654257749399!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <form action="https://formspree.io/f/xzbowpjq" method="POST">
            <div class="form">
                <div class="form-txt">
                    <h4>ИНФОРМАЦИЯ</h4>
                    <h1>связаться с нами</h1>
                    <span>Как и следовало ожидать от компании, которая начинала как высококлассный подрядчик по интерьерам, мы уделяем этому особое
                        внимание.</span>
                    <h3>USA</h3>
                    <p>195 E Parker Square Dr, Parker, CO 801<br>+43 982-314-0958</p>
                    <h3>India</h3>
                    <p>HW95+C9C, Lorem ipsum dolor sit.<br>411014</p>
                </div>
                <div class="form-details">
                    <a href="/" class="back-to-home">Вернуться на главную</a>
                    <input type="text" name="имя" id="имя" placeholder="имя" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="сообщение" id="сообщение" cols="52" rows="7" placeholder="сообщение" required></textarea>
                    <button>отправить сообщение</button>
                </div>
            </div>
        </form>
    </div>
    </section>
    <footer>
        <div class="footer-container container">
            <div class="content_1">
                <img src="https://i.postimg.cc/htGyQ4JB/footer-logo.png" alt="logo">
                <p>Клиент находится в центре нашей уникальной бизнес-модели,<br> которая включает в себя дизайн.</p>
                <img src="https://i.postimg.cc/Nj9dgJ98/cards.png" alt="cards">
            </div>
            <div class="content_2">
                <h4>поход по магазинам</h4>
                <a href="#sellers">Магазин одежды</a>
                <a href="#sellers">Трендовая обувь</a>
                <a href="#sellers">Аксессуары</a>
                <a href="#sellers">Распродажа</a>
            </div>
            <div class="content_3">
                <h4>поход по магазинам</h4>
                <a href="./contact.html">связаться с нами</a>
                <a href="https://payment-method-sb.netlify.app/" target="_blank">Способ оплаты</a>
                <a href="https://delivery-status-sb.netlify.app/" target="_blank">Доставка</a>
                <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Возврат и обмен</a>
            </div>
            <div class="content_4">
                <h4>НОВОЕ ПИСЬМО</h4>
                <p>Будьте первыми, кто узнает о новых поступлениях,<br> лукбуках, распродажах и промо-акциях!</p>
                <div class="f-mail">
                    <input type="email" placeholder="Ваш Email">
                    <i class='bx bx-envelope'></i>
                </div>
                <hr>
            </div>
        </div>
        <div class="f-design">
            <div class="f-design-txt container">
                <p>Design and Code by code.sanket</p>
                <script src="scripts.js"></script>
            </div>
        </div>
    </footer>
</body>
</html>
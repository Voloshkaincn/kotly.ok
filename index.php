<?php include_once 'header.php' ?>

<main class="main-content">
    <div class="container">
        <div class="mobil-top-logo">
             <a class="logo" href="index.php">
                <img src="images/logo-placement-top.png" alt="logo">
            </a>
            <div class="mobil-contacts">(073) 024-32-12;<br>(067) 972-91-74; </div>
        </div>
        <div class="big-board">
            <div class="big-board-banner">
                <div class="image" style="background-image: url(images/banner.png)"></div>
                <a class="link link_placement_banner" href="about-us.php">Узнать подробнее &gt;</a>
            </div>
            <div class="big-board-banner">
                <div class="image" style="background-image: url(images/banner.png)"></div>
                <a class="link link_placement_banner" href="about-us.php">Узнать подробнее &gt;</a>
            </div>
        </div>

        <div class="advantages">
            <div class="advantages-wraper">
                <div class="advantages-wraper__item flexible-working-hours">Работаем<br>с 9:00 до 18:00</div>
                <div class="advantages-wraper__item support">Информационная поддержка</div>
                <div class="advantages-wraper__item free-delivery">Бесплатная <br> доставка</div>
                <div class="advantages-wraper__item refund">Возврат товара<br>до 14 дней</div>
                <div class="advantages-wraper__item best-products">Только лучшие предложения</div>
                <div class="advantages-wraper__item simple-search">Удобный поиск <br> товаров в каталоге</div>
            </div>
        </div>

        <div class="content">
            <div class="sidebar">
                <ul class="categories-menu">
                    <li class="categories-menu__item header">Каталог</li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Котлы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Терморешуляторы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Дымоходы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Котлы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Терморешуляторы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Дымоходы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Котлы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Терморешуляторы</a></li>
                    <li class="categories-menu__item"><a class="link" href="catalog.php">Дымоходы</a></li>
                </ul>
            </div>
            <div class="content-cell">
                <div class="products-slider">
                    <div class="products-slider-header">
                        <div class="title">Лидеры продаж</div>
                    </div>
                    <div id="products-slider-1" class="products-slider-products">

<?php
    for ($i=1; $i<=6; $i++):
?>

                            <div class="product-card-grid">
                                <div class="outset">
                                    <div class="inset inset_has_short_details">
                                        <div class="center-image">
                                            <img class="image" src="images/products/1.png"/>
                                            <div class="inset__discount">-10%</div>
                                        </div>
                                        <div class="inset_info">
                                            <a class="link" href="single-product.php">Твердотельный котел КГ-18</a>
                                            <div class="inset__description">Универсальные твердотопливные водонагревательные стальные котлы типа KG с горизонтальными конвекц..</div>
                                            <div class="inset__availability-price">
                                                <div class="present present_available">в наличии</div>
                                                <div class="prev-price">15 200 грн</div>
                                                <div class="price">12 920 грн</div>
                                            </div>
                                            <div class="action-buttons">
                                                <button class="action-button action-button_add-to-cart button"><span>Купиь</span></button>
                                                <button class="action-button action-button_add-to-favorite button"></button>
                                                <button class="action-button action-button_add-to-compare button"></button>
                                            </div>
                                            <div class="inset__product-short-details">
                                                <div class="product-short-details_item">Мощность - 18квт</div>
                                                <div class="product-short-details_item">КПД - 78 - 83 %</div>
                                                <div class="product-short-details_item">Масса - 225 кг</div>
                                                <div class="product-short-details_item">Высота - 1230 мм</div>
                                                <div class="product-short-details_item">Ширина - 520 мм</div>
                                                <div class="product-short-details_item">Глубина - 900 мм</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<?php
    endfor;
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-row">
            <div class="dividing-line"></div>
            <div class="articles-row__title">О наших товарах</div>
            <div class="articles-list">
                <div class="article-preview">
                    <div class="center-image">
                        <img class="image" src="images/articles/video.png"/>
                        <a class="button-play" href="#"><div class="button-play_triangule"></div></a>
                    </div>
                    <a class="link link_decoration_underline" href="#">Твердотопливный котел длительного горения бытовой серии Черниговского завода Котлант КГ 16</a></div>
                <div class="article-preview">
                    <div class="center-image">
                        <img class="image" src="images/articles/video.png"/>
                        <a class="button-play" href="#"><div class="button-play_triangule"></div></a>
                    </div>
                    <a class="link link_decoration_underline" href="#">Твердотопливный котел длительного горения бытовой серии Черниговского завода Котлант КГ 16</a></div>
                <div class="article-preview">
                    <div class="center-image">
                        <img class="image" src="images/articles/video.png"/>
                        <a class="button-play" href="#"><div class="button-play_triangule"></div></a>
                    </div>
                    <a class="link link_decoration_underline" href="#">Твердотопливный котел длительного горения бытовой серии Черниговского завода Котлант КГ 16</a></div>
                <div class="article-preview">
                    <div class="center-image">
                        <img class="image" src="images/articles/video.png"/>
                        <a class="button-play" href="#"><div class="button-play_triangule"></div></a>
                    </div>
                    <a class="link link_decoration_underline" href="#">Твердотопливный котел длительного горения бытовой серии Черниговского завода Котлант КГ 16</a></div>
                <div class="article-preview">
                    <div class="center-image">
                        <img class="image" src="images/articles/video.png"/>
                        <a class="button-play" href="#"><div class="button-play_triangule"></div></a>
                    </div>
                    <a class="link link_decoration_underline" href="#">Твердотопливный котел длительного горения бытовой серии Черниговского завода Котлант КГ 16</a></div>
            </div>
        </div>
        <div class="content">
            <div class="content-cell">
                <div class="products-slider">
                    <div class="products-slider-header">
                        <div class="title">Рекомендуем</div>
                    </div>
                    <div id="products-slider-2" class="products-slider-products">

<?php
for ($i=1; $i<=5; $i++):
    ?>

                    <div class="product-card-grid">
                        <div class="outset">
                            <div class="inset inset_has_short_details">
                                <div class="center-image">
                                    <img class="image" src="images/products/1.png"/>
                                    <div class="inset__discount">-10%</div>
                                </div>
                                <div class="inset_info">
                                    <a class="link" href="single-product.php">Твердотельный котел КГ-18</a>
                                    <div class="inset__description">Универсальные твердотопливные водонагревательные стальные котлы типа KG с горизонтальными конвекц..</div>
                                    <div class="inset__availability-price">
                                        <div class="present present_available">в наличии</div>
                                        <div class="prev-price">15 200 грн</div>
                                        <div class="price">12 920 грн</div>
                                    </div>
                                    <div class="action-buttons">
                                        <button class="action-button action-button_add-to-cart button"><span>Купиь</span></button>
                                        <button class="action-button action-button_add-to-favorite button"></button>
                                        <button class="action-button action-button_add-to-compare button"></button>
                                    </div>
                                    <div class="inset__product-short-details">
                                        <div class="product-short-details_item">Мощность - 18квт</div>
                                        <div class="product-short-details_item">КПД - 78 - 83 %</div>
                                        <div class="product-short-details_item">Масса - 225 кг</div>
                                        <div class="product-short-details_item">Высота - 1230 мм</div>
                                        <div class="product-short-details_item">Ширина - 520 мм</div>
                                        <div class="product-short-details_item">Глубина - 900 мм</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    <?php
endfor;
?>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-products-offer sidebar-products-offer_inline">
                    <div class="title">Новые товары</div>
                    <div class="products">
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/1.png"/></div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-18</a>
                                <div class="info__price">4 920 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/2.png"/></div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-12</a>
                                <div class="info__price">5 510 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/3.png"/></div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-14</a>
                                <div class="info__price">19 099 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/4.png"/></div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-11</a>
                                <div class="info__price">301 грн</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="seo-text">
    <div class="container">
        <div>
            <h1>Добро пожаловать в интернет магазин отопительной техники kotly-ok. Отопительное оборудование от kotly-ok это гаран тепла в доме.</h1>
            <p>Тёплый дом холодные времена года - это очень важно, ведь от этого будет зависеть здоровье всей семьи. Поэтому стоит позаботится о том, чтобы холода не “наступили внезапно”, и обеспечить свой дом надёжным и качественным оборудованием для отопления. Также тепло - это залог уюта в доме и хорошего настроения. Но, в вопросах отопления возникают и другие нюансы, которые требуют решения. Это цены на газовое отопление и некачественное оборудование, которое может выйти из строя совсем неожиданно и в неподходящий момент.</p>
            <p>Интернет-магазин отопительной техники Kotly-OK позволит Вам "махнуть рукой" на перечисленные выше проблемы. Твердотопливные котлы, которых в ассортименте магазине более чем достаточно, наконец-то избавят Ваш дом от дорогостоящей “газовой зависимости”, а качественное оборудование (теплоаккумуляторы и дымоходы) позволят навсегда забыть о внезапных поломках. Вопрос экономии денег стоит очень остро для многих, поэтому отопление твердым топливом является отличной альтернативой газу. Вопрос надёжности оборудования стоит не менее остро, ведь чтобы исправить поломку нужно время, а время - это тепло в доме. Особенно неприятны поломки зимой, когда без отопления никак, и чай с пледом не спасут.</p>
            <h2>Высококачественная отопительная техника в широком ассортименте и по доступным ценам.</h2>
            <p>Интернет-магазин Kotly-OK готов предложиь весь спектр необходимого оборудования для отопления дома от лучших производителей Украины - Altep, Kotlant. <br>
             В ассортименте магазина:
            <ul>
                <li>Широчайший выбор твердотопливных котлов, как для обычных жилых домов небольших размеров, так и для больших, промышленных помещений. Для Вас котлы КГ, мощные котлы на твердом топливе КВ, и экономичные, предназначенные для небольших домов котлы КЭ;</li>
                <li>Теплоаккумуляторы Altep, которые представлены в магазине в двух вариантах: без змеевика и со змеевиком;</li>
                <li>А также здесь можно приобрести качественные дымоходы из нержавеющей стали.</li>
            </ul>
            Техника для отопления соответствует всем стандартам качества и экологическим стандартам.</p>
            <h2>Преимущества отопительного оборудования от Kotly-OK.</h2>
            <p>Данное оборудование, которое Вы сможете приобрести по доступным ценам, подарит Вам массу преимуществ:
            <ul>
                <li><b>Твердотопливные котлы</b> позволят не только качественно обогревать дом, но подарят возможность экономит средства. Ведь газ, стоит гораздо дороже, нежели любой из видов твердого топлива (дрова, уголь, топливные брикеты, пеллеты);</li>
                <li><b>Теплоаккумулятроы</b> позволят накапливать и сохранять тепловою энергию для сглаживания пиков теплопотребления;</li>
                <li><b>Дымоходы</b> обеспечат надёжный вывод продуктов сгорания. Вам не придётся бояться того, что они могут попасть в дом.</li>
            </ul>
            <h2>Отопительная техника в Киеве и Украине по доступным ценам.</h2>
            <p>Интернет-магазин Kotly-OK готов предложить самые выгодные условия сотрудничества:
    <ul><li>Магазин принимает заказы по всей Украине;</li><li>Предоставляет консультации по выбору, покупке, установке и эксплуатации оборудования;</li><li>Предоставляет фирменные гарантии от производителя;</li><li>Доступные цены ( магазин работает напрямую с производителями);</li><li>Обеспечивает качественное и своевременное сервисное обслуживание;</li><li>Доставит ваши покупки в любой населённый пункт Украины;</li><li>В магазине действуют разнообразные праздничные распродажи и акционные предложения.
    </li></ul>
    Если у Вас есть вопросы, то звоните по номерам телефонов, что указаны в разделе “Контакты” или пишите письма нам на e-mail. Высококвалифицированные сотрудники магазина, с радостью, дадут ответ на все вопросы и предоставят качественные консультации. Отопительная техника (Киев) от Kotly-OK согреет Ваш дом и сэкономить деньги.</p>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>
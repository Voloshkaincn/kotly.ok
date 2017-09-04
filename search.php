<?php
include_once 'header.php';
?>
<main class="main-content">
    <div class="container">
        <div class="content">
            <div class="sidebar">
                <div class="search-filters">
                    <div class="search-filters_header">
                        Все результаты (64)
                    </div>
                    <div class="search-filters_container">
                        <div class="search-filter">
                            <div class="search-filter_title">Котлы</div>
                            <div class="search-filter_cotainer">
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotlant (62)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotly-ok (10)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Solid (2)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Донтерм (9)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Тивер (19)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotlant (62)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotly-ok (10)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Solid (2)</div>
                                <span class="show-all link link_color_light link_decoration_underline">Показать все</span>
                            </div>
                        </div>
                        <div class="search-filter">
                            <div class="search-filter_title">Теплорегуляторы</div>
                            <div class="search-filter_cotainer">
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotlant (62)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotly-ok (10)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Solid (2)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Донтерм (9)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Тивер (19)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotlant (62)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Kotly-ok (10)</div>
                                <div class="search-filter_item link link_color_light link_decoration_underline">Solid (2)</div>
                                <span class="show-all link link_color_light link_decoration_underline">Показать все</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-cell">
                <div class="breadcrumbs">
                    <a class="link link_color_light link_decoration_underline" href="index.php">Главная</a>
                    <p class="link" href="catalog.php">Результат поиска «Твердотопливный»</p>
                </div>
                <div class="search-header">
                    <div class="search-header_title">«Твердотопливный»</div>
                    <div class="search-header_result">Найдено 64 товара</div>
                </div>
                <div class="search-result">
<?php
    for ($i=1; $i<=12; $i++):
?>

                    <div class="product-card-list">
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
                <div class="page-navigation">
                    <div class="page-navigation__status">Отображено с 1 по 12 из 72</div>
                    <div class="navigation-wrapper">
                        <div class="pages-wrapper"><a class="link" href="#">&lt;</a>
                            <a class="link" href="#">1</a>
                            <a class="link link_active" href="#">2</a>
                            <a class="link" href="#">3</a>
                            <a class="link" href="#">&gt;</a>
                        </div>
                        <div class="load-more-wrapper">
                            <a class="link link_transform_uppercase link_bold_light" href="#">Показать еще 12 товаров</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>






<?php
include_once 'footer.php';
?>

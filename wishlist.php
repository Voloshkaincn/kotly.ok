<?php include_once 'header.php' ?>

<main class="wishlist-content">
    <div class="container">
        <div class="content">

            <div class="content-cell">
                <div class="breadcrumbs">
                    <a class="link link_color_light link_decoration_underline" href="index.php">Главная</a>
                    <p class="link" href="catalog.php">Мои закладки</p>
                </div>
                <div class="wishlist-header">
                    <div class="title">Мои закладки</div>
                    <div class="wishlist-header_result">Всего в закладках 5 товаров</div>
                </div>
                <div class="wishlist-result">
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
                                        <img class="remove" src="images/Cart/remove.png" alt="Удалить" title="Удалить">
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



<?php include_once 'footer.php' ?>
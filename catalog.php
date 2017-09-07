<?php include_once 'header.php' ?>

<main class="catalog-content">
    <div class="container">
        <div class="content">
            <div id="sidebar-filters" class="sidebar">
                <div class="catalog-filters">
                    <div class="catalog-filters-header">
                        <div class="catalog-filters-header__title">Фильтр</div>
                        <a class="link link_decoration_underline clear-all-filters" href="#">Сбросить все</a>
                        <button class="modal_header_close button close"></button>
                    </div>
                    <div class="catalog-filters-container">
                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-price" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-price">Цена, грн</label>
                            <div class="catalog-filter-slider">
                                <div class="limits">
                                    <input id="minCost" value="0"/>
                                    <span class="limits__separator">&ndash;</span>
                                    <input id="maxCost" value="22000"/>
                                </div>
                                <div id="price-slider" class="slider"></div>
                            </div>
                        </div>

                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-manufacturer" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-manufacturer">Производители</label>
                            <div class="catalog-filter-checkbox">
                                <span class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="manufacturer" id="id-manufacturer-09903992903418839" value="1"/>
                                    <label class="checkbox__label" for="id-manufacturer-09903992903418839">
                                        <span class="checkbox__state"></span>Kotlant
                                    </label>
                                </span>
                                <span class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="manufacturer" id="id-manufacturer-05468448479659855" value="2"/>
                                    <label class="checkbox__label" for="id-manufacturer-05468448479659855">
                                        <span class="checkbox__state"></span>KotlyOk
                                    </label>
                                </span>
                            </div>
                        </div>

                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-vat" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-vat">Мощность, КВТ</label>
                            <div class="catalog-filter-checkbox">
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-07653670676518232" value="10"/>
                                    <label class="checkbox__label" for="id-vat-07653670676518232">
                                        <span class="checkbox__state"></span>10 (10)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-06780917558353394" value="12"/>
                                    <label class="checkbox__label" for="id-vat-06780917558353394">
                                        <span class="checkbox__state"></span>12 (12)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-08665844623465091" value="14"/>
                                    <label class="checkbox__label" for="id-vat-08665844623465091">
                                        <span class="checkbox__state"></span>14 (14)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-015329558122903109" value="15"/>
                                    <label class="checkbox__label" for="id-vat-015329558122903109">
                                        <span class="checkbox__state"></span>15 (15)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-03060506833717227" value="17"/>
                                    <label class="checkbox__label" for="id-vat-03060506833717227">
                                        <span class="checkbox__state"></span>17 (17)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-041275650612078607" value="18"/>
                                    <label class="checkbox__label" for="id-vat-041275650612078607">
                                        <span class="checkbox__state"></span>18 (18)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-02705492915119976" value="20"/>
                                    <label class="checkbox__label" for="id-vat-02705492915119976">
                                        <span class="checkbox__state"></span>20 (20)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-06619964246638119" value="25"/>
                                    <label class="checkbox__label" for="id-vat-06619964246638119">
                                        <span class="checkbox__state"></span>25 (25)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-05694471334572881" value="30"/>
                                    <label class="checkbox__label" for="id-vat-05694471334572881">
                                        <span class="checkbox__state"></span>30 (30)
                                    </label>
                                </div>
                                <div class="checkbox checkbox_light">
                                    <input class="checkbox__input" type="checkbox" name="vat" id="id-vat-06119376400019974" value="40"/>
                                    <label class="checkbox__label" for="id-vat-06119376400019974">
                                        <span class="checkbox__state"></span>40 (40)
                                    </label>
                                </div>
                                <span class="show-all link link_decoration_underline">Показать все</span>
                            </div>
                        </div>
                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-weight" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-weight">Масса</label>
                            <div class="catalog-filter-select">
                                <div id="selectBox" class="catalog-filter-select">
                                    <div class=valueTag name=select>Все</div>
                                    <img class="arrow" src="images/catalog/arrow-select.png">
                                    <ul class="select-options" id=selectMenuBox>
                                        <li class="option">Все</li>
                                        <li class="option">100кг</li>
                                        <li class="option">200кг</li>
                                        <li class="option">500кг</li>
                                        <li class="option">700кг</li>
                                    </ul>
                                </div>
                             </div>
                        </div>

                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-height" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-height">Высота, мм</label>
                            <div class="catalog-filter-slider">
                                <div class="limits">
                                    <input id="minHeight" value="0"/>
                                    <span class="limits__separator">&ndash;</span>
                                    <input id="maxHeight" value="2150"/>
                                </div>
                                <div id="height-slider" class="slider"></div>
                            </div>
                        </div>

                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-width" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-width">Ширина, мм</label>
                            <div class="catalog-filter-slider">
                                <div class="limits">
                                    <input id="minWidth" value="0"/>
                                    <span class="limits__separator">&ndash;</span>
                                    <input id="maxWidth" value="1460"/>
                                </div>
                                <div id="width-slider" class="slider"></div>
                            </div>
                        </div>
                        <div class="catalog-filter">
                            <input class="catalog-filter__expander" id="id-catalog-filter-z-height" type="checkbox" checked="checked"/>
                            <label class="catalog-filter__title" for="id-catalog-filter-z-height">Длина,мм</label>
                            <div class="catalog-filter-slider">
                                <div class="limits">
                                    <input id="minLength" value="0"/>
                                    <span class="limits__separator">&ndash;</span>
                                    <input id="maxLength" value="2680"/></div>
                                <div id="length-slider" class="slider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-filter-footer">
                        <button class="catalog-filter-button">Применить</button>
                    </div>
                </div>
            </div>

            <div class="content-cell">
                <div class="workspace">
                    <div class="breadcrumbs">
                        <a class="link link_color_light link_decoration_underline" href="index.php">Главная</a>
                        <p class="link">Котлы</p>
                    </div>
                    <div class="catalog">
                        <div class="catalog-header b-border-light">
                            <div class="title">Котлы</div>
                            <button class="button button_disabled button_placement_content">Сравнить (0)</button>
                        </div>
                        <div class="catalog-options-panel b-border-light">
                            <div class="catalog-option-control link_color_light link_decoration_underline link-filters modal-button" data-modal="sidebar-filters">Фильтр</div>
                            <div class="catalog-option-control">
                                <div class="catalog-option-control__title">Вид:</div>
                                <div class="catalog-option-control__control">
                                    <div class="catalog-option-control-view">
                                        <button class="catalog-option-control-view__grid catalog-option-control-view__grid_active">
                                        </button>
                                        <button class="catalog-option-control-view__list">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-option-control catalog-option-control_center">
                                <div class="catalog-option-control__title">Показать на странице:</div>
                                <div class="catalog-option-control__control">
                                    <div id="itemsOnPage" class="select catalog-option-control__select">
                                        <div class="selected catalog-option-control__selected link_color_light link_decoration_underline">12</div>
                                        <ul class="options catalog-option-control__options">
                                            <li selected="1" value="12">12</li>
                                            <li value="24">24</li>
                                            <li value="36">36</li>
                                            <li value="54">54</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog-option-control catalog-option-control_right">
                                <div class="catalog-option-control__title">Сортировка по:</div>
                                    <div class="catalog-option-control__control">
                                        <div id="sortBy" class="select catalog-option-control__select">
                                            <div class="selected catalog-option-control__selected link_color_light link_decoration_underline">Рейтинг по убыванию</div>
                                            <ul class="options catalog-option-control__options">
                                                <li value="price_asc">Цена по возрастанию</li>
                                                <li value="price_desc">Цена по убыванию</li>
                                                <li value="popular_asc">Рейтинг по возрастанию</li>
                                                <li selected="1" value="popular_desc">Рейтинг по убыванию</li>
                                                <li value="name_asc">По имени (А - Я)</li>
                                                <li value="name_desc">По имени (Я - А)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="catalog-products count-3">

<?php
     for ($i=1; $i<=2; $i++):
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
                        <div class="page-navigation">
                            <div class="page-navigation__status">Отображено с 1 по 12 из 72</div>
                            <div class="navigation-wrapper">
                                <div class="pages-wrapper"><a class="link" href="catalog.php">&lt;</a>
                                    <a class="link" href="catalog.php">1</a>
                                    <a class="link link_active" href="catalog.php">2</a>
                                    <a class="link" href="catalog.php">3</a>
                                    <a class="link" href="catalog.php">&gt;</a>
                                </div>
                                <div class="load-more-wrapper">
                                    <a class="link link_transform_uppercase link_bold_light" href="catalog.php">Показать еще 12 товаров</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="sidebar">
                <div class="sidebar-banner">
                    <img src="images/sidebar/banner.png"/>
                    <a class="link link_placement_banner" href="about-us.php">Узнать подробнее&gt;</a>
                </div>
                <div class="sidebar-products-offer">
                    <div class="title">Просмотренные</div>
                    <div class="products">
                        <div class="product">
                            <div class="center-image">
                                <img class="image" src="images/new-products/1.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-18</a>
                                <div class="info__price">4 920 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/2.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-12</a>
                                <div class="info__price">5 510 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/3.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-14</a>
                                <div class="info__price">19 099 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/4.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-11</a>
                                <div class="info__price">301 грн</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-products-offer">
                    <div class="title">Рекомендованные</div>
                    <div class="products">
                        <div class="product">
                            <div class="center-image">
                                <img class="image" src="images/new-products/1.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-18</a>
                                <div class="info__price">4 920 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image"><img class="image" src="images/new-products/2.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-12</a>
                                <div class="info__price">5 510 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image">
                                <img class="image" src="images/new-products/3.png"/>
                            </div>
                            <div class="info"><a class="link" href="single-product.php">Твердотельный котел КГ-14</a>
                                <div class="info__price">19 099 грн</div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="center-image">
                                <img class="image" src="images/new-products/4.png"/>
                            </div>
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



<?php include_once 'footer.php' ?>
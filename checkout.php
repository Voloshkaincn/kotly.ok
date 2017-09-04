<?php include_once 'header.php' ?>

<main class="cart-content">
    <div class="container">
        <div class="content">

            <div class="content-cell">
                <div class="workspace">
                    <div class="breadcrumbs">
                        <a class="link link_color_light link_decoration_underline" href="index.php">Главная</a>
                        <a class="link link_color_light link_decoration_underline" href="cart.php">Корзина</a>
                        <p class="link">Оформление заказа</p>
                    </div>
                    <div class="checkout">
                        <form action="checkout-success.php" class="checkout-form">
                            <div class="form_header_block">
                                <div class="title">Оформление заказа</div>
                            </div>
                            <div class="table-info">
                                <table>
                                    <thead>
                                      <tr>
                                        <td class="td-center xs-hidden">Фото</td>
                                        <td class="name">Наименование товара</td>
                                        <td class="td-left td-model">Модель</td>
                                        <td class="td-left"><span title="Количество">Кол-во</span></td>
                                        <td class="td-right td-price xs-hidden">Цена</td>
                                        <td class="td-right">Итого</td>
                                        <td></td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="td-center image xs-hidden">             
                                                <a href="single-product.php">
                                                    <img src="images/products/1.png" alt="Твердотопливный котел НГ-24" title="Твердотопливный котел НГ-24" />
                                                </a>
                                            </td>
                                            <td class="td-left">
                                                <a class="link link_color_light link_decoration_underline" href="single-product.php">Твердотопливный котел НГ-24</a>
                                            </td>
                                            <td class="td-left td-model">НГ-24</td>
                                            <td class="td-left">
                                                <span class="quantity" >
                                                    <input type="number" value="1" size="5"/>
                                                    <div class="quantity_minus"></div>
                                                    <div class="quantity_plus"></div>
                                                </span>
                                            </td>
                                            <td class="td-right  td-price xs-hidden">13,100грн.</td>
                                            <td class="td-right">13,100грн.</td>
                                            <td class="remove"><img src="images/Cart/remove.png" alt="Удалить" title="Удалить" /></td>
                                        </tr>
                                        <tr>
                                            <td class="td-center image xs-hidden">             
                                                <a href="single-product.php">
                                                    <img src="images/products/1.png" alt="Твердотопливный котел НГ-24" title="Твердотопливный котел НГ-24" />
                                                </a>
                                            </td>
                                            <td class="td-left">
                                                <a class="link link_color_light link_decoration_underline" href="single-product.php">Твердотопливный котел НГ-24</a>
                                            </td>
                                            <td class="td-left td-model">НГ-24</td>
                                           <td class="td-left">
                                                <span class="quantity" >
                                                    <input type="number" value="1" size="5"/>
                                                    <div class="quantity_minus"></div>
                                                    <div class="quantity_plus"></div>  
                                                </span>
                                            </td>
                                            <td class="td-right td-price xs-hidden">13,100грн.</td>
                                            <td class="td-right">13,100грн.</td>
                                            <td class="remove"><img src="images/Cart/remove.png" alt="Удалить" title="Удалить" /></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                                <div class="table-row">
                                    <div class="total-row">
                                        <div class="title">Сумма:</div>
                                        <div class="sum">28,200грн.</div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="total-row">
                                        <div class="title">Итого:</div>
                                        <div class="total-sum">28,200грн.</div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <label for="cupon">Купон:</label>
                                    <input type="text" id="cupon">
                                </div>
                                <div class="table-row">
                                    <label for="voucher">Подарочный сертификат:</label>
                                    <input type="text" id="voucher">
                                </div>
                                <div class="table-row">
                                    <button class="full-btn">Применить</button>
                                </div>
                                
                            </div>
                            <div class="form-block-left">
                                <div class="form_block">
                                    <div class="form_header_row">
                                        <div class="form_title">Покупатель</div>
                                        <a href="" class="link link_color_light link_decoration_underline">Я зарегистрирован</a>
                                    </div>
                                    <div class="form_row">
                                        <div class="warning">Вы будете зарегистрированы!</div>
                                        <label><span class="required">*</span>Телефон</label>
                                        <input type="phone" placeholder="Введите Ваш телефон" >
                                        <div style="display:none;" class="red-warning">Телефон должен быть от 3 до 32 символов!</div>
                                    </div>
                                    <div class="form_row">
                                        <label>Email</label>
                                        <input type="email" placeholder="Введите Ваш email"  >
                                        <div style="display:none;" class="red-warning">Адрес уже зарегистрирован!</div>
                                        <div style="display:none;" class="red-warning">Некорректный адрес электронной почты!</div>
                                    </div> 
                                </div>                            
                                <div class="form_block" id="checkout_shipping_address"  >
                                    <div class="form_header_row">
                                        <div class="form_title">Адрес доставки</div>
                                    </div>
                                    <div class="form_row">
                                        <label><span class="required">*</span>Имя</label>
                                        <input type="text" placeholder="Введите Ваше имя">
                                        <div style="display:none;" class="red-warning">Имя должно быть от 1 до 32 символов!</div>
                                    </div>
                                    <div class="form_row">
                                        <label><span class="required">*</span>Фамилия</label>
                                        <input type="text" placeholder="Введите Вашу фамилию">
                                        <div style="display:none;"  class="red-warning">Фамилия должна быть от 1 до 32 символов!</div>
                                    </div>
                                    <div class="form_row">
                                        <label><span class="required">*</span>Адрес</label>
                                        <input type="text" placeholder="Введите Ваш адрес" >
                                        <div style="display:none;" class="red-warning">Адрес должен быть от 3 до 128 символов!</div>
                                    </div>   
                                </div>

                            </div>
                            <div class="form-block-right">
                                <div class="form_block" id="checkout_payment" >
                                    <div class="form_header_row">
                                        <div class="form_title">Способ оплаты</div>
                                    </div>
                                     
                                    <div class="form_row"> 
                                        <div class="red-warning" style="display:none">Вы должны выбрать способ оплаты!</div>
                                        <input type="radio" name="delivery" checked="checked" id="after-payment" />
                                        <label for="after-payment">Оплата при доставке</label>
                                    </div>
                                    <div class="form_row">
                                        <input type="radio" name="delivery" checked="checked" id="on-card" />
                                        <label for="on-card">Перевод на карту</label>
                                    </div>                    
                                </div>
                                <div class="form_block" id="checkout_comment">
                                    <div class="form_header_row">
                                        <div class="form_title">Комментарий</div>
                                    </div>
                                    <div class="form_row">
                                        <textarea name="comment" placeholder="Напишите комментарий"></textarea>
                                    </div>
                                </div>

                            </div>
                            
                            
                            <div class="form_footer_block">
                                <div id="checkout_bottom" style="width:100%;height:1px;clear:both;"></div>
                                <div class="wait-warning" style="display:none;">Подождите... Происходит переход к оплате</div>
                                <button class="full-btn">Оформить заказ</button>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</main>



<?php include_once 'footer.php' ?>
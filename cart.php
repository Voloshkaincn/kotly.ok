<?php include_once 'header.php' ?>

<main class="cart-content">
    <div class="container">
        <div class="content">

            <div class="content-cell">
                <div class="workspace">
                    <div class="breadcrumbs">
                        <a class="link link_color_light link_decoration_underline" href="index.php">Главная</a>
                        <p class="link">Корзина покупок</p>
                    </div>
                    <div class="cart">
                        <div class="cart-header">
                            <div class="title">Корзина покупок</div>
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
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="td-center image  xs-hidden">             
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
                                                <input type="image" src="images/Cart/update.png" alt="Применить" title="Применить" />
                                                <img src="images/Cart/remove.png" alt="Удалить" title="Удалить" />
                                            </td>
                                            <td class="td-right  td-price  xs-hidden">13,100грн.</td>
                                            <td class="td-right">13,100грн.</td>
                                        </tr>
                                                    <tr>
                                            <td class="td-center image  xs-hidden">             
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
                                                <input type="image" src="images/Cart/update.png" alt="Применить" title="Применить" />
                                                <img src="images/Cart/remove.png" alt="Удалить" title="Удалить" />
                                            </td>
                                            <td class="td-right td-price xs-hidden">13,100грн.</td>
                                            <td class="td-right">13,100грн.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-opportunity">
                                <div class="title">Воспользуйтесь дополнительными возможностями</div> 
                                <div class="opportunity-content">
                                    <div class="opportunity-info">Если у вас есть код купона на скидку или бонусные баллы, которые вы хотите использовать, выберите соответствующий пункт. Также можно приблизительно узнать стоимость доставки в ваш регион.</div>
                                    <div class="switch opportunity-row">
                                        <input type="radio" name="opportunity" value="coupon" id="use_coupon" />
                                        <label for="use_coupon">Использовать купон на скидку</label>
                                    </div>
                                    <div class="switch opportunity-row">
                                        <input type="radio" name="opportunity" value="voucher" id="use_voucher" />
                                        <label for="use_voucher">Использовать подарочный сертификат</label>
                                    </div>
                                    <div class="switch opportunity-row">
                                        <input type="radio" name="opportunity" value="shipping" id="shipping_estimate" />
                                        <label for="shipping_estimate">Оценка стоимости доставки и налоговых сборов</label>
                                    </div>   
                                </div>
                            </div> 
                            <div class="cart-module">
                                <div id="coupon" class="module-content" style="display: none;">
                                    <form action="" method="post">
                                        <div class="module-content__title">Введите код купона:</div>
                                        <input type="text" name="coupon" value="" />
                                        <input type="hidden" name="next" value="coupon" />
                                        <br>
                                        <button class="full-btn">Применить купон</button>
                                    </form>
                                </div>
                                <div id="voucher" class="module-content" style="display: none;">
                                      <form action="" method="post">
                                        <div class="module-content__title">Введите код подарочного сертификата:</div>
                                        <input type="text" name="voucher" value="" />
                                        <input type="hidden" name="next" value="voucher" />
                                        <button class="full-btn">Применить подарочный сертификат</button>
                                      </form>
                                </div>
                                <div id="shipping" class="module-content" style="display: none;">
                                    <div class="module-content__title">Укажите ваш регион для оценки слоимости доставки.</div>
                                    <div class="form_row">
                                        <label for="country_id"><span class="required">*</span> Страна:</label>
                                            <select name="country_id" id="country_id">
                                                <option value=""> --- Выберите --- </option>
                                                <option value="13">Австралия</option>
                                                <option value="14">Австрия</option>
                                                <option value="15">Азербайджан</option>
                                                <option value="2">Албания</option>
                                                <option value="3">Алжир</option>
                                                <option value="7">Ангилья</option>
                                                <option value="6">Ангола</option>
                                                <option value="5">Андорра</option>
                                                <option value="8">Антарктида</option>
                                                <option value="9">Антигуа и Барбуда</option>
                                                <option value="151">Антильские (Нидерландские) острова</option>
                                                <option value="10">Аргентина</option>
                                                <option value="11">Армения</option>
                                                <option value="12">Аруба</option>
                                                <option value="1">Афганистан</option>
                                                <option value="16">Багамские острова</option>
                                                <option value="18">Бангладеш</option>
                                                <option value="19">Барбадос</option>
                                                <option value="17">Бахрейн</option>
                                                <option value="22">Белиз</option>
                                                <option value="20">Белоруссия (Беларусь)</option>
                                                <option value="21">Бельгия</option>
                                                <option value="23">Бенин</option>
                                                <option value="24">Бермудские острова</option>
                                                <option value="33">Болгария</option>
                                                <option value="26">Боливия</option>
                                                <option value="27">Босния и Герцеговина</option>
                                                <option value="28">Ботсвана</option>
                                                <option value="30">Бразилия</option>
                                                <option value="31">Британская территория в Индийском океане</option>
                                                <option value="32">Бруней</option>
                                                <option value="34">Буркина-Фасо</option>
                                                <option value="35">Бурунди</option>
                                                <option value="25">Бутан</option>
                                                <option value="227">Вануату</option>
                                                <option value="228">Ватикан</option>
                                                <option value="222">Великобритания</option>
                                                <option value="97">Венгрия</option>
                                                <option value="229">Венесуэла</option>
                                                <option value="231">Виргинские острова (Британские)</option>
                                                <option value="232">Виргинские острова (США)</option>
                                                <option value="4">Восточное Самоа</option>
                                                <option value="61">Восточный Тимор</option>
                                                <option value="230">Вьетнам</option>
                                                <option value="78">Габон</option>
                                                <option value="93">Гаити</option>
                                                <option value="92">Гайана</option>
                                                <option value="79">Гамбия</option>
                                                <option value="82">Гана</option>
                                                <option value="87">Гваделупа</option>
                                                <option value="89">Гватемала</option>
                                                <option value="90">Гвинея</option>
                                                <option value="91">Гвинея-Бисау</option>
                                                <option value="81">Германия</option>
                                                <option value="83">Гибралтар</option>
                                                <option value="95">Гондурас</option>
                                                <option value="96">Гонконг</option>
                                                <option value="86">Гренада</option>
                                                <option value="85">Гренландия</option>
                                                <option value="84">Греция</option>
                                                <option value="80">Грузия</option>
                                                <option value="88">Гуам</option>
                                                <option value="57">Дания</option>
                                                <option value="58">Джибути</option>
                                                <option value="59">Доминика</option>
                                                <option value="60">Доминиканская Республика</option>
                                                <option value="63">Египет</option>
                                                <option value="237">Заир</option>
                                                <option value="238">Замбия</option>
                                                <option value="234">Западная Сахара</option>
                                                <option value="181">Западное Самоа</option>
                                                <option value="239">Зимбабве</option>
                                                <option value="104">Израиль</option>
                                                <option value="99">Индия</option>
                                                <option value="100">Индонезия</option>
                                                <option value="108">Иордания</option>
                                                <option value="102">Ирак</option>
                                                <option value="101">Иран</option>
                                                <option value="103">Ирландия</option>
                                                <option value="98">Исландия</option>
                                                <option value="195">Испания</option>
                                                <option value="105">Италия</option>
                                                <option value="235">Йемен</option>
                                                <option value="39">Кабо-Верде</option>
                                                <option value="109">Казахстан</option>
                                                <option value="40">Каймановы острова</option>
                                                <option value="36">Камбоджа</option>
                                                <option value="37">Камерун</option>
                                                <option value="38">Канада</option>
                                                <option value="173">Катар</option>
                                                <option value="110">Кения</option>
                                                <option value="55">Кипр</option>
                                                <option value="115">Киргизия (Кыргызстан)</option>
                                                <option value="111">Кирибати</option>
                                                <option value="44">Китайская Народная Республика</option>
                                                <option value="46">Кокосовые острова</option>
                                                <option value="47">Колумбия</option>
                                                <option value="48">Коморские острова</option>
                                                <option value="49">Конго</option>
                                                <option value="112">Корейская Народно-Демократическая Республика</option>
                                                <option value="51">Коста-Рика</option>
                                                <option value="52">Кот д'Ивуар</option>
                                                <option value="54">Куба</option>
                                                <option value="114">Кувейт</option>
                                                <option value="116">Лаос</option>
                                                <option value="117">Латвия</option>
                                                <option value="119">Лесото</option>
                                                <option value="120">Либерия</option>
                                                <option value="118">Ливан</option>
                                                <option value="121">Ливия</option>
                                                <option value="123">Литва</option>
                                                <option value="122">Лихтенштейн</option>
                                                <option value="124">Люксембург</option>
                                                <option value="136">Маврикий</option>
                                                <option value="135">Мавритания</option>
                                                <option value="127">Мадагаскар</option>
                                                <option value="137">Майотта</option>
                                                <option value="125">Макао</option>
                                                <option value="126">Македония</option>
                                                <option value="128">Малави</option>
                                                <option value="129">Малайзия</option>
                                                <option value="131">Мали</option>
                                                <option value="130">Мальдивы</option>
                                                <option value="132">Мальта</option>
                                                <option value="144">Марокко</option>
                                                <option value="134">Мартиника</option>
                                                <option value="133">Маршалловы острова</option>
                                                <option value="138">Мексика</option>
                                                <option value="224">Мелкие отдаленные острова США</option>
                                                <option value="139">Микронезия</option>
                                                <option value="145">Мозамбик</option>
                                                <option value="140">Молдова</option>
                                                <option value="141">Монако</option>
                                                <option value="142">Монголия</option>
                                                <option value="143">Монтсеррат</option>
                                                <option value="146">Мьянма</option>
                                                <option value="147">Намибия</option>
                                                <option value="148">Науру</option>
                                                <option value="149">Непал</option>
                                                <option value="155">Нигер</option>
                                                <option value="156">Нигерия</option>
                                                <option value="150">Нидерланды</option>
                                                <option value="154">Никарагуа</option>
                                                <option value="157">Ниуэ</option>
                                                <option value="153">Новая Зеландия</option>
                                                <option value="152">Новая Каледония</option>
                                                <option value="160">Норвегия</option>
                                                <option value="221">Объединенные Арабские Эмираты</option>
                                                <option value="161">Оман</option>
                                                <option value="29">Остров Буве</option>
                                                <option value="158">Остров Норфолк</option>
                                                <option value="45">Остров Рождества</option>
                                                <option value="197">Остров Святой Елены</option>
                                                <option value="50">Острова Кука</option>
                                                <option value="169">Острова Питкэрн</option>
                                                <option value="217">Острова Теркс и Кайкос</option>
                                                <option value="162">Пакистан</option>
                                                <option value="163">Палау</option>
                                                <option value="164">Панама</option>
                                                <option value="165">Папуа - Новая Гвинея</option>
                                                <option value="166">Парагвай</option>
                                                <option value="167">Перу</option>
                                                <option value="170">Польша</option>
                                                <option value="171">Португалия</option>
                                                <option value="172">Пуэрто-Рико</option>
                                                <option value="113">Республика Корея</option>
                                                <option value="174">Реюньон</option>
                                                <option value="176">Российская Федерация</option>
                                                <option value="177">Руанда</option>
                                                <option value="175">Румыния</option>
                                                <option value="64">Сальвадор</option>
                                                <option value="182">Сан-Марино</option>
                                                <option value="183">Сан-Томе и Принсипи</option>
                                                <option value="184">Саудовская Аравия</option>
                                                <option value="202">Свазиленд</option>
                                                <option value="159">Северные Марианские острова</option>
                                                <option value="186">Сейшельские острова</option>
                                                <option value="198">Сен-Пьер и Микелон</option>
                                                <option value="185">Сенегал</option>
                                                <option value="180">Сент-Винсент и Гренадины</option>
                                                <option value="178">Сент-Китс и Невис</option>
                                                <option value="179">Сент-Люсия</option>
                                                <option value="236">Сербия и Черногория</option>
                                                <option value="188">Сингапур</option>
                                                <option value="205">Сирия</option>
                                                <option value="189">Словакия</option>
                                                <option value="190">Словения</option>
                                                <option value="223">Соединенные Штаты Америки</option>
                                                <option value="191">Соломоновы острова</option>
                                                <option value="192">Сомали</option>
                                                <option value="199">Судан</option>
                                                <option value="200">Суринам</option>
                                                <option value="187">Сьерра-Леоне</option>
                                                <option value="207">Таджикистан</option>
                                                <option value="209">Таиланд</option>
                                                <option value="206">Тайвань (провинция Китая)</option>
                                                <option value="208">Танзания</option>
                                                <option value="210">Того</option>
                                                <option value="211">Токелау</option>
                                                <option value="212">Тонга</option>
                                                <option value="213">Тринидад и Тобаго</option>
                                                <option value="218">Тувалу</option>
                                                <option value="214">Тунис</option>
                                                <option value="216">Туркменистан</option>
                                                <option value="215">Турция</option>
                                                <option value="219">Уганда</option>
                                                <option value="226">Узбекистан</option>
                                                <option value="220" selected="selected">Украина</option>
                                                <option value="233">Уоллис и Футуна</option>
                                                <option value="225">Уругвай</option>
                                                <option value="70">Фарерские острова</option>
                                                <option value="71">Фиджи</option>
                                                <option value="168">Филиппины</option>
                                                <option value="72">Финляндия</option>
                                                <option value="69">Фолклендские (Мальвинские) острова</option>
                                                <option value="73">Франция</option>
                                                <option value="74">Франция, Метрополия</option>
                                                <option value="75">Французская Гвиана</option>
                                                <option value="76">Французская Полинезия</option>
                                                <option value="77">Французские Южные территории</option>
                                                <option value="94">Херд и Макдональд, острова</option>
                                                <option value="53">Хорватия</option>
                                                <option value="41">Центрально-Африканская Республика</option>
                                                <option value="42">Чад</option>
                                                <option value="56">Чехия</option>
                                                <option value="43">Чили</option>
                                                <option value="204">Швейцария</option>
                                                <option value="203">Швеция</option>
                                                <option value="201">Шпицберген и Ян Майен</option>
                                                <option value="196">Шри-Ланка</option>
                                                <option value="62">Эквадор</option>
                                                <option value="65">Экваториальная Гвинея</option>
                                                <option value="66">Эритрея</option>
                                                <option value="67">Эстония</option>
                                                <option value="68">Эфиопия</option>
                                                <option value="194">Южная Джорджия и Южные Сандвичевы острова</option>
                                                <option value="193">Южно-Африканская Республика</option>
                                                <option value="106">Ямайка</option>
                                                <option value="107">Япония</option>
                                            </select>
                                    </div>
                                    <div class="form_row">
                                        <label for=""><span class="required">*</span> Регион / область:</label>
                                        <select name="zone_id"></select>
                                    </div>        
                                    <div class="form_row">
                                        <label for=""><span id="postcode-required" class="required">*</span> Почтовый индекс:</label>
                                        <input type="text" name="postcode"/>
                                    </div>
                                    <div class="form_row">
                                        <button class="full-btn">Узнать цены</button>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="cart-total">
                                <div class="total-row">
                                    <div class="title">Сумма:</div>
                                    <div class="sum">28,200грн.</div>
                                </div>
                                <div class="total-row">
                                    <div class="title">Итого:</div>
                                    <div class="total-sum">28,200грн.</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="index.php" class="link back-arrow">Продолжить покупки</a>
                                <a href="checkout.php" class="full-btn">Оформить заказ</a>   
                            </div>
                        </div>   
       
                    </div>
                </div>

            
        </div>
    </div>
</main>



<?php include_once 'footer.php' ?>
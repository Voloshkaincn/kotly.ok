<?php
include_once 'header.php';
?>
<main class="main-content">
    <div class="container">
        <div class="content">
            <div class="content-cell">
                <div class="single-product-description">
                    <a class="back-arrow link" href="single-product.php">ТВЕРДОТОПЛИВНЫЙ КОТЕЛ КЭ-17-М</a>
                    <div class="product-description-text">
                        <div class="tag-title link active tag-comments"><p>Отзывы (2)</p></div>
                        <div class="text_tag-comments">
                            <div class="comments">
                                <div class="comment">
                                    <div class="comment-name">Андрей</div>
                                    <div class="comment-text">Очень хороший твердотопливный котел. Экономный и цена дешевая. По скидке вообще класс!</div>
                                    <div class="stars">
                                        <div class="stars">
                                            <img src="images/single-product/star-full.png" alt="star">
                                            <img src="images/single-product/star-full.png" alt="star">
                                            <img src="images/single-product/star-full.png" alt="star">
                                            <img src="images/single-product/star-full.png" alt="star">
                                            <img src="images/single-product/star-empty.png" alt="star">
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comment-name">БОНИФАЦИЙ</div>
                                    <div class="comment-text">Не подскажете, на какую площадь отопления он рассчитан?</div>
                                    <div class="stars">
                                        <img src="images/single-product/star-full.png" alt="star">
                                        <img src="images/single-product/star-full.png" alt="star">
                                        <img src="images/single-product/star-full.png" alt="star">
                                        <img src="images/single-product/star-full.png" alt="star">
                                        <img src="images/single-product/star-empty.png" alt="star">
                                    </div>
                                </div>

                            </div>
                            <form class="give-comment" action="">
                                <div class="give-comment_title">Написать отзыв:</div>
                                <textarea class="give-comment_name" name="name" rows="1" placeholder="Ваше имя ..."></textarea>
                                <textarea class="give-comment_text" name="text" rows="5" placeholder="Текст отзыва ..."></textarea>
                                <div class="prevention">Внимание: HTML не поддерживается! Используйте обычный текст</div>
                                <div class="give-rating">
                                    <div class="appellation">Ваша оценка:</div>
                                    <div id="bad" class="rating">Плохо</div>
                                    <div class="give-stars">
                                        <input id="star5" name="stars" type="radio"><label class="star" for="star5"></label>
                                        <input id="star4" name="stars" type="radio"> <label class="star" for="star4"></label>
                                        <input id="star3" name="stars" type="radio"><label class="star" for="star3"></label>
                                        <input id="star2" name="stars" type="radio"><label class="star" for="star2"></label>
                                        <input id="star1" name="stars" type="radio"><label class="star" for="star1"></label>
                                    </div>
                                    <div id="good" class="rating">Хорошо</div>
                                </div>
                                <div class="control">
                                    <div class="appellation">Введите код, указанный на картинке:</div>
                                    <input class="control-kod" type="text">
                                    <img class="control-img" src="images/single-product/control/control-image.png" alt="control">
                                </div>
                                <button class="button give-comment_button">Опубликовать</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="product-description-mobil">
                    <a class="tag-product link" href="single-product.php"><p>Товар</p></a>
                    <a class="tag-specifications link" href="product-specifications.php"><p>Технические характеристики</p></a>
                    <a class="tag-description link" href="product-description.php"><p>Описание</p></a>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
include_once 'footer.php';
?>

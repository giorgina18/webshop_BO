<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products container" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/5.jpg" alt="">
            </div>
            <div class="ratting-product">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
            </div>
        </div>

        <div class="trending-products_right">
            <div class="products-text">
                <h2>Flix Flox <span>Jeans</span></h2>
                <h5>Informatie Flix Flox Jeans</h5>
                <p>De Flix Flox Jeans bieden stijl, comfort en duurzaamheid, ideaal voor dagelijks gebruik en casual gelegenheden.</p>
                <p>
                    Kenmerken:<br>

                    -Premium Denim: Hoogwaardige stoffen voor comfort en pasvorm.<br>
                    -Modern Design: Trendy en veelzijdig.<br>
                    -Duurzaam: Sterke materialen en robuuste stiksels.<br>
                    -Verschillende Stijlen: Slim fit tot relaxed fit.<br>
                    -Comfortabel: Stretchdenim voor bewegingsvrijheid.<br></p>
                    <p>
                Kies voor Flix Flox Jeans en geniet van een tijdloze en veelzijdige look.</p>

            </div>
            <div class="price">
                <p>$24,99 </p>
            </div>
            <a href="#" class="trending-products__atc"><i class='bx bx-cart-download'></i>Add to cart</a>

        </div>
        <article class="modal a-popup hidden" id="js--shoppingModal">
            &#10003;Added to Cart
        </article>


</main>


<?php
require_once '../template-parts/footer.php';
?>
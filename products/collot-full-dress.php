<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products container" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/8.jpg" alt="">
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
                <h2>Collot Full <span>Dress</span></h2>
                <h5>Informatie Collot Full Dress </h5>
                <p>De Informatie Collot Full Dress is de ultieme keuze voor elke formele gelegenheid. Dit elegante ensemble combineert klassiek vakmanschap met modern design,
                    perfect voor gala's, bruiloften en diplomatieke evenementen.<br></p>
                <p>
                    Kenmerken:<br>
                    -Hoogwaardige Stoffen: Luxe en comfortabel.<br>
                    -Precisie Maatwerk: Perfecte pasvorm gegarandeerd.<br>
                    -Compleet Pakket: Inclusief jas, broek, overhemd, vest en stropdas.<br>
                    -Tijdloos Design: Klassiek en elegant.<br>
                </p>
                <p>
                    Kies voor de Informatie Collot Full Dress en straal vertrouwen en klasse uit bij elke speciale gebeurtenis.</p>

            </div>
            <div class="price">
                <p>$49,99 </p>
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
<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products container" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/3.jpg" alt="">
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
                <h2>Half Running <span>Suit</span></h2>
                <h5>Informatie Half Running Suit </h5>
                <p>Het Half Running Suit is de ideale outfit voor sporters die zowel stijl als functionaliteit willen tijdens hun trainingen. Perfect voor hardlopen, fitness en andere sportactiviteiten.
                </p>
                <p>
                Kenmerken:<br>

                -Hoogwaardige Stoffen: Ademend en vochtafvoerend materiaal voor optimaal comfort.<br>
                -Moderne Snit: Stijlvol ontwerp dat bewegingsvrijheid biedt.<br>
                -Duurzaam: Gemaakt van sterke, slijtvaste materialen.<br>
                -Veelzijdig: Geschikt voor diverse sportactiviteiten.<br>
                -Comfortabel: Elastische tailleband en ergonomische pasvorm.<br></p>
                <p>
                Kies voor het Half Running Suit en ervaar de perfecte combinatie van stijl, comfort en prestaties tijdens elke training.</p>
            </div>
            <div class="price">
                <p>$14,99 </p>
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
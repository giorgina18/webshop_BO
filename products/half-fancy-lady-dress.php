<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products container" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/4.jpg" alt="">
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
                <h2>Half Fancy Lady <span>Dress</span></h2>
                <h5>Informatie Half Fancy Lady Dress </h5>
                <p>De Half Fancy Lady Dress is een elegante keuze voor vrouwen die op zoek zijn naar stijl en comfort bij speciale gelegenheden.</p>
                <p>
                    Kenmerken:<br>

                    -Hoogwaardige Stoffen: Gemaakt van luxe materialen voor een comfortabele pasvorm.<br>
                    -Stijlvol Ontwerp: Elegant en eigentijds, geschikt voor diverse formele en semi-formele evenementen.<br>
                    -Duurzaamheid: Kwalitatieve afwerkingen voor langdurig gebruik.<br>
                    -Veelzijdigheid: Geschikt voor verschillende gelegenheden.<br>
                    -Comfortabel: Ontworpen om de hele dag te dragen.<br></p>
                <p>
                    Kies voor de Half Fancy Lady Dress en straal zelfvertrouwen uit bij elke gelegenheid.</p>
            </div>
            <div class="price">
                <p>$39,99 </p>
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
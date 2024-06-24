<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/1.jpg" alt="">
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
                <h2>Half Running <span>Set</span></h2>
                <h5>Informatie Half Running Set </h5>
                <p>Inhoud:<br>
                    -12-16 weken trainingsschema<br>
                    -Hoogwaardige hardloopschoenen<br>
                    -Ademend en vochtafvoerend kleding<br>
                    -Hydratatieflessen en vesten<br>
                    -Energierepen en gels passen erin<br>
                    -GPS sporthorloge en zonnebril<br>
                    Alles wat je nodig hebt om je halve marathon te voltooien. Bestel nu!</p>
            </div>
            <div class="price">
                <p>$39,99 - $49,99</p>
            </div>
            <a href="#" class="trending-products__atc">Add to cart</a>

        </div>
        <article class="modal a-popup hidden" id="js--shoppingModal">
            &#10003;Added to Cart
        </article>


</main>


<?php
require_once '../template-parts/footer.php';
?>
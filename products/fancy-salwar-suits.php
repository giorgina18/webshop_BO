<?php
require_once '../template-parts/header.php';
?>


<main>
    <section class="trending-products container" id="trending">
        <div class="trending-products_left">
            <div class="product-fotos">
                <img src="../image/6.jpg" alt="">
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
                <h2>Fancy Salwar <span>Suits</span></h2>
                <h5>Informatie Fancy Salwar Suits </h5>
                <p>
                    De Informatie Fancy Salwar Suits zijn perfect voor feestelijke gelegenheden, bruiloften en speciale evenementen. <br> 
                    Ze combineren elegantie met comfort en zijn gemaakt van hoogwaardige stoffen.
                    </p>
                    <p>
                    Kenmerken:<br>

                    -Luxe Stoffen: Voor een elegante uitstraling en comfort.<br>
                    -Verfijnd Vakmanschap: Handgemaakte afwerking.<br>
                    -Stijlvol Design: Traditioneel met een moderne twist.<br>
                    -Compleet Pakket: Inclusief tuniek, broek en dupatta.<br>
                    -Diverse Kleuren: Breed scala aan kleuren en patronen.<br>
                    </p>
                    <P>
                    Kies voor Informatie Fancy Salwar Suits en straal stijl en zelfvertrouwen uit bij elke gelegenheid.</P>
            </div>
            <div class="price">
                <p>$34,99 </p>
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
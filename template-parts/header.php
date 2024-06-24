<?php
$rootDir = dirname(__DIR__, 1);  // Move up one directory level
require_once($rootDir . '/functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop Kumo</title>
    <link rel="stylesheet" href="<?= getRootUrl(); ?>css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- navbar -->
    <header>
        <a href="#" class="logo"><img src="../image/logo.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="#">HomeShop</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Page</a></li>
            <li><a href="#">Docs</a></li>
        </ul>

        <div class="nav-icon">

            <!-- searchbar -->
            <a href="#"><i class='bx bx-search'></i></a>

            <!-- user -->

            <a href="#"><i class='bx bx-user'></i></a>

            <!-- shopping cart -->
            <a href="#"><i class='bx bx-cart'></i></a>

            <!-- search bar  -->
            <div class="searchbar">
                <input id="js--searchBar" type="text" placeholder="Search for a product here..." class="searchBar__input">
                <i class="  fa-solid fa-magnifying-glass searchBar__glass "></i>
            </div>


            <!-- shopping cart button -->
            <button id="js--checkoutButton" class="shoppingCart">
                <span class="checkoutButton__tobasket">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <div class="shoppingCart__message"><small>0</small></div>
            </button>

            <!-- menu icon -->
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
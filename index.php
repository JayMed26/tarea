<!DOCTYPE html>
<html lang="en">

<?php include "fragments/head.php"; ?>

<body>
    <?php include "fragments/header.php"; ?>
    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
        <div class="slide">
            <a href="shoppageShoes.html" class="slide-button">Start shopping</a>
        </div>
        <div class="slide">
            <a href="shoppageTop.html" class="slide-button">Start shopping</a>
        </div>
        <div class="slide">
            <a href="shoppageBottom.html" class="slide-button">Start shopping</a>
        </div>
    </div>
    <main class="content">
        <div class="card">
            <img src="/images/topc.png" alt="Progearhub top wear">
            <div class="card-content">
                <a href="shoppageTop.html" class="card-button">Shop Top Wear</a>
            </div>
        </div>
         <div class="card">
            <img src="/images/buttomc.png" alt="Progearhub buttom wear">
            <div class="card-content">
                <a href="shoppageBottom.html" class="card-button">Shop Buttom Wear</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/shoesc.png" alt="Progearhub shoes">
            <div class="card-content">
                <a href="shoppageShoes.html" class="card-button">Shop Shoes</a>
            </div>
        </div>
        <div class="banner">
            <a href="#" Class="baner-button">Shop Items</a>
        </div>
        <div class="card">
            <img src="/images/mujer.png" alt="a woman running">
            <div class="card-content">
                <a href="#" class="card-button">Shop Womens</a>
            </div>
        </div>
         <div class="card">
            <img src="/images/hombre.png" alt="a man playing tennis">
            <div class="card-content">
            <a href="#" class="card-button">Shop Mens</a>
            </div>
        </div>
        <div class="card">
            <img src="/images/niño.png" alt="child playing basketball">
            <div class="card-content">
                <a href="#" class="card-button">Shop Kids</a>
            </div>
        </div>
    </main>
 <?php include "fragments/footer.php"; ?>
</body>

</html>
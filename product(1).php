<?php
$coffe=[
    [
        "nom"=>"Nescafé Latte","prix"=>"130.99","reduction"=>"134.99","image"=>"images/product-25.JFIF","button"=>"Read more"
    ],
    [
        "nom"=>"Nescafé Capuccino","prix"=>"150.99","reduction"=>"159.99","image"=>"images/product-26.JFIF","button"=>"Read more"
    ],
    [
        "nom"=>"Nescafé Gold Vanilla","prix"=>"155.99","reduction"=>"160.99","image"=>"images/product-27.JFIF","button"=>"Read more"
    ],
    [
        "nom"=>"Nescafé Caramel latte","prix"=>"135.99","reduction"=>"140.99","image"=>"images/product-24.JPG","button"=>"Read more"
    ],[
        "nom"=>"McCafe Breakfast Blend Gold","prix"=>"125.99","reduction"=>"140.99","image"=>"images/product-20.jfif","button"=>"Read more"
    ],[
        "nom"=>"McCafe Colombian Crisp and Complex","prix"=>"135.99","reduction"=>"150.99","image"=>"images/product-18.WEBP","button"=>"Read more"
    ],[
        "nom"=>"McCafe Salted Chocolate Mocha","prix"=>"155.99","reduction"=>"170.99","image"=>"images/product-9.jfif","button"=>"Read more"
    ],[
        "nom"=>"McCafe Caramel Light Mocha","prix"=>"155.99","reduction"=>"170.99","image"=>"images/product-8.JPEG","button"=>"Read more"
    ],[
        "nom"=>"ChekHub King","prix"=>"96.99","reduction"=>"105.99","image"=>"images/product-21.jfif","button"=>"Read more"
    ],[
        "nom"=>"ChekHub Classic","prix"=>"85.99","reduction"=>"90.99","image"=>"images/product-22.jfif","button"=>"Read more"
    ],[
        "nom"=>"ChekHub White","prix"=>"75.99","reduction"=>"80.99","image"=>"images/product-12.JFIF","button"=>"Read more"
    ],[
        "nom"=>"ChekHub White Dark","prix"=>"95.99","reduction"=>"100.99","image"=>"images/product-10.JFIF","button"=>"Read more"
    ],
    
];


?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="product.css">
   
    <title>Document</title>
</head>
<body>
<?=include "nav.php"?>
    
    <!-- <section> -->
        <div id="banner">
        <video src="images/product.mp4" class="intro"  autoplay loop></video>
    
    </div>
    <!-- </section> -->

    <section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>
    
    

    <div class="box-container">
    <?php   foreach ($coffe as $v=> $c) {?>
    

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src=<?=$c["image"]?> alt="">
            </div>
            <div class="content">
                <h3><?=$c["nom"]?> </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Dhs <?=$c["prix"]?> <span><?=$c["reduction"]?></span></div>
            </div>
            <a href="detail.php?id=<?=$v?>" class="btn"><?=$c["button"]?></a href="detail.php?id=1">
            
        </div>
        <?php }?>
        

    </div>


</section>

    <?=include "footer.php"?>

<script src="js/script.js"></script>
    
</body>
</html>
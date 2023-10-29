<?php
include "produits.php";
$index=$_GET["id"];
$prod=$produits[$index];






?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>


<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="inner-card"> <img src="<?=$prod['image']?>" class="img-fluid rounded">
            <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                <h4><?=$prod['nom']?> </h4> <span class="heart"><i class="fa fa-heart"></i></span>
            </div>
            <div class="mt-2 px-2"> <small><?=$prod['description']?></small> </div>
            <div class="px-2">
                <h3>Dhs <?=$prod['prix']?> <span><?=$prod["reduction"]?></span></h3>
            </div>
            <div class="px-2 mt-3"> <button class="btn btn-primary px-3">Buy Now</button> <button class="btn btn-outline-primary px-3">Add to cart</button> <button class="btn btn-outline-primary px-3" onclick="history.back()">Products</button> </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
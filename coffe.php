<?php 

include "produits.php";
$blogs=[
    [ "title"=>"Vietnamese Iced Coffee","date"=>"by admin / 29th November, 2021","description"=>"Sweetened condensed milk and strong coffee come together in this decadent recipe from Vietnam. It’s not exactly diet food, but is a treat for your taste buds!","image"=>"images/blog-1.jpeg","button"=>"Read more"],
    [ "title"=>"Rich and mellow cold brew","date"=>"by admin / 29th November, 2021","description"=>"You can make this versatile coffee ahead and enjoy it throughout a hot summer week. Plus, see our ideas for sweetening your cold brew!","image"=>"images/blog-2.jpeg","button"=>"Read more"],
    [ "title"=>"Java chip fappucino","date"=>"by admin / 29th November, 2021","description"=>"You don’t have to find a Starbucks to enjoy this sweet treat. Blend ice, chocolate chips, espresso, and milk to make a tasty homemade version.","image"=>"images/j.webp","button"=>"Read more"],
];
$coffe=[
    [
        "nom"=>"Nicaraga coffe","prix"=>"30.99","reduction"=>"34.99","image"=>"images/product-1.png","button"=>"Read more"
    ],
    [
        "nom"=>"Mexico coffe","prix"=>"50.99","reduction"=>"59.99","image"=>"images/product-2.png","button"=>"Read more"
    ],
    [
        "nom"=>"Peru coffe","prix"=>"35.99","reduction"=>"40.99","image"=>"images/product-3.png","button"=>"Read more"
    ],
    
];


























?>






































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini projet</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<?=include "nav.php";?>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in the morning</h3>
        <p>Fresh coffee for afresh morning. We make the mornings better. We make the nights longer. Sweet bitterness to the last drop.</p>
        <a href="#" class="bt">get yours now</a>
    </div>
<div>
    <!-- <img src="images/morning.jpg" alt=""> -->
</div>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our coffee special?</h3>
            <p>Rescuing the Forests. To keep up with the high demand for coffee, space is required. To make space, trees are sacrificed.</p>
            <p>Supporting Farmers. Corporations are the prime culprits for producing sun-grown coffee.</p>
            <p>Sustainability. Using a Nespresso machine requires capsules, these capsules produce waste.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>
    <div class="box-container">

    <?php   foreach ($produits as $c=> $p) {?>


        <div class="box">
            <img src=<?=$p["image"]?> alt="">
            <h3><?=$p["nom"]?></h3>
            <div class="price">Dhs <?=$p["prix"]?>  <span><?=$p["reduction"]?></span></div>
            <a href="details.php?id=<?=$c?>" class="btn"><?=$p["button"]?></a href="details.php?id=1">
        </div>
        <?php }?>
 </div>
</section>


<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>
    
    

    <div class="box-container">
    <?php foreach ($coffe as $c ) { ?>
    

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
            <a href="product.php" class="btn"> <?=$c["button"]?> </a>

            
        </div>
        <?php }?>
        

    </div>


</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>This place is amazing! They offered the best coffee and showed the best attitude to its costumers. Internet connection is very fast and is unlimited as well. This place is indeed perfect for studying and chilling out. It was very quiet and air-conditioned. I just want to keep coming back to this place. Thank you!</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>Papa Waly SARR</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>This coffee shop is my favorite place to hang and do my works. I really like this place because it has a good ambiance and not too crowded as well. The coffee and pastries that they had were so delicious. The barista was so friendly and pleasant to talk with. One thing that I got fascinated by this place.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Maria Elkadiri</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>If you’re looking for a place where to relax and read some novels or whatever, this coffee shop would be the best. They have the best coffee available and even some fresh baked goods as well. The ambiance of this shop was so relaxing, and the staffs are highly capable.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>Iron Man</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number" required>
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>
    
    <div class="box-container">

    
     <?php foreach ($blogs as $b ) {?>
        <div class="box">
            <div class="image">
                <img src=<?=$b["image"]?> alt="">
            </div>
            <div class="content">
                <a href="#" class="title"><?=$b["title"]?></a>
                <span><?=$b["date"]?></span>
                <p><?=$b["description"]?></p>
                <a href="#" class="btn"><?=$b["button"]?></a>
            </div>
        </div>
        <?php  }?>
    </div>
    
</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="product.php">products</a>
        <a href="#">review</a>
        <a href="contact.php">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">Café <span>Matinal</span>| By Papa Waly <span>SARR</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
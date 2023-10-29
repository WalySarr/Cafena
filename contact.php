<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
    <?=include "nav.php"?>
    
    <!-- <section> -->
        <div id="banner">
        <video src="images/video.mp4" class="intro" muted autoplay></video>
    
    </div>
    <!-- </section> -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="row">

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    <form action="papewalysarr27@gmail.com"  method="post">
        <h3>get in touch</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" name="name" placeholder="name">
        </div>
        <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-phone"></span>
            <input type="number" name="number" placeholder="number">
        </div>
        <a href="receive.php">
        <input type="submit" value="contact now" class="btn">
        </a>
    </form>

</div>

</section>

<section class="footer">
    <?=include "footer.php";?>
</section>

<script src="js/script.js"></script>

</body>
</html>
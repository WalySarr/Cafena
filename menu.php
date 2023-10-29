<?php 
include "nav.php";
include "products.php";






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="menu.css">

    <title>Menu de produits</title>
</head>
<body>
    <section class="home" id="home">

    <div class="content">
        <h3>Coffee Quotes to Wake You Up Every Morning</h3>
        <p>Whether you’re a caffeine queen or just need your morning cup, these coffee quotes are brewed for your pleasure!</p>
        <a href="#" class="bt">get yours now</a>
     </div>
    </section>
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
     <footer><?=include "footer.php";?></footer>
     <script src="js/script.js"></script>


</body>
</html>
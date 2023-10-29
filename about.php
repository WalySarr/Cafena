<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="abouts.css">

    <title>Document</title>
</head>
<body>
    <?= include "nav.php"?>
 
    <!-- <section> -->
    <div id="banner">
        <video src="images/about.mp4" class="intro"  autoplay loop></video>
    
    </div>
    <!-- </section> -->

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
<?=include "footer.php"?>
</body>
</html>
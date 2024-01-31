<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>Carrousel Swiper</title>
</head>
<body>
<div class="main">
    <div class="carousel">
        <div class="carousel-descr">
            <h1 class="carousel-title">UNICERT 2024</h1>
            <p class="carousel-text">
            Découvrez le concert caritatif Unicert 2024, un événement musical diversifié avec des stars de tous genres. 
            Idéal pour tous les âges, cet événement promet des sensations uniques et mémorables !
            </p>
            <a href="#artistes" class="carousel-button">EN SAVOIR PLUS</a>
        </div>
        <div class="carousel-images">
            <img src="img/image1.jpg" alt="img1">
            <img src="img/image2.jpg" alt="img2">
            <img src="img/image3.jpg" alt="img3">
        </div>
        <button class="previous" onclick="moveSlides(-1)"><i class="fa fa-chevron-left"></i></button>
        <div class="carousel-dots">
            <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
        <button class="next" onclick="moveSlides(1)"><i class="fa fa-chevron-right"></i></button>
    </div>
</div>

</body>
</html>

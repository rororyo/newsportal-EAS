<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/home.css">
</head>
<body>

<div class="grid-container container">
    <div class="jumbotron">
        <img src="./assets/images/KPK.jpg" alt="" class="jumbotron-image">
    </div>
    <div class="adv col-4">
        <h1>Advertisement</h1>
    </div>
    <div class="news-item">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <div class="card news-card" style="width: 18rem;">
                <img src="./assets/images/KPK.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./public/js/home.js"></script>
</body>
</html>

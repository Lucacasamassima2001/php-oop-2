<?php
include __DIR__ . '/models/Product.php';
include __DIR__ . '/models/Cuccia.php';
include __DIR__ . '/models/Cibo.php';
include __DIR__ . '/models/Gioco.php';
include __DIR__ . '/data.php';

    // var_dump($cuccia);
    // var_dump($cucciaCane);
    // var_dump($cucciaGatto);
    // var_dump($ciboCane);
    // var_dump($giocoCane);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-commerce</title>
</head>
<body>
    <header>
        <h1>E-commerce</h1>
    </header>

    <div class="container-big d-flex gap-5 justify-content-center py-3 my-4 flex-wrap">
        <?php foreach($Products as $Product){
            ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $Product->urlimg ?>" class="card-img-top" alt="<?= $Product->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $Product->name?></h5>
                    <p class="card-text"><?= $Product->category?></p>
                    <p class="card-text"><?= $Product->price . '$'?></p>
                </div>
            </div><?php
        }?>
    </div>
    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


<!-- TO DO 

FUNCTION TO SELECT ICON
DISPLAY PROPERTIES
CSS ADJUSTMENTS
DISPLAY BY CATEGORIES 

-->



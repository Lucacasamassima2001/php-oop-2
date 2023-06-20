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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>E-commerce</title>
</head>
<body>
    <div class="container-big bg-success bg-gradient text-center py-3">
            <h1 class="text-light py-5 fw-bold">The Ark E-commerce</h1>
            <h3 class="text-light">Animals are better than people...for real!</h3>
    </div>
    

    <div class="container-big d-flex gap-5 justify-content-center py-3 flex-wrap bg-success bg-opacity-25">
        <?php foreach($Products as $Product){
            ?>
            <div class="card bg-success bg-opacity-75 text-light" style="width: 18rem;">
                <img src="<?= $Product->urlimg ?>" class="card-img-top" style="height: 18rem" alt="<?= $Product->name ?>">
                <div class="card-body">
                    <h4 class="card-title"><?= $Product->name?></h4>
                    <p class="card-text"><?= $Product->showCategory($Product->category)?></p>
                    <p class="card-text"><?= 'Prezzo:' . ' ' . $Product->price . '$'?></p>
                    <p class="card-text">
                        <?php if($Product instanceof Cibo){?>
                        <?= 'Scade il:' . ' ' . $Product->getScadenza()?><?php
                        }else if($Product instanceof Gioco){?>
                            <?= 'Valutazione:' . ' ' . $Product->getPoints() . ' ' . '<i class="fa-solid fa-star" style="color:yellow;"></i>'?><?php
                        }else if($Product instanceof Cuccia){?>
                            <?= 'Usato:' . ' ' . $Product->getStatus()?><?php
                        }?>
                        
                    </p>
                </div>
            </div><?php
        }?>
    </div>
    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


<!-- TO DO 
DISPLAY BY CATEGORIES 
-->



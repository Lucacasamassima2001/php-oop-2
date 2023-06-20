<?php

    $Products = [
        $cuccia = new Cuccia('cuccia per cani e gatti', '<i class="fa-solid fa-paw"></i>', 80, 'imgs/cuccia-generica.jpg','no'),
        $cucciaCane = new Cuccia('cuccia per cani', '<i class="fa-solid fa-dog"></i>', 50,'imgs/cuccia.jpg', 'si'),
        $cucciaGatto = new Cuccia('cuccia per gatti', '<i class="fa-solid fa-cat"></i>', 30,'imgs/cuccia-gatto.jpg', 'no'),
        $ciboCane = new Cibo('cibo per cane', '<i class="fa-solid fa-dog"></i>', 12, 'imgs/cibo-cane.jpg', '12/07/2023'),
        $ciboGatto = new Cibo('cibo per gatto', '<i class="fa-solid fa-cat"></i>', 12, 'imgs/cibo-gatto.jpg', '11/23/2023'),
        $ciboGenerico = new Cibo('cibo Generico', '<i class="fa-solid fa-paw"></i>', 30, 'imgs/cibo-generico.jpg', '08/05/2023'),
        $giocoCane = new Gioco('Gioco per cane', '<i class="fa-solid fa-dog"></i>', 23,'imgs/gioco-cane.jpg', 5),
        $giocogatto = new Gioco('Gioco per gatto', '<i class="fa-solid fa-cat"></i>', 23,'imgs/gioco-gatto.jpg', 5),
    ];

    

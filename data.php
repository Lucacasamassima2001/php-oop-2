<?php

    $Products = [
        $cuccia = new Cuccia('cuccia per cani e gatti', 'generico', 80, 'imgs/cuccia-generica.jpg','no'),
        $cucciaCane = new Cuccia('cuccia per cani', 'cane', 50,'imgs/cuccia.jpg', 'si'),
        $cucciaGatto = new Cuccia('cuccia per gatti', 'gatto', 30,'imgs/cuccia-gatto.jpg', 'no'),
        $ciboCane = new Cibo('cibo per cane', 'cane', 12, 'imgs/cibo-cane.jpg', '12/07/2023'),
        $ciboGatto = new Cibo('cibo per gatto', 'gatto', 12, 'imgs/cibo-gatto.jpg', '11/23/2023'),
        $ciboGenerico = new Cibo('cibo Generico', 'generico', 30, 'imgs/cibo-generico.jpg', '08/05/2023'),
        $giocoCane = new Gioco('Gioco per cane', 'cane', 23,'imgs/gioco-cane.jpg', 5),
        $giocogatto = new Gioco('Gioco per gatto', 'gatto', 23,'imgs/gioco-gatto.jpg', 5),
    ];

    

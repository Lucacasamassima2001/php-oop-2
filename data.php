<?php

    $Products = [
        $cuccia = new Cuccia('cuccia per cani e gatti', 'cani e gatti', 80, 'imgs/cuccia-generica.jpg','no'),
        $cucciaCane = new Cuccia('cuccia per cani', 'cani', 50,'imgs/cuccia.jpg', 'si'),
        $cucciaGatto = new Cuccia('cuccia per gatti', 'gatti', 30,'imgs/cuccia-gatto.jpg', 'no'),
        $ciboCane = new Cibo('cibo per cane', 'cani', 12, 'imgs/cibo-cane.jpg', '12/07/2023'),
        $ciboGatto = new Cibo('cibo per gatto', 'gatti', 12, 'imgs/cibo-gatto.jpg', '12/07/2023'),
        $giocoCane = new Gioco('Gioco per cane', 'cani', 23,'imgs/gioco-cane.jpg', 5),
        $giocogatto = new Gioco('Gioco per gatto', 'gatti', 23,'imgs/gioco-gatto.jpg', 5),
    ];

    

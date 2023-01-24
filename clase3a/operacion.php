<?php

    $base = $_GET['base'];
    $altura = $_GET['altura'];


    $area = ($base * $altura) / 2;
    $ ss = [
        "result"=> $area
    ]
     
    

    echo json_encode($ss);






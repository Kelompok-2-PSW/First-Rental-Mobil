<?php
    $json = '
    {
        "type" : "Donut",
        "name" : "Cake",
        "toppings" : [
            {"id" : "5002", "type" : "Glazed"}, 
            {"id" : "5006", "type" : "Chocolate with Sprinkles"}, 
            {"id" : "5004", "type" : "Maple"}
        ]
    }';

    $yummy = json_decode($json, true);
    //Kode ini ha,pir sama dengan bagian 07, namun pada bagian ini anda
    //diberikan contoh data jdon nested , dan bagaimana cara mengaksesnya.

    echo 'Type : ' .$yummy['type']. '<br>';
    echo 'Name : ' .$yummy['name']. '<br>';
    echo 'Topping : ' .$yummy['toppings'][1]['type'];
?>
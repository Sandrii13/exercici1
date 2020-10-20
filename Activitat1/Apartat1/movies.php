<?php

$movies=[["movie"=>"IT","actor"=>"Bill Skarsgärd","character"=>"Pennywise","year"=>"2017"],
        ["movie"=>"Joker","actor"=>"Joaquin Phoenix","character"=>"Arthur Fleck","year"=>"2019"],
        ["movie"=>"Múltiple","actor"=>"James McAvoy","character"=>"Kevin Wendell Crumb","year"=>"2016"]
    ];

if(isset($_GET["movie"])){
    $mov=($_GET["movie"]);
    foreach($movies as $movie){
        if(array_search($mov,$movie)){
            $name=$movie["movie"];
            $actor=$movie["actor"];
            $character=$movie["character"];
            $year=$movie["year"];
            echo "<p>Informació sobre la pel·licula <b>$name</b>.</p>
                <p>Basat en la teva entrada, aquí tens la informació:</p>
                <p><b>$actor</b> protagonitza com <b>$character</b> la pel·licula <b>$name</b> que es va produir al <b>$year</b>.</p>";
    }
    }
}else{
    echo "Selecciona una pel·licula.";
}
?>
<?php

    include_once("Dados.php");

    foreach($pokemonsData as $pokemon){
        echo "<a href=Catalogo.php?id=$pokemon[id]><b>$pokemon[Name]</b></a> <br>";
        // echo "<a href=?pg=Catalogo&id=$pokemon[id]><b>$pokemon[Name]</b></a> <br>";
    }
    $method = "get";
    // foreach($pokemonsData as $pokemon){
    //     $name = "$pokemon[id]";
    //     echo "<form action=Catalogo.php&id=$pokemon[id] method=$method>
    //     <input type=hidden name=id value=$name>
    //     <input type=submit value=$pokemon[Name]>
    //     <value=$name>
    //     </form>";
    // }

    echo "<br>";
    // <form action="?pg=Catalogo&id=$pokemon[id]" method="get">
    // <input type="submit" value="$pokemon[Name]">
    // </form>

    






?>

<!-- <form action="?pg=Catalogo&id=$pokemon[id]" method="get">
    <input type="submit" value="$pokemon[Name]">
</form> -->
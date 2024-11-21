<?php

    include_once("Classes.php");
    echo "CATA CATA CATA CATA";
    $id = $_GET['id'];
    $pokemon = new Pokemon($id);
    
    Catalogo::ShowPokemon($pokemon);












?>
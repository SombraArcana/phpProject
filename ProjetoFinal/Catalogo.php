<?php

    include_once("Classes.php");
    $id = $_REQUEST['id'];
    $pokemon = new Pokemon($id);
    
    Catalogo::ShowPokemon($pokemon);












?>


<nav>
    <a href="index.php">Voltar</a>
</nav>
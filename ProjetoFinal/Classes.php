<?php

class Catalogo{
    public static $pokemon;
    
    public static function ShowId($pokemon){
        $id = $pokemon->id;
        echo "<p>o id é $id </p>";
    }
    public static function ShowName($pokemon){
        $Name = $pokemon->Name;
        echo "<p>o Name é $Name </p>";
    }
    public static function ShowPoke($pokemon){
        $Pokemon = $pokemon->Pokemon;
        echo "<p>o Pokemon é $Pokemon </p>";
    }
    
    
    
    
    
    
    static function ShowPokemon($pokemon){
        echo "<h1>Catálogo</h1>";
        Catalogo::ShowId($pokemon);
        Catalogo::ShowName($pokemon);
        Catalogo::ShowPoke($pokemon);
    }


    
}

class Pokemon{

    function __construct($id,$Name,$Pokemon){
        $this->id = $id;
        $this->Name = $Name;
        $this->Pokemon = $Pokemon;
    }
    public $id;
    public $Name;
    public $Pokemon;
}







?>








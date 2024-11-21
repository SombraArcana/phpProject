<?php

    include_once("Dados.php");
    // Adicionar outros Pokémons conforme necessário...



function Implodas($array){
    $implodido = implode(" , ",$array);
    return "<b>$implodido</b>";
}

function GetPokemon($id){
    global $pokemonsData;
    $pokeTable = $pokemonsData[$id];
    if(!$pokeTable){
        echo "Erro , não foi possivel achar pokemon";
        return ;
    }
    return $pokeTable;
}

class Catalogo{
    public static $pokemon;
    
    public static function ShowId($pokemon){
        $id = $pokemon->id;
        echo "<p>o id é $id </p>";
    }
    public static function ShowName($pokemon){
        $Name = $pokemon->Name;
        echo "<p>o Name é <b>$Name</b> </p>";
    }
    public static function ShowAttributes($pokemon){
        $Attributes = Implodas($pokemon->Attributes);
        // foreach($Pokemon as $atribute){
        //     echo
        // }


        echo "<p>Os Atributos São: $Attributes </p>";
    }
    public static function ShowAttacks($pokemon){
        $Attacks = $pokemon->Attacks;
        echo "<h3>Os Ataques do Pokemon São: </h3>";
        foreach($Attacks as $Atacks){

        echo "<p> <b>$Atacks</b> </p>";

        }
    }
    public static function ShowPowers($pokemon){
        $Powers = Implodas($pokemon->Powers);
        echo "<p>Os poderes do Pokemon são: $Powers </p>";
    }
    public static function ShowEvolutions($pokemon){
        $Evolutions = Implodas($pokemon->Evolutions);
        echo "<p>As Evoluções do pokemon são: $Evolutions </p>";
    }
    
    
    
    
    
    
    static function ShowPokemon($pokemon){
        echo "<h1>Catálogo</h1>";
        Catalogo::ShowName($pokemon);
        Catalogo::ShowAttributes($pokemon);
        Catalogo::ShowAttacks($pokemon);
        Catalogo::ShowPowers($pokemon);
        Catalogo::ShowEvolutions($pokemon);

    }


    
}

class Pokemon{

    public $id;
    public $Name;
    public $Attributes;
    public $Attacks;
    public $Powers;
    public $Evolutions;

    

    function __construct($id){
        $poketable = GetPokemon($id);
        $this->Name = $poketable["Name"];
        $this->Attributes = $poketable["Attributes"];
        $this->Attacks = $poketable["Attacks"];
        $this->Powers = $poketable["Powers"];
        $this->Evolutions = $poketable["Evolutions"];
    }
    
}







?>







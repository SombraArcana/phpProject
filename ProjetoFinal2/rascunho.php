<?php

    include_once("Dados.php");

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
        echo "<p class='pokemon-id'>ID: $id</p>";
    }
    
    public static function ShowName($pokemon){
        $Name = $pokemon->Name;
        echo "<h2 class='pokemon-name'>$Name</h2>";
    }
    
    public static function ShowAttributes($pokemon){
        $Attributes = Implodas($pokemon->Attributes);
        echo "<p class='pokemon-attributes'>Atributos: $Attributes</p>";
    }
    
    public static function ShowAttacks($pokemon){
        $Attacks = $pokemon->Attacks;
        echo "<h3 class='pokemon-section-title'>Ataques:</h3>";
        echo "<ul class='pokemon-attacks'>";
        foreach($Attacks as $Atack){
            echo "<li><b>$Atack</b></li>";
        }
        echo "</ul>";
    }
    
    public static function ShowPowers($pokemon){
        $Powers = Implodas($pokemon->Powers);
        echo "<p class='pokemon-powers'>Poderes: $Powers</p>";
    }
    
    public static function ShowEvolutions($pokemon){
        $Evolutions = Implodas($pokemon->Evolutions);
        echo "<p class='pokemon-evolutions'>Evoluções: $Evolutions</p>";
    }

    static function ShowPokemon($pokemon){
        echo "<div class='pokemon-card'>";
        Catalogo::ShowName($pokemon);
        Catalogo::ShowId($pokemon);
        Catalogo::ShowAttributes($pokemon);
        Catalogo::ShowAttacks($pokemon);
        Catalogo::ShowPowers($pokemon);
        Catalogo::ShowEvolutions($pokemon);
        echo "</div>";
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
        $this->id = $poketable["id"];
        $this->Name = $poketable["Name"];
        $this->Attributes = $poketable["Attributes"];
        $this->Attacks = $poketable["Attacks"];
        $this->Powers = $poketable["Powers"];
        $this->Evolutions = $poketable["Evolutions"];
    }
}
?>

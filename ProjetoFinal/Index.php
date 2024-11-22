<?php 

    include_once("Classes.php");
    echo "<h1>PAGINA INICIAL POKEDEX</h1>";
    if(empty($_SERVER['QUERY_STRING'])){
        $var = "index.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        if($pg == "Listarpokemons"){
            // $pg = $_GET['pg'];
            include_once("$pg.php");
        }else{
            // include_once("$pg.php");
            // $id = $_REQUEST["id"];
            // echo $id;
            
            // header("Location: $pg.php");
        }
        // include_once("$pg.php");
        
    }

    // $id = $_REQUEST['id'];
    // echo "<a href=?pg=form_altera_cliente&id=$tabela[id]><b>[v] Alterar cadastro</b></a> <br>";





?>


<!-- 
<nav>
    <ul>
        <li><a href="?pg=conteudo">Principal</a></li>
        <li><a href="?pg=quemsomos">Quem somos</a></li>
        <li><a href="?pg=faleconosco">Contato</a></li>

    </ul>
</nav> -->

<nav>
    <a href="?pg=Listarpokemons">Catálogo</a>
</nav>
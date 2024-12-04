<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Pokémon</title>
    <style>
        /* Aqui você coloca o CSS fornecido acima */
        Estilo geral para a página
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(50, 250, 245);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 2rem;
        }

        .pokemon-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
        }

        .pokemon-name {
            font-size: 2rem;
            color: rgb(80, 120, 150);
            margin-bottom: 10px;
        }

        .pokemon-id {
            font-size: 1rem;
            color: #777;
        }

        .pokemon-attributes,
        .pokemon-powers,
        .pokemon-evolutions {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
        }

        .pokemon-section-title {
            font-size: 1.2rem;
            color: #333;
            margin-top: 20px;
        }

        .pokemon-attacks {
            list-style-type: none;
            padding-left: 0;
        }

        .pokemon-attacks li {
            font-size: 1rem;
            color: #555;
            margin-bottom: 5px;
        }

        .pokemon-card:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }

    </style>
</head>
<body>
    <h1>Catálogo de Pokémon</h1>

<?php

    include_once("Classes.php");
    $id = $_REQUEST['id'];
    $pokemon = new Pokemon($id);
    
    Catalogo::ShowPokemon($pokemon);





        












?>


<nav>
    <a class='pokemon-card' href="index.php">Voltar</a>
</nav>

</body>
</html>
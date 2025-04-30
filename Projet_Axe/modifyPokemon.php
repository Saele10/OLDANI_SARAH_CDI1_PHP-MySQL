<?php
require_once 'haut_page.php';

$pokemon = $_GET['pokemon'] ?? null;
if ($pokemon) {
    $stmt = $pdo->prepare("SELECT * FROM cartes WHERE name = :name");
    $stmt->execute([':name' => $pokemon]);
    $pokemonData = $stmt->fetch(PDO::FETCH_ASSOC);
} 
else {
    header("Location: carteBDD.php");
    exit;
}

if ($pokemonData) {
    echo '<div class="center">';
    echo '<form method="POST" class="forms modifyPokemon">'; 
    echo '<h2>Modifier le Pokemon</h2>';
    echo '<input type="hidden" name="idPokemon" value="' . $pokemonData['id'] . '">';
    echo '<label for="name">Name</label>';
    echo '<input type="text" name="name" id="name" value="' . $pokemonData['name'] . '">';
    echo '<label for="type">Type</label>';
    echo '<input type="text" name="type" id="type" value="' . $pokemonData['type'] . '">';
    echo '<label for="attackDesc1">Attack Description 1</label>';
    echo '<input type="text" name="attackDesc1" id="attackDesc1" value="' . $pokemonData['attackDesc1'] . '">';
    echo '<label for="attackDesc1">Attack Description 2</label>';
    echo '<input type="text" name="attackDesc2" id="attackDesc2" value="' . $pokemonData['attackDesc2'] . '">';
    echo '<label for="description">Description</label>';
    echo '<textarea name="description" id="description">' . $pokemonData['description'] . '</textarea>';
    echo '<input type="submit" name="update" value="Modifier le Pokemon">';
    echo '</form>';
    echo '</div>';

    if (isset($_POST['update'])) { // recup des infos du formulaire
        $idPokemon = $_POST['idPokemon'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $attackDesc1 = $_POST['attackDesc1'];
        $attackDesc2 = $_POST['attackDesc2'];
        $description = $_POST['description'];

        //MaJ du Pokemon dans la BDD
        $req = $pdo->prepare('UPDATE cartes SET name = :name, type = :type, attackDesc1 = :attackDesc1, attackDesc2 = :attackDesc2, description = :description WHERE id = :id');
        $req->execute([
            'name' => $name,
            'type' => $type,
            'attackDesc1' => $attackDesc1,
            'attackDesc2' => $attackDesc2,
            'description' => $description,
            'id' => $idPokemon
        ]);
        header('Location: carteBDD.php'); // retour sur la page carteBDD.php après la modification
    }
} else {
    echo '<p>Erreur : Pokemon introuvable.</p>';
}

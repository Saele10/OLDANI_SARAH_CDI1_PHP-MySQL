<?php
require_once 'haut_page.php';


$pokemon = $_GET['pokemon'] ?? null; // Récupération du nom du Pokémon à ajouter

if (isset($_POST['addPokemon'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $attackEnergy1 = $_POST['attackEnergy1'];
    $attackName1 = $_POST['attackName1'];
    $damage1 = $_POST['damage1'];
    $attackDesc1 = $_POST['attackDesc1'];
    $attackDesc2 = $_POST['attackDesc2'];
    $attackEnergy2 = $_POST['attackEnergy2'];
    $attackName2 = $_POST['attackName2'];
    $damage2 = $_POST['damage2'];
    $weakness = $_POST['weakness'];
    $description = $_POST['description'];
    $pokedexNb = $_POST['pokedexNb'];

    // Insertion du Pokémon dans la base de données
    $stmt = $pdo->prepare("INSERT INTO cartes (name, type, attackEnergy1, attackName1, damage1, attackDesc1, attackName2, attackEnergy2, damage2, attackDesc2, weakness, description, pokedexNb) VALUES (:name, :type, :attackEnergy1, :attackName1, :damage1, :attackDesc1, :attackName2, :attackEnergy2, :damage2, :attackDesc2, :weakness, :description, :pokedexNb)");
    $stmt->execute([
        ':name' => $name,
        ':type' => $type,
        ':attackEnergy1' => $attackEnergy1,
        ':attackName1' => $attackName1,
        ':damage1' => $damage1,
        ':attackDesc1' => $attackDesc1,
        ':attackName2' => $attackName2,
        ':attackEnergy2' => $attackEnergy2,
        ':damage2' => $damage2,
        ':attackDesc2' => $attackDesc2,
        ':weakness' => $weakness,
        ':description' => $description,
        ':pokedexNb' => $pokedexNb,
    ]);

    header("Location: carteBDD.php"); // Redirection vers la page des cartes après l'ajout
}


?>


<div class="center">
    <form method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Pokemon name" required>

        <label for="type">Type</label>
        <input type="text" name="type" id="type" placeholder="Enter Pokemon type" required>

        <label for="attackEnergy1">Attack Energy 1</label>
        <input type="text" name="attackEnergy1" id="attackEnergy1" placeholder="Enter Attack Energy 1" required>

        <label for="attackName1">Attack Name 1</label>
        <input type="text" name="attackName1" id="attackName1" placeholder="Enter Attack Name 1" required>

        <label for="damage1">Damage 1</label>
        <input type="text" name="damage1" id="damage1" placeholder="Enter Damage 1">

        <label for="attackDesc1">Attack Description 1</label>
        <input type="text" name="attackDesc1" id="attackDesc1" placeholder="Enter Attack Description 1">

        <label for="attackEnergy1">Attack Energy 2</label>
        <input type="text" name="attackEnergy2" id="attackEnergy2" placeholder="Enter Attack Energy 2" required>

        <label for="attackName1">Attack Name 2</label>
        <input type="text" name="attackName2" id="attackName2" placeholder="Enter Attack Name 2" required>

        <label for="damage1">Damage 2</label>
        <input type="text" name="damage2" id="damage2" placeholder="Enter Damage 2" >

        <label for="attackDesc1">Attack Description 2</label>
        <input type="text" name="attackDesc2" id="attackDesc2" placeholder="Enter Attack Description 2">

        <label for="weakness">Weakness</label>
        <input type="text" name="weakness" id="weakness" placeholder="Enter Weakness" required>

        <label for="description">Description</label>
        <input type="text" name="description" id="description" placeholder="Enter Description" required>

        <label for="pokedexNb">Pokedex Number</label>
        <input type="text" name="pokedexNb" id="pokedexNb" placeholder="Enter Pokedex Number" required>

        <input type="submit" name="addPokemon" value="Add Pokemon">

    </form>
</div>




<?php
require_once 'bas_page.php';
?>
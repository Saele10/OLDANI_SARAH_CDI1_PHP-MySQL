<?php
require_once 'haut_page.php';


$select = false;

if (isset($_POST['selectPokemon'])) { 
    $select = true; 
    $type = $_POST['type'];
    if ($type == "") {
        $select = false;
    }
}


if ($select) { // si il y a un filtre on recupere seulement les pokemons concernés
    $stmt = $pdo->prepare("SELECT * FROM cartes WHERE type = :type");
    $stmt->execute([':type' => $type]);
    $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stmt = $pdo->query("SELECT * FROM cartes");
    $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


foreach ($pokemons as &$pokemon) { // recup image associée à chaque Pokémon dans la bdd image
    $pokemonName = $pokemon['name']; 
    $stmt = $pdo->prepare("SELECT img FROM image WHERE name=:id");
    $stmt->execute([':id' => $pokemonName]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    $pokemon['image'] = $image ? $image['img'] : null;
}
unset($pokemon); 

if (isset($_POST['modifyPokemon'])) {
    $name = $_POST['name'];
    $stmt = $pdo->prepare("SELECT * FROM cartes WHERE name = :name");
    $stmt->execute([':name' => $name]);
    $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
    header("Location: modifyPokemon.php?pokemon=" . $name);
}
if (isset($_POST['deletePokemon'])) {
    $name = $_POST['name'];
    $stmt = $pdo->prepare("DELETE FROM cartes WHERE name = :name");
    $stmt->execute([':name' => $name]);
    header("Location: carteBDD.php");
}
echo '<section class="cards">';

if (isset($_POST['addPokemon'])) {
    $name = $_POST['name'];
    header("Location: addPokemon.php?pokemon=" . $name);
}


foreach ($pokemons as $pokemon) {
    echo '<div class="carte ' . $pokemon['type'] . '" id="' . $pokemon['name'] . '">';
    echo '<div class="headInfo">';
    echo '</div>';
    // l'affichage du header de la carte est géré par l'API mise en place au dernier rendu

    echo '<img src="' . $pokemon['image'] . '" alt="' . $pokemon['name'] . '" class="imgCarte">';


    // Affichage des attaques
    echo '<div class="attacks">';
    echo '<div class="att">';
    echo '<img src="img/energie/' . $pokemon['attackEnergy1'] . '.png" alt="' . $pokemon['type'] . ' energie" class="energie">';
    echo '<h3 class="font">' . $pokemon['attackName1'] . '</h3>';
    echo '<h3 class="degats">' . $pokemon['damage1'] . '  </h3>';
    echo '</div>';
    echo '<p class="description">' . $pokemon['attackDesc1'] . '</p>';
    echo '<div class="att">';
    echo '<img src="img/energie/' . $pokemon['attackEnergy2'] . '.png" alt="' . $pokemon['type'] . ' energie" class="energie">';
    echo '<h3 class="font">' . $pokemon['attackName2'] . '</h3>';
    echo '<h3 class="degats">' . $pokemon['damage2'] . '  </h3>';
    echo '</div>';
    echo '<p class="description">' . $pokemon['attackDesc2'] . '</p>';
    echo '</div>';




    // Affichage de la faiblesse et de la retraite
    echo '<div class="weakRetreat">';
    echo '<h6>weakness</h6>';
    echo '<img src="img/energie/' . $pokemon['weakness'] . '.png" alt="' . $pokemon['type'] . ' energie" class="energieWeak">';
    echo '<h6>x2</h6>';
    echo '<h6 class="resist">resistance</h6>';
    echo '<h6 class="retreat">retreat</h6>';
    echo '<img src="img/energie/basic.png" alt="basic energie" class="energieWeak">';
    echo '</div>';


    // Affichage du footer de la carte
    echo '<div class="footerCarte">';
    echo '<h6 class="numberPoke">' . $pokemon['pokedexNb'] . '</h6>';
    echo '<h6 class="pokeInfo">' . $pokemon['description'] . '</h6>';
    echo '</div>';
    echo '</div>'; // fin de la carte
}

echo '</section>'; // fin de la section des cartes


?>
<div class="center">
<form method="POST">
    <label for="name">Choose a Pokemon to modify</label>
    <input type="text" name="name" id="name" placeholder="Enter Pokemon name">
    <input type="submit" name="modifyPokemon" value="Modify" id="modifyPokemon">
</form>

<form method="POST">
    <label for="name">Choose a Pokemon to delete</label>
    <input type="text" name="name" id="name" placeholder="Enter Pokemon name">
    <input type="submit" name="deletePokemon" value="Delete" id="deletePokemon">
</form>

<form method="POST">
    <label for="name">Choose a Pokemon to add</label>
    <input type="text" name="name" id="name" placeholder="Enter Pokemon name">
    <input type="submit" name="addPokemon" value="Add" id="addPokemon">
</form>

<form method="POST">
    <label for="type">Choose a Pokemon type </label>
    <input type="text" name="type" id="type" placeholder="Enter Pokemon name">
    <input type="submit" name="selectPokemon" value="Select" id="selectPokemon">
</form>


</div>
<?php
require_once 'bas_page.php';
?>
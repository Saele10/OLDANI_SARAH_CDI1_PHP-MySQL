<?php
require_once 'connexion.php';

///Cours///

// $stmt = $pdo->query("SELECT * FROM book");
// echo'<pre>';
// var_dump($stmt->fetchAll(PDO::FETCH_ASSOC)); 
// // tableau multi dimensionnel avec tous les enregistrement en base 
// // PDO FECHT_ALL constante qui me permet d'avoir en index de mes tableaux, le nom des colonnes
// echo'</pre>';


///// 
///// EXEC
/////

// $sql = "INSERT INTO book (title, author, date_publication, category_idcategory) 
// VALUES( 'Le petit prince', 'Sacha Lacombe', '1997-03-28', 1 )";

// $pdo->exec($sql);

///// 
///// PREPARE & EXECUTE
/////

$sql = "INSERT INTO book (title, author, date_publication, category_idcategory, disponible) 
VALUES (:title, :author, :date_publication, :category_idcategory, :disponible)";


// $stmt = $pdo->prepare($sql); // prepare la requete, je ne l'execute pas tout de suite
// $stmt->execute([
//     ':title' => 'Harry Potter',
//     ':author' => 'J.K. Rowling',
//     ':date_publication' => '1997-06-26',
//     ':category_idcategory' => 1,
//     ':disponible' => 1
// ]); // execute la requete avec les valeurs que je lui passe dans un tableau associatif




// try{
//     $stmt = $pdo->prepare("INSERT INTO book (title, author, date_publication, category_idcategory, disponible) 
//     VALUES( :title, :author, :date_publication, :category, :disponible )");

//     $stmt->execute([
//         "title" => "Le rouge et le noir",
//         "author" => "Standall",
//         "date_publication" => "1945-01-01",
//         "category" => 1,
//         "disponible" => 1,
//     ]);

//     $stmt->execute([
//         "title" => "One piece",
//         "author" => "Oda",
//         "date_publication" => "1975-01-01",
//         "category" => 1,
//         "disponible" => 1,
//     ]);
// } catch(PDOException $e) {
//     echo $e->getMessage();
// } 

/// Cours ///

$filtrer = false; // variable pour savoir si il faut filtrer

if (isset($_POST['add'])) { //recup des infos du formulaire
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date_publication = $_POST['date_publication'];
    $category_idcategory = $_POST['category_idcategory'];
    $disponible = $_POST['disponible'];

    try {
        $stmt = $pdo->prepare($sql); // fonction INSERT INTO ligne 27
        $stmt->execute([
            ':title' => $title,
            ':author' => $author,
            ':date_publication' => $date_publication,
            ':category_idcategory' => $category_idcategory,
            ':disponible' => $disponible
        ]);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

if (isset($_POST['filtre'])) { //afficher les livre publié apres la date demandée
    $filtre = $_POST['date'];
    $filtrer = true; // true pour afficher la table filtrée
    try {
        $stmt = $pdo->prepare("SELECT * FROM book WHERE date_publication > :date");
        $stmt->execute([':date' => $filtre]);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

if (isset($_POST['reset'])) {
    $filtrer = false; // false pour afficher la table complete
}

if (isset($_GET['idBook']) && $_GET['action'] == 'delete') { // supprimer un livre 
    $id_book = $_GET['idBook'];
    try {
        $stmt = $pdo->prepare("DELETE FROM book WHERE idBook = :idBook");
        $stmt->execute([':idBook' => $id_book]);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

if ($filtrer == true) {
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC); // la table affiche uniquement les livres publier après la date demandée
} else {
    $stmt = $pdo->query("SELECT * FROM book");
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC); // la table affiche tous les livres de la BDD 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mes Livres BDD</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date de publication</th>
                <th>Catégorie</th>
                <th>Dispinible</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($books as $key => $book) {
                echo '<tr>';
                echo '<td>' . $book['title'] . '</td>';
                echo '<td>' . $book['author'] . '</td>';
                echo '<td>' . $book['date_publication'] . '</td>';
                echo '<td>' . $book['category_idcategory'] . '</td>';
                echo '<td>' . $book['disponible'] . '</td>';
                echo "<td> <a href='?idBook=" . $book["idBook"] . "&action=delete'> Supprimer </a> </td>"; // supprime le livre de la bdd
                echo "<td> <a href='modify.php?idBook=" . $book["idBook"] . "&action=modify'> Modifier </a> </td>"; // envoie sur une autre page pour modifier le livre
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <br>
    <form method=POST> <!--  formulaire pour ajouter un livre -->
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" placeholder="Titre du livre">

        <label for="author">Auteur</label>
        <input type="text" name="author" id="author" placeholder="Auteur du livre">

        <label for="date_publication">Date de publication</label>
        <input type="date" name="date_publication" id="date_publication">

        <label for="category_idcategory">Genre</label>
        <input type="integer" name="category_idcategory" id="category_idcategory" placeholder="Genre du livre">

        <label for="disponible">Disponible</label>
        <input type="boolean" name="disponible" id="disponible" placeholder="Disponiblilité du livre">

        <input type="submit" name="add" value="Ajouter un livre">
    </form>

    <form method="POST">
        <!-- filtre pour afficher seulement les livvre publier apres la date demandée -->
        <label for="date">Afficher les livres publiés après :</label>
        <input type="date" name="date" id="date" placeholder="aaaa-mm-jj">
        <input type="submit" name="filtre" value="Filtrer">
    </form>
    <form method="POST">
        <input type="submit" name="reset" value="Reset">
    </form>

</body>

</html>
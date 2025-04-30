<?php
require_once 'connexion.php';

$idbook = isset($_GET['idBook']) ? $_GET['idBook'] : null;
try { // recup des info du livre à modifier
    $stmt = $pdo->query("SELECT * FROM book WHERE idBook = '$idbook' ");
    $book = $stmt->fetch(PDO::FETCH_ASSOC); // tableau avec les infos du livre à modifier
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if ($book) { // affichage du formulaire pour modifier si le livre existe
    echo '<form method="POST">';
    echo '<input type="hidden" name="idBook" value="' . $book['idBook'] . '">';
    echo '<label for="title">Titre</label>';
    echo '<input type="text" name="title" id="title" value="' . $book['title'] . '">';
    echo '<label for="author">Auteur</label>';
    echo '<input type="text" name="author" id="author" value="' . $book['author'] . '">';
    echo '<label for="date_publication">Date de publication</label>';
    echo '<input type="date" name="date_publication" id="date_publication" value="' . $book['date_publication'] . '">';
    echo '<label for="category_idcategory">Genre</label>';
    echo '<input type="number" name="category_idcategory" id="category_idcategory" value="' . $book['category_idcategory'] . '">';
    echo '<label for="disponible">Disponible</label>';
    echo '<input type="number" name="disponible" id="disponible" value="' . $book['disponible'] . '">';
    echo '<input type="submit" name="update" value="Modifier le livre">';
    echo '</form>';
    if (isset($_POST['update'])) { // recup des infos du formulaire
        $idbook = $_POST['idBook'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $date_publication = $_POST['date_publication'];
        $category_idcategory = $_POST['category_idcategory'];
        $disponible = $_POST['disponible'];

        //MaJ du livre dans la BDD
        $req = $pdo->prepare('UPDATE book SET title = :title, author = :author, date_publication = :date_publication, category_idcategory = :category, disponible = :disponible WHERE idBook = :idBook');
        $req->execute([
            'title' => $title,
            'author' => $author,
            'date_publication' => $date_publication,
            'category' => $category_idcategory,
            'disponible' => $disponible,
            'idBook' => $idbook
        ]);
        header('Location: index.php'); // retour sur la page index.php après la modification
    }
} else {
    echo '<p>Erreur : Livre introuvable.</p>';
}

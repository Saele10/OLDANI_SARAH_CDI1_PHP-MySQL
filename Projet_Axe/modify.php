<?php
require_once 'haut_page.php';

$user = $_SESSION['pseudo'];
try { // recup des info de l'utilisateur à modifier
    $stmt = $pdo->query("SELECT * FROM user WHERE pseudo = '$user' ");
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // tableau avec les infos de l'utilisateur à modifier
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if ($user) { // affichage du formulaire pour modifier l'utilisateur si il existe
    echo '<form method="POST" class="forms logIn">';
    echo '<input type="hidden" name="iduser" value="' . $_SESSION['iduser'] . '">';
    echo '<label for="role">Email</label>';
    echo '<input type="text" name="email" value="' . $_SESSION['email'] . '">';
    echo '<label for="name">Fisrtname</label>';
    echo '<input type="text" name="name" id="name" value="' . $_SESSION['name'] . '">';
    echo '<label for="pseudo">Pseudo</label>';
    echo '<input type="text" name="pseudo" id="pseudo" value="' . $_SESSION['pseudo'] . '">';
    echo '<input type="submit" name="update" value="Modifier l\'utilisateur">';
    echo '</form>';

    if (isset($_POST['update'])) { // recup des infos du formulaire
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pseudo = $_POST['pseudo'];

        //MaJ de l'utilisateur dans la BDD
        $req = $pdo->prepare('UPDATE user SET firstName = :name, pseudo = :pseudo,  mail = :email');
        $req->execute([
            'name' => $name,
            'email' => $email,
            'pseudo' => $pseudo,
        ]);

        // Maj de la session
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['pseudo'] = $pseudo;

        header('Location: profile.php'); // retour sur la page index.php après la modification
    }
} else {
    echo '<p>Erreur : Utilisateur introuvable.</p>';
}

<?php
require_once 'haut_page.php';


if (isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
    // je vide ma session
    unset($_SESSION["iduser"]);
    unset($_SESSION["email"]);
    unset($_SESSION["pseudo"]);
    unset($_SESSION["name"]);
    header("location:login.php"); // redirection sans paramètre
} elseif (isset($_GET["action"]) && $_GET["action"] == "delete") {
    //suppresion user
    unset($_SESSION["iduser"]);
    unset($_SESSION["email"]);
    unset($_SESSION["pseudo"]);
    unset($_SESSION["name"]);

    $stmt = $pdo->prepare("DELETE FROM user WHERE id = :iduser");
    $stmt->execute([':iduser' => $_SESSION["iduser"]]);
    // vide la session

    header("location:index.php"); // redirection sans paramètre
}


?>

<h1>Your Profile</h1>
<section class="center">
    <div class="profile">
        <h2>Welcome, <?php echo $_SESSION["name"]; ?></h2>
        <p>Your email: <?php echo $_SESSION["email"]; ?></p>
        <p>Your pseudo: <?php echo $_SESSION["pseudo"]; ?></h2>
            <br>
            <a href="modify.php" class="button">Modify your profile</a>
            <br>
            <a href="?action=deconnexion">Log Out</a>
            <br>
            <a href="?action=delete">Delete Profile</a>
    </div>
</section>

</main>

<?php
require_once 'bas_page.php';
?>
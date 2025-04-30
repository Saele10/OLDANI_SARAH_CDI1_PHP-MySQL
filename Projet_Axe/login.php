<?php
require_once 'haut_page.php';


if (isset($_SESSION["iduser"])) {
    header("location:profil.php");
}

if ($_POST) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if ($email && $password) {

        $stmt = $pdo->query("SELECT * FROM user WHERE mail = '$email' ");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["iduser"] = $user["iduser"];
            $_SESSION["email"] = $user["mail"];
            $_SESSION["pseudo"] = $user["pseudo"];
            $_SESSION["name"] = $user["firstName"];
            header("location:profile.php");
        } else {
            echo "La connexion a échoué !";
        }
    }
}

?>


<section class="logIn">
    <div>
        <form method="POST">
            <div>
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <input type="submit" value="Log In" id="signIn">
        </form>
    </div>
</section>

<?php
require_once 'bas_page.php';
?>
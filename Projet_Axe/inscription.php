<?php
require_once 'haut_page.php';

require_once 'connexionBDD.php';

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $pseudo = $_POST['pseudo'];

    if ($password === $password2) {
        $stmt = $pdo->prepare("INSERT INTO user (name, firstName, pseudo, mail, password)
        VALUES(:name, :firstName, :pseudo, :email, :password )");
        $stmt->execute([
            "email" => $email,
            "name" => $name,
            "firstName" => $firstName,
            "pseudo" => $pseudo,
            "password" => password_hash($password, PASSWORD_DEFAULT),
        ]);

        echo "Inscription réussie !";
        header("location:login.php");
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}

?>





<main class="forms">
    <section class="signIn">
        <div class="success">
            <ul>
                <li>Form sent. Thank you !</li>
            </ul>
        </div>
        <div class="errorPassword">
            <ul>
                <li>Your password must have at least 8 characters</li>
                <li>Your password must contain a special character</li>
                <li>Your password must contain a number</li>
            </ul>
        </div>
        <div class="errorPseudo">
            <ul>
                <li>Your pseudo must contain more then 5 character</li>
            </ul>
        </div>
        <h3>Sign In :</h3>
        <form method="POST">
            <div>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="firstName">First name :</label>
                <input type="text" name="firstName" id="firstName">
            </div>

            <div>
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Create a password :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password2">Confirm your password :</label>
                <input type="password" name="password2" id="password2">
            </div>
            <input type="submit" value="Inscription" id="inscription">
            <input type="button" value="Log In" id="logIn" onclick="window.location.href='login.php'">
        </form>
    </section>

</main>




<script src="form.js"></script>


<?php
require_once 'bas_page.php';
?>
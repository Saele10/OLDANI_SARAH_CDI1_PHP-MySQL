<?php

// inscription dans la bdd user

require_once 'connexion.php';

if($_POST)
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (email, password)
    VALUES( :email, :password )";

    $stmt = $pdo->prepare($sql); 
    $stmt->execute([
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
    ]);

    echo "Inscription réussie !";

}


?>






<form method=POST >
        <label for="title">Email</label>
        <input type="text" name="email" id="email" placeholder="Email" >

        <label for="author">Mot de passe</label>
        <input type="text" name="password" id="password" placeholder="Mot de passe" >

        <input type="submit" value="Inscription">
    </form>
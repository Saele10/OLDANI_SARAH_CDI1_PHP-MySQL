<?php
require_once 'connexionBDD.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokemon Cards Collector</title>
</head>

<body>
    <div class="sideBar">
        <h2>View Pokemon by :</h2>
        <ul>
            <li>
                <a href="#">Generation</a>
            </li>
            <li>
                <a href="type.php">Type</a>
            </li>
        </ul>
    </div>

    <header>
        <img src="img/menu.png" alt="Menu" id="menu" class="icone">
        <a href="cartes.php"><img src="img/logo.png" alt="Logo Pokemon" id="logo"></a>
        <div>
            <img src="img/darkMode.png" alt="Dark Mode" id="dark" class="icone">
            <a href="profile.php"><img src="img/profile.png" alt="profile" id="profile" class="icone"></a>
            <img src="img/loupe.png" alt="Search" id="loupe" class="icone">
        </div>
    </header>
    <main>
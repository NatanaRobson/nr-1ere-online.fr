<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../mon-js.js"></script>
</head>
<body>
    <div class="header">
        <?=
        include "nav.php";
        ?>
        <img src="../images/paint-swirl.jpg" alt="" class="img-header"> 
    </div>

    <!-- Ajout des classes php -->
     <?php
        require_once "Classes/Autoloader.php";
        Autoloader::register();
        // require_once "Classes/Personne.php";
     ?>

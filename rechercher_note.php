<?php
    /*session_start();
    $nom = $_SESSION["name"];
    $apogee = $_SESSION["apogee"];
    $massar = $_SESSION["massar"];
    $date = date("d/m/Y");*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossier Etudiant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            letter-spacing: 1px;
        }
        .nav-txt {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1px;
            padding-left: 4px;
        }
        .nav-link i {
            font-size: 13px; 
        }
        .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }
        .container {
            width: 70%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light border-bottom">
        <div class="container">
            <img src="images/fd.jpg" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#y">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="y">
                <ul class="navbar-nav m-auto">
                    <li class="navbar-item"><a class="nav-link" href="#"><i class="fa fa-gamepad"></i><span class="nav-txt">Inscription Pédagogique</span></a></li>
                    <li class="navbar-item mx-2"><a class="nav-link" href="#"><i class="fa fa-gamepad"></i><span class="nav-txt">Notes & Résultats</span></a></li>
                    <li class="navbar-item mx-2"><a class="nav-link" href="#"><i class="fa fa-plus-circle"></i><span class="nav-txt">Réinscription</span></a></li>
                    <li class="navbar-item mx-2"><a class="nav-link" href="#"><i class="fa fa-user"></i><span class="nav-txt">Logout</span></a></li>
                </ul>
            </div>
            <img src="images/logo.jpg" alt="">
        </div>
    </nav>
    <div class="container d-flex justify-content-between mt-4">
        <p>
            <strong>NOM ET PRENOM : </strong>BILAL ABDOU <br>
            <strong>N° ETUDIANT : </strong>23053507<br>
            <strong>MASSAR : </strong>P110125268
        </p>
        <p>
            <br><strong>TETOUAN</strong>, le 28/12/2024
        </p>
    </div>
    <div class="choose">
    <div class="container">
        <span class="badge text-bg-secondary">LICENSE</span><span class="badge text-bg-secondary">MASTER</span>
    </div> 
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

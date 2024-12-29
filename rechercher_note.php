<?php
    session_start();
    $nom = $_SESSION["name"];
    $apogee = $_SESSION["apogee"];
    $massar = $_SESSION["massar"];
    $date = date("d/m/Y");
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
        .badge {
            font-size: 55px;
            font-weight:400;
        }
        .fa-book {
            margin: 10px 0;
        }
        #lic, #mas {
            display: none;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light border-bottom">
        <div class="container">
            <img src="images/fd.jpg" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#y">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="y">
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
    <div class="container d-flex justify-content-between mt-4 mb-0">
        <p class="mb-0">
            <strong>NOM ET PRENOM : </strong><?php echo $nom; ?> <br>
            <strong>N° ETUDIANT : </strong><?php echo $apogee; ?><br>
            <strong>MASSAR : </strong><?php echo $massar; ?>
        </p>
        <p>
            <br><strong>TETOUAN</strong>, le <?php echo $date; ?>
        </p>
    </div>
    <div class="container mt-0">
        <div class="container-fluid">
            <div class="row selectt">
                <div class="col-sm"></div>
                <span onclick="clickLic()" style="cursor: pointer;" class="col-sm badge text-bg-primary px-2">LICENSE <br><i class="fa fa-book"></i><br>الاجازة</span>
                <div class="col-sm"></div>
                <span onclick="clickMas()" style="cursor: pointer;" class="col-sm badge text-bg-success px-2">MASTER <br><i class="fa fa-book"></i><br>الماستر</span>
                <div class="col-sm"></div>
            </div>
        </div>
        <form action="" method="post">
            <div style="border-color: grey;" class="card mt-4 border-1" id="lic">
                <div class="card-header text-center pb-4" style="font-size: 20px; font-weight: bold;">
                    Veuillez choisir le diplôme - المرجو إختيار الدبلوم
                </div>
                <div class="card-body" style="font-size: 17px;">
                    <div class="mb-1">
                        <input type="radio" name="filiere" checked value="1" id="1">
                        <label class="fw-bold" for="1">Licence d'Etude Fondamentale - الإجازة في الدراسات الأساسية</label>
                    </div>
                    <div>
                        <input type="radio" name="filiere" value="2" id="2">
                        <label class="fw-bold" for="2">Licence Professionnelle - الإجازة المهنية</label>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <div style="border-color: grey;" class="card mt-4 border-1" id="mas">
                <div class="card-header text-center pb-4" style="font-size: 20px; font-weight: bold;">
                    Veuillez choisir le diplôme - المرجو إختيار الدبلوم
                </div>
                <div class="card-body" style="font-size: 17px;">
                    <div class="mb-1 mt-2">
                        <input type="radio" name="filiere" checked value="1" id="1">
                        <label class="fw-bold" for="1">Master - الماستر</label>
                    </div>
                    <div>
                        <input type="radio" name="filiere" value="2" id="2">
                        <label class="fw-bold" for="2">Master Spécialisé - الماستر المتخصص</label>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </form>
    </div>
    <br>
    <br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

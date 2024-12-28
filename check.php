<?php
    $con = mysqli_connect("localhost","root","","mydb");
    if (!$con) {
        die("Can't connect: ". mysqli_connect_error());
    }

    $apogee = $_POST["apogee"];
    $date = $_POST["date"];

    $sql = "SELECT * FROM students WHERE apogee='".$apogee."'";
    $req = mysqli_query($con, $sql);
    
    if (!$req || !(mysqli_num_rows($req) > 0)) {
        echo'<p style="color: #FF3333; font-weight: bold;">Login et/ou Mot de passe est incorrect !!</p>';
    }
    else {
        $data = mysqli_fetch_array($req);
        if ($date == $data['birthday']) {
            session_start();
            $_SESSION["apogee"] = $data["apogee"];
            $_SESSION["birthday"] = $data["birthday"];
            $_SESSION["name"] = $data["name"];
            $_SESSION["filiere"] = $data["filiere"];
            $_SESSION["massar"] = $data["massar"];
            header("Location: recherche_notes.php");
            exit();
        }
        else {
            echo'<p style="color: #FF3333; font-weight: bold;">Login et/ou Mot de passe est incorrect !!</p>';
        }
    }

    mysqli_close($con);
?>

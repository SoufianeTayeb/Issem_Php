<!DOCTYPE html>
<html>
<head>
    <title>Formulaire Voiture Electrique</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h3 {
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
.car-info {
    background-color: #f4f4f4;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 20px;
    text-align: center; 
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center;
}

.car-info p {
    margin: 10px 0;
}

    </style>
</head>
<body>
    <h3>Veuillez remplir les informations de la voiture électrique :</h3>
    <form method="post">
        <label for="matricule">Matricule:</label>
        <input type="text" name="matricule" required><br>

        <label for="marque">Marque:</label>
        <input type="text" name="marque" required><br>

        <label for="modele">Modèle:</label>
        <input type="text" name="modele" required><br>

        <label for="annee">Année:</label>
        <input type="number" name="annee" required><br>

        <label for="autonomie">Autonomie (en km):</label>
        <input type="number" name="autonomie" required><br>

        <button type="submit">Valider</button>
    </form>
<div class="car-info">
    <?php
    require 'Partie3.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $matricule = $_POST["matricule"];
        $marque = $_POST["marque"];
        $modele = $_POST["modele"];
        $annee = $_POST["annee"];
        $autonomie = $_POST["autonomie"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $matricule = $_POST["matricule"];
            $marque = $_POST["marque"];
            $modele = $_POST["modele"];
            $annee = $_POST["annee"];
            $autonomie = $_POST["autonomie"];
        
            if ($autonomie > 0) {
                $voitureElectrique = new VoitureElectrique($matricule, $marque, $modele, $annee, $autonomie);
                echo "<h3>Informations de la voiture électrique :</h3>";
                $voitureElectrique->Afficher();
            } else {
                $voiture = new Voiture($matricule, $marque, $modele, $annee);
                echo "<h3>Informations de la voiture :</h3>";
                $voiture->Afficher();
            }
        }
    }
    ?>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Nouvel utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        form {
            margin: 20px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="text"] {
            text-transform: uppercase;
        }

        input[type="text"]::placeholder {
            text-transform: none;
        }

        input[type="password"]::placeholder {
            font-weight: normal;
        }

        .center-button {
            text-align: center;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Nouvel utilisateur</h2>
    <div class="container">
        <form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required ><br>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom"><br>

            <label for="mail">Mail:</label>
            <input type="email" name="mail" id="mail" required><br>

            <label for="mdp">Mot de passe:</label>
            <input type="password" name="mdp" id="mdp" required><br>

            <label for="d_naissance">Date de naissance (JJ/MM/AAAA):</label>
            <input type="text" name="d_naissance" id="d_naissance" placeholder="JJ/MM/AAAA"><br>

            <div class="center-button">
                <input type="submit" name="b_ajouter" value="Envoyer">
            </div>
            

        </form>
        <div class="center-button">
         <form action="../classes/utilisateur_liste.php"><input type="submit" value="Voir la liste des utilisateur"></form>
         </div>
    </div>
    

</body>
</html>

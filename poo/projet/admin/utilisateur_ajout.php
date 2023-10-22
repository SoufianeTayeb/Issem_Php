<!DOCTYPE html>
<html>

<head>
    <title>Nouvel utilisateur</title>
    <link rel="stylesheet" href="../Css/Style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>Nouvel utilisateur</h2>
    <div class="container">
        <form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required><br>

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
    <script>
        $(document).ready(function() {
    $("#form1").submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        
        $.ajax({
            type: "POST",
            url: "utilisateur_ajout_action.php",
            data: formData,
            success: function(response) {
                // Analyser la réponse JSON
                var result = JSON.parse(response);
                if (result.success) {
                    alert(result.message);
                } else {
                    alert(result.message);
                }
                $("#form1")[0].reset();
            }
        });
    });
});

        $(document).ready(function() {
            $("#form1").submit(function(e) {
                e.preventDefault();

                var formData = $(this).serialize();
                console.log(formData);
                // Send an AJAX POST request
                $.ajax({
                    type: "POST",
                    url: "utilisateur_ajout_action.php",
                    data: formData,
                    dataType: 'json', // Ajoutez ceci pour indiquer que la réponse est au format JSON
                    success: function(response) {
                        
                        if (response.success) {
                            alert("Ajout utilisateur ok.");
                        } else {
                            alert("Erreur lors de l'ajout de l'utilisateur: " + response.message);
                        }

                        $("#form1")[0].reset();
                    }
                });
            });
        });
    </script>
 

</body>

</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec fonctions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: 0 auto; }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 5px; }
        button { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Formulaire avec fonctions</h1>

    <?php
    // Fonction PHP pour afficher la date et l'heure
    function afficherDateHeure() {
        date_default_timezone_set('Europe/Paris');
        echo "<p>Date et heure actuelles : " . date('d-m-Y H:i:s') . "</p>";
    }
    afficherDateHeure();
    ?>

    <form id="monFormulaire" method="get">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Fonction PHP pour afficher les infos du formulaire
    function afficherInfosFormulaire() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Informations du formulaire :</h2>";
            echo "<p>Nom : " . htmlspecialchars($_POST["nom"]) . "</p>";
            echo "<p>Email : " . htmlspecialchars($_POST["email"]) . "</p>";
            echo "<p>Message : " . htmlspecialchars($_POST["message"]) . "</p>";
        }
    }
    afficherInfosFormulaire();
    ?>

    <script>
    // Fonction JavaScript pour récupérer les cookies
    function getCookies() {
        let cookies = document.cookie.split(';');
        let cookieList = "";
        for (let i = 0; i < cookies.length; i++) {
            cookieList += cookies[i].trim() + "\n";
        }
        console.log("Cookies trouvés :\n" + cookieList);
    }
    getCookies();

    // Fonction JavaScript pour afficher une alerte à l'envoi du formulaire
    document.getElementById('monFormulaire').onsubmit = function(e) {
        e.preventDefault();
        alert("Formulaire envoyé !");
        this.submit();
    };
    </script>
</body>
</html>
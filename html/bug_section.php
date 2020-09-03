<html>

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="../css/bug_section.css">
</head>

<body>
    <div class="back_button_box">
        <p>
            <a href="../html/main.html">Retour</a>
        </p>
    </div>
    <div class="page_block">
        <div class="bug_report">
            <form class="form" method="POST" action="traitement.php">
                <div id="form_left">
                    <label for="pseudo">Votre pseudo</label><input type="text" name="pseudo" size="30" maxlength="20" placeholder="Indiquez votre pseudo" id="pseudo" required>
                    <br>
                    <label for="pass">Votre mot de passe</label><input type="password" name="pass" id="pass" required>
                    <br>
                    <label for="search">Recherchez votre bug</label><input type="search" size="70" maxlength="50" placeholder="Saisissez les mots-clé de votre bug afin de verifier si il n'as pas déja été signalé">
                    <br>
                    <label for="report">Saisissez votre bug</label><textarea name="bug_report" id="bug_report" cols="30" rows="10" placeholder="Expliquer le bug (où, quand, pendant quel phase de jeu, etc...)" required></textarea>
                </div>
                <div id="form_right">
                    Priorité: <br>
                    <input type="radio" name="priorite" value="faible" id="faible"><label for="faible">Faible</label><br>
                    <input type="radio" name="priorite" value="moyen" id="moyen"><label for="moyen">Moyen</label><br>
                    <input type="radio" name="priorite" value="eleve" id="eleve"><label for="eleve">Elevé</label>
                    <br>
                    <label for="frequence">Fréquence de l'aparition du bug:</label><br>
                    <select name="frequence" id="frequence">
                        <option value="tres_souvent">Tres souvent</option>
                        <option value="souvent">Souvent</option>
                        <option value="moyennement_souvent" selected>Moyennement souvent</option>
                        <option value="rare">Rare</option>
                        <option value="tres_rare">Tres rare</option>
                    </select>
                    <br>
                    <input type="submit" name="valider">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
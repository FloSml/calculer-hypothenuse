<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Calculer l'hypoténuse d'un triangle rectangle</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
    <main>
        <h1>Théorème de Pythagore<br><span>Calculer l'hypoténuse d'un triangle rectangle</span></h1>
        <div class="container-img">
            <img src="assets/img/tangente.jpg" alt="" class="img">
        </div>
        <div class="container-form">
            <form action="#" method="get">
                <div>
                    <label id="lbl_ab" for="longueur_ab">Longueur AB (en cm)</label>
                    <input id="longueur_ab" name="longueur_ab" type="text"/>
                </div>
                <div>
                    <label id="lbl_ac" for="longueur_ac">Longueur AC (en cm)</label>
                    <input id="longueur_ac" name="longueur_ac" type="text"/>
                </div>
                <div class="submit">
                    <input id="inscrire" name="inscrire" type="submit" value="Calculer"/>
                </div>
            </form>
        </div>
        <p class="result"><?php
                if (empty($_GET['longueur_ab']) && empty($_GET['longueur_ac'])) {
                    $message = "Merci d'entrer vos valeurs ci-dessus.";
                } elseif (empty($_GET['longueur_ab'])) {
                    $message = "Erreur : Merci d'entrer une valeur pour AB.";
                } elseif (empty($_GET['longueur_ac'])) {
                    $message = "Erreur : Merci d'entrer une valeur pour AC.";
                } elseif (!is_numeric($_GET['longueur_ab'])) {
                    $message = "Erreur : merci de n'entrer que des valeurs numériques.";
                } elseif (!is_numeric($_GET['longueur_ac'])) {
                    $message = "Erreur : merci de n'entrer que des valeurs numériques.";
                } else {
                    $longueur_ab = $_GET['longueur_ab'];
                    $longueur_ac = $_GET['longueur_ac'];

                    $longueur_bc_au_carre = ($longueur_ab * $longueur_ab) + ($longueur_ac * $longueur_ac);
                    $longueur_bc = sqrt($longueur_bc_au_carre);
                    
                    $message = "L'hypoténuse fait " . round($longueur_bc, 2) . " cm";
                }
                echo $message;
            ?></p>
    </main>
</body>
</html>
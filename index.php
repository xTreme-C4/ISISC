<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <title>ISISC</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="CharSet" content="UTF-8">
    <meta name="Title" content="Inscription au SISC">
    <meta name="Language" content="fr">
    <meta name="CharSet" content="UTF-8">
    <meta name="Format" content="text/html">
    <meta name="Copyright" content="Copyright (c) 2025-... Indexatech">
    <meta name="Keywords" content="scout, scouts, quebec, canada, castor, hirondelle, louveteau, exploratrice, éclaireur, intrépide, pionnier, routier">
    <meta name="Alias" content="">
    <meta name="Owner" content="DJBlack">
    <meta name="Subject" content="Inscription au SISC">
    <meta name="Description" content="Gestion des inscription au SISC">
    <meta name="Classification" content="">
    <meta name="Reply-To" content="">
    <meta name="Author" content="Indexatech, Pascal Levesque">
    <meta name="Location" content="Canada, Québec">
    <meta name="DocumentLanguageCode" content="fr">
    <meta name="Robots" content="noindex, nofollow">
    <link rel="icon" type="image/ico" href="https://asc-sisc.ca/favicon.ico">
    <style>
        .styled {
            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgb(0 119 072 / 100%);
            background-image: linear-gradient(
                to top left,
                rgb(0 0 0 / 20%),
                rgb(0 0 0 / 20%) 30%,
                rgb(0 0 0 / 0%)
            );
            box-shadow:
                inset 2px 2px 3px rgb(255 255 255 / 60%),
                inset -2px -2px 3px rgb(0 0 0 / 60%);
        }

        .styled:hover {
            background-color: rgb(255 0 0 / 100%);
        }

        .styled:active {
            box-shadow:
                inset -2px -2px 3px rgb(255 255 255 / 60%),
                inset 2px 2px 3px rgb(0 0 0 / 60%);
            
        }
    </style>
</head>
<body>
    <center>
        <div style="clear: both;background-color: #f0f0e0;color: #007748;">
            <img src="https://asc-sisc.ca/banniere_html.png">
            <div style="display: inline;float: center;background-color: #f0f0e0;color: #007748;">
                <?php 
                require 'config.php';
                require_once 'date.php';
                echo '<br>Il y a sur ISISC '.count($groupe).' districts et '.$nb_groupe.' groupes inscrits au total.<br>';
                echo 'Dernière mise à jour le : '.$last_update.'<br>';
                echo '<p>vous pouvez prendre contact avec le webmaster si vous avez des questions ou quoi que ce soit d\'autre<a href="mailto:pasmax2@gmail.com">📧</a></p>';
                echo '<br><input onclick="location.href=\'index.php\';" class="styled" type="button" value="Accueil" />';
                require 'systeme.php';
                if (isset($_GET['district']) && isset($_GET['groupe']) && isset($_GET['type']) && isset($_GET['situation'])) {
                    echo '
                    <h2>Fiche d\'inscription</h2>
                    <p>Si le site ne s\'affiche pas <a href="https://asc-sisc.ca/inscriptions.php?district='.$_GET['district'].'&groupe='.$_GET['groupe'].'&situation='.$_GET['situation'].'&type='.$_GET['type'].'" target="iframe_a">clic ici</a></p>
                    <iframe 
                        src="https://asc-sisc.ca/inscriptions.php?district='.$_GET['district'].'&groupe='.$_GET['groupe'].'&situation='.$_GET['situation'].'&type='.$_GET['type'].'" 
                        name="insription"
                        id="Iframe"
                        style="border:none; height: 3000px; width: 950px;" 
                        title="Inscription Groupe Scout">
                    </iframe>';
                }
                if (isset($_GET['district']) && $_GET['district'] == 'Nope' OR isset($_GET['groupe']) && $_GET['groupe'] == 'Nope') {
                    echo '<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf2Se927ptSanl00e4OY97IhgtGEshybP2d0Pi3GmEnm0kK6g/viewform?embedded=true" width="1000" height="1000" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours…</iframe>';
                }
                ?>
            </div>
        </div>
    </center>
</body>
</html>
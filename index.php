<!DOCTYPE HTML>
<HTML lang="fr-CA">
<HEAD>
    <title>ISISC</title>
    <META charset="UTF-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <META HTTP-EQUIV="CharSet" CONTENT="UTF-8">
    <META NAME="Title" CONTENT="Inscription au SISC">
    <META NAME="Language" CONTENT="fr">
    <META NAME="CharSet" CONTENT="UTF-8">
    <META NAME="Format" CONTENT="text/html">
    <META NAME="Copyright" CONTENT="Copyright (c) 2025-... Indexatech">
    <META NAME="Keywords" CONTENT="scout, scouts, quebec, canada, castor, hirondelle, louveteau, exploratrice, éclaireur, intrépide, pionnier, routier">
    <META NAME="Alias" CONTENT="">
    <META NAME="Owner" CONTENT="DJBlack">
    <META NAME="Subject" CONTENT="Inscription au SISC">
    <META NAME="Description" CONTENT="Gestion des inscription au SISC">
    <META NAME="Classification" CONTENT="" URL="">
    <META NAME="Reply-To" CONTENT="">
    <META NAME="Author" CONTENT="Indexatech, Pascal Levesque">
    <META NAME="Location" CONTENT="Canada, Québec">
    <META NAME="DocumentLanguageCode" CONTENT="fr">
    <META NAME="Robots" CONTENT="noindex, nofollow">

    <LINK REL="icon" TYPE="image/ico" HREF="https://asc-sisc.ca/favicon.ico">
</HEAD>
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



<body>
    <center>
        <DIV STYLE="clear: both;background-color: #f0f0e0;color: #007748;">
        <IMG SRC="https://asc-sisc.ca/banniere_html.png">
        <DIV STYLE="display: inline;float: center;background-color: #f0f0e0;color: #007748;">
        <?php 
        require_once 'config.php';
        echo '<br>Il y à sur ISISC '.count($groupe).' district et '.$nb_groupe.' groupe inscrit au total.<br>';
        echo '<br><input onclick="location.href=\'index.php\';" class="styled" type="button" value="Accueil" />';
        require_once 'systeme.php';
        if (isset($_GET['district']) && isset($_GET['groupe']) && isset($_GET['type']) && isset($_GET['situation']))
        {
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
        if (isset($_GET['district']) && $_GET['district'] == 'Nope' OR isset ($_GET['district']) && $_GET['groupe'] && $_GET['groupe'] == 'Nope')
        {
            echo ''
            . '<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf2Se927ptSanl00e4OY97IhgtGEshybP2d0Pi3GmEnm0kK6g/viewform?embedded=true" width="1000" height="1000" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours…</iframe>';
        }
        ?>
    </center>
</body>
</html>
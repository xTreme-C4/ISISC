<html>

</html>

<?php

echo '<center>';

if (!isset($_GET['district']))
{
    echo '<br>';
    echo '<form action="/index.php" method="GET">';
        echo '
            <label for="district">Choisir le district:</label>
            <select id="district" name="district">';
        foreach ($district as $x => $y) {
            echo '<option value="'.$y.'">'.$x.'</option>';
        }
        echo '</select>';
        echo '<input type="submit">';
    echo '</form>';
}       


# Vérification et select le groupe
if (isset($_GET['district']) && !isset($_GET['groupe']) && $_GET['district'] != 'Nope')
{
    echo '<br>';
    echo '<form action="/index.php" method="GET">';
        echo '
            <label for="groupe">Choisir le groupe:</label>
            <select id="groupe" name="groupe">';
        foreach ($groupe[$_GET['district']] as $gx => $gy) {
            echo '<option value="'.$gy['groupe'].'">'.$gy['name'].'</option>';
        }
        echo '</select>';
        echo '<input type="hidden" name="district" value="'.$_GET['district'].'">';
        echo '<input type="submit">';
    echo '</form>';
};

# Bouton de type d'inscription
if (isset($_GET['district']) && isset($_GET['groupe']) && $_GET['groupe'] != 'Nope')
{
    foreach ($type as $tx => $ty) {
        echo '<input onclick="location.href=\'index.php?district='.$_GET['district'].'&groupe='.$_GET['groupe'].'&type='.$ty['type'].'&situation='.$ty['situation'].'\';" class="styled" type="button" value="'.$tx.'" />';
    }
};
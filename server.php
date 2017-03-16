<?php
switch ($_POST['val']) {
    case 'HTML':
        echo "T'es en html pd";
        break;
    case 'JS':
        echo "Là tu passe en Javascript tapette";
        break;
    case 'JQUERRY':
        echo "Jquerry c'est pour les tarlouzes";
        break;
    case 'AJAX':
        echo "Et ajax ca convient parfaitement aux hatays";
        break;
    case 'SAMI':
        echo "Tahia dz";
        break;
    case 'HAMZA':
        echo "Maroc 212";
        break;
    default:
        echo "zbeeeb zbeeb";
        break;
}
//echo "Bienvenue en ".$_POST['val']." bogoss";
?>
<?php 
if (!(is_null($_SESSION["userCourant"])))
{
    if (($_SESSION["userCourant"]->getDroits() == "admin") || ($_SESSION["userCourant"]->getDroits() == "lecture") ||       ($_SESSION["userCourant"]->getDroits() == "lecture/ecriture"))
    {
    ?>
        <h1>Cette page contient des archives accessibles uniquement par les menbres de PR2L</h1>

        <p>archives accessibles uniquement par les menbres de PR2L</p>

    <?php
    }else{
    
        echo "Vous n'avez pas accès à cette page";
    }
}
else
{
    echo "Vous n'êtes pas connecté";
}
?>

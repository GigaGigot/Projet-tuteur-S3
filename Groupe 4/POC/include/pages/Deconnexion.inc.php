<?php
if (!(is_null($_SESSION["userCourant"])))
{
    echo "Au revoir ".$_SESSION["userCourant"]->getPrenom()." ".$_SESSION["userCourant"]->getNom();
    $_SESSION["userCourant"] = NULL;
}
else
{
    echo "Vous n'êtes pas connecté";   
}
?>
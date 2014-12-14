<section>
<?php
   
if(!(isset($_SESSION["userCourant"]))){$_SESSION["userCourant"]=NULL;}
	if (!empty($_GET["page"])){
		$page=$_GET["page"];
    }
    else if (!empty($_SESSION["pageConnexion"])){
        $page=$_SESSION["pageConnexion"];
    } 
    else {
        $page=1;
    }

    $db = new MyPdo();
	$mManager = new MenuManager($db);
    $menu = $mManager->getMenuByID($page);
    include_once("pages/".$menu->getLien().".inc.php");

	?>
</section>
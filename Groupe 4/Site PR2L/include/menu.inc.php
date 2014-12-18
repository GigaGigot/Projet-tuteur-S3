<?php
	$db = new MyPdo();
	$mManager = new MenuManager($db);
	$menusParent = $mManager->getAllMenusParents();
?>
	<div><a href="index.php?page=22">Connexion</a></div><br/>
<hr/>
<nav>
	<ul id="menu-deroulant">
        <?php
            foreach($menusParent as $menuP){
                $menusFils = $mManager->getAllMenusByParent($menuP->getIdMenu());
                ?>
                <li><a href="index.php?page=<?php echo $menuP->getIdMenu(); ?>"><?php echo $menuP->getLibelle(); ?></a>
                    <ul>
                    <?php
                    foreach($menusFils as $menuF){
                        ?>
                        <li><a href="index.php?page=<?php echo $menuF->getIdMenu(); ?>"><?php echo $menuF->getLibelle(); ?></a></li>
                        <?php
                    }
                    ?>
                    </ul>
                </li>
                <?php
            }
        ?>
	</ul>	
<hr/>
</nav>
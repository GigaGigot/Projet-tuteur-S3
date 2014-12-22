<?php

/* PR2LSiteBundle:Default:index.php.twig */
class __TwigTemplate_095835dd1ac1f692855d477af1a152ef3c69e5cc15d11772b2d44c23cdd071df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

function __autoload(\$className){
\t\$repClasses = 'classes/';
\trequire \$repClasses.\$className.'.class.php';
}
require_once(\"include/config.inc.php\");
require_once(\"include/header.inc.php\"); 
 
?>

<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\" ng-app=\"CMS\">
\t
\t<head>
\t\t<?php require_once(\"include/head.inc.php\"); ?>
\t</head>
\t
\t<header>
\t\t<?php require_once(\"include/header.inc.php\"); ?>
\t</header>
\t
\t<aside>
\t\t<?php require_once(\"include/moduleNews.inc.php\"); ?>
\t\t<?php require_once(\"include/contact.inc.php\"); ?>\t\t
\t</aside>
\t
\t<nav>
\t\t<?php require_once(\"include/menu.inc.php\"); ?>
\t</nav>
\t
\t<body class=\"cadre\" ng-controller=\"CMSController\">
\t\t\t<?php require_once(\"include/texte.inc.php\"); ?>
\t</body>
\t
\t<footer>
\t\t\t<?php require_once(\"include/footer.inc.php\"); ?>
\t</footer>
\t\t
</html>";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:index.php.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

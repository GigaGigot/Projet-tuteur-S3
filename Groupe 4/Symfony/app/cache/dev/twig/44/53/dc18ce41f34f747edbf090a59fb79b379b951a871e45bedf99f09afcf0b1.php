<?php

/* ::layout.html.twig */
class __TwigTemplate_4453dc18ce41f34f747edbf090a59fb79b379b951a871e45bedf99f09afcf0b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\" ng-app=\"CMS\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/image/iconePR2L.png\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/css/styleSite.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/css/styleCMS.css\" />
\t
\t<script type=\"text/javascript\" src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/js/angular.min.js\"></script>
\t<script type=\"text/javascript\" src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/js/app.js\"></script>

    ";
        // line 13
        echo twig_include($this->env, $context, "PR2LSiteBundle:Style:style.css.twig");
        echo "
    
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  
  <header>
  \t<div class=\"eltEntete\"><a href=\"\">\t<img src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/image/logo.png\" alt=\"Logo PR2L\" title=\"Logo association PR2L\" />\t</a></div>
\t<div class=\"eltEntete\">
\t\t<strong></bold><em>P</em>ôle international de <br />
\t\t<em>R</em>essources de <br />
\t\t<em>L</em>imoges et du<br />
\t\t<em>L</em>imousin<br />
\t\t<br />
\t\tAssociation pour le recensement <br />
\t\tet la valorisation des fonds d'archives<br />
\t\tdu monde ouvrier</strong>
\t</div>
  </header>
  
  <aside>
  </aside>
  
  <nav>
  \t";
        // line 36
        $this->displayBlock('menu', $context, $blocks);
        // line 38
        echo "  </nav>
  <body>

    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
  </body>
  
  <footer>
\tPôle international des<br>
\tRessources de <br>
\tLimoges et du <br>
\tLimousin
  </footer>
</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "PR2L";
    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        // line 37
        echo "  \t";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  101 => 41,  97 => 37,  94 => 36,  88 => 15,  74 => 43,  72 => 41,  67 => 38,  65 => 36,  41 => 15,  36 => 13,  22 => 1,);
    }
}

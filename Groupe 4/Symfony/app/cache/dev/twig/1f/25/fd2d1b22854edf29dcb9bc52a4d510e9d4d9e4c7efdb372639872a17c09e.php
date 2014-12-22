<?php

/* PR2LSiteBundle:Default:index.html.twig */
class __TwigTemplate_1f25fd2d1b22854edf29dcb9bc52a4d510e9d4d9e4c7efdb372639872a17c09e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/image/iconePR2L.png\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/css/styleSite.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/css/styleCMS.css\" />
\t
\t<script type=\"text/javascript\" src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/js/angular.min.js\"></script>
\t<script type=\"text/javascript\" src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/js/app.js\"></script>

    ";
        // line 15
        echo twig_include($this->env, $context, "PR2LSiteBundle:Style:style.css.twig");
        echo "

";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"eltEntete\"><a href=\"\">\t<img src=\"/opt/lampp/htdocs/Symfony/src/PR2L/SiteBundle/Site PR2L/image/logo.png\" alt=\"Logo PR2L\" title=\"Logo association PR2L\" />\t</a></div>
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
";
    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        echo " 
<hr/>
<div><nav>
\t<ul id=\"menu-deroulant\">
\t\t<li><a href=\"index.php?page=1\">PR2L</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=101\">Le projet</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=102\">Fondateurs</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=103\">Revue de presse</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=104\">Adhérer à l'association</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=105\">Vie de l'association</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"index.php?page=2\">ACTUALITES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=201\">Action / Evènements</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=202\">Quoi de neuf?</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=203\">Autour de nous?</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=3\">PARTENAIRES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=301\">Gérer les partenaires</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=4\">RESSOURCES</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=401\">Catalogue d'archives</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=402\">Bibliothèque</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=403\">Travaux de recherche</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=404\">Nos publications</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=405\">Liens utiles</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=5\">CHANTIERS</a> 
\t\t\t<ul>
\t\t\t\t<li><a href=\"index.php?page=501\">Recencement pour la mutualité</a>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"index.php?page=502\">Inventaire de la coopération en Limousin</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li><a href=\"index.php?page=6\">INTRANET</a>
\t\t\t<ul>
\t\t\t<li><a href=\"index.php?page=601\">Connexion</a></li>
\t\t\t<li><a href=\"index.php?page=602\">Creation</a></li>
            <li><a href=\"index.php?page=603\">Gestion des utilisateurs</a></li>
            <li><a href=\"index.php?page=604\">Modification d'informations</a></li>
            <li><a href=\"index.php?page=605\">Déconnexion</a></li>
\t\t</ul>
\t\t</li>
\t</ul>
</nav></div>
<hr/>
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "  
";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
        echo "    
\tPôle international des<br>
\tRessources de <br>
\tLimoges et du <br>
\tLimousin
";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 114,  161 => 113,  156 => 109,  153 => 108,  78 => 36,  63 => 23,  60 => 22,  53 => 20,  46 => 15,  36 => 7,  33 => 6,);
    }
}

<?php

/* PR2LSiteBundle:Default:accueil.html.twig */
class __TwigTemplate_652740f0a1e8cc46a7fa90bb7a6783ec3749914205945a9fff522360e1f63cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <article id=\"accueil\">


\t<h1>Le mot du président</h1>

\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pr2lsite/images/photoMotPres.jpg"), "html", null, true);
        echo "\" id=\"motPresident\">
\t<p>Madame, Monsieur,</p>

\t<p><em>2013 a été une année décisive pour le Pôle.</em>
\t</p>

\t<p>En effet, lors de notre dernière Assemblée Générale, l'association de préfiguration est devenue « Pôle International de Ressources de Limoges et du Limousin pour l'histoire du monde du travail et de l'économie sociale » (PR2L).</p>

\t<p>Un partenariat a été constitué avec la <em>Fondation du Crédit Coopératif</em> pour la réalisation de <em>l'inventaire des archives de la Coopération et de la Mutualité</em>.</p>

\t<p>Le troisième événement marquant fût l'organisation d'une journée d'étude au Palais du Luxembourg en avril 2013, sur <em>la valorisation du patrimoine et les perspectives d'avenir de l'économie sociale et solidaire en France et en Europe</em>. Cet événement fera l'objet d'une publication aux éditions PULIM au deuxième semestre 2014.</p>

\t<p>Notre association est également allée à la rencontre des directrices et directeurs <em>des centres d'archives publics du Limousin</em> pour leur présenter <em>la charte de travail en réseau</em>. Ainsi, la Mairie de Limoges a-t-elle ratifié la charte en décembre 2013.</p>

\t<p>Pour plus de précisions sur nos activités, vous trouverez en pièces jointes un document de présentation de l'association avec le bilan des activités 2013 et un descriptif des actions prévues en 2014.</p>

\t<p>Nous profitons de ce courrier pour vous annoncer que la prochaine Assemblée Générale de PR2L aura lieu le samedi 12 avril 2014 .</p>

\t<p>Pour poursuivre nos activités et atteindre les objectifs que notre association s'est fixés pour 2014-2015, notamment pérenniser l'emploi de chargée de développement, créé en 2012, nous nous appuyons sur votre soutien moral et financier. Ce soutien donne crédibilité à notre association auprès des élus et des collectivités territoriales qui nous subventionnent et qui nous subventionneront à l'avenir. Ces cotisations constituent l'une des sources de recettes et rien ne serait possible sans votre soutien. C'est pourquoi, nous nous adressons à vous pour faire partie de notre association et pour <em>solliciter de vous le versement de votre cotisation 2014</em> (voir pièce jointe dans la rubrique \"adhérer à notre association\"). Par avance, nous vous remercions et nous vous saurons gré de votre participation active à la vie de l'association et au développement de notre réseau d'adhérents.</p>

\t<p><em>Toutes informations concernant les archives de l'histoire sociale et de ses acteurs sont les bienvenues</em>.</p>



\t<p>Pour PR2L, Le Président
\t</p>


</article>
";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 6,  36 => 5,  29 => 3,);
    }
}

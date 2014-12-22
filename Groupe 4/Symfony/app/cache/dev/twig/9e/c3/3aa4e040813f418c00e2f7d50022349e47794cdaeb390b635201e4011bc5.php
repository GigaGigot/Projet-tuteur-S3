<?php

/* PR2LSiteBundle:Default:layout.html.twig */
class __TwigTemplate_9ec33aa4e040813f418c00e2f7d50022349e47794cdaeb390b635201e4011bc5 extends Twig_Template
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
<html>
\t";
        // line 3
        echo twig_include($this->env, $context, "PR2LSiteBundle:Advert:index.html.twig");
        echo "
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <nav>
  \t";
        // line 9
        $this->displayBlock('menu', $context, $blocks);
        // line 11
        echo "  </nav>
  <body>

    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "PR2L";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        // line 10
        echo "  \t";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  67 => 14,  63 => 10,  60 => 9,  54 => 6,  47 => 16,  45 => 14,  40 => 11,  38 => 9,  32 => 6,  26 => 3,  22 => 1,);
    }
}

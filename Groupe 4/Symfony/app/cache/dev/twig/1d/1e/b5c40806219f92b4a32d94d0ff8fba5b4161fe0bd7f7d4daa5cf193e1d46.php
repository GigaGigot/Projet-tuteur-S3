<?php

/* ::layout.html.twig */
class __TwigTemplate_1d1eb5c40806219f92b4a32d94d0ff8fba5b4161fe0bd7f7d4daa5cf193e1d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\" ng-app=\"CMS\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  
  <header>
  \t";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "  </header>
  
  <aside>
  </aside>
  
  <nav>
  \t";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 20
        echo "  </nav>
  <body>

    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
  </body>
  
  <footer>
\t";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "  </footer>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "PR2L";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "  \t";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "  \t";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    ";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  107 => 29,  103 => 24,  100 => 23,  96 => 19,  93 => 18,  89 => 11,  86 => 10,  80 => 6,  74 => 5,  68 => 31,  66 => 29,  60 => 25,  58 => 23,  53 => 20,  51 => 18,  43 => 12,  41 => 10,  33 => 6,  31 => 5,  25 => 1,);
    }
}

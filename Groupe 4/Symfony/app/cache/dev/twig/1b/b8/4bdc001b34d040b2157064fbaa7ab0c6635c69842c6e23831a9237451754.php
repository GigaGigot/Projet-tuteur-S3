<?php

/* PR2LSiteBundle:Style:style.css.twig */
class __TwigTemplate_1bb84bdc001b34d040b2157064fbaa7ab0c6635c69842c6e23831a9237451754 extends Twig_Template
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
        echo "<style>
body{
\tmargin-left:250px;
\tmargin-top:10px;
\tmargin-right:100px;
\tmargin-bottom: 10px;
\tpadding: 10px;
\t
\tfont-family: sans-serif;
}
section{
\tmargin: 5px;
\tborder: 1px solid lightgrey;
}

/*\t\tMENU\t\t*/
nav ul li{\t\t\t\t\t\t/* option du menu */
\tdisplay:inline-block;
\tborder: 2px solid grey;
\tborder-radius: 0px 16px 15px 16px;
\tbackground-color:#b93f3f;
\tpadding: 3px;
\ttransition-duration:0.5s;
\ttransition-timing-function: linear;
}
nav ul li:hover{
\tbackground-color: #c95a5a;
}
nav ul li a {
\ttext-decoration: none;
\tfont-size:20px;
\ttext-transform: capitalize;
\tcolor: white;
}

nav ul li ul li a{\t\t\t\t/* option de sous-menu */
\tfont-size: 15px;
}
nav ul li ul:firstchild{
\tmargin-top: 5px;
}
#menu-deroulant, #menu-deroulant ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
#menu-deroulant {
/* on centre le menu dans la page */
    text-align: center;
}
#menu-deroulant li {
/* on place les liens du menu horizontalement */
    display: inline-block;
}
#menu-deroulant ul li {
/* on enlève ce comportement pour les liens du sous menu */
    display: inherit;
}
#menu-deroulant a {
    text-decoration: none;
    display: block;
}
#menu-deroulant ul {
    position: absolute;
/* on cache les sous menus complètement sur la gauche */
    left: -999em;
    text-align: left;
}
#menu-deroulant li:hover ul {
/* Au survol des li du menu on replace les sous menus */
    left: auto;
}
/*\t\tFIN MENU\t\t*/

/*\t\tHEADER\t\t\t*/
header em{
\tbackground-color: #B52B2B;
\tcolor:white;
\t
\tborder-radius: 5px;
\tpadding:2px;
}
/*\t\tFIN HEADER\t\t*/

/*\t\tMODULES\t\t\t*/
aside {
\tposition: fixed;
\tleft:10px;
\t
\twidth:200px;
\tborder-radius: 0px 25px 15px 50px;
\tfont-size:12px;
\tcolor: white;
\tbackground-color:#b93f3f;
\t
\ttransition-duration: 0.75s;
\ttransition-timing-function: ease-out;
}
aside:hover{
\tbackground-color:#c95a5a;
}
aside a{
\tcolor: inherit;
\ttext-decoration: none;
}
aside li{
\tmargin-left:-15px;
\t
\ttransition-duration: 0.5s;
\ttransition-timing-function: linear;
}
aside li:hover{
\tpadding-top: 10px;
\tpadding-bottom: 10px;
}
aside h1{
\tmargin:5px;
\tfont-size: 20px;
\tcolor : white;
}
aside p{
\ttext-align: center;
}
/*\t\tFIN MODULE NEWS\t\t*/

/*\t\tFOOTER\t\t\t\t*/
footer {
\tcolor:grey;
\tborder: 1px solid lightgrey;
\t
/*\tposition : fixed;*/
\tbottom:10px;
\tleft: 10px;
\tfont-size:10px;
\t
\tpadding:5px;

}
/*\t\tFIN FOOTER\t\t\t*/

.eltEntete {
\tdisplay: inline-block;
    margin: 5px;
\tfont-size: 12px;
}

#connect {\t
\tborder: 2px solid grey;
\tborder-radius: 10px;
\tpadding: 3px;
}
#connect a{
\ttext-decoration:none;
\tcolor:inherit;
}

.inputBtn {
\tbackground: #d99292;
\tborder-radius: 10px;
\tfont-family: Arial;
\tcolor: #ffffff;
\tfont-size: 15px;
\tpadding: 1%;
\ttext-decoration: none;
\t
\ttransition-duration: 0.75s;
\ttransition-timing-function: ease-out;
}
.inputBtn:hover {
\tbackground: #c70000;
\ttext-decoration: none;
}

article {
\tpadding: 15px;
}
article:target{
\tborder-radius: 100px;
\tbox-shadow: 0px 0px 100px 0.5px #ffccc9;
\tbackground-color: rgba(255, 204, 201, 0.47);
}

#imagPres, #motPresident{
\tfloat : left;
\tmargin : 15px;
}
#livreAssoc {
\tfloat : left;
\tpadding : 15px;
\tpadding-top: 0px;
\tmax-height: 150px;
}

.logoPartenaires {
\theight: 50px;
\tfloat: left;
\tpadding: 15px;
}

em{
\ttext-emphasis-position: above;
\tcolor:#A40004;
\t
\tborder-radius: 5px;
\tpadding:2px;
}
#connexion {
\tdisplay:inline-block;
\tborder: 1px solid grey;
\tborder-radius: 15%;
}
#connexion div{
\ttext-align: right;
\tpadding : 4%;
\tpadding-bottom: 2%;
\tpadding-top: 3%;
}
</style>";
    }

    public function getTemplateName()
    {
        return "PR2LSiteBundle:Style:style.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

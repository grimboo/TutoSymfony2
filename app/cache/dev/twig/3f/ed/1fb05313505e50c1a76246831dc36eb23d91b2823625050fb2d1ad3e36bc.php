<?php

/* ::layout.html.twig */
class __TwigTemplate_3fed1fb05313505e50c1a76246831dc36eb23d91b2823625050fb2d1ad3e36bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t  <meta charset=\"utf-8\">
\t  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>

\t<body>
\t  <div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t  <h1>Ma plateforme d'annonces</h1>
\t\t  <p>
\t\t\tCe projet est propulsé par Symfony2,
\t\t\tet construit grâce au MOOC OpenClassrooms et SensioLabs.
\t\t  </p>
\t\t  <p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t  Participer au MOOC »
\t\t\t</a>
\t\t  </p>
\t\t</div>

\t\t<div class=\"row\">
\t\t  <div id=\"menu\" class=\"col-md-3\">
\t\t\t<h3>Les annonces</h3>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t  <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t\t  <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t</ul>

\t\t\t<h4>Dernières annonces</h4>
\t\t\t";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t  </div>
\t\t  <div id=\"content\" class=\"col-md-9\">
\t\t\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t  </div>
\t\t</div>

\t\t<hr>

\t\t<footer>
\t\t  <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
\t\t</footer>
\t  </div>

\t  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
\t</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t  ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "\t\t\t";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t  ";
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
        return array (  132 => 58,  130 => 57,  127 => 56,  123 => 45,  120 => 44,  115 => 13,  113 => 12,  110 => 11,  104 => 9,  98 => 61,  96 => 56,  89 => 52,  81 => 46,  79 => 44,  73 => 41,  66 => 37,  62 => 36,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }
}

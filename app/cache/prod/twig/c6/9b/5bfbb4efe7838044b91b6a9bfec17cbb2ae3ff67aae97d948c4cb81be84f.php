<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_c69b5bfbb4efe7838044b91b6a9bfec17cbb2ae3ff67aae97d948c4cb81be84f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  
  
  <body>
    <h1>Affichage d'une annonce</h1>
    <p>
      ";
        // line 13
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </p>

    <p>
\t  ";
        // line 19
        list($context["nom"], $context["prenom"], $context["age"]) =         array("Boin", "Jérémy", 26);
        // line 20
        echo "\t  
      Bonjour, je suis ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo ", j'ai ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans. Ici nous pourrons lire l'annonce ayant comme id : ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "<br />
      Mais pour l'instant, nous ne savons pas encore le faire, cela viendra 
    </p>
\t
\t\t";
        // line 25
        $context["monAge"] = 26;
        // line 26
        echo "\t\t";
        $context["agePote"] = 18;
        // line 27
        echo "\t\t
\t\t";
        // line 28
        if (((isset($context["agePote"]) ? $context["agePote"] : null) < (isset($context["monAge"]) ? $context["monAge"] : null))) {
            // line 29
            echo "\t\t\tLse pote est plus jeune que moi
\t\t";
        } elseif ((        // line 30
(isset($context["agePote"]) ? $context["agePote"] : null) == (isset($context["monAge"]) ? $context["monAge"] : null))) {
            // line 31
            echo "\t\t\tLe pote à le même âge que moi
\t\t";
        } else {
            // line 33
            echo "\t\t\tLe pote est plus vieux que moi
\t\t";
        }
        // line 35
        echo "\t\t
\t
\t</p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  88 => 33,  84 => 31,  82 => 30,  79 => 29,  77 => 28,  74 => 27,  71 => 26,  69 => 25,  56 => 21,  53 => 20,  51 => 19,  46 => 16,  37 => 14,  32 => 13,  19 => 1,);
    }
}

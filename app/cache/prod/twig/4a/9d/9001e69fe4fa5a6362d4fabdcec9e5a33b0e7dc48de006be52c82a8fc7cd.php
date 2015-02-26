<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_4a9d9001e69fe4fa5a6362d4fabdcec9e5a33b0e7dc48de006be52c82a8fc7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>

  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  
  
  <body>
\t
\t";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo " OC Platforme ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t
\t
\t
\t";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  52 => 14,  46 => 8,  40 => 19,  38 => 14,  29 => 8,  21 => 2,);
    }
}

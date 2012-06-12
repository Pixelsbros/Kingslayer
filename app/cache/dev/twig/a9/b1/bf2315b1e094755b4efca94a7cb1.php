<?php

/* ::layout.html.twig */
class __TwigTemplate_a9b1bf2315b1e094755b4efca94a7cb1 extends Twig_Template
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
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>Kingslayer</h1>
\t\t\t\t<p>Des milliers de h&eacute;ros... Un seul roi.</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
\t\t\t\t<p>Frenchpixels &copy; 2012</p>
\t\t\t</footer>
\t\t</div>

\t";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
\t</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Kingslayer";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t\t";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "\t\t";
        // line 38
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  99 => 38,  97 => 37,  94 => 36,  90 => 25,  87 => 24,  80 => 11,  77 => 10,  71 => 8,  65 => 41,  63 => 36,  51 => 26,  49 => 24,  36 => 13,  34 => 10,  29 => 8,  21 => 2,);
    }
}

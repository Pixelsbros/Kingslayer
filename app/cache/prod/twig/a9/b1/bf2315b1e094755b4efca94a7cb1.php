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
\t\t\t<div id=\"header\">
\t\t\t\t<h1>Kingslayer</h1>
\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t\t</div>

\t\t\t<footer>
\t\t\t\t<p>Frenchpixels &copy; 2012</p>
\t\t\t</footer>
\t\t</div>

\t";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "\t\t";
        // line 33
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 34
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
        return array (  97 => 34,  94 => 33,  92 => 32,  89 => 31,  85 => 23,  82 => 22,  75 => 11,  72 => 10,  66 => 8,  60 => 36,  58 => 31,  49 => 24,  34 => 10,  29 => 8,  21 => 2,  56 => 13,  53 => 12,  47 => 22,  45 => 12,  41 => 10,  38 => 9,  31 => 6,  28 => 5,  36 => 13,  33 => 7,  27 => 5,);
    }
}

<?php

/* KsLogBundle::layout.html.twig */
class __TwigTemplate_d8e675479874d0efe5405c4c3a90da70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'log_body' => array($this, 'block_log_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"bundles_global\">
\t\t<h1>Rejoins nous</h1>
\t\t
\t\t";
        // line 13
        $this->displayBlock('log_body', $context, $blocks);
        // line 15
        echo "\t</div>

";
    }

    // line 13
    public function block_log_body($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "KsLogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  54 => 13,  48 => 15,  46 => 13,  41 => 10,  38 => 9,  31 => 6,  28 => 5,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  36 => 8,  33 => 7,  27 => 5,);
    }
}

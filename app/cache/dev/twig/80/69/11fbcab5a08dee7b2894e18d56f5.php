<?php

/* KsLogBundle:Log:index.html.twig */
class __TwigTemplate_806911fbcab5a08dee7b2894e18d56f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("KsLogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'log_body' => array($this, 'block_log_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KsLogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_log_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div id=\"log_content\">
\t\t<i>Ici sera plac&eacute; les formulaires d' inscription / Connexion</i>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "KsLogBundle:Log:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  33 => 7,  27 => 5,);
    }
}

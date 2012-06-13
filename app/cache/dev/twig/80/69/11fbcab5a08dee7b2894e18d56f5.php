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
        echo "\t\t<div class=\"ribbon-wrapper\">
\t\t<div class=\"ribbon-front\">
\t\t<div id=\"aile\"><img src=\"../img/ange.png\" alt=\"\" /></div>
\t\t\t<div class=\"form_log\">
\t\t\t\t<h2>Inscription</h2>
\t\t\t\t<form method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nom"), "Votre nom");
        echo "
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nom"));
        echo "
\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Prenom"), "Votre Prenom");
        echo "
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Prenom"));
        echo "
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Pseudo"), "Votre Pseudo");
        echo "
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Pseudo"));
        echo "
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Mdp"), "Mot de passe");
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Mdp"));
        echo "
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Mail"), "Email");
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Mail"));
        echo "
\t\t\t\t\t\t<input type=\"submit\" value=\"S' inscrire\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ribbon-edge-topleft\"></div>
\t\t<div class=\"ribbon-edge-topright\"></div>
\t\t<div class=\"ribbon-edge-bottomleft\"></div>
\t\t<div class=\"ribbon-edge-bottomright\"></div>
\t\t<div class=\"ribbon-back-left\"></div>
\t\t<div class=\"ribbon-back-right\"></div>
\t</div>
\t\t
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
        return array (  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  36 => 8,  33 => 7,  27 => 5,);
    }
}

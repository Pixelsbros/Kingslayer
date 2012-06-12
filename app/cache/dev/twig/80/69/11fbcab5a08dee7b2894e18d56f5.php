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
\t\t<div class=\"form_log\">
\t\t\t<form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Nom"), "Votre nom");
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Nom"));
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Prenom"), "Votre Prenom");
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Prenom"));
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Pseudo"), "Votre Pseudo");
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Pseudo"));
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Mdp"), "Mot de passe");
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Mdp"));
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "Mail"), "Email");
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Mail"));
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"S' inscrire\"/>
\t\t\t</form>
\t\t</div>
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
        return array (  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 8,  33 => 7,  27 => 5,);
    }
}

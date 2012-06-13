<?php

/* KsLogBundle:Utilisateur:show.html.twig */
class __TwigTemplate_9d86107709caa534372da22b5bccfaff extends Twig_Template
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
        echo "<h1>Utilisateur</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nom</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prenom</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pseudo</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pseudo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mail</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mail"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Mdp</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "mdp"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ip</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ip"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateur_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "KsLogBundle:Utilisateur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  100 => 52,  92 => 47,  84 => 42,  74 => 35,  67 => 31,  60 => 27,  53 => 23,  46 => 19,  39 => 15,  32 => 11,  25 => 7,  17 => 1,);
    }
}

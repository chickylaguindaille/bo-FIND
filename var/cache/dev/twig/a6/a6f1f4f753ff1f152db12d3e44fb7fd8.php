<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Forms/chant.html.twig */
class __TwigTemplate_9fd3a72e6ef5c60999b51d7fe98a869d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/chant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/chant.html.twig"));

        // line 2
        echo "    <div class=\"form-group col-4\">
        <label for=\"name\">Nom du chant</label>
        <input type=\"text\" name=\"sing[title]\" class=\"form-control inputville\"  id=\"name\">
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Auteur</label>
        <input type=\"text\" name=\"sing[author]\" class=\"form-control inputville\" id=\"author\">
    </div>
    <div class=\"form-group col-4\">
        <label for=\"year\">Année</label>
        <input type=\"date\" name=\"sing[year]\" class=\"form-control inputville\" id=\"year\" value=\"\" autocomplete=\"off\">
    </div>
    <div>
        <label for=\"paroles\" class=\"form-label\">Paroles</label>
        <textarea name=\"sing[text]\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 10rem !important;\"></textarea>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Forms/chant.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"row\"> #}
    <div class=\"form-group col-4\">
        <label for=\"name\">Nom du chant</label>
        <input type=\"text\" name=\"sing[title]\" class=\"form-control inputville\"  id=\"name\">
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Auteur</label>
        <input type=\"text\" name=\"sing[author]\" class=\"form-control inputville\" id=\"author\">
    </div>
    <div class=\"form-group col-4\">
        <label for=\"year\">Année</label>
        <input type=\"date\" name=\"sing[year]\" class=\"form-control inputville\" id=\"year\" value=\"\" autocomplete=\"off\">
    </div>
    <div>
        <label for=\"paroles\" class=\"form-label\">Paroles</label>
        <textarea name=\"sing[text]\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 10rem !important;\"></textarea>
    </div>
{# </div> #}", "Forms/chant.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Forms/chant.html.twig");
    }
}

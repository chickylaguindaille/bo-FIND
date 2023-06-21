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

/* FormsModification/chant.html.twig */
class __TwigTemplate_94639755df46185cf7f845e78915a48c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/chant.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/chant.html.twig"));

        // line 1
        echo "<!-- Modal chant Modification-->

    <div class=\"modal fade\" id=\"modal_chant_";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_chant_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier le chant de ";
        // line 7
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">

            <form class=\"forms-sample\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group col-12\">
                    <label for=\"name\">Nom du chant</label>
                    <input type=\"text\" name=\"sing[title]\" class=\"form-control inputville\" id=\"name\" value=\"";
        // line 15
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 15), "title", [], "array", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 15), "title", [], "array", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 15), "title", [], "array", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Auteur</label>
                    <input type=\"text\" name=\"sing[author]\" class=\"form-control inputville\" id=\"author\" value=\"";
        // line 19
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 19), "author", [], "array", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 19), "author", [], "array", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 19), "author", [], "array", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"year\">Année</label>
                    <input type=\"date\" name=\"sing[year]\" class=\"form-control inputville\" id=\"year\" value=\"";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 23), "year", [], "any", true, true, false, 23)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 23, $this->source); })()), "sing", [], "array", false, false, false, 23), "year", [], "array", false, false, false, 23), "Y-m-d"), "html", null, true);
        }
        echo "\">
                </div>
                <div>
                    <label for=\"paroles\" class=\"form-label\">Paroles</label>
                    <textarea name=\"sing[text]\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 10rem !important;\">";
        // line 27
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 27), "text", [], "array", true, true, false, 27) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 27), "text", [], "array", false, false, false, 27)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "array", false, true, false, 27), "text", [], "array", false, false, false, 27), "html", null, true))) : (print ("")));
        echo "</textarea>
                </div>

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
        </div>
        </form>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "FormsModification/chant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  84 => 23,  77 => 19,  70 => 15,  63 => 11,  56 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal chant Modification-->

    <div class=\"modal fade\" id=\"modal_chant_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_chant_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier le chant de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">

            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group col-12\">
                    <label for=\"name\">Nom du chant</label>
                    <input type=\"text\" name=\"sing[title]\" class=\"form-control inputville\" id=\"name\" value=\"{{association['sing']['title']??\"\"}}\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Auteur</label>
                    <input type=\"text\" name=\"sing[author]\" class=\"form-control inputville\" id=\"author\" value=\"{{association['sing']['author']??\"\"}}\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"year\">Année</label>
                    <input type=\"date\" name=\"sing[year]\" class=\"form-control inputville\" id=\"year\" value=\"{% if association.sing.year is defined %}{{association['sing']['year']|date(\"Y-m-d\")}}{% endif %}\">
                </div>
                <div>
                    <label for=\"paroles\" class=\"form-label\">Paroles</label>
                    <textarea name=\"sing[text]\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 10rem !important;\">{{association['sing']['text']??\"\"}}</textarea>
                </div>

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
        </div>
        </form>
        </div>
    </div>
</div>

", "FormsModification/chant.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsModification/chant.html.twig");
    }
}

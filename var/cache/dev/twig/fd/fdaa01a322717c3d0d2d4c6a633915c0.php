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

/* FormsModification/committee.html.twig */
class __TwigTemplate_4f0ed32336665e93e89b29dd2cc9912a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/committee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/committee.html.twig"));

        // line 1
        echo "<!-- Modal commitee Modification-->

    <div class=\"modal fade\" id=\"modal_committee_";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 3, $this->source); })()), "index", [], "any", false, false, false, 3) - 1), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_committee_";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 3, $this->source); })()), "index", [], "any", false, false, false, 3) - 1), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier le poste de ";
        // line 7
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">

            <form class=\"forms-sample\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                <div class=\"form-group col-12\">
                    <label for=\"author\">Nom</label>
                    <input type=\"text\" name=\"committee[";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 17, $this->source); })()), "index", [], "any", false, false, false, 17) - 1), "html", null, true);
        echo "][name]\" class=\"form-control inputville\" id=\"author\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 17), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 17, $this->source); })()), "index", [], "any", false, false, false, 17) - 1), [], "array", false, true, false, 17), "name", [], "array", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 17), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 17, $this->source); })()), "index", [], "any", false, false, false, 17) - 1), [], "array", false, true, false, 17), "name", [], "array", false, false, false, 17)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 17), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 17, $this->source); })()), [], "array", false, true, false, 17), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 17, $this->source); })()), "index", [], "any", false, false, false, 17) - 1), [], "array", false, true, false, 17), "name", [], "array", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Prénom</label>
                    <input type=\"text\" name=\"committee[";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 21, $this->source); })()), "index", [], "any", false, false, false, 21) - 1), "html", null, true);
        echo "][firstname]\" class=\"form-control inputville\" id=\"author\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 21), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 21, $this->source); })()), "index", [], "any", false, false, false, 21) - 1), [], "array", false, true, false, 21), "firstname", [], "array", true, true, false, 21) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 21), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 21, $this->source); })()), "index", [], "any", false, false, false, 21) - 1), [], "array", false, true, false, 21), "firstname", [], "array", false, false, false, 21)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 21), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 21, $this->source); })()), [], "array", false, true, false, 21), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 21, $this->source); })()), "index", [], "any", false, false, false, 21) - 1), [], "array", false, true, false, 21), "firstname", [], "array", false, false, false, 21), "html", null, true))) : (print ("")));
        echo "\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Surnom</label>
                    <input type=\"text\" name=\"committee[";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 25, $this->source); })()), "index", [], "any", false, false, false, 25) - 1), "html", null, true);
        echo "][nickname]\" class=\"form-control inputville\" id=\"author\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 25), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 25, $this->source); })()), "index", [], "any", false, false, false, 25) - 1), [], "array", false, true, false, 25), "nickname", [], "array", true, true, false, 25) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 25), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 25, $this->source); })()), "index", [], "any", false, false, false, 25) - 1), [], "array", false, true, false, 25), "nickname", [], "array", false, false, false, 25)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "array", false, true, false, 25), (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 25, $this->source); })()), "index", [], "any", false, false, false, 25) - 1), [], "array", false, true, false, 25), "nickname", [], "array", false, false, false, 25), "html", null, true))) : (print ("")));
        echo "\">
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


<!-- Modal committee Suppression-->

    <div class=\"modal fade\" id=\"modal_committeesuppr_";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 41, $this->source); })()), "index", [], "any", false, false, false, 41) - 1), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_committeesuppr_";
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 41, $this->source); })()), "index", [], "any", false, false, false, 41) - 1), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ce membre du comité de ";
        // line 45
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 45)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">


                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>

                    <input type=\"text\" name=\"suppr[year]\" class=\"d-none form-control inputville\" id=\"author\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"text\" name=\"suppr[function]\" class=\"d-none form-control inputville\" id=\"author\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"text\" name=\"suppr[key]\" class=\"d-none form-control inputville\" id=\"author\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 56, $this->source); })()), "index", [], "any", false, false, false, 56) - 1), "html", null, true);
        echo "\">
                    <textarea name=\"committee[";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["function"]) || array_key_exists("function", $context) ? $context["function"] : (function () { throw new RuntimeError('Variable "function" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 57, $this->source); })()), "index", [], "any", false, false, false, 57) - 1), "html", null, true);
        echo "]\" class=\"form-control d-none\"></textarea>
                    <div>Es-tu sûr de vouloi supprimer ce membre du comité?</div>
                </div>

            
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </div>
        </form>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "FormsModification/committee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  179 => 56,  175 => 55,  171 => 54,  162 => 48,  156 => 45,  135 => 41,  110 => 25,  97 => 21,  84 => 17,  75 => 11,  68 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal commitee Modification-->

    <div class=\"modal fade\" id=\"modal_committee_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_committee_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier le poste de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">

            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                <div class=\"form-group col-12\">
                    <label for=\"author\">Nom</label>
                    <input type=\"text\" name=\"committee[{{year}}][{{function}}][{{loop.index - 1}}][name]\" class=\"form-control inputville\" id=\"author\" value=\"{{association['committee'][year][function][loop.index - 1]['name']??\"\"}}\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Prénom</label>
                    <input type=\"text\" name=\"committee[{{year}}][{{function}}][{{loop.index - 1}}][firstname]\" class=\"form-control inputville\" id=\"author\" value=\"{{association['committee'][year][function][loop.index - 1]['firstname']??\"\"}}\">
                </div>
                <div class=\"form-group col-12\">
                    <label for=\"author\">Surnom</label>
                    <input type=\"text\" name=\"committee[{{year}}][{{function}}][{{loop.index - 1}}][nickname]\" class=\"form-control inputville\" id=\"author\" value=\"{{association['committee'][year][function][loop.index - 1]['nickname']??\"\"}}\">
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


<!-- Modal committee Suppression-->

    <div class=\"modal fade\" id=\"modal_committeesuppr_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_committeesuppr_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ce membre du comité de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">


                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>

                    <input type=\"text\" name=\"suppr[year]\" class=\"d-none form-control inputville\" id=\"author\" value=\"{{year}}\">
                    <input type=\"text\" name=\"suppr[function]\" class=\"d-none form-control inputville\" id=\"author\" value=\"{{function}}\">
                    <input type=\"text\" name=\"suppr[key]\" class=\"d-none form-control inputville\" id=\"author\" value=\"{{loop.index - 1 }}\">
                    <textarea name=\"committee[{{year}}][{{function}}][{{loop.index - 1}}]\" class=\"form-control d-none\"></textarea>
                    <div>Es-tu sûr de vouloi supprimer ce membre du comité?</div>
                </div>

            
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </div>
        </form>
        </div>
    </div>
</div>", "FormsModification/committee.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsModification/committee.html.twig");
    }
}

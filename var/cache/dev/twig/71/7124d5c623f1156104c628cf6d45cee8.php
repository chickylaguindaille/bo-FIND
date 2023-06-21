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

/* FormsModification/goodies.html.twig */
class __TwigTemplate_cf9273aba3f47f45445d6c2516102315 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/goodies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/goodies.html.twig"));

        // line 1
        echo "<!-- Modal goodiess Modification-->
    <div class=\"modal fade\" id=\"modal_goodies_";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_goodies_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ce goodies de ";
        // line 6
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 6)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"goodies[";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"goodies_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 15), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 15, $this->source); })()), [], "array", false, true, false, 15), "title", [], "array", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 15), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 15, $this->source); })()), [], "array", false, true, false, 15), "title", [], "array", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 15), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 15, $this->source); })()), [], "array", false, true, false, 15), "title", [], "array", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"goodies[";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "][text]\" class=\"form-control\" id=\"goodies_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 18), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })()), [], "array", false, true, false, 18), "text", [], "array", true, true, false, 18) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 18), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })()), [], "array", false, true, false, 18), "text", [], "array", false, false, false, 18)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 18), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 18, $this->source); })()), [], "array", false, true, false, 18), "text", [], "array", false, false, false, 18), "html", null, true))) : (print ("")));
        echo "</textarea>
                    
                    <label class=\"form-label\">Type</label>
                    <select name=\"goodies[";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "][type]\" class=\"form-select\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22), "goodiestype", [], "array", false, false, false, 22)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 23
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", false, true, false, 23), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 23, $this->source); })()), [], "array", false, true, false, 23), "type", [], "array", true, true, false, 23) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 23, $this->source); })()), "goodies", [], "any", false, false, false, 23), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), "type", [], "array", false, false, false, 23) == $context["name"]))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"goodies[";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"goodies_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 29, $this->source); })()), "goodies", [], "array", false, false, false, 29), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "year", [], "array", false, false, false, 29), "Y-m-d"), "html", null, true);
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"goodies[";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 33, $this->source); })()), 0, [], "array", false, false, false, 33), "source", [], "array", false, false, false, 33)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 34
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", false, true, false, 34), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "source", [], "array", true, true, false, 34) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 34, $this->source); })()), "goodies", [], "any", false, false, false, 34), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "source", [], "array", false, false, false, 34) == $context["name"]))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </select>


                    <label class=\"form-label\">Photo</label><br>
                    <i>";
        // line 40
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 40), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 40, $this->source); })()), [], "array", false, true, false, 40), "file", [], "array", false, true, false, 40), 0, [], "array", false, true, false, 40), "path", [], "array", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 40), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 40, $this->source); })()), [], "array", false, true, false, 40), "file", [], "array", false, true, false, 40), 0, [], "array", false, true, false, 40), "path", [], "array", false, false, false, 40)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 40), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 40, $this->source); })()), [], "array", false, true, false, 40), "file", [], "array", false, true, false, 40), 0, [], "array", false, true, false, 40), "path", [], "array", false, false, false, 40), "html", null, true))) : (print ("Pas de photo")));
        echo "</i>
                    <input type=\"file\" name=\"goodies[";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "][file][0][path]\" class=\"form-control\" id=\"goodies_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true))) : (print ("")));
        echo "\" value=\"\"></input>

                    ";
        // line 45
        echo "                </div>
            
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
        </div>
        </form>
        </div>
    </div>
</div>


<!-- Modal goodiess Suppression-->
    <div class=\"modal fade\" id=\"modal_goodiessuppr_";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 59)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_goodiessuppr_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 59)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 59), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cette particularité de ";
        // line 63
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 63)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 63), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"goodies[";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "]\" class=\"form-control d-none\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 70), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 70, $this->source); })()), [], "array", false, true, false, 70), "source", [], "array", true, true, false, 70) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 70), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 70, $this->source); })()), [], "array", false, true, false, 70), "source", [], "array", false, false, false, 70)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 70), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 70, $this->source); })()), [], "array", false, true, false, 70), "source", [], "array", false, false, false, 70), "html", null, true))) : (print ("")));
        echo "</textarea>
                    <div>";
        // line 71
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 71), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 71, $this->source); })()), [], "array", false, true, false, 71), "title", [], "array", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 71), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 71, $this->source); })()), [], "array", false, true, false, 71), "title", [], "array", false, false, false, 71)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "array", false, true, false, 71), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 71, $this->source); })()), [], "array", false, true, false, 71), "title", [], "array", false, false, false, 71), "html", null, true))) : (print ("")));
        echo "</div>
                </div>
            
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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
        return "FormsModification/goodies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 71,  223 => 70,  216 => 66,  210 => 63,  197 => 59,  181 => 45,  172 => 41,  168 => 40,  162 => 36,  147 => 34,  143 => 33,  139 => 32,  127 => 29,  121 => 25,  106 => 23,  102 => 22,  98 => 21,  86 => 18,  74 => 15,  65 => 9,  59 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal goodiess Modification-->
    <div class=\"modal fade\" id=\"modal_goodies_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_goodies_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ce goodies de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"goodies[{{key}}][title]\" class=\"form-control\" id=\"goodies_{{key}}_{{association.id??\"\"}}\" value=\"{{association['goodies'][key]['title']??\"\"}}\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"goodies[{{key}}][text]\" class=\"form-control\" id=\"goodies_{{key}}_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\">{{association['goodies'][key]['text']??\"\"}}</textarea>
                    
                    <label class=\"form-label\">Type</label>
                    <select name=\"goodies[{{key}}][type]\" class=\"form-select\">
                        {% for name in listes[0]['goodiestype']|sort %}
                            <option {% if association.goodies[key]['type'] is defined and association.goodies[key]['type'] == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"goodies[{{key}}][year]\" class=\"form-control\" id=\"goodies_{{key}}_{{association.id??\"\"}}\" value=\"{{association['goodies'][key]['year']|date(\"Y-m-d\")}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"goodies[{{key}}][source]\" class=\"form-select\">
                        {% for name in listes[0]['source']|sort %}
                            <option {% if association.goodies[key]['source'] is defined and association.goodies[key]['source'] == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>


                    <label class=\"form-label\">Photo</label><br>
                    <i>{{association['goodies'][key]['file'][0]['path']??\"Pas de photo\"}}</i>
                    <input type=\"file\" name=\"goodies[{{key}}][file][0][path]\" class=\"form-control\" id=\"goodies_{{key}}_{{association.id??\"\"}}\" value=\"\"></input>

                    {# <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"goodies[{{key}}][file][0][title]\" class=\"form-control\" id=\"document_{{key}}_{{association.id??\"\"}}\" value=\"{{association['goodies'][key]['file'][0]['title']??\"\"}}\"></input> #}
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


<!-- Modal goodiess Suppression-->
    <div class=\"modal fade\" id=\"modal_goodiessuppr_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_goodiessuppr_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cette particularité de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"goodies[{{key}}]\" class=\"form-control d-none\">{{association['goodies'][key]['source']??\"\"}}</textarea>
                    <div>{{association['goodies'][key]['title']??\"\"}}</div>
                </div>
            
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
        </div>
        </form>
        </div>
    </div>
</div>
", "FormsModification/goodies.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsModification/goodies.html.twig");
    }
}

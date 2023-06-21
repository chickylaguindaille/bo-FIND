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

/* FormsModification/decorums.html.twig */
class __TwigTemplate_3e8f6f2531f70671d1e5fc1014ceff09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/decorums.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/decorums.html.twig"));

        // line 1
        echo "<!-- Modal decorums Modification-->

    <div class=\"modal fade\" id=\"modal_decorum_";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_decorum_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ce decorum de ";
        // line 7
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 7) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"decorum[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"decorum[";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "][text]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "</textarea>
                    
                    <label class=\"form-label\">Type</label>
                    <select name=\"decorum[";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "][type]\" class=\"form-select\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "decorumtype", [], "array", false, false, false, 23)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 24
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", false, true, false, 24), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 24, $this->source); })()), [], "array", false, true, false, 24), "type", [], "array", true, true, false, 24) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 24, $this->source); })()), "decorum", [], "any", false, false, false, 24), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), "type", [], "array", false, false, false, 24) == $context["name"]))) {
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
        // line 26
        echo "                    </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"decorum[";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 30)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 30), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 30, $this->source); })()), "decorum", [], "array", false, false, false, 30), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 30, $this->source); })()), [], "array", false, false, false, 30), "year", [], "array", false, false, false, 30), "Y-m-d"), "html", null, true);
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"decorum[";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34), "source", [], "array", false, false, false, 34)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 35
            echo "                            <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", false, true, false, 35), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 35, $this->source); })()), [], "array", false, true, false, 35), "source", [], "array", true, true, false, 35) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 35, $this->source); })()), "decorum", [], "any", false, false, false, 35), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 35, $this->source); })()), [], "array", false, false, false, 35), "source", [], "array", false, false, false, 35) == $context["name"]))) {
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
        // line 37
        echo "                    </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>";
        // line 42
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 42), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 42, $this->source); })()), [], "array", false, true, false, 42), "file", [], "array", false, true, false, 42), 0, [], "array", false, true, false, 42), "path", [], "array", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 42), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 42, $this->source); })()), [], "array", false, true, false, 42), "file", [], "array", false, true, false, 42), 0, [], "array", false, true, false, 42), "path", [], "array", false, false, false, 42)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 42), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 42, $this->source); })()), [], "array", false, true, false, 42), "file", [], "array", false, true, false, 42), 0, [], "array", false, true, false, 42), "path", [], "array", false, false, false, 42), "html", null, true))) : (print ("Pas de photo")));
        echo "</i>
                    <input type=\"file\" name=\"decorum[";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "][file][0][path]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 43)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true))) : (print ("")));
        echo "\" value=\"\"></input>

                    ";
        // line 47
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


<!-- Modal decorums Suppression-->
    <div class=\"modal fade\" id=\"modal_decorumsuppr_";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 61)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_decorumsuppr_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 61)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ce decorum de ";
        // line 65
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 65)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 65), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"decorum[";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "]\" class=\"form-control d-none\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 72), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 72, $this->source); })()), [], "array", false, true, false, 72), "source", [], "array", true, true, false, 72) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 72), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 72, $this->source); })()), [], "array", false, true, false, 72), "source", [], "array", false, false, false, 72)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 72), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 72, $this->source); })()), [], "array", false, true, false, 72), "source", [], "array", false, false, false, 72), "html", null, true))) : (print ("")));
        echo "</textarea>
                    <div>";
        // line 73
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 73), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 73, $this->source); })()), [], "array", false, true, false, 73), "title", [], "array", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 73), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 73, $this->source); })()), [], "array", false, true, false, 73), "title", [], "array", false, false, false, 73)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 73), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 73, $this->source); })()), [], "array", false, true, false, 73), "title", [], "array", false, false, false, 73), "html", null, true))) : (print ("")));
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
        return "FormsModification/decorums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 73,  225 => 72,  218 => 68,  212 => 65,  199 => 61,  183 => 47,  174 => 43,  170 => 42,  163 => 37,  148 => 35,  144 => 34,  140 => 33,  128 => 30,  122 => 26,  107 => 24,  103 => 23,  99 => 22,  87 => 19,  75 => 16,  66 => 10,  60 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal decorums Modification-->

    <div class=\"modal fade\" id=\"modal_decorum_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_decorum_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ce decorum de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"decorum[{{key}}][title]\" class=\"form-control\" id=\"decorum_{{key}}_{{association.id??\"\"}}\" value=\"{{association['decorum'][key]['title']??\"\"}}\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"decorum[{{key}}][text]\" class=\"form-control\" id=\"decorum_{{key}}_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\">{{association['decorum'][key]['text']??\"\"}}</textarea>
                    
                    <label class=\"form-label\">Type</label>
                    <select name=\"decorum[{{key}}][type]\" class=\"form-select\">
                        {% for name in listes[0]['decorumtype']|sort %}
                            <option {% if association.decorum[key]['type'] is defined and association.decorum[key]['type'] == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"decorum[{{key}}][year]\" class=\"form-control\" id=\"decorum_{{key}}_{{association.id??\"\"}}\" value=\"{{association['decorum'][key]['year']|date(\"Y-m-d\")}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"decorum[{{key}}][source]\" class=\"form-select\">
                        {% for name in listes[0]['source']|sort %}
                            <option {% if association.decorum[key]['source'] is defined and association.decorum[key]['source'] == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>{{association['decorum'][key]['file'][0]['path']??\"Pas de photo\"}}</i>
                    <input type=\"file\" name=\"decorum[{{key}}][file][0][path]\" class=\"form-control\" id=\"decorum_{{key}}_{{association.id??\"\"}}\" value=\"\"></input>

                    {# <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"decorum[{{key}}][file][0][title]\" class=\"form-control\" id=\"document_{{key}}_{{association.id??\"\"}}\" value=\"{{association['decorum'][key]['file'][0]['title']??\"\"}}\"></input> #}
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


<!-- Modal decorums Suppression-->
    <div class=\"modal fade\" id=\"modal_decorumsuppr_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_decorumsuppr_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ce decorum de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"decorum[{{key}}]\" class=\"form-control d-none\">{{association['decorum'][key]['source']??\"\"}}</textarea>
                    <div>{{association['decorum'][key]['title']??\"\"}}</div>
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
", "FormsModification/decorums.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsModification/decorums.html.twig");
    }
}

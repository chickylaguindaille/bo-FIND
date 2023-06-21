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

/* FormsAdd/document.html.twig */
class __TwigTemplate_b634124eca7844672acd558749df87a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/document.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/document.html.twig"));

        // line 1
        echo "
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_document_";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_document_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un document</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"document[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Type</label>
                    ";
        // line 20
        echo "                        <select name=\"document[";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "][type]\" class=\"form-select\">
                                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 21, $this->source); })()), 0, [], "array", false, false, false, 21), "documenttype", [], "array", false, false, false, 21)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 22
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"document[";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 28)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                    ";
        // line 32
        echo "                        <select name=\"document[";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 33, $this->source); })()), 0, [], "array", false, false, false, 33), "source", [], "array", false, false, false, 33)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 34
            echo "                                    <option value=\"";
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
        echo "                        </select>


                    <label class=\"form-label\">Document</label><br>
                    ";
        // line 41
        echo "                    <input type=\"file\" name=\"document[";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "][file][path]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true))) : (print ("")));
        echo "\"></input>

                    <label class=\"form-label\">Titre document</label>
                    <input type=\"text\" name=\"document[";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "][file][title]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true))) : (print ("")));
        echo "\"></input>
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
        return "FormsAdd/document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  140 => 41,  134 => 36,  123 => 34,  119 => 33,  114 => 32,  104 => 28,  98 => 24,  87 => 22,  83 => 21,  78 => 20,  68 => 16,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_document_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_document_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un document</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"document[{{numberdocument}}][title]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Type</label>
                    {# <input type=\"text\" name=\"document[{{numberdocument}}][type]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input> #}
                        <select name=\"document[{{numberdocument}}][type]\" class=\"form-select\">
                                {% for name in listes[0]['documenttype']|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                        </select>


                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"document[{{numberdocument}}][year]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                    {# <input type=\"text\" name=\"document[{{numberdocument}}][source]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input> #}
                        <select name=\"document[{{numberdocument}}][source]\" class=\"form-select\">
                                {% for name in listes[0]['source']|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                        </select>


                    <label class=\"form-label\">Document</label><br>
                    {# <i>{{association['document'][numberdocument]['path']??\"Pas de photo\"}}</i> #}
                    <input type=\"file\" name=\"document[{{numberdocument}}][file][path]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>

                    <label class=\"form-label\">Titre document</label>
                    <input type=\"text\" name=\"document[{{numberdocument}}][file][title]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>
                </div>
            
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
        </div>
        </form>
        </div>
    </div>
</div>
", "FormsAdd/document.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsAdd/document.html.twig");
    }
}

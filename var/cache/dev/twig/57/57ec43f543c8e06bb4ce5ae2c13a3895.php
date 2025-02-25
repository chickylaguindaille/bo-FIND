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

/* FormsAdd/committee.html.twig */
class __TwigTemplate_42e2b70c49e93e4150c12168b9414608 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/committee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/committee.html.twig"));

        // line 1
        echo "
<!-- Modal Committee Ajout-->
    <div class=\"modal fade\" id=\"modal_add_committee_";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_committee_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un membre de comité</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Année</label>
                        <select id=\"year\" name=\"committee[year]\" class=\"form-control\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, "now", "Y"), (1900 - 1),  -1));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 18
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </select>  

                    <label class=\"form-label\">Fonction</label>
                    <select name=\"committee[function]\" class=\"form-select\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 24), "functiontype", [], "array", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 24), "functiontype", [], "array", false, false, false, 24), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 25
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </select>


                    <label class=\"form-label\">Nom</label>
                    <input type=\"text\" name=\"committee[name]\" class=\"form-control\" id=\"document_";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 31) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 31)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Prénom</label>
                    <input type=\"text\" name=\"committee[firstname]\" class=\"form-control\" id=\"document_";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 34), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Surnom</label><br>
                    <input type=\"text\" name=\"committee[nickname]\" class=\"form-control\" id=\"document_";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true))) : (print ("")));
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
        return "FormsAdd/committee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  119 => 34,  111 => 31,  105 => 27,  94 => 25,  90 => 24,  84 => 20,  73 => 18,  69 => 17,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal Committee Ajout-->
    <div class=\"modal fade\" id=\"modal_add_committee_{{association.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_committee_{{association.id}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un membre de comité</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Année</label>
                        <select id=\"year\" name=\"committee[year]\" class=\"form-control\">
                        {% for year in range('now'|date('Y'), 1900-1, -1) %}
                        <option value=\"{{ year }}\">{{ year }}</option>
                        {% endfor %}
                    </select>  

                    <label class=\"form-label\">Fonction</label>
                    <select name=\"committee[function]\" class=\"form-select\">
                        {% for name in listes[0]['functiontype']|default([])|sort %}
                            <option value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>


                    <label class=\"form-label\">Nom</label>
                    <input type=\"text\" name=\"committee[name]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Prénom</label>
                    <input type=\"text\" name=\"committee[firstname]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Surnom</label><br>
                    <input type=\"text\" name=\"committee[nickname]\" class=\"form-control\" id=\"document_{{numberdocument}}_{{association.id??\"\"}}\"></input>

                </div>
            
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
        </div>
        </form>
        </div>
    </div>
</div>
", "FormsAdd/committee.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/FormsAdd/committee.html.twig");
    }
}

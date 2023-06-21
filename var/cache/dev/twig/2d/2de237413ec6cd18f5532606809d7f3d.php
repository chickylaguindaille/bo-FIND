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

/* FormsAdd/decorum.html.twig */
class __TwigTemplate_2bfff60e25a195e869f5b32077e4b105 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/decorum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/decorum.html.twig"));

        // line 1
        echo "
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_decorum_";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_decorum_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un décorum</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"decorum[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\"></input>

                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"decorum[";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "][text]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
                
                    <label class=\"form-label\">Type</label>                        
                    <select name=\"decorum[";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "][type]\" class=\"form-select\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "decorumtype", [], "array", false, false, false, 23)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 24
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
        // line 26
        echo "                    </select>




                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"decorum[";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"decorum[";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "source", [], "array", false, false, false, 36)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 37
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
        // line 39
        echo "                    </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>";
        // line 44
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 44), (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 44, $this->source); })()), [], "array", false, true, false, 44), "path", [], "array", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 44), (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 44, $this->source); })()), [], "array", false, true, false, 44), "path", [], "array", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "array", false, true, false, 44), (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 44, $this->source); })()), [], "array", false, true, false, 44), "path", [], "array", false, false, false, 44), "html", null, true))) : (print ("Pas de photo")));
        echo "</i>
                    <input type=\"file\" name=\"decorum[";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "][file][0][path]\" class=\"form-control\" id=\"decorum_";
        echo twig_escape_filter($this->env, (isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 45)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    ";
        // line 49
        echo "                
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
        return "FormsAdd/decorum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  155 => 45,  151 => 44,  144 => 39,  133 => 37,  129 => 36,  125 => 35,  115 => 32,  107 => 26,  96 => 24,  92 => 23,  88 => 22,  78 => 19,  68 => 16,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_decorum_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_decorum_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"decorum\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'un décorum</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"decorum[{{numberdecorum}}][title]\" class=\"form-control\" id=\"decorum_{{numberdecorum}}_{{association.id??\"\"}}\"></input>

                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"decorum[{{numberdecorum}}][text]\" class=\"form-control\" id=\"anecdote_{{numberdecorum}}_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
                
                    <label class=\"form-label\">Type</label>                        
                    <select name=\"decorum[{{numberdecorum}}][type]\" class=\"form-select\">
                        {% for name in listes[0]['decorumtype']|sort %}
                            <option value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>




                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"decorum[{{numberdecorum}}][year]\" class=\"form-control\" id=\"decorum_{{numberdecorum}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                    <select name=\"decorum[{{numberdecorum}}][source]\" class=\"form-select\">
                        {% for name in listes[0]['source']|sort %}
                            <option value=\"{{name}}\">{{name}}</option>
                        {% endfor %}
                    </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>{{association['decorum'][numberdecorum]['path']??\"Pas de photo\"}}</i>
                    <input type=\"file\" name=\"decorum[{{numberdecorum}}][file][0][path]\" class=\"form-control\" id=\"decorum_{{numberdecorum}}_{{association.id??\"\"}}\"></input>
                
                    {# <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"decorum[{{numberdocument}}][file][0][title]\" class=\"form-control\" id=\"decorum__{{numberdocument}}_{{association.id??\"\"}}\"></input> #}
                
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
", "FormsAdd/decorum.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsAdd/decorum.html.twig");
    }
}

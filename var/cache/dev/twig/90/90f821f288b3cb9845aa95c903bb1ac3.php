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

/* FormsAdd/anecdote.html.twig */
class __TwigTemplate_1d6b9d9502300ecadf2b656d897712fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/anecdote.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/anecdote.html.twig"));

        // line 1
        echo "
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_anecdote_";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_anecdote_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajouter cette anecdote</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">

                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"anecdote[";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 17)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"anecdote[";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "][text]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 20)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
                    
                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"anecdote[";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                        <select name=\"anecdote[";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 27), "source", [], "array", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 27), "source", [], "array", false, false, false, 27), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 28
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </select>


                    <label class=\"form-label\">Photo</label><br>
                    <i>";
        // line 34
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "path", [], "array", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "path", [], "array", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "path", [], "array", false, false, false, 34), "html", null, true))) : (print ("Pas de photo")));
        echo "</i>
                    <input type=\"file\" name=\"anecdote[";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "][file][0][path]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 35), "html", null, true))) : (print ("")));
        echo "\" value=\"\"></input>
                
                    <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"anecdote[";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "][file][0][title]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\"></input>

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
        return "FormsAdd/anecdote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  128 => 35,  124 => 34,  118 => 30,  107 => 28,  103 => 27,  99 => 26,  89 => 23,  79 => 20,  69 => 17,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_anecdote_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_anecdote_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajouter cette anecdote</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">

                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"anecdote[{{numberanecdote}}][title]\" class=\"form-control\" id=\"anecdote_{{numberanecdote}}_{{association.id??\"\"}}\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"anecdote[{{numberanecdote}}][text]\" class=\"form-control\" id=\"anecdote_{{numberanecdote}}_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
                    
                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"anecdote[{{numberanecdote}}][year]\" class=\"form-control\" id=\"anecdote_{{numberanecdote}}_{{association.id??\"\"}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                        <select name=\"anecdote[{{numberanecdote}}][source]\" class=\"form-select\">
                            {% for name in listes[0]['source']|default([])|sort %}
                                <option value=\"{{name}}\">{{name}}</option>
                            {% endfor %}
                        </select>


                    <label class=\"form-label\">Photo</label><br>
                    <i>{{association['anecdote'][numberanecdote]['path']??\"Pas de photo\"}}</i>
                    <input type=\"file\" name=\"anecdote[{{numberanecdote}}][file][0][path]\" class=\"form-control\" id=\"anecdote_{{numberanecdote}}_{{association.id??\"\"}}\" value=\"\"></input>
                
                    <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"anecdote[{{numberanecdote}}][file][0][title]\" class=\"form-control\" id=\"document_{{numberanecdote}}_{{association.id??\"\"}}\"></input>

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
", "FormsAdd/anecdote.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/FormsAdd/anecdote.html.twig");
    }
}

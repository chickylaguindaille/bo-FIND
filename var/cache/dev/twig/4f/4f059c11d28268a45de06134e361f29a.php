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

/* FormsModification/anecdotes.html.twig */
class __TwigTemplate_c654331fdf07bc6fb9ba05b0d412c974 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/anecdotes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/anecdotes.html.twig"));

        // line 1
        echo "<!-- Modal Anecdotes Modification-->

    <div class=\"modal fade\" id=\"modal_anecdote_";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_anecdote_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier cette anecdote de ";
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
                    <input type=\"text\" name=\"anecdote[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "][title]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 16), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 16, $this->source); })()), [], "array", false, true, false, 16), "title", [], "array", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"anecdote[";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "][text]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 19), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 19, $this->source); })()), [], "array", false, true, false, 19), "text", [], "array", false, false, false, 19), "html", null, true))) : (print ("")));
        echo "</textarea>
                    
                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"anecdote[";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "][year]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 22)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 22, $this->source); })()), "anecdote", [], "array", false, false, false, 22), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), "year", [], "array", false, false, false, 22), "Y-m-d"), "html", null, true);
        echo "\"></input>
                
                    <label class=\"form-label\">Source</label>
                        <select name=\"anecdote[";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "][source]\" class=\"form-select\">
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "source", [], "array", false, false, false, 26)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 27
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", false, true, false, 27), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 27, $this->source); })()), [], "array", false, true, false, 27), "source", [], "array", true, true, false, 27) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 27, $this->source); })()), "anecdote", [], "any", false, false, false, 27), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "source", [], "array", false, false, false, 27) == $context["name"]))) {
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
        // line 29
        echo "                        </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>";
        // line 34
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "file", [], "array", false, true, false, 34), 0, [], "array", false, true, false, 34), "path", [], "array", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "file", [], "array", false, true, false, 34), 0, [], "array", false, true, false, 34), "path", [], "array", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 34), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "file", [], "array", false, true, false, 34), 0, [], "array", false, true, false, 34), "path", [], "array", false, false, false, 34), "html", null, true))) : (print ("Pas de photo")));
        echo "</i>
                    <input type=\"file\" name=\"anecdote[";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "][file][0][path]\" class=\"form-control\" id=\"anecdote_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 35), "html", null, true))) : (print ("")));
        echo "\" value=\"\"></input>

                    <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"anecdote[";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "][file][0][title]\" class=\"form-control\" id=\"document_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 38), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 38, $this->source); })()), [], "array", false, true, false, 38), "file", [], "array", false, true, false, 38), 0, [], "array", false, true, false, 38), "title", [], "array", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 38), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 38, $this->source); })()), [], "array", false, true, false, 38), "file", [], "array", false, true, false, 38), 0, [], "array", false, true, false, 38), "title", [], "array", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 38), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 38, $this->source); })()), [], "array", false, true, false, 38), "file", [], "array", false, true, false, 38), 0, [], "array", false, true, false, 38), "title", [], "array", false, false, false, 38), "html", null, true))) : (print ("")));
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


<!-- Modal Anecdotes Suppression-->
    <div class=\"modal fade\" id=\"modal_anecdotesuppr_";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 53)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_anecdotesuppr_";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 53)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cette anecdote de ";
        // line 57
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 57) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 57)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true))) : (print ("")));
        echo "</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"anecdote[";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "]\" class=\"form-control d-none\">";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 64), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 64, $this->source); })()), [], "array", false, true, false, 64), "source", [], "array", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 64), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 64, $this->source); })()), [], "array", false, true, false, 64), "source", [], "array", false, false, false, 64)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 64), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 64, $this->source); })()), [], "array", false, true, false, 64), "source", [], "array", false, false, false, 64), "html", null, true))) : (print ("")));
        echo "</textarea>
                    <div>";
        // line 65
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 65), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 65, $this->source); })()), [], "array", false, true, false, 65), "title", [], "array", true, true, false, 65) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 65), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 65, $this->source); })()), [], "array", false, true, false, 65), "title", [], "array", false, false, false, 65)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "array", false, true, false, 65), (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 65, $this->source); })()), [], "array", false, true, false, 65), "title", [], "array", false, false, false, 65), "html", null, true))) : (print ("")));
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
        return "FormsModification/anecdotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 65,  205 => 64,  198 => 60,  192 => 57,  179 => 53,  155 => 38,  145 => 35,  141 => 34,  134 => 29,  119 => 27,  115 => 26,  111 => 25,  99 => 22,  87 => 19,  75 => 16,  66 => 10,  60 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal Anecdotes Modification-->

    <div class=\"modal fade\" id=\"modal_anecdote_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_anecdote_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier cette anecdote de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"modifyassociation\" class=\"d-none\"></input>

                    <label class=\"form-label\">Titre</label>
                    <input type=\"text\" name=\"anecdote[{{key}}][title]\" class=\"form-control\" id=\"anecdote_{{key}}_{{association.id??\"\"}}\" value=\"{{association['anecdote'][key]['title']??\"\"}}\"></input>
                    
                    <label class=\"form-label\">Texte</label>
                    <textarea name=\"anecdote[{{key}}][text]\" class=\"form-control\" id=\"anecdote_{{key}}_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\">{{association['anecdote'][key]['text']??\"\"}}</textarea>
                    
                    <label class=\"form-label\">Date</label>
                    <input type=\"date\" name=\"anecdote[{{key}}][year]\" class=\"form-control\" id=\"anecdote_{{key}}_{{association.id??\"\"}}\" value=\"{{association['anecdote'][key]['year']|date(\"Y-m-d\")}}\"></input>
                
                    <label class=\"form-label\">Source</label>
                        <select name=\"anecdote[{{key}}][source]\" class=\"form-select\">
                            {% for name in listes[0]['source']|sort %}
                                <option {% if association.anecdote[key]['source'] is defined and association.anecdote[key]['source'] == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                            {% endfor %}
                        </select>



                    <label class=\"form-label\">Photo</label><br>
                    <i>{{association['anecdote'][key]['file'][0]['path']??\"Pas de photo\"}}</i>
                    <input type=\"file\" name=\"anecdote[{{key}}][file][0][path]\" class=\"form-control\" id=\"anecdote_{{key}}_{{association.id??\"\"}}\" value=\"\"></input>

                    <label class=\"form-label\">Titre de la photo</label>
                    <input type=\"text\" name=\"anecdote[{{key}}][file][0][title]\" class=\"form-control\" id=\"document_{{key}}_{{association.id??\"\"}}\" value=\"{{association['anecdote'][key]['file'][0]['title']??\"\"}}\"></input>
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


<!-- Modal Anecdotes Suppression-->
    <div class=\"modal fade\" id=\"modal_anecdotesuppr_{{key}}_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_anecdotesuppr_{{key}}_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cette anecdote de {{association.name??\"\"}}</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <input name=\"action\" value=\"deleteassociation\" class=\"d-none\"></input>
                    <textarea name=\"anecdote[{{key}}]\" class=\"form-control d-none\">{{association['anecdote'][key]['source']??\"\"}}</textarea>
                    <div>{{association['anecdote'][key]['title']??\"\"}}</div>
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
", "FormsModification/anecdotes.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsModification/anecdotes.html.twig");
    }
}

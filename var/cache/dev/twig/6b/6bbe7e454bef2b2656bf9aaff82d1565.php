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

/* Forms/anecdotes.html.twig */
class __TwigTemplate_f9e3fa7cf558ad5fb77cea46e6877b67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/anecdotes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/anecdotes.html.twig"));

        // line 1
        echo "<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-anecdote\">Ajouter une anecdote +</button>
</div>
<div id=\"inputs-container-anecdote\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1

    // Chaîne de caractères pour les options du select
    var optionSource = \"\";

    // Boucle Twig pour générer les options
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 15), "source", [], "array", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 15), "source", [], "array", false, false, false, 15), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 16
            echo "        optionSource += '<option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    \$(\"#ajouter-input-anecdote\").click(function() {

        var selectSource = \$(\"<select>\", {
            name: \"anecdote[\" + counter + \"][source]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une source pour l'anecdote\",
            disabled: true,
            selected: true
        })).append(optionSource);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"title\" + counter,
            class: \"form-label\",
            text: \"Titre de l'anecdote \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"anecdote[\" + counter + \"][title]\",
            class: \"form-control\",
            id: \"title\" + counter
        })).append(\$(\"<label>\", {
            for: \"summary\" + counter,
            class: \"form-label\",
            text: \"Texte de l'anecdote \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"anecdote[\" + counter + \"][text]\",
            class: \"form-control\",
            id: \"summary\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        })).append(\$(\"<label>\", {
            for: \"year\" + counter,
            class: \"form-label p-2\",
            text: \"Année de l'anecdote \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"date\",
            name: \"anecdote[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter
        }))
        
        .append(selectSource)

        .append(\$(\"<label>\", {
            for: \"file\" + counter,
            class: \"form-label\",
            text: \"Fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"file\",
            name: \"anecdote[\" + counter + \"][file][0][path]\",
            class: \"form-control p-2\",
            id: \"path\" + counter
        })).append(\$(\"<label>\", {
            for: \"titlefile\" + counter,
            class: \"form-label\",
            text: \"Titre du fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"anecdote[\" + counter + \"][file][0][title]\",
            class: \"form-control\",
            id: \"titlefile\" + counter
        })).append(\$(\"<hr>\"));;

        \$(\"#inputs-container-anecdote\").append(newInputs);
        counter++;
        visualcounter++;
    });
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Forms/anecdotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-anecdote\">Ajouter une anecdote +</button>
</div>
<div id=\"inputs-container-anecdote\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1

    // Chaîne de caractères pour les options du select
    var optionSource = \"\";

    // Boucle Twig pour générer les options
    {% for name in listes[0]['source']|default([])|sort %}
        optionSource += '<option value=\"{{name}}\">{{name}}</option>';
    {% endfor %}

    \$(\"#ajouter-input-anecdote\").click(function() {

        var selectSource = \$(\"<select>\", {
            name: \"anecdote[\" + counter + \"][source]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une source pour l'anecdote\",
            disabled: true,
            selected: true
        })).append(optionSource);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"title\" + counter,
            class: \"form-label\",
            text: \"Titre de l'anecdote \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"anecdote[\" + counter + \"][title]\",
            class: \"form-control\",
            id: \"title\" + counter
        })).append(\$(\"<label>\", {
            for: \"summary\" + counter,
            class: \"form-label\",
            text: \"Texte de l'anecdote \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"anecdote[\" + counter + \"][text]\",
            class: \"form-control\",
            id: \"summary\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        })).append(\$(\"<label>\", {
            for: \"year\" + counter,
            class: \"form-label p-2\",
            text: \"Année de l'anecdote \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"date\",
            name: \"anecdote[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter
        }))
        
        .append(selectSource)

        .append(\$(\"<label>\", {
            for: \"file\" + counter,
            class: \"form-label\",
            text: \"Fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"file\",
            name: \"anecdote[\" + counter + \"][file][0][path]\",
            class: \"form-control p-2\",
            id: \"path\" + counter
        })).append(\$(\"<label>\", {
            for: \"titlefile\" + counter,
            class: \"form-label\",
            text: \"Titre du fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"anecdote[\" + counter + \"][file][0][title]\",
            class: \"form-control\",
            id: \"titlefile\" + counter
        })).append(\$(\"<hr>\"));;

        \$(\"#inputs-container-anecdote\").append(newInputs);
        counter++;
        visualcounter++;
    });
});
</script>
", "Forms/anecdotes.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Forms/anecdotes.html.twig");
    }
}

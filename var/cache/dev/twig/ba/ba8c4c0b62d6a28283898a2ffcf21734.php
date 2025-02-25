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

/* Forms/comite.html.twig */
class __TwigTemplate_daa225eac7a5c53f7e4db2b8d68bb7bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/comite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/comite.html.twig"));

        // line 1
        echo "<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-comite\">Ajouter un comite +</button>
</div>
<div id=\"inputs-container-comite\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1;

    // Chaîne de caractères pour les options du select
    var optionType = \"\";

    // Boucle Twig pour générer les options
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 15), "functiontype", [], "array", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 15), "functiontype", [], "array", false, false, false, 15), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 16
            echo "        optionType += '<option value=\"";
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
    var maxYear = new Date().getFullYear();
    var minYear = 1900;
    var yearOptions = '';

    for (var i = maxYear; i >= minYear; i--) {
        yearOptions += '<option value=\"' + i + '\">' + i + '</option>';
    }

    \$(\"#ajouter-input-comite\").click(function() {

        // Création du select dynamique avec les options générées
        var selectType = \$(\"<select>\", {
            name: \"committee[\" + counter + \"][type]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez un type de comité\",
            disabled: true,
            selected: true
        })).append(optionType);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        })

";
        // line 45
        echo "        .append(\$(\"<select>\", {
            name: \"committee[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter,
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une année de comite\",
            disabled: true,
            selected: true
        })).append(yearOptions))
    

";
        // line 58
        echo "        .append(selectType)     
        
        .append(\$(\"<label>\", {
            for: \"name\" + counter,
            class: \"form-label\",
            text: \"Nom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][name]\",
            class: \"form-control\",
            id: \"name\" + counter
        }))

        .append(\$(\"<label>\", {
            for: \"firstname\" + counter,
            class: \"form-label\",
            text: \"Prénom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][firstname]\",
            class: \"form-control\",
            id: \"firstname\" + counter
        }))

        .append(\$(\"<label>\", {
            for: \"nickname\" + counter,
            class: \"form-label\",
            text: \"Surnom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][nickname]\",
            class: \"form-control\",
            id: \"nickname\" + counter
        }))
        
        .append(\$(\"<hr>\"));

        \$(\"#inputs-container-comite\").append(newInputs);
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
        return "Forms/comite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 58,  102 => 45,  74 => 18,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-comite\">Ajouter un comite +</button>
</div>
<div id=\"inputs-container-comite\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1;

    // Chaîne de caractères pour les options du select
    var optionType = \"\";

    // Boucle Twig pour générer les options
    {% for name in listes[0]['functiontype']|default([])|sort %}
        optionType += '<option value=\"{{name}}\">{{name}}</option>';
    {% endfor %}

    var maxYear = new Date().getFullYear();
    var minYear = 1900;
    var yearOptions = '';

    for (var i = maxYear; i >= minYear; i--) {
        yearOptions += '<option value=\"' + i + '\">' + i + '</option>';
    }

    \$(\"#ajouter-input-comite\").click(function() {

        // Création du select dynamique avec les options générées
        var selectType = \$(\"<select>\", {
            name: \"committee[\" + counter + \"][type]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez un type de comité\",
            disabled: true,
            selected: true
        })).append(optionType);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        })

{# SELECT ANEEE #}
        .append(\$(\"<select>\", {
            name: \"committee[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter,
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une année de comite\",
            disabled: true,
            selected: true
        })).append(yearOptions))
    

{# SELECT POSTE #}
        .append(selectType)     
        
        .append(\$(\"<label>\", {
            for: \"name\" + counter,
            class: \"form-label\",
            text: \"Nom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][name]\",
            class: \"form-control\",
            id: \"name\" + counter
        }))

        .append(\$(\"<label>\", {
            for: \"firstname\" + counter,
            class: \"form-label\",
            text: \"Prénom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][firstname]\",
            class: \"form-control\",
            id: \"firstname\" + counter
        }))

        .append(\$(\"<label>\", {
            for: \"nickname\" + counter,
            class: \"form-label\",
            text: \"Surnom de la personne du comite \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"committee[\" + counter + \"][nickname]\",
            class: \"form-control\",
            id: \"nickname\" + counter
        }))
        
        .append(\$(\"<hr>\"));

        \$(\"#inputs-container-comite\").append(newInputs);
        counter++;
        visualcounter++;
    });
});
</script>
", "Forms/comite.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Forms/comite.html.twig");
    }
}

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

/* Forms/decorum.html.twig */
class __TwigTemplate_8704bee15f1f471426d745c135227c4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/decorum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/decorum.html.twig"));

        // line 1
        echo "<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-decorum\">Ajouter un decorum +</button>
</div>
<div id=\"inputs-container-decorum\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1

    // Chaîne de caractères pour les options du select
    var optionType = \"\";
    var optionSource = \"\";

    // Boucle Twig pour générer les options
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "decorumtype", [], "array", false, false, false, 16)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 17
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
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 20, $this->source); })()), 0, [], "array", false, false, false, 20), "source", [], "array", false, false, false, 20)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 21
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
        // line 23
        echo "

 \$(\"#ajouter-input-decorum\").click(function() {

        // Création du select dynamique avec les options générées
        var selectType = \$(\"<select>\", {
            name: \"decorum[\" + counter + \"][type]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez un type de decorum\",
            disabled: true,
            selected: true
        })).append(optionType);

        var selectSource = \$(\"<select>\", {
            name: \"decorum[\" + counter + \"][source]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une source de decorum\",
            disabled: true,
            selected: true
        })).append(optionSource);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"title\" + counter,
            class: \"form-label\",
            text: \"Titre du decorum \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"decorum[\" + counter + \"][title]\",
            class: \"form-control\",
            id: \"title\" + counter
        })).append(\$(\"<label>\", {
            for: \"summary\" + counter,
            class: \"form-label\",
            text: \"Texte du décorum \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"decorum[\" + counter + \"][text]\",
            class: \"form-control\",
            id: \"summary\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        })).append(\$(\"<label>\", {
            for: \"year\" + counter,
            class: \"form-label p-2\",
            text: \"Année du decorum \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"date\",
            name: \"decorum[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter
        }))
        
           .append(selectType)
           .append(selectSource)
        
        .append(\$(\"<label>\", {
            for: \"path\" + counter,
            class: \"form-label\",
            text: \"Fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"file\",
            name: \"decorum[\" + counter + \"][file][0][path]\",
            class: \"form-control p-2\",
            id: \"path\" + counter
        }))
        
        ";
        // line 104
        echo "        
        .append(\$(\"<hr>\"));

        \$(\"#inputs-container-decorum\").append(newInputs);
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
        return "Forms/decorum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 104,  93 => 23,  82 => 21,  78 => 20,  75 => 19,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input-decorum\">Ajouter un decorum +</button>
</div>
<div id=\"inputs-container-decorum\"></div>

<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1

    // Chaîne de caractères pour les options du select
    var optionType = \"\";
    var optionSource = \"\";

    // Boucle Twig pour générer les options
    {% for name in listes[0]['decorumtype']|sort %}
        optionType += '<option value=\"{{name}}\">{{name}}</option>';
    {% endfor %}

    {% for name in listes[0]['source']|sort %}
        optionSource += '<option value=\"{{name}}\">{{name}}</option>';
    {% endfor %}


 \$(\"#ajouter-input-decorum\").click(function() {

        // Création du select dynamique avec les options générées
        var selectType = \$(\"<select>\", {
            name: \"decorum[\" + counter + \"][type]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez un type de decorum\",
            disabled: true,
            selected: true
        })).append(optionType);

        var selectSource = \$(\"<select>\", {
            name: \"decorum[\" + counter + \"][source]\",
            class: \"form-select\"
        }).append(\$(\"<option>\", {
            value: \"\",
            text: \"Sélectionnez une source de decorum\",
            disabled: true,
            selected: true
        })).append(optionSource);

        var newInputs = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"title\" + counter,
            class: \"form-label\",
            text: \"Titre du decorum \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"decorum[\" + counter + \"][title]\",
            class: \"form-control\",
            id: \"title\" + counter
        })).append(\$(\"<label>\", {
            for: \"summary\" + counter,
            class: \"form-label\",
            text: \"Texte du décorum \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"decorum[\" + counter + \"][text]\",
            class: \"form-control\",
            id: \"summary\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        })).append(\$(\"<label>\", {
            for: \"year\" + counter,
            class: \"form-label p-2\",
            text: \"Année du decorum \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"date\",
            name: \"decorum[\" + counter + \"][year]\",
            class: \"form-control\",
            id: \"year\" + counter
        }))
        
           .append(selectType)
           .append(selectSource)
        
        .append(\$(\"<label>\", {
            for: \"path\" + counter,
            class: \"form-label\",
            text: \"Fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"file\",
            name: \"decorum[\" + counter + \"][file][0][path]\",
            class: \"form-control p-2\",
            id: \"path\" + counter
        }))
        
        {# .append(\$(\"<label>\", {
            for: \"titlefile\" + counter,
            class: \"form-label\",
            text: \"Titre du fichier \" + visualcounter
        })).append(\$(\"<input>\", {
            type: \"text\",
            name: \"decorum[\" + counter + \"][file][0][title]\",
            class: \"form-control\",
            id: \"titlefile\" + counter
        })) #}
        
        .append(\$(\"<hr>\"));

        \$(\"#inputs-container-decorum\").append(newInputs);
        counter++;
        visualcounter++;
    });
});
</script>
", "Forms/decorum.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Forms/decorum.html.twig");
    }
}

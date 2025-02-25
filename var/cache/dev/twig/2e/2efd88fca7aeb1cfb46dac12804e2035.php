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

/* Forms/particularity.html.twig */
class __TwigTemplate_221c8669ca400280774d9c62475ef5d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/particularity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/particularity.html.twig"));

        // line 1
        echo "<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input\">Ajouter une particularité +</button>
</div>
<div id=\"inputs-container\"></div>


<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1;

\$(\"#ajouter-input\").click(function() {
        var newTextarea = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"input\" + counter,
            class: \"form-label\",
            text: \"Particularité \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"particularity[\" + counter + \"]\",
            class: \"form-control\",
            id: \"input\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        }));

        \$(\"#inputs-container\").append(newTextarea);
        counter++;
        visualcounter++;
    });
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Forms/particularity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group my-3\">
    <button type=\"button\" class=\"btn btn-outline-success\" id=\"ajouter-input\">Ajouter une particularité +</button>
</div>
<div id=\"inputs-container\"></div>


<script>
\$(document).ready(function() {
    var counter = 0;
    var visualcounter = 1;

\$(\"#ajouter-input\").click(function() {
        var newTextarea = \$(\"<div>\", {
            class: \"form-group mb-3\"
        }).append(\$(\"<label>\", {
            for: \"input\" + counter,
            class: \"form-label\",
            text: \"Particularité \" + visualcounter
        })).append(\$(\"<textarea>\", {
            name: \"particularity[\" + counter + \"]\",
            class: \"form-control\",
            id: \"input\" + counter,
            rows: 3,
            style: \"height: 5rem !important;\"
        }));

        \$(\"#inputs-container\").append(newTextarea);
        counter++;
        visualcounter++;
    });
});
</script>", "Forms/particularity.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Forms/particularity.html.twig");
    }
}

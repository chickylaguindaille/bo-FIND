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

/* FormsAdd/particularity.html.twig */
class __TwigTemplate_38ded1b28b3a13658e6071a42bfcdc54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/particularity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsAdd/particularity.html.twig"));

        // line 1
        echo "
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_particularity_";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_particularity_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 3) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'une particularité</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <label for=\"particularity_add_";
        // line 13
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true))) : (print ("")));
        echo "\" class=\"form-label\">Texte</label>
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>
                    <textarea name=\"particularity[";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["numberparticularity"]) || array_key_exists("numberparticularity", $context) ? $context["numberparticularity"] : (function () { throw new RuntimeError('Variable "numberparticularity" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "]\" class=\"form-control\" id=\"particularity_add_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 15) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 15)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true))) : (print ("")));
        echo "\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
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
        return "FormsAdd/particularity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  65 => 13,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Modal Particularités Ajout-->
    <div class=\"modal fade\" id=\"modal_add_particularity_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_add_particularity_{{association.id??\"\"}}\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Ajout d'une particularité</h5>
        </div>
        <div class=\"modal-body\">
            <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">

                <div class=\"form-group mb-3\">
                    <label for=\"particularity_add_{{association.id??\"\"}}\" class=\"form-label\">Texte</label>
                    <input name=\"action\" value=\"addassociation\" class=\"d-none\"></input>
                    <textarea name=\"particularity[{{numberparticularity}}]\" class=\"form-control\" id=\"particularity_add_{{association.id??\"\"}}\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
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
", "FormsAdd/particularity.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/FormsAdd/particularity.html.twig");
    }
}

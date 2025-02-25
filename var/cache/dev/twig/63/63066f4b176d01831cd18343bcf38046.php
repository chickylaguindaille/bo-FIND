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

/* Forms/additionalinformations.html.twig */
class __TwigTemplate_8c0e9f9641e2410ab0ea486b2ad8c22a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/additionalinformations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/additionalinformations.html.twig"));

        // line 1
        echo "
    <div class=\"form-group col-12\">
\t\t<label class=\"form-label\" for=\"nombre-selects\">Nombre de couleurs de l'association</label>
\t\t<select id=\"nombre-selects\" name=\"nombre-selects\" onchange=\"afficherSelects()\">
            <option value=\"0\">0</option>
\t\t\t<option value=\"1\">1</option>
\t\t\t<option value=\"2\">2</option>
\t\t\t<option value=\"3\">3</option>
\t\t\t<option value=\"4\">4</option>
\t\t\t<option value=\"5\">5</option>
\t\t\t<option value=\"6\">6</option>
\t\t</select>
        <div id=\"div-selects\"></div>
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Cris/Devise</label>
        <input type=\"text\" name=\"additionalinformations[scream]\" class=\"form-control inputville\" id=\"scream\">
    </div>
    <div class=\"form-group col-4\">
        <label class=\"form-label\" for=\"year\">Sexe</label>
            <select class=\"form-control\" name=\"additionalinformations[gendertype]\" id=\"gendertype\">
                <option value=\"Mixte\">Mixte</option>
                <option value=\"Masculin\">Masculin</option>
                <option value=\"Féminin\">Féminin</option>
            </select>
    </div>

\t<script>
\t\tfunction afficherSelects() {
\t\t\tvar nombre = document.getElementById(\"nombre-selects\").value;
\t\t\tvar divSelects = document.getElementById(\"div-selects\");
\t\t\tvar html = \"\";
\t\t\tfor (var i = 0; (i+1) <= nombre; i++) {
\t\t\t\thtml += \"<select id='select-couleur-\" + i + \"' name='additionalinformations[color][\" + i + \"]'>\";
\t\t\t\thtml += \"<option value='Azur'>Azur</option>\";
\t\t\t\thtml += \"<option value='Argent'>Argent</option>\";
\t\t\t\thtml += \"<option value='Gueule'>Gueule</option>\";
                html += \"<option value='Or'>Or</option>\";
                html += \"<option value='Sable'>Sable</option>\";
                html += \"<option value='Sinople'>Sinople</option>\";
                html += \"<option value='Bleu Roi'>Bleu Roi</option>\";
                html += \"<option value='Sang'>Sang</option>\";
                html += \"<option value='Emeraude'>Emeraude</option>\";
\t\t\t\thtml += \"</select>\";
\t\t\t}
\t\t\tdivSelects.innerHTML = html;
\t\t}
\t</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Forms/additionalinformations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div class=\"form-group col-12\">
\t\t<label class=\"form-label\" for=\"nombre-selects\">Nombre de couleurs de l'association</label>
\t\t<select id=\"nombre-selects\" name=\"nombre-selects\" onchange=\"afficherSelects()\">
            <option value=\"0\">0</option>
\t\t\t<option value=\"1\">1</option>
\t\t\t<option value=\"2\">2</option>
\t\t\t<option value=\"3\">3</option>
\t\t\t<option value=\"4\">4</option>
\t\t\t<option value=\"5\">5</option>
\t\t\t<option value=\"6\">6</option>
\t\t</select>
        <div id=\"div-selects\"></div>
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Cris/Devise</label>
        <input type=\"text\" name=\"additionalinformations[scream]\" class=\"form-control inputville\" id=\"scream\">
    </div>
    <div class=\"form-group col-4\">
        <label class=\"form-label\" for=\"year\">Sexe</label>
            <select class=\"form-control\" name=\"additionalinformations[gendertype]\" id=\"gendertype\">
                <option value=\"Mixte\">Mixte</option>
                <option value=\"Masculin\">Masculin</option>
                <option value=\"Féminin\">Féminin</option>
            </select>
    </div>

\t<script>
\t\tfunction afficherSelects() {
\t\t\tvar nombre = document.getElementById(\"nombre-selects\").value;
\t\t\tvar divSelects = document.getElementById(\"div-selects\");
\t\t\tvar html = \"\";
\t\t\tfor (var i = 0; (i+1) <= nombre; i++) {
\t\t\t\thtml += \"<select id='select-couleur-\" + i + \"' name='additionalinformations[color][\" + i + \"]'>\";
\t\t\t\thtml += \"<option value='Azur'>Azur</option>\";
\t\t\t\thtml += \"<option value='Argent'>Argent</option>\";
\t\t\t\thtml += \"<option value='Gueule'>Gueule</option>\";
                html += \"<option value='Or'>Or</option>\";
                html += \"<option value='Sable'>Sable</option>\";
                html += \"<option value='Sinople'>Sinople</option>\";
                html += \"<option value='Bleu Roi'>Bleu Roi</option>\";
                html += \"<option value='Sang'>Sang</option>\";
                html += \"<option value='Emeraude'>Emeraude</option>\";
\t\t\t\thtml += \"</select>\";
\t\t\t}
\t\t\tdivSelects.innerHTML = html;
\t\t}
\t</script>", "Forms/additionalinformations.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Forms/additionalinformations.html.twig");
    }
}

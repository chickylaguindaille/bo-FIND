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

/* FormsModification/informations.html.twig */
class __TwigTemplate_dfb340cd73756a4464372a1169c0c962 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/informations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FormsModification/informations.html.twig"));

        // line 1
        echo "                    <!-- Modal Informations-->
                        <div class=\"modal fade\" id=\"modal_information_";
        // line 2
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true))) : (print ("")));
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_information_";
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true))) : (print ("")));
        echo "\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ces informations de ";
        // line 6
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 6)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true))) : (print ("")));
        echo "</h5>
                            </div>
                            <div class=\"modal-body\">
                                <form class=\"forms-sample\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_patch", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"name\">Nom de l'association</label>
                                                        <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" value=\"";
        // line 13
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true))) : (print ("")));
        echo "\">
                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"nickname\">Surnom</label>
                                                        <input type=\"text\" name=\"nickname\" class=\"form-control inputville\" id=\"nickname\" value=\"";
        // line 17
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", false, false, false, 17)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"town\">Ville</label>
                                                            <select name=\"town\" class=\"form-select\" id=\"town\">
                                                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 24, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 25
            echo "                                                                    <option ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 25, $this->source); })()), "town", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 25))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                                                            </select>
                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"nickname\">Date de création</label>
                                                        <input type=\"date\" name=\"creation\" class=\"form-control inputville\" id=\"creation\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 31, $this->source); })()), "creation", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
        echo "\">
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"type\">Type</label>
                                                            <select name=\"type\" class=\"form-select\">
                                                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 38), "assotype", [], "array", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 38), "assotype", [], "array", false, false, false, 38), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 39
            echo "                                                                    <option ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39) == $context["name"])) {
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
        // line 41
        echo "                                                            </select>

                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"hat\">Couvre-Chef</label>
                                                            <select name=\"hat\" class=\"form-select\">
                                                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 47), "hats", [], "array", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 47), "hats", [], "array", false, false, false, 47), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 48
            echo "                                                                    <option ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 48, $this->source); })()), "hat", [], "any", false, false, false, 48) == $context["name"])) {
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
        // line 50
        echo "                                                            </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group mb-3\">
                                                    <label for=\"resume\" class=\"form-label\">Résumé</label>
                                                    <textarea name=\"resume\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 5rem !important;\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 55, $this->source); })()), "resume", [], "any", false, false, false, 55), "html", null, true);
        echo "</textarea>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label for=\"logo\">Logo</label>
                                                    <div class=\"pb-2\"><i>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 60, $this->source); })()), "logo", [], "any", false, false, false, 60), "html", null, true);
        echo "</i></div>
                                                    <input type=\"file\" name=\"logo\" class=\"form-control inputville p-2\" id=\"logo\">
                                                </div>

    <div class=\"form-group col-12\">
\t\t<label class=\"form-label\" for=\"nombre-selects\">Nombre de couleurs de l'association</label><br>
\t\t

        <div>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 70
            echo "                <select id=\"nombre-selects\" name=\"additionalinformations[color][";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\">
                <option value=\"\">/</option>
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => "Azur", 1 => "Argent", 2 => "Gueule", 3 => "Or", 4 => "Sable", 5 => "Sinople", 6 => "Bleu Roi", 7 => "Sang", 8 => "Emeraude"]);
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 73
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 73), "color", [], "any", false, true, false, 73), $context["i"], [], "array", true, true, false, 73) && ($context["option"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 73, $this->source); })()), "additionalinformations", [], "any", false, false, false, 73), "color", [], "any", false, false, false, 73), $context["i"], [], "array", false, false, false, 73)))) {
                    // line 74
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</option>
                    ";
                } else {
                    // line 76
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</option>
                    ";
                }
                // line 78
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </select>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>

       
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Cris/Devise</label>
        <input type=\"text\" name=\"additionalinformations[scream]\" class=\"form-control inputville\" id=\"scream\" value=\"";
        // line 87
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 87), "scream", [], "any", true, true, false, 87) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 87), "scream", [], "any", false, false, false, 87)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 87), "scream", [], "any", false, false, false, 87), "html", null, true))) : (print ("")));
        echo "\">
    </div>
    <div class=\"form-group col-4\">
        <label class=\"form-label\" for=\"year\">Sexe</label>
            <select class=\"form-control\" name=\"additionalinformations[gendertype]\" id=\"gendertype\">
                <option ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 92), "scream", [], "any", true, true, false, 92) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 92, $this->source); })()), "additionalinformations", [], "any", false, false, false, 92), "gendertype", [], "any", false, false, false, 92) == "Mixte"))) {
            echo "selected";
        }
        echo " value=\"Mixte\">Mixte</option>
                <option ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 93), "scream", [], "any", true, true, false, 93) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 93, $this->source); })()), "additionalinformations", [], "any", false, false, false, 93), "gendertype", [], "any", false, false, false, 93) == "Masculin"))) {
            echo "selected";
        }
        echo " value=\"Masculin\">Masculin</option>
                <option ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 94), "scream", [], "any", true, true, false, 94) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 94, $this->source); })()), "additionalinformations", [], "any", false, false, false, 94), "gendertype", [], "any", false, false, false, 94) == "Féminin"))) {
            echo "selected";
        }
        echo " value=\"Féminin\">Féminin</option>
            </select>
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
        return "FormsModification/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 94,  261 => 93,  255 => 92,  247 => 87,  239 => 81,  232 => 79,  226 => 78,  218 => 76,  210 => 74,  207 => 73,  203 => 72,  197 => 70,  193 => 69,  181 => 60,  173 => 55,  166 => 50,  151 => 48,  147 => 47,  139 => 41,  124 => 39,  120 => 38,  110 => 31,  104 => 27,  89 => 25,  85 => 24,  75 => 17,  68 => 13,  61 => 9,  55 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                    <!-- Modal Informations-->
                        <div class=\"modal fade\" id=\"modal_information_{{association.id??\"\"}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_information_{{association.id??\"\"}}\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ces informations de {{association.name??\"\"}}</h5>
                            </div>
                            <div class=\"modal-body\">
                                <form class=\"forms-sample\" action=\"{{ path('association_patch', {'id': association.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"name\">Nom de l'association</label>
                                                        <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" value=\"{{association.name??\"\"}}\">
                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"nickname\">Surnom</label>
                                                        <input type=\"text\" name=\"nickname\" class=\"form-control inputville\" id=\"nickname\" value=\"{{association.nickname??\"\"}}\">
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"town\">Ville</label>
                                                            <select name=\"town\" class=\"form-select\" id=\"town\">
                                                                {% for town in towns|sort %}
                                                                    <option {% if association.town == town.name %} selected {% endif %} value=\"{{town.id}}\">{{town.name}}</option>
                                                                {% endfor %}
                                                            </select>
                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"nickname\">Date de création</label>
                                                        <input type=\"date\" name=\"creation\" class=\"form-control inputville\" id=\"creation\" value=\"{{association.creation|date(\"Y-m-d\")}}\">
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"type\">Type</label>
                                                            <select name=\"type\" class=\"form-select\">
                                                                {% for name in listes[0]['assotype']|default([])|sort %}
                                                                    <option {% if association.type == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                                                                {% endfor %}
                                                            </select>

                                                    </div>
                                                    <div class=\"form-group col-6\">
                                                        <label for=\"hat\">Couvre-Chef</label>
                                                            <select name=\"hat\" class=\"form-select\">
                                                                {% for name in listes[0]['hats']|default([])|sort %}
                                                                    <option {% if association.hat == name %} selected {% endif %} value=\"{{name}}\">{{name}}</option>
                                                                {% endfor %}
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group mb-3\">
                                                    <label for=\"resume\" class=\"form-label\">Résumé</label>
                                                    <textarea name=\"resume\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 5rem !important;\">{{association.resume}}</textarea>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label for=\"logo\">Logo</label>
                                                    <div class=\"pb-2\"><i>{{association.logo}}</i></div>
                                                    <input type=\"file\" name=\"logo\" class=\"form-control inputville p-2\" id=\"logo\">
                                                </div>

    <div class=\"form-group col-12\">
\t\t<label class=\"form-label\" for=\"nombre-selects\">Nombre de couleurs de l'association</label><br>
\t\t

        <div>
            {% for i in 0..5 %}
                <select id=\"nombre-selects\" name=\"additionalinformations[color][{{i}}]\">
                <option value=\"\">/</option>
                {% for option in ['Azur', 'Argent', 'Gueule', 'Or', 'Sable', 'Sinople', 'Bleu Roi', 'Sang', 'Emeraude'] %}
                    {% if association.additionalinformations.color[i] is defined and option == association.additionalinformations.color[i] %}
                    <option value=\"{{ option }}\" selected>{{ option }}</option>
                    {% else %}
                    <option value=\"{{ option }}\">{{ option }}</option>
                    {% endif %}
                {% endfor %}
                </select>
            {% endfor %}
        </div>

       
    </div>
    <div class=\"form-group col-4\">
        <label for=\"author\">Cris/Devise</label>
        <input type=\"text\" name=\"additionalinformations[scream]\" class=\"form-control inputville\" id=\"scream\" value=\"{{association.additionalinformations.scream??\"\"}}\">
    </div>
    <div class=\"form-group col-4\">
        <label class=\"form-label\" for=\"year\">Sexe</label>
            <select class=\"form-control\" name=\"additionalinformations[gendertype]\" id=\"gendertype\">
                <option {% if association.additionalinformations.scream is defined and association.additionalinformations.gendertype == \"Mixte\" %}selected{% endif %} value=\"Mixte\">Mixte</option>
                <option {% if association.additionalinformations.scream is defined and association.additionalinformations.gendertype == \"Masculin\" %}selected{% endif %} value=\"Masculin\">Masculin</option>
                <option {% if association.additionalinformations.scream is defined and association.additionalinformations.gendertype == \"Féminin\" %}selected{% endif %} value=\"Féminin\">Féminin</option>
            </select>
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
", "FormsModification/informations.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/FormsModification/informations.html.twig");
    }
}

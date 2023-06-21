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

/* Forms/informations.html.twig */
class __TwigTemplate_aef385cce2c462ef828ff70c8fdf6380 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/informations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Forms/informations.html.twig"));

        // line 1
        echo "<form class=\"forms-sample\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_add");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"name\">Nom de l'association</label>
            <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "html", null, true);
        echo ">
        </div>
        <div class=\"form-group col-6\">
            <label for=\"nickname\">Surnom</label>
            <input type=\"text\" name=\"nickname\" class=\"form-control inputville\" id=\"nickname\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"town\">Ville</label>
            <select name=\"town\" class=\"form-select\" id=\"town\" ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 17
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </select>
        </div>
        <div class=\"form-group col-6\">
            <label for=\"nickname\">Date de création</label>
            <input type=\"date\" name=\"creation\" class=\"form-control inputville\" id=\"creation\" value=\"\" autocomplete=\"off\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"type\">Type</label>
            <select name=\"type\" class=\"form-select\" id=\"type\" ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 30, $this->source); })()), 0, [], "array", false, false, false, 30), "assotype", [], "array", false, false, false, 30)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 31
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </select>
        </div>
        <div class=\"form-group col-6\">
            <label for=\"hat\">Couvre-Chef</label>
            <select name=\"hat\" class=\"form-select\" id=\"hat\" ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })()), "html", null, true);
        echo ">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38), "hats", [], "array", false, false, false, 38)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 39
            echo "                    <option value=\"";
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
        echo "            </select>
        </div>
    </div>
    <div class=\"form-group mb-3\">
        <label for=\"resume\" class=\"form-label\">Résumé</label>
        <textarea name=\"resume\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
    </div>

    <div class=\"form-group\">
        <label for=\"logo\">Logo</label>
        <input type=\"file\" name=\"logo\" class=\"form-control inputville p-2\" id=\"logo\">
    </div>


        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingZero\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseZero\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseZero\">
                    Informations additionnelles
                </button>
                </h2>
                <div id=\"panelsStayOpen-collapseZero\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingOne\">
                    <div class=\"accordion-body\">
                        ";
        // line 64
        $this->loadTemplate("Forms/additionalinformations.html.twig", "Forms/informations.html.twig", 64)->display($context);
        // line 65
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                    Particularités
                </button>
                </h2>
                <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingOne\">
                    <div class=\"accordion-body\">
                        ";
        // line 76
        $this->loadTemplate("Forms/particularity.html.twig", "Forms/informations.html.twig", 76)->display($context);
        // line 77
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                        Anecdotes
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                    <div class=\"accordion-body\">
                        ";
        // line 88
        $this->loadTemplate("Forms/anecdotes.html.twig", "Forms/informations.html.twig", 88)->display($context);
        // line 89
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseThree\">
                        Documents
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingThree\">
                    <div class=\"accordion-body\">
                        ";
        // line 100
        $this->loadTemplate("Forms/document.html.twig", "Forms/informations.html.twig", 100)->display($context);
        // line 101
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFour\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFour\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFour\">
                        Decorum
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFour\">
                    <div class=\"accordion-body\">
                        ";
        // line 112
        $this->loadTemplate("Forms/decorum.html.twig", "Forms/informations.html.twig", 112)->display($context);
        // line 113
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFive\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFive\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFive\">
                        Pin's, Autocollants et autre
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFive\">
                    <div class=\"accordion-body\">
                        ";
        // line 124
        $this->loadTemplate("Forms/goodies.html.twig", "Forms/informations.html.twig", 124)->display($context);
        // line 125
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSix\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSix\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSix\">
                        Chant
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSix\">
                    <div class=\"accordion-body\">
                        ";
        // line 136
        $this->loadTemplate("Forms/chant.html.twig", "Forms/informations.html.twig", 136)->display($context);
        // line 137
        echo "                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSeven\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSeven\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSeven\">
                        Comité
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSeven\">
                    <div class=\"accordion-body\">
                        ";
        // line 148
        $this->loadTemplate("Forms/comite.html.twig", "Forms/informations.html.twig", 148)->display($context);
        // line 149
        echo "                    </div>
                </div>
            </div>
        </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Forms/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 149,  269 => 148,  256 => 137,  254 => 136,  241 => 125,  239 => 124,  226 => 113,  224 => 112,  211 => 101,  209 => 100,  196 => 89,  194 => 88,  181 => 77,  179 => 76,  166 => 65,  164 => 64,  139 => 41,  128 => 39,  124 => 38,  120 => 37,  114 => 33,  103 => 31,  99 => 30,  95 => 29,  83 => 19,  72 => 17,  68 => 16,  64 => 15,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"forms-sample\" action=\"{{ path('association_add') }}\" method=\"post\" enctype=\"multipart/form-data\">
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"name\">Nom de l'association</label>
            <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" {{required}}>
        </div>
        <div class=\"form-group col-6\">
            <label for=\"nickname\">Surnom</label>
            <input type=\"text\" name=\"nickname\" class=\"form-control inputville\" id=\"nickname\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"town\">Ville</label>
            <select name=\"town\" class=\"form-select\" id=\"town\" {{required}}>
                {% for ville in towns|sort %}
                    <option value=\"{{ville.id}}\">{{ville.name}}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group col-6\">
            <label for=\"nickname\">Date de création</label>
            <input type=\"date\" name=\"creation\" class=\"form-control inputville\" id=\"creation\" value=\"\" autocomplete=\"off\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-6\">
            <label for=\"type\">Type</label>
            <select name=\"type\" class=\"form-select\" id=\"type\" {{required}}>
                {% for name in listes[0]['assotype']|sort %}
                    <option value=\"{{name}}\">{{name}}</option>
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group col-6\">
            <label for=\"hat\">Couvre-Chef</label>
            <select name=\"hat\" class=\"form-select\" id=\"hat\" {{required}}>
                {% for name in listes[0]['hats']|sort %}
                    <option value=\"{{name}}\">{{name}}</option>
                {% endfor %}
            </select>
        </div>
    </div>
    <div class=\"form-group mb-3\">
        <label for=\"resume\" class=\"form-label\">Résumé</label>
        <textarea name=\"resume\" class=\"form-control\" id=\"resume\" rows=\"3\" style=\"height: 5rem !important;\"></textarea>
    </div>

    <div class=\"form-group\">
        <label for=\"logo\">Logo</label>
        <input type=\"file\" name=\"logo\" class=\"form-control inputville p-2\" id=\"logo\">
    </div>


        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingZero\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseZero\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseZero\">
                    Informations additionnelles
                </button>
                </h2>
                <div id=\"panelsStayOpen-collapseZero\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingOne\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/additionalinformations.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                    Particularités
                </button>
                </h2>
                <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingOne\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/particularity.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                        Anecdotes
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/anecdotes.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseThree\">
                        Documents
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingThree\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/document.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFour\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFour\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFour\">
                        Decorum
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFour\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/decorum.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFive\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFive\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFive\">
                        Pin's, Autocollants et autre
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFive\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/goodies.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSix\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSix\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSix\">
                        Chant
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSix\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/chant.html.twig' %}
                    </div>
                </div>
            </div>
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSeven\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSeven\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSeven\">
                        Comité
                    </button>
                </h2>
                <div id=\"panelsStayOpen-collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSeven\">
                    <div class=\"accordion-body\">
                        {% include 'Forms/comite.html.twig' %}
                    </div>
                </div>
            </div>
        </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
        <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
    </div>
</form>", "Forms/informations.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Forms/informations.html.twig");
    }
}

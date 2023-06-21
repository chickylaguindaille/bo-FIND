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

/* Associations/search.associationlist.html.twig */
class __TwigTemplate_5f1bd70e73521485d3c18ced5085fd50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/search.associationlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/search.associationlist.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\" id=\"result-search\">
                                    <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                        <th>
                                            Logo
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Surnom
                                        </th>
                                        <th>
                                            Ville
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Couvre-Chef
                                        </th>
                                        <th>
                                            Création
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 30
            echo "                                            <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 34
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", true, true, false, 34) && (twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 34) != ""))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 34)), "html", null, true);
                echo "\" alt=\"image\"/>";
            } else {
                echo "<i>/</i>";
            }
            // line 35
            echo "                                            </td>
                                            <td>
                                                ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 41
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", true, true, false, 41) && (twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 41) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 41), "html", null, true);
            } else {
                echo "<i>/</i>";
            }
            // line 42
            echo "                                            </td>
                                            <td>
                                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "town", [], "any", false, false, false, 44), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 47
            (((twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 47)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 47), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 50
            (((twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", false, false, false, 50)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", false, false, false, 50), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", true, true, false, 53) && (twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", false, false, false, 53) != 0))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>/</i>";
            }
            // line 54
            echo "                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_details", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 57), "redirect" => "informations"]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\">
                                                        Voir plus
                                                        </button></a>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Supprimer-->
                                                        <div class=\"modal fade\" id=\"modalsuppr_";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo " ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    ";
            // line 76
            echo "                                                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" role=\"button\">Supprimer</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                            </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo " 
                                    </tbody>
                                    </table>
                                </div>
                                ";
        // line 90
        if (array_key_exists("emptyarray", $context)) {
            echo "<div class=\"text-center pt-5\" style=\"font-weight:bold;\">Aucun résultat</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Associations/search.associationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 90,  193 => 86,  175 => 76,  169 => 72,  163 => 69,  154 => 65,  146 => 60,  140 => 57,  135 => 54,  129 => 53,  123 => 50,  117 => 47,  111 => 44,  107 => 42,  100 => 41,  94 => 37,  90 => 35,  81 => 34,  77 => 30,  73 => 29,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\" id=\"result-search\">
                                    <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                        <th>
                                            Logo
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Surnom
                                        </th>
                                        <th>
                                            Ville
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Couvre-Chef
                                        </th>
                                        <th>
                                            Création
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for association in associations %}
                                            <tr>
                                            <td class=\"py-1\">
                                                {# {{association.logo??\"\"}}
                                                <img src=\"{{ asset(association.logo??\"\") }}\" alt=\"image\"/> #}
                                                {% if (association.logo is defined) and (association.logo != \"\") %}<img src=\"{{ asset(association.logo) }}\" alt=\"image\"/>{% else %}<i>/</i>{% endif %}
                                            </td>
                                            <td>
                                                {{association.name}}
                                            </td>
                                            <td>
                                                {# {{association.nickname??\"/\"}} #}
                                                {% if (association.nickname is defined) and (association.nickname != \"\") %}{{association.nickname}}{% else %}<i>/</i>{% endif %}
                                            </td>
                                            <td>
                                                {{association.town}}
                                            </td>
                                            <td>
                                                {{association.type??\"\"}}
                                            </td>
                                            <td>
                                                {{association.hat??\"\"}}
                                            </td>
                                            <td>
                                                {% if (association.creation is defined) and (association.creation != 0) %}{{association.creation|date(\"d/m/Y\")}}{% else %}<i>/</i>{% endif %}
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <a href=\"{{ path('association_details', {'id': association.id, 'redirect': \"informations\"}) }}\"><button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\">
                                                        Voir plus
                                                        </button></a>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_{{association.id}}\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Supprimer-->
                                                        <div class=\"modal fade\" id=\"modalsuppr_{{association.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_{{association.id}}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer {{association.name}}</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer {{association.name}} ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    {# <a href=\"{{ path('ville_delete') }}\"><button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Supprimer</button></a> #}
                                                                    <a class=\"btn btn-danger\" href=\"{{ path('association_delete', {'id': association.id}) }}\" role=\"button\">Supprimer</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                            </td>
                                            </tr>
                                        {% endfor %} 
                                    </tbody>
                                    </table>
                                </div>
                                {% if emptyarray is defined %}<div class=\"text-center pt-5\" style=\"font-weight:bold;\">Aucun résultat</div>{% endif %}", "Associations/search.associationlist.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Associations/search.associationlist.html.twig");
    }
}

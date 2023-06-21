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

/* Villes/search.villelist.html.twig */
class __TwigTemplate_e8a52c5d0818aad8a00eae756bf2b2d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/search.villelist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/search.villelist.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\" id=\"";
        (((array_key_exists("countrychosenid", $context) &&  !(null === (isset($context["countrychosenid"]) || array_key_exists("countrychosenid", $context) ? $context["countrychosenid"] : (function () { throw new RuntimeError('Variable "countrychosenid" does not exist.', 1, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["countrychosenid"]) || array_key_exists("countrychosenid", $context) ? $context["countrychosenid"] : (function () { throw new RuntimeError('Variable "countrychosenid" does not exist.', 1, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
    <table class=\"table table-striped\" data-toggle=\"table\">
        <thead>
            <tr>
            <th>
                Blason
            </th>
            <th>
                Nom
            </th>
            <th>
                Region
            </th>
            <th>
                Country
            </th>
            <th>
                Action
            </th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["townsfiltered"]) || array_key_exists("townsfiltered", $context) ? $context["townsfiltered"] : (function () { throw new RuntimeError('Variable "townsfiltered" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 24
            echo "                <tr>
                <td class=\"py-1\">
                    ";
            // line 27
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 27)), "html", null, true);
            echo "\" alt=\"image\"/>
                </td>
                <td>
                ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 33), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 36), "html", null, true);
            echo "
                </td>
                <td>
                    <!-- Button trigger modal -->
                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                            Modifier
                            </button>
                            <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
                            Supprimer
                            </button>

                            <!-- Modal Modifier-->
                            <div class=\"modal fade\" id=\"modal_";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form class=\"forms-sample\" action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_patch", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                            <div class=\"form-group\">
                                            <label for=\"name\">Nom de la ville</label>
                                            <input type=\"text\" class=\"form-control inputville\" name=\"name\"  id=\"name\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\" required=\"required\">
                                            </div>
                                            <div class=\"form-group\">
                                            <label for=\"region\">Région</label>
                                            <input type=\"text\" class=\"form-control inputville\" name=\"region\" id=\"region\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 62), "html", null, true);
            echo "\" required=\"required\">
                                            </div>
                                            <div class=\"form-group\">
                                            <label for=\"country\">Pays</label>
                                                <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                    <option value=\"France\">France</option>
                                                    <option value=\"Belgique\">Belgique</option>
                                                </select>                                                                        </div>
                                            <div class=\"form-group\">
                                            <label for=\"blason\">Blason</label>
                                            <div class=\"pb-2\"><i>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 72), "html", null, true);
            echo "</i></div>
                                            <input type=\"file\" class=\"form-control inputville p-2\" name=\"blason\" id=\"blason\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
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

                            <!-- Modal Supprimer-->
                            <div class=\"modal fade\" id=\"modalsuppr_";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        Etes vous sûr de vouloir supprimer ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 94), "html", null, true);
            echo " ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        ";
            // line 98
            echo "                                        <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 98)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
    </table>
</div>
";
        // line 112
        if (array_key_exists("emptyarray", $context)) {
            echo "<div class=\"text-center pt-5 pb-4\" style=\"font-weight:bold;\">Aucun résultat</div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Villes/search.villelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 112,  218 => 109,  200 => 98,  194 => 94,  188 => 91,  179 => 87,  162 => 73,  158 => 72,  145 => 62,  138 => 58,  132 => 55,  126 => 52,  117 => 48,  109 => 43,  103 => 40,  96 => 36,  90 => 33,  84 => 30,  77 => 27,  73 => 24,  69 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\" id=\"{{countrychosenid??\"\"}}\">
    <table class=\"table table-striped\" data-toggle=\"table\">
        <thead>
            <tr>
            <th>
                Blason
            </th>
            <th>
                Nom
            </th>
            <th>
                Region
            </th>
            <th>
                Country
            </th>
            <th>
                Action
            </th>
            </tr>
        </thead>
        <tbody>
            {% for town in townsfiltered %}
                <tr>
                <td class=\"py-1\">
                    {# {{town.blason}} #}
                    <img src=\"{{ asset(town.blason) }}\" alt=\"image\"/>
                </td>
                <td>
                {{town.name}}
                </td>
                <td>
                    {{town.region}}
                </td>
                <td>
                    {{town.country}}
                </td>
                <td>
                    <!-- Button trigger modal -->
                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_{{town.id}}\">
                            Modifier
                            </button>
                            <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_{{town.id}}\">
                            Supprimer
                            </button>

                            <!-- Modal Modifier-->
                            <div class=\"modal fade\" id=\"modal_{{town.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_{{town.id}}\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier {{town.name}}</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form class=\"forms-sample\" action=\"{{ path('ville_patch', {'id': town.id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
                                            <div class=\"form-group\">
                                            <label for=\"name\">Nom de la ville</label>
                                            <input type=\"text\" class=\"form-control inputville\" name=\"name\"  id=\"name\" value=\"{{town.name}}\" required=\"required\">
                                            </div>
                                            <div class=\"form-group\">
                                            <label for=\"region\">Région</label>
                                            <input type=\"text\" class=\"form-control inputville\" name=\"region\" id=\"region\" value=\"{{town.region}}\" required=\"required\">
                                            </div>
                                            <div class=\"form-group\">
                                            <label for=\"country\">Pays</label>
                                                <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                    <option value=\"France\">France</option>
                                                    <option value=\"Belgique\">Belgique</option>
                                                </select>                                                                        </div>
                                            <div class=\"form-group\">
                                            <label for=\"blason\">Blason</label>
                                            <div class=\"pb-2\"><i>{{town.blason}}</i></div>
                                            <input type=\"file\" class=\"form-control inputville p-2\" name=\"blason\" id=\"blason\" value=\"{{town.blason}}\">
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

                            <!-- Modal Supprimer-->
                            <div class=\"modal fade\" id=\"modalsuppr_{{town.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_{{town.id}}\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer {{town.name}}</h5>
                                    </div>
                                    <div class=\"modal-body\">
                                        Etes vous sûr de vouloir supprimer {{town.name}} ?
                                    </div>
                                    <div class=\"modal-footer\">
                                        {# <a href=\"{{ path('ville_delete') }}\"><button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Supprimer</button></a> #}
                                        <a class=\"btn btn-danger\" href=\"{{ path('ville_delete', {'id': town.id}) }}\" role=\"button\">Supprimer</a>
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
{% if emptyarray is defined %}<div class=\"text-center pt-5 pb-4\" style=\"font-weight:bold;\">Aucun résultat</div>{% endif %}", "Villes/search.villelist.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Villes/search.villelist.html.twig");
    }
}

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

/* Associations/associationlist.html.twig */
class __TwigTemplate_fd1b59467ece07de44b83ea2cb16b29f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/associationlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/associationlist.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Associations/associationlist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("Villes/villelist.css.twig", "Associations/associationlist.html.twig", 7)->display($context);
        // line 8
        echo "


        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">

                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                            <div class=\"card-body\">
                                <div class=\"align-items-center d-flex justify-content-between\">

                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2\" id=\"searchInputAssociation\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>

                                        <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    <!-- Modal tri -->
                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Pays</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 44, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        <option value=\"France\">France</option>
                                                        <option value=\"Belgique\">Belgique</option>
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilter\" ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 55, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 56
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Ville</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"townfilter\" ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 63, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 65, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 66
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"type\">Type</label>
                                                    <select name=\"type\" class=\"form-select\" id=\"typefilter\" ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 75), "assotype", [], "array", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 75), "assotype", [], "array", false, false, false, 75), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 76
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Couvre-Chef</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 83, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 85), "hats", [], "array", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 85), "hats", [], "array", false, false, false, 85), [])) : ([]))));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 86
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Genre</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 93, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        <option value=\"Mixte\">Mixte</option>
                                                        <option value=\"Masculin\">Masculin</option>
                                                        <option value=\"Féminin\">Féminin</option>
                                                    </select>
                                                </div>



                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrier\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>


                                    <h3 class=\"card-title py-2 m-0\">Toutes les Associations</h3>
                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                    Ajouter une association +
                                    </button>
                                </div>

                                    <!-- Modal Ajout Association-->
                                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-scrollable modal-xl mt-0\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une association</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
        // line 128
        $this->loadTemplate("Forms/informations.html.twig", "Associations/associationlist.html.twig", 128)->display($context);
        // line 129
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <hr>
                                <div class=\"table-responsive\" id=\"result-search\">
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
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 163
            echo "                                            <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 167
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", true, true, false, 167) && (twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 167) != ""))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 167)), "html", null, true);
                echo "\" alt=\"image\"/>";
            } else {
                echo "<i>/</i>";
            }
            // line 168
            echo "                                            </td>
                                            <td>
                                                ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 170), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 174
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", true, true, false, 174) && (twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 174) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 174), "html", null, true);
            } else {
                echo "<i>/</i>";
            }
            // line 175
            echo "                                            </td>
                                            <td>
                                                ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "town", [], "any", false, false, false, 177), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 180
            (((twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", true, true, false, 180) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 180)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "any", false, false, false, 180), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 183
            (((twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", true, true, false, 183) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", false, false, false, 183)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "any", false, false, false, 183), "html", null, true))) : (print ("")));
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", true, true, false, 186) && (twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", false, false, false, 186) != 0))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "creation", [], "any", false, false, false, 186), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>/</i>";
            }
            // line 187
            echo "                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_details", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 190), "redirect" => "informations"]), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\">
                                                        Voir plus
                                                        </button></a>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 193), "html", null, true);
            echo "\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Supprimer-->
                                                        <div class=\"modal fade\" id=\"modalsuppr_";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 202), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 205), "html", null, true);
            echo " ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    ";
            // line 209
            echo "                                                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 209)]), "html", null, true);
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
        // line 219
        echo " 
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                <div id=\"loaderspinner\" class=\"text-center\" style=\"display:none;\">
                                    <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/spinner.gif"), "html", null, true);
        echo "\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
              </div>
            </div>
          </div>
        </div>

    ";
        // line 233
        $this->loadTemplate("Associations/associationlist.js.twig", "Associations/associationlist.html.twig", 233)->display($context);
        // line 234
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Associations/associationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 234,  445 => 233,  435 => 226,  426 => 219,  408 => 209,  402 => 205,  396 => 202,  387 => 198,  379 => 193,  373 => 190,  368 => 187,  362 => 186,  356 => 183,  350 => 180,  344 => 177,  340 => 175,  333 => 174,  327 => 170,  323 => 168,  314 => 167,  310 => 163,  306 => 162,  271 => 129,  269 => 128,  231 => 93,  224 => 88,  213 => 86,  209 => 85,  204 => 83,  197 => 78,  186 => 76,  182 => 75,  177 => 73,  170 => 68,  159 => 66,  155 => 65,  150 => 63,  143 => 58,  132 => 56,  128 => 55,  123 => 53,  111 => 44,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

{% include 'Villes/villelist.css.twig' %}



        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">

                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                            <div class=\"card-body\">
                                <div class=\"align-items-center d-flex justify-content-between\">

                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2\" id=\"searchInputAssociation\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>

                                        <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    <!-- Modal tri -->
                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Pays</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        <option value=\"France\">France</option>
                                                        <option value=\"Belgique\">Belgique</option>
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for name in regions|sort %}
                                                            <option value=\"{{name}}\">{{name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Ville</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"townfilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for town in towns|sort %}
                                                            <option value=\"{{town.name}}\">{{town.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"type\">Type</label>
                                                    <select name=\"type\" class=\"form-select\" id=\"typefilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for name in listes[0]['assotype']|default([])|sort %}
                                                            <option value=\"{{name}}\">{{name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Couvre-Chef</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for name in listes[0]['hats']|default([])|sort %}
                                                            <option value=\"{{name}}\">{{name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Genre</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        <option value=\"Mixte\">Mixte</option>
                                                        <option value=\"Masculin\">Masculin</option>
                                                        <option value=\"Féminin\">Féminin</option>
                                                    </select>
                                                </div>



                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrier\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>


                                    <h3 class=\"card-title py-2 m-0\">Toutes les Associations</h3>
                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                    Ajouter une association +
                                    </button>
                                </div>

                                    <!-- Modal Ajout Association-->
                                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-scrollable modal-xl mt-0\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une association</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    {% include 'Forms/informations.html.twig' %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <hr>
                                <div class=\"table-responsive\" id=\"result-search\">
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
                            </div>
                        </div>
                                <div id=\"loaderspinner\" class=\"text-center\" style=\"display:none;\">
                                    <img src=\"{{ asset(\"assets/spinner.gif\") }}\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
              </div>
            </div>
          </div>
        </div>

    {% include 'Associations/associationlist.js.twig' %}
    {% endblock %}", "Associations/associationlist.html.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Associations/associationlist.html.twig");
    }
}

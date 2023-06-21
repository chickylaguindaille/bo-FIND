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

/* Villes/villelist.html.twig */
class __TwigTemplate_42403305440639d0d136a24633ccfdb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/villelist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/villelist.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Villes/villelist.html.twig", 1);
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
        $this->loadTemplate("Villes/villelist.css.twig", "Villes/villelist.html.twig", 7)->display($context);
        // line 8
        echo "
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">

                    <ul class=\"nav nav-pills nav-fill m-3\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">France</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Belgique</button>
                        </li>
                    </ul>
                    <div class=\"tab-content p-0\" id=\"pills-tabContent\">
                        ";
        // line 24
        echo "                        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                            <div class=\"card-body pt-1\">
                                <div class=\"align-items-center d-flex justify-content-between\">


                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2 searchInputVille\" id=\"searchInputVilleFrance\" data-country=\"frenchtown\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>
                                        <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                ";
        // line 40
        echo "                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilterfrance\" ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 51, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["frenchregions"]) || array_key_exists("frenchregions", $context) ? $context["frenchregions"] : (function () { throw new RuntimeError('Variable "frenchregions" does not exist.', 53, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 54
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
        // line 56
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrierfrench\" type=\"button\" class=\"btn btn-primary btntrier\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        // line 67
        echo "




                                    <h3 class=\"card-title py-2 m-0\">Villes en France</h3>


                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                    Ajouter une ville +
                                    </button>
                                </div>

                                    <!-- Modal add-->
                                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une ville</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form class=\"forms-sample\" action=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_add");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Nom de la ville</label>
                                                <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"region\">Région</label>
                                                <input type=\"text\" name=\"region\" class=\"form-control inputville\" id=\"region\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"country\">Pays</label>
                                                    <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                        <option value=\"France\">France</option>
                                                        <option value=\"Belgique\">Belgique</option>
                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"blason\">Blason</label>
                                                    <input type=\"file\" name=\"blason\" class=\"form-control inputville p-2\" id=\"blason\" required=\"required\">
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
                                <hr>
                                <div class=\"table-responsive\" id=\"result-search-france\">
                                    <table class=\"table table-striped\">
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
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frenchtowns"]) || array_key_exists("frenchtowns", $context) ? $context["frenchtowns"] : (function () { throw new RuntimeError('Variable "frenchtowns" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 145
            echo "                                            <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 148
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 148)), "html", null, true);
            echo "\" alt=\"image\"/>
                                            </td>
                                            <td>
                                            ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 151), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 154), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 157), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                                                        Modifier
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Modifier-->
                                                        <div class=\"modal fade\" id=\"modal_";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 173), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"forms-sample\" action=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_patch", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 176)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                                        <div class=\"form-group\">
                                                                        <label for=\"name\">Nom de la ville</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"name\"  id=\"name\" value=\"";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 179), "html", null, true);
            echo "\" required=\"required\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"region\">Région</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"region\" id=\"region\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 183), "html", null, true);
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
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 193), "html", null, true);
            echo "</i></div>
                                                                        <input type=\"file\" class=\"form-control inputville p-2\" name=\"blason\" id=\"blason\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 194), "html", null, true);
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
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 208), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 208), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 212), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer ";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 215), "html", null, true);
            echo " ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    ";
            // line 219
            echo "                                                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 219)]), "html", null, true);
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
        // line 230
        echo "                                    </tbody>
                                    </table>
                                </div>
                                <div id=\"loaderspinner\" class=\"text-center loaderspinner\" style=\"display:none;\">
                                    <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/spinner.gif"), "html", null, true);
        echo "\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
                            </div>
                        </div>


                        ";
        // line 241
        echo "                        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                            <div class=\"card-body pt-1\">
                                <div class=\"align-items-center d-flex justify-content-between\">

                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2 searchInputVille\" id=\"searchInputVilleBelgique\" data-country=\"belgiumtown\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>
                                    <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#belgiumModalLabel\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    ";
        // line 256
        echo "                                    <div class=\"modal fade\" id=\"belgiumModalLabel\" tabindex=\"-1\" aria-labelledby=\"belgiumModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"belgiumModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilterbelgium\" ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 267, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["belgiumregions"]) || array_key_exists("belgiumregions", $context) ? $context["belgiumregions"] : (function () { throw new RuntimeError('Variable "belgiumregions" does not exist.', 269, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 270
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
        // line 272
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrierbelgium\" type=\"button\" class=\"btn btn-primary btntrier\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        // line 283
        echo "

                                    <h3 class=\"card-title py-2 m-0\">Villes en Belgique</h3>
                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">
                                    Ajouter une ville +
                                    </button>
                                </div>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une ville</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form class=\"forms-sample\" action=\"";
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_add");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Nom de la ville</label>
                                                <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"region\">Région</label>
                                                <input type=\"text\" name=\"region\" class=\"form-control inputville\" id=\"region\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"country\">Pays</label>
                                                    <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                        <option value=\"Belgique\" selected>Belgique</option>
                                                        <option value=\"France\">France</option>
                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"blason\">Blason</label>
                                                    <input type=\"file\" name=\"blason\" class=\"form-control inputville p-2\" id=\"blason\" required=\"required\">
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
                                <hr>
                                <div class=\"table table-striped\" id=\"result-search-belgium\">
                                    <table class=\"table table-striped\">
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
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["belgiumtowns"]) || array_key_exists("belgiumtowns", $context) ? $context["belgiumtowns"] : (function () { throw new RuntimeError('Variable "belgiumtowns" does not exist.', 355, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 356
            echo "                                            <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 359
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 359)), "html", null, true);
            echo "\" alt=\"image\"/>
                                            </td>
                                            <td>
                                            ";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 362), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 365), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 368), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 372), "html", null, true);
            echo "\">
                                                        Modifier
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 375), "html", null, true);
            echo "\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Modifier-->
                                                        <div class=\"modal fade\" id=\"modal_";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 380), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 380), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 384), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"forms-sample\" action=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_patch", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 387)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                                        <div class=\"form-group\">
                                                                        <label for=\"name\">Nom de la ville</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"name\"  id=\"name\" value=\"";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 390), "html", null, true);
            echo "\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"region\">Région</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"region\" id=\"region\" value=\"";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 394), "html", null, true);
            echo "\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"country\">Pays</label>
                                                                            <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                                                <option value=\"France\"  ";
            // line 399
            if ((twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 399) == "France")) {
                echo "selected";
            }
            echo " >France</option>
                                                                                <option value=\"Belgique\" ";
            // line 400
            if ((twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 400) == "Belgique")) {
                echo "selected";
            }
            echo ">Belgique</option>
                                                                            </select>                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"blason\">Blason</label>
                                                                        <div class=\"pb-2\"><i>";
            // line 404
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 404), "html", null, true);
            echo "</i></div>
                                                                        <input type=\"file\" class=\"form-control inputville p-2\" name=\"blason\" id=\"blason\" value=\"";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 405), "html", null, true);
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
            // line 419
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 419), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 419), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ";
            // line 423
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 423), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer ";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 426), "html", null, true);
            echo " ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    ";
            // line 430
            echo "                                                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 430)]), "html", null, true);
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
        // line 441
        echo "                                    </tbody>
                                    </table>
                                </div>
                                <div id=\"loaderspinner\" class=\"text-center loaderspinner\" style=\"display:none;\">
                                    <img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/spinner.gif"), "html", null, true);
        echo "\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
        </div>
    ";
        // line 455
        $this->loadTemplate("Villes/villelist.js.twig", "Villes/villelist.html.twig", 455)->display($context);
        // line 456
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Villes/villelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 456,  714 => 455,  701 => 445,  695 => 441,  677 => 430,  671 => 426,  665 => 423,  656 => 419,  639 => 405,  635 => 404,  626 => 400,  620 => 399,  612 => 394,  605 => 390,  599 => 387,  593 => 384,  584 => 380,  576 => 375,  570 => 372,  563 => 368,  557 => 365,  551 => 362,  544 => 359,  540 => 356,  536 => 355,  478 => 300,  459 => 283,  447 => 272,  436 => 270,  432 => 269,  427 => 267,  414 => 256,  398 => 241,  389 => 234,  383 => 230,  365 => 219,  359 => 215,  353 => 212,  344 => 208,  327 => 194,  323 => 193,  310 => 183,  303 => 179,  297 => 176,  291 => 173,  282 => 169,  274 => 164,  268 => 161,  261 => 157,  255 => 154,  249 => 151,  242 => 148,  238 => 145,  234 => 144,  176 => 89,  152 => 67,  140 => 56,  129 => 54,  125 => 53,  120 => 51,  107 => 40,  90 => 24,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
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

                    <ul class=\"nav nav-pills nav-fill m-3\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link active\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">France</button>
                        </li>
                        <li class=\"nav-item\" role=\"presentation\">
                            <button class=\"nav-link\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Belgique</button>
                        </li>
                    </ul>
                    <div class=\"tab-content p-0\" id=\"pills-tabContent\">
                        {# FRANCE #}
                        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                            <div class=\"card-body pt-1\">
                                <div class=\"align-items-center d-flex justify-content-between\">


                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2 searchInputVille\" id=\"searchInputVilleFrance\" data-country=\"frenchtown\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>
                                        <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                {# MODAL FILTER #}
                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilterfrance\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for name in frenchregions|sort %}
                                                            <option value=\"{{name}}\">{{name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrierfrench\" type=\"button\" class=\"btn btn-primary btntrier\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                {# MODAL FILTER #}





                                    <h3 class=\"card-title py-2 m-0\">Villes en France</h3>


                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                    Ajouter une ville +
                                    </button>
                                </div>

                                    <!-- Modal add-->
                                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une ville</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form class=\"forms-sample\" action=\"{{ path('ville_add') }}\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Nom de la ville</label>
                                                <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"region\">Région</label>
                                                <input type=\"text\" name=\"region\" class=\"form-control inputville\" id=\"region\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"country\">Pays</label>
                                                    <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                        <option value=\"France\">France</option>
                                                        <option value=\"Belgique\">Belgique</option>
                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"blason\">Blason</label>
                                                    <input type=\"file\" name=\"blason\" class=\"form-control inputville p-2\" id=\"blason\" required=\"required\">
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
                                <hr>
                                <div class=\"table-responsive\" id=\"result-search-france\">
                                    <table class=\"table table-striped\">
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
                                        {% for town in frenchtowns %}
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
                                <div id=\"loaderspinner\" class=\"text-center loaderspinner\" style=\"display:none;\">
                                    <img src=\"{{ asset(\"assets/spinner.gif\") }}\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
                            </div>
                        </div>


                        {# BELGIQUE #}
                        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                            <div class=\"card-body pt-1\">
                                <div class=\"align-items-center d-flex justify-content-between\">

                                    <div class=\"d-flex\">
                                        <form name=\"form\" method=\"GET\" id=\"form\">
                                            <input class=\"py-2 searchInputVille\" id=\"searchInputVilleBelgique\" data-country=\"belgiumtown\" type=\"text\" placeholder=\"Recherche\"></input>
                                        </form>
                                    <!-- Button trigger modal tri -->
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#belgiumModalLabel\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    {# MODAL FILTER #}
                                    <div class=\"modal fade\" id=\"belgiumModalLabel\" tabindex=\"-1\" aria-labelledby=\"belgiumModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"belgiumModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilterbelgium\" {{required}}>
                                                        <option value=\"\">/</option>
                                                        {% for name in belgiumregions|sort %}
                                                            <option value=\"{{name}}\">{{name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                <button id=\"btntrierbelgium\" type=\"button\" class=\"btn btn-primary btntrier\" data-bs-dismiss=\"modal\">Trier</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                {# MODAL FILTER #}


                                    <h3 class=\"card-title py-2 m-0\">Villes en Belgique</h3>
                                    <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal2\">
                                    Ajouter une ville +
                                    </button>
                                </div>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une ville</h5>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <form class=\"forms-sample\" action=\"{{ path('ville_add') }}\" method=\"post\" enctype=\"multipart/form-data\">
                                                <div class=\"form-group\">
                                                <label for=\"name\">Nom de la ville</label>
                                                <input type=\"text\" name=\"name\" class=\"form-control inputville\"  id=\"name\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"region\">Région</label>
                                                <input type=\"text\" name=\"region\" class=\"form-control inputville\" id=\"region\" required=\"required\">
                                                </div>
                                                <div class=\"form-group\">
                                                <label for=\"country\">Pays</label>
                                                    <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                        <option value=\"Belgique\" selected>Belgique</option>
                                                        <option value=\"France\">France</option>
                                                    </select>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label for=\"blason\">Blason</label>
                                                    <input type=\"file\" name=\"blason\" class=\"form-control inputville p-2\" id=\"blason\" required=\"required\">
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
                                <hr>
                                <div class=\"table table-striped\" id=\"result-search-belgium\">
                                    <table class=\"table table-striped\">
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
                                        {% for town in belgiumtowns %}
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
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"name\"  id=\"name\" value=\"{{town.name}}\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"region\">Région</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"region\" id=\"region\" value=\"{{town.region}}\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"country\">Pays</label>
                                                                            <select name=\"country\" class=\"form-select\" id=\"country\" required=\"required\">
                                                                                <option value=\"France\"  {% if town.country == 'France' %}selected{% endif %} >France</option>
                                                                                <option value=\"Belgique\" {% if town.country == 'Belgique' %}selected{% endif %}>Belgique</option>
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
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier {{town.name}}</h5>
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
                                <div id=\"loaderspinner\" class=\"text-center loaderspinner\" style=\"display:none;\">
                                    <img src=\"{{ asset(\"assets/spinner.gif\") }}\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
        </div>
    {% include 'Villes/villelist.js.twig' %}
    {% endblock %}", "Villes/villelist.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Villes/villelist.html.twig");
    }
}

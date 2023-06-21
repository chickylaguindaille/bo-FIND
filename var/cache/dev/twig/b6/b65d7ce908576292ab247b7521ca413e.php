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

/* Users/userlist.html.twig */
class __TwigTemplate_3cf47cd74baf5fba0d90a143a0e35584 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Users/userlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Users/userlist.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Users/userlist.html.twig", 1);
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
        $this->loadTemplate("Villes/villelist.css.twig", "Users/userlist.html.twig", 7)->display($context);
        // line 8
        echo "
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">

                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        ";
        // line 16
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
        // line 32
        echo "                                    ";
        // line 58
        echo "                                ";
        // line 59
        echo "




                                    <h3 class=\"card-title py-2 m-0\">Utilisateurs</h3>


                                    ";
        // line 70
        echo "                                </div>
";
        // line 113
        echo "                                <hr>
                                <div class=\"table-responsive\" id=\"result-search-france\">
                                    <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Prénom
                                        </th>
                                        <th>
                                            Surnom
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Activé
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 140
            echo "                                            <tr>
                                            <td class=\"py-1\">
                                                ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "imgprofile", [], "any", true, true, false, 142) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "imgprofile", [], "any", false, false, false, 142)))) {
                // line 143
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["user"], "imgprofile", [], "any", false, false, false, 143)), "html", null, true);
                echo "\" alt=\"image\"/>
                                                ";
            } else {
                // line 145
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/profil_vide.jpg"), "html", null, true);
                echo "\" alt=\"image\"/>
                                                ";
            }
            // line 147
            echo "                                            </td>
                                            <td>
                                                ";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 149), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 152), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 155), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 158), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", true, true, false, 161) && (twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 161) == 1))) {
                // line 162
                echo "                                                    Oui
                                                ";
            } else {
                // line 164
                echo "                                                    Non
                                                ";
            }
            // line 166
            echo "                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
                                                        Modifier
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 172), "html", null, true);
            echo "\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Modifier-->
                                                        <div class=\"modal fade\" id=\"modal_";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 177), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 177), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 181), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"forms-sample\" action=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_patch", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 184), "email" => twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                                                                        <div class=\"form-group\">
                                                                            <label for=\"name\">Nom</label>
                                                                            <input type=\"text\" class=\"form-control inputville\" name=\"lastname\"  id=\"name\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 187), "html", null, true);
            echo "\" required=\"required\">
                                                                        </div>
                                                                            <div class=\"form-group\">
                                                                            <label for=\"region\">Prénom</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"firstname\" id=\"region\" value=\"";
            // line 191
            (((twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", true, true, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 191)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 191), "html", null, true))) : (print ("")));
            echo "\" required=\"required\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <label for=\"region\">Surnom</label>
                                                                            <input type=\"text\" class=\"form-control inputville\" name=\"username\" id=\"region\" value=\"";
            // line 195
            (((twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", true, true, false, 195) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 195)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 195), "html", null, true))) : (print ("")));
            echo "\" required=\"required\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"country\">Activé</label>
                                                                            <select name=\"isActive\" class=\"form-select\" id=\"country\" required=\"required\">
                                                                                <option value=\"true\" ";
            // line 200
            if (((((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", true, true, false, 200) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 200)))) ? (twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 200)) : ("")) == true)) {
                echo "selected";
            }
            echo ">Oui</option>
                                                                                <option value=\"false\" ";
            // line 201
            if (((((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", true, true, false, 201) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 201)))) ? (twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 201)) : ("")) == false)) {
                echo "selected";
            }
            echo ">Non</option>
                                                                            </select>                                                                        
                                                                            </div>
                                                                        ";
            // line 209
            echo "                                                                        <div class=\"form-check-label\">
                                                                            <label for=\"\">Envoyer un email (";
            // line 210
            (((twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", true, true, false, 210) &&  !(null === twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 210)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 210), "html", null, true))) : (print ("")));
            echo ")</label><br>
                                                                            <input type=\"checkbox\" class=\"checkbox mt-2\" name=\"sendemail\" checked>
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
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 225), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 225), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer ";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 229), "html", null, true);
            echo "</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer ";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 232), "html", null, true);
            echo " ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    ";
            // line 236
            echo "                                                                    <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 236)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                                    </tbody>
                                    </table>
                                </div>
                                <div id=\"loaderspinner\" class=\"text-center loaderspinner\" style=\"display:none;\">
                                    <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/spinner.gif"), "html", null, true);
        echo "\" class=\"\" style=\"height: 100px;\" alt=\"loading...\">
                                </div>
                            </div>
                        </div>


                        ";
        // line 258
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
        // line 273
        echo "                                    ";
        // line 299
        echo "                                ";
        // line 300
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
        // line 317
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

                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
        </div>
    ";
        // line 359
        $this->loadTemplate("Villes/villelist.js.twig", "Users/userlist.html.twig", 359)->display($context);
        // line 360
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Users/userlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 360,  439 => 359,  394 => 317,  375 => 300,  373 => 299,  371 => 273,  355 => 258,  346 => 251,  340 => 247,  322 => 236,  316 => 232,  310 => 229,  301 => 225,  283 => 210,  280 => 209,  272 => 201,  266 => 200,  258 => 195,  251 => 191,  244 => 187,  238 => 184,  232 => 181,  223 => 177,  215 => 172,  209 => 169,  204 => 166,  200 => 164,  196 => 162,  194 => 161,  188 => 158,  182 => 155,  176 => 152,  170 => 149,  166 => 147,  160 => 145,  154 => 143,  152 => 142,  148 => 140,  144 => 139,  116 => 113,  113 => 70,  103 => 59,  101 => 58,  99 => 32,  82 => 16,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
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
                                    {# <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
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
                                    </div> #}
                                {# MODAL FILTER #}





                                    <h3 class=\"card-title py-2 m-0\">Utilisateurs</h3>


                                    {# <button type=\"button\" class=\"btn btn-outline-success\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                                    Ajouter une ville +
                                    </button> #}
                                </div>
{# 
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
                                    </div> #}
                                <hr>
                                <div class=\"table-responsive\" id=\"result-search-france\">
                                    <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Prénom
                                        </th>
                                        <th>
                                            Surnom
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Activé
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for user in users %}
                                            <tr>
                                            <td class=\"py-1\">
                                                {% if user.imgprofile is defined and user.imgprofile is not empty %}
                                                    <img src=\"{{ asset(user.imgprofile) }}\" alt=\"image\"/>
                                                {% else %}
                                                    <img src=\"{{ asset('assets/profil_vide.jpg') }}\" alt=\"image\"/>
                                                {% endif %}
                                            </td>
                                            <td>
                                                {{user.lastname}}
                                            </td>
                                            <td>
                                                {{user.firstname}}
                                            </td>
                                            <td>
                                                {{user.username}}
                                            </td>
                                            <td>
                                                {{user.email}}
                                            </td>
                                            <td>
                                                {% if user.isActive is defined and user.isActive == 1 %}
                                                    Oui
                                                {% else %}
                                                    Non
                                                {% endif %}
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                        <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_{{user.id}}\">
                                                        Modifier
                                                        </button>
                                                        <button type=\"button\" class=\"btn btn-outline-danger p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modalsuppr_{{user.id}}\">
                                                        Supprimer
                                                        </button>

                                                        <!-- Modal Modifier-->
                                                        <div class=\"modal fade\" id=\"modal_{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modal_{{user.id}}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Modifier {{user.firstname}}</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <form class=\"forms-sample\" action=\"{{ path('user_patch', {'id': user.id, 'email': user.email}) }}\" method=\"post\" enctype=\"multipart/form-data\">
                                                                        <div class=\"form-group\">
                                                                            <label for=\"name\">Nom</label>
                                                                            <input type=\"text\" class=\"form-control inputville\" name=\"lastname\"  id=\"name\" value=\"{{user.lastname}}\" required=\"required\">
                                                                        </div>
                                                                            <div class=\"form-group\">
                                                                            <label for=\"region\">Prénom</label>
                                                                        <input type=\"text\" class=\"form-control inputville\" name=\"firstname\" id=\"region\" value=\"{{user.firstname??\"\"}}\" required=\"required\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                            <label for=\"region\">Surnom</label>
                                                                            <input type=\"text\" class=\"form-control inputville\" name=\"username\" id=\"region\" value=\"{{user.username??\"\"}}\" required=\"required\">
                                                                        </div>
                                                                        <div class=\"form-group\">
                                                                        <label for=\"country\">Activé</label>
                                                                            <select name=\"isActive\" class=\"form-select\" id=\"country\" required=\"required\">
                                                                                <option value=\"true\" {% if user.isActive??\"\" == true %}selected{% endif %}>Oui</option>
                                                                                <option value=\"false\" {% if user.isActive??\"\" == false %}selected{% endif %}>Non</option>
                                                                            </select>                                                                        
                                                                            </div>
                                                                        {# <div class=\"form-group\">
                                                                            <label for=\"blason\">Blason</label>
                                                                            <div class=\"pb-2\"><i>{{user.imgprofile??\"\"}}</i></div>
                                                                            <input type=\"file\" class=\"form-control inputville p-2\" name=\"blason\" id=\"blason\" value=\"{{town.imgprofile??\"\"}}\">
                                                                        </div> #}
                                                                        <div class=\"form-check-label\">
                                                                            <label for=\"\">Envoyer un email ({{user.email??\"\"}})</label><br>
                                                                            <input type=\"checkbox\" class=\"checkbox mt-2\" name=\"sendemail\" checked>
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
                                                        <div class=\"modal fade\" id=\"modalsuppr_{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalsuppr_{{user.id}}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer {{user.firstname}}</h5>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    Etes vous sûr de vouloir supprimer {{user.firstname}} ?
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    {# <a href=\"{{ path('ville_delete') }}\"><button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Supprimer</button></a> #}
                                                                    <a class=\"btn btn-danger\" href=\"{{ path('user_delete', {'id': user.id}) }}\" role=\"button\">Supprimer</a>
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
                                    {# <div class=\"modal fade\" id=\"belgiumModalLabel\" tabindex=\"-1\" aria-labelledby=\"belgiumModalLabel\" aria-hidden=\"true\">
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
                                    </div> #}
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

                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
        </div>
    {% include 'Villes/villelist.js.twig' %}
    {% endblock %}", "Users/userlist.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Users/userlist.html.twig");
    }
}

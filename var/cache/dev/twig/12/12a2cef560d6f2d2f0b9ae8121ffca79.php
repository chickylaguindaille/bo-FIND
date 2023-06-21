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

/* Associations/association.html.twig */
class __TwigTemplate_c85978c477bb7179378923d55b82564d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/association.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/association.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "Associations/association.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("Villes/villelist.css.twig", "Associations/association.html.twig", 5)->display($context);
        // line 6
        echo "
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"tab-content p-0\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"card-body p-3\">
                            <div class=\"text-center\">
                                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_list");
        echo "\" class=\"position-absolute py-2\" style=\"left: 2em; color: black;\"><i class=\"bi bi-chevron-left\"></i></a>
                                <h3 class=\"card-title py-2 m-0\">";
        // line 16
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "</h3>
                                <a></a>
                            </div>
                        </div>
                    </div>
                        
                    <ul class=\"nav nav-pills px-3 justify-content-center\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 24
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 24, $this->source); })()) == "informations")) {
            echo "active";
        }
        echo "\" id=\"pills-informations-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-informations\" type=\"button\" role=\"tab\" aria-controls=\"pills-informations\" aria-selected=\"true\">Informations</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 27
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 27, $this->source); })()) == "particularity")) {
            echo "active";
        }
        echo "\" id=\"pills-particularity-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-particularity\" type=\"button\" role=\"tab\" aria-controls=\"pills-particularity\" aria-selected=\"false\">Particularités</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 30
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 30, $this->source); })()) == "anecdotes")) {
            echo " active";
        }
        echo "\" id=\"pills-anecdotes-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-anecdotes\" type=\"button\" role=\"tab\" aria-controls=\"pills-anecdotes\" aria-selected=\"false\">Anecdotes</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 33
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 33, $this->source); })()) == "documents")) {
            echo " active";
        }
        echo "\" id=\"pills-documents-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-documents\" type=\"button\" role=\"tab\" aria-controls=\"pills-documents\" aria-selected=\"true\">Documents</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 36
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 36, $this->source); })()) == "decorums")) {
            echo " active";
        }
        echo "\" id=\"pills-decorum-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-decorum\" type=\"button\" role=\"tab\" aria-controls=\"pills-decorum\" aria-selected=\"false\">Decorum</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 39
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 39, $this->source); })()) == "goodies")) {
            echo " active";
        }
        echo "\" id=\"pills-goodies-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-goodies\" type=\"button\" role=\"tab\" aria-controls=\"pills-goodies\" aria-selected=\"false\">Goodies</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 42
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 42, $this->source); })()) == "chant")) {
            echo " active";
        }
        echo "\" id=\"pills-chant-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-chant\" type=\"button\" role=\"tab\" aria-controls=\"pills-chant\" aria-selected=\"true\">Chant</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link ";
        // line 45
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 45, $this->source); })()) == "committee")) {
            echo " active";
        }
        echo "\" id=\"pills-comite-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-comite\" type=\"button\" role=\"tab\" aria-controls=\"pills-comite\" aria-selected=\"false\">Comité</button>
                        </li>
                    </ul>


";
        // line 51
        echo "                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        
                        <div class=\"tab-pane fade ";
        // line 53
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 53, $this->source); })()) == "informations")) {
            echo " show active";
        }
        echo "\" id=\"pills-informations\" role=\"tabpanel\" aria-labelledby=\"pills-informations-tab\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">Logo</th>
                                        ";
        // line 59
        echo "                                        <td scope=\"row\">";
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", true, true, false, 59) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 59, $this->source); })()), "logo", [], "any", false, false, false, 59) != ""))) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 59, $this->source); })()), "logo", [], "any", false, false, false, 59)), "html", null, true);
            echo "\" alt=\"image\"/><span class=\"mx-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 59, $this->source); })()), "logo", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>";
        } else {
            echo "<i>Pas de logo</i>";
        }
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Nom</th>
                                        <td scope=\"row\">";
        // line 63
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", true, true, false, 63) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 63)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 63), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Surnom</th>
                                        <td scope=\"row\">";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", true, true, false, 67) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 67, $this->source); })()), "nickname", [], "any", false, false, false, 67) != ""))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 67, $this->source); })()), "nickname", [], "any", false, false, false, 67), "html", null, true);
        } else {
            echo "<i>Pas de surnom</i>";
        }
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Ville</th>
                                        <td scope=\"row\">";
        // line 71
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "town", [], "any", true, true, false, 71) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "town", [], "any", false, false, false, 71)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "town", [], "any", false, false, false, 71), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Date de création</th>
                                        <td scope=\"row\">";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "creation", [], "any", true, true, false, 75) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 75, $this->source); })()), "creation", [], "any", false, false, false, 75) != 0))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 75, $this->source); })()), "creation", [], "any", false, false, false, 75), "d/m/Y"), "html", null, true);
        } else {
            echo "<i>Pas de date de création</i>";
        }
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Résumé</th>
                                        <td scope=\"row\">";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 79) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 79, $this->source); })()), "resume", [], "any", false, false, false, 79) != ""))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 79, $this->source); })()), "resume", [], "any", false, false, false, 79), "html", null, true);
        } else {
            echo "<i>Pas de résumé</i>";
        }
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Type</th>
                                        <td scope=\"row\">";
        // line 83
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "type", [], "any", true, true, false, 83) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "type", [], "any", false, false, false, 83)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "type", [], "any", false, false, false, 83), "html", null, true))) : (print ("<i>Pas de type</i>")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Couvre-chef</th>
                                        <td scope=\"row\">";
        // line 87
        (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "hat", [], "any", true, true, false, 87) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "hat", [], "any", false, false, false, 87)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "hat", [], "any", false, false, false, 87), "html", null, true))) : (print ("<i>Pas de couvre-chef</i>")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Couleurs</th>
                                        <td scope=\"row\">";
        // line 91
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 91), "colorassembled", [], "any", true, true, false, 91) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 91), "colorassembled", [], "any", false, false, false, 91)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 91), "colorassembled", [], "any", false, false, false, 91), "html", null, true))) : (print ("<i>Pas de couleurs</i>")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Devise</th>
                                        <td scope=\"row\">";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 95), "scream", [], "any", true, true, false, 95) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 95, $this->source); })()), "additionalinformations", [], "any", false, false, false, 95), "scream", [], "any", false, false, false, 95) != ""))) {
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 95), "scream", [], "any", true, true, false, 95) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 95), "scream", [], "any", false, false, false, 95)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 95), "scream", [], "any", false, false, false, 95), "html", null, true))) : (print ("<i>Pas de devise</i>")));
        } else {
            echo "<i>Pas de devise</i>";
        }
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Type</th>
                                        <td scope=\"row\">";
        // line 99
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 99), "gendertype", [], "any", true, true, false, 99) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 99), "gendertype", [], "any", false, false, false, 99)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "additionalinformations", [], "any", false, true, false, 99), "gendertype", [], "any", false, false, false, 99), "html", null, true))) : (print ("<i>?</i>")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class=\"text-end\">                              
                                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_information_";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
                                                Modifier
                                            </button>
                                        </td>
                                        ";
        // line 108
        $this->loadTemplate("FormsModification/informations.html.twig", "Associations/association.html.twig", 108)->display($context);
        // line 109
        echo "                                    </tr>
                                </tbody>
                            </table>
                        </div>
";
        // line 114
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 114, $this->source); })()) == "particularity")) {
            echo " show active";
        }
        echo "\" id=\"pills-particularity\" role=\"tabpanel\" aria-labelledby=\"pills-particularity-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">Particularité</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_particularity_";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 128, $this->source); })()), "particularity", [], "array", false, false, false, 128));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["particularity"]) {
            // line 129
            echo "                                        <tr>
                                            <th scope=\"row\">";
            // line 130
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                                            <td scope=\"row\">";
            // line 131
            echo twig_escape_filter($this->env, $context["particularity"], "html", null, true);
            echo "</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_particularity_";
            // line 133
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133), "html", null, true);
            echo "\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_particularitysuppr_";
            // line 136
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136), "html", null, true);
            echo "\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            ";
            // line 140
            $this->loadTemplate("FormsModification/particularity.html.twig", "Associations/association.html.twig", 140)->display($context);
            // line 141
            echo "                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['particularity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                </tbody>
                                ";
        // line 144
        $this->loadTemplate("FormsAdd/particularity.html.twig", "Associations/association.html.twig", 144)->display($context);
        // line 145
        echo "                            </table>
                            ";
        // line 146
        if (((isset($context["numberparticularity"]) || array_key_exists("numberparticularity", $context) ? $context["numberparticularity"] : (function () { throw new RuntimeError('Variable "numberparticularity" does not exist.', 146, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de particularité</h2>";
        }
        // line 147
        echo "                        </div>
";
        // line 149
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 149, $this->source); })()) == "anecdotes")) {
            echo " show active";
        }
        echo "\" id=\"pills-anecdotes\" role=\"tabpanel\" aria-labelledby=\"pills-anecdotes-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Texte</th>
                                        <th scope=\"col\">Date</th>
                                        <th scope=\"col\">Source</th>
                                        <th scope=\"col\">Photo</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_anecdote_";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "html", null, true);
        echo "\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 166, $this->source); })()), "anecdote", [], "array", false, false, false, 166));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 167
            echo "                                        <tr>
                                            <td scope=\"row\">";
            // line 168
            (((twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", true, true, false, 168) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 168)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 168), "html", null, true))) : (print ("<i>Pas de titre</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 169
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", true, true, false, 169) && (twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 169) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 169), "html", null, true);
            } else {
                echo "<i>Pas de texte</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", true, true, false, 170) && (twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 170) != false))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 170), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>Pas de date de création</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", true, true, false, 171) && (twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 171) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 171), "html", null, true);
            } else {
                echo "<i>Pas de source</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 172
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", true, true, false, 172) && (twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 172) != ""))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 172), 0, [], "array", false, false, false, 172), "path", [], "array", false, false, false, 172)), "html", null, true);
                echo "\" alt=\"image\"/>";
            } else {
                echo "<i>Pas de photo</i>";
            }
            echo "</td>

                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_anecdote_";
            // line 175
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175), "html", null, true);
            echo "\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_anecdotesuppr_";
            // line 178
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178), "html", null, true);
            echo "\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            ";
            // line 182
            $this->loadTemplate("FormsModification/anecdotes.html.twig", "Associations/association.html.twig", 182)->display($context);
            // line 183
            echo "                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                </tbody>
                                ";
        // line 186
        $this->loadTemplate("FormsAdd/anecdote.html.twig", "Associations/association.html.twig", 186)->display($context);
        // line 187
        echo "                            </table>
                            ";
        // line 188
        if (((isset($context["numberanecdote"]) || array_key_exists("numberanecdote", $context) ? $context["numberanecdote"] : (function () { throw new RuntimeError('Variable "numberanecdote" does not exist.', 188, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore d'anecdote</h2>";
        }
        // line 189
        echo "                        </div>
";
        // line 191
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 191, $this->source); })()) == "documents")) {
            echo " show active";
        }
        echo "\" id=\"pills-documents\" role=\"tabpanel\" aria-labelledby=\"pills-documents-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Fichier</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Type</th>
                                        <th scope=\"col\">Année</th>
                                        <th scope=\"col\">Source</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_document_";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201), "html", null, true);
        echo "\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 208, $this->source); })()), "document", [], "array", false, false, false, 208));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 209
            echo "                                        <tr>
                                            <td scope=\"row\">";
            // line 210
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, true, false, 210), "title", [], "array", true, true, false, 210) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, true, false, 210), "title", [], "array", false, false, false, 210)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, true, false, 210), "title", [], "array", false, false, false, 210), "html", null, true))) : (print ("<i>Pas de photo</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 211
            (((twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", true, true, false, 211) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 211)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 211), "html", null, true))) : (print ("<i>Pas de titre</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 212
            (((twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", true, true, false, 212) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 212)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 212), "html", null, true))) : (print ("<i>Pas de type</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 213
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", true, true, false, 213) && (twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 213) != false))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 213), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>Pas de date de création</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 214
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", true, true, false, 214) && (twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 214) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 214), "html", null, true);
            } else {
                echo "<i>Pas de source</i>";
            }
            echo "</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_documents_";
            // line 216
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216), "html", null, true);
            echo "\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_documentsuppr_";
            // line 219
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 219, $this->source); })()), "id", [], "any", false, false, false, 219), "html", null, true);
            echo "\">
                                                        Supprimer
                                                </button>
                                            </td>
                                            ";
            // line 223
            $this->loadTemplate("FormsModification/documents.html.twig", "Associations/association.html.twig", 223)->display($context);
            // line 224
            echo "                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                </tbody>
                                ";
        // line 227
        $this->loadTemplate("FormsAdd/document.html.twig", "Associations/association.html.twig", 227)->display($context);
        // line 228
        echo "                            </table>
                            ";
        // line 229
        if (((isset($context["numberdocument"]) || array_key_exists("numberdocument", $context) ? $context["numberdocument"] : (function () { throw new RuntimeError('Variable "numberdocument" does not exist.', 229, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de document</h2>";
        }
        // line 230
        echo "                        </div>
";
        // line 232
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 232, $this->source); })()) == "decorums")) {
            echo " show active";
        }
        echo "\" id=\"pills-decorum\" role=\"tabpanel\" aria-labelledby=\"pills-decorum-tab\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">Photo</th>
                                            <th scope=\"col\">Titre</th>
                                            <th scope=\"col\">Texte</th>
                                            <th scope=\"col\">Type</th>
                                            <th scope=\"col\">Année</th>
                                            <th scope=\"col\">Source</th>
                                            <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_decorum_";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 243, $this->source); })()), "id", [], "any", false, false, false, 243), "html", null, true);
        echo "\">
                                                Ajouter +
                                            </button>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 250, $this->source); })()), "decorum", [], "array", false, false, false, 250));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 251
            echo "                                            <tr>
                                                <td scope=\"row\">";
            // line 252
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", true, true, false, 252) && (twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 252) != ""))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 252), 0, [], "array", false, false, false, 252), "path", [], "array", false, false, false, 252)), "html", null, true);
                echo "\" alt=\"image\"/>";
            } else {
                echo "<i>Pas de photo</i>";
            }
            echo "</td>
                                                <td scope=\"row\">";
            // line 253
            (((twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", true, true, false, 253) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 253)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 253), "html", null, true))) : (print ("<i>Pas de titre</i>")));
            echo "</td>
                                                <td scope=\"row\">";
            // line 254
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", true, true, false, 254) && (twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 254) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 254), "html", null, true);
            } else {
                echo "<i>Pas de texte</i>";
            }
            echo "</td>
                                                <td scope=\"row\">";
            // line 255
            (((twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", true, true, false, 255) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 255)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 255), "html", null, true))) : (print ("<i>Pas de type</i>")));
            echo "</td>
                                                <td scope=\"row\">";
            // line 256
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", true, true, false, 256) && (twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 256) != false))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 256), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>Pas de date de création</i>";
            }
            echo "</td>
                                                <td scope=\"row\">";
            // line 257
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", true, true, false, 257) && (twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 257) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 257), "html", null, true);
            } else {
                echo "<i>Pas de source</i>";
            }
            echo "</td>
                                                <td>                              
                                                    <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_decorum_";
            // line 259
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259), "html", null, true);
            echo "\">
                                                        Modifier
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_decorumsuppr_";
            // line 262
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 262, $this->source); })()), "id", [], "any", false, false, false, 262), "html", null, true);
            echo "\">
                                                        Supprimer
                                                    </button>
                                                </td>
                                                ";
            // line 266
            $this->loadTemplate("FormsModification/decorums.html.twig", "Associations/association.html.twig", 266)->display($context);
            // line 267
            echo "                                            </tr>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                    </tbody>
                                    ";
        // line 270
        $this->loadTemplate("FormsAdd/decorum.html.twig", "Associations/association.html.twig", 270)->display($context);
        // line 271
        echo "                                </table>
                                ";
        // line 272
        if (((isset($context["numberdecorum"]) || array_key_exists("numberdecorum", $context) ? $context["numberdecorum"] : (function () { throw new RuntimeError('Variable "numberdecorum" does not exist.', 272, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de decorum</h2>";
        }
        // line 273
        echo "                        </div>
";
        // line 275
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 275, $this->source); })()) == "goodies")) {
            echo " show active";
        }
        echo "\" id=\"pills-goodies\" role=\"tabpanel\" aria-labelledby=\"pills-goodies-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Photo</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Texte</th>
                                        <th scope=\"col\">Type</th>
                                        <th scope=\"col\">Année</th>
                                        <th scope=\"col\">Source</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_goodies_";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 286, $this->source); })()), "id", [], "any", false, false, false, 286), "html", null, true);
        echo "\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 293, $this->source); })()), "goodies", [], "array", false, false, false, 293));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 294
            echo "                                        <tr>
                                            <td scope=\"row\">";
            // line 295
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", true, true, false, 295) && (twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 295) != ""))) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "file", [], "array", false, false, false, 295), 0, [], "array", false, false, false, 295), "path", [], "array", false, false, false, 295)), "html", null, true);
                echo "\" alt=\"image\"/>";
            } else {
                echo "<i>Pas de photo</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 296
            (((twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", true, true, false, 296) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 296)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "array", false, false, false, 296), "html", null, true))) : (print ("<i>Pas de titre</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 297
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", true, true, false, 297) && (twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 297) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "text", [], "array", false, false, false, 297), "html", null, true);
            } else {
                echo "<i>Pas de texte</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 298
            (((twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", true, true, false, 298) &&  !(null === twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 298)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "type", [], "array", false, false, false, 298), "html", null, true))) : (print ("<i>Pas de type</i>")));
            echo "</td>
                                            <td scope=\"row\">";
            // line 299
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", true, true, false, 299) && (twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 299) != false))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "year", [], "array", false, false, false, 299), "d/m/Y"), "html", null, true);
            } else {
                echo "<i>Pas de date de création</i>";
            }
            echo "</td>
                                            <td scope=\"row\">";
            // line 300
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", true, true, false, 300) && (twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 300) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "source", [], "array", false, false, false, 300), "html", null, true);
            } else {
                echo "<i>Pas de source</i>";
            }
            echo "</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_goodies_";
            // line 302
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 302, $this->source); })()), "id", [], "any", false, false, false, 302), "html", null, true);
            echo "\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_goodiessuppr_";
            // line 305
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 305, $this->source); })()), "id", [], "any", false, false, false, 305), "html", null, true);
            echo "\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            ";
            // line 309
            $this->loadTemplate("FormsModification/goodies.html.twig", "Associations/association.html.twig", 309)->display($context);
            // line 310
            echo "                                        </tr>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                                </tbody>
                                ";
        // line 313
        $this->loadTemplate("FormsAdd/goodies.html.twig", "Associations/association.html.twig", 313)->display($context);
        // line 314
        echo "                            </table>
                            ";
        // line 315
        if (((isset($context["numbergoodies"]) || array_key_exists("numbergoodies", $context) ? $context["numbergoodies"] : (function () { throw new RuntimeError('Variable "numbergoodies" does not exist.', 315, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de goodies</h2>";
        }
        // line 316
        echo "                        </div>
";
        // line 318
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 318, $this->source); })()) == "chant")) {
            echo " show active";
        }
        echo "\" id=\"pills-chant\" role=\"tabpanel\" aria-labelledby=\"pills-chant-tab\">
                                <table class=\"table\">
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">Titre</th>
                                            <td scope=\"row\">";
        // line 323
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 323), "title", [], "any", true, true, false, 323) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 323), "title", [], "any", false, false, false, 323)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 323), "title", [], "any", false, false, false, 323), "html", null, true))) : (print ("<i>Pas encore de chant</i>")));
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Auteur</th>
                                            <td scope=\"row\">";
        // line 327
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 327), "author", [], "any", true, true, false, 327) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 327), "author", [], "any", false, false, false, 327)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 327), "author", [], "any", false, false, false, 327), "html", null, true))) : (print ("<i>Pas d'auteur</i>")));
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Année de création</th>
                                            <td scope=\"row\">";
        // line 331
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 331), "year", [], "any", true, true, false, 331)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 331, $this->source); })()), "sing", [], "any", false, false, false, 331), "year", [], "any", false, false, false, 331), "d/m/Y"), "html", null, true);
        } else {
            echo "<i>Pas de date de création</i>";
        }
        echo "</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Paroles</th>
                                            <td scope=\"row\">";
        // line 335
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 335), "text", [], "any", true, true, false, 335) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 335), "text", [], "any", false, false, false, 335)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 335), "text", [], "any", false, false, false, 335), "html", null, true))) : (print ("<i>Pas de paroles</i>")));
        echo "</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class=\"text-end\">                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_chant_";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 340, $this->source); })()), "id", [], "any", false, false, false, 340), "html", null, true);
        echo "\">
                                                    Modifier
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    ";
        // line 346
        $this->loadTemplate("FormsModification/chant.html.twig", "Associations/association.html.twig", 346)->display($context);
        // line 347
        echo "                                </table>
                        </div>
";
        // line 350
        echo "                        <div class=\"tab-pane fade ";
        if (((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 350, $this->source); })()) == "committee")) {
            echo " show active";
        }
        echo "\" id=\"pills-comite\" role=\"tabpanel\" aria-labelledby=\"pills-comite-tab\">
                            <table class=\"table\">
                                <div class=\"text-end\">
                                    <button type=\"button\" class=\"btn btn-outline-success p-3 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_committee_";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 353, $this->source); })()), "id", [], "any", false, false, false, 353), "html", null, true);
        echo "\">
                                        Ajouter un membre de comité +
                                    </button>
                                </div>
                                ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 357, $this->source); })()), "committee", [], "any", false, false, false, 357));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["committees"]) {
            // line 358
            echo "                                    <table class=\"table my-4\" style=\"border: solid 1px black\">
                                        <thead>
                                            <tr style=\"border-bottom: solid 1px black\">
                                                <th colspan=\"2\">";
            // line 361
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</th>
                                            </tr>
                                            <tr>
                                                <th>Fonction</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Surnom</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["committees"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["function"] => $context["members"]) {
                // line 373
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["members"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 374
                    echo "                                                    <tr>
                                                        ";
                    // line 375
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 375)) {
                        // line 376
                        echo "                                                            <td rowspan=\"";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["members"]), "html", null, true);
                        echo "\"><h4>";
                        echo twig_escape_filter($this->env, $context["function"], "html", null, true);
                        echo "</h4></td>
                                                        ";
                    }
                    // line 378
                    echo "                                                        ";
                    // line 379
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 379), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 380
                    (((twig_get_attribute($this->env, $this->source, $context["member"], "firstname", [], "any", true, true, false, 380) &&  !(null === twig_get_attribute($this->env, $this->source, $context["member"], "firstname", [], "any", false, false, false, 380)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "firstname", [], "any", false, false, false, 380), "html", null, true))) : (print ("")));
                    echo "</td>
                                                        <td>";
                    // line 381
                    (((twig_get_attribute($this->env, $this->source, $context["member"], "nickname", [], "any", true, true, false, 381) &&  !(null === twig_get_attribute($this->env, $this->source, $context["member"], "nickname", [], "any", false, false, false, 381)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "nickname", [], "any", false, false, false, 381), "html", null, true))) : (print ("")));
                    echo "</td>
                                                        <td class=\"col-2\">
                                                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_committee_";
                    // line 383
                    echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["function"], "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 383) - 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 383, $this->source); })()), "id", [], "any", false, false, false, 383), "html", null, true);
                    echo "\">
                                                                Modifier
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_committeesuppr_";
                    // line 386
                    echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["function"], "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 386) - 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 386, $this->source); })()), "id", [], "any", false, false, false, 386), "html", null, true);
                    echo "\">
                                                                Supprimer
                                                            </button>
                                                            ";
                    // line 389
                    $this->loadTemplate("FormsModification/committee.html.twig", "Associations/association.html.twig", 389)->display($context);
                    // line 390
                    echo "                                                        </td>
                                                    </tr>
                                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 393
                echo "                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['function'], $context['members'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "                                        </tbody>
                                    </table>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['committees'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "                                ";
        $this->loadTemplate("FormsAdd/committee.html.twig", "Associations/association.html.twig", 397)->display($context);
        // line 398
        echo "                            </table>
                            ";
        // line 399
        if (((isset($context["numbercommittee"]) || array_key_exists("numbercommittee", $context) ? $context["numbercommittee"] : (function () { throw new RuntimeError('Variable "numbercommittee" does not exist.', 399, $this->source); })()) == 0)) {
            echo "<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de comité</h2>";
        }
        // line 400
        echo "                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Associations/association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1192 => 400,  1188 => 399,  1185 => 398,  1182 => 397,  1166 => 394,  1152 => 393,  1136 => 390,  1134 => 389,  1122 => 386,  1110 => 383,  1105 => 381,  1101 => 380,  1096 => 379,  1094 => 378,  1086 => 376,  1084 => 375,  1081 => 374,  1063 => 373,  1046 => 372,  1032 => 361,  1027 => 358,  1010 => 357,  1003 => 353,  994 => 350,  990 => 347,  988 => 346,  979 => 340,  971 => 335,  960 => 331,  953 => 327,  946 => 323,  935 => 318,  932 => 316,  928 => 315,  925 => 314,  923 => 313,  920 => 312,  905 => 310,  903 => 309,  894 => 305,  886 => 302,  877 => 300,  869 => 299,  865 => 298,  857 => 297,  853 => 296,  843 => 295,  840 => 294,  823 => 293,  813 => 286,  796 => 275,  793 => 273,  789 => 272,  786 => 271,  784 => 270,  781 => 269,  766 => 267,  764 => 266,  755 => 262,  747 => 259,  738 => 257,  730 => 256,  726 => 255,  718 => 254,  714 => 253,  704 => 252,  701 => 251,  684 => 250,  674 => 243,  657 => 232,  654 => 230,  650 => 229,  647 => 228,  645 => 227,  642 => 226,  627 => 224,  625 => 223,  616 => 219,  608 => 216,  599 => 214,  591 => 213,  587 => 212,  583 => 211,  579 => 210,  576 => 209,  559 => 208,  549 => 201,  533 => 191,  530 => 189,  526 => 188,  523 => 187,  521 => 186,  518 => 185,  503 => 183,  501 => 182,  492 => 178,  484 => 175,  472 => 172,  464 => 171,  456 => 170,  448 => 169,  444 => 168,  441 => 167,  424 => 166,  414 => 159,  398 => 149,  395 => 147,  391 => 146,  388 => 145,  386 => 144,  383 => 143,  368 => 141,  366 => 140,  357 => 136,  349 => 133,  344 => 131,  340 => 130,  337 => 129,  320 => 128,  310 => 121,  297 => 114,  291 => 109,  289 => 108,  282 => 104,  274 => 99,  263 => 95,  256 => 91,  249 => 87,  242 => 83,  231 => 79,  220 => 75,  213 => 71,  202 => 67,  195 => 63,  179 => 59,  169 => 53,  165 => 51,  155 => 45,  147 => 42,  139 => 39,  131 => 36,  123 => 33,  115 => 30,  107 => 27,  99 => 24,  88 => 16,  84 => 15,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}

{% include 'Villes/villelist.css.twig' %}

        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"tab-content p-0\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"card-body p-3\">
                            <div class=\"text-center\">
                                <a href=\"{{ path('association_list')}}\" class=\"position-absolute py-2\" style=\"left: 2em; color: black;\"><i class=\"bi bi-chevron-left\"></i></a>
                                <h3 class=\"card-title py-2 m-0\">{{association.name??\"\"}}</h3>
                                <a></a>
                            </div>
                        </div>
                    </div>
                        
                    <ul class=\"nav nav-pills px-3 justify-content-center\" id=\"pills-tab\" role=\"tablist\">
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"informations\" %}active{% endif %}\" id=\"pills-informations-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-informations\" type=\"button\" role=\"tab\" aria-controls=\"pills-informations\" aria-selected=\"true\">Informations</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"particularity\" %}active{% endif %}\" id=\"pills-particularity-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-particularity\" type=\"button\" role=\"tab\" aria-controls=\"pills-particularity\" aria-selected=\"false\">Particularités</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"anecdotes\" %} active{% endif %}\" id=\"pills-anecdotes-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-anecdotes\" type=\"button\" role=\"tab\" aria-controls=\"pills-anecdotes\" aria-selected=\"false\">Anecdotes</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"documents\" %} active{% endif %}\" id=\"pills-documents-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-documents\" type=\"button\" role=\"tab\" aria-controls=\"pills-documents\" aria-selected=\"true\">Documents</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"decorums\" %} active{% endif %}\" id=\"pills-decorum-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-decorum\" type=\"button\" role=\"tab\" aria-controls=\"pills-decorum\" aria-selected=\"false\">Decorum</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"goodies\" %} active{% endif %}\" id=\"pills-goodies-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-goodies\" type=\"button\" role=\"tab\" aria-controls=\"pills-goodies\" aria-selected=\"false\">Goodies</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"chant\" %} active{% endif %}\" id=\"pills-chant-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-chant\" type=\"button\" role=\"tab\" aria-controls=\"pills-chant\" aria-selected=\"true\">Chant</button>
                        </li>
                        <li class=\"nav-item m-0\" role=\"presentation\">
                            <button class=\"nav-link {% if redirect == \"committee\" %} active{% endif %}\" id=\"pills-comite-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-comite\" type=\"button\" role=\"tab\" aria-controls=\"pills-comite\" aria-selected=\"false\">Comité</button>
                        </li>
                    </ul>


{# INFORMATIONS #}
                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        
                        <div class=\"tab-pane fade {% if redirect == \"informations\" %} show active{% endif %}\" id=\"pills-informations\" role=\"tabpanel\" aria-labelledby=\"pills-informations-tab\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <th scope=\"row\">Logo</th>
                                        {# <td scope=\"row\">{{association.logo??\"<i>Pas de logo</i>\"}}</td> #}
                                        <td scope=\"row\">{% if (association.logo is defined) and (association.logo != \"\") %}<img src=\"{{ asset(association.logo) }}\" alt=\"image\"/><span class=\"mx-3\">{{association.logo}}</span>{% else %}<i>Pas de logo</i>{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Nom</th>
                                        <td scope=\"row\">{{association.name??\"\"}}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Surnom</th>
                                        <td scope=\"row\">{% if (association.nickname is defined) and (association.nickname != \"\") %}{{association.nickname}}{% else %}<i>Pas de surnom</i>{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Ville</th>
                                        <td scope=\"row\">{{association.town??\"\"}}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Date de création</th>
                                        <td scope=\"row\">{% if (association.creation is defined) and (association.creation != 0) %}{{association.creation|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Résumé</th>
                                        <td scope=\"row\">{% if (association.resume is defined) and (association.resume != \"\") %}{{association.resume}}{% else %}<i>Pas de résumé</i>{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Type</th>
                                        <td scope=\"row\">{{association.type??\"<i>Pas de type</i>\"}}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Couvre-chef</th>
                                        <td scope=\"row\">{{association.hat??\"<i>Pas de couvre-chef</i>\"}}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Couleurs</th>
                                        <td scope=\"row\">{{association.additionalinformations.colorassembled??\"<i>Pas de couleurs</i>\"}}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Devise</th>
                                        <td scope=\"row\">{% if association.additionalinformations.scream is defined and association.additionalinformations.scream != \"\" %}{{association.additionalinformations.scream??\"<i>Pas de devise</i>\"}}{% else %}<i>Pas de devise</i>{% endif %}</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">Type</th>
                                        <td scope=\"row\">{{association.additionalinformations.gendertype??\"<i>?</i>\"}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class=\"text-end\">                              
                                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_information_{{association.id}}\">
                                                Modifier
                                            </button>
                                        </td>
                                        {% include 'FormsModification/informations.html.twig' %}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
{# PARTICULARITÉS #}
                        <div class=\"tab-pane fade {% if redirect == \"particularity\" %} show active{% endif %}\" id=\"pills-particularity\" role=\"tabpanel\" aria-labelledby=\"pills-particularity-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Numéro</th>
                                        <th scope=\"col\">Particularité</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_particularity_{{association.id}}\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for key, particularity in association['particularity'] %}
                                        <tr>
                                            <th scope=\"row\">{{key}}</th>
                                            <td scope=\"row\">{{particularity}}</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_particularity_{{key}}_{{association.id}}\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_particularitysuppr_{{key}}_{{association.id}}\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            {% include 'FormsModification/particularity.html.twig' %}
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                {% include 'FormsAdd/particularity.html.twig' %}
                            </table>
                            {% if numberparticularity == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de particularité</h2>{% endif %}
                        </div>
{# ANECDOTES #}
                        <div class=\"tab-pane fade {% if redirect == \"anecdotes\" %} show active{% endif %}\" id=\"pills-anecdotes\" role=\"tabpanel\" aria-labelledby=\"pills-anecdotes-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Texte</th>
                                        <th scope=\"col\">Date</th>
                                        <th scope=\"col\">Source</th>
                                        <th scope=\"col\">Photo</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_anecdote_{{association.id}}\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for key, value in association['anecdote'] %}
                                        <tr>
                                            <td scope=\"row\">{{ value['title']??\"<i>Pas de titre</i>\" }}</td>
                                            <td scope=\"row\">{% if (value['text'] is defined) and (value['text'] != \"\") %}{{ value['text']}}{% else %}<i>Pas de texte</i>{% endif %}</td>
                                            <td scope=\"row\">{% if (value['year'] is defined) and (value['year'] != false) %}{{value['year']|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                            <td scope=\"row\">{% if (value['source'] is defined) and (value['source'] != \"\") %}{{ value['source']}}{% else %}<i>Pas de source</i>{% endif %}</td>
                                            <td scope=\"row\">{% if (value['file'] is defined) and (value['file'] != \"\") %}<img src=\"{{ asset(value['file'][0]['path']) }}\" alt=\"image\"/>{% else %}<i>Pas de photo</i>{% endif %}</td>

                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_anecdote_{{key}}_{{ association.id }}\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_anecdotesuppr_{{key}}_{{association.id}}\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            {% include 'FormsModification/anecdotes.html.twig' %}
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                {% include 'FormsAdd/anecdote.html.twig' %}
                            </table>
                            {% if numberanecdote == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore d'anecdote</h2>{% endif %}
                        </div>
{# DOCUMENTS #}
                        <div class=\"tab-pane fade {% if redirect == \"documents\" %} show active{% endif %}\" id=\"pills-documents\" role=\"tabpanel\" aria-labelledby=\"pills-documents-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Fichier</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Type</th>
                                        <th scope=\"col\">Année</th>
                                        <th scope=\"col\">Source</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_document_{{association.id}}\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for key, value in association['document'] %}
                                        <tr>
                                            <td scope=\"row\">{{ value['file']['title']??\"<i>Pas de photo</i>\" }}</td>
                                            <td scope=\"row\">{{ value['title']??\"<i>Pas de titre</i>\" }}</td>
                                            <td scope=\"row\">{{ value['type']??\"<i>Pas de type</i>\" }}</td>
                                            <td scope=\"row\">{% if (value['year'] is defined) and (value['year'] != false) %}{{value['year']|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                            <td scope=\"row\">{% if (value['source'] is defined) and (value['source'] != \"\") %}{{ value['source']}}{% else %}<i>Pas de source</i>{% endif %}</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_documents_{{key}}_{{ association.id }}\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_documentsuppr_{{key}}_{{association.id}}\">
                                                        Supprimer
                                                </button>
                                            </td>
                                            {% include 'FormsModification/documents.html.twig' %}
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                {% include 'FormsAdd/document.html.twig' %}
                            </table>
                            {% if numberdocument == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de document</h2>{% endif %}
                        </div>
{# DECORUM #}
                        <div class=\"tab-pane fade {% if redirect == \"decorums\" %} show active{% endif %}\" id=\"pills-decorum\" role=\"tabpanel\" aria-labelledby=\"pills-decorum-tab\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th scope=\"col\">Photo</th>
                                            <th scope=\"col\">Titre</th>
                                            <th scope=\"col\">Texte</th>
                                            <th scope=\"col\">Type</th>
                                            <th scope=\"col\">Année</th>
                                            <th scope=\"col\">Source</th>
                                            <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_decorum_{{association.id}}\">
                                                Ajouter +
                                            </button>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for key, value in association['decorum'] %}
                                            <tr>
                                                <td scope=\"row\">{% if (value['file'] is defined) and (value['file'] != \"\") %}<img src=\"{{ asset(value['file'][0]['path']) }}\" alt=\"image\"/>{% else %}<i>Pas de photo</i>{% endif %}</td>
                                                <td scope=\"row\">{{ value['title']??\"<i>Pas de titre</i>\" }}</td>
                                                <td scope=\"row\">{% if (value['text'] is defined) and (value['text'] != \"\") %}{{ value['text']}}{% else %}<i>Pas de texte</i>{% endif %}</td>
                                                <td scope=\"row\">{{ value['type']??\"<i>Pas de type</i>\" }}</td>
                                                <td scope=\"row\">{% if (value['year'] is defined) and (value['year'] != false) %}{{value['year']|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                                <td scope=\"row\">{% if (value['source'] is defined) and (value['source'] != \"\") %}{{ value['source']}}{% else %}<i>Pas de source</i>{% endif %}</td>
                                                <td>                              
                                                    <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_decorum_{{key}}_{{ association.id }}\">
                                                        Modifier
                                                    </button>
                                                    <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_decorumsuppr_{{key}}_{{association.id}}\">
                                                        Supprimer
                                                    </button>
                                                </td>
                                                {% include 'FormsModification/decorums.html.twig' %}
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    {% include 'FormsAdd/decorum.html.twig' %}
                                </table>
                                {% if numberdecorum == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de decorum</h2>{% endif %}
                        </div>
{# GOODIES #}
                        <div class=\"tab-pane fade {% if redirect == \"goodies\" %} show active{% endif %}\" id=\"pills-goodies\" role=\"tabpanel\" aria-labelledby=\"pills-goodies-tab\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Photo</th>
                                        <th scope=\"col\">Titre</th>
                                        <th scope=\"col\">Texte</th>
                                        <th scope=\"col\">Type</th>
                                        <th scope=\"col\">Année</th>
                                        <th scope=\"col\">Source</th>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-outline-success p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_goodies_{{association.id}}\">
                                                Ajouter +
                                            </button>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for key, value in association['goodies'] %}
                                        <tr>
                                            <td scope=\"row\">{% if (value['file'] is defined) and (value['file'] != \"\") %}<img src=\"{{ asset(value['file'][0]['path']) }}\" alt=\"image\"/>{% else %}<i>Pas de photo</i>{% endif %}</td>
                                            <td scope=\"row\">{{ value['title']??\"<i>Pas de titre</i>\" }}</td>
                                            <td scope=\"row\">{% if (value['text'] is defined) and (value['text'] != \"\") %}{{ value['text']}}{% else %}<i>Pas de texte</i>{% endif %}</td>
                                            <td scope=\"row\">{{ value['type']??\"<i>Pas de type</i>\" }}</td>
                                            <td scope=\"row\">{% if (value['year'] is defined) and (value['year'] != false) %}{{value['year']|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                            <td scope=\"row\">{% if (value['source'] is defined) and (value['source'] != \"\") %}{{ value['source']}}{% else %}<i>Pas de source</i>{% endif %}</td>
                                            <td>                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_goodies_{{key}}_{{ association.id }}\">
                                                    Modifier
                                                </button>
                                                <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_goodiessuppr_{{key}}_{{association.id}}\">
                                                    Supprimer
                                                </button>
                                            </td>
                                            {% include 'FormsModification/goodies.html.twig' %}
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                {% include 'FormsAdd/goodies.html.twig' %}
                            </table>
                            {% if numbergoodies == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de goodies</h2>{% endif %}
                        </div>
{# CHANT #}
                        <div class=\"tab-pane fade {% if redirect == \"chant\" %} show active{% endif %}\" id=\"pills-chant\" role=\"tabpanel\" aria-labelledby=\"pills-chant-tab\">
                                <table class=\"table\">
                                    <tbody>
                                        <tr>
                                            <th scope=\"row\">Titre</th>
                                            <td scope=\"row\">{{ association.sing.title??\"<i>Pas encore de chant</i>\" }}</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Auteur</th>
                                            <td scope=\"row\">{{ association.sing.author??\"<i>Pas d'auteur</i>\" }}</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Année de création</th>
                                            <td scope=\"row\">{% if association.sing.year is defined %}{{association.sing.year|date(\"d/m/Y\")}}{% else %}<i>Pas de date de création</i>{% endif %}</td>
                                        </tr>
                                        <tr>
                                            <th scope=\"row\">Paroles</th>
                                            <td scope=\"row\">{{ association.sing.text??\"<i>Pas de paroles</i>\" }}</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class=\"text-end\">                              
                                                <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_chant_{{ association.id }}\">
                                                    Modifier
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    {% include 'FormsModification/chant.html.twig' %}
                                </table>
                        </div>
{# COMITÉ #}
                        <div class=\"tab-pane fade {% if redirect == \"committee\" %} show active{% endif %}\" id=\"pills-comite\" role=\"tabpanel\" aria-labelledby=\"pills-comite-tab\">
                            <table class=\"table\">
                                <div class=\"text-end\">
                                    <button type=\"button\" class=\"btn btn-outline-success p-3 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_add_committee_{{association.id}}\">
                                        Ajouter un membre de comité +
                                    </button>
                                </div>
                                {% for year, committees in association.committee %}
                                    <table class=\"table my-4\" style=\"border: solid 1px black\">
                                        <thead>
                                            <tr style=\"border-bottom: solid 1px black\">
                                                <th colspan=\"2\">{{ year }}</th>
                                            </tr>
                                            <tr>
                                                <th>Fonction</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Surnom</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for function, members in committees %}
                                                {% for member in members %}
                                                    <tr>
                                                        {% if loop.first %}
                                                            <td rowspan=\"{{ members|length }}\"><h4>{{ function }}</h4></td>
                                                        {% endif %}
                                                        {# <td>{{ loop.index - 1}}</td> #}
                                                        <td>{{ member.name }}</td>
                                                        <td>{{ member.firstname ?? \"\" }}</td>
                                                        <td>{{ member.nickname ?? \"\" }}</td>
                                                        <td class=\"col-2\">
                                                            <button type=\"button\" class=\"btn btn-outline-primary p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_committee_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\">
                                                                Modifier
                                                            </button>
                                                            <button type=\"button\" class=\"btn btn-outline-danger p-2 mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_committeesuppr_{{year}}_{{function}}_{{ loop.index - 1}}_{{ association.id }}\">
                                                                Supprimer
                                                            </button>
                                                            {% include 'FormsModification/committee.html.twig' %}
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                {% endfor %}
                                {% include 'FormsAdd/committee.html.twig' %}
                            </table>
                            {% if numbercommittee == 0 %}<h2 class=\"text-center pt-5 pb-4 font-weight-bold\">Pas encore de comité</h2>{% endif %}
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    {% endblock %}", "Associations/association.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Associations/association.html.twig");
    }
}

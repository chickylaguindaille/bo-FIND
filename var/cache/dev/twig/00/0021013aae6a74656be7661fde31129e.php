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

/* inc/sidebar.html.twig */
class __TwigTemplate_32235245def651010f00a7dc9fc218d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        // line 1
        echo "<!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item ";
        // line 4
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()) == "home")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
              <i class=\"mdi mdi-home menu-icon\"></i>
              <span class=\"menu-title\">Page d'accueil</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">ACTIF</li>
          <li class=\"nav-item ";
        // line 11
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()) == "ville")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_list");
        echo "\">
              <i class=\"mdi mdi-city menu-icon\"></i>
              <span class=\"menu-title\">Villes</span>
            </a>
          </li>
          <li class=\"nav-item ";
        // line 17
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()) == "association")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_list");
        echo "\">
              <i class=\"mdi mdi-beer menu-icon\"></i>
              <span class=\"menu-title\">Associations</span>
            </a>
          </li>
          <li class=\"nav-item ";
        // line 23
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()) == "user")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        echo "\">
              <i class=\" mdi mdi-account-circle menu-icon\"></i>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-star menu-icon\"></i>
              <span class=\"menu-title\">Insignes/Rubans</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">TAMPON</li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-city menu-icon\"></i>
              <span class=\"menu-title\">Villes</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-beer menu-icon\"></i>
              <span class=\"menu-title\">Associations</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\" mdi mdi-account-circle menu-icon\"></i>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-star menu-icon\"></i>
              <span class=\"menu-title\">Insignes/Rubans</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">Calendriers</li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Congrès</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Ordinesque</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Paris</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Namur</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  91 => 23,  83 => 18,  77 => 17,  69 => 12,  63 => 11,  54 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item {% if page == \"home\" %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ path('home')}}\">
              <i class=\"mdi mdi-home menu-icon\"></i>
              <span class=\"menu-title\">Page d'accueil</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">ACTIF</li>
          <li class=\"nav-item {% if page == 'ville' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ path('ville_list')}}\">
              <i class=\"mdi mdi-city menu-icon\"></i>
              <span class=\"menu-title\">Villes</span>
            </a>
          </li>
          <li class=\"nav-item {% if page == 'association' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ path('association_list')}}\">
              <i class=\"mdi mdi-beer menu-icon\"></i>
              <span class=\"menu-title\">Associations</span>
            </a>
          </li>
          <li class=\"nav-item {% if page == 'user' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"{{ path('user_list')}}\">
              <i class=\" mdi mdi-account-circle menu-icon\"></i>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-star menu-icon\"></i>
              <span class=\"menu-title\">Insignes/Rubans</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">TAMPON</li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-city menu-icon\"></i>
              <span class=\"menu-title\">Villes</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-beer menu-icon\"></i>
              <span class=\"menu-title\">Associations</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\" mdi mdi-account-circle menu-icon\"></i>
              <span class=\"menu-title\">Utilisateurs</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-star menu-icon\"></i>
              <span class=\"menu-title\">Insignes/Rubans</span>
            </a>
          </li>
          <li class=\"nav-item nav-category\">Calendriers</li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Congrès</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Ordinesque</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Paris</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-calendar menu-icon\"></i>
              <span class=\"menu-title\">Namur</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->", "inc/sidebar.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/inc/sidebar.html.twig");
    }
}

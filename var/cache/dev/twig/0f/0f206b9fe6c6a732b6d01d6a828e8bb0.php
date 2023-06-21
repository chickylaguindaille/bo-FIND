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

/* layout.html.twig */
class __TwigTemplate_bae101e3e273a3ed10fa47013e023d5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'rightsidebar' => [$this, 'block_rightsidebar'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "layout.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('navbar', $context, $blocks);
        // line 12
        echo "
 <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\" style=\"top: 0; position: absolute;\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close ti-close\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>

    ";
        // line 35
        $this->displayBlock('rightsidebar', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "

 <div class=\"main-panel\">
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 10
        echo "        ";
        $this->loadTemplate("inc/navbar.html.twig", "layout.html.twig", 10)->display($context);
        // line 11
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_rightsidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rightsidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rightsidebar"));

        // line 36
        echo "        ";
        $this->loadTemplate("inc/rightsidebar.html.twig", "layout.html.twig", 36)->display($context);
        // line 37
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 40
        echo "        ";
        $this->loadTemplate("inc/sidebar.html.twig", "layout.html.twig", 40)->display($context);
        // line 41
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 46
        echo "        ";
        $this->loadTemplate("home.html.twig", "layout.html.twig", 46)->display($context);
        // line 47
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "        ";
        $this->loadTemplate("inc/footer.html.twig", "layout.html.twig", 50)->display($context);
        // line 51
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 51,  272 => 50,  262 => 49,  252 => 47,  249 => 46,  239 => 45,  229 => 41,  226 => 40,  216 => 39,  206 => 37,  203 => 36,  193 => 35,  183 => 11,  180 => 10,  170 => 9,  152 => 52,  150 => 49,  147 => 48,  145 => 45,  140 => 42,  138 => 39,  135 => 38,  133 => 35,  108 => 12,  106 => 9,  103 => 8,  93 => 7,  83 => 4,  73 => 3,  62 => 61,  60 => 7,  57 => 6,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'base.html.twig' %}

{% block stylesheets %}
    {# {% include 'inc/all/all.css.twig' %} #}
{% endblock %}

{% block body %}

    {% block navbar %}
        {% include 'inc/navbar.html.twig' %}
    {% endblock %}

 <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\" style=\"top: 0; position: absolute;\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close ti-close\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border me-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border me-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>

    {% block rightsidebar %}
        {% include 'inc/rightsidebar.html.twig' %}
    {% endblock %}

    {% block sidebar %}
        {% include 'inc/sidebar.html.twig' %}
    {% endblock %}


 <div class=\"main-panel\">
    {% block content %}
        {% include 'home.html.twig' %}
    {% endblock %}

    {% block footer %}
        {% include 'inc/footer.html.twig' %}
    {% endblock %}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

{% endblock %}

", "layout.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/layout.html.twig");
    }
}

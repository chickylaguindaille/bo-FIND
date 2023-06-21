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

/* base.html.twig */
class __TwigTemplate_e81cff2a485b4e67e119ce164375c31d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css\" integrity=\"sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e\" crossorigin=\"anonymous\">
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/feather/feather.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
        <!-- endinject -->
        <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos/32x32.png"), "html", null, true);
        echo "\" />
        
        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </head>
    <body>
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </body>

      <!-- plugins:js -->
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/template.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/settings.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/todolist.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
  <!-- End custom js for this page-->
  
<script>


</script>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "FIND BackOffice";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 33,  243 => 29,  233 => 28,  220 => 25,  210 => 24,  191 => 5,  172 => 55,  168 => 54,  164 => 53,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  135 => 42,  131 => 41,  127 => 40,  121 => 37,  116 => 34,  114 => 33,  110 => 31,  108 => 28,  105 => 27,  103 => 24,  98 => 22,  93 => 20,  87 => 17,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}FIND BackOffice{% endblock %}</title>
        {# Bootstrap icon  #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css\" integrity=\"sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e\" crossorigin=\"anonymous\">
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/feather/feather.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/mdi/css/materialdesignicons.min.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/ti-icons/css/themify-icons.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/typicons/typicons.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/simple-line-icons/css/simple-line-icons.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/vendors/css/vendor.bundle.base.css\") }}\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/js/select.dataTables.min.css\") }}\">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"staradmin/css/vertical-layout-light/style.css\") }}\">
        <!-- endinject -->
        <link rel=\"shortcut icon\" href=\"{{ asset(\"logos/32x32.png\") }}\" />
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>

      <!-- plugins:js -->
  <script src=\"{{ asset(\"staradmin/vendors/js/vendor.bundle.base.js\") }}\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"{{ asset(\"staradmin/vendors/chart.js/Chart.min.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/vendors/progressbar.js/progressbar.min.js\") }}\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"{{ asset(\"staradmin/js/off-canvas.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/js/hoverable-collapse.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/js/template.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/js/settings.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/js/todolist.js\") }}\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"{{ asset(\"staradmin/js/jquery.cookie.js\") }}\" type=\"text/javascript\"></script>
  <script src=\"{{ asset(\"staradmin/js/dashboard.js\") }}\"></script>
  <script src=\"{{ asset(\"staradmin/js/Chart.roundedBarCharts.js\") }}\"></script>
  <!-- End custom js for this page-->
  
<script>


</script>
</html>
", "base.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/base.html.twig");
    }
}

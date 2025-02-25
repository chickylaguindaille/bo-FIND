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

/* Associations/associationlist.js.twig */
class __TwigTemplate_f03c20d89d236d494e31104de75ad8fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/associationlist.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Associations/associationlist.js.twig"));

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>

function delayWithSpinner(fn, ms) {
  let timer = 0;
  return function(...args) {
    \$('#loaderspinner').show(); // Afficher le spinner
    clearTimeout(timer);
    timer = setTimeout(() => {
      fn.apply(this, args);
      \$('#loaderspinner').hide(); // Masquer le spinner
    }, ms || 0);
  };
}

function delay(fn, ms) {
  let timer = 0
  return function(...args) {
    clearTimeout(timer)
    timer = setTimeout(fn.bind(this, ...args), ms || 0)
  }
}

    \$('#searchInputAssociation').keyup(function(){
      \$('#result-search').html('');
    });


  \$(document).ready(function(){
    \$('#searchInputAssociation').keyup(delayWithSpinner(function(){

      \$('#result-search').html('');
      var texte = \$(this).val();

      var country = \$(\"#countryfilter\").val();
      var region = \$(\"#regionfilter\").val();
      var town = \$(\"#townfilter\").val();
      var assotype = \$(\"#typefilter\").val();
      var hat = \$(\"#hatfilter\").val();
      var gender = \$(\"#genderfilter\").val();

      ";
        // line 44
        echo "
      ";
        // line 46
        echo "
          \$.ajax({
              type: 'GET',
              url: '";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_list_change"), "js", null, true);
        echo "',
              data: 'texte=' + encodeURIComponent(texte)  + '&country=' + country  + '&region=' + region  + '&town=' + town  + '&assotype=' + assotype  + '&hat=' + hat  + '&gender=' + gender,
              success: function(data){
                if(data != \"\"){
                    \$('#result-search').append(data);
                    ";
        // line 55
        echo "              }
              }
          })
    }, 500));
  });


    \$('#btntrier').click(function(){
      \$('#result-search').html('');
    });

    \$(document).ready(function(){
    \$('#btntrier').click(delayWithSpinner(function(){

      \$('#result-search').html('');
      var texte = \$(this).val();

      var country = \$(\"#countryfilter\").val();
      var region = \$(\"#regionfilter\").val();
      var town = \$(\"#townfilter\").val();
      var assotype = \$(\"#typefilter\").val();
      var hat = \$(\"#hatfilter\").val();
      var gender = \$(\"#genderfilter\").val();

      console.log(country + region + town + assotype + hat + gender);

      ";
        // line 82
        echo "
          \$.ajax({
              type: 'GET',
              url: '";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_list_change"), "js", null, true);
        echo "',
              data: 'texte=' + encodeURIComponent(texte)  + '&country=' + country  + '&region=' + region  + '&town=' + town  + '&assotype=' + assotype  + '&hat=' + hat  + '&gender=' + gender,
              success: function(data){
                if(data != \"\"){
                    \$('#result-search').append(data);
                    console.log(data);
                };
              }
          })
    }, 500));
  });
  </script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Associations/associationlist.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 85,  131 => 82,  103 => 55,  95 => 49,  90 => 46,  87 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>

function delayWithSpinner(fn, ms) {
  let timer = 0;
  return function(...args) {
    \$('#loaderspinner').show(); // Afficher le spinner
    clearTimeout(timer);
    timer = setTimeout(() => {
      fn.apply(this, args);
      \$('#loaderspinner').hide(); // Masquer le spinner
    }, ms || 0);
  };
}

function delay(fn, ms) {
  let timer = 0
  return function(...args) {
    clearTimeout(timer)
    timer = setTimeout(fn.bind(this, ...args), ms || 0)
  }
}

    \$('#searchInputAssociation').keyup(function(){
      \$('#result-search').html('');
    });


  \$(document).ready(function(){
    \$('#searchInputAssociation').keyup(delayWithSpinner(function(){

      \$('#result-search').html('');
      var texte = \$(this).val();

      var country = \$(\"#countryfilter\").val();
      var region = \$(\"#regionfilter\").val();
      var town = \$(\"#townfilter\").val();
      var assotype = \$(\"#typefilter\").val();
      var hat = \$(\"#hatfilter\").val();
      var gender = \$(\"#genderfilter\").val();

      {# console.log(country + region + town + assotype + hat + gender); #}

      {# var tri = \$('input[name=tri]:checked').val(); #}

          \$.ajax({
              type: 'GET',
              url: '{{ path('association_list_change')}}',
              data: 'texte=' + encodeURIComponent(texte)  + '&country=' + country  + '&region=' + region  + '&town=' + town  + '&assotype=' + assotype  + '&hat=' + hat  + '&gender=' + gender,
              success: function(data){
                if(data != \"\"){
                    \$('#result-search').append(data);
                    {# console.log(texte); #}
              }
              }
          })
    }, 500));
  });


    \$('#btntrier').click(function(){
      \$('#result-search').html('');
    });

    \$(document).ready(function(){
    \$('#btntrier').click(delayWithSpinner(function(){

      \$('#result-search').html('');
      var texte = \$(this).val();

      var country = \$(\"#countryfilter\").val();
      var region = \$(\"#regionfilter\").val();
      var town = \$(\"#townfilter\").val();
      var assotype = \$(\"#typefilter\").val();
      var hat = \$(\"#hatfilter\").val();
      var gender = \$(\"#genderfilter\").val();

      console.log(country + region + town + assotype + hat + gender);

      {# var tri = \$('input[name=tri]:checked').val(); #}

          \$.ajax({
              type: 'GET',
              url: '{{ path('association_list_change')}}',
              data: 'texte=' + encodeURIComponent(texte)  + '&country=' + country  + '&region=' + region  + '&town=' + town  + '&assotype=' + assotype  + '&hat=' + hat  + '&gender=' + gender,
              success: function(data){
                if(data != \"\"){
                    \$('#result-search').append(data);
                    console.log(data);
                };
              }
          })
    }, 500));
  });
  </script>", "Associations/associationlist.js.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Associations/associationlist.js.twig");
    }
}

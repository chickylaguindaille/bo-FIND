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

/* Villes/villelist.js.twig */
class __TwigTemplate_ef19126c89fcf6f6daeda73bb057b4cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/villelist.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Villes/villelist.js.twig"));

        // line 1
        echo "<script src=\"https://googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>

\$(document).ready(function () {
    \$('#result-search-france').DataTable();
});
\$(document).ready(function () {
    \$('#result-search-belgium').DataTable();
});


function delayWithSpinner(fn, ms) {
  let timer = 0;
  return function(...args) {
    \$('.loaderspinner').show(); // Afficher le spinner
    clearTimeout(timer);
    timer = setTimeout(() => {
      fn.apply(this, args);
      \$('.loaderspinner').hide(); // Masquer le spinner
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

    \$('.searchInputVille').keyup(function(){
      var id = \$(this).attr(\"id\");
      if(id==\"searchInputVilleFrance\"){
        \$('#result-search-france').html('');
      };
      if(id==\"searchInputVilleBelgique\"){
        \$('#result-search-belgium').html('');
      };
    });


\$(document).ready(function() {
  var countrylist;

    \$('.searchInputVille').keyup(delayWithSpinner(function(){

      var id = \$(this).attr(\"id\");

      if(id==\"searchInputVilleFrance\"){
        countrylist = \"frenchtowns\";
        var region = \$(\"#regionfilterfrance\").val();
        \$('#result-search-france').html('');
      };
      if(id==\"searchInputVilleBelgique\"){
        countrylist = \"belgiumtowns\";
        var region = \$(\"#regionfilterbelgium\").val();
        \$('#result-search-belgium').html('');
      };

      var texte = \$(this).val();
      


          \$.ajax({
              type: 'GET',
              url: '";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_list_change"), "js", null, true);
        echo "',
              data: 'texte=' + encodeURIComponent(texte) + '&countrylist=' + countrylist + '&region=' + region,
              success: function(data){
                if(data != \"\"){

                    if(countrylist == \"frenchtowns\"){
                      \$('#result-search-france').append(data);
                    }else if (countrylist == \"belgiumtowns\"){
                      \$('#result-search-belgium').append(data);
                      console.log(data);
                    }

              }else{
                console.log(\"nop\");
              }
              }
          })
    }, 500));
  });


    \$('.btntrier').click(function(){
      \$('#result-search').html('');
    });

    \$(document).ready(function(){
    \$('.btntrier').click(delayWithSpinner(function(){

      var id = \$(this).attr(\"id\");

    if(id==\"btntrierfrench\"){
      \$('#result-search-france').html('');
      var region = \$(\"#regionfilterfrance\").val();
      var texte = \$('#searchInputVilleFrance').val();
      countrylist = \"frenchtowns\";
    }else if(id==\"btntrierbelgium\"){
      \$('#result-search-belgium').html('');
      var region = \$(\"#regionfilterbelgium\").val();
      var texte = \$('#searchInputVilleBelgique').val();
      countrylist = \"belgiumtowns\";
      }



          \$.ajax({
              type: 'GET',
              url: '";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_list_change"), "js", null, true);
        echo "',
              data: 'texte=' + encodeURIComponent(texte)  + '&countrylist=' + countrylist + '&region=' + region,
              success: function(data){
                if(data != \"\"){
                      if(id==\"btntrierfrench\"){
                        \$('#result-search-france').append(data);
                      }else if(id==\"btntrierbelgium\"){
                        \$('#result-search-belgium').append(data);
                      }
              }
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
        return "Villes/villelist.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 114,  112 => 68,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>

\$(document).ready(function () {
    \$('#result-search-france').DataTable();
});
\$(document).ready(function () {
    \$('#result-search-belgium').DataTable();
});


function delayWithSpinner(fn, ms) {
  let timer = 0;
  return function(...args) {
    \$('.loaderspinner').show(); // Afficher le spinner
    clearTimeout(timer);
    timer = setTimeout(() => {
      fn.apply(this, args);
      \$('.loaderspinner').hide(); // Masquer le spinner
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

    \$('.searchInputVille').keyup(function(){
      var id = \$(this).attr(\"id\");
      if(id==\"searchInputVilleFrance\"){
        \$('#result-search-france').html('');
      };
      if(id==\"searchInputVilleBelgique\"){
        \$('#result-search-belgium').html('');
      };
    });


\$(document).ready(function() {
  var countrylist;

    \$('.searchInputVille').keyup(delayWithSpinner(function(){

      var id = \$(this).attr(\"id\");

      if(id==\"searchInputVilleFrance\"){
        countrylist = \"frenchtowns\";
        var region = \$(\"#regionfilterfrance\").val();
        \$('#result-search-france').html('');
      };
      if(id==\"searchInputVilleBelgique\"){
        countrylist = \"belgiumtowns\";
        var region = \$(\"#regionfilterbelgium\").val();
        \$('#result-search-belgium').html('');
      };

      var texte = \$(this).val();
      


          \$.ajax({
              type: 'GET',
              url: '{{ path('ville_list_change')}}',
              data: 'texte=' + encodeURIComponent(texte) + '&countrylist=' + countrylist + '&region=' + region,
              success: function(data){
                if(data != \"\"){

                    if(countrylist == \"frenchtowns\"){
                      \$('#result-search-france').append(data);
                    }else if (countrylist == \"belgiumtowns\"){
                      \$('#result-search-belgium').append(data);
                      console.log(data);
                    }

              }else{
                console.log(\"nop\");
              }
              }
          })
    }, 500));
  });


    \$('.btntrier').click(function(){
      \$('#result-search').html('');
    });

    \$(document).ready(function(){
    \$('.btntrier').click(delayWithSpinner(function(){

      var id = \$(this).attr(\"id\");

    if(id==\"btntrierfrench\"){
      \$('#result-search-france').html('');
      var region = \$(\"#regionfilterfrance\").val();
      var texte = \$('#searchInputVilleFrance').val();
      countrylist = \"frenchtowns\";
    }else if(id==\"btntrierbelgium\"){
      \$('#result-search-belgium').html('');
      var region = \$(\"#regionfilterbelgium\").val();
      var texte = \$('#searchInputVilleBelgique').val();
      countrylist = \"belgiumtowns\";
      }



          \$.ajax({
              type: 'GET',
              url: '{{ path('ville_list_change')}}',
              data: 'texte=' + encodeURIComponent(texte)  + '&countrylist=' + countrylist + '&region=' + region,
              success: function(data){
                if(data != \"\"){
                      if(id==\"btntrierfrench\"){
                        \$('#result-search-france').append(data);
                      }else if(id==\"btntrierbelgium\"){
                        \$('#result-search-belgium').append(data);
                      }
              }
              }
          })
    }, 500));
  });
  </script>", "Villes/villelist.js.twig", "/Applications/MAMP/htdocs/bo-FIND/templates/Villes/villelist.js.twig");
    }
}

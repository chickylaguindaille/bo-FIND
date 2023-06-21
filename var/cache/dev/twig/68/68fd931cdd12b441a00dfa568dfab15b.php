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

/* Mails/mailcontent.html.twig */
class __TwigTemplate_66ccbad08046a2610e72c7a7bd8282a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mails/mailcontent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mails/mailcontent.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Site</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .bg-1 {background-color: #E4A682;color: #ffffff;}
        .bg-2 {background-color: #fff;color: #000;}
        .bg-3 {background-color: #ffffff;color: #555555;}
        .container-fluid {padding-top: 0px;padding-bottom: 0px;}
        .img-icon{width: 100px;padding-top: 7px;}
        .border-nop{ border: none;text-align: left;}
        .sizefooter{padding: 15px;text-align:center;}
        .red{color:red; font-weight:bold;}
        .text-center{text-align:center;}
        .text-left{text-align:left;}
        .text-right{text-align:right;}
        .btnconfig{ background-color: #0A7B0E;color: white;padding: 15px 32px; text-align: center;text-decoration: none;display: inline-block;font-size: 16px;
            margin: .375rem;
            border: 0;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
<div class=\"bg-2 text-center sizefooter\" style=\"border-bottom:5px #E4A682 solid;\">
    <div style=\"text-align: center;\">
        <img src=\"https://symfony.com/logos/symfony_black_03.png\" class=\"img-icon\" >
    </div>
</div>
<div class=\"container-fluid bg-3 text-left\" style=\"text-align:center;\">
    <p>Salut ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Ton compte a été ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " !</p>
    ";
        // line 36
        if ((array_key_exists("action", $context) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()) == "activé"))) {
            // line 37
            echo "        <p>Tu peux désormais te connecter sur <a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">le site</a> Folklore Is Not Dead </p>
    ";
        }
        // line 39
        echo "    ";
        if ((array_key_exists("action", $context) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })()) == "désactivé"))) {
            // line 40
            echo "        <p>Tu ne peux désormais plus te connecter sur <a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">le site</a> Folklore Is Not Dead </p>
    ";
        }
        // line 42
        echo "</div>
<div class=\"sizefooter bg-1\">
    <p><a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">https://folklore-is-not-dead.com</a></p>
    <p style=\"font-size: 13px;\">
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Mails/mailcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  95 => 40,  92 => 39,  88 => 37,  86 => 36,  82 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Site</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
        .bg-1 {background-color: #E4A682;color: #ffffff;}
        .bg-2 {background-color: #fff;color: #000;}
        .bg-3 {background-color: #ffffff;color: #555555;}
        .container-fluid {padding-top: 0px;padding-bottom: 0px;}
        .img-icon{width: 100px;padding-top: 7px;}
        .border-nop{ border: none;text-align: left;}
        .sizefooter{padding: 15px;text-align:center;}
        .red{color:red; font-weight:bold;}
        .text-center{text-align:center;}
        .text-left{text-align:left;}
        .text-right{text-align:right;}
        .btnconfig{ background-color: #0A7B0E;color: white;padding: 15px 32px; text-align: center;text-decoration: none;display: inline-block;font-size: 16px;
            margin: .375rem;
            border: 0;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
<div class=\"bg-2 text-center sizefooter\" style=\"border-bottom:5px #E4A682 solid;\">
    <div style=\"text-align: center;\">
        <img src=\"https://symfony.com/logos/symfony_black_03.png\" class=\"img-icon\" >
    </div>
</div>
<div class=\"container-fluid bg-3 text-left\" style=\"text-align:center;\">
    <p>Salut {{ name }}</p>
    <p>Ton compte a été {{ action }} !</p>
    {% if action is defined and action == \"activé\" %}
        <p>Tu peux désormais te connecter sur <a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">le site</a> Folklore Is Not Dead </p>
    {% endif %}
    {% if action is defined and action == \"désactivé\" %}
        <p>Tu ne peux désormais plus te connecter sur <a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">le site</a> Folklore Is Not Dead </p>
    {% endif %}
</div>
<div class=\"sizefooter bg-1\">
    <p><a href=\"https://folklore-is-not-dead.com\" style=\"font-size: 15px;color: black;\" target=\"_blank\" data-saferedirecturl=\"https://folklore-is-not-dead.com/\">https://folklore-is-not-dead.com</a></p>
    <p style=\"font-size: 13px;\">
</div>
</body>
</html>", "Mails/mailcontent.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/Mails/mailcontent.html.twig");
    }
}

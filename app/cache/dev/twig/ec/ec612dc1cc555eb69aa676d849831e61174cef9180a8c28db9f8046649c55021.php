<?php

/* TravelsMainBundle::base.html.twig */
class __TwigTemplate_5c988d8994377198fa5055c0217a47a8a5d9cedbcb9c6bda541dc4f3f9be76aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2090c5904cd18882337dfcd5098344bf37fe04f5a9a1095e6ec45c6802683998 = $this->env->getExtension("native_profiler");
        $__internal_2090c5904cd18882337dfcd5098344bf37fe04f5a9a1095e6ec45c6802683998->enter($__internal_2090c5904cd18882337dfcd5098344bf37fe04f5a9a1095e6ec45c6802683998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/images/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('metatags', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('layout', $context, $blocks);
        // line 12
        echo "    </body>
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</html>
";
        
        $__internal_2090c5904cd18882337dfcd5098344bf37fe04f5a9a1095e6ec45c6802683998->leave($__internal_2090c5904cd18882337dfcd5098344bf37fe04f5a9a1095e6ec45c6802683998_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7deff40d96dfa91fe9291b3ac8907b0a620b439a252218b0cabf1eebf7520898 = $this->env->getExtension("native_profiler");
        $__internal_7deff40d96dfa91fe9291b3ac8907b0a620b439a252218b0cabf1eebf7520898->enter($__internal_7deff40d96dfa91fe9291b3ac8907b0a620b439a252218b0cabf1eebf7520898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7deff40d96dfa91fe9291b3ac8907b0a620b439a252218b0cabf1eebf7520898->leave($__internal_7deff40d96dfa91fe9291b3ac8907b0a620b439a252218b0cabf1eebf7520898_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_ecb1e66de66dce17e60682c722182ddd994e68407ff90a998b8eb1b7a3230a7b = $this->env->getExtension("native_profiler");
        $__internal_ecb1e66de66dce17e60682c722182ddd994e68407ff90a998b8eb1b7a3230a7b->enter($__internal_ecb1e66de66dce17e60682c722182ddd994e68407ff90a998b8eb1b7a3230a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_ecb1e66de66dce17e60682c722182ddd994e68407ff90a998b8eb1b7a3230a7b->leave($__internal_ecb1e66de66dce17e60682c722182ddd994e68407ff90a998b8eb1b7a3230a7b_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4243d13fd9fa271558d1c87985ec03cc6d452fa9e5bd171d53ad5018cdf4f2ab = $this->env->getExtension("native_profiler");
        $__internal_4243d13fd9fa271558d1c87985ec03cc6d452fa9e5bd171d53ad5018cdf4f2ab->enter($__internal_4243d13fd9fa271558d1c87985ec03cc6d452fa9e5bd171d53ad5018cdf4f2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4243d13fd9fa271558d1c87985ec03cc6d452fa9e5bd171d53ad5018cdf4f2ab->leave($__internal_4243d13fd9fa271558d1c87985ec03cc6d452fa9e5bd171d53ad5018cdf4f2ab_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_7fd8213219b273f94144a164b593157998548c9539ed733c134b8bea3a2e0b87 = $this->env->getExtension("native_profiler");
        $__internal_7fd8213219b273f94144a164b593157998548c9539ed733c134b8bea3a2e0b87->enter($__internal_7fd8213219b273f94144a164b593157998548c9539ed733c134b8bea3a2e0b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_7fd8213219b273f94144a164b593157998548c9539ed733c134b8bea3a2e0b87->leave($__internal_7fd8213219b273f94144a164b593157998548c9539ed733c134b8bea3a2e0b87_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61cb03a83d50949e4947ef00814b5f56372dcb2f40530664ee64029e7cfc9234 = $this->env->getExtension("native_profiler");
        $__internal_61cb03a83d50949e4947ef00814b5f56372dcb2f40530664ee64029e7cfc9234->enter($__internal_61cb03a83d50949e4947ef00814b5f56372dcb2f40530664ee64029e7cfc9234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_61cb03a83d50949e4947ef00814b5f56372dcb2f40530664ee64029e7cfc9234->leave($__internal_61cb03a83d50949e4947ef00814b5f56372dcb2f40530664ee64029e7cfc9234_prof);

    }

    public function getTemplateName()
    {
        return "TravelsMainBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  98 => 11,  87 => 8,  76 => 7,  65 => 5,  57 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 9,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/travelsmain/images/favicon.ico') }}" />*/
/*         {% block metatags %}{% endblock metatags %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock layout %}*/
/*     </body>*/
/*     {% block javascripts %} {% endblock javascripts %}*/
/* </html>*/
/* */

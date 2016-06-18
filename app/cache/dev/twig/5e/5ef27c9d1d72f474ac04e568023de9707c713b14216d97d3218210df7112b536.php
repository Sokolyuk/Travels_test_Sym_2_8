<?php

/* @TravelsMain/base.html.twig */
class __TwigTemplate_97ad5f546e8861987fbb3f7624affeb8bb52fec434c239798096f85262f5d15d extends Twig_Template
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
        $__internal_24e4906b0f962eb45ec2991df23895204d9abff59fb9d143d1492351ae1bf2c4 = $this->env->getExtension("native_profiler");
        $__internal_24e4906b0f962eb45ec2991df23895204d9abff59fb9d143d1492351ae1bf2c4->enter($__internal_24e4906b0f962eb45ec2991df23895204d9abff59fb9d143d1492351ae1bf2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/base.html.twig"));

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
        
        $__internal_24e4906b0f962eb45ec2991df23895204d9abff59fb9d143d1492351ae1bf2c4->leave($__internal_24e4906b0f962eb45ec2991df23895204d9abff59fb9d143d1492351ae1bf2c4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e26d4e5fd2549d4be097ca79185d51ac6a3a0361a1817b1377da041e0d91ba8d = $this->env->getExtension("native_profiler");
        $__internal_e26d4e5fd2549d4be097ca79185d51ac6a3a0361a1817b1377da041e0d91ba8d->enter($__internal_e26d4e5fd2549d4be097ca79185d51ac6a3a0361a1817b1377da041e0d91ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e26d4e5fd2549d4be097ca79185d51ac6a3a0361a1817b1377da041e0d91ba8d->leave($__internal_e26d4e5fd2549d4be097ca79185d51ac6a3a0361a1817b1377da041e0d91ba8d_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_c1657f79cb1b591e9ae9494e17e2198b998784daa2cfa1f66e51587c8a989576 = $this->env->getExtension("native_profiler");
        $__internal_c1657f79cb1b591e9ae9494e17e2198b998784daa2cfa1f66e51587c8a989576->enter($__internal_c1657f79cb1b591e9ae9494e17e2198b998784daa2cfa1f66e51587c8a989576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_c1657f79cb1b591e9ae9494e17e2198b998784daa2cfa1f66e51587c8a989576->leave($__internal_c1657f79cb1b591e9ae9494e17e2198b998784daa2cfa1f66e51587c8a989576_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b4b2ad752e5febb07c1c6c6bc4f5a19760edb2ae60af49ba5e4af5a9b923cc = $this->env->getExtension("native_profiler");
        $__internal_37b4b2ad752e5febb07c1c6c6bc4f5a19760edb2ae60af49ba5e4af5a9b923cc->enter($__internal_37b4b2ad752e5febb07c1c6c6bc4f5a19760edb2ae60af49ba5e4af5a9b923cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37b4b2ad752e5febb07c1c6c6bc4f5a19760edb2ae60af49ba5e4af5a9b923cc->leave($__internal_37b4b2ad752e5febb07c1c6c6bc4f5a19760edb2ae60af49ba5e4af5a9b923cc_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_7f4b3732dade6b2fe0363d478f4f40c98b33eb2547d1f6f6ae13d236baee3213 = $this->env->getExtension("native_profiler");
        $__internal_7f4b3732dade6b2fe0363d478f4f40c98b33eb2547d1f6f6ae13d236baee3213->enter($__internal_7f4b3732dade6b2fe0363d478f4f40c98b33eb2547d1f6f6ae13d236baee3213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_7f4b3732dade6b2fe0363d478f4f40c98b33eb2547d1f6f6ae13d236baee3213->leave($__internal_7f4b3732dade6b2fe0363d478f4f40c98b33eb2547d1f6f6ae13d236baee3213_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fb3d50d57fb8bc59b59a25463b1cdd92d052b68188afc2c624dd69162678a69 = $this->env->getExtension("native_profiler");
        $__internal_0fb3d50d57fb8bc59b59a25463b1cdd92d052b68188afc2c624dd69162678a69->enter($__internal_0fb3d50d57fb8bc59b59a25463b1cdd92d052b68188afc2c624dd69162678a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_0fb3d50d57fb8bc59b59a25463b1cdd92d052b68188afc2c624dd69162678a69->leave($__internal_0fb3d50d57fb8bc59b59a25463b1cdd92d052b68188afc2c624dd69162678a69_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/base.html.twig";
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

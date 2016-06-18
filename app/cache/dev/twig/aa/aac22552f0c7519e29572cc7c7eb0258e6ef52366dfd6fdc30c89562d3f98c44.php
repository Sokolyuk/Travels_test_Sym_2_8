<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1b665b78a5d10c06a985ced2929d7fa2182f509c4bf995ec36bdd85a3bf2ccca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856541c3a3da407836e56a1604e0e3ddfdf77c645c550e44fa54e74b4a6825f5 = $this->env->getExtension("native_profiler");
        $__internal_856541c3a3da407836e56a1604e0e3ddfdf77c645c550e44fa54e74b4a6825f5->enter($__internal_856541c3a3da407836e56a1604e0e3ddfdf77c645c550e44fa54e74b4a6825f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_856541c3a3da407836e56a1604e0e3ddfdf77c645c550e44fa54e74b4a6825f5->leave($__internal_856541c3a3da407836e56a1604e0e3ddfdf77c645c550e44fa54e74b4a6825f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

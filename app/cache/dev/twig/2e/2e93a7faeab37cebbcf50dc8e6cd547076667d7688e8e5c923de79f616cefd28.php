<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5d2df2753cb5e93ad5858d599295aa6f57b951bcf7c0ae3d445313d3718d11ad extends Twig_Template
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
        $__internal_2d9710733598fc8fbb1eb253b378f17e1599b1339cae900d7aea265974b22fda = $this->env->getExtension("native_profiler");
        $__internal_2d9710733598fc8fbb1eb253b378f17e1599b1339cae900d7aea265974b22fda->enter($__internal_2d9710733598fc8fbb1eb253b378f17e1599b1339cae900d7aea265974b22fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2d9710733598fc8fbb1eb253b378f17e1599b1339cae900d7aea265974b22fda->leave($__internal_2d9710733598fc8fbb1eb253b378f17e1599b1339cae900d7aea265974b22fda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f1e80abf6ccc224a55215b684b75a7ba9006220e0164699c64490d1065cc3827 extends Twig_Template
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
        $__internal_cf8a8cfbf0322ebbfe62fc236812cf8f0009ce21c0eb25a667153d901d6e5ee1 = $this->env->getExtension("native_profiler");
        $__internal_cf8a8cfbf0322ebbfe62fc236812cf8f0009ce21c0eb25a667153d901d6e5ee1->enter($__internal_cf8a8cfbf0322ebbfe62fc236812cf8f0009ce21c0eb25a667153d901d6e5ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf8a8cfbf0322ebbfe62fc236812cf8f0009ce21c0eb25a667153d901d6e5ee1->leave($__internal_cf8a8cfbf0322ebbfe62fc236812cf8f0009ce21c0eb25a667153d901d6e5ee1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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

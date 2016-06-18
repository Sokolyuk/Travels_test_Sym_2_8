<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_4983b0552381d75edb40a3378e0845b6644d804dc5b29faf8ffe8659123eb5d1 extends Twig_Template
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
        $__internal_1721492f9b6d8d7a5f436ae4129bd032fdf293863e660202de9fbe965e5769a1 = $this->env->getExtension("native_profiler");
        $__internal_1721492f9b6d8d7a5f436ae4129bd032fdf293863e660202de9fbe965e5769a1->enter($__internal_1721492f9b6d8d7a5f436ae4129bd032fdf293863e660202de9fbe965e5769a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1721492f9b6d8d7a5f436ae4129bd032fdf293863e660202de9fbe965e5769a1->leave($__internal_1721492f9b6d8d7a5f436ae4129bd032fdf293863e660202de9fbe965e5769a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

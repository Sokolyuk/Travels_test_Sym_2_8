<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7ed8b93f37926233e3c78deb45c2dbb1e66a49b1b07ce573c79942c833ed58e6 extends Twig_Template
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
        $__internal_6bdd290f681b67c1a42733ff905dd3f3198702d0596d08045fbcc57cba5f3915 = $this->env->getExtension("native_profiler");
        $__internal_6bdd290f681b67c1a42733ff905dd3f3198702d0596d08045fbcc57cba5f3915->enter($__internal_6bdd290f681b67c1a42733ff905dd3f3198702d0596d08045fbcc57cba5f3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6bdd290f681b67c1a42733ff905dd3f3198702d0596d08045fbcc57cba5f3915->leave($__internal_6bdd290f681b67c1a42733ff905dd3f3198702d0596d08045fbcc57cba5f3915_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3f75c69b0b867746b9b06fb7988140646ba5294442f65e787681e688b391c4d9 extends Twig_Template
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
        $__internal_f0c3ad5ffaa16406e9d7bb7ebc2ff13a35eb268504bc8b582be9c12598f021dd = $this->env->getExtension("native_profiler");
        $__internal_f0c3ad5ffaa16406e9d7bb7ebc2ff13a35eb268504bc8b582be9c12598f021dd->enter($__internal_f0c3ad5ffaa16406e9d7bb7ebc2ff13a35eb268504bc8b582be9c12598f021dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f0c3ad5ffaa16406e9d7bb7ebc2ff13a35eb268504bc8b582be9c12598f021dd->leave($__internal_f0c3ad5ffaa16406e9d7bb7ebc2ff13a35eb268504bc8b582be9c12598f021dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

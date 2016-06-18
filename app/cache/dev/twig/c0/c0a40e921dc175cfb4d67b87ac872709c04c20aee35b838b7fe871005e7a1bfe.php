<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_499d33531a3a335ee92f79de9538aa293d2540d11e186ddc9ac0d001c7661868 extends Twig_Template
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
        $__internal_cc536358ae6444b0f86a627b4e05a98a285048a08fa6ea4fecf8e7eb49d10753 = $this->env->getExtension("native_profiler");
        $__internal_cc536358ae6444b0f86a627b4e05a98a285048a08fa6ea4fecf8e7eb49d10753->enter($__internal_cc536358ae6444b0f86a627b4e05a98a285048a08fa6ea4fecf8e7eb49d10753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc536358ae6444b0f86a627b4e05a98a285048a08fa6ea4fecf8e7eb49d10753->leave($__internal_cc536358ae6444b0f86a627b4e05a98a285048a08fa6ea4fecf8e7eb49d10753_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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

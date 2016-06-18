<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1be3743f6cb18bb0ba9a56a33cf44ba810fce5191bbd44c81eb749cd96386d80 extends Twig_Template
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
        $__internal_5310e6568760dbbc42fb0bccfd4761a1866324eba6b62737d3353987f2f1c94e = $this->env->getExtension("native_profiler");
        $__internal_5310e6568760dbbc42fb0bccfd4761a1866324eba6b62737d3353987f2f1c94e->enter($__internal_5310e6568760dbbc42fb0bccfd4761a1866324eba6b62737d3353987f2f1c94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5310e6568760dbbc42fb0bccfd4761a1866324eba6b62737d3353987f2f1c94e->leave($__internal_5310e6568760dbbc42fb0bccfd4761a1866324eba6b62737d3353987f2f1c94e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

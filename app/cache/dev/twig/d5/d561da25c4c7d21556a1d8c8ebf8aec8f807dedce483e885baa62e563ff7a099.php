<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_463d086e49f21fd4c39708874667ee5876306f1ad5ed0005ff73ab333b4694e9 extends Twig_Template
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
        $__internal_e4517d14a5295723ce73382fb4e6cbc84708388d8f8ae996c73915b007974808 = $this->env->getExtension("native_profiler");
        $__internal_e4517d14a5295723ce73382fb4e6cbc84708388d8f8ae996c73915b007974808->enter($__internal_e4517d14a5295723ce73382fb4e6cbc84708388d8f8ae996c73915b007974808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e4517d14a5295723ce73382fb4e6cbc84708388d8f8ae996c73915b007974808->leave($__internal_e4517d14a5295723ce73382fb4e6cbc84708388d8f8ae996c73915b007974808_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

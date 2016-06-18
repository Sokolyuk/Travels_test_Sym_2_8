<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6cee5013e5862fa2bdaa92b65fe7ec1b3d9132cd07ed9ceee582c2be0e88f04f extends Twig_Template
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
        $__internal_d24cb9b318f9212ef8b4d78ec1ccb053cdaeb1fe8809b21290b20b8698539b41 = $this->env->getExtension("native_profiler");
        $__internal_d24cb9b318f9212ef8b4d78ec1ccb053cdaeb1fe8809b21290b20b8698539b41->enter($__internal_d24cb9b318f9212ef8b4d78ec1ccb053cdaeb1fe8809b21290b20b8698539b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d24cb9b318f9212ef8b4d78ec1ccb053cdaeb1fe8809b21290b20b8698539b41->leave($__internal_d24cb9b318f9212ef8b4d78ec1ccb053cdaeb1fe8809b21290b20b8698539b41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

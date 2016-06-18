<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_642eff160b57692f274b524ad1fdae3fd5f65349650e7e01cfcb34500b857746 extends Twig_Template
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
        $__internal_8ed484f454e88b0946ddf928305d7797da84f557a4cf086825ca3dd2b32a6b45 = $this->env->getExtension("native_profiler");
        $__internal_8ed484f454e88b0946ddf928305d7797da84f557a4cf086825ca3dd2b32a6b45->enter($__internal_8ed484f454e88b0946ddf928305d7797da84f557a4cf086825ca3dd2b32a6b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8ed484f454e88b0946ddf928305d7797da84f557a4cf086825ca3dd2b32a6b45->leave($__internal_8ed484f454e88b0946ddf928305d7797da84f557a4cf086825ca3dd2b32a6b45_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

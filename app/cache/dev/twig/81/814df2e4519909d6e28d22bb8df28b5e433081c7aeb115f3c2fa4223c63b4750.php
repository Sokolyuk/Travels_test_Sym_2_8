<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9ffd31965520d849fc2c8001181ddfd9fa31946d55c791771d948074de4e244b extends Twig_Template
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
        $__internal_174a31ba8168f38e3eb5a5ac4f11259aa476bccf0beaedfb024cbe32673df34d = $this->env->getExtension("native_profiler");
        $__internal_174a31ba8168f38e3eb5a5ac4f11259aa476bccf0beaedfb024cbe32673df34d->enter($__internal_174a31ba8168f38e3eb5a5ac4f11259aa476bccf0beaedfb024cbe32673df34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_174a31ba8168f38e3eb5a5ac4f11259aa476bccf0beaedfb024cbe32673df34d->leave($__internal_174a31ba8168f38e3eb5a5ac4f11259aa476bccf0beaedfb024cbe32673df34d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

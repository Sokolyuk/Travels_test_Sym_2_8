<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_117536a6489d44fd9e4a2e3a9cd9b7b77f42d134a6b73a0d5aec80cfbaef714b extends Twig_Template
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
        $__internal_6b8b5d87736297b25701612eba676726ec6dfcae4e51d10546a55473ed9469a0 = $this->env->getExtension("native_profiler");
        $__internal_6b8b5d87736297b25701612eba676726ec6dfcae4e51d10546a55473ed9469a0->enter($__internal_6b8b5d87736297b25701612eba676726ec6dfcae4e51d10546a55473ed9469a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6b8b5d87736297b25701612eba676726ec6dfcae4e51d10546a55473ed9469a0->leave($__internal_6b8b5d87736297b25701612eba676726ec6dfcae4e51d10546a55473ed9469a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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

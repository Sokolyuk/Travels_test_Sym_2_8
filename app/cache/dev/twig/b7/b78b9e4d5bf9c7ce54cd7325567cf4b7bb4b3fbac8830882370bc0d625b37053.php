<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ce8a62f5b0df47283c24018c2675c8c2c57cd6d40891c2376798f3ac0ee4640e extends Twig_Template
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
        $__internal_00d925c59076bf123a1965a280cc91faf5d3c6c6b9d3a5211c5cd6c11bd4f862 = $this->env->getExtension("native_profiler");
        $__internal_00d925c59076bf123a1965a280cc91faf5d3c6c6b9d3a5211c5cd6c11bd4f862->enter($__internal_00d925c59076bf123a1965a280cc91faf5d3c6c6b9d3a5211c5cd6c11bd4f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_00d925c59076bf123a1965a280cc91faf5d3c6c6b9d3a5211c5cd6c11bd4f862->leave($__internal_00d925c59076bf123a1965a280cc91faf5d3c6c6b9d3a5211c5cd6c11bd4f862_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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

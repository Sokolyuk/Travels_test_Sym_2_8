<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_020927e6afdd35b1270ca1c2ca274665e2516108869de9ac9b536aa9e1e1d3f5 extends Twig_Template
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
        $__internal_b3a95be14a4f09501cbb8f5abf12b1664f89eedf65396c4c7f1ac0ba76dbc348 = $this->env->getExtension("native_profiler");
        $__internal_b3a95be14a4f09501cbb8f5abf12b1664f89eedf65396c4c7f1ac0ba76dbc348->enter($__internal_b3a95be14a4f09501cbb8f5abf12b1664f89eedf65396c4c7f1ac0ba76dbc348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3a95be14a4f09501cbb8f5abf12b1664f89eedf65396c4c7f1ac0ba76dbc348->leave($__internal_b3a95be14a4f09501cbb8f5abf12b1664f89eedf65396c4c7f1ac0ba76dbc348_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

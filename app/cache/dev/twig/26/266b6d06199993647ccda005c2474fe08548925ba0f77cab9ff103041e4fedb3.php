<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_99efd039dfcb00c6dfaee1b54e9ba9d4247fb31a4d943ecbc759192f7cd6f982 extends Twig_Template
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
        $__internal_f73d45afb5df6a4872cbbe23adbdb4f0180a91d29f8c8eec47c5ff60f16810fc = $this->env->getExtension("native_profiler");
        $__internal_f73d45afb5df6a4872cbbe23adbdb4f0180a91d29f8c8eec47c5ff60f16810fc->enter($__internal_f73d45afb5df6a4872cbbe23adbdb4f0180a91d29f8c8eec47c5ff60f16810fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f73d45afb5df6a4872cbbe23adbdb4f0180a91d29f8c8eec47c5ff60f16810fc->leave($__internal_f73d45afb5df6a4872cbbe23adbdb4f0180a91d29f8c8eec47c5ff60f16810fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9266e3cb99383566562d82284264adb27fab9361e6a330523859b0e680cc8dfd extends Twig_Template
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
        $__internal_893b3a26c24c0f061626090b9ebe5837cdf13a08329f9893d453abf5010dda5e = $this->env->getExtension("native_profiler");
        $__internal_893b3a26c24c0f061626090b9ebe5837cdf13a08329f9893d453abf5010dda5e->enter($__internal_893b3a26c24c0f061626090b9ebe5837cdf13a08329f9893d453abf5010dda5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_893b3a26c24c0f061626090b9ebe5837cdf13a08329f9893d453abf5010dda5e->leave($__internal_893b3a26c24c0f061626090b9ebe5837cdf13a08329f9893d453abf5010dda5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

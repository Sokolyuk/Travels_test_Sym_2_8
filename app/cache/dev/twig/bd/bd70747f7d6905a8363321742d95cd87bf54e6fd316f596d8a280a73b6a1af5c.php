<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_08e169a2f39ca8305f7811d3f47a2a1328869fea4f5cd95fabed10576050906e extends Twig_Template
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
        $__internal_244a00bdb030304f0bd789685d9d9539ea8dea919c4ea69788168d0328b8801f = $this->env->getExtension("native_profiler");
        $__internal_244a00bdb030304f0bd789685d9d9539ea8dea919c4ea69788168d0328b8801f->enter($__internal_244a00bdb030304f0bd789685d9d9539ea8dea919c4ea69788168d0328b8801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_244a00bdb030304f0bd789685d9d9539ea8dea919c4ea69788168d0328b8801f->leave($__internal_244a00bdb030304f0bd789685d9d9539ea8dea919c4ea69788168d0328b8801f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

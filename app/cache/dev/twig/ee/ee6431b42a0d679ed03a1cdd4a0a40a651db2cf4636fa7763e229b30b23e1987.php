<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dc98f5a09bfe1964efa58ede1652151a74628e0200dde31c98c79f147a54ddba extends Twig_Template
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
        $__internal_6dbd5b1cb1f654c44d1db828e8b0990cd9fdc4fa70c1e9efbd72297a75687ec8 = $this->env->getExtension("native_profiler");
        $__internal_6dbd5b1cb1f654c44d1db828e8b0990cd9fdc4fa70c1e9efbd72297a75687ec8->enter($__internal_6dbd5b1cb1f654c44d1db828e8b0990cd9fdc4fa70c1e9efbd72297a75687ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6dbd5b1cb1f654c44d1db828e8b0990cd9fdc4fa70c1e9efbd72297a75687ec8->leave($__internal_6dbd5b1cb1f654c44d1db828e8b0990cd9fdc4fa70c1e9efbd72297a75687ec8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

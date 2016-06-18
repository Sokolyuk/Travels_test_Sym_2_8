<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4f972b53ec3bd163c22d0492b76d2c224a7ba1bb89b924ce90a418c95b21249b extends Twig_Template
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
        $__internal_f8d78ab9da9c7c44f4cb6d4d66da05d00b9a551f212067d4aba535764dcf22c2 = $this->env->getExtension("native_profiler");
        $__internal_f8d78ab9da9c7c44f4cb6d4d66da05d00b9a551f212067d4aba535764dcf22c2->enter($__internal_f8d78ab9da9c7c44f4cb6d4d66da05d00b9a551f212067d4aba535764dcf22c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f8d78ab9da9c7c44f4cb6d4d66da05d00b9a551f212067d4aba535764dcf22c2->leave($__internal_f8d78ab9da9c7c44f4cb6d4d66da05d00b9a551f212067d4aba535764dcf22c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

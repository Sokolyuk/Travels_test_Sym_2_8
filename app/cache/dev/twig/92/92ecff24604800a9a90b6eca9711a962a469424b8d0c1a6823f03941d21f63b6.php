<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e0e1424e8221d317bdf3d83ed1d0057a128c5633bc811c27f13e2ef4060c6f6b extends Twig_Template
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
        $__internal_508626814e36214453bf91f89c350e7dc6ed7d5961960d0f8a056c7d86342e7e = $this->env->getExtension("native_profiler");
        $__internal_508626814e36214453bf91f89c350e7dc6ed7d5961960d0f8a056c7d86342e7e->enter($__internal_508626814e36214453bf91f89c350e7dc6ed7d5961960d0f8a056c7d86342e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_508626814e36214453bf91f89c350e7dc6ed7d5961960d0f8a056c7d86342e7e->leave($__internal_508626814e36214453bf91f89c350e7dc6ed7d5961960d0f8a056c7d86342e7e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

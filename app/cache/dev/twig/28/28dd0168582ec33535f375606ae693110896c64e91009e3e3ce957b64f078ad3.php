<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_708968a952c0f7eb87859abae15f372b567245a0e4a92faf5e9c935f64194c45 extends Twig_Template
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
        $__internal_8f6beef687f973ee1f89326673ad9762933497606d03ec3f0fcf59ffa8d78398 = $this->env->getExtension("native_profiler");
        $__internal_8f6beef687f973ee1f89326673ad9762933497606d03ec3f0fcf59ffa8d78398->enter($__internal_8f6beef687f973ee1f89326673ad9762933497606d03ec3f0fcf59ffa8d78398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8f6beef687f973ee1f89326673ad9762933497606d03ec3f0fcf59ffa8d78398->leave($__internal_8f6beef687f973ee1f89326673ad9762933497606d03ec3f0fcf59ffa8d78398_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

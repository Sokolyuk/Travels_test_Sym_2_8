<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7c0fed05fd873415386130ab160c68e16db4afd568b9b86b0b8ec70e17e928e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_966d78350e9bc4d183244f012ca8f1a08f39b5f7f8fb738dc2b6e0a52db86e76 = $this->env->getExtension("native_profiler");
        $__internal_966d78350e9bc4d183244f012ca8f1a08f39b5f7f8fb738dc2b6e0a52db86e76->enter($__internal_966d78350e9bc4d183244f012ca8f1a08f39b5f7f8fb738dc2b6e0a52db86e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_966d78350e9bc4d183244f012ca8f1a08f39b5f7f8fb738dc2b6e0a52db86e76->leave($__internal_966d78350e9bc4d183244f012ca8f1a08f39b5f7f8fb738dc2b6e0a52db86e76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3166c0e57ed3d317fedacc0e2fbe37496c483d947f21e59a1a5a63ace5425034 = $this->env->getExtension("native_profiler");
        $__internal_3166c0e57ed3d317fedacc0e2fbe37496c483d947f21e59a1a5a63ace5425034->enter($__internal_3166c0e57ed3d317fedacc0e2fbe37496c483d947f21e59a1a5a63ace5425034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3166c0e57ed3d317fedacc0e2fbe37496c483d947f21e59a1a5a63ace5425034->leave($__internal_3166c0e57ed3d317fedacc0e2fbe37496c483d947f21e59a1a5a63ace5425034_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa3d859e8bb4dfa62f2dd7eea07503ce223563da3917bb9b7b9fbd5db790e1a6 = $this->env->getExtension("native_profiler");
        $__internal_fa3d859e8bb4dfa62f2dd7eea07503ce223563da3917bb9b7b9fbd5db790e1a6->enter($__internal_fa3d859e8bb4dfa62f2dd7eea07503ce223563da3917bb9b7b9fbd5db790e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa3d859e8bb4dfa62f2dd7eea07503ce223563da3917bb9b7b9fbd5db790e1a6->leave($__internal_fa3d859e8bb4dfa62f2dd7eea07503ce223563da3917bb9b7b9fbd5db790e1a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86857ea0dd35513b9a6d72fde578f49bed4824e880ee7733017beee448a87a85 = $this->env->getExtension("native_profiler");
        $__internal_86857ea0dd35513b9a6d72fde578f49bed4824e880ee7733017beee448a87a85->enter($__internal_86857ea0dd35513b9a6d72fde578f49bed4824e880ee7733017beee448a87a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_86857ea0dd35513b9a6d72fde578f49bed4824e880ee7733017beee448a87a85->leave($__internal_86857ea0dd35513b9a6d72fde578f49bed4824e880ee7733017beee448a87a85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

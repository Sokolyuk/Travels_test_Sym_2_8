<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9fa64800f7f0ae2f2a04a1ac4ec8ec7bc552c6f2b33ed5dda0d6bc9324cdb280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c8cc1ca5a9d9b34ea039b2d3f18ac15b6bd0d1087f159c30ddf9030d18b232ff = $this->env->getExtension("native_profiler");
        $__internal_c8cc1ca5a9d9b34ea039b2d3f18ac15b6bd0d1087f159c30ddf9030d18b232ff->enter($__internal_c8cc1ca5a9d9b34ea039b2d3f18ac15b6bd0d1087f159c30ddf9030d18b232ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8cc1ca5a9d9b34ea039b2d3f18ac15b6bd0d1087f159c30ddf9030d18b232ff->leave($__internal_c8cc1ca5a9d9b34ea039b2d3f18ac15b6bd0d1087f159c30ddf9030d18b232ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_528085bc2f11448d1653c6e4def62d7ca0ece2c956d73fa3257e1c3c7045d5ed = $this->env->getExtension("native_profiler");
        $__internal_528085bc2f11448d1653c6e4def62d7ca0ece2c956d73fa3257e1c3c7045d5ed->enter($__internal_528085bc2f11448d1653c6e4def62d7ca0ece2c956d73fa3257e1c3c7045d5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_528085bc2f11448d1653c6e4def62d7ca0ece2c956d73fa3257e1c3c7045d5ed->leave($__internal_528085bc2f11448d1653c6e4def62d7ca0ece2c956d73fa3257e1c3c7045d5ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_870b4b9acae90947d6b1c2c6875974ebe5c3714eeed1ef4a72ef67bd615a90e9 = $this->env->getExtension("native_profiler");
        $__internal_870b4b9acae90947d6b1c2c6875974ebe5c3714eeed1ef4a72ef67bd615a90e9->enter($__internal_870b4b9acae90947d6b1c2c6875974ebe5c3714eeed1ef4a72ef67bd615a90e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_870b4b9acae90947d6b1c2c6875974ebe5c3714eeed1ef4a72ef67bd615a90e9->leave($__internal_870b4b9acae90947d6b1c2c6875974ebe5c3714eeed1ef4a72ef67bd615a90e9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd947cda79457b7fbcb99c0f269e43c550f39e41d5930482026d0498afa5b6c2 = $this->env->getExtension("native_profiler");
        $__internal_dd947cda79457b7fbcb99c0f269e43c550f39e41d5930482026d0498afa5b6c2->enter($__internal_dd947cda79457b7fbcb99c0f269e43c550f39e41d5930482026d0498afa5b6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dd947cda79457b7fbcb99c0f269e43c550f39e41d5930482026d0498afa5b6c2->leave($__internal_dd947cda79457b7fbcb99c0f269e43c550f39e41d5930482026d0498afa5b6c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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

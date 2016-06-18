<?php

/* TravelsMainBundle::layout.html.twig */
class __TwigTemplate_be463a08b300f42d5085fb314b9335d2ce2f5c067bc1559b113e34191a7661dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::base.html.twig", "TravelsMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TravelsMainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d471730067bb63355331eeefa84a4db124d9850f3cd08f5297faca06211731bb = $this->env->getExtension("native_profiler");
        $__internal_d471730067bb63355331eeefa84a4db124d9850f3cd08f5297faca06211731bb->enter($__internal_d471730067bb63355331eeefa84a4db124d9850f3cd08f5297faca06211731bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d471730067bb63355331eeefa84a4db124d9850f3cd08f5297faca06211731bb->leave($__internal_d471730067bb63355331eeefa84a4db124d9850f3cd08f5297faca06211731bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e99e4c2f736a55d3031c859226754f3cbadbe41a67c7566d32d53b7607ae353 = $this->env->getExtension("native_profiler");
        $__internal_0e99e4c2f736a55d3031c859226754f3cbadbe41a67c7566d32d53b7607ae353->enter($__internal_0e99e4c2f736a55d3031c859226754f3cbadbe41a67c7566d32d53b7607ae353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0e99e4c2f736a55d3031c859226754f3cbadbe41a67c7566d32d53b7607ae353->leave($__internal_0e99e4c2f736a55d3031c859226754f3cbadbe41a67c7566d32d53b7607ae353_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e533d43904926b7bc7f90a9910b5f6fdcec79f0195f86d597ab71ac30a890ab = $this->env->getExtension("native_profiler");
        $__internal_0e533d43904926b7bc7f90a9910b5f6fdcec79f0195f86d597ab71ac30a890ab->enter($__internal_0e533d43904926b7bc7f90a9910b5f6fdcec79f0195f86d597ab71ac30a890ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_0e533d43904926b7bc7f90a9910b5f6fdcec79f0195f86d597ab71ac30a890ab->leave($__internal_0e533d43904926b7bc7f90a9910b5f6fdcec79f0195f86d597ab71ac30a890ab_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_3b46e77c6f0b8c3f9e8ff105a9fbba1fb48ab00fb57504946813ce657452b7f3 = $this->env->getExtension("native_profiler");
        $__internal_3b46e77c6f0b8c3f9e8ff105a9fbba1fb48ab00fb57504946813ce657452b7f3->enter($__internal_3b46e77c6f0b8c3f9e8ff105a9fbba1fb48ab00fb57504946813ce657452b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "
";
        
        $__internal_3b46e77c6f0b8c3f9e8ff105a9fbba1fb48ab00fb57504946813ce657452b7f3->leave($__internal_3b46e77c6f0b8c3f9e8ff105a9fbba1fb48ab00fb57504946813ce657452b7f3_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_cc2df54d958ca46bcc0055a9ec0ad6521ff3fc1aa7f83c789d64e71f950f7991 = $this->env->getExtension("native_profiler");
        $__internal_cc2df54d958ca46bcc0055a9ec0ad6521ff3fc1aa7f83c789d64e71f950f7991->enter($__internal_cc2df54d958ca46bcc0055a9ec0ad6521ff3fc1aa7f83c789d64e71f950f7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "TravelsMainBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_cc2df54d958ca46bcc0055a9ec0ad6521ff3fc1aa7f83c789d64e71f950f7991->leave($__internal_cc2df54d958ca46bcc0055a9ec0ad6521ff3fc1aa7f83c789d64e71f950f7991_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_ceadaa45f48e6d8a8cf37cba5c62d5db7b3abc0e70e95d3aa9e10f16c6747693 = $this->env->getExtension("native_profiler");
        $__internal_ceadaa45f48e6d8a8cf37cba5c62d5db7b3abc0e70e95d3aa9e10f16c6747693->enter($__internal_ceadaa45f48e6d8a8cf37cba5c62d5db7b3abc0e70e95d3aa9e10f16c6747693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_ceadaa45f48e6d8a8cf37cba5c62d5db7b3abc0e70e95d3aa9e10f16c6747693->leave($__internal_ceadaa45f48e6d8a8cf37cba5c62d5db7b3abc0e70e95d3aa9e10f16c6747693_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e81ffe043f7f33ea026c0a832559582354b9424eeebf6aaada06175cb925ee1e = $this->env->getExtension("native_profiler");
        $__internal_e81ffe043f7f33ea026c0a832559582354b9424eeebf6aaada06175cb925ee1e->enter($__internal_e81ffe043f7f33ea026c0a832559582354b9424eeebf6aaada06175cb925ee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "TravelsMainBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_e81ffe043f7f33ea026c0a832559582354b9424eeebf6aaada06175cb925ee1e->leave($__internal_e81ffe043f7f33ea026c0a832559582354b9424eeebf6aaada06175cb925ee1e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b55af1645758e03d799bc14d69d03d25f4fbb9322b47fe6fc4c08c707ec2241f = $this->env->getExtension("native_profiler");
        $__internal_b55af1645758e03d799bc14d69d03d25f4fbb9322b47fe6fc4c08c707ec2241f->enter($__internal_b55af1645758e03d799bc14d69d03d25f4fbb9322b47fe6fc4c08c707ec2241f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b55af1645758e03d799bc14d69d03d25f4fbb9322b47fe6fc4c08c707ec2241f->leave($__internal_b55af1645758e03d799bc14d69d03d25f4fbb9322b47fe6fc4c08c707ec2241f_prof);

    }

    public function getTemplateName()
    {
        return "TravelsMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 26,  135 => 22,  132 => 21,  126 => 20,  119 => 18,  113 => 17,  106 => 15,  103 => 14,  97 => 13,  89 => 23,  87 => 20,  84 => 19,  82 => 17,  79 => 16,  77 => 13,  74 => 12,  68 => 11,  57 => 7,  51 => 6,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/travelsmain/css/travels.css') }}" />*/
/* 	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700"/>*/
/* {% endblock stylesheets %}*/
/* */
/* {% block layout %}*/
/* */
/*     {% block header %}*/
/* 		{% include 'TravelsMainBundle::layout/header.html.twig' %}*/
/*     {% endblock header %}*/
/* */
/*     {% block content %}*/
/*     {% endblock content %}*/
/* */
/*     {% block footer %}*/
/*         {% include 'TravelsMainBundle::layout/footer.html.twig' %}*/
/*     {% endblock footer %}*/
/* */
/* {% endblock layout %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock javascripts %}*/
/* */

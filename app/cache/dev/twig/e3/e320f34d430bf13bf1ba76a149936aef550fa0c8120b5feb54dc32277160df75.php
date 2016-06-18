<?php

/* @TravelsMain/layout.html.twig */
class __TwigTemplate_521d51ea64a1b8b137de917309cd7e55a08cd30cb8e1e77220be378c090b16e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::base.html.twig", "@TravelsMain/layout.html.twig", 1);
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
        $__internal_c84d1e3880f761add2df87b070b6f28cafb1fb961d9a134d9e6143588cdec0b3 = $this->env->getExtension("native_profiler");
        $__internal_c84d1e3880f761add2df87b070b6f28cafb1fb961d9a134d9e6143588cdec0b3->enter($__internal_c84d1e3880f761add2df87b070b6f28cafb1fb961d9a134d9e6143588cdec0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84d1e3880f761add2df87b070b6f28cafb1fb961d9a134d9e6143588cdec0b3->leave($__internal_c84d1e3880f761add2df87b070b6f28cafb1fb961d9a134d9e6143588cdec0b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57ebc11e54c2e96a802ad6756563718148af3856aba62d27a502810f6ed65ac6 = $this->env->getExtension("native_profiler");
        $__internal_57ebc11e54c2e96a802ad6756563718148af3856aba62d27a502810f6ed65ac6->enter($__internal_57ebc11e54c2e96a802ad6756563718148af3856aba62d27a502810f6ed65ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_57ebc11e54c2e96a802ad6756563718148af3856aba62d27a502810f6ed65ac6->leave($__internal_57ebc11e54c2e96a802ad6756563718148af3856aba62d27a502810f6ed65ac6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2a05ad3716c6a8922c61ec88cec920284d4bf47561a8e40c9ede5a87746c806 = $this->env->getExtension("native_profiler");
        $__internal_b2a05ad3716c6a8922c61ec88cec920284d4bf47561a8e40c9ede5a87746c806->enter($__internal_b2a05ad3716c6a8922c61ec88cec920284d4bf47561a8e40c9ede5a87746c806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_b2a05ad3716c6a8922c61ec88cec920284d4bf47561a8e40c9ede5a87746c806->leave($__internal_b2a05ad3716c6a8922c61ec88cec920284d4bf47561a8e40c9ede5a87746c806_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_8953582a8f44bc0e1b092a9ea34d5e9197ebcdedf5cc3e458d464c3660b5d8df = $this->env->getExtension("native_profiler");
        $__internal_8953582a8f44bc0e1b092a9ea34d5e9197ebcdedf5cc3e458d464c3660b5d8df->enter($__internal_8953582a8f44bc0e1b092a9ea34d5e9197ebcdedf5cc3e458d464c3660b5d8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

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
        
        $__internal_8953582a8f44bc0e1b092a9ea34d5e9197ebcdedf5cc3e458d464c3660b5d8df->leave($__internal_8953582a8f44bc0e1b092a9ea34d5e9197ebcdedf5cc3e458d464c3660b5d8df_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_c000298574696648561c7fe6e14995cd0ea04115497204fa4427bd7a05ef1992 = $this->env->getExtension("native_profiler");
        $__internal_c000298574696648561c7fe6e14995cd0ea04115497204fa4427bd7a05ef1992->enter($__internal_c000298574696648561c7fe6e14995cd0ea04115497204fa4427bd7a05ef1992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "@TravelsMain/layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_c000298574696648561c7fe6e14995cd0ea04115497204fa4427bd7a05ef1992->leave($__internal_c000298574696648561c7fe6e14995cd0ea04115497204fa4427bd7a05ef1992_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_91cec782a28a14624616c2a0d99acff34e0e3771805bac2c3c81674a24c7bc74 = $this->env->getExtension("native_profiler");
        $__internal_91cec782a28a14624616c2a0d99acff34e0e3771805bac2c3c81674a24c7bc74->enter($__internal_91cec782a28a14624616c2a0d99acff34e0e3771805bac2c3c81674a24c7bc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_91cec782a28a14624616c2a0d99acff34e0e3771805bac2c3c81674a24c7bc74->leave($__internal_91cec782a28a14624616c2a0d99acff34e0e3771805bac2c3c81674a24c7bc74_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a869df38f57bb71002179feb18f660e0d6295f02d46fb5e1d68291f9987fc82 = $this->env->getExtension("native_profiler");
        $__internal_6a869df38f57bb71002179feb18f660e0d6295f02d46fb5e1d68291f9987fc82->enter($__internal_6a869df38f57bb71002179feb18f660e0d6295f02d46fb5e1d68291f9987fc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "@TravelsMain/layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_6a869df38f57bb71002179feb18f660e0d6295f02d46fb5e1d68291f9987fc82->leave($__internal_6a869df38f57bb71002179feb18f660e0d6295f02d46fb5e1d68291f9987fc82_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_493b5a252f49e47fc85697d12ffdc1baacb723f40daf70c1246087de0c12e85b = $this->env->getExtension("native_profiler");
        $__internal_493b5a252f49e47fc85697d12ffdc1baacb723f40daf70c1246087de0c12e85b->enter($__internal_493b5a252f49e47fc85697d12ffdc1baacb723f40daf70c1246087de0c12e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_493b5a252f49e47fc85697d12ffdc1baacb723f40daf70c1246087de0c12e85b->leave($__internal_493b5a252f49e47fc85697d12ffdc1baacb723f40daf70c1246087de0c12e85b_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/layout.html.twig";
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

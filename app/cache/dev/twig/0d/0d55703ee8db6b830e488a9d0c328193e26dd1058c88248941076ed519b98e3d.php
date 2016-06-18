<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_16b4e7ccd67e9cdcee0df48d176c87e4fc21de1f55509ccb8047f7a1314501d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_946b2dd0a1bead3f39a196e4e7c337ded3926a373dff9a4cff4fc4d7a1c2dfce = $this->env->getExtension("native_profiler");
        $__internal_946b2dd0a1bead3f39a196e4e7c337ded3926a373dff9a4cff4fc4d7a1c2dfce->enter($__internal_946b2dd0a1bead3f39a196e4e7c337ded3926a373dff9a4cff4fc4d7a1c2dfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946b2dd0a1bead3f39a196e4e7c337ded3926a373dff9a4cff4fc4d7a1c2dfce->leave($__internal_946b2dd0a1bead3f39a196e4e7c337ded3926a373dff9a4cff4fc4d7a1c2dfce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b73663ce9121424327c43a6644575cd04511ccacf3571b784b54e4336e0b26e = $this->env->getExtension("native_profiler");
        $__internal_1b73663ce9121424327c43a6644575cd04511ccacf3571b784b54e4336e0b26e->enter($__internal_1b73663ce9121424327c43a6644575cd04511ccacf3571b784b54e4336e0b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b73663ce9121424327c43a6644575cd04511ccacf3571b784b54e4336e0b26e->leave($__internal_1b73663ce9121424327c43a6644575cd04511ccacf3571b784b54e4336e0b26e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51605777f1d507f97b6d11b5fce83f41bcadf0abf006c71c0743238204f8c82a = $this->env->getExtension("native_profiler");
        $__internal_51605777f1d507f97b6d11b5fce83f41bcadf0abf006c71c0743238204f8c82a->enter($__internal_51605777f1d507f97b6d11b5fce83f41bcadf0abf006c71c0743238204f8c82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51605777f1d507f97b6d11b5fce83f41bcadf0abf006c71c0743238204f8c82a->leave($__internal_51605777f1d507f97b6d11b5fce83f41bcadf0abf006c71c0743238204f8c82a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b97aa30d0216e67b597b755976b240d608c6d9679f5b92dcc2a4eda003b1e34b = $this->env->getExtension("native_profiler");
        $__internal_b97aa30d0216e67b597b755976b240d608c6d9679f5b92dcc2a4eda003b1e34b->enter($__internal_b97aa30d0216e67b597b755976b240d608c6d9679f5b92dcc2a4eda003b1e34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b97aa30d0216e67b597b755976b240d608c6d9679f5b92dcc2a4eda003b1e34b->leave($__internal_b97aa30d0216e67b597b755976b240d608c6d9679f5b92dcc2a4eda003b1e34b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

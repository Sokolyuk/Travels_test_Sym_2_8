<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0fc589e62a06b47440939dc8a95558fe9c18bfa58ea0a33c6d7bb4e05a3b562a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1f8a02f90515e1409ea6efe0f8c3231979eb9923b9654065f71ecf0974a7d58b = $this->env->getExtension("native_profiler");
        $__internal_1f8a02f90515e1409ea6efe0f8c3231979eb9923b9654065f71ecf0974a7d58b->enter($__internal_1f8a02f90515e1409ea6efe0f8c3231979eb9923b9654065f71ecf0974a7d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8a02f90515e1409ea6efe0f8c3231979eb9923b9654065f71ecf0974a7d58b->leave($__internal_1f8a02f90515e1409ea6efe0f8c3231979eb9923b9654065f71ecf0974a7d58b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a19a3ed04767cc73a8066da27438fc0b68dc292f5b513c3ed3b79fecc73a13c = $this->env->getExtension("native_profiler");
        $__internal_6a19a3ed04767cc73a8066da27438fc0b68dc292f5b513c3ed3b79fecc73a13c->enter($__internal_6a19a3ed04767cc73a8066da27438fc0b68dc292f5b513c3ed3b79fecc73a13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a19a3ed04767cc73a8066da27438fc0b68dc292f5b513c3ed3b79fecc73a13c->leave($__internal_6a19a3ed04767cc73a8066da27438fc0b68dc292f5b513c3ed3b79fecc73a13c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cedb56b3394b84c19b497cf67cae0e86fb3b534373bd455e52c3be2e8963e8d = $this->env->getExtension("native_profiler");
        $__internal_1cedb56b3394b84c19b497cf67cae0e86fb3b534373bd455e52c3be2e8963e8d->enter($__internal_1cedb56b3394b84c19b497cf67cae0e86fb3b534373bd455e52c3be2e8963e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1cedb56b3394b84c19b497cf67cae0e86fb3b534373bd455e52c3be2e8963e8d->leave($__internal_1cedb56b3394b84c19b497cf67cae0e86fb3b534373bd455e52c3be2e8963e8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c9b315322a6405156bdf337e4a9740397474e1bf9946bb6f93be8b8fefc5372 = $this->env->getExtension("native_profiler");
        $__internal_6c9b315322a6405156bdf337e4a9740397474e1bf9946bb6f93be8b8fefc5372->enter($__internal_6c9b315322a6405156bdf337e4a9740397474e1bf9946bb6f93be8b8fefc5372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c9b315322a6405156bdf337e4a9740397474e1bf9946bb6f93be8b8fefc5372->leave($__internal_6c9b315322a6405156bdf337e4a9740397474e1bf9946bb6f93be8b8fefc5372_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

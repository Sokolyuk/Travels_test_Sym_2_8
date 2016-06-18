<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_11ed769b7730631f2806c74ee80d9e3895cb99678ae9ba8edc8791f2211fb6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7c4c44900946b76076b11b9f9a2efcaccd48f87ff13ccdaff6eb15f358a434d2 = $this->env->getExtension("native_profiler");
        $__internal_7c4c44900946b76076b11b9f9a2efcaccd48f87ff13ccdaff6eb15f358a434d2->enter($__internal_7c4c44900946b76076b11b9f9a2efcaccd48f87ff13ccdaff6eb15f358a434d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4c44900946b76076b11b9f9a2efcaccd48f87ff13ccdaff6eb15f358a434d2->leave($__internal_7c4c44900946b76076b11b9f9a2efcaccd48f87ff13ccdaff6eb15f358a434d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5aaa7a0b51bac36bdc33b3fa6790329ba87c8f0bd78a92e48753507ef4c93b37 = $this->env->getExtension("native_profiler");
        $__internal_5aaa7a0b51bac36bdc33b3fa6790329ba87c8f0bd78a92e48753507ef4c93b37->enter($__internal_5aaa7a0b51bac36bdc33b3fa6790329ba87c8f0bd78a92e48753507ef4c93b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5aaa7a0b51bac36bdc33b3fa6790329ba87c8f0bd78a92e48753507ef4c93b37->leave($__internal_5aaa7a0b51bac36bdc33b3fa6790329ba87c8f0bd78a92e48753507ef4c93b37_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bed60bb4248c868ec89a4e954758cb513f85ffe3eb011dfabdaba8dac77f93ca = $this->env->getExtension("native_profiler");
        $__internal_bed60bb4248c868ec89a4e954758cb513f85ffe3eb011dfabdaba8dac77f93ca->enter($__internal_bed60bb4248c868ec89a4e954758cb513f85ffe3eb011dfabdaba8dac77f93ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bed60bb4248c868ec89a4e954758cb513f85ffe3eb011dfabdaba8dac77f93ca->leave($__internal_bed60bb4248c868ec89a4e954758cb513f85ffe3eb011dfabdaba8dac77f93ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33c722a5c13b56ab5fadf93d10c52572e6245f98beae9fc4318fd47b88066ce8 = $this->env->getExtension("native_profiler");
        $__internal_33c722a5c13b56ab5fadf93d10c52572e6245f98beae9fc4318fd47b88066ce8->enter($__internal_33c722a5c13b56ab5fadf93d10c52572e6245f98beae9fc4318fd47b88066ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_33c722a5c13b56ab5fadf93d10c52572e6245f98beae9fc4318fd47b88066ce8->leave($__internal_33c722a5c13b56ab5fadf93d10c52572e6245f98beae9fc4318fd47b88066ce8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

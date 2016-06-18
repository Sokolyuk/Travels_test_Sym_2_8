<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8d69d0fb76accfc7a43639df062a16ef977e357d563a65ceb6efb75137a2a8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_052d5bf54013537f9dbc0c6bfa3b5773bce61f7e936c327c08bab7c2a259320b = $this->env->getExtension("native_profiler");
        $__internal_052d5bf54013537f9dbc0c6bfa3b5773bce61f7e936c327c08bab7c2a259320b->enter($__internal_052d5bf54013537f9dbc0c6bfa3b5773bce61f7e936c327c08bab7c2a259320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_052d5bf54013537f9dbc0c6bfa3b5773bce61f7e936c327c08bab7c2a259320b->leave($__internal_052d5bf54013537f9dbc0c6bfa3b5773bce61f7e936c327c08bab7c2a259320b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e13b3293f00206ea4a0df0ccfce9e19e05c9d4c6c175f0fa97e2624b46dc0ce = $this->env->getExtension("native_profiler");
        $__internal_0e13b3293f00206ea4a0df0ccfce9e19e05c9d4c6c175f0fa97e2624b46dc0ce->enter($__internal_0e13b3293f00206ea4a0df0ccfce9e19e05c9d4c6c175f0fa97e2624b46dc0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e13b3293f00206ea4a0df0ccfce9e19e05c9d4c6c175f0fa97e2624b46dc0ce->leave($__internal_0e13b3293f00206ea4a0df0ccfce9e19e05c9d4c6c175f0fa97e2624b46dc0ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

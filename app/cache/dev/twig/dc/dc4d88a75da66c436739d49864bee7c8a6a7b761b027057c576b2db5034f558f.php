<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_41706253236fdd21d0e43c96018874fce13d1928969da057476d8e78000c8159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c3924ba11cd392278a3a2c275d17c48ce7510ac3fa02a39cf2016cca0d6d580a = $this->env->getExtension("native_profiler");
        $__internal_c3924ba11cd392278a3a2c275d17c48ce7510ac3fa02a39cf2016cca0d6d580a->enter($__internal_c3924ba11cd392278a3a2c275d17c48ce7510ac3fa02a39cf2016cca0d6d580a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3924ba11cd392278a3a2c275d17c48ce7510ac3fa02a39cf2016cca0d6d580a->leave($__internal_c3924ba11cd392278a3a2c275d17c48ce7510ac3fa02a39cf2016cca0d6d580a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42fcf9e697c1f770f9357da52c5160d94f68f3841f3010c60e08710b14fda4d9 = $this->env->getExtension("native_profiler");
        $__internal_42fcf9e697c1f770f9357da52c5160d94f68f3841f3010c60e08710b14fda4d9->enter($__internal_42fcf9e697c1f770f9357da52c5160d94f68f3841f3010c60e08710b14fda4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42fcf9e697c1f770f9357da52c5160d94f68f3841f3010c60e08710b14fda4d9->leave($__internal_42fcf9e697c1f770f9357da52c5160d94f68f3841f3010c60e08710b14fda4d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2bd0d8cf5a7ec248238bd3081250e824fc2a6b3b1eb15a1a37e8552969a83f0 = $this->env->getExtension("native_profiler");
        $__internal_b2bd0d8cf5a7ec248238bd3081250e824fc2a6b3b1eb15a1a37e8552969a83f0->enter($__internal_b2bd0d8cf5a7ec248238bd3081250e824fc2a6b3b1eb15a1a37e8552969a83f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b2bd0d8cf5a7ec248238bd3081250e824fc2a6b3b1eb15a1a37e8552969a83f0->leave($__internal_b2bd0d8cf5a7ec248238bd3081250e824fc2a6b3b1eb15a1a37e8552969a83f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

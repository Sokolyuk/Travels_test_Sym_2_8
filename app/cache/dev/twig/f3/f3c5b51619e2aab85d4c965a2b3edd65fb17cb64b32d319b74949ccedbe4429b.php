<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c534999795b4cfe666ef08934db48b78bfbc1ce8194b6ee2c76be64b619dd891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a0cce10ad808b1d06c1473977f0687938f50fa8bd3d61a4f6375c2c9ad223cc7 = $this->env->getExtension("native_profiler");
        $__internal_a0cce10ad808b1d06c1473977f0687938f50fa8bd3d61a4f6375c2c9ad223cc7->enter($__internal_a0cce10ad808b1d06c1473977f0687938f50fa8bd3d61a4f6375c2c9ad223cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0cce10ad808b1d06c1473977f0687938f50fa8bd3d61a4f6375c2c9ad223cc7->leave($__internal_a0cce10ad808b1d06c1473977f0687938f50fa8bd3d61a4f6375c2c9ad223cc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f1f2e269459e89e4bf5901be52db44ba4ce78591b9360c00521ff34e794c6ba = $this->env->getExtension("native_profiler");
        $__internal_4f1f2e269459e89e4bf5901be52db44ba4ce78591b9360c00521ff34e794c6ba->enter($__internal_4f1f2e269459e89e4bf5901be52db44ba4ce78591b9360c00521ff34e794c6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f1f2e269459e89e4bf5901be52db44ba4ce78591b9360c00521ff34e794c6ba->leave($__internal_4f1f2e269459e89e4bf5901be52db44ba4ce78591b9360c00521ff34e794c6ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fdb1889c49e1fd7a78d54e7de46d3f52332297b5e87e7025cb1a35672ffe614 = $this->env->getExtension("native_profiler");
        $__internal_0fdb1889c49e1fd7a78d54e7de46d3f52332297b5e87e7025cb1a35672ffe614->enter($__internal_0fdb1889c49e1fd7a78d54e7de46d3f52332297b5e87e7025cb1a35672ffe614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0fdb1889c49e1fd7a78d54e7de46d3f52332297b5e87e7025cb1a35672ffe614->leave($__internal_0fdb1889c49e1fd7a78d54e7de46d3f52332297b5e87e7025cb1a35672ffe614_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

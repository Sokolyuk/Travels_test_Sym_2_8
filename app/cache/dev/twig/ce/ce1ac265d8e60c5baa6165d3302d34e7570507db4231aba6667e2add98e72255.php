<?php

/* ::base.html.twig */
class __TwigTemplate_4d59b6fabcaf802378b8fdeaacab4be582df02d31f65418c818a548678bd6968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cad6e3b561f8be198d28386b68a7baef45777033ea83c2531cfb96b95fb692b4 = $this->env->getExtension("native_profiler");
        $__internal_cad6e3b561f8be198d28386b68a7baef45777033ea83c2531cfb96b95fb692b4->enter($__internal_cad6e3b561f8be198d28386b68a7baef45777033ea83c2531cfb96b95fb692b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cad6e3b561f8be198d28386b68a7baef45777033ea83c2531cfb96b95fb692b4->leave($__internal_cad6e3b561f8be198d28386b68a7baef45777033ea83c2531cfb96b95fb692b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_589b6392dcf0414baf8f4d43aa8ecff20f596275f6b32a7f34b6285c79eb2ec4 = $this->env->getExtension("native_profiler");
        $__internal_589b6392dcf0414baf8f4d43aa8ecff20f596275f6b32a7f34b6285c79eb2ec4->enter($__internal_589b6392dcf0414baf8f4d43aa8ecff20f596275f6b32a7f34b6285c79eb2ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_589b6392dcf0414baf8f4d43aa8ecff20f596275f6b32a7f34b6285c79eb2ec4->leave($__internal_589b6392dcf0414baf8f4d43aa8ecff20f596275f6b32a7f34b6285c79eb2ec4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1ddb05ab5c8e78b2df08eed036844d42073138e72dd1e07345af6a28226351b = $this->env->getExtension("native_profiler");
        $__internal_d1ddb05ab5c8e78b2df08eed036844d42073138e72dd1e07345af6a28226351b->enter($__internal_d1ddb05ab5c8e78b2df08eed036844d42073138e72dd1e07345af6a28226351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1ddb05ab5c8e78b2df08eed036844d42073138e72dd1e07345af6a28226351b->leave($__internal_d1ddb05ab5c8e78b2df08eed036844d42073138e72dd1e07345af6a28226351b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff9fa59c84c5d9a88a033e1d562a08efd2dcebab6eaae65fcc3aed9382e79b56 = $this->env->getExtension("native_profiler");
        $__internal_ff9fa59c84c5d9a88a033e1d562a08efd2dcebab6eaae65fcc3aed9382e79b56->enter($__internal_ff9fa59c84c5d9a88a033e1d562a08efd2dcebab6eaae65fcc3aed9382e79b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff9fa59c84c5d9a88a033e1d562a08efd2dcebab6eaae65fcc3aed9382e79b56->leave($__internal_ff9fa59c84c5d9a88a033e1d562a08efd2dcebab6eaae65fcc3aed9382e79b56_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8c11414a2a1fa9c2258113e08a8e1b40d293e81879603b6f79f80215262a403 = $this->env->getExtension("native_profiler");
        $__internal_c8c11414a2a1fa9c2258113e08a8e1b40d293e81879603b6f79f80215262a403->enter($__internal_c8c11414a2a1fa9c2258113e08a8e1b40d293e81879603b6f79f80215262a403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c8c11414a2a1fa9c2258113e08a8e1b40d293e81879603b6f79f80215262a403->leave($__internal_c8c11414a2a1fa9c2258113e08a8e1b40d293e81879603b6f79f80215262a403_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

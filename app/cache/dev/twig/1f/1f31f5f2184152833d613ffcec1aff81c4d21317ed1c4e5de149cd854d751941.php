<?php

/* base.html.twig */
class __TwigTemplate_5c011a7903421c6f3768ef9523408d08f1f7857febfa8216a9d956aed201b858 extends Twig_Template
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
        $__internal_47d4675407bdd15c1ea8cc0ea9d98da3a128c31085c012a0b75f1cb1b3cc418b = $this->env->getExtension("native_profiler");
        $__internal_47d4675407bdd15c1ea8cc0ea9d98da3a128c31085c012a0b75f1cb1b3cc418b->enter($__internal_47d4675407bdd15c1ea8cc0ea9d98da3a128c31085c012a0b75f1cb1b3cc418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_47d4675407bdd15c1ea8cc0ea9d98da3a128c31085c012a0b75f1cb1b3cc418b->leave($__internal_47d4675407bdd15c1ea8cc0ea9d98da3a128c31085c012a0b75f1cb1b3cc418b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_928b9060c037ddff7e41d7f6d29b14f673d225292ba4dca411d4c230a841ee2d = $this->env->getExtension("native_profiler");
        $__internal_928b9060c037ddff7e41d7f6d29b14f673d225292ba4dca411d4c230a841ee2d->enter($__internal_928b9060c037ddff7e41d7f6d29b14f673d225292ba4dca411d4c230a841ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_928b9060c037ddff7e41d7f6d29b14f673d225292ba4dca411d4c230a841ee2d->leave($__internal_928b9060c037ddff7e41d7f6d29b14f673d225292ba4dca411d4c230a841ee2d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4836a8d75c8f1a8b63ae9e9888e9d58b04e7902e19151555ceef9a3f6c2b3591 = $this->env->getExtension("native_profiler");
        $__internal_4836a8d75c8f1a8b63ae9e9888e9d58b04e7902e19151555ceef9a3f6c2b3591->enter($__internal_4836a8d75c8f1a8b63ae9e9888e9d58b04e7902e19151555ceef9a3f6c2b3591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4836a8d75c8f1a8b63ae9e9888e9d58b04e7902e19151555ceef9a3f6c2b3591->leave($__internal_4836a8d75c8f1a8b63ae9e9888e9d58b04e7902e19151555ceef9a3f6c2b3591_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78658b02aeef89b9686a1e883398cae25eed087d53102c46c169042ccb8f58e6 = $this->env->getExtension("native_profiler");
        $__internal_78658b02aeef89b9686a1e883398cae25eed087d53102c46c169042ccb8f58e6->enter($__internal_78658b02aeef89b9686a1e883398cae25eed087d53102c46c169042ccb8f58e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78658b02aeef89b9686a1e883398cae25eed087d53102c46c169042ccb8f58e6->leave($__internal_78658b02aeef89b9686a1e883398cae25eed087d53102c46c169042ccb8f58e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_baf91d74a95acc52c280797de9f4afb146e547b99c18fbebf4d478b52241803c = $this->env->getExtension("native_profiler");
        $__internal_baf91d74a95acc52c280797de9f4afb146e547b99c18fbebf4d478b52241803c->enter($__internal_baf91d74a95acc52c280797de9f4afb146e547b99c18fbebf4d478b52241803c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_baf91d74a95acc52c280797de9f4afb146e547b99c18fbebf4d478b52241803c->leave($__internal_baf91d74a95acc52c280797de9f4afb146e547b99c18fbebf4d478b52241803c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

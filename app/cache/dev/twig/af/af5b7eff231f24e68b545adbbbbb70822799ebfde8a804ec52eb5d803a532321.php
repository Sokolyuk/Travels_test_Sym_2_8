<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_bf53b04c7f66959af42ebaee304573935eeda69c76832662bc88b7baf1523bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fdad97bfc4055e871de4d0d201a4e6ffb3c2f6f09ee3d5f223a102abcea8dab = $this->env->getExtension("native_profiler");
        $__internal_4fdad97bfc4055e871de4d0d201a4e6ffb3c2f6f09ee3d5f223a102abcea8dab->enter($__internal_4fdad97bfc4055e871de4d0d201a4e6ffb3c2f6f09ee3d5f223a102abcea8dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4fdad97bfc4055e871de4d0d201a4e6ffb3c2f6f09ee3d5f223a102abcea8dab->leave($__internal_4fdad97bfc4055e871de4d0d201a4e6ffb3c2f6f09ee3d5f223a102abcea8dab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

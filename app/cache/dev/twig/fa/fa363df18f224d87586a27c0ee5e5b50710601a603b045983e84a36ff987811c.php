<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c54a1c888b36cabb68fdd5ed01d496e09daef3771ea97800ec256bdcf877eec1 extends Twig_Template
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
        $__internal_edfb2ad002ad66b19c40ab4be5f8542837b3d3562e95336febeb76c3fa26ccb6 = $this->env->getExtension("native_profiler");
        $__internal_edfb2ad002ad66b19c40ab4be5f8542837b3d3562e95336febeb76c3fa26ccb6->enter($__internal_edfb2ad002ad66b19c40ab4be5f8542837b3d3562e95336febeb76c3fa26ccb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_edfb2ad002ad66b19c40ab4be5f8542837b3d3562e95336febeb76c3fa26ccb6->leave($__internal_edfb2ad002ad66b19c40ab4be5f8542837b3d3562e95336febeb76c3fa26ccb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

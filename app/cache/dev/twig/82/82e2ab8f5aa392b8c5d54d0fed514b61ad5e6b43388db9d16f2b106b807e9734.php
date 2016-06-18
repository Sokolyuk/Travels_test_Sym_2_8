<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_31876cfaf13ffdbacce74d5f2a371d628f130d989ecdea27d10840a24ccd24fc extends Twig_Template
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
        $__internal_3b5d7163afc9e726966cbce62db76c336be076ebb661a277f525af83baf08ba2 = $this->env->getExtension("native_profiler");
        $__internal_3b5d7163afc9e726966cbce62db76c336be076ebb661a277f525af83baf08ba2->enter($__internal_3b5d7163afc9e726966cbce62db76c336be076ebb661a277f525af83baf08ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3b5d7163afc9e726966cbce62db76c336be076ebb661a277f525af83baf08ba2->leave($__internal_3b5d7163afc9e726966cbce62db76c336be076ebb661a277f525af83baf08ba2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

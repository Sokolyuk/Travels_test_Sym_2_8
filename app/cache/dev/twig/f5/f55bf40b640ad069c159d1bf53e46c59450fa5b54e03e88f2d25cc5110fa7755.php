<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_534b1cd8f1104a60578a24433c174e0647c41b71f82cf7660cbeb503a4e00de2 extends Twig_Template
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
        $__internal_342c86a04664630def01abc5461a551c37f329f1d41b53bd0962957c11bd381b = $this->env->getExtension("native_profiler");
        $__internal_342c86a04664630def01abc5461a551c37f329f1d41b53bd0962957c11bd381b->enter($__internal_342c86a04664630def01abc5461a551c37f329f1d41b53bd0962957c11bd381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_342c86a04664630def01abc5461a551c37f329f1d41b53bd0962957c11bd381b->leave($__internal_342c86a04664630def01abc5461a551c37f329f1d41b53bd0962957c11bd381b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

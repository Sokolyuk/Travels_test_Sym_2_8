<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6d4ba727e93b1f9ba17fc7aaf47093d5efdd1c8b3ea6cacde41c7ce13e00daa4 extends Twig_Template
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
        $__internal_a0d4a883bf47f4ca6f2a87c1cd13f1a168a7d797a028d6a20f22a75f71527534 = $this->env->getExtension("native_profiler");
        $__internal_a0d4a883bf47f4ca6f2a87c1cd13f1a168a7d797a028d6a20f22a75f71527534->enter($__internal_a0d4a883bf47f4ca6f2a87c1cd13f1a168a7d797a028d6a20f22a75f71527534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0d4a883bf47f4ca6f2a87c1cd13f1a168a7d797a028d6a20f22a75f71527534->leave($__internal_a0d4a883bf47f4ca6f2a87c1cd13f1a168a7d797a028d6a20f22a75f71527534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

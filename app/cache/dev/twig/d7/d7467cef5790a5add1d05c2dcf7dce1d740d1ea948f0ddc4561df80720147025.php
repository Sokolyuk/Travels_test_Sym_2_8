<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5909f27c891fe025a8dbcc6a5620c5a9048a4524f55f593cb9b158390def56de extends Twig_Template
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
        $__internal_85509345b4b06ee137d0ae93a2c1d0b30d5d03d8b6598e6a4ca7214b11a14c56 = $this->env->getExtension("native_profiler");
        $__internal_85509345b4b06ee137d0ae93a2c1d0b30d5d03d8b6598e6a4ca7214b11a14c56->enter($__internal_85509345b4b06ee137d0ae93a2c1d0b30d5d03d8b6598e6a4ca7214b11a14c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_85509345b4b06ee137d0ae93a2c1d0b30d5d03d8b6598e6a4ca7214b11a14c56->leave($__internal_85509345b4b06ee137d0ae93a2c1d0b30d5d03d8b6598e6a4ca7214b11a14c56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

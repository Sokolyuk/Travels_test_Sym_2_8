<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d844ea671e2c54fdfac74ebcf06068b21d2577bc0ebdbe3249595db908143bb5 extends Twig_Template
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
        $__internal_589d71abf07d9bacd86e2e3678ef0f28bfdb576c618743c9aecbb7df314c2add = $this->env->getExtension("native_profiler");
        $__internal_589d71abf07d9bacd86e2e3678ef0f28bfdb576c618743c9aecbb7df314c2add->enter($__internal_589d71abf07d9bacd86e2e3678ef0f28bfdb576c618743c9aecbb7df314c2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_589d71abf07d9bacd86e2e3678ef0f28bfdb576c618743c9aecbb7df314c2add->leave($__internal_589d71abf07d9bacd86e2e3678ef0f28bfdb576c618743c9aecbb7df314c2add_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

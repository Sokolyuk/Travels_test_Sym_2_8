<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8b13515c7ac9176146795733603f9878d9d2665a7b21589620e8dfab5a43f676 extends Twig_Template
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
        $__internal_d83cae97a14f04367dd945d6fc2cb2da774e223678856570a3b02604e062914d = $this->env->getExtension("native_profiler");
        $__internal_d83cae97a14f04367dd945d6fc2cb2da774e223678856570a3b02604e062914d->enter($__internal_d83cae97a14f04367dd945d6fc2cb2da774e223678856570a3b02604e062914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d83cae97a14f04367dd945d6fc2cb2da774e223678856570a3b02604e062914d->leave($__internal_d83cae97a14f04367dd945d6fc2cb2da774e223678856570a3b02604e062914d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_00e4e3612887efa2284fc2cf54f450fd41e7a6af2819af91806826007b6a0acb extends Twig_Template
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
        $__internal_801d739c775a6e82706b3e00156b9d6575df51f8a5b9f7ff8780e6e6f3b70f4f = $this->env->getExtension("native_profiler");
        $__internal_801d739c775a6e82706b3e00156b9d6575df51f8a5b9f7ff8780e6e6f3b70f4f->enter($__internal_801d739c775a6e82706b3e00156b9d6575df51f8a5b9f7ff8780e6e6f3b70f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_801d739c775a6e82706b3e00156b9d6575df51f8a5b9f7ff8780e6e6f3b70f4f->leave($__internal_801d739c775a6e82706b3e00156b9d6575df51f8a5b9f7ff8780e6e6f3b70f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

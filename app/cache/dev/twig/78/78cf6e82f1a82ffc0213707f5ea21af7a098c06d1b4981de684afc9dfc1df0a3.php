<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d958306ba3b05342316a4dfb2eb1844d997b61cecb9638c81b0cd2dc428b83d1 extends Twig_Template
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
        $__internal_87d1012f9d0736e3500774de6df0b533a0dd1638b42379b87d4e9e582f467b80 = $this->env->getExtension("native_profiler");
        $__internal_87d1012f9d0736e3500774de6df0b533a0dd1638b42379b87d4e9e582f467b80->enter($__internal_87d1012f9d0736e3500774de6df0b533a0dd1638b42379b87d4e9e582f467b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_87d1012f9d0736e3500774de6df0b533a0dd1638b42379b87d4e9e582f467b80->leave($__internal_87d1012f9d0736e3500774de6df0b533a0dd1638b42379b87d4e9e582f467b80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

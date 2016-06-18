<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_84363e9979260aebaeb4670ffa0bd077139e8b113a826bf4eec1f6a021555e30 extends Twig_Template
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
        $__internal_b0cc8ee6256a94557b8c86bca506c5fbfbadb57e3bded88887d321026460a706 = $this->env->getExtension("native_profiler");
        $__internal_b0cc8ee6256a94557b8c86bca506c5fbfbadb57e3bded88887d321026460a706->enter($__internal_b0cc8ee6256a94557b8c86bca506c5fbfbadb57e3bded88887d321026460a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b0cc8ee6256a94557b8c86bca506c5fbfbadb57e3bded88887d321026460a706->leave($__internal_b0cc8ee6256a94557b8c86bca506c5fbfbadb57e3bded88887d321026460a706_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

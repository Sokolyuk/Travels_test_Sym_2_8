<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8b29ec17c698dcd3f7903055dbac3ce906450f3be011b5964c6971d3740ef591 extends Twig_Template
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
        $__internal_b9d67fc24a90b9db413fc5dd65a260fcfa5d777c008b04f6d47c476913991456 = $this->env->getExtension("native_profiler");
        $__internal_b9d67fc24a90b9db413fc5dd65a260fcfa5d777c008b04f6d47c476913991456->enter($__internal_b9d67fc24a90b9db413fc5dd65a260fcfa5d777c008b04f6d47c476913991456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9d67fc24a90b9db413fc5dd65a260fcfa5d777c008b04f6d47c476913991456->leave($__internal_b9d67fc24a90b9db413fc5dd65a260fcfa5d777c008b04f6d47c476913991456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90686fcba851ca6960d3b08bbff8053525de6513ee15e28a48d1afe65a8cd524 extends Twig_Template
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
        $__internal_b9bd22cceae7b09b0fe2c7c7cfebe9951e8f3089d3a30e7ce1c5101ed2a79dcf = $this->env->getExtension("native_profiler");
        $__internal_b9bd22cceae7b09b0fe2c7c7cfebe9951e8f3089d3a30e7ce1c5101ed2a79dcf->enter($__internal_b9bd22cceae7b09b0fe2c7c7cfebe9951e8f3089d3a30e7ce1c5101ed2a79dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9bd22cceae7b09b0fe2c7c7cfebe9951e8f3089d3a30e7ce1c5101ed2a79dcf->leave($__internal_b9bd22cceae7b09b0fe2c7c7cfebe9951e8f3089d3a30e7ce1c5101ed2a79dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

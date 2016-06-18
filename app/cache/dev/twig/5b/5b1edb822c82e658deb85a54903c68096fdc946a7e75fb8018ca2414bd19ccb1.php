<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6a417298bb7e945d84bbe15e034b3759354ba2b88ca85e0f65b3a6315aba6ba7 extends Twig_Template
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
        $__internal_c45c4805794353d28468ca1e62f9fe4a0121a658393683ed8e5c2cc204f86be9 = $this->env->getExtension("native_profiler");
        $__internal_c45c4805794353d28468ca1e62f9fe4a0121a658393683ed8e5c2cc204f86be9->enter($__internal_c45c4805794353d28468ca1e62f9fe4a0121a658393683ed8e5c2cc204f86be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c45c4805794353d28468ca1e62f9fe4a0121a658393683ed8e5c2cc204f86be9->leave($__internal_c45c4805794353d28468ca1e62f9fe4a0121a658393683ed8e5c2cc204f86be9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

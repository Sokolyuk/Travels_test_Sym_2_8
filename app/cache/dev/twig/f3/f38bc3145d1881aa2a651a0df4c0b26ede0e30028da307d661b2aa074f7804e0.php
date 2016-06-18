<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_901f08a553148bbce309f06d45ab9883aed7dd1f8f586dc893a78cfd87d4d3d4 extends Twig_Template
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
        $__internal_6fc093a6fb5999b1a69f5ad085fd863f637a7fce8b254827ff4915fe9e2e9474 = $this->env->getExtension("native_profiler");
        $__internal_6fc093a6fb5999b1a69f5ad085fd863f637a7fce8b254827ff4915fe9e2e9474->enter($__internal_6fc093a6fb5999b1a69f5ad085fd863f637a7fce8b254827ff4915fe9e2e9474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6fc093a6fb5999b1a69f5ad085fd863f637a7fce8b254827ff4915fe9e2e9474->leave($__internal_6fc093a6fb5999b1a69f5ad085fd863f637a7fce8b254827ff4915fe9e2e9474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a81cada63cd0402f9d47e380c81f5a6e0a28c63741138fe8f4554c658f5a7f57 extends Twig_Template
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
        $__internal_4034566fabc412add4759bae29a627e154c4bb7dbddba8ed57ef11cbe167772e = $this->env->getExtension("native_profiler");
        $__internal_4034566fabc412add4759bae29a627e154c4bb7dbddba8ed57ef11cbe167772e->enter($__internal_4034566fabc412add4759bae29a627e154c4bb7dbddba8ed57ef11cbe167772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4034566fabc412add4759bae29a627e154c4bb7dbddba8ed57ef11cbe167772e->leave($__internal_4034566fabc412add4759bae29a627e154c4bb7dbddba8ed57ef11cbe167772e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

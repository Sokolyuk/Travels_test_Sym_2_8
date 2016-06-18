<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1d3b17a06e7c8fb91ee6ffe020ee680543bedd42d3fe9ddc2ba3f282c4300c1c extends Twig_Template
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
        $__internal_95e482ffd29c0200fd90aa8a16fd922f8955781e92f08ba7db4a1ffb2e3680fa = $this->env->getExtension("native_profiler");
        $__internal_95e482ffd29c0200fd90aa8a16fd922f8955781e92f08ba7db4a1ffb2e3680fa->enter($__internal_95e482ffd29c0200fd90aa8a16fd922f8955781e92f08ba7db4a1ffb2e3680fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_95e482ffd29c0200fd90aa8a16fd922f8955781e92f08ba7db4a1ffb2e3680fa->leave($__internal_95e482ffd29c0200fd90aa8a16fd922f8955781e92f08ba7db4a1ffb2e3680fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_719e5affb4714b8ff0ce95124e621104c297c13461080e2e5d8e2cad6d83c6ed extends Twig_Template
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
        $__internal_4d5bbcde06b128c0747f27f01a6af8be712cd084a229f4bf83df044e0f67531e = $this->env->getExtension("native_profiler");
        $__internal_4d5bbcde06b128c0747f27f01a6af8be712cd084a229f4bf83df044e0f67531e->enter($__internal_4d5bbcde06b128c0747f27f01a6af8be712cd084a229f4bf83df044e0f67531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4d5bbcde06b128c0747f27f01a6af8be712cd084a229f4bf83df044e0f67531e->leave($__internal_4d5bbcde06b128c0747f27f01a6af8be712cd084a229f4bf83df044e0f67531e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

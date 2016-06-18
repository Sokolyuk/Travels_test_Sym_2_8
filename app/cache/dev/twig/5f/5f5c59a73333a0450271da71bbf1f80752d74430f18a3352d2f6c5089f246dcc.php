<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_26e34d4ef79962e08173b18efc15175c50d0dee0e22bf8700942af47973ef9af extends Twig_Template
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
        $__internal_ff7fbb186fc5237ad493c6f3f5c11fed06151d71292f6ae57f6d678ee8695697 = $this->env->getExtension("native_profiler");
        $__internal_ff7fbb186fc5237ad493c6f3f5c11fed06151d71292f6ae57f6d678ee8695697->enter($__internal_ff7fbb186fc5237ad493c6f3f5c11fed06151d71292f6ae57f6d678ee8695697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ff7fbb186fc5237ad493c6f3f5c11fed06151d71292f6ae57f6d678ee8695697->leave($__internal_ff7fbb186fc5237ad493c6f3f5c11fed06151d71292f6ae57f6d678ee8695697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_dc0cf21898fdc27d64b50896a3dc2239df0c915012c9f351c788c4a25e5dec18 extends Twig_Template
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
        $__internal_b3db4bc70878bdf11e9fb14562973e8e155c7a50e914aae0da2dbbb926d309db = $this->env->getExtension("native_profiler");
        $__internal_b3db4bc70878bdf11e9fb14562973e8e155c7a50e914aae0da2dbbb926d309db->enter($__internal_b3db4bc70878bdf11e9fb14562973e8e155c7a50e914aae0da2dbbb926d309db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b3db4bc70878bdf11e9fb14562973e8e155c7a50e914aae0da2dbbb926d309db->leave($__internal_b3db4bc70878bdf11e9fb14562973e8e155c7a50e914aae0da2dbbb926d309db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b70376ef6c534d596de77d4036950afea30733c0b323e1e4ed7b41dc035a0e24 extends Twig_Template
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
        $__internal_29e11ce109c1fad85287948abbbb20f5e90254a3401aae93ba67a309fe73464e = $this->env->getExtension("native_profiler");
        $__internal_29e11ce109c1fad85287948abbbb20f5e90254a3401aae93ba67a309fe73464e->enter($__internal_29e11ce109c1fad85287948abbbb20f5e90254a3401aae93ba67a309fe73464e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_29e11ce109c1fad85287948abbbb20f5e90254a3401aae93ba67a309fe73464e->leave($__internal_29e11ce109c1fad85287948abbbb20f5e90254a3401aae93ba67a309fe73464e_prof);

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

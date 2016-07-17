<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6054563388827389a7c494a301f050d097f24b6502b16ae628eb4eb652bbeb6d extends Twig_Template
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
        $__internal_5cbebc9812c02dc8bf2ed9ed4657480e5b42471ebb111afb01befa8352d92872 = $this->env->getExtension("native_profiler");
        $__internal_5cbebc9812c02dc8bf2ed9ed4657480e5b42471ebb111afb01befa8352d92872->enter($__internal_5cbebc9812c02dc8bf2ed9ed4657480e5b42471ebb111afb01befa8352d92872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5cbebc9812c02dc8bf2ed9ed4657480e5b42471ebb111afb01befa8352d92872->leave($__internal_5cbebc9812c02dc8bf2ed9ed4657480e5b42471ebb111afb01befa8352d92872_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

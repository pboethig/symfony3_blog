<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d48722964cfc7a7a3a81f3170da2773786c1472a21e4174dd3834a26c19b2c4c extends Twig_Template
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
        $__internal_1cab9cb880e40874010be3c6552c1d971d25d32bb4f8b45128c9942c935b1dc3 = $this->env->getExtension("native_profiler");
        $__internal_1cab9cb880e40874010be3c6552c1d971d25d32bb4f8b45128c9942c935b1dc3->enter($__internal_1cab9cb880e40874010be3c6552c1d971d25d32bb4f8b45128c9942c935b1dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1cab9cb880e40874010be3c6552c1d971d25d32bb4f8b45128c9942c935b1dc3->leave($__internal_1cab9cb880e40874010be3c6552c1d971d25d32bb4f8b45128c9942c935b1dc3_prof);

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

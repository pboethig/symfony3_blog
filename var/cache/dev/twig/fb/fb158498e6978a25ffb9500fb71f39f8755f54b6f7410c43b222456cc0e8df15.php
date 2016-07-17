<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2050f37aa4a5c9be2743855d38c96e859109d86531d8f9507562b51eabc7ff6b extends Twig_Template
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
        $__internal_b8bd55d5ca4a8fb3167b4472c167e233bc4dd852e5039d3338ec81ed91d85ab1 = $this->env->getExtension("native_profiler");
        $__internal_b8bd55d5ca4a8fb3167b4472c167e233bc4dd852e5039d3338ec81ed91d85ab1->enter($__internal_b8bd55d5ca4a8fb3167b4472c167e233bc4dd852e5039d3338ec81ed91d85ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b8bd55d5ca4a8fb3167b4472c167e233bc4dd852e5039d3338ec81ed91d85ab1->leave($__internal_b8bd55d5ca4a8fb3167b4472c167e233bc4dd852e5039d3338ec81ed91d85ab1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

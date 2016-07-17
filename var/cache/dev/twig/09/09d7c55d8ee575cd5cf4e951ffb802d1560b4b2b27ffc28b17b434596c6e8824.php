<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_67f05c7962298816df79e8e1d5b79af23b99117c1ffa84827e5a89743359b27b extends Twig_Template
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
        $__internal_688e90b33a3373d01634aefacce3e012b7febbf7df83c6fe0fa9ebe81db69a6f = $this->env->getExtension("native_profiler");
        $__internal_688e90b33a3373d01634aefacce3e012b7febbf7df83c6fe0fa9ebe81db69a6f->enter($__internal_688e90b33a3373d01634aefacce3e012b7febbf7df83c6fe0fa9ebe81db69a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_688e90b33a3373d01634aefacce3e012b7febbf7df83c6fe0fa9ebe81db69a6f->leave($__internal_688e90b33a3373d01634aefacce3e012b7febbf7df83c6fe0fa9ebe81db69a6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

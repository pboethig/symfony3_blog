<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_eeb450030c28dacd3ec7a3bd80e0706894284516be616f7756caf976ff9b3741 extends Twig_Template
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
        $__internal_1da01e39f327433e7bb5851df2d38bcba2d6b39908aae712b4f46f3c901c72d5 = $this->env->getExtension("native_profiler");
        $__internal_1da01e39f327433e7bb5851df2d38bcba2d6b39908aae712b4f46f3c901c72d5->enter($__internal_1da01e39f327433e7bb5851df2d38bcba2d6b39908aae712b4f46f3c901c72d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1da01e39f327433e7bb5851df2d38bcba2d6b39908aae712b4f46f3c901c72d5->leave($__internal_1da01e39f327433e7bb5851df2d38bcba2d6b39908aae712b4f46f3c901c72d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

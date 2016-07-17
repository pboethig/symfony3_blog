<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d4beeeccf6d43160b3c3c6c088a55151b264e13515dcb7832d9a4b087795d5e0 extends Twig_Template
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
        $__internal_a00656ee109f1854f42de00f2e67f5a51e5efeabb1d117b8dae017341a201893 = $this->env->getExtension("native_profiler");
        $__internal_a00656ee109f1854f42de00f2e67f5a51e5efeabb1d117b8dae017341a201893->enter($__internal_a00656ee109f1854f42de00f2e67f5a51e5efeabb1d117b8dae017341a201893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a00656ee109f1854f42de00f2e67f5a51e5efeabb1d117b8dae017341a201893->leave($__internal_a00656ee109f1854f42de00f2e67f5a51e5efeabb1d117b8dae017341a201893_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

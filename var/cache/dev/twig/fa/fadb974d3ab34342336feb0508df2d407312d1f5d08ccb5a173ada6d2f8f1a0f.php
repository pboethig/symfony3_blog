<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b033116ae94f1c9f232c314e674deda985179156cf84c241c78352b880883b16 extends Twig_Template
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
        $__internal_7adc32d0d44fda7b51ae015f7b78184f7c6c8b7c4c71f02ad17b538564063ecd = $this->env->getExtension("native_profiler");
        $__internal_7adc32d0d44fda7b51ae015f7b78184f7c6c8b7c4c71f02ad17b538564063ecd->enter($__internal_7adc32d0d44fda7b51ae015f7b78184f7c6c8b7c4c71f02ad17b538564063ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7adc32d0d44fda7b51ae015f7b78184f7c6c8b7c4c71f02ad17b538564063ecd->leave($__internal_7adc32d0d44fda7b51ae015f7b78184f7c6c8b7c4c71f02ad17b538564063ecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */

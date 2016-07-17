<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c50ad635d871d5307d81e29ca5b232b2576715a0fb2f09192af6d21c0d80db41 extends Twig_Template
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
        $__internal_651550c7b5198b44553ae8eeb1dfdf6c0fc0c7e85d50e4fb1873f2356ef188ad = $this->env->getExtension("native_profiler");
        $__internal_651550c7b5198b44553ae8eeb1dfdf6c0fc0c7e85d50e4fb1873f2356ef188ad->enter($__internal_651550c7b5198b44553ae8eeb1dfdf6c0fc0c7e85d50e4fb1873f2356ef188ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_651550c7b5198b44553ae8eeb1dfdf6c0fc0c7e85d50e4fb1873f2356ef188ad->leave($__internal_651550c7b5198b44553ae8eeb1dfdf6c0fc0c7e85d50e4fb1873f2356ef188ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

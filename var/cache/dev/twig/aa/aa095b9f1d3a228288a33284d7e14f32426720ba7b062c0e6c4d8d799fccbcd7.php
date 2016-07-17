<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e72c3e65f6551ca65003047a8168ad65705ac261676a203e70778c57d775ee0c extends Twig_Template
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
        $__internal_97608bcf1f6d1ece565a7747e67a40e7e62e7b2f94497377acafc87c7ada1ed1 = $this->env->getExtension("native_profiler");
        $__internal_97608bcf1f6d1ece565a7747e67a40e7e62e7b2f94497377acafc87c7ada1ed1->enter($__internal_97608bcf1f6d1ece565a7747e67a40e7e62e7b2f94497377acafc87c7ada1ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_97608bcf1f6d1ece565a7747e67a40e7e62e7b2f94497377acafc87c7ada1ed1->leave($__internal_97608bcf1f6d1ece565a7747e67a40e7e62e7b2f94497377acafc87c7ada1ed1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

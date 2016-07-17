<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a55d16a9526c510aeca169e446c9bf9cab9a1050df337f83d110faa9048b795d extends Twig_Template
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
        $__internal_f48bc40bd52209032cafdb6716c4c1fa57aa2980f1f7da6c300a7a467ea4bda1 = $this->env->getExtension("native_profiler");
        $__internal_f48bc40bd52209032cafdb6716c4c1fa57aa2980f1f7da6c300a7a467ea4bda1->enter($__internal_f48bc40bd52209032cafdb6716c4c1fa57aa2980f1f7da6c300a7a467ea4bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f48bc40bd52209032cafdb6716c4c1fa57aa2980f1f7da6c300a7a467ea4bda1->leave($__internal_f48bc40bd52209032cafdb6716c4c1fa57aa2980f1f7da6c300a7a467ea4bda1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

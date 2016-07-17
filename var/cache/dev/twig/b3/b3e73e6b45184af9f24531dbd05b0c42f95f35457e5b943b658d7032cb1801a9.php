<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8f58fb419c0d5a87408610cb6e99e3de482819259157f5b4a18254e7c65e76f6 extends Twig_Template
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
        $__internal_a771de1e4cba972aad46d6a7b720d0bca36ec80bedc6a65256e8a1ab15ee6cf4 = $this->env->getExtension("native_profiler");
        $__internal_a771de1e4cba972aad46d6a7b720d0bca36ec80bedc6a65256e8a1ab15ee6cf4->enter($__internal_a771de1e4cba972aad46d6a7b720d0bca36ec80bedc6a65256e8a1ab15ee6cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a771de1e4cba972aad46d6a7b720d0bca36ec80bedc6a65256e8a1ab15ee6cf4->leave($__internal_a771de1e4cba972aad46d6a7b720d0bca36ec80bedc6a65256e8a1ab15ee6cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f246843e3615c892f22fae4f483f5ca91266214a654588b14ae2900ebdab1ece extends Twig_Template
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
        $__internal_b7e353072f434349ae53a56aab3098107e8c8d986b1463f056599aa4877c9487 = $this->env->getExtension("native_profiler");
        $__internal_b7e353072f434349ae53a56aab3098107e8c8d986b1463f056599aa4877c9487->enter($__internal_b7e353072f434349ae53a56aab3098107e8c8d986b1463f056599aa4877c9487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b7e353072f434349ae53a56aab3098107e8c8d986b1463f056599aa4877c9487->leave($__internal_b7e353072f434349ae53a56aab3098107e8c8d986b1463f056599aa4877c9487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_69f79137b29b7fc7f7ffd71e59ebc6b9eb4e37bc61e021fa4a860fc43b6d41f9 extends Twig_Template
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
        $__internal_85f5e8190a4f3363ecbb065f5a2bf5646734489a6d54c6e73b3b5539bc7457f8 = $this->env->getExtension("native_profiler");
        $__internal_85f5e8190a4f3363ecbb065f5a2bf5646734489a6d54c6e73b3b5539bc7457f8->enter($__internal_85f5e8190a4f3363ecbb065f5a2bf5646734489a6d54c6e73b3b5539bc7457f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : null), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_85f5e8190a4f3363ecbb065f5a2bf5646734489a6d54c6e73b3b5539bc7457f8->leave($__internal_85f5e8190a4f3363ecbb065f5a2bf5646734489a6d54c6e73b3b5539bc7457f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

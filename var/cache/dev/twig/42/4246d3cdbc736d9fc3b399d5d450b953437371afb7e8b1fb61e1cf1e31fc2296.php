<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4f8447566a4f8704a838cca0ef46ad99736fb17716278ae32dc3e0b0d07d00a6 extends Twig_Template
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
        $__internal_d751ac481a1f76d7f127ede063ffd2625735a2346a4b9d54aa76f8098036d026 = $this->env->getExtension("native_profiler");
        $__internal_d751ac481a1f76d7f127ede063ffd2625735a2346a4b9d54aa76f8098036d026->enter($__internal_d751ac481a1f76d7f127ede063ffd2625735a2346a4b9d54aa76f8098036d026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d751ac481a1f76d7f127ede063ffd2625735a2346a4b9d54aa76f8098036d026->leave($__internal_d751ac481a1f76d7f127ede063ffd2625735a2346a4b9d54aa76f8098036d026_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

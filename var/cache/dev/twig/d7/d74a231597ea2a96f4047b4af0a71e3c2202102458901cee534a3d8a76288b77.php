<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_104cbfdf612b3a6c9fcbdfb49b0bc891b9fdb547d4fb18c880eb9c0f35ce0b7e extends Twig_Template
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
        $__internal_81aeccc0bdbe2975f7be39d716b2d668cf134b2027ea839b601a216df5200dc4 = $this->env->getExtension("native_profiler");
        $__internal_81aeccc0bdbe2975f7be39d716b2d668cf134b2027ea839b601a216df5200dc4->enter($__internal_81aeccc0bdbe2975f7be39d716b2d668cf134b2027ea839b601a216df5200dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_81aeccc0bdbe2975f7be39d716b2d668cf134b2027ea839b601a216df5200dc4->leave($__internal_81aeccc0bdbe2975f7be39d716b2d668cf134b2027ea839b601a216df5200dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

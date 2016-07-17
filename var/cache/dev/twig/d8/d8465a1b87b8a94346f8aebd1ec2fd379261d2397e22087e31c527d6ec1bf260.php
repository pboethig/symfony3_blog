<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cf4604423f5a35716dc83c620ef6ddb4df4e7cd51881516a0d26e194e4ab1d9d extends Twig_Template
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
        $__internal_349c170e9dcbed40f8091dc45039c2ea89b33842d8ec3e038e9143f6816502c2 = $this->env->getExtension("native_profiler");
        $__internal_349c170e9dcbed40f8091dc45039c2ea89b33842d8ec3e038e9143f6816502c2->enter($__internal_349c170e9dcbed40f8091dc45039c2ea89b33842d8ec3e038e9143f6816502c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_349c170e9dcbed40f8091dc45039c2ea89b33842d8ec3e038e9143f6816502c2->leave($__internal_349c170e9dcbed40f8091dc45039c2ea89b33842d8ec3e038e9143f6816502c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

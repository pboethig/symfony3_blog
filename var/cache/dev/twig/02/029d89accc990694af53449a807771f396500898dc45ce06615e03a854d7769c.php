<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_eaae37775f0fd1083dc1041fa5077120c42f5ae6244d48535b98c6875036a3db extends Twig_Template
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
        $__internal_9750067d402e91cda8655d9d60cb911c6a9686d8f0a3531f80d4ad0935d4dfb0 = $this->env->getExtension("native_profiler");
        $__internal_9750067d402e91cda8655d9d60cb911c6a9686d8f0a3531f80d4ad0935d4dfb0->enter($__internal_9750067d402e91cda8655d9d60cb911c6a9686d8f0a3531f80d4ad0935d4dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9750067d402e91cda8655d9d60cb911c6a9686d8f0a3531f80d4ad0935d4dfb0->leave($__internal_9750067d402e91cda8655d9d60cb911c6a9686d8f0a3531f80d4ad0935d4dfb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

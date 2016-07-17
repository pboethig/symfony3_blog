<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_247899987ec74b1ecfdbbf113f76b0433cc4750cd77ea378aa2787f35e6b9e33 extends Twig_Template
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
        $__internal_b8f2c6c83c370f0a87941807a33c9ad4f84d0e30ec4855eecdc5e099ac330f70 = $this->env->getExtension("native_profiler");
        $__internal_b8f2c6c83c370f0a87941807a33c9ad4f84d0e30ec4855eecdc5e099ac330f70->enter($__internal_b8f2c6c83c370f0a87941807a33c9ad4f84d0e30ec4855eecdc5e099ac330f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b8f2c6c83c370f0a87941807a33c9ad4f84d0e30ec4855eecdc5e099ac330f70->leave($__internal_b8f2c6c83c370f0a87941807a33c9ad4f84d0e30ec4855eecdc5e099ac330f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_428e043e399ef683ca3f90f5e11927bc9f157fc7d809795656d43752a4ea352c extends Twig_Template
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
        $__internal_e6a636c93a4efcf7f80dad9135c2a711d9fc1ca8fedc94d1814377c2234df86b = $this->env->getExtension("native_profiler");
        $__internal_e6a636c93a4efcf7f80dad9135c2a711d9fc1ca8fedc94d1814377c2234df86b->enter($__internal_e6a636c93a4efcf7f80dad9135c2a711d9fc1ca8fedc94d1814377c2234df86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e6a636c93a4efcf7f80dad9135c2a711d9fc1ca8fedc94d1814377c2234df86b->leave($__internal_e6a636c93a4efcf7f80dad9135c2a711d9fc1ca8fedc94d1814377c2234df86b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

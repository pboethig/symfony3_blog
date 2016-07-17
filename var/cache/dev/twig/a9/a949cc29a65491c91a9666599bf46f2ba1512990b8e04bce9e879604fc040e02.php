<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_85c76e19c8b08e931b2b2f613b7db0b7c3edf59382fa50175dbb138ce4130db7 extends Twig_Template
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
        $__internal_9b6c2861eb49349535563099d48270dc268a1f70b21b9a3a424a03d729e234dc = $this->env->getExtension("native_profiler");
        $__internal_9b6c2861eb49349535563099d48270dc268a1f70b21b9a3a424a03d729e234dc->enter($__internal_9b6c2861eb49349535563099d48270dc268a1f70b21b9a3a424a03d729e234dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9b6c2861eb49349535563099d48270dc268a1f70b21b9a3a424a03d729e234dc->leave($__internal_9b6c2861eb49349535563099d48270dc268a1f70b21b9a3a424a03d729e234dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

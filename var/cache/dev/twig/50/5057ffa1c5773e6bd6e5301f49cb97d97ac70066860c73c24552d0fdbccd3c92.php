<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ca386280c84215800674241d7804a088c52ae2020a141e96449f745ef39643ae extends Twig_Template
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
        $__internal_6b3771a6c394f3d0201f89ed43906a2669d1a02c6dc9f14356bf9b9b0178ca77 = $this->env->getExtension("native_profiler");
        $__internal_6b3771a6c394f3d0201f89ed43906a2669d1a02c6dc9f14356bf9b9b0178ca77->enter($__internal_6b3771a6c394f3d0201f89ed43906a2669d1a02c6dc9f14356bf9b9b0178ca77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b3771a6c394f3d0201f89ed43906a2669d1a02c6dc9f14356bf9b9b0178ca77->leave($__internal_6b3771a6c394f3d0201f89ed43906a2669d1a02c6dc9f14356bf9b9b0178ca77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

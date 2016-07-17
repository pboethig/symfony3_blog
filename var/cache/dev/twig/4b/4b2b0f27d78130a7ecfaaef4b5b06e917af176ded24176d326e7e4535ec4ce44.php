<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4776823f1d28dc95302a162c324a157a7beef70b194d92e9ddc28626cbaf71e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3c9361b34a163fb4b10d049000c8a662bf8788543377c4cec78a8a629aeb63 = $this->env->getExtension("native_profiler");
        $__internal_2b3c9361b34a163fb4b10d049000c8a662bf8788543377c4cec78a8a629aeb63->enter($__internal_2b3c9361b34a163fb4b10d049000c8a662bf8788543377c4cec78a8a629aeb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3c9361b34a163fb4b10d049000c8a662bf8788543377c4cec78a8a629aeb63->leave($__internal_2b3c9361b34a163fb4b10d049000c8a662bf8788543377c4cec78a8a629aeb63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d519d3ca65a555c69621bf439ad8eebc09ec4c73c55a52832c9dd514ac1f87d = $this->env->getExtension("native_profiler");
        $__internal_5d519d3ca65a555c69621bf439ad8eebc09ec4c73c55a52832c9dd514ac1f87d->enter($__internal_5d519d3ca65a555c69621bf439ad8eebc09ec4c73c55a52832c9dd514ac1f87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d519d3ca65a555c69621bf439ad8eebc09ec4c73c55a52832c9dd514ac1f87d->leave($__internal_5d519d3ca65a555c69621bf439ad8eebc09ec4c73c55a52832c9dd514ac1f87d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aad6203a42f8b63613a1004e877da06780d9b1edd0d741c17e6909f1d33df5ce = $this->env->getExtension("native_profiler");
        $__internal_aad6203a42f8b63613a1004e877da06780d9b1edd0d741c17e6909f1d33df5ce->enter($__internal_aad6203a42f8b63613a1004e877da06780d9b1edd0d741c17e6909f1d33df5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aad6203a42f8b63613a1004e877da06780d9b1edd0d741c17e6909f1d33df5ce->leave($__internal_aad6203a42f8b63613a1004e877da06780d9b1edd0d741c17e6909f1d33df5ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68205f7b2c17210626df27a12f16412a27f0f12022594181673398e8c2077c63 = $this->env->getExtension("native_profiler");
        $__internal_68205f7b2c17210626df27a12f16412a27f0f12022594181673398e8c2077c63->enter($__internal_68205f7b2c17210626df27a12f16412a27f0f12022594181673398e8c2077c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_68205f7b2c17210626df27a12f16412a27f0f12022594181673398e8c2077c63->leave($__internal_68205f7b2c17210626df27a12f16412a27f0f12022594181673398e8c2077c63_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

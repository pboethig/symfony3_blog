<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bb1e675db2cd7f189f6f71fbdb032d4306465d3d2c3a6aaa4ed56eb8a28e2659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccc7b3ebb0d05f5d73dc881fe51471a7a477b2cc51198cdf1576af4604ab08d0 = $this->env->getExtension("native_profiler");
        $__internal_ccc7b3ebb0d05f5d73dc881fe51471a7a477b2cc51198cdf1576af4604ab08d0->enter($__internal_ccc7b3ebb0d05f5d73dc881fe51471a7a477b2cc51198cdf1576af4604ab08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc7b3ebb0d05f5d73dc881fe51471a7a477b2cc51198cdf1576af4604ab08d0->leave($__internal_ccc7b3ebb0d05f5d73dc881fe51471a7a477b2cc51198cdf1576af4604ab08d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2136299d574d227cc8a689f93a58bd7037a00dc272b0274c6f30535e9c88c09 = $this->env->getExtension("native_profiler");
        $__internal_c2136299d574d227cc8a689f93a58bd7037a00dc272b0274c6f30535e9c88c09->enter($__internal_c2136299d574d227cc8a689f93a58bd7037a00dc272b0274c6f30535e9c88c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c2136299d574d227cc8a689f93a58bd7037a00dc272b0274c6f30535e9c88c09->leave($__internal_c2136299d574d227cc8a689f93a58bd7037a00dc272b0274c6f30535e9c88c09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_946f605c1d937f8e04b060ad17d206866ab93f5408f179955e3173e129ebd57f = $this->env->getExtension("native_profiler");
        $__internal_946f605c1d937f8e04b060ad17d206866ab93f5408f179955e3173e129ebd57f->enter($__internal_946f605c1d937f8e04b060ad17d206866ab93f5408f179955e3173e129ebd57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_946f605c1d937f8e04b060ad17d206866ab93f5408f179955e3173e129ebd57f->leave($__internal_946f605c1d937f8e04b060ad17d206866ab93f5408f179955e3173e129ebd57f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

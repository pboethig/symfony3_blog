<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2e8d55d445bf3faf92293a2093a4a0c530d78e7c15fb9bc8aa495b03dc1eb72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d08953057a6332a69a1378864d504b01d15300d385ed8203f2d5f30997be9379 = $this->env->getExtension("native_profiler");
        $__internal_d08953057a6332a69a1378864d504b01d15300d385ed8203f2d5f30997be9379->enter($__internal_d08953057a6332a69a1378864d504b01d15300d385ed8203f2d5f30997be9379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08953057a6332a69a1378864d504b01d15300d385ed8203f2d5f30997be9379->leave($__internal_d08953057a6332a69a1378864d504b01d15300d385ed8203f2d5f30997be9379_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c512200c01bd26c299e41420839d0a1717e148aa5f6853e632d8848f12a31e79 = $this->env->getExtension("native_profiler");
        $__internal_c512200c01bd26c299e41420839d0a1717e148aa5f6853e632d8848f12a31e79->enter($__internal_c512200c01bd26c299e41420839d0a1717e148aa5f6853e632d8848f12a31e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c512200c01bd26c299e41420839d0a1717e148aa5f6853e632d8848f12a31e79->leave($__internal_c512200c01bd26c299e41420839d0a1717e148aa5f6853e632d8848f12a31e79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aec3bfa1173c40bae4ec71b39e58014b5702c0ee9d33fdc3488abcbaebf1bfa = $this->env->getExtension("native_profiler");
        $__internal_8aec3bfa1173c40bae4ec71b39e58014b5702c0ee9d33fdc3488abcbaebf1bfa->enter($__internal_8aec3bfa1173c40bae4ec71b39e58014b5702c0ee9d33fdc3488abcbaebf1bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_8aec3bfa1173c40bae4ec71b39e58014b5702c0ee9d33fdc3488abcbaebf1bfa->leave($__internal_8aec3bfa1173c40bae4ec71b39e58014b5702c0ee9d33fdc3488abcbaebf1bfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a0db1bc74bfae292957dcbf59093daaebbd72ada833ec70d7ca4a42daea0b51 = $this->env->getExtension("native_profiler");
        $__internal_2a0db1bc74bfae292957dcbf59093daaebbd72ada833ec70d7ca4a42daea0b51->enter($__internal_2a0db1bc74bfae292957dcbf59093daaebbd72ada833ec70d7ca4a42daea0b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2a0db1bc74bfae292957dcbf59093daaebbd72ada833ec70d7ca4a42daea0b51->leave($__internal_2a0db1bc74bfae292957dcbf59093daaebbd72ada833ec70d7ca4a42daea0b51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2e8d55d445bf3faf92293a2093a4a0c530d78e7c15fb9bc8aa495b03dc1eb72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_4038d3f91cd2cdf3bcc5542cf875ea51f4c5fd56815aa03b52dfdfc578512fc2 = $this->env->getExtension("native_profiler");
        $__internal_4038d3f91cd2cdf3bcc5542cf875ea51f4c5fd56815aa03b52dfdfc578512fc2->enter($__internal_4038d3f91cd2cdf3bcc5542cf875ea51f4c5fd56815aa03b52dfdfc578512fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4038d3f91cd2cdf3bcc5542cf875ea51f4c5fd56815aa03b52dfdfc578512fc2->leave($__internal_4038d3f91cd2cdf3bcc5542cf875ea51f4c5fd56815aa03b52dfdfc578512fc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3689c0de9032669c06ecfc552e1c56a334aac56479b54d4a0b406e51462d8c33 = $this->env->getExtension("native_profiler");
        $__internal_3689c0de9032669c06ecfc552e1c56a334aac56479b54d4a0b406e51462d8c33->enter($__internal_3689c0de9032669c06ecfc552e1c56a334aac56479b54d4a0b406e51462d8c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3689c0de9032669c06ecfc552e1c56a334aac56479b54d4a0b406e51462d8c33->leave($__internal_3689c0de9032669c06ecfc552e1c56a334aac56479b54d4a0b406e51462d8c33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c097c969842dba7b088232b8c5a10587a202b085ae96d18d8b0f37972cd2f1f = $this->env->getExtension("native_profiler");
        $__internal_8c097c969842dba7b088232b8c5a10587a202b085ae96d18d8b0f37972cd2f1f->enter($__internal_8c097c969842dba7b088232b8c5a10587a202b085ae96d18d8b0f37972cd2f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_8c097c969842dba7b088232b8c5a10587a202b085ae96d18d8b0f37972cd2f1f->leave($__internal_8c097c969842dba7b088232b8c5a10587a202b085ae96d18d8b0f37972cd2f1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d4423b50d73c4fde5323dd983048119cd28c24587c9fd3783abe137954d6c84 = $this->env->getExtension("native_profiler");
        $__internal_2d4423b50d73c4fde5323dd983048119cd28c24587c9fd3783abe137954d6c84->enter($__internal_2d4423b50d73c4fde5323dd983048119cd28c24587c9fd3783abe137954d6c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2d4423b50d73c4fde5323dd983048119cd28c24587c9fd3783abe137954d6c84->leave($__internal_2d4423b50d73c4fde5323dd983048119cd28c24587c9fd3783abe137954d6c84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

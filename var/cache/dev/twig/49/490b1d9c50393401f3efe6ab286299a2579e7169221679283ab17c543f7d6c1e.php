<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_fa07d4e45a450185584a4182f325dc027328eb5c9751314e8d48de5615d748a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb8298502ab75b262b566820cb51e4e5f8bf6a7a422473b18ac824713103c62 = $this->env->getExtension("native_profiler");
        $__internal_0fb8298502ab75b262b566820cb51e4e5f8bf6a7a422473b18ac824713103c62->enter($__internal_0fb8298502ab75b262b566820cb51e4e5f8bf6a7a422473b18ac824713103c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb8298502ab75b262b566820cb51e4e5f8bf6a7a422473b18ac824713103c62->leave($__internal_0fb8298502ab75b262b566820cb51e4e5f8bf6a7a422473b18ac824713103c62_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_699d1d00846c5430d9f01d8a3c5f8ab0ba7c068be229e77ccacbcc666c9096d9 = $this->env->getExtension("native_profiler");
        $__internal_699d1d00846c5430d9f01d8a3c5f8ab0ba7c068be229e77ccacbcc666c9096d9->enter($__internal_699d1d00846c5430d9f01d8a3c5f8ab0ba7c068be229e77ccacbcc666c9096d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_699d1d00846c5430d9f01d8a3c5f8ab0ba7c068be229e77ccacbcc666c9096d9->leave($__internal_699d1d00846c5430d9f01d8a3c5f8ab0ba7c068be229e77ccacbcc666c9096d9_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */

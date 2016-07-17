<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7bb8f511a0fb93c10fac5806aa3ed24a64396f2c98fd78b596c495c19816f439 extends Twig_Template
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
        $__internal_b2d9b4b1fd3cadde7c3bed3fa3811c686acd840854f82dd7ba39f5bfaee0380f = $this->env->getExtension("native_profiler");
        $__internal_b2d9b4b1fd3cadde7c3bed3fa3811c686acd840854f82dd7ba39f5bfaee0380f->enter($__internal_b2d9b4b1fd3cadde7c3bed3fa3811c686acd840854f82dd7ba39f5bfaee0380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_b2d9b4b1fd3cadde7c3bed3fa3811c686acd840854f82dd7ba39f5bfaee0380f->leave($__internal_b2d9b4b1fd3cadde7c3bed3fa3811c686acd840854f82dd7ba39f5bfaee0380f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6c1b40d77e2406e809eac2174f82d2deb78fb1618ad7399e24191e413eac3cf8 extends Twig_Template
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
        $__internal_45266a2e9ad03b7cf888be11bd5f643b3fe4e870c127e314581d8292f3472a2d = $this->env->getExtension("native_profiler");
        $__internal_45266a2e9ad03b7cf888be11bd5f643b3fe4e870c127e314581d8292f3472a2d->enter($__internal_45266a2e9ad03b7cf888be11bd5f643b3fe4e870c127e314581d8292f3472a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_45266a2e9ad03b7cf888be11bd5f643b3fe4e870c127e314581d8292f3472a2d->leave($__internal_45266a2e9ad03b7cf888be11bd5f643b3fe4e870c127e314581d8292f3472a2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

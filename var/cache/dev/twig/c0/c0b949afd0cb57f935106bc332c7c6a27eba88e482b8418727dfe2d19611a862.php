<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_647363b721817ef8c47f390248c45515b05fd21e70581bedebfe49b1606a41b2 extends Twig_Template
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
        $__internal_570ad7be59dd04c92fdc8c135e8ff4dd3041db72b7382b7175ac3c651ee2ab7c = $this->env->getExtension("native_profiler");
        $__internal_570ad7be59dd04c92fdc8c135e8ff4dd3041db72b7382b7175ac3c651ee2ab7c->enter($__internal_570ad7be59dd04c92fdc8c135e8ff4dd3041db72b7382b7175ac3c651ee2ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        
        $__internal_570ad7be59dd04c92fdc8c135e8ff4dd3041db72b7382b7175ac3c651ee2ab7c->leave($__internal_570ad7be59dd04c92fdc8c135e8ff4dd3041db72b7382b7175ac3c651ee2ab7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

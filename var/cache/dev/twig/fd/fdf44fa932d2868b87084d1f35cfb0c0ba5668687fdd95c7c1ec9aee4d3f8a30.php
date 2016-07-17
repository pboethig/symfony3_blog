<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_697f833a2458c83944d91b5e45af572d498664f8b2f0d675eb06a5dd5f77f71e extends Twig_Template
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
        $__internal_632b79d204edef59333c7f5db8eeede29cd67080f2faa8c95b2b8082469e520c = $this->env->getExtension("native_profiler");
        $__internal_632b79d204edef59333c7f5db8eeede29cd67080f2faa8c95b2b8082469e520c->enter($__internal_632b79d204edef59333c7f5db8eeede29cd67080f2faa8c95b2b8082469e520c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_632b79d204edef59333c7f5db8eeede29cd67080f2faa8c95b2b8082469e520c->leave($__internal_632b79d204edef59333c7f5db8eeede29cd67080f2faa8c95b2b8082469e520c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

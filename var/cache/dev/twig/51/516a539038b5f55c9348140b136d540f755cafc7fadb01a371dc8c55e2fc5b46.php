<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0f5c2f04c46f43f1b728f90a73fec03222ffbfbbc0c7623bf96ad9fb60a783af extends Twig_Template
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
        $__internal_87e5bc4d626a352cf5c847e3a63a5c22ad15010dc9c700f742ed1f9681fb5794 = $this->env->getExtension("native_profiler");
        $__internal_87e5bc4d626a352cf5c847e3a63a5c22ad15010dc9c700f742ed1f9681fb5794->enter($__internal_87e5bc4d626a352cf5c847e3a63a5c22ad15010dc9c700f742ed1f9681fb5794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\" />
";
        
        $__internal_87e5bc4d626a352cf5c847e3a63a5c22ad15010dc9c700f742ed1f9681fb5794->leave($__internal_87e5bc4d626a352cf5c847e3a63a5c22ad15010dc9c700f742ed1f9681fb5794_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_14f4780711c9a7497c9f033b8c4dd3c8409a24be56e6f36b9f1b1833b30c7cee extends Twig_Template
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
        $__internal_d370a914042cd3ac82e069b6fd1ec637d20d3ca5894a9383002e5eb67092f579 = $this->env->getExtension("native_profiler");
        $__internal_d370a914042cd3ac82e069b6fd1ec637d20d3ca5894a9383002e5eb67092f579->enter($__internal_d370a914042cd3ac82e069b6fd1ec637d20d3ca5894a9383002e5eb67092f579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d370a914042cd3ac82e069b6fd1ec637d20d3ca5894a9383002e5eb67092f579->leave($__internal_d370a914042cd3ac82e069b6fd1ec637d20d3ca5894a9383002e5eb67092f579_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

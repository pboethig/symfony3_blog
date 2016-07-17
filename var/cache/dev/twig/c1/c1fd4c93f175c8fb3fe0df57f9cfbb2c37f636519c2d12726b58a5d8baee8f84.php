<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a93fa27e2eb33b7c242a7450d719368a29122829ad8af98750d3e25c0ede4826 extends Twig_Template
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
        $__internal_719d2790a04eb45ea72983190d7729617e38cfaede771e61a5ded1ffed8218fc = $this->env->getExtension("native_profiler");
        $__internal_719d2790a04eb45ea72983190d7729617e38cfaede771e61a5ded1ffed8218fc->enter($__internal_719d2790a04eb45ea72983190d7729617e38cfaede771e61a5ded1ffed8218fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : null);
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_719d2790a04eb45ea72983190d7729617e38cfaede771e61a5ded1ffed8218fc->leave($__internal_719d2790a04eb45ea72983190d7729617e38cfaede771e61a5ded1ffed8218fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

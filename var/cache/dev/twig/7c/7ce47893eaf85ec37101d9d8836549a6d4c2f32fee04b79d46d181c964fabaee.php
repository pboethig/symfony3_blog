<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_676ac6895c5cb0a8199906abf4105bad377c55598eb6f0d13830e5574c8000f7 extends Twig_Template
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
        $__internal_287e0f64f84b6c3689c16811d7f5ede010b1a3387008140948c3bb0187c9fb59 = $this->env->getExtension("native_profiler");
        $__internal_287e0f64f84b6c3689c16811d7f5ede010b1a3387008140948c3bb0187c9fb59->enter($__internal_287e0f64f84b6c3689c16811d7f5ede010b1a3387008140948c3bb0187c9fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "css", null, true);
        echo "

*/
";
        
        $__internal_287e0f64f84b6c3689c16811d7f5ede010b1a3387008140948c3bb0187c9fb59->leave($__internal_287e0f64f84b6c3689c16811d7f5ede010b1a3387008140948c3bb0187c9fb59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

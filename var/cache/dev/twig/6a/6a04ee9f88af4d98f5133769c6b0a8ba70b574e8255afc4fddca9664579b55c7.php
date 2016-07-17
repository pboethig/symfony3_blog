<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_922d1e10f65547b56ff4001d52eb315a45b6fa4281ee9389acec2dee10cbb198 extends Twig_Template
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
        $__internal_9ba8570f43921cdbb605ad497d7908ac7fcbbe765922c42f978d1ed4152cf03f = $this->env->getExtension("native_profiler");
        $__internal_9ba8570f43921cdbb605ad497d7908ac7fcbbe765922c42f978d1ed4152cf03f->enter($__internal_9ba8570f43921cdbb605ad497d7908ac7fcbbe765922c42f978d1ed4152cf03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "js", null, true);
        echo "

*/
";
        
        $__internal_9ba8570f43921cdbb605ad497d7908ac7fcbbe765922c42f978d1ed4152cf03f->leave($__internal_9ba8570f43921cdbb605ad497d7908ac7fcbbe765922c42f978d1ed4152cf03f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

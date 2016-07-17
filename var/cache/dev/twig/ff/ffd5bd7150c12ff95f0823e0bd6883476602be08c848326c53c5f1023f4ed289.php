<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_231a38b7eff536e28a4a27cdd64ba16d93b59ba0ff134e480a5d1c2d5457ec33 extends Twig_Template
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
        $__internal_dad33f1844179d3762ad2249bcbe16774077e56624585d8eb4f6137291cfcf85 = $this->env->getExtension("native_profiler");
        $__internal_dad33f1844179d3762ad2249bcbe16774077e56624585d8eb4f6137291cfcf85->enter($__internal_dad33f1844179d3762ad2249bcbe16774077e56624585d8eb4f6137291cfcf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()))));
        echo "
";
        
        $__internal_dad33f1844179d3762ad2249bcbe16774077e56624585d8eb4f6137291cfcf85->leave($__internal_dad33f1844179d3762ad2249bcbe16774077e56624585d8eb4f6137291cfcf85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

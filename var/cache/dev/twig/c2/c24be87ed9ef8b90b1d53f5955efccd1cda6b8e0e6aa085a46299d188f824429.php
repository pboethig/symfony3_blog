<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0a052e985caeccd420a97fb2af00f12ed25096633e67ecd6e6c82544ffeb1315 extends Twig_Template
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
        $__internal_1ec6145a28e1978ba2550a262132444eed96b82b957e151a6acb89ef3a5e9e6b = $this->env->getExtension("native_profiler");
        $__internal_1ec6145a28e1978ba2550a262132444eed96b82b957e151a6acb89ef3a5e9e6b->enter($__internal_1ec6145a28e1978ba2550a262132444eed96b82b957e151a6acb89ef3a5e9e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : null), "message" => (isset($context["status_text"]) ? $context["status_text"] : null))));
        echo "
";
        
        $__internal_1ec6145a28e1978ba2550a262132444eed96b82b957e151a6acb89ef3a5e9e6b->leave($__internal_1ec6145a28e1978ba2550a262132444eed96b82b957e151a6acb89ef3a5e9e6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

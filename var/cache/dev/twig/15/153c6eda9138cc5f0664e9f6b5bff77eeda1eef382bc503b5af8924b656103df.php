<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0b032c5c020176b85efbb15bcc493d3b922dea74b7d1682be532113f56b79079 extends Twig_Template
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
        $__internal_bdd9d0c6c19baf322582a9e7240bd1c7389e255e60967f62df29e04a6eb6488b = $this->env->getExtension("native_profiler");
        $__internal_bdd9d0c6c19baf322582a9e7240bd1c7389e255e60967f62df29e04a6eb6488b->enter($__internal_bdd9d0c6c19baf322582a9e7240bd1c7389e255e60967f62df29e04a6eb6488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
        // line 3
        echo "*/
";
        
        $__internal_bdd9d0c6c19baf322582a9e7240bd1c7389e255e60967f62df29e04a6eb6488b->leave($__internal_bdd9d0c6c19baf322582a9e7240bd1c7389e255e60967f62df29e04a6eb6488b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

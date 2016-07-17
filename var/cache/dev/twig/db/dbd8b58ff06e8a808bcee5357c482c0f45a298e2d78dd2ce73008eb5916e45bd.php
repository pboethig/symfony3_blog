<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_046dbd12d8352d0364ca440f768c519cf773d27018d78b9cc3e7e37442ae421e extends Twig_Template
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
        $__internal_8446afe03ae9bb2eaf5839bda6a8fd297978eb2640ee3495bbb25075c6ebe183 = $this->env->getExtension("native_profiler");
        $__internal_8446afe03ae9bb2eaf5839bda6a8fd297978eb2640ee3495bbb25075c6ebe183->enter($__internal_8446afe03ae9bb2eaf5839bda6a8fd297978eb2640ee3495bbb25075c6ebe183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8446afe03ae9bb2eaf5839bda6a8fd297978eb2640ee3495bbb25075c6ebe183->leave($__internal_8446afe03ae9bb2eaf5839bda6a8fd297978eb2640ee3495bbb25075c6ebe183_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

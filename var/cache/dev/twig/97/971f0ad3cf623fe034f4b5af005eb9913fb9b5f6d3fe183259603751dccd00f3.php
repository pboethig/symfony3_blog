<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_2d7317a7ac889f3429b814845dd0fa7f997afeb189f92b1c8e7e83ff69779ffd extends Twig_Template
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
        $__internal_08631010454d14e17ea441d26e5c878d164a0f161042c165967d17c05ee2fe5c = $this->env->getExtension("native_profiler");
        $__internal_08631010454d14e17ea441d26e5c878d164a0f161042c165967d17c05ee2fe5c->enter($__internal_08631010454d14e17ea441d26e5c878d164a0f161042c165967d17c05ee2fe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null)) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : null)))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : null), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : null))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : null))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : null), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_08631010454d14e17ea441d26e5c878d164a0f161042c165967d17c05ee2fe5c->leave($__internal_08631010454d14e17ea441d26e5c878d164a0f161042c165967d17c05ee2fe5c_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if sinceVersion is empty and untilVersion is empty %}*/
/* **/
/* {% else %}*/
/*     {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}*/
/*     {% if untilVersion is not empty %}*/
/*         {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* */

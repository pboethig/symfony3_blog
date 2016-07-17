<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_514734bc00bffabb46a2ba2a3c1821faf8ffdfa7a88cce4d4ff7dd98897aeefc extends Twig_Template
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
        $__internal_2a009949129393c2165ee0bebec143dfbc613ac31654e54294c7500e1c9bf5c9 = $this->env->getExtension("native_profiler");
        $__internal_2a009949129393c2165ee0bebec143dfbc613ac31654e54294c7500e1c9bf5c9->enter($__internal_2a009949129393c2165ee0bebec143dfbc613ac31654e54294c7500e1c9bf5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) ? $context["status_code"] : null) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : null)) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2a009949129393c2165ee0bebec143dfbc613ac31654e54294c7500e1c9bf5c9->leave($__internal_2a009949129393c2165ee0bebec143dfbc613ac31654e54294c7500e1c9bf5c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  44 => 5,  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* [exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}*/
/* [message] {{ exception.message }}*/
/* {% for i, e in exception.toarray %}*/
/* [{{ i + 1 }}] {{ e.class }}: {{ e.message }}*/
/* {% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}*/
/* */
/* {% endfor %}*/
/* */

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ec6ea796f13fb87749350c0de358ab8251d32546d558455a7687ba56099435e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f186f78f1281ea610617bec4e355181a0826e735ba953ce690424f99575c269d = $this->env->getExtension("native_profiler");
        $__internal_f186f78f1281ea610617bec4e355181a0826e735ba953ce690424f99575c269d->enter($__internal_f186f78f1281ea610617bec4e355181a0826e735ba953ce690424f99575c269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f186f78f1281ea610617bec4e355181a0826e735ba953ce690424f99575c269d->leave($__internal_f186f78f1281ea610617bec4e355181a0826e735ba953ce690424f99575c269d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94d4bcdedafce94bd81c2e52809dc69bbb1ac5d2174a940b84f320b5b6768e54 = $this->env->getExtension("native_profiler");
        $__internal_94d4bcdedafce94bd81c2e52809dc69bbb1ac5d2174a940b84f320b5b6768e54->enter($__internal_94d4bcdedafce94bd81c2e52809dc69bbb1ac5d2174a940b84f320b5b6768e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94d4bcdedafce94bd81c2e52809dc69bbb1ac5d2174a940b84f320b5b6768e54->leave($__internal_94d4bcdedafce94bd81c2e52809dc69bbb1ac5d2174a940b84f320b5b6768e54_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

<?php

/* :replies:new.html.twig */
class __TwigTemplate_c66d6b594e43c5b0c4be4bc3f8e33fb95eba51cfe86f11c7ac14c8c36325ca2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":replies:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TritonCrudBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caf32095fbaaab93f4fe7e80a144a0772c74bddbb171d3a5022bdddcc72dc373 = $this->env->getExtension("native_profiler");
        $__internal_caf32095fbaaab93f4fe7e80a144a0772c74bddbb171d3a5022bdddcc72dc373->enter($__internal_caf32095fbaaab93f4fe7e80a144a0772c74bddbb171d3a5022bdddcc72dc373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":replies:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf32095fbaaab93f4fe7e80a144a0772c74bddbb171d3a5022bdddcc72dc373->leave($__internal_caf32095fbaaab93f4fe7e80a144a0772c74bddbb171d3a5022bdddcc72dc373_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f502ac1b7182b28feafb9a46c55c4338d7e780c933e58efbd5a3e8b7aec63cd = $this->env->getExtension("native_profiler");
        $__internal_3f502ac1b7182b28feafb9a46c55c4338d7e780c933e58efbd5a3e8b7aec63cd->enter($__internal_3f502ac1b7182b28feafb9a46c55c4338d7e780c933e58efbd5a3e8b7aec63cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - New reply
";
        
        $__internal_3f502ac1b7182b28feafb9a46c55c4338d7e780c933e58efbd5a3e8b7aec63cd->leave($__internal_3f502ac1b7182b28feafb9a46c55c4338d7e780c933e58efbd5a3e8b7aec63cd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_25daf0b2dd4e8e6f4a02ab56fe0d9e541db35a361dc487859e11c176c5a13ac2 = $this->env->getExtension("native_profiler");
        $__internal_25daf0b2dd4e8e6f4a02ab56fe0d9e541db35a361dc487859e11c176c5a13ac2->enter($__internal_25daf0b2dd4e8e6f4a02ab56fe0d9e541db35a361dc487859e11c176c5a13ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"panel\">
    <header class=\"panel-heading\">
        <h2>New reply</h2>
    </header>
    <div class=\"panel-body\">
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-success\"> <i class=\"fa fa-plus-square-o\" aria-hidden=\"true\"></i> Submit</button>
        </p>
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


                <div class=\"form-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("replies");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            </div>

    </div>
</section>


";
        
        $__internal_25daf0b2dd4e8e6f4a02ab56fe0d9e541db35a361dc487859e11c176c5a13ac2->leave($__internal_25daf0b2dd4e8e6f4a02ab56fe0d9e541db35a361dc487859e11c176c5a13ac2_prof);

    }

    public function getTemplateName()
    {
        return ":replies:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  74 => 18,  67 => 14,  63 => 13,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - New reply*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section class="panel">*/
/*     <header class="panel-heading">*/
/*         <h2>New reply</h2>*/
/*     </header>*/
/*     <div class="panel-body">*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <p>*/
/*             <button type="submit" class="btn btn-success"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> Submit</button>*/
/*         </p>*/
/*         {{ form_end(form) }}*/
/* */
/* */
/*                 <div class="form-group">*/
/*     <a class="btn btn-default" href="{{ path('replies') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
/*             </div>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */

<?php

/* :post:new.html.twig */
class __TwigTemplate_40c59a6fa4e3d24fff748fcfd445989420194510521ca5c7b2506fd33bac4c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_902691a264dcdddb5a118c871d799800962b8e09083f899a9040714a933dc8ec = $this->env->getExtension("native_profiler");
        $__internal_902691a264dcdddb5a118c871d799800962b8e09083f899a9040714a933dc8ec->enter($__internal_902691a264dcdddb5a118c871d799800962b8e09083f899a9040714a933dc8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902691a264dcdddb5a118c871d799800962b8e09083f899a9040714a933dc8ec->leave($__internal_902691a264dcdddb5a118c871d799800962b8e09083f899a9040714a933dc8ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe188731a5da20d9d99a0d428492e369f189d5645076433ced74f9cb3077d18 = $this->env->getExtension("native_profiler");
        $__internal_ffe188731a5da20d9d99a0d428492e369f189d5645076433ced74f9cb3077d18->enter($__internal_ffe188731a5da20d9d99a0d428492e369f189d5645076433ced74f9cb3077d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - New post
";
        
        $__internal_ffe188731a5da20d9d99a0d428492e369f189d5645076433ced74f9cb3077d18->leave($__internal_ffe188731a5da20d9d99a0d428492e369f189d5645076433ced74f9cb3077d18_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9743c1c727e2935db15e3474c0ab4b2444a7f38a7bb37d025575256deaa932e = $this->env->getExtension("native_profiler");
        $__internal_d9743c1c727e2935db15e3474c0ab4b2444a7f38a7bb37d025575256deaa932e->enter($__internal_d9743c1c727e2935db15e3474c0ab4b2444a7f38a7bb37d025575256deaa932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"panel\">
    <header class=\"panel-heading\">
        <h2>New post</h2>
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
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            </div>

    </div>
</section>


";
        
        $__internal_d9743c1c727e2935db15e3474c0ab4b2444a7f38a7bb37d025575256deaa932e->leave($__internal_d9743c1c727e2935db15e3474c0ab4b2444a7f38a7bb37d025575256deaa932e_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
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
/* {{ parent() }} - New post*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section class="panel">*/
/*     <header class="panel-heading">*/
/*         <h2>New post</h2>*/
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
/*     <a class="btn btn-default" href="{{ path('post') }}">*/
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

<?php

/* user/new.html.twig */
class __TwigTemplate_c9a9a1b5156a0c601726d59c82325b000164026e000d069cc7d994cf1208cc04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", "user/new.html.twig", 1);
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
        $__internal_5ac27a95e1b8043932cc0652da949b0b7eec39664d57374a99f2f4046603399d = $this->env->getExtension("native_profiler");
        $__internal_5ac27a95e1b8043932cc0652da949b0b7eec39664d57374a99f2f4046603399d->enter($__internal_5ac27a95e1b8043932cc0652da949b0b7eec39664d57374a99f2f4046603399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac27a95e1b8043932cc0652da949b0b7eec39664d57374a99f2f4046603399d->leave($__internal_5ac27a95e1b8043932cc0652da949b0b7eec39664d57374a99f2f4046603399d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd16c93a16a5d85ee9bf4e9d9ef4125aa3ced5db94cea5bd48d635a28cebfff8 = $this->env->getExtension("native_profiler");
        $__internal_fd16c93a16a5d85ee9bf4e9d9ef4125aa3ced5db94cea5bd48d635a28cebfff8->enter($__internal_fd16c93a16a5d85ee9bf4e9d9ef4125aa3ced5db94cea5bd48d635a28cebfff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - New user
";
        
        $__internal_fd16c93a16a5d85ee9bf4e9d9ef4125aa3ced5db94cea5bd48d635a28cebfff8->leave($__internal_fd16c93a16a5d85ee9bf4e9d9ef4125aa3ced5db94cea5bd48d635a28cebfff8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_278ef277d9c3389112117859685c346198c9a580f19a61ce62658468bfc851b4 = $this->env->getExtension("native_profiler");
        $__internal_278ef277d9c3389112117859685c346198c9a580f19a61ce62658468bfc851b4->enter($__internal_278ef277d9c3389112117859685c346198c9a580f19a61ce62658468bfc851b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"panel\">
    <header class=\"panel-heading\">
        <h2>New user</h2>
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
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            </div>

    </div>
</section>


";
        
        $__internal_278ef277d9c3389112117859685c346198c9a580f19a61ce62658468bfc851b4->leave($__internal_278ef277d9c3389112117859685c346198c9a580f19a61ce62658468bfc851b4_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
/* {{ parent() }} - New user*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section class="panel">*/
/*     <header class="panel-heading">*/
/*         <h2>New user</h2>*/
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
/*     <a class="btn btn-default" href="{{ path('user') }}">*/
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

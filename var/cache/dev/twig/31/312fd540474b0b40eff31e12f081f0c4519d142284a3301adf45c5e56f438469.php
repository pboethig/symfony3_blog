<?php

/* :post:edit.html.twig */
class __TwigTemplate_03c78055b102663cb5a885ed5b9f29792ee8287da87489d4a0d0affede9ac5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":post:edit.html.twig", 1);
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
        $__internal_0bc49ced16a714f8c87b985a8012680b5a7fa020bcb89fbacfbad06c95e2a722 = $this->env->getExtension("native_profiler");
        $__internal_0bc49ced16a714f8c87b985a8012680b5a7fa020bcb89fbacfbad06c95e2a722->enter($__internal_0bc49ced16a714f8c87b985a8012680b5a7fa020bcb89fbacfbad06c95e2a722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc49ced16a714f8c87b985a8012680b5a7fa020bcb89fbacfbad06c95e2a722->leave($__internal_0bc49ced16a714f8c87b985a8012680b5a7fa020bcb89fbacfbad06c95e2a722_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2050e460a399d9783c998c90095dd34329e902f5b6682102b4459e27778f0a04 = $this->env->getExtension("native_profiler");
        $__internal_2050e460a399d9783c998c90095dd34329e902f5b6682102b4459e27778f0a04->enter($__internal_2050e460a399d9783c998c90095dd34329e902f5b6682102b4459e27778f0a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  Edit post
";
        
        $__internal_2050e460a399d9783c998c90095dd34329e902f5b6682102b4459e27778f0a04->leave($__internal_2050e460a399d9783c998c90095dd34329e902f5b6682102b4459e27778f0a04_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_508ab139734dcede45c00729a4973633eb2f3b567ea9fa93f5aa2cec1f4f4a99 = $this->env->getExtension("native_profiler");
        $__internal_508ab139734dcede45c00729a4973633eb2f3b567ea9fa93f5aa2cec1f4f4a99->enter($__internal_508ab139734dcede45c00729a4973633eb2f3b567ea9fa93f5aa2cec1f4f4a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<section class=\"panel\">

    <header class=\"panel-heading\">
        <h2> Post Edit</h2>
    </header>
    <div class=\"panel-body\">

        ";
        // line 16
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors')) {
            // line 17
            echo "        <div class=\"alert alert-block alert-error fade in form-errors\">
            ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
            echo "
        </div>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 23
            echo "        <div class=\"alert alert-error \">
             ";
            // line 24
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "        <div class=\"alert alert-success \">
             ";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "

        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fa fa-floppy-o\"></i> Edit
            </button>
        </p>
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "


                <div class=\"form-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            New
        </a>
                <form action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" style=\"display: inline-block\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Are you sure');\">
                <i class=\"fa fa-trash-o\"></i> 
                Delete</button>
        </form>
    </div>

    </div>

</section>

";
        
        $__internal_508ab139734dcede45c00729a4973633eb2f3b567ea9fa93f5aa2cec1f4f4a99->leave($__internal_508ab139734dcede45c00729a4973633eb2f3b567ea9fa93f5aa2cec1f4f4a99_prof);

    }

    public function getTemplateName()
    {
        return ":post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  152 => 54,  145 => 50,  138 => 46,  131 => 42,  122 => 36,  117 => 34,  113 => 32,  104 => 29,  101 => 28,  96 => 27,  87 => 24,  84 => 23,  80 => 22,  77 => 21,  71 => 18,  68 => 17,  66 => 16,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} -  Edit post*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <section class="panel">*/
/* */
/*     <header class="panel-heading">*/
/*         <h2> Post Edit</h2>*/
/*     </header>*/
/*     <div class="panel-body">*/
/* */
/*         {% if form_errors(edit_form) %}*/
/*         <div class="alert alert-block alert-error fade in form-errors">*/
/*             {{ form_errors(edit_form) }}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% for flash_message in app.session.flashbag.get('error') %}*/
/*         <div class="alert alert-error ">*/
/*              {{ flash_message }}*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% for flash_message in app.session.flashbag.get('success') %}*/
/*         <div class="alert alert-success ">*/
/*              {{ flash_message }}*/
/*         </div>*/
/*          {% endfor %}*/
/* */
/* */
/*         {{ form_start(edit_form) }}*/
/* */
/*         {{ form_widget(edit_form) }}*/
/*         <p>*/
/*             <button type="submit" class="btn btn-success">*/
/*                 <i class="fa fa-floppy-o"></i> Edit*/
/*             </button>*/
/*         </p>*/
/*         {{ form_end(edit_form) }}*/
/* */
/* */
/*                 <div class="form-group">*/
/*     <a class="btn btn-default" href="{{ path('post') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
/*                 <a class="btn btn-primary" href="{{ path('post_new') }}">*/
/*             <i class="fa fa-plus" aria-hidden="true"></i>*/
/*             New*/
/*         </a>*/
/*                 <form action="{{ path('post_delete', { 'id': post.id }) }}" method="post" style="display: inline-block">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure');">*/
/*                 <i class="fa fa-trash-o"></i> */
/*                 Delete</button>*/
/*         </form>*/
/*     </div>*/
/* */
/*     </div>*/
/* */
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* */

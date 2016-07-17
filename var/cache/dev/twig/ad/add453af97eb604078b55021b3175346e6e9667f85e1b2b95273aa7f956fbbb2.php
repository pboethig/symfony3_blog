<?php

/* :replies:show.html.twig */
class __TwigTemplate_4634028c7df0cacc3822b961da721330ef65ac4f048490f0a1ba79834ab82096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":replies:show.html.twig", 1);
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
        $__internal_6a6193f943a674cf22e1ea9b94dc13614f6edb13262f1ea54ed2b144226ce698 = $this->env->getExtension("native_profiler");
        $__internal_6a6193f943a674cf22e1ea9b94dc13614f6edb13262f1ea54ed2b144226ce698->enter($__internal_6a6193f943a674cf22e1ea9b94dc13614f6edb13262f1ea54ed2b144226ce698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":replies:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6193f943a674cf22e1ea9b94dc13614f6edb13262f1ea54ed2b144226ce698->leave($__internal_6a6193f943a674cf22e1ea9b94dc13614f6edb13262f1ea54ed2b144226ce698_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a121f9a10eea12f289746d0fec87c0bc245068df419f9123147cf231149268e = $this->env->getExtension("native_profiler");
        $__internal_3a121f9a10eea12f289746d0fec87c0bc245068df419f9123147cf231149268e->enter($__internal_3a121f9a10eea12f289746d0fec87c0bc245068df419f9123147cf231149268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - reply
";
        
        $__internal_3a121f9a10eea12f289746d0fec87c0bc245068df419f9123147cf231149268e->leave($__internal_3a121f9a10eea12f289746d0fec87c0bc245068df419f9123147cf231149268e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e98bbc8c74691dfcdceb51cd0c6c1631fdabc8ebf9b4022cd5b4160fba928d2 = $this->env->getExtension("native_profiler");
        $__internal_2e98bbc8c74691dfcdceb51cd0c6c1631fdabc8ebf9b4022cd5b4160fba928d2->enter($__internal_2e98bbc8c74691dfcdceb51cd0c6c1631fdabc8ebf9b4022cd5b4160fba928d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<header class=\"panel-heading\">
    <h2> Replies</h2>
</header>
<div class=\"panel-body\">

    <form class=\"form form-vertical\">
        <fieldset>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Title</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "title", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Content</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "content", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Created</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 28
        if ($this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Updated</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "updated", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Id</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "id", array()), "html", null, true);
        echo "</span>
                </div>
            </div>        </fieldset>
    </form>
        <hr>
        <div class=\"form-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("replies");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            <a class=\"btn btn-success\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replies_edit", array("id" => $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            Edit
        </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("replies_new");
        echo "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            New
        </a>
                <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replies_delete", array("id" => $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" style=\"display: inline-block\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-danger\" type=\"submit\" onclick=\"return confirm('Are you sure');\">
                <i class=\"fa fa-trash-o\"></i> 
                Delete</button>
        </form>
    </div>

</div>
<hr>

";
        
        $__internal_2e98bbc8c74691dfcdceb51cd0c6c1631fdabc8ebf9b4022cd5b4160fba928d2->leave($__internal_2e98bbc8c74691dfcdceb51cd0c6c1631fdabc8ebf9b4022cd5b4160fba928d2_prof);

    }

    public function getTemplateName()
    {
        return ":replies:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  132 => 56,  125 => 52,  118 => 48,  111 => 44,  102 => 38,  94 => 33,  84 => 28,  76 => 23,  68 => 18,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - reply*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <header class="panel-heading">*/
/*     <h2> Replies</h2>*/
/* </header>*/
/* <div class="panel-body">*/
/* */
/*     <form class="form form-vertical">*/
/*         <fieldset>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Title</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ reply.title }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Content</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ reply.content }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Created</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{% if reply.created %}{{ reply.created|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Updated</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ reply.updated }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Id</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ reply.id }}</span>*/
/*                 </div>*/
/*             </div>        </fieldset>*/
/*     </form>*/
/*         <hr>*/
/*         <div class="form-group">*/
/*     <a class="btn btn-default" href="{{ path('replies') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
/*             <a class="btn btn-success" href="{{ path('replies_edit', { 'id':  reply.id }) }}">*/
/*             <i class="fa fa-pencil" aria-hidden="true"></i>*/
/*             Edit*/
/*         </a>*/
/*                 <a class="btn btn-primary" href="{{ path('replies_new') }}">*/
/*             <i class="fa fa-plus" aria-hidden="true"></i>*/
/*             New*/
/*         </a>*/
/*                 <form action="{{ path('replies_delete', { 'id': reply.id }) }}" method="post" style="display: inline-block">*/
/*             <input type="hidden" name="_method" value="DELETE" />*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure');">*/
/*                 <i class="fa fa-trash-o"></i> */
/*                 Delete</button>*/
/*         </form>*/
/*     </div>*/
/* */
/* </div>*/
/* <hr>*/
/* */
/* {% endblock %}*/
/* */
/* */

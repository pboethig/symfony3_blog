<?php

/* :post:show.html.twig */
class __TwigTemplate_01cd9b62a416409443585592a4902c890ff2e235a5190c0aea7b027d3b319a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":post:show.html.twig", 1);
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
        $__internal_4b0e9ccbdbc26edf7624362c97e16c36b928fe023f983adf2d742f8b51df5817 = $this->env->getExtension("native_profiler");
        $__internal_4b0e9ccbdbc26edf7624362c97e16c36b928fe023f983adf2d742f8b51df5817->enter($__internal_4b0e9ccbdbc26edf7624362c97e16c36b928fe023f983adf2d742f8b51df5817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0e9ccbdbc26edf7624362c97e16c36b928fe023f983adf2d742f8b51df5817->leave($__internal_4b0e9ccbdbc26edf7624362c97e16c36b928fe023f983adf2d742f8b51df5817_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_121bec550385cbc3da20fd9bcc8ca3f66636ce0c0dea926a36bbb4f3a21b00f6 = $this->env->getExtension("native_profiler");
        $__internal_121bec550385cbc3da20fd9bcc8ca3f66636ce0c0dea926a36bbb4f3a21b00f6->enter($__internal_121bec550385cbc3da20fd9bcc8ca3f66636ce0c0dea926a36bbb4f3a21b00f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - post
";
        
        $__internal_121bec550385cbc3da20fd9bcc8ca3f66636ce0c0dea926a36bbb4f3a21b00f6->leave($__internal_121bec550385cbc3da20fd9bcc8ca3f66636ce0c0dea926a36bbb4f3a21b00f6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_73c1414a5beba2a7cf2c46b9b192fdf01abcf7ed67002339092c98f7dc6298b9 = $this->env->getExtension("native_profiler");
        $__internal_73c1414a5beba2a7cf2c46b9b192fdf01abcf7ed67002339092c98f7dc6298b9->enter($__internal_73c1414a5beba2a7cf2c46b9b192fdf01abcf7ed67002339092c98f7dc6298b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<header class=\"panel-heading\">
    <h2> Post</h2>
</header>
<div class=\"panel-body\">

    <form class=\"form form-vertical\">
        <fieldset>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Title</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Content</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Created</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 28
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Updated</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 33
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Id</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "</span>
                </div>
            </div>        </fieldset>
    </form>
        <hr>
        <div class=\"form-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            <a class=\"btn btn-success\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            Edit
        </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            New
        </a>
                <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
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
        
        $__internal_73c1414a5beba2a7cf2c46b9b192fdf01abcf7ed67002339092c98f7dc6298b9->leave($__internal_73c1414a5beba2a7cf2c46b9b192fdf01abcf7ed67002339092c98f7dc6298b9_prof);

    }

    public function getTemplateName()
    {
        return ":post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  134 => 56,  127 => 52,  120 => 48,  113 => 44,  104 => 38,  94 => 33,  84 => 28,  76 => 23,  68 => 18,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - post*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <header class="panel-heading">*/
/*     <h2> Post</h2>*/
/* </header>*/
/* <div class="panel-body">*/
/* */
/*     <form class="form form-vertical">*/
/*         <fieldset>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Title</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ post.title }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Content</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ post.content }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Created</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Updated</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Id</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ post.id }}</span>*/
/*                 </div>*/
/*             </div>        </fieldset>*/
/*     </form>*/
/*         <hr>*/
/*         <div class="form-group">*/
/*     <a class="btn btn-default" href="{{ path('post') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
/*             <a class="btn btn-success" href="{{ path('post_edit', { 'id':  post.id }) }}">*/
/*             <i class="fa fa-pencil" aria-hidden="true"></i>*/
/*             Edit*/
/*         </a>*/
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
/* </div>*/
/* <hr>*/
/* */
/* {% endblock %}*/
/* */
/* */

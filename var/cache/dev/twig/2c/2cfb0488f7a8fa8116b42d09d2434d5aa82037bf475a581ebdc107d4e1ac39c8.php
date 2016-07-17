<?php

/* :user:show.html.twig */
class __TwigTemplate_e0171f59e7c5ba25a8ad85a357b4f0b6a8f32261a9c34f257060caec5075008d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_0e4a3851a7dbc60416efff7ca80d0709bc5d44d334feffde314f57fe3e5d3994 = $this->env->getExtension("native_profiler");
        $__internal_0e4a3851a7dbc60416efff7ca80d0709bc5d44d334feffde314f57fe3e5d3994->enter($__internal_0e4a3851a7dbc60416efff7ca80d0709bc5d44d334feffde314f57fe3e5d3994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4a3851a7dbc60416efff7ca80d0709bc5d44d334feffde314f57fe3e5d3994->leave($__internal_0e4a3851a7dbc60416efff7ca80d0709bc5d44d334feffde314f57fe3e5d3994_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4045f74a7683249d7f18142277089d80513cc2decbb0b14b4a41f8f2c8c588a = $this->env->getExtension("native_profiler");
        $__internal_c4045f74a7683249d7f18142277089d80513cc2decbb0b14b4a41f8f2c8c588a->enter($__internal_c4045f74a7683249d7f18142277089d80513cc2decbb0b14b4a41f8f2c8c588a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - user
";
        
        $__internal_c4045f74a7683249d7f18142277089d80513cc2decbb0b14b4a41f8f2c8c588a->leave($__internal_c4045f74a7683249d7f18142277089d80513cc2decbb0b14b4a41f8f2c8c588a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a93567ea59b3d413d7f9b8348ca10e90078a65c4a3486990a35321a6fb49b287 = $this->env->getExtension("native_profiler");
        $__internal_a93567ea59b3d413d7f9b8348ca10e90078a65c4a3486990a35321a6fb49b287->enter($__internal_a93567ea59b3d413d7f9b8348ca10e90078a65c4a3486990a35321a6fb49b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<header class=\"panel-heading\">
    <h2> User</h2>
</header>
<div class=\"panel-body\">

    <form class=\"form form-vertical\">
        <fieldset>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Username</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Email</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Password</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "password", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Firstname</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Lastname</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Created</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "created", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Updated</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "updated", array()), "html", null, true);
        echo "</span>
                </div>
            </div>            <div class=\"control-group\">
                <label class=\"col-sm-2 control-label\">Id</label>
                <div class=\"col-sm-10\">
                    <span class=\"input-xlarge uneditable-input\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "</span>
                </div>
            </div>        </fieldset>
    </form>
        <hr>
        <div class=\"form-group\">
    <a class=\"btn btn-default\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
            <a class=\"btn btn-success\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            Edit
        </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            New
        </a>
                <form action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" style=\"display: inline-block\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 73
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
        
        $__internal_a93567ea59b3d413d7f9b8348ca10e90078a65c4a3486990a35321a6fb49b287->leave($__internal_a93567ea59b3d413d7f9b8348ca10e90078a65c4a3486990a35321a6fb49b287_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  154 => 71,  147 => 67,  140 => 63,  133 => 59,  124 => 53,  116 => 48,  108 => 43,  100 => 38,  92 => 33,  84 => 28,  76 => 23,  68 => 18,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - user*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <header class="panel-heading">*/
/*     <h2> User</h2>*/
/* </header>*/
/* <div class="panel-body">*/
/* */
/*     <form class="form form-vertical">*/
/*         <fieldset>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Username</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.username }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Email</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.email }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Password</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.password }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Firstname</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.firstname }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Lastname</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.lastname }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Created</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.created }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Updated</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.updated }}</span>*/
/*                 </div>*/
/*             </div>            <div class="control-group">*/
/*                 <label class="col-sm-2 control-label">Id</label>*/
/*                 <div class="col-sm-10">*/
/*                     <span class="input-xlarge uneditable-input">{{ user.id }}</span>*/
/*                 </div>*/
/*             </div>        </fieldset>*/
/*     </form>*/
/*         <hr>*/
/*         <div class="form-group">*/
/*     <a class="btn btn-default" href="{{ path('user') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
/*             <a class="btn btn-success" href="{{ path('user_edit', { 'id':  user.id }) }}">*/
/*             <i class="fa fa-pencil" aria-hidden="true"></i>*/
/*             Edit*/
/*         </a>*/
/*                 <a class="btn btn-primary" href="{{ path('user_new') }}">*/
/*             <i class="fa fa-plus" aria-hidden="true"></i>*/
/*             New*/
/*         </a>*/
/*                 <form action="{{ path('user_delete', { 'id': user.id }) }}" method="post" style="display: inline-block">*/
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

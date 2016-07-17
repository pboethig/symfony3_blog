<?php

/* :post:index.html.twig */
class __TwigTemplate_8c5a3dd512dd2d03b4036a797c52ba6a807c0727c67ef826299972c53abea71e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":post:index.html.twig", 1);
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
        $__internal_c3a7e9363dcf2fd6fe61e718bd613bbef17000430a6d35a7232a4b07e88dc1aa = $this->env->getExtension("native_profiler");
        $__internal_c3a7e9363dcf2fd6fe61e718bd613bbef17000430a6d35a7232a4b07e88dc1aa->enter($__internal_c3a7e9363dcf2fd6fe61e718bd613bbef17000430a6d35a7232a4b07e88dc1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a7e9363dcf2fd6fe61e718bd613bbef17000430a6d35a7232a4b07e88dc1aa->leave($__internal_c3a7e9363dcf2fd6fe61e718bd613bbef17000430a6d35a7232a4b07e88dc1aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be7d9813e5a3a86242c5e79dcd98114aab153604f571b98d73bdb9239d7cc141 = $this->env->getExtension("native_profiler");
        $__internal_be7d9813e5a3a86242c5e79dcd98114aab153604f571b98d73bdb9239d7cc141->enter($__internal_be7d9813e5a3a86242c5e79dcd98114aab153604f571b98d73bdb9239d7cc141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - post index
";
        
        $__internal_be7d9813e5a3a86242c5e79dcd98114aab153604f571b98d73bdb9239d7cc141->leave($__internal_be7d9813e5a3a86242c5e79dcd98114aab153604f571b98d73bdb9239d7cc141_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_84c7fd145873c2b417ac9e44fefb351929096e233d832a790aefa920b28f0a60 = $this->env->getExtension("native_profiler");
        $__internal_84c7fd145873c2b417ac9e44fefb351929096e233d832a790aefa920b28f0a60->enter($__internal_84c7fd145873c2b417ac9e44fefb351929096e233d832a790aefa920b28f0a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<header class=\"panel-heading\">
    <h2>Post list </h2>
</header>
<div class=\"panel-body\">

    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "            <div class=\"alert alert-error \">
                 ";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "            <div class=\"alert alert-success \">
                 ";
            // line 22
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>


            <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 31
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors')) {
            // line 32
            echo "                <div class=\"alert alert-block alert-error fade in form-errors\">
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
            echo "
                </div>
                ";
        }
        // line 36
        echo "            </div>
        </div>

        <div class=\"filters-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                Filter
                <span class=\"caret\"></span>
            </a>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"filters\" class=\"collapse\">

                    <form class=\"well\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\" method=\"get\" >
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "title", array()), 'row');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "content", array()), 'row');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "created", array()), 'row');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "updated", array()), 'row');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "

                        <p>
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"filter_action\" value=\"filter\">Filter</button>
                            <button type=\"submit\" class=\"btn btn-default\" name=\"filter_action\" value=\"reset\">Reset</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    
            <div class=\"row\">
            <div class=\"col-md-2 form-group pull-right\">
                <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\">
                    <i class=\"fa fa-plus\"></i> New
                </a>
            </div>
        </div>

    
            <form method=\"POST\" action=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("post_bulk_action");
        echo " \">
        
        <div class=\"row\">
            <div class=\"col-md-12\">

                <table class=\"table table-striped table-bordered table-hover table-condensed\">
                    <thead>
                        <tr>
                            
                                <th width=\"20px\"><input type=\"checkbox\" class=\"check-all\" onclick=\"toggle(this)\"></th>
                                
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Id</th>
                            <th width = \"130px\">List</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 97
            echo "                        <tr>
                                                            <td><input type=\"checkbox\" name=\"ids[]\" class=\"check-all\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\"/></td>
                                
                            <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 102
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 103
            if ($this->getAttribute($context["post"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
                            <td>    <a  onclick=\"return confirm('Are you sure!');\" title=\"Delete\" class=\"btn btn-danger btn-sm\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_by_id_delete", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
        <i class=\"fa fa-trash-o\"></i>
    </a>
<a title='show' class=\"btn btn-success btn-sm\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
    <i class=\"fa fa-eye\"></i>
</a>
    <a  title='edit' class=\"btn btn-primary btn-sm\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\"></i>
    </a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    </tbody>
                </table>

            </div>
        </div>
        
            <div class=\"row\">
                <div class=\"col-md-4 pull-left\">
                    <div class=\"pagination form-inline \">
                        <select class = \"form-control\" name=\"bulk_action\" >
                            <option value=\"delete\">DELETE</option>
                        </select>
                        <input type=\"submit\"  class=\"form-control btn btn-danger btn-sm\">
                    </div>
                </div>

                <div class=\"col-md-4 col-md-offset-4 text-right\">
                     ";
        // line 135
        echo (isset($context["pagerHtml"]) ? $context["pagerHtml"] : null);
        echo " 
                </div>
            </div>
        </form>

        <script type=\"text/javascript\">
            function toggle(source) {
                var aInputs = document.getElementsByTagName('input');
                for (var i = 0; i < aInputs.length; i++) {
                    if (aInputs[i] != source && aInputs[i].className == source.className) {
                        aInputs[i].checked = source.checked;
                    }
                }
            }
        </script>
    
</div>


";
        
        $__internal_84c7fd145873c2b417ac9e44fefb351929096e233d832a790aefa920b28f0a60->leave($__internal_84c7fd145873c2b417ac9e44fefb351929096e233d832a790aefa920b28f0a60_prof);

    }

    public function getTemplateName()
    {
        return ":post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 135,  269 => 118,  256 => 111,  250 => 108,  244 => 105,  240 => 104,  234 => 103,  228 => 102,  224 => 101,  218 => 100,  213 => 98,  210 => 97,  206 => 96,  183 => 76,  173 => 69,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  117 => 36,  111 => 33,  108 => 32,  106 => 31,  98 => 25,  89 => 22,  86 => 21,  81 => 20,  72 => 17,  69 => 16,  65 => 15,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - post index*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <header class="panel-heading">*/
/*     <h2>Post list </h2>*/
/* </header>*/
/* <div class="panel-body">*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {% for flash_message in app.session.flashbag.get('error') %}*/
/*             <div class="alert alert-error ">*/
/*                  {{ flash_message }}*/
/*             </div>*/
/*             {% endfor %}*/
/*             {% for flash_message in app.session.flashbag.get('success') %}*/
/*             <div class="alert alert-success ">*/
/*                  {{ flash_message }}*/
/*             </div>*/
/*              {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*             <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% if form_errors(filterForm) %}*/
/*                 <div class="alert alert-block alert-error fade in form-errors">*/
/*                     {{ form_errors(filterForm) }}*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="filters-right">*/
/*             <a class="btn dropdown-toggle" data-toggle="collapse" data-target="#filters">*/
/*                 Filter*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div id="filters" class="collapse">*/
/* */
/*                     <form class="well" action="{{ path('post') }}" method="get" >*/
/*                         {{ form_row(filterForm.title) }}*/
/*                         {{ form_row(filterForm.content) }}*/
/*                         {{ form_row(filterForm.created) }}*/
/*                         {{ form_row(filterForm.updated) }}*/
/*                         {{ form_row(filterForm.id) }}*/
/*                         {{ form_rest(filterForm) }}*/
/* */
/*                         <p>*/
/*                             <button type="submit" class="btn btn-primary" name="filter_action" value="filter">Filter</button>*/
/*                             <button type="submit" class="btn btn-default" name="filter_action" value="reset">Reset</button>*/
/*                         </p>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/*             <div class="row">*/
/*             <div class="col-md-2 form-group pull-right">*/
/*                 <a class="btn btn-primary likepaginator" href="{{ path('post_new') }}">*/
/*                     <i class="fa fa-plus"></i> New*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     */
/*             <form method="POST" action="{{ path('post_bulk_action') }} ">*/
/*         */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/* */
/*                 <table class="table table-striped table-bordered table-hover table-condensed">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             */
/*                                 <th width="20px"><input type="checkbox" class="check-all" onclick="toggle(this)"></th>*/
/*                                 */
/*                             <th>Title</th>*/
/*                             <th>Content</th>*/
/*                             <th>Created</th>*/
/*                             <th>Updated</th>*/
/*                             <th>Id</th>*/
/*                             <th width = "130px">List</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for post in posts %}*/
/*                         <tr>*/
/*                                                             <td><input type="checkbox" name="ids[]" class="check-all" value="{{post.id}}"/></td>*/
/*                                 */
/*                             <td><a href="{{ path('post_show', { 'id': post.id }) }}">{{ post.title }}</a></td>*/
/*                             <td>{{ post.content }}</td>*/
/*                             <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td>{{ post.id }}</td>*/
/*                             <td>    <a  onclick="return confirm('Are you sure!');" title="Delete" class="btn btn-danger btn-sm" href="{{ path('post_by_id_delete', { 'id': post.id}) }}">*/
/*         <i class="fa fa-trash-o"></i>*/
/*     </a>*/
/* <a title='show' class="btn btn-success btn-sm" href="{{ path('post_show', { 'id': post.id }) }}">*/
/*     <i class="fa fa-eye"></i>*/
/* </a>*/
/*     <a  title='edit' class="btn btn-primary btn-sm" href="{{ path('post_edit', { 'id': post.id }) }}">*/
/*         <i class="fa fa-pencil"></i>*/
/*     </a>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*             </div>*/
/*         </div>*/
/*         */
/*             <div class="row">*/
/*                 <div class="col-md-4 pull-left">*/
/*                     <div class="pagination form-inline ">*/
/*                         <select class = "form-control" name="bulk_action" >*/
/*                             <option value="delete">DELETE</option>*/
/*                         </select>*/
/*                         <input type="submit"  class="form-control btn btn-danger btn-sm">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-md-offset-4 text-right">*/
/*                      {{ pagerHtml|raw }} */
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/* */
/*         <script type="text/javascript">*/
/*             function toggle(source) {*/
/*                 var aInputs = document.getElementsByTagName('input');*/
/*                 for (var i = 0; i < aInputs.length; i++) {*/
/*                     if (aInputs[i] != source && aInputs[i].className == source.className) {*/
/*                         aInputs[i].checked = source.checked;*/
/*                     }*/
/*                 }*/
/*             }*/
/*         </script>*/
/*     */
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */

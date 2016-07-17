<?php

/* user/index.html.twig */
class __TwigTemplate_8ea9bd6dcc7e888a320ea415215beb85aaf0431d629e09d02f425c420d4bfa69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", "user/index.html.twig", 1);
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
        $__internal_f95e09574716e28c35d72b1465cd6d748a36fee6b54dd5be8366d51d5c6fb687 = $this->env->getExtension("native_profiler");
        $__internal_f95e09574716e28c35d72b1465cd6d748a36fee6b54dd5be8366d51d5c6fb687->enter($__internal_f95e09574716e28c35d72b1465cd6d748a36fee6b54dd5be8366d51d5c6fb687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95e09574716e28c35d72b1465cd6d748a36fee6b54dd5be8366d51d5c6fb687->leave($__internal_f95e09574716e28c35d72b1465cd6d748a36fee6b54dd5be8366d51d5c6fb687_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7f3a028951064d4301e776e0d78eab2dd142cefcc40a8754215c47abe310f3 = $this->env->getExtension("native_profiler");
        $__internal_4b7f3a028951064d4301e776e0d78eab2dd142cefcc40a8754215c47abe310f3->enter($__internal_4b7f3a028951064d4301e776e0d78eab2dd142cefcc40a8754215c47abe310f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - user index
";
        
        $__internal_4b7f3a028951064d4301e776e0d78eab2dd142cefcc40a8754215c47abe310f3->leave($__internal_4b7f3a028951064d4301e776e0d78eab2dd142cefcc40a8754215c47abe310f3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e22a9a87aaff214ea4bd33bd971b97bb303550ddd692852b5815704d9e4fc711 = $this->env->getExtension("native_profiler");
        $__internal_e22a9a87aaff214ea4bd33bd971b97bb303550ddd692852b5815704d9e4fc711->enter($__internal_e22a9a87aaff214ea4bd33bd971b97bb303550ddd692852b5815704d9e4fc711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<header class=\"panel-heading\">
    <h2>User list </h2>
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
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" method=\"get\" >
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "username", array()), 'row');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "email", array()), 'row');
        echo "
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "password", array()), 'row');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "firstname", array()), 'row');
        echo "
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "lastname", array()), 'row');
        echo "
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "created", array()), 'row');
        echo "
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "updated", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "id", array()), 'row');
        echo "
                        ";
        // line 59
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
        // line 72
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
                    <i class=\"fa fa-plus\"></i> New
                </a>
            </div>
        </div>

    
            <form method=\"POST\" action=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("user_bulk_action");
        echo " \">
        
        <div class=\"row\">
            <div class=\"col-md-12\">

                <table class=\"table table-striped table-bordered table-hover table-condensed\">
                    <thead>
                        <tr>
                            
                                <th width=\"20px\"><input type=\"checkbox\" class=\"check-all\" onclick=\"toggle(this)\"></th>
                                
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Id</th>
                            <th width = \"130px\">List</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 103
            echo "                        <tr>
                                                            <td><input type=\"checkbox\" name=\"ids[]\" class=\"check-all\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"/></td>
                                
                            <td><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "created", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "updated", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                            <td>    <a  onclick=\"return confirm('Are you sure!');\" title=\"Delete\" class=\"btn btn-danger btn-sm\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_by_id_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
        <i class=\"fa fa-trash-o\"></i>
    </a>
<a title='show' class=\"btn btn-success btn-sm\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
    <i class=\"fa fa-eye\"></i>
</a>
    <a  title='edit' class=\"btn btn-primary btn-sm\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\"></i>
    </a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
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
        // line 144
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
        
        $__internal_e22a9a87aaff214ea4bd33bd971b97bb303550ddd692852b5815704d9e4fc711->leave($__internal_e22a9a87aaff214ea4bd33bd971b97bb303550ddd692852b5815704d9e4fc711_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 144,  292 => 127,  279 => 120,  273 => 117,  267 => 114,  263 => 113,  259 => 112,  255 => 111,  251 => 110,  247 => 109,  243 => 108,  239 => 107,  233 => 106,  228 => 104,  225 => 103,  221 => 102,  195 => 79,  185 => 72,  169 => 59,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  117 => 36,  111 => 33,  108 => 32,  106 => 31,  98 => 25,  89 => 22,  86 => 21,  81 => 20,  72 => 17,  69 => 16,  65 => 15,  56 => 8,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TritonCrudBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent() }} - user index*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <header class="panel-heading">*/
/*     <h2>User list </h2>*/
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
/*                     <form class="well" action="{{ path('user') }}" method="get" >*/
/*                         {{ form_row(filterForm.username) }}*/
/*                         {{ form_row(filterForm.email) }}*/
/*                         {{ form_row(filterForm.password) }}*/
/*                         {{ form_row(filterForm.firstname) }}*/
/*                         {{ form_row(filterForm.lastname) }}*/
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
/*                 <a class="btn btn-primary likepaginator" href="{{ path('user_new') }}">*/
/*                     <i class="fa fa-plus"></i> New*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     */
/*             <form method="POST" action="{{ path('user_bulk_action') }} ">*/
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
/*                             <th>Username</th>*/
/*                             <th>Email</th>*/
/*                             <th>Password</th>*/
/*                             <th>Firstname</th>*/
/*                             <th>Lastname</th>*/
/*                             <th>Created</th>*/
/*                             <th>Updated</th>*/
/*                             <th>Id</th>*/
/*                             <th width = "130px">List</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for user in users %}*/
/*                         <tr>*/
/*                                                             <td><input type="checkbox" name="ids[]" class="check-all" value="{{user.id}}"/></td>*/
/*                                 */
/*                             <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.username }}</a></td>*/
/*                             <td>{{ user.email }}</td>*/
/*                             <td>{{ user.password }}</td>*/
/*                             <td>{{ user.firstname }}</td>*/
/*                             <td>{{ user.lastname }}</td>*/
/*                             <td>{{ user.created }}</td>*/
/*                             <td>{{ user.updated }}</td>*/
/*                             <td>{{ user.id }}</td>*/
/*                             <td>    <a  onclick="return confirm('Are you sure!');" title="Delete" class="btn btn-danger btn-sm" href="{{ path('user_by_id_delete', { 'id': user.id}) }}">*/
/*         <i class="fa fa-trash-o"></i>*/
/*     </a>*/
/* <a title='show' class="btn btn-success btn-sm" href="{{ path('user_show', { 'id': user.id }) }}">*/
/*     <i class="fa fa-eye"></i>*/
/* </a>*/
/*     <a  title='edit' class="btn btn-primary btn-sm" href="{{ path('user_edit', { 'id': user.id }) }}">*/
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

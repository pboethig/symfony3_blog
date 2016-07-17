<?php

/* :replies:edit.html.twig */
class __TwigTemplate_ab58db1035eff9388647bdc5692b0636881cfa4d5446e605d8c68a85c470f704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TritonCrudBundle::base.html.twig", ":replies:edit.html.twig", 1);
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
        $__internal_25a527304d0cec19f4fcc1e32a51326e6a17bb9ad684d96dfb86adc89c0dc47d = $this->env->getExtension("native_profiler");
        $__internal_25a527304d0cec19f4fcc1e32a51326e6a17bb9ad684d96dfb86adc89c0dc47d->enter($__internal_25a527304d0cec19f4fcc1e32a51326e6a17bb9ad684d96dfb86adc89c0dc47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":replies:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a527304d0cec19f4fcc1e32a51326e6a17bb9ad684d96dfb86adc89c0dc47d->leave($__internal_25a527304d0cec19f4fcc1e32a51326e6a17bb9ad684d96dfb86adc89c0dc47d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1298e77088ba3085eea41e00a7d399d5ff08b7cd418b5c6498f775369b0c990b = $this->env->getExtension("native_profiler");
        $__internal_1298e77088ba3085eea41e00a7d399d5ff08b7cd418b5c6498f775369b0c990b->enter($__internal_1298e77088ba3085eea41e00a7d399d5ff08b7cd418b5c6498f775369b0c990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -  Edit reply
";
        
        $__internal_1298e77088ba3085eea41e00a7d399d5ff08b7cd418b5c6498f775369b0c990b->leave($__internal_1298e77088ba3085eea41e00a7d399d5ff08b7cd418b5c6498f775369b0c990b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_306893cc5c0fe1adba327b2ec149b496c73609f36d9639b1384e1ab343b604f6 = $this->env->getExtension("native_profiler");
        $__internal_306893cc5c0fe1adba327b2ec149b496c73609f36d9639b1384e1ab343b604f6->enter($__internal_306893cc5c0fe1adba327b2ec149b496c73609f36d9639b1384e1ab343b604f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<section class=\"panel\">

    <header class=\"panel-heading\">
        <h2> Replies Edit</h2>
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
        echo $this->env->getExtension('routing')->getPath("replies");
        echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        Back to list
    </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("replies_new");
        echo "\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
            New
        </a>
                <form action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replies_delete", array("id" => $this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "id", array()))), "html", null, true);
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
        
        $__internal_306893cc5c0fe1adba327b2ec149b496c73609f36d9639b1384e1ab343b604f6->leave($__internal_306893cc5c0fe1adba327b2ec149b496c73609f36d9639b1384e1ab343b604f6_prof);

    }

    public function getTemplateName()
    {
        return ":replies:edit.html.twig";
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
/* {{ parent() }} -  Edit reply*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <section class="panel">*/
/* */
/*     <header class="panel-heading">*/
/*         <h2> Replies Edit</h2>*/
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
/*     <a class="btn btn-default" href="{{ path('replies') }}">*/
/*         <i class="fa fa-list" aria-hidden="true"></i>*/
/*         Back to list*/
/*     </a>*/
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
/*     </div>*/
/* */
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* */

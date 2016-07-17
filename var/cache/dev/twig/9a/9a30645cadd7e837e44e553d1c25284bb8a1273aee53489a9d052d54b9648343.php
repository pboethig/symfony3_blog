<?php

/* TritonCrudBundle::base.html.twig */
class __TwigTemplate_df9919f92062e20e6d2c085f6e0b1fd3d1df7cc3b4ad48657576f6ae5095db8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d6c60779f877b3a97d63d00547cff14521d65671fa0f7d1689e40525b727d23 = $this->env->getExtension("native_profiler");
        $__internal_6d6c60779f877b3a97d63d00547cff14521d65671fa0f7d1689e40525b727d23->enter($__internal_6d6c60779f877b3a97d63d00547cff14521d65671fa0f7d1689e40525b727d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TritonCrudBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/images/favicon.ico"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"container\">
    ";
        // line 27
        $this->displayBlock('menu', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 31
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "TritonCrudBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
</div>


<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tritoncrud/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 45
        $this->displayBlock('javascript', $context, $blocks);
        // line 46
        echo "</body>
</html>

";
        
        $__internal_6d6c60779f877b3a97d63d00547cff14521d65671fa0f7d1689e40525b727d23->leave($__internal_6d6c60779f877b3a97d63d00547cff14521d65671fa0f7d1689e40525b727d23_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_19650dca7d6a483e3c2f35c5689bdd1a36d8370bf485d0dbfb1d8a5d3d54234f = $this->env->getExtension("native_profiler");
        $__internal_19650dca7d6a483e3c2f35c5689bdd1a36d8370bf485d0dbfb1d8a5d3d54234f->enter($__internal_19650dca7d6a483e3c2f35c5689bdd1a36d8370bf485d0dbfb1d8a5d3d54234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Triton Crud Bundle";
        
        $__internal_19650dca7d6a483e3c2f35c5689bdd1a36d8370bf485d0dbfb1d8a5d3d54234f->leave($__internal_19650dca7d6a483e3c2f35c5689bdd1a36d8370bf485d0dbfb1d8a5d3d54234f_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97c3f2aa55957e7458838794afef6650fe48fe4bd7cf68051f2fe8251307c043 = $this->env->getExtension("native_profiler");
        $__internal_97c3f2aa55957e7458838794afef6650fe48fe4bd7cf68051f2fe8251307c043->enter($__internal_97c3f2aa55957e7458838794afef6650fe48fe4bd7cf68051f2fe8251307c043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_97c3f2aa55957e7458838794afef6650fe48fe4bd7cf68051f2fe8251307c043->leave($__internal_97c3f2aa55957e7458838794afef6650fe48fe4bd7cf68051f2fe8251307c043_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_487115139e645ebb3d13525996170fb3a873eb590143a84678fd773faf3c945a = $this->env->getExtension("native_profiler");
        $__internal_487115139e645ebb3d13525996170fb3a873eb590143a84678fd773faf3c945a->enter($__internal_487115139e645ebb3d13525996170fb3a873eb590143a84678fd773faf3c945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_487115139e645ebb3d13525996170fb3a873eb590143a84678fd773faf3c945a->leave($__internal_487115139e645ebb3d13525996170fb3a873eb590143a84678fd773faf3c945a_prof);

    }

    // line 45
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e2f9f1d318b4bc613f54a0964654e8fe2571bc251c724f427a31269a3a08717a = $this->env->getExtension("native_profiler");
        $__internal_e2f9f1d318b4bc613f54a0964654e8fe2571bc251c724f427a31269a3a08717a->enter($__internal_e2f9f1d318b4bc613f54a0964654e8fe2571bc251c724f427a31269a3a08717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_e2f9f1d318b4bc613f54a0964654e8fe2571bc251c724f427a31269a3a08717a->leave($__internal_e2f9f1d318b4bc613f54a0964654e8fe2571bc251c724f427a31269a3a08717a_prof);

    }

    public function getTemplateName()
    {
        return "TritonCrudBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 45,  158 => 37,  147 => 27,  135 => 5,  125 => 46,  123 => 45,  118 => 43,  114 => 42,  108 => 38,  106 => 37,  103 => 36,  97 => 35,  88 => 32,  83 => 31,  78 => 30,  74 => 29,  71 => 28,  69 => 27,  60 => 21,  49 => 13,  45 => 12,  41 => 11,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Triton Crud Bundle{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Le styles -->*/
/*     <link href="{{ asset('bundles/tritoncrud/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/tritoncrud/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/tritoncrud/css/crud.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <!-- Le fav and touch icons -->*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/tritoncrud/images/favicon.ico') }}">*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="container">*/
/*     {% block menu %}{% endblock %}*/
/* */
/*     {% for type, flashMessages in app.session.flashbag.all() %}*/
/*         {% for flashMessage in flashMessages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 {{ flashMessage|trans({}, 'TritonCrudBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/* </div>*/
/* */
/* */
/* <script src="{{ asset('bundles/tritoncrud/js/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/tritoncrud/js/bootstrap.min.js') }}"></script>*/
/* */
/* {% block javascript %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */

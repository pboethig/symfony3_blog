<?php

/* base.html.twig */
class __TwigTemplate_6286b7a72b0e003c46245368cd8f7d869b718c942769d905113a0cf1097f7d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c72a43cb2ed9c12b440288a783062302dd183f145ed84f49465e1c5a8a7610c = $this->env->getExtension("native_profiler");
        $__internal_8c72a43cb2ed9c12b440288a783062302dd183f145ed84f49465e1c5a8a7610c->enter($__internal_8c72a43cb2ed9c12b440288a783062302dd183f145ed84f49465e1c5a8a7610c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8c72a43cb2ed9c12b440288a783062302dd183f145ed84f49465e1c5a8a7610c->leave($__internal_8c72a43cb2ed9c12b440288a783062302dd183f145ed84f49465e1c5a8a7610c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_730ad77da186900edeb4c6cac70cc7283068fd93f0f5b1e25d41f4e58e329716 = $this->env->getExtension("native_profiler");
        $__internal_730ad77da186900edeb4c6cac70cc7283068fd93f0f5b1e25d41f4e58e329716->enter($__internal_730ad77da186900edeb4c6cac70cc7283068fd93f0f5b1e25d41f4e58e329716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_730ad77da186900edeb4c6cac70cc7283068fd93f0f5b1e25d41f4e58e329716->leave($__internal_730ad77da186900edeb4c6cac70cc7283068fd93f0f5b1e25d41f4e58e329716_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64c9f475957a8a2d3ca970495d344eb55328db1da1e5e862a46932ec0010282d = $this->env->getExtension("native_profiler");
        $__internal_64c9f475957a8a2d3ca970495d344eb55328db1da1e5e862a46932ec0010282d->enter($__internal_64c9f475957a8a2d3ca970495d344eb55328db1da1e5e862a46932ec0010282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64c9f475957a8a2d3ca970495d344eb55328db1da1e5e862a46932ec0010282d->leave($__internal_64c9f475957a8a2d3ca970495d344eb55328db1da1e5e862a46932ec0010282d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00b0d9b1fbc8e6364ace2aed7e3f74a9a5fd7c06fe5ec8da13c1ca798665a04b = $this->env->getExtension("native_profiler");
        $__internal_00b0d9b1fbc8e6364ace2aed7e3f74a9a5fd7c06fe5ec8da13c1ca798665a04b->enter($__internal_00b0d9b1fbc8e6364ace2aed7e3f74a9a5fd7c06fe5ec8da13c1ca798665a04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00b0d9b1fbc8e6364ace2aed7e3f74a9a5fd7c06fe5ec8da13c1ca798665a04b->leave($__internal_00b0d9b1fbc8e6364ace2aed7e3f74a9a5fd7c06fe5ec8da13c1ca798665a04b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db79dea2456b389009d9c42932230c46cb60c2a8832f334e6815747901ca4d85 = $this->env->getExtension("native_profiler");
        $__internal_db79dea2456b389009d9c42932230c46cb60c2a8832f334e6815747901ca4d85->enter($__internal_db79dea2456b389009d9c42932230c46cb60c2a8832f334e6815747901ca4d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db79dea2456b389009d9c42932230c46cb60c2a8832f334e6815747901ca4d85->leave($__internal_db79dea2456b389009d9c42932230c46cb60c2a8832f334e6815747901ca4d85_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

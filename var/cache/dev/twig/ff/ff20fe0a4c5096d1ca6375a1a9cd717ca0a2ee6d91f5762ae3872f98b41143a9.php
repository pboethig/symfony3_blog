<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_740fa807101924b6f59c1ea89f01a141275ce33982ae6f74ec93a72fa803a368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e803122a55891f213c45c3947fceebc29f968f8ef93ed42647f30f348314a9 = $this->env->getExtension("native_profiler");
        $__internal_80e803122a55891f213c45c3947fceebc29f968f8ef93ed42647f30f348314a9->enter($__internal_80e803122a55891f213c45c3947fceebc29f968f8ef93ed42647f30f348314a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e803122a55891f213c45c3947fceebc29f968f8ef93ed42647f30f348314a9->leave($__internal_80e803122a55891f213c45c3947fceebc29f968f8ef93ed42647f30f348314a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_808413ba83ebe22710c46ad46f09c788f088c841048236b673f994febef88de4 = $this->env->getExtension("native_profiler");
        $__internal_808413ba83ebe22710c46ad46f09c788f088c841048236b673f994febef88de4->enter($__internal_808413ba83ebe22710c46ad46f09c788f088c841048236b673f994febef88de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 89
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 90
        $this->displayBlock('panel', $context, $blocks);
        // line 91
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 104
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 108
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 112
        if (array_key_exists("templates", $context)) {
            // line 113
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 115
                echo "                            ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderBlock", array(0 => "menu", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => (isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null))), "method"), "html", null, true);
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 116
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) ? $context["menu"] : null))) {
                    // line 117
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) ? $context["panel"] : null))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) ? $context["menu"] : null);
                    echo "</a>
                                </li>
                            ";
                }
                // line 121
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                    </ul>
                ";
        }
        // line 124
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_808413ba83ebe22710c46ad46f09c788f088c841048236b673f994febef88de4->leave($__internal_808413ba83ebe22710c46ad46f09c788f088c841048236b673f994febef88de4_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_818be96b2ed3da1c531a573acfebd0c99e326a2ceb0bfb134a53f10004aaec31 = $this->env->getExtension("native_profiler");
        $__internal_818be96b2ed3da1c531a573acfebd0c99e326a2ceb0bfb134a53f10004aaec31->enter($__internal_818be96b2ed3da1c531a573acfebd0c99e326a2ceb0bfb134a53f10004aaec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) ? $context["status_code"] : null) > 399)) ? ("status-error") : (((((isset($context["status_code"]) ? $context["status_code"] : null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : null), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((array_key_exists("request_collector", $context) && $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "method", array()))) ? ($this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if ($this->getAttribute($this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "file", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "line", array()));
                    // line 36
                    if ((isset($context["link"]) ? $context["link"] : null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) ? $context["redirect_route"] : null), "html", null, true);
                    // line 38
                    if ((isset($context["link"]) ? $context["link"] : null)) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) ? $context["redirect_route"] : null), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["redirect"]) ? $context["redirect"] : null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if ((((isset($context["request_collector"]) ? $context["request_collector"] : null) && (($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute((isset($context["request_collector"]) ? $context["request_collector"] : null), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute((isset($context["forward"]) ? $context["forward"] : null), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "file", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "line", array()));
                // line 54
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "method", array())) ? ((" :: " . $this->getAttribute((isset($context["controller"]) ? $context["controller"] : null), "method", array()))) : ("")), "html", null, true);
                // line 57
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["forward"]) ? $context["forward"] : null), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["forward"]) ? $context["forward"] : null), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "ip", array()), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 82
        echo "        ";
        
        $__internal_818be96b2ed3da1c531a573acfebd0c99e326a2ceb0bfb134a53f10004aaec31->leave($__internal_818be96b2ed3da1c531a573acfebd0c99e326a2ceb0bfb134a53f10004aaec31_prof);

    }

    // line 90
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a9dac8faa1b212d96dcb08f5e252b865a0467520fcddf24c7243129de057ff6 = $this->env->getExtension("native_profiler");
        $__internal_1a9dac8faa1b212d96dcb08f5e252b865a0467520fcddf24c7243129de057ff6->enter($__internal_1a9dac8faa1b212d96dcb08f5e252b865a0467520fcddf24c7243129de057ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1a9dac8faa1b212d96dcb08f5e252b865a0467520fcddf24c7243129de057ff6->leave($__internal_1a9dac8faa1b212d96dcb08f5e252b865a0467520fcddf24c7243129de057ff6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 90,  339 => 82,  331 => 77,  325 => 74,  319 => 71,  313 => 68,  307 => 65,  302 => 62,  293 => 58,  289 => 57,  287 => 56,  285 => 55,  277 => 54,  275 => 53,  270 => 50,  268 => 49,  266 => 48,  264 => 47,  261 => 46,  252 => 42,  249 => 40,  244 => 38,  242 => 37,  234 => 36,  232 => 35,  230 => 34,  226 => 33,  219 => 29,  215 => 27,  213 => 26,  211 => 25,  209 => 24,  206 => 23,  204 => 22,  200 => 20,  194 => 18,  186 => 16,  184 => 15,  178 => 12,  175 => 11,  172 => 10,  169 => 9,  166 => 8,  160 => 7,  150 => 124,  146 => 122,  140 => 121,  132 => 118,  125 => 117,  122 => 116,  117 => 115,  113 => 114,  110 => 113,  108 => 112,  101 => 108,  95 => 105,  89 => 104,  84 => 102,  80 => 101,  74 => 98,  65 => 91,  63 => 90,  59 => 89,  51 => 83,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}*/
/* */
/*     <div id="summary">*/
/*         {% block summary %}*/
/*             {% if profile is defined %}*/
/*                 {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}*/
/*                 {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}*/
/* */
/*                 <div class="status {{ css_class }}">*/
/*                     <div class="container">*/
/*                         <h2 class="break-long-words">*/
/*                             {% if profile.method|upper in ['GET', 'HEAD'] %}*/
/*                                 <a href="{{ profile.url }}">{{ profile.url }}</a>*/
/*                             {% else %}*/
/*                                 {{ profile.url }}*/
/*                             {% endif %}*/
/*                         </h2>*/
/* */
/*                         {% set request_collector = profile.collectors.request|default(false) %}*/
/*                         {% if request_collector is defined and request_collector.redirect -%}*/
/*                             {%- set redirect = request_collector.redirect -%}*/
/*                             {%- set controller = redirect.controller -%}*/
/*                             {%- set redirect_route = '@' ~ redirect.route %}*/
/*                             <dl class="metadata">*/
/*                                 <dt>*/
/*                                     <span class="label">{{ redirect.status_code }}</span>*/
/*                                     Redirect from*/
/*                                 </dt>*/
/*                                 <dd>*/
/*                                     {{ 'GET' != redirect.method ? redirect.method }}*/
/*                                     {% if redirect.controller.class is defined -%}*/
/*                                         {%- set link = controller.file|file_link(controller.line) -%}*/
/*                                         {% if link %}<a href="{{ link }}" title="{{ controller.file }}">{% endif -%}*/
/*                                             {{ redirect_route }}*/
/*                                         {%- if link %}</a>{% endif -%}*/
/*                                     {%- else -%}*/
/*                                             {{ redirect_route }}*/
/*                                     {%- endif %}*/
/*                                     (<a href="{{ path('_profiler', { token: redirect.token }) }}">{{ redirect.token }}</a>)*/
/*                                 </dd>*/
/*                             </dl>*/
/*                         {%- endif %}*/
/* */
/*                         {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}*/
/*                             {%- set forward = request_collector.forward -%}*/
/*                             {%- set controller = forward.controller -%}*/
/*                             <dl class="metadata">*/
/*                                 <dt>Forwarded to</dt>*/
/*                                 <dd>*/
/*                                     {% set link = controller.file|file_link(controller.line) -%}*/
/*                                     {%- if link %}<a href="{{ link }}" title="{{ controller.file }}">{% endif -%}*/
/*                                         {{- controller.class|abbr_class|striptags -}}*/
/*                                         {{- controller.method ? ' :: ' ~ controller.method }}*/
/*                                     {%- if link %}</a>{% endif %}*/
/*                                     (<a href="{{ path('_profiler', { token: forward.token }) }}">{{ forward.token }}</a>)*/
/*                                 </dd>*/
/*                             </dl>*/
/*                         {%- endif %}*/
/* */
/*                         <dl class="metadata">*/
/*                             <dt>Method</dt>*/
/*                             <dd>{{ profile.method|upper }}</dd>*/
/* */
/*                             <dt>HTTP Status</dt>*/
/*                             <dd>{{ status_code }}</dd>*/
/* */
/*                             <dt>IP</dt>*/
/*                             <dd>{{ profile.ip }}</dd>*/
/* */
/*                             <dt>Profiled on</dt>*/
/*                             <dd>{{ profile.time|date('r') }}</dd>*/
/* */
/*                             <dt>Token</dt>*/
/*                             <dd>{{ profile.token }}</dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="content" class="container">*/
/*         <div id="main">*/
/*             <div id="collector-wrapper">*/
/*                 <div id="collector-content">*/
/*                     {{ include('@WebProfiler/Profiler/base_js.html.twig') }}*/
/*                     {% block panel '' %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id="sidebar">*/
/*                 <div id="sidebar-shortcuts">*/
/*                     <div class="shortcuts">*/
/*                         <a href="#" class="visible-small" onclick="Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;">*/
/*                             <span class="icon">{{ include('@WebProfiler/Icon/menu.svg') }}</span>*/
/*                         </a>*/
/* */
/*                         <a class="btn btn-sm" href="{{ path('_profiler_search', { limit: 10 }) }}">Last 10</a>*/
/*                         <a class="btn btn-sm" href="{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}">Latest</a>*/
/* */
/*                         <a class="sf-toggle btn btn-sm" data-toggle-selector="#sidebar-search" {% if tokens is defined or about is defined %}data-toggle-initial="display"{% endif %}>*/
/*                             {{ include('@WebProfiler/Icon/search.svg') }} <span class="hidden-small">Search</span>*/
/*                         </a>*/
/* */
/*                         {{ render(path('_profiler_search_bar', request.query.all)) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {% if templates is defined %}*/
/*                     <ul id="menu-profiler">*/
/*                         {% for name, template in templates %}*/
/*                             {% set menu %}{{ template.renderBlock('menu', { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version }) }}{% endset %}*/
/*                             {% if menu is not empty %}*/
/*                                 <li class="{{ name }} {{ name == panel ? 'selected' : '' }}">*/
/*                                     <a href="{{ path('_profiler', { token: token, panel: name }) }}">{{ menu|raw }}</a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_e89377b8c51239e32285ae76acd0bc93e607747447cb46ce521f8cf4e1710e0e extends Twig_Template
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
        $__internal_88aa5bf70dce78ad5f2a4628dc398c72a99d2edab48df9148bffdb319c970d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88aa5bf70dce78ad5f2a4628dc398c72a99d2edab48df9148bffdb319c970d7e->enter($__internal_88aa5bf70dce78ad5f2a4628dc398c72a99d2edab48df9148bffdb319c970d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_0ef866dc51f51aaae76f6fee890f61a0a76b6dbf88899efb03f919ad31e6c3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef866dc51f51aaae76f6fee890f61a0a76b6dbf88899efb03f919ad31e6c3b8->enter($__internal_0ef866dc51f51aaae76f6fee890f61a0a76b6dbf88899efb03f919ad31e6c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88aa5bf70dce78ad5f2a4628dc398c72a99d2edab48df9148bffdb319c970d7e->leave($__internal_88aa5bf70dce78ad5f2a4628dc398c72a99d2edab48df9148bffdb319c970d7e_prof);

        
        $__internal_0ef866dc51f51aaae76f6fee890f61a0a76b6dbf88899efb03f919ad31e6c3b8->leave($__internal_0ef866dc51f51aaae76f6fee890f61a0a76b6dbf88899efb03f919ad31e6c3b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31e5f54731877ebedb96319f434a95324958b2acfe5eaf76a90d53af2ced6c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e5f54731877ebedb96319f434a95324958b2acfe5eaf76a90d53af2ced6c60->enter($__internal_31e5f54731877ebedb96319f434a95324958b2acfe5eaf76a90d53af2ced6c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3e60b647ed32d42f78046f0b703ccac72a44a1c5120c10c618559e7d4e84836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e60b647ed32d42f78046f0b703ccac72a44a1c5120c10c618559e7d4e84836->enter($__internal_d3e60b647ed32d42f78046f0b703ccac72a44a1c5120c10c618559e7d4e84836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 85
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 93
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search", array("limit" => 10));
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", twig_array_merge(array("token" => "latest"), $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array()))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 99
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 100
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar", $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "all", array())));
        echo "
                    </div>
                </div>

                ";
        // line 107
        if (array_key_exists("templates", $context)) {
            // line 108
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 110
                echo "                            ";
                ob_start();
                // line 111
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 111)->hasBlock("menu", $context)) {
                    // line 112
                    $__internal_af54eea3741025587473670157493141d98bbcd78f0f8067a2110efcfb773714 = array("collector" => $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")));
                    if (!is_array($__internal_af54eea3741025587473670157493141d98bbcd78f0f8067a2110efcfb773714)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_af54eea3741025587473670157493141d98bbcd78f0f8067a2110efcfb773714);
                    // line 113
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 113)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 117
                echo "                            ";
                if ( !twig_test_empty(($context["menu"] ?? $this->getContext($context, "menu")))) {
                    // line 118
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? $this->getContext($context, "panel")))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => $context["name"])), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? $this->getContext($context, "menu"));
                    echo "</a>
                                </li>
                            ";
                }
                // line 122
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    </ul>
                ";
        }
        // line 125
        echo "            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 130
        $this->displayBlock('panel', $context, $blocks);
        // line 131
        echo "                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
";
        
        $__internal_d3e60b647ed32d42f78046f0b703ccac72a44a1c5120c10c618559e7d4e84836->leave($__internal_d3e60b647ed32d42f78046f0b703ccac72a44a1c5120c10c618559e7d4e84836_prof);

        
        $__internal_31e5f54731877ebedb96319f434a95324958b2acfe5eaf76a90d53af2ced6c60->leave($__internal_31e5f54731877ebedb96319f434a95324958b2acfe5eaf76a90d53af2ced6c60_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = array())
    {
        $__internal_20d746a08223429dd6fa24dbbab56e17dfb2e9952440f87edb94bf027b3b9c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d746a08223429dd6fa24dbbab56e17dfb2e9952440f87edb94bf027b3b9c7c->enter($__internal_20d746a08223429dd6fa24dbbab56e17dfb2e9952440f87edb94bf027b3b9c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a6b09a938620cab246b8265d5ff3fa5cad01e4e8041f6e1fff60002ec22c26bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b09a938620cab246b8265d5ff3fa5cad01e4e8041f6e1fff60002ec22c26bd->enter($__internal_a6b09a938620cab246b8265d5ff3fa5cad01e4e8041f6e1fff60002ec22c26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array())))) ? ((($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "getcollector", array(0 => "request"), "method", false, true), "statuscode", array()), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? $this->getContext($context, "status_code")) > 399)) ? ("status-error") : ((((($context["status_code"] ?? $this->getContext($context, "status_code")) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), array(0 => "GET", 1 => "HEAD"))) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "url", array()), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = (($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["profile"] ?? null), "collectors", array(), "any", false, true), "request", array()), false)) : (false));
            // line 23
            echo "                        ";
            if ((array_key_exists("request_collector", $context) && $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "redirect", array()))) {
                // line 24
                $context["redirect"] = $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "redirect", array());
                // line 25
                $context["controller"] = $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "controller", array());
                // line 26
                $context["redirect_route"] = ("@" . $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "route", array()));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "status_code", array()), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "method", array()))) ? ($this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "method", array())) : ("")), "html", null, true);
                echo "
                                    ";
                // line 34
                if ($this->getAttribute($this->getAttribute(($context["redirect"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
                    // line 35
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                    // line 36
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? $this->getContext($context, "redirect_route")), "html", null, true);
                    // line 38
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? $this->getContext($context, "redirect_route")), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "token", array()), "panel" => $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", array()), "get", array(0 => "panel", 1 => "request"), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["redirect"] ?? $this->getContext($context, "redirect")), "token", array()), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if (((($context["request_collector"] ?? $this->getContext($context, "request_collector")) && (($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_collector"] ?? null), "forward", array()), false)) : (false))) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["request_collector"] ?? null), "forward", array(), "any", false, true), "controller", array(), "any", false, true), "class", array(), "any", true, true))) {
                // line 48
                $context["forward"] = $this->getAttribute(($context["request_collector"] ?? $this->getContext($context, "request_collector")), "forward", array());
                // line 49
                $context["controller"] = $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "controller", array());
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                // line 54
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                // line 57
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["forward"] ?? $this->getContext($context, "forward")), "token", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "method", array())), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "limit" => 10, "ip" => $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "ip", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "ip", array()), "html", null, true);
            echo "</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "time", array()), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 84
        echo "        ";
        
        $__internal_a6b09a938620cab246b8265d5ff3fa5cad01e4e8041f6e1fff60002ec22c26bd->leave($__internal_a6b09a938620cab246b8265d5ff3fa5cad01e4e8041f6e1fff60002ec22c26bd_prof);

        
        $__internal_20d746a08223429dd6fa24dbbab56e17dfb2e9952440f87edb94bf027b3b9c7c->leave($__internal_20d746a08223429dd6fa24dbbab56e17dfb2e9952440f87edb94bf027b3b9c7c_prof);

    }

    // line 130
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c184ce7e180a33c3579c4ef809555e16bc2954171fb83f6f67e7071f5d75a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c184ce7e180a33c3579c4ef809555e16bc2954171fb83f6f67e7071f5d75a01->enter($__internal_2c184ce7e180a33c3579c4ef809555e16bc2954171fb83f6f67e7071f5d75a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_710252158b4f2a149138f96eaa20c5d1b6f71b3e25903c2b73976573a713228c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710252158b4f2a149138f96eaa20c5d1b6f71b3e25903c2b73976573a713228c->enter($__internal_710252158b4f2a149138f96eaa20c5d1b6f71b3e25903c2b73976573a713228c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_710252158b4f2a149138f96eaa20c5d1b6f71b3e25903c2b73976573a713228c->leave($__internal_710252158b4f2a149138f96eaa20c5d1b6f71b3e25903c2b73976573a713228c_prof);

        
        $__internal_2c184ce7e180a33c3579c4ef809555e16bc2954171fb83f6f67e7071f5d75a01->leave($__internal_2c184ce7e180a33c3579c4ef809555e16bc2954171fb83f6f67e7071f5d75a01_prof);

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
        return array (  409 => 130,  399 => 84,  391 => 79,  385 => 76,  376 => 72,  369 => 68,  363 => 65,  358 => 62,  349 => 58,  345 => 57,  343 => 56,  341 => 55,  333 => 54,  331 => 53,  326 => 50,  324 => 49,  322 => 48,  320 => 47,  317 => 46,  308 => 42,  305 => 40,  300 => 38,  298 => 37,  290 => 36,  288 => 35,  286 => 34,  282 => 33,  275 => 29,  271 => 27,  269 => 26,  267 => 25,  265 => 24,  262 => 23,  260 => 22,  256 => 20,  250 => 18,  242 => 16,  240 => 15,  234 => 12,  231 => 11,  228 => 10,  225 => 9,  222 => 8,  213 => 7,  191 => 131,  189 => 130,  185 => 129,  179 => 125,  175 => 123,  161 => 122,  153 => 119,  146 => 118,  143 => 117,  138 => 113,  131 => 112,  129 => 111,  126 => 110,  109 => 109,  106 => 108,  104 => 107,  97 => 103,  91 => 100,  85 => 99,  80 => 97,  76 => 96,  70 => 93,  60 => 85,  58 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        {% set request_collector = profile.collectors.request|default(false) %}
                        {% if request_collector is defined and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}
                            {%- set forward = request_collector.forward -%}
                            {%- set controller = forward.controller -%}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file|file_link(controller.line) -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {{- controller.class|abbr_class|striptags -}}
                                        {{- controller.method ? ' :: ' ~ controller.method }}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: forward.token }) }}\">{{ forward.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"{{ path('_profiler_search_results', { token: token, limit: 10, ip: profile.ip }) }}\">{{ profile.ip }}</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }())
    </script>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}

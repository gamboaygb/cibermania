<?php

/* front/homepage/index.html.twig */
class __TwigTemplate_b8f113c64283100ff20551b5129dadfd0410f3b727f17653b1406bb8c0cf74c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/frontend.html.twig", "front/homepage/index.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front/frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd6df32a3f02dc9a1739c59de10484ec7c78572103d17b3be318ad21f4a11d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6df32a3f02dc9a1739c59de10484ec7c78572103d17b3be318ad21f4a11d1b->enter($__internal_dd6df32a3f02dc9a1739c59de10484ec7c78572103d17b3be318ad21f4a11d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/homepage/index.html.twig"));

        $__internal_4bd421878845c2948983dbc0273f122f9d76a2575bb84b36c2d019a226ca1146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd421878845c2948983dbc0273f122f9d76a2575bb84b36c2d019a226ca1146->enter($__internal_4bd421878845c2948983dbc0273f122f9d76a2575bb84b36c2d019a226ca1146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6df32a3f02dc9a1739c59de10484ec7c78572103d17b3be318ad21f4a11d1b->leave($__internal_dd6df32a3f02dc9a1739c59de10484ec7c78572103d17b3be318ad21f4a11d1b_prof);

        
        $__internal_4bd421878845c2948983dbc0273f122f9d76a2575bb84b36c2d019a226ca1146->leave($__internal_4bd421878845c2948983dbc0273f122f9d76a2575bb84b36c2d019a226ca1146_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_194bb51586e3695745ab49da06c58b73d2b09b6ac433a57e5ade67def4de0ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194bb51586e3695745ab49da06c58b73d2b09b6ac433a57e5ade67def4de0ea9->enter($__internal_194bb51586e3695745ab49da06c58b73d2b09b6ac433a57e5ade67def4de0ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_e36dec0bfd81fdd6b319ffe8c1ad8693bd67f9618599ed0f0311da3d7387b444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36dec0bfd81fdd6b319ffe8c1ad8693bd67f9618599ed0f0311da3d7387b444->enter($__internal_e36dec0bfd81fdd6b319ffe8c1ad8693bd67f9618599ed0f0311da3d7387b444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "    <section class=\"hidden-sm-down\" id=\"featured-section\">

            <div class=\"col-xs-12 col-sm-12 col-md-12 featured-slider mt-5 mb-5\">
                <div id=\"carouselExampleIndicators\" class=\"carousel\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\" role=\"listbox\">

                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featureds"] ?? $this->getContext($context, "featureds")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 16
            echo "                            <div class=\"carousel-item ";
            echo ((($this->getAttribute($context["loop"], "index0", array()) == 0)) ? ("active") : (""));
            echo "\">
                                <div class=\"col-xs-12 col-sm-12 col-md-7\">
                                    <div class=\"col-12 mb-md-3\">
                                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["featured"], "slug", array()))), "html", null, true);
            echo "\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["featured"], "title", array()), "html", null, true);
            echo "</h1></a>
                                    </div>
                                    <div class=\"col-12 mt-md-3\">
                                        <p class=\"text-center\">";
            // line 22
            echo $this->getAttribute($context["featured"], "shortContent", array());
            echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-5\">
                                    <img class=\"d-block img-fluid\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["featured"], "imgPost", array()), "post"), "html", null, true);
            echo "\" alt=\"First slide\">
                                </div>
                            </div>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
        </div>
    </section>
    <section class=\"container container-section\">
        <div class=\"loading\">
            <i class=\"fa fa-refresh fa-3x fa-spin\"></i>
        </div>
        ";
        // line 46
        $context["i"] = 0;
        // line 47
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "
                ";
            // line 49
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                // line 50
                echo "                        ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 51
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                    // line 52
                    echo "                        </div>
                        </div>
                      ";
                }
                // line 55
                echo "                    <div class=\"col-12 card-home ";
                echo ((($this->getAttribute($context["loop"], "index", array()) <= 9)) ? ("show") : ("hide"));
                echo "\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-4\">

                            <!-- Post-->
                                <div class=\"post-module\">
                                    <!-- Thumbnail-->
                                    <div class=\"thumbnail\">
                                        <div class=\"date\">
                                            <div class=\"day\">";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "d"), "html", null, true);
                echo "</div>
                                            <div class=\"month\">";
                // line 65
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "F"), 0, 3), "html", null, true);
                echo "</div>
                                        </div>
                                        <img class=\"img-fluid\" src=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
                echo "\"/>
                                    </div>
                                    <!-- Post Content-->

                                    <div class=\"post-content\">
                                        <div class=\"category\">
                                            <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array())), "html", null, true);
                echo "</a>
                                        </div>
                                        <div class=\"card__share\">
                                            <div class=\"card__social\">
                                                <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                                <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                                <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                            </div>

                                            <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                                        </div>
                                        <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                echo "\"><h2 class=\"sub_title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</h2></a>
                                        <p class=\"description\">";
                // line 85
                echo $this->getAttribute($context["item"], "shortContent", array());
                echo "</p>
                                        <div class=\"post-meta\">
                                            <div class=\"chip\">
                                                <img src=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "person", array()), "picture", array()), "profile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()), "html", null, true);
                echo "\" width=\"96\" height=\"96\">
                                                <a href=\"#\">";
                // line 89
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["item"], "person", array()), "lastname", array())), "html", null, true);
                echo "</a>
                                            </div>
                                            <span class=\"comments\">
                                                <i class=\"fa fa-eye\"></i>
                                                <a href=\"#\"> ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "views", array()), "html", null, true);
                echo "</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                 ";
            } else {
                // line 100
                echo "                     <div class=\"col-xs-12 col-sm-12 col-md-4\">

                         <!-- Post-->
                         <div class=\"post-module\">
                             <!-- Thumbnail-->
                             <div class=\"thumbnail\">
                                 <div class=\"date\">
                                     <div class=\"day\">";
                // line 107
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "d"), "html", null, true);
                echo "</div>
                                     <div class=\"month\">";
                // line 108
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "F"), 0, 3), "html", null, true);
                echo "</div>
                                 </div>
                                 <img class=\"img-fluid\" src=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
                echo "\"/>
                             </div>
                             <!-- Post Content-->

                             <div class=\"post-content\">
                                 <div class=\"category\"><a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array())), "html", null, true);
                echo "</a> </div>
                                 <div class=\"card__share\">
                                     <div class=\"card__social\">
                                         <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                         <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                         <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                     </div>

                                     <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                                 </div>
                                 ";
                // line 126
                echo "\t\t\t\t <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                echo "\"><h2 class=\"sub_title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</h2></a>
                                 ";
                // line 128
                echo "                                 <p class=\"description\">";
                echo $this->getAttribute($context["item"], "shortContent", array());
                echo "</p>
                                 <div class=\"post-meta\">
                                     <div class=\"chip\">
                                         <img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "person", array()), "picture", array()), "profile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()), "html", null, true);
                echo "\" width=\"96\" height=\"96\">
                                         <a href=\"#\">";
                // line 132
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["item"], "person", array()), "lastname", array())), "html", null, true);
                echo "</a>
                                     </div>
                                     <span class=\"comments\"><i class=\"fa fa-eye\"></i> <a href=\"#\"> ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "views", array()), "html", null, true);
                echo "</a></span></div>
                             </div>
                         </div>
                     </div>

                ";
            }
            // line 140
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </div>
                    </div>

      ";
        // line 145
        if ((($context["i"] ?? $this->getContext($context, "i")) > 3)) {
            // line 146
            echo "        <nav class=\"navbar\">
            <ul class=\"pagination pagination-index\">
                <li class=\"page-item disabled\" id=\"first\">
                    <span class=\"page-link\"  tabindex=\"-1\">&laquo;</span>
                </li>

                ";
            // line 152
            $context["value"] = 1;
            // line 153
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["i"] ?? $this->getContext($context, "i"))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 154
                echo "                ";
                if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                    // line 155
                    echo "                    <li class=\"page-item ";
                    echo (($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""));
                    echo "\"><span class=\"page-link\" >";
                    echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                    echo "</span></li>
                    ";
                    // line 156
                    $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) + 1);
                    // line 157
                    echo "                ";
                }
                // line 158
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "
                <li class=\"page-item\" id=\"last\">
                    <span class=\"page-link\" >&raquo;</span>
                </li>
            </ul>
        </nav>
\t";
        }
        // line 166
        echo "
\t\t<div class=\"modal fade show\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t    <div class=\"modal-content\">
\t\t      <div class=\"modal-header\">
\t\t\t<h5 class=\"modal-title\">Ciber Aviso para usuarios</h5>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t  <span aria-hidden=\"true\"></span>
\t\t\t</button>
\t\t      </div>
\t\t      <div class=\"modal-body\">
\t\t\t<p>Estoy desarrollando la web, poco a poco iré avanzando, pronto estaré de vuelta, mientras tanto puedes ponerte en contacto conmigo en <a href=\"mailto:soporte@cibermania.es\">soporte@cibermania.es</a></p>
\t\t      </div>
\t\t      <div class=\"modal-footer\">
\t\t\t<button type=\"button\" class=\"btn btn-success\">Seguir buceando</button>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>
    </section>
";
        
        $__internal_e36dec0bfd81fdd6b319ffe8c1ad8693bd67f9618599ed0f0311da3d7387b444->leave($__internal_e36dec0bfd81fdd6b319ffe8c1ad8693bd67f9618599ed0f0311da3d7387b444_prof);

        
        $__internal_194bb51586e3695745ab49da06c58b73d2b09b6ac433a57e5ade67def4de0ea9->leave($__internal_194bb51586e3695745ab49da06c58b73d2b09b6ac433a57e5ade67def4de0ea9_prof);

    }

    public function getTemplateName()
    {
        return "front/homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 166,  409 => 159,  395 => 158,  392 => 157,  390 => 156,  383 => 155,  380 => 154,  362 => 153,  360 => 152,  352 => 146,  350 => 145,  345 => 142,  330 => 140,  321 => 134,  316 => 132,  310 => 131,  303 => 128,  296 => 126,  281 => 115,  273 => 110,  268 => 108,  264 => 107,  255 => 100,  245 => 93,  238 => 89,  232 => 88,  226 => 85,  220 => 84,  204 => 73,  195 => 67,  190 => 65,  186 => 64,  173 => 55,  168 => 52,  165 => 51,  162 => 50,  160 => 49,  157 => 48,  139 => 47,  137 => 46,  119 => 30,  101 => 26,  94 => 22,  86 => 19,  79 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'front/frontend.html.twig' %}

{% block section %}
    <section class=\"hidden-sm-down\" id=\"featured-section\">

            <div class=\"col-xs-12 col-sm-12 col-md-12 featured-slider mt-5 mb-5\">
                <div id=\"carouselExampleIndicators\" class=\"carousel\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\" role=\"listbox\">

                        {% for featured in featureds %}
                            <div class=\"carousel-item {{ loop.index0==0 ? 'active' : '' }}\">
                                <div class=\"col-xs-12 col-sm-12 col-md-7\">
                                    <div class=\"col-12 mb-md-3\">
                                        <a href=\"{{ path('view_post', { slug: featured.slug}) }}\"><h1>{{ featured.title }}</h1></a>
                                    </div>
                                    <div class=\"col-12 mt-md-3\">
                                        <p class=\"text-center\">{{ featured.shortContent|raw }}</p>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-5\">
                                    <img class=\"d-block img-fluid\" src=\"{{ asset(featured.imgPost,'post') }}\" alt=\"First slide\">
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
        </div>
    </section>
    <section class=\"container container-section\">
        <div class=\"loading\">
            <i class=\"fa fa-refresh fa-3x fa-spin\"></i>
        </div>
        {% set i=0 %}
        {% for item in list %}

                {% if loop.index0%3==0 %}
                        {% set i=i+1 %}
                    {% if loop.index0>0 %}
                        </div>
                        </div>
                      {% endif %}
                    <div class=\"col-12 card-home {{ loop.index<=9 ? 'show':'hide' }}\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-4\">

                            <!-- Post-->
                                <div class=\"post-module\">
                                    <!-- Thumbnail-->
                                    <div class=\"thumbnail\">
                                        <div class=\"date\">
                                            <div class=\"day\">{{ item.updateDate|date(\"d\") }}</div>
                                            <div class=\"month\">{{ item.updateDate|date(\"F\")|slice(0,3) }}</div>
                                        </div>
                                        <img class=\"img-fluid\" src=\"{{ asset(item.imgPost,'post') }}\"/>
                                    </div>
                                    <!-- Post Content-->

                                    <div class=\"post-content\">
                                        <div class=\"category\">
                                            <a href=\"{{ path('category_post_list',{slug:item.category.name}) }}\">{{ item.category.name|capitalize }}</a>
                                        </div>
                                        <div class=\"card__share\">
                                            <div class=\"card__social\">
                                                <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                                <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                                <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                            </div>

                                            <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                                        </div>
                                        <a href=\"{{ path('view_post', { slug: item.slug}) }}\"><h2 class=\"sub_title\">{{ item.title }}</h2></a>
                                        <p class=\"description\">{{ item.shortContent|raw }}</p>
                                        <div class=\"post-meta\">
                                            <div class=\"chip\">
                                                <img src=\"{{ asset(item.person.picture,'profile') }}\" alt=\"{{item.person.name}}\" width=\"96\" height=\"96\">
                                                <a href=\"#\">{{ item.person.name~' '~item.person.lastname }}</a>
                                            </div>
                                            <span class=\"comments\">
                                                <i class=\"fa fa-eye\"></i>
                                                <a href=\"#\"> {{ item.views }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                 {%  else %}
                     <div class=\"col-xs-12 col-sm-12 col-md-4\">

                         <!-- Post-->
                         <div class=\"post-module\">
                             <!-- Thumbnail-->
                             <div class=\"thumbnail\">
                                 <div class=\"date\">
                                     <div class=\"day\">{{ item.updateDate|date(\"d\") }}</div>
                                     <div class=\"month\">{{ item.updateDate|date(\"F\")|slice(0,3) }}</div>
                                 </div>
                                 <img class=\"img-fluid\" src=\"{{ asset(item.imgPost,'post') }}\"/>
                             </div>
                             <!-- Post Content-->

                             <div class=\"post-content\">
                                 <div class=\"category\"><a href=\"{{ path('category_post_list',{slug:item.category.name}) }}\">{{ item.category.name|capitalize }}</a> </div>
                                 <div class=\"card__share\">
                                     <div class=\"card__social\">
                                         <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                         <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                         <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                     </div>

                                     <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                                 </div>
                                 {#<a href=\"{{ path('view_post', { slug: item.slug}) }}\"><h1 class=\"title\">{{ item.title }}</h1></a>#}
\t\t\t\t <a href=\"{{ path('view_post', { slug: item.slug}) }}\"><h2 class=\"sub_title\">{{ item.title }}</h2></a>
                                 {#<h2 class=\"sub_title\">{{ item.title }}</h2>#}
                                 <p class=\"description\">{{ item.shortContent|raw }}</p>
                                 <div class=\"post-meta\">
                                     <div class=\"chip\">
                                         <img src=\"{{ asset(item.person.picture,'profile') }}\" alt=\"{{item.person.name}}\" width=\"96\" height=\"96\">
                                         <a href=\"#\">{{ item.person.name~' '~item.person.lastname }}</a>
                                     </div>
                                     <span class=\"comments\"><i class=\"fa fa-eye\"></i> <a href=\"#\"> {{ item.views }}</a></span></div>
                             </div>
                         </div>
                     </div>

                {%  endif %}

        {% endfor %}
        </div>
                    </div>

      {% if i>3%}
        <nav class=\"navbar\">
            <ul class=\"pagination pagination-index\">
                <li class=\"page-item disabled\" id=\"first\">
                    <span class=\"page-link\"  tabindex=\"-1\">&laquo;</span>
                </li>

                {% set value=1 %}
                {% for a in 1..i %}
                {% if loop.index0%3==0 %}
                    <li class=\"page-item {{ loop.first ? ' active' }}\"><span class=\"page-link\" >{{ value }}</span></li>
                    {% set value=value+1 %}
                {% endif %}
                {% endfor %}

                <li class=\"page-item\" id=\"last\">
                    <span class=\"page-link\" >&raquo;</span>
                </li>
            </ul>
        </nav>
\t{% endif%}

\t\t<div class=\"modal fade show\">
\t\t  <div class=\"modal-dialog\" role=\"document\">
\t\t    <div class=\"modal-content\">
\t\t      <div class=\"modal-header\">
\t\t\t<h5 class=\"modal-title\">Ciber Aviso para usuarios</h5>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t  <span aria-hidden=\"true\"></span>
\t\t\t</button>
\t\t      </div>
\t\t      <div class=\"modal-body\">
\t\t\t<p>Estoy desarrollando la web, poco a poco iré avanzando, pronto estaré de vuelta, mientras tanto puedes ponerte en contacto conmigo en <a href=\"mailto:soporte@cibermania.es\">soporte@cibermania.es</a></p>
\t\t      </div>
\t\t      <div class=\"modal-footer\">
\t\t\t<button type=\"button\" class=\"btn btn-success\">Seguir buceando</button>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>
    </section>
{% endblock %}


", "front/homepage/index.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/index.html.twig");
    }
}

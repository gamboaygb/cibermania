<?php

/* front/post/_single.html.twig */
class __TwigTemplate_0d0b446a7003db18878ba05fb80df1fb485cc8ef49ec3d91ec5cd4384d2c8847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/frontend.html.twig", "front/post/_single.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front/frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_section($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <section class=\"mt-5\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-8\">
                    <article>
                        <div class=\"article-title\">
                            <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["single_post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                        </div>
                        <div class=\"article-autor mb-3\">
                            <div class=\"chip\">
                                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["single_post"] ?? null), "imgPost", array()), "post"), "html", null, true);
        echo "\" alt=\"Person\" width=\"96\" height=\"96\">
                                ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "name", array()), "html", null, true);
        echo "
                                <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none'\">&times;</span>
                            </div>

                            <div class=\"card__share\">
                                <div class=\"card__social\">
                                    <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                    <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                    <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                </div>

                                <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                            </div>

                        </div>
                        <div class=\"article-pic\">
                            <img class=\"img-fluid\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["single_post"] ?? null), "imgPost", array()), "post"), "html", null, true);
        echo "\">
                            <div class=\"mt-1 mb-1\">
                                <span><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> por ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "name", array()), "html", null, true);
        echo "</span>
                                <span><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
        echo " </span>
                                <span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["single_post"] ?? null), "updateDate", array()), "m/d/Y"), "html", null, true);
        echo "</span>
                                <span><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["single_post"] ?? null), "views", array()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"article-content mt-3 mb-3\">
                            ";
        // line 39
        echo $this->getAttribute(($context["single_post"] ?? null), "content", array());
        echo "
                        </div>
                        <div class=\"comment-list\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#comment\" role=\"tab\">Comentarios</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"comment\" role=\"tabpanel\">

\t\t\t\t    ";
        // line 52
        if ((twig_length_filter($this->env, ($context["comments"] ?? null)) > 0)) {
            echo "\t
\t\t                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 54
                echo "\t\t                                <div class=\"row mt-4\">
\t\t                                    <div class=\"col-xs-12 col-sm-12 col-md-1\">
\t\t                                        <div class=\"chip\">
\t\t                                            <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["single_post"] ?? null), "imgPost", array()), "post"), "html", null, true);
                echo "\" alt=\"Person\" width=\"96\" height=\"96\">
\t\t                                        </div>

\t\t                                    </div>
\t\t                                    <div class=\"col-xs-12 col-sm-12 col-md-11\">
\t\t                                        <div class=\"col-12\">
\t\t                                            <span class=\"author-name\">";
                // line 63
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["comment"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["comment"], "person", array()), "lastname", array())), "html", null, true);
                echo "</span>
\t\t                                            <span class=\"time\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "</span>
\t\t                                        </div>
\t\t                                        <h3 class=\"text-left\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentTitle", array()), "html", null, true);
                echo "</h3>
\t\t                                        <p>";
                // line 67
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
\t\t                                    </div>

\t\t                                </div>
\t\t                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t   ";
        } else {
            // line 73
            echo "\t\t\t\t\t<p>No existen comentarios para este post <b>ánimate y comenta</b><p>
\t\t\t\t   ";
        }
        // line 74
        echo "\t
                                </div>
                            </div>
                        </div>
                        <div class=\"article-rel\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#home\" role=\"tab\">Articulos relacionados</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">+ Sobre el Autor</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">Pondre relacionado por la categoria</div>
                                <div class=\"tab-pane\" id=\"profile\" role=\"tabpanel\">";
        // line 92
        echo $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "description", array());
        echo "</div>
                            </div>
                        </div>
                        <div class=\"article-comment\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Post:postComment", array("id" => $this->getAttribute(($context["single_post"] ?? null), "id", array()))));
        echo "
                        </div>
                    </article>
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-4 mt-4\">
                    <div id=\"search\" class=\"col-12\">
                        <form method=\"get\" action=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" name=\"data\" id=\"slug\" placeholder=\"Buscar\" />
                            </div>
                        </form>
                    </div>
                    <div class=\"col-12\">
                        <h3>Lo + visto</h3>
                        <ul class=\"ul_views\">
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["more_visited"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "                            <li class=\"li_views\">
                                <article>
                                    <a class=\"li_a\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">
                                        <figure>
                                            <img class=\"img-thumbnail\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
            echo "\">
                                        </figure>
                                        <hgroup>
                                            <h3 class=\"views-subtitle\">";
            // line 119
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array())), "html", null, true);
            echo "</h3>
                                            <h4 class=\"views-title\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
                                        </hgroup>
                                    </a>
                                </article>
                            </li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                        </ul>
                    </div>
                    <div class=\"col-12\">
                        <h3>Relacionadas</h3>
                        <ul class=\"ul_views\">
                            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["post_by_category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 132
            echo "                                <li class=\"li_views\">
                                    <article>
                                        <a class=\"li_a\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">
                                            <hgroup>
                                                <h3 class=\"views-subtitle\">";
            // line 136
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "name", array())), "html", null, true);
            echo "</h3>
                                                <h4 class=\"views-title\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
                                            </hgroup>
                                        </a>
                                    </article>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
    }

    // line 150
    public function block_js($context, array $blocks = array())
    {
        // line 151
        echo "    <script src=\"//cdn.ckeditor.com/4.7.1/standard/ckeditor.js\"></script>
    <script>
        CKEDITOR.replace( 'appbundle_post_comment[comment]' );
    </script>
";
    }

    public function getTemplateName()
    {
        return "front/post/_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 151,  292 => 150,  282 => 143,  270 => 137,  266 => 136,  261 => 134,  257 => 132,  253 => 131,  246 => 126,  234 => 120,  230 => 119,  224 => 116,  219 => 114,  215 => 112,  211 => 111,  199 => 102,  190 => 96,  183 => 92,  163 => 74,  159 => 73,  156 => 72,  145 => 67,  141 => 66,  136 => 64,  132 => 63,  123 => 57,  118 => 54,  114 => 53,  110 => 52,  94 => 39,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  70 => 30,  51 => 14,  47 => 13,  40 => 9,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/post/_single.html.twig", "/var/www/cibermania/app/Resources/views/front/post/_single.html.twig");
    }
}

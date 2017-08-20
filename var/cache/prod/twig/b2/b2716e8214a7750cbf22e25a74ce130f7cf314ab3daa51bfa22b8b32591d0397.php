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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "picture", array()), "profile"), "html", null, true);
        echo "\" alt=\"Person\" width=\"96\" height=\"96\">
                                ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "name", array()), "html", null, true);
        echo "
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
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["single_post"] ?? null), "imgPost", array()), "post"), "html", null, true);
        echo "\">
                            <div class=\"mt-1 mb-1\">
                                <span><i class=\"fa fa-camera\" aria-hidden=\"true\"></i> por ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "name", array()), "html", null, true);
        echo "</span>
                                <span><i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
        echo " </span>
                                <span><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["single_post"] ?? null), "updateDate", array()), "m/d/Y"), "html", null, true);
        echo "</span>
                                <span><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["single_post"] ?? null), "views", array()), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"article-content mt-3 mb-3\">
                            ";
        // line 38
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
        // line 51
        if ((twig_length_filter($this->env, ($context["comments"] ?? null)) > 0)) {
            echo "\t
\t\t                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 53
                echo "\t\t                                <div class=\"row mt-4\">
\t\t                                    <div class=\"col-xs-12 col-sm-12 col-md-1\">
\t\t                                        <div class=\"chip\">
\t\t                                            <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["single_post"] ?? null), "imgPost", array()), "post"), "html", null, true);
                echo "\" alt=\"Person\" width=\"96\" height=\"96\">
\t\t                                        </div>

\t\t                                    </div>
\t\t                                    <div class=\"col-xs-12 col-sm-12 col-md-11\">
\t\t                                        <div class=\"col-12\">
\t\t                                            <span class=\"author-name\">";
                // line 62
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["comment"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["comment"], "person", array()), "lastname", array())), "html", null, true);
                echo "</span>
\t\t                                            <span class=\"time\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "commentDate", array()), "d/m/Y"), "html", null, true);
                echo "</span>
\t\t                                        </div>
\t\t                                        <h3 class=\"text-left\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentTitle", array()), "html", null, true);
                echo "</h3>
\t\t                                        <p>";
                // line 66
                echo $this->getAttribute($context["comment"], "comment", array());
                echo "</p>
\t\t                                    </div>

\t\t                                </div>
\t\t                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t   ";
        } else {
            // line 72
            echo "\t\t\t\t\t<p>No existen comentarios para este post <b>ánimate y comenta</b><p>
\t\t\t\t   ";
        }
        // line 73
        echo "\t
                                </div>
                            </div>
                        </div>
                        <div class=\"article-rel\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\">+ Sobre el Autor</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active mt-2\" id=\"profile\" role=\"tabpanel\">";
        // line 87
        echo $this->getAttribute($this->getAttribute(($context["single_post"] ?? null), "person", array()), "description", array());
        echo "</div>
                            </div>
                        </div>
                        <div class=\"article-comment\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Post:postComment", array("id" => $this->getAttribute(($context["single_post"] ?? null), "id", array()))));
        echo "
                        </div>
                    </article>
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-4 mt-4\">
                    <div id=\"search\" class=\"col-12\">
                        <form method=\"get\" action=\"";
        // line 97
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
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["more_visited"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            echo "                            <li class=\"li_views\">
                                <article>
                                    <a class=\"li_a\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">
                                        <figure>
                                            <img class=\"img-thumbnail\" src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
            echo "\">
                                        </figure>
                                        <hgroup>
                                            
                                            ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 116
                echo "                                                <h3 class=\"views-subtitle\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["c"], "name", array())), "html", null, true);
                echo " | </h3>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                            <h4 class=\"views-title\">";
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
        // line 124
        echo "                        </ul>
                    </div>
                    <div class=\"col-12\">
                        <h3>Relacionadas</h3>
                        <ul class=\"ul_views\">
                            ";
        // line 141
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
    }

    // line 148
    public function block_js($context, array $blocks = array())
    {
        // line 149
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
        return array (  272 => 149,  269 => 148,  259 => 141,  252 => 124,  239 => 118,  230 => 116,  226 => 115,  219 => 111,  214 => 109,  210 => 107,  206 => 106,  194 => 97,  185 => 91,  178 => 87,  162 => 73,  158 => 72,  155 => 71,  144 => 66,  140 => 65,  135 => 63,  131 => 62,  122 => 56,  117 => 53,  113 => 52,  109 => 51,  93 => 38,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  69 => 29,  51 => 14,  47 => 13,  40 => 9,  32 => 3,  29 => 2,  11 => 1,);
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

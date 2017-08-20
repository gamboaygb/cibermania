<?php

/* front/homepage/index.html.twig */
class __TwigTemplate_de07498854f9edff72cd2fd906ba4f6a8310a971a7e875b69f19267ccda4266c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"hidden-sm-down mb-md-3\" id=\"featured-section\">
        <div class=\"row\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featureds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 7
            echo "
                    <div class=\"col-md-4 featured-item\">
                        <img class=\"d-block img-fluid\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["featured"], "imgPost", array()), "post"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["featured"], "title", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["featured"], "title", array()), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["featured"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["featured"], "title", array()), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "          </div>                 

    </section>
    <section class=\"container container-section mt-5\">
        <div class=\"loading\">
            <i class=\"fa fa-refresh fa-3x fa-spin\"></i>
        </div>
        ";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
            // line 22
            echo "
                ";
            // line 23
            if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                // line 24
                echo "                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 25
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                    // line 26
                    echo "                        </div>
                        </div>
                      ";
                }
                // line 29
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
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "d"), "html", null, true);
                echo "</div>
                                            <div class=\"month\">";
                // line 39
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "F"), 0, 3), "html", null, true);
                echo "</div>
                                        </div>
                                        <img class=\"img-fluid\" src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
                echo "\"/>
                                    </div>
                                    <!-- Post Content-->

                                    <div class=\"post-content\">
                                        

                                        <div class=\"category\">
                                            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "category", array()), 0, array(), "array"), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "category", array()), 0, array(), "array"), "name", array())), "html", null, true);
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
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                echo "\"><h2 class=\"sub_title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</h2></a>
                                        <p class=\"description\">";
                // line 61
                echo $this->getAttribute($context["item"], "shortContent", array());
                echo "</p>
                                        <div class=\"post-meta\">
                                            <div class=\"chip\">
                                                <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "person", array()), "picture", array()), "profile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()), "html", null, true);
                echo "\" width=\"96\" height=\"96\">
                                                <a href=\"#\">";
                // line 65
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["item"], "person", array()), "lastname", array())), "html", null, true);
                echo "</a>
                                            </div>
                                            <span class=\"comments\">
                                                <i class=\"fa fa-eye\"></i>
                                                <a href=\"#\"> ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "views", array()), "html", null, true);
                echo "</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                 ";
            } else {
                // line 76
                echo "                     <div class=\"col-xs-12 col-sm-12 col-md-4\">

                         <!-- Post-->
                         <div class=\"post-module\">
                             <!-- Thumbnail-->
                             <div class=\"thumbnail\">
                                 <div class=\"date\">
                                     <div class=\"day\">";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "d"), "html", null, true);
                echo "</div>
                                     <div class=\"month\">";
                // line 84
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "updateDate", array()), "F"), 0, 3), "html", null, true);
                echo "</div>
                                 </div>
                                 <img class=\"img-fluid\" src=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "imgPost", array()), "post"), "html", null, true);
                echo "\"/>
                             </div>
                             <!-- Post Content-->

                             <div class=\"post-content\">

                                 <div class=\"category\"><a href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "category", array()), 0, array(), "array"), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "category", array()), 0, array(), "array"), "name", array())), "html", null, true);
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
                // line 103
                echo "\t\t\t\t <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
                echo "\"><h2 class=\"sub_title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</h2></a>
                                 ";
                // line 105
                echo "                                 <p class=\"description\">";
                echo $this->getAttribute($context["item"], "shortContent", array());
                echo "</p>
                                 <div class=\"post-meta\">
                                     <div class=\"chip\">
                                         <img src=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "person", array()), "picture", array()), "profile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()), "html", null, true);
                echo "\" width=\"96\" height=\"96\">
                                         <a href=\"#\">";
                // line 109
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "person", array()), "name", array()) . " ") . $this->getAttribute($this->getAttribute($context["item"], "person", array()), "lastname", array())), "html", null, true);
                echo "</a>
                                     </div>
                                     <span class=\"comments\"><i class=\"fa fa-eye\"></i> <a href=\"#\"> ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "views", array()), "html", null, true);
                echo "</a></span></div>
                             </div>
                         </div>
                     </div>

                ";
            }
            // line 117
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
        // line 119
        echo "        </div>
                    </div>

      ";
        // line 122
        if ((($context["i"] ?? null) > 3)) {
            // line 123
            echo "        <nav class=\"navbar\">
            <ul class=\"pagination pagination-index\">
                <li class=\"page-item disabled\" id=\"first\">
                    <span class=\"page-link\"  tabindex=\"-1\">&laquo;</span>
                </li>

                ";
            // line 129
            $context["value"] = 1;
            // line 130
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["i"] ?? null)));
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
                // line 131
                echo "                ";
                if ((($this->getAttribute($context["loop"], "index0", array()) % 3) == 0)) {
                    // line 132
                    echo "                    <li class=\"page-item ";
                    echo (($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""));
                    echo "\"><span class=\"page-link\" >";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "</span></li>
                    ";
                    // line 133
                    $context["value"] = (($context["value"] ?? null) + 1);
                    // line 134
                    echo "                ";
                }
                // line 135
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
            // line 136
            echo "
                <li class=\"page-item\" id=\"last\">
                    <span class=\"page-link\" >&raquo;</span>
                </li>
            </ul>
        </nav>
\t";
        }
        // line 143
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
        return array (  355 => 143,  346 => 136,  332 => 135,  329 => 134,  327 => 133,  320 => 132,  317 => 131,  299 => 130,  297 => 129,  289 => 123,  287 => 122,  282 => 119,  267 => 117,  258 => 111,  253 => 109,  247 => 108,  240 => 105,  233 => 103,  218 => 92,  209 => 86,  204 => 84,  200 => 83,  191 => 76,  181 => 69,  174 => 65,  168 => 64,  162 => 61,  156 => 60,  140 => 49,  129 => 41,  124 => 39,  120 => 38,  107 => 29,  102 => 26,  99 => 25,  96 => 24,  94 => 23,  91 => 22,  73 => 21,  71 => 20,  62 => 13,  51 => 10,  43 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/homepage/index.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/index.html.twig");
    }
}

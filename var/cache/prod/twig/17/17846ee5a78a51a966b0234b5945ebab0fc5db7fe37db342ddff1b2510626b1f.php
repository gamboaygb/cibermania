<?php

/* front/homepage/category.html.twig */
class __TwigTemplate_c56ec9dd443824c3f6f9a96fb949a3d09730d64abc68ae06ec9a41c071a42f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/frontend.html.twig", "front/homepage/category.html.twig", 1);
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
        echo "    <section>
        <div class=\"container\">
            <div class=\"row\">


            ";
        // line 9
        if (twig_test_iterable($this->getAttribute($this->getAttribute(($context["post_list"] ?? null), "post", array()), "values", array()))) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["post_list"] ?? null), "post", array()), "values", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "
                <div class=\"col-xs-12 col-sm-12 col-md-6\">
                            <div class=\"food\">
                                <div class=\"cover\" style=\"background-image: url(";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["post"], "imgPost", array()), "post"), "html", null, true);
                echo ")\">
                                    <label>
                                        <font>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</font>
                                    </label>
                                    <div class=\"card__share\">
                                        <div class=\"card__social\">
                                            <a class=\"share-icon facebook\" href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                            <a class=\"share-icon twitter\" href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                            <a class=\"share-icon googleplus\" href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                        </div>

                                        <a id=\"share\" class=\"share-toggle share-icon\" href=\"#\"></a>
                                    </div>
                                </div>
                                <div class=\"info\">
                                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
                echo "\" class=\"recipe\">
                                        <i>
                                            <svg x=\"0px\" y=\"0px\" width=\"26px\" height=\"28px\"
                                            >
                                                <g>
                                                    <path d=\"M 8.5 20 L 8.5 21 L 17.5 21 L 17.5 20 L 8.5 20 ZM 8.5 16 L 8.5 17 L 17.5 17 L 17.5 16 L 8.5 16 ZM 8.5 12 L 8.5 13 L 17.5 13 L 17.5 12 L 8.5 12 ZM 20 0 C 19.4477 0 19 0.4477 19 1 L 19 6 C 19 6.5523 19.4477 7 20 7 C 20.5523 7 21 6.5523 21 6 L 21 1 C 21 0.4477 20.5523 0 20 0 ZM 13 0 C 12.4477 0 12 0.4477 12 1 L 12 6 C 12 6.5523 12.4477 7 13 7 C 13.5523 7 14 6.5523 14 6 L 14 1 C 14 0.4477 13.5523 0 13 0 ZM 6 0 C 5.4477 0 5 0.4477 5 1 L 5 6 C 5 6.5523 5.4477 7 6 7 C 6.5523 7 7 6.5523 7 6 L 7 1 C 7 0.4477 6.5523 0 6 0 ZM 15 4 L 18 4 L 18 3 L 15 3 L 15 4 ZM 8 4 L 11 4 L 11 3 L 8 3 L 8 4 ZM 3 4 L 4 4 L 4 3 L 3 3 C 1.3431 3 0 4.3431 0 6 L 0 25 C 0 26.6569 1.3431 28 3 28 L 23 28 C 24.6569 28 26 26.6569 26 25 L 26 6 C 26 4.3431 24.6569 3 23 3 L 22 3 L 22 4 L 23 4 C 24.1046 4 25 4.8954 25 6 L 25 25 C 25 26.1046 24.1046 27 23 27 L 3 27 C 1.8954 27 1 26.1046 1 25 L 1 6 C 1 4.8954 1.8954 4 3 4 Z\" fill=\"#ffffff\"/>
                                                </g>
                                            </svg>
                                        </i>
                                        <font>Leer más</font>
                                    </a>
                                    <div class=\"content\">
                                       <p>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "shortContent", array()), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </div>


                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            ";
        }
        // line 50
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "front/homepage/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  100 => 49,  86 => 41,  71 => 29,  55 => 16,  50 => 14,  45 => 11,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/homepage/category.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/category.html.twig");
    }
}

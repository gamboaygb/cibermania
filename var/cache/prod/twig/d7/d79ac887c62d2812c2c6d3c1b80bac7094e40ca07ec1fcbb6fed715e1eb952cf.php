<?php

/* front/frontend.html.twig */
class __TwigTemplate_22f5197e74a562674cc6e3d8912846fb80ff47326f061bada868be71ea69f263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/frontend.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'id' => array($this, 'block_id'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mientras unos navegan por la tecnología, yo buceo";
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"mySidenav\" class=\"sidenav\">
        <a href=\"javascript:void(0)\" class=\"closebtn\" >&times;</a>

        <div id=\"search\" class=\"col-12\">
             <form method=\"get\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"data\" id=\"slug\" placeholder=\"Buscar\" />
               </div> 
            </form>
        </div>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "person", array(), "any", true, true)) {
            // line 16
            echo "            <div class=\"card mb-3\">
              <img alt=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "name", array()), "html", null, true);
            echo "\" class=\"rounded-circle mx-auto\" width=\"150\" height=\"150\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "picture", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "picture", array())) : ("johndoe.png")), "profile"), "html", null, true);
            echo "\">
              <div class=\"container\">
                <h1>";
            // line 19
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "name", array())), "html", null, true);
            echo "</h1>
                <p class=\"title\">";
            // line 20
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_USER")) ? ("Usuario") : ("Administrador"));
            echo "</p>
                <ul>
                  <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_post");
            echo "\">Mis Post</a></li>
                  <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profile");
            echo "\">Mi Perfil</a></li>
                  <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\">Desconectar</a></li>
                </ul>
                <ul>
                    <li><a href=\"https://www.youtube.com/user/cibermaniasful\"><i class=\"fa fa-youtube\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                </ul>
              </div>
            </div>
        ";
        } else {
            // line 35
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Security:boxLogin"));
            echo "
        ";
        }
        // line 36
        echo " 

        <div class=\"col-12 menu\">
            <a href=\"#\">Qué es CibErMaNia</a>
            <a href=\"#\">Servicios</a>
            <a href=\"#\">Contacto</a>
        </div>
        <div class=\"col-12\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
            <a href=\"#\">Aviso Legal</a>
            <a href=\"#\">Políticas de Privacidad</a>
        </div>
    </div>

";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayBlock('id', $context, $blocks);
        // line 53
        echo "
<div class=\"container-fluid main\">
    ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('section', $context, $blocks);
        // line 100
        echo "
</div>
";
    }

    // line 52
    public function block_id($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "        <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            ";
        // line 60
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "person", array(), "any", true, true)) {
            // line 61
            echo "                <img alt=\"Ver Perfil\" id=\"opennav\" title=\"Ver Perfil\" class=\"rounded-circle mx-auto \" width=\"60\" height=\"60\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "picture", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "person", array()), "picture", array())) : ("johndoe.png")), "profile"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 63
            echo "                <span class=\"navbar-brand fa-2x\" id=\"opennav\">&#9776;</span>
            ";
        }
        // line 65
        echo "\t
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"fa fa-home fa-3x\" aria-hidden=\"true\"></i>
                            <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => "windows"));
        echo "\"><i class=\"fa fa-windows fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => "linux"));
        echo "\"><i class=\"fa fa-linux fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => "apple"));
        echo "\"><i class=\"fa fa-apple fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => "android"));
        echo "\"><i class=\"fa fa-android fa-3x\" aria-hidden=\"true\"></i>

                        </a>
                    </li>
                </ul>


            </div>
        </nav>

    ";
    }

    // line 97
    public function block_section($context, array $blocks = array())
    {
        // line 98
        echo "
    ";
    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        // line 105
        echo "    ";
        echo twig_include($this->env, $context, "front/footer.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "front/frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 105,  234 => 104,  229 => 98,  226 => 97,  211 => 85,  204 => 81,  197 => 77,  190 => 73,  183 => 69,  177 => 65,  173 => 63,  167 => 61,  165 => 60,  159 => 56,  156 => 55,  151 => 52,  145 => 100,  143 => 97,  140 => 96,  138 => 55,  134 => 53,  131 => 52,  128 => 51,  117 => 44,  107 => 36,  101 => 35,  87 => 24,  83 => 23,  79 => 22,  74 => 20,  70 => 19,  63 => 17,  60 => 16,  58 => 15,  49 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/frontend.html.twig", "/var/www/cibermania/app/Resources/views/front/frontend.html.twig");
    }
}

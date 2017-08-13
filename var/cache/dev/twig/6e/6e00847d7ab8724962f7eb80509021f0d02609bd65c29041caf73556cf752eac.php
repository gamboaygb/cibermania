<?php

/* front/frontend.html.twig */
class __TwigTemplate_d8094d7fe13216014a52bf84c0e30303a24a559a89b76d4f4c3ee38cf55d4840 extends Twig_Template
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
        $__internal_cdf26025088c9cb66c2718e56dea695c9fa9775bfad63c67270a65659c376188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf26025088c9cb66c2718e56dea695c9fa9775bfad63c67270a65659c376188->enter($__internal_cdf26025088c9cb66c2718e56dea695c9fa9775bfad63c67270a65659c376188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $__internal_f698126efdf7ae4540cdb07e7673267f1da2ffe9213839b04b52ca98cfbca24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f698126efdf7ae4540cdb07e7673267f1da2ffe9213839b04b52ca98cfbca24f->enter($__internal_f698126efdf7ae4540cdb07e7673267f1da2ffe9213839b04b52ca98cfbca24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf26025088c9cb66c2718e56dea695c9fa9775bfad63c67270a65659c376188->leave($__internal_cdf26025088c9cb66c2718e56dea695c9fa9775bfad63c67270a65659c376188_prof);

        
        $__internal_f698126efdf7ae4540cdb07e7673267f1da2ffe9213839b04b52ca98cfbca24f->leave($__internal_f698126efdf7ae4540cdb07e7673267f1da2ffe9213839b04b52ca98cfbca24f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b76f0ef8698f5c31bf8f92e33192599e006596c8946b88680e0efeef78d99fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b76f0ef8698f5c31bf8f92e33192599e006596c8946b88680e0efeef78d99fe->enter($__internal_7b76f0ef8698f5c31bf8f92e33192599e006596c8946b88680e0efeef78d99fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3ea1faae0780d435f5bac99abb9e2097ef94afddf6edd33c50212ce44fe2510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ea1faae0780d435f5bac99abb9e2097ef94afddf6edd33c50212ce44fe2510->enter($__internal_a3ea1faae0780d435f5bac99abb9e2097ef94afddf6edd33c50212ce44fe2510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mientras unos navegan por la tecnología, yo buceo";
        
        $__internal_a3ea1faae0780d435f5bac99abb9e2097ef94afddf6edd33c50212ce44fe2510->leave($__internal_a3ea1faae0780d435f5bac99abb9e2097ef94afddf6edd33c50212ce44fe2510_prof);

        
        $__internal_7b76f0ef8698f5c31bf8f92e33192599e006596c8946b88680e0efeef78d99fe->leave($__internal_7b76f0ef8698f5c31bf8f92e33192599e006596c8946b88680e0efeef78d99fe_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fbad20b135cf267edc3a19e93434973118e1ca2219f4424515a7324aa38e6b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbad20b135cf267edc3a19e93434973118e1ca2219f4424515a7324aa38e6b3b->enter($__internal_fbad20b135cf267edc3a19e93434973118e1ca2219f4424515a7324aa38e6b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_a12ed7fbca78166f588a72f2740073596a5205baf59a73dddc33df8f447674ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12ed7fbca78166f588a72f2740073596a5205baf59a73dddc33df8f447674ec->enter($__internal_a12ed7fbca78166f588a72f2740073596a5205baf59a73dddc33df8f447674ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "name", array()), "html", null, true);
            echo "\" class=\"rounded-circle mx-auto\" width=\"150\" height=\"150\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "picture", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "picture", array())) : ("johndoe.png")), "profile"), "html", null, true);
            echo "\">
              <div class=\"container\">
                <h1>";
            // line 19
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "name", array())), "html", null, true);
            echo "</h1>
                <p class=\"title\">";
            // line 20
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array") == "ROLE_USER")) ? ("Usuario") : ("Administrador"));
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
        
        $__internal_a12ed7fbca78166f588a72f2740073596a5205baf59a73dddc33df8f447674ec->leave($__internal_a12ed7fbca78166f588a72f2740073596a5205baf59a73dddc33df8f447674ec_prof);

        
        $__internal_fbad20b135cf267edc3a19e93434973118e1ca2219f4424515a7324aa38e6b3b->leave($__internal_fbad20b135cf267edc3a19e93434973118e1ca2219f4424515a7324aa38e6b3b_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c6c7c44c00a188b556821413b1aa01b80ca00c439153e46c04f213afb0f0dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6c7c44c00a188b556821413b1aa01b80ca00c439153e46c04f213afb0f0dd4->enter($__internal_5c6c7c44c00a188b556821413b1aa01b80ca00c439153e46c04f213afb0f0dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_686b5fb39774d571195dc1d8fe68829d208a71d4628dafd9c627c280fdcc38a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686b5fb39774d571195dc1d8fe68829d208a71d4628dafd9c627c280fdcc38a2->enter($__internal_686b5fb39774d571195dc1d8fe68829d208a71d4628dafd9c627c280fdcc38a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_686b5fb39774d571195dc1d8fe68829d208a71d4628dafd9c627c280fdcc38a2->leave($__internal_686b5fb39774d571195dc1d8fe68829d208a71d4628dafd9c627c280fdcc38a2_prof);

        
        $__internal_5c6c7c44c00a188b556821413b1aa01b80ca00c439153e46c04f213afb0f0dd4->leave($__internal_5c6c7c44c00a188b556821413b1aa01b80ca00c439153e46c04f213afb0f0dd4_prof);

    }

    // line 52
    public function block_id($context, array $blocks = array())
    {
        $__internal_5b31b869aa3718287f8b46e1083b7f459b93e33529f9c51494b8210f8192f7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b31b869aa3718287f8b46e1083b7f459b93e33529f9c51494b8210f8192f7c7->enter($__internal_5b31b869aa3718287f8b46e1083b7f459b93e33529f9c51494b8210f8192f7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_8702a2d4b5b482aeebebeaf7c87d01dfff1bd9d6dffee8f8917994394ac6b69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8702a2d4b5b482aeebebeaf7c87d01dfff1bd9d6dffee8f8917994394ac6b69a->enter($__internal_8702a2d4b5b482aeebebeaf7c87d01dfff1bd9d6dffee8f8917994394ac6b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        
        $__internal_8702a2d4b5b482aeebebeaf7c87d01dfff1bd9d6dffee8f8917994394ac6b69a->leave($__internal_8702a2d4b5b482aeebebeaf7c87d01dfff1bd9d6dffee8f8917994394ac6b69a_prof);

        
        $__internal_5b31b869aa3718287f8b46e1083b7f459b93e33529f9c51494b8210f8192f7c7->leave($__internal_5b31b869aa3718287f8b46e1083b7f459b93e33529f9c51494b8210f8192f7c7_prof);

    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        $__internal_e9ab1c8903c4b2c860a163d9653179e6dec83d2d4cb4db9654a98e2dc46145f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ab1c8903c4b2c860a163d9653179e6dec83d2d4cb4db9654a98e2dc46145f8->enter($__internal_e9ab1c8903c4b2c860a163d9653179e6dec83d2d4cb4db9654a98e2dc46145f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7b73b111a537cddbde9f3fd574dabd3a7b5d7a938ce92cdb62a0328855a3cac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b73b111a537cddbde9f3fd574dabd3a7b5d7a938ce92cdb62a0328855a3cac4->enter($__internal_7b73b111a537cddbde9f3fd574dabd3a7b5d7a938ce92cdb62a0328855a3cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "picture", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "person", array()), "picture", array())) : ("johndoe.png")), "profile"), "html", null, true);
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
        
        $__internal_7b73b111a537cddbde9f3fd574dabd3a7b5d7a938ce92cdb62a0328855a3cac4->leave($__internal_7b73b111a537cddbde9f3fd574dabd3a7b5d7a938ce92cdb62a0328855a3cac4_prof);

        
        $__internal_e9ab1c8903c4b2c860a163d9653179e6dec83d2d4cb4db9654a98e2dc46145f8->leave($__internal_e9ab1c8903c4b2c860a163d9653179e6dec83d2d4cb4db9654a98e2dc46145f8_prof);

    }

    // line 97
    public function block_section($context, array $blocks = array())
    {
        $__internal_a5cf8003329996d87fe604c9752675736f1bb4f4deecd8bc5698674e5f38147f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cf8003329996d87fe604c9752675736f1bb4f4deecd8bc5698674e5f38147f->enter($__internal_a5cf8003329996d87fe604c9752675736f1bb4f4deecd8bc5698674e5f38147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_fe7bcdfc9118c57ef30b7c5d8baad205fdfe1d19e5136e07bf6be20f6628c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7bcdfc9118c57ef30b7c5d8baad205fdfe1d19e5136e07bf6be20f6628c02d->enter($__internal_fe7bcdfc9118c57ef30b7c5d8baad205fdfe1d19e5136e07bf6be20f6628c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 98
        echo "
    ";
        
        $__internal_fe7bcdfc9118c57ef30b7c5d8baad205fdfe1d19e5136e07bf6be20f6628c02d->leave($__internal_fe7bcdfc9118c57ef30b7c5d8baad205fdfe1d19e5136e07bf6be20f6628c02d_prof);

        
        $__internal_a5cf8003329996d87fe604c9752675736f1bb4f4deecd8bc5698674e5f38147f->leave($__internal_a5cf8003329996d87fe604c9752675736f1bb4f4deecd8bc5698674e5f38147f_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b2e6f678f157b257621b828000317fbc08570612bc7d77707615c4ad41eaaf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e6f678f157b257621b828000317fbc08570612bc7d77707615c4ad41eaaf6f->enter($__internal_b2e6f678f157b257621b828000317fbc08570612bc7d77707615c4ad41eaaf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2f5caec1222791d57314611dde2991060f9f7b49279dda4973a271b9d562e305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5caec1222791d57314611dde2991060f9f7b49279dda4973a271b9d562e305->enter($__internal_2f5caec1222791d57314611dde2991060f9f7b49279dda4973a271b9d562e305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "    ";
        echo twig_include($this->env, $context, "front/footer.html.twig");
        echo "

";
        
        $__internal_2f5caec1222791d57314611dde2991060f9f7b49279dda4973a271b9d562e305->leave($__internal_2f5caec1222791d57314611dde2991060f9f7b49279dda4973a271b9d562e305_prof);

        
        $__internal_b2e6f678f157b257621b828000317fbc08570612bc7d77707615c4ad41eaaf6f->leave($__internal_b2e6f678f157b257621b828000317fbc08570612bc7d77707615c4ad41eaaf6f_prof);

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
        return array (  327 => 105,  318 => 104,  307 => 98,  298 => 97,  277 => 85,  270 => 81,  263 => 77,  256 => 73,  249 => 69,  243 => 65,  239 => 63,  233 => 61,  231 => 60,  225 => 56,  216 => 55,  199 => 52,  187 => 100,  185 => 97,  182 => 96,  180 => 55,  176 => 53,  173 => 52,  164 => 51,  147 => 44,  137 => 36,  131 => 35,  117 => 24,  113 => 23,  109 => 22,  104 => 20,  100 => 19,  93 => 17,  90 => 16,  88 => 15,  79 => 9,  73 => 5,  64 => 4,  46 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Mientras unos navegan por la tecnología, yo buceo{% endblock %}
{% block sidebar %}
    <div id=\"mySidenav\" class=\"sidenav\">
        <a href=\"javascript:void(0)\" class=\"closebtn\" >&times;</a>

        <div id=\"search\" class=\"col-12\">
             <form method=\"get\" action=\"{{ path('search') }}\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"data\" id=\"slug\" placeholder=\"Buscar\" />
               </div> 
            </form>
        </div>
        {% if app.user.person is defined %}
            <div class=\"card mb-3\">
              <img alt=\"{{app.user.person.name}}\" class=\"rounded-circle mx-auto\" width=\"150\" height=\"150\" src=\"{{ asset(app.user.person.picture?:'johndoe.png', 'profile') }}\">
              <div class=\"container\">
                <h1>{{ app.user.person.name|capitalize }}</h1>
                <p class=\"title\">{{ app.user.roles[0] == \"ROLE_USER\" ? 'Usuario' : 'Administrador' }}</p>
                <ul>
                  <li><a href=\"{{ path('my_post') }}\">Mis Post</a></li>
                  <li><a href=\"{{ path('edit_profile') }}\">Mi Perfil</a></li>
                  <li><a href=\"{{ path('user_logout') }}\">Desconectar</a></li>
                </ul>
                <ul>
                    <li><a href=\"https://www.youtube.com/user/cibermaniasful\"><i class=\"fa fa-youtube\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                </ul>
              </div>
            </div>
        {%   else %}
            {{ render(controller('AppBundle:Security:boxLogin')) }}
        {% endif %} 

        <div class=\"col-12 menu\">
            <a href=\"#\">Qué es CibErMaNia</a>
            <a href=\"#\">Servicios</a>
            <a href=\"#\">Contacto</a>
        </div>
        <div class=\"col-12\">
            <a href=\"{{ path('pagina', { pagina: 'ayuda' }) }}\">Ayuda</a>
            <a href=\"#\">Aviso Legal</a>
            <a href=\"#\">Políticas de Privacidad</a>
        </div>
    </div>

{% endblock %}
{% block body %}
    {% block id %}{% endblock %}

<div class=\"container-fluid main\">
    {% block header %}
        <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            {% if app.user.person is defined %}
                <img alt=\"Ver Perfil\" id=\"opennav\" title=\"Ver Perfil\" class=\"rounded-circle mx-auto \" width=\"60\" height=\"60\" src=\"{{ asset(app.user.person.picture?:'johndoe.png', 'profile') }}\">
            {% else %}
                <span class=\"navbar-brand fa-2x\" id=\"opennav\">&#9776;</span>
            {% endif %}
\t
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\"><i class=\"fa fa-home fa-3x\" aria-hidden=\"true\"></i>
                            <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('category_post_list',{slug:'windows'}) }}\"><i class=\"fa fa-windows fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('category_post_list',{slug:'linux'}) }}\"><i class=\"fa fa-linux fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('category_post_list',{slug:'apple'}) }}\"><i class=\"fa fa-apple fa-3x\" aria-hidden=\"true\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('category_post_list',{slug:'android'}) }}\"><i class=\"fa fa-android fa-3x\" aria-hidden=\"true\"></i>

                        </a>
                    </li>
                </ul>


            </div>
        </nav>

    {% endblock %}

    {% block section %}

    {% endblock %}

</div>
{% endblock %}

{% block footer %}
    {{ include('front/footer.html.twig') }}

{% endblock %}
", "front/frontend.html.twig", "/var/www/cibermania/app/Resources/views/front/frontend.html.twig");
    }
}

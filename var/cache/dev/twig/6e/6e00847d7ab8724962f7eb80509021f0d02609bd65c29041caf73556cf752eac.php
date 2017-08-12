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
        $__internal_e17f8814ce6305f49ea47ea2e4aa73e8f568a37bb1aa3e7c81fc6f20ab3bc0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17f8814ce6305f49ea47ea2e4aa73e8f568a37bb1aa3e7c81fc6f20ab3bc0b0->enter($__internal_e17f8814ce6305f49ea47ea2e4aa73e8f568a37bb1aa3e7c81fc6f20ab3bc0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $__internal_1b8f0e266ec462440878dfa11fea64d4a081f21fdedc8bea4dbf3354034cb450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8f0e266ec462440878dfa11fea64d4a081f21fdedc8bea4dbf3354034cb450->enter($__internal_1b8f0e266ec462440878dfa11fea64d4a081f21fdedc8bea4dbf3354034cb450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17f8814ce6305f49ea47ea2e4aa73e8f568a37bb1aa3e7c81fc6f20ab3bc0b0->leave($__internal_e17f8814ce6305f49ea47ea2e4aa73e8f568a37bb1aa3e7c81fc6f20ab3bc0b0_prof);

        
        $__internal_1b8f0e266ec462440878dfa11fea64d4a081f21fdedc8bea4dbf3354034cb450->leave($__internal_1b8f0e266ec462440878dfa11fea64d4a081f21fdedc8bea4dbf3354034cb450_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7921123b04ed9b080e8ec43347d1e2d708948796fa9453a19aa641c828ff7c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7921123b04ed9b080e8ec43347d1e2d708948796fa9453a19aa641c828ff7c5->enter($__internal_f7921123b04ed9b080e8ec43347d1e2d708948796fa9453a19aa641c828ff7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_385b9998e1cdc7341ac7c713db8d7931fc65674bd2d80de65c0c6ba031715b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385b9998e1cdc7341ac7c713db8d7931fc65674bd2d80de65c0c6ba031715b34->enter($__internal_385b9998e1cdc7341ac7c713db8d7931fc65674bd2d80de65c0c6ba031715b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mientras unos navegan por la tecnología, yo buceo";
        
        $__internal_385b9998e1cdc7341ac7c713db8d7931fc65674bd2d80de65c0c6ba031715b34->leave($__internal_385b9998e1cdc7341ac7c713db8d7931fc65674bd2d80de65c0c6ba031715b34_prof);

        
        $__internal_f7921123b04ed9b080e8ec43347d1e2d708948796fa9453a19aa641c828ff7c5->leave($__internal_f7921123b04ed9b080e8ec43347d1e2d708948796fa9453a19aa641c828ff7c5_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a07ef8741647d0d39baeda671ea1c7c19d28db510183408415ea2535f2460c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07ef8741647d0d39baeda671ea1c7c19d28db510183408415ea2535f2460c50->enter($__internal_a07ef8741647d0d39baeda671ea1c7c19d28db510183408415ea2535f2460c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d762a44f232df14491a6c7cd03e39f7e8caa337d96735c63561abc41bf60469c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d762a44f232df14491a6c7cd03e39f7e8caa337d96735c63561abc41bf60469c->enter($__internal_d762a44f232df14491a6c7cd03e39f7e8caa337d96735c63561abc41bf60469c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_d762a44f232df14491a6c7cd03e39f7e8caa337d96735c63561abc41bf60469c->leave($__internal_d762a44f232df14491a6c7cd03e39f7e8caa337d96735c63561abc41bf60469c_prof);

        
        $__internal_a07ef8741647d0d39baeda671ea1c7c19d28db510183408415ea2535f2460c50->leave($__internal_a07ef8741647d0d39baeda671ea1c7c19d28db510183408415ea2535f2460c50_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f71745f93819e257f9cf81100ad6ef850365666fbdcc8534d9306b9acedba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f71745f93819e257f9cf81100ad6ef850365666fbdcc8534d9306b9acedba3->enter($__internal_15f71745f93819e257f9cf81100ad6ef850365666fbdcc8534d9306b9acedba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf93d3d924be42e2218b07f91c5c42072cf88dfa7800b3d5abec1636a3b8dd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf93d3d924be42e2218b07f91c5c42072cf88dfa7800b3d5abec1636a3b8dd6f->enter($__internal_bf93d3d924be42e2218b07f91c5c42072cf88dfa7800b3d5abec1636a3b8dd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf93d3d924be42e2218b07f91c5c42072cf88dfa7800b3d5abec1636a3b8dd6f->leave($__internal_bf93d3d924be42e2218b07f91c5c42072cf88dfa7800b3d5abec1636a3b8dd6f_prof);

        
        $__internal_15f71745f93819e257f9cf81100ad6ef850365666fbdcc8534d9306b9acedba3->leave($__internal_15f71745f93819e257f9cf81100ad6ef850365666fbdcc8534d9306b9acedba3_prof);

    }

    // line 52
    public function block_id($context, array $blocks = array())
    {
        $__internal_82d556a021807f8117e18f084616cc3281f96d309c2bb83334552ea1fb933f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d556a021807f8117e18f084616cc3281f96d309c2bb83334552ea1fb933f26->enter($__internal_82d556a021807f8117e18f084616cc3281f96d309c2bb83334552ea1fb933f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_1729d6da6728cb2b1a59f65c4324016a767ec371ec1f70fa21ea420babd699d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1729d6da6728cb2b1a59f65c4324016a767ec371ec1f70fa21ea420babd699d0->enter($__internal_1729d6da6728cb2b1a59f65c4324016a767ec371ec1f70fa21ea420babd699d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        
        $__internal_1729d6da6728cb2b1a59f65c4324016a767ec371ec1f70fa21ea420babd699d0->leave($__internal_1729d6da6728cb2b1a59f65c4324016a767ec371ec1f70fa21ea420babd699d0_prof);

        
        $__internal_82d556a021807f8117e18f084616cc3281f96d309c2bb83334552ea1fb933f26->leave($__internal_82d556a021807f8117e18f084616cc3281f96d309c2bb83334552ea1fb933f26_prof);

    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        $__internal_bbfaf9b5312167b609c9467ffb9f7207c2573b19c5709ce815738eadfd9879a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfaf9b5312167b609c9467ffb9f7207c2573b19c5709ce815738eadfd9879a3->enter($__internal_bbfaf9b5312167b609c9467ffb9f7207c2573b19c5709ce815738eadfd9879a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_de77d1f26c1f5410309730bac7fd1871b0c2482338d45849223ee98377ce269d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de77d1f26c1f5410309730bac7fd1871b0c2482338d45849223ee98377ce269d->enter($__internal_de77d1f26c1f5410309730bac7fd1871b0c2482338d45849223ee98377ce269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_de77d1f26c1f5410309730bac7fd1871b0c2482338d45849223ee98377ce269d->leave($__internal_de77d1f26c1f5410309730bac7fd1871b0c2482338d45849223ee98377ce269d_prof);

        
        $__internal_bbfaf9b5312167b609c9467ffb9f7207c2573b19c5709ce815738eadfd9879a3->leave($__internal_bbfaf9b5312167b609c9467ffb9f7207c2573b19c5709ce815738eadfd9879a3_prof);

    }

    // line 97
    public function block_section($context, array $blocks = array())
    {
        $__internal_d82ea412c088b0802a754cd1500db560078987e98c771af0927cfcde5efc92a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82ea412c088b0802a754cd1500db560078987e98c771af0927cfcde5efc92a6->enter($__internal_d82ea412c088b0802a754cd1500db560078987e98c771af0927cfcde5efc92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_a4a40ff7620a45e94d1f8a13ccb5526586065e7a75b53e1fe919e4f691a9ce0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a40ff7620a45e94d1f8a13ccb5526586065e7a75b53e1fe919e4f691a9ce0c->enter($__internal_a4a40ff7620a45e94d1f8a13ccb5526586065e7a75b53e1fe919e4f691a9ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 98
        echo "
    ";
        
        $__internal_a4a40ff7620a45e94d1f8a13ccb5526586065e7a75b53e1fe919e4f691a9ce0c->leave($__internal_a4a40ff7620a45e94d1f8a13ccb5526586065e7a75b53e1fe919e4f691a9ce0c_prof);

        
        $__internal_d82ea412c088b0802a754cd1500db560078987e98c771af0927cfcde5efc92a6->leave($__internal_d82ea412c088b0802a754cd1500db560078987e98c771af0927cfcde5efc92a6_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d138dfb4a1e3eeca3e639d9c2d10102f0bfc2bf0dfc0afff685cfcae283a020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d138dfb4a1e3eeca3e639d9c2d10102f0bfc2bf0dfc0afff685cfcae283a020->enter($__internal_7d138dfb4a1e3eeca3e639d9c2d10102f0bfc2bf0dfc0afff685cfcae283a020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_796bc0ac43bac70a4198f3d6a30a6c2bfb0821b11fae745f1e6e237ab96f9817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796bc0ac43bac70a4198f3d6a30a6c2bfb0821b11fae745f1e6e237ab96f9817->enter($__internal_796bc0ac43bac70a4198f3d6a30a6c2bfb0821b11fae745f1e6e237ab96f9817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "    ";
        echo twig_include($this->env, $context, "front/footer.html.twig");
        echo "

";
        
        $__internal_796bc0ac43bac70a4198f3d6a30a6c2bfb0821b11fae745f1e6e237ab96f9817->leave($__internal_796bc0ac43bac70a4198f3d6a30a6c2bfb0821b11fae745f1e6e237ab96f9817_prof);

        
        $__internal_7d138dfb4a1e3eeca3e639d9c2d10102f0bfc2bf0dfc0afff685cfcae283a020->leave($__internal_7d138dfb4a1e3eeca3e639d9c2d10102f0bfc2bf0dfc0afff685cfcae283a020_prof);

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

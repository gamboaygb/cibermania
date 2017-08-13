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
        $__internal_c8202e97724f20ea8ef08dc903deadb217ab14984996be71e5e0fb77d4037ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8202e97724f20ea8ef08dc903deadb217ab14984996be71e5e0fb77d4037ee7->enter($__internal_c8202e97724f20ea8ef08dc903deadb217ab14984996be71e5e0fb77d4037ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $__internal_0d519034517792fabedfc2ade298ad17d01281b18395360f7d2428badf0e61ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d519034517792fabedfc2ade298ad17d01281b18395360f7d2428badf0e61ee->enter($__internal_0d519034517792fabedfc2ade298ad17d01281b18395360f7d2428badf0e61ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8202e97724f20ea8ef08dc903deadb217ab14984996be71e5e0fb77d4037ee7->leave($__internal_c8202e97724f20ea8ef08dc903deadb217ab14984996be71e5e0fb77d4037ee7_prof);

        
        $__internal_0d519034517792fabedfc2ade298ad17d01281b18395360f7d2428badf0e61ee->leave($__internal_0d519034517792fabedfc2ade298ad17d01281b18395360f7d2428badf0e61ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83511a5e3ace4dc96808a5c12e2d863ccd26468984438f7910df26cb64bd885f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83511a5e3ace4dc96808a5c12e2d863ccd26468984438f7910df26cb64bd885f->enter($__internal_83511a5e3ace4dc96808a5c12e2d863ccd26468984438f7910df26cb64bd885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25008880cae9eebc2af4bff09c268658f4e630feb6a36431943215a9d6eb9ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25008880cae9eebc2af4bff09c268658f4e630feb6a36431943215a9d6eb9ebc->enter($__internal_25008880cae9eebc2af4bff09c268658f4e630feb6a36431943215a9d6eb9ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mientras unos navegan por la tecnología, yo buceo";
        
        $__internal_25008880cae9eebc2af4bff09c268658f4e630feb6a36431943215a9d6eb9ebc->leave($__internal_25008880cae9eebc2af4bff09c268658f4e630feb6a36431943215a9d6eb9ebc_prof);

        
        $__internal_83511a5e3ace4dc96808a5c12e2d863ccd26468984438f7910df26cb64bd885f->leave($__internal_83511a5e3ace4dc96808a5c12e2d863ccd26468984438f7910df26cb64bd885f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b3262a4519d5a823a2c687adb1cbd23e31ec3109f78b1be868a1666fb01e72e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3262a4519d5a823a2c687adb1cbd23e31ec3109f78b1be868a1666fb01e72e7->enter($__internal_b3262a4519d5a823a2c687adb1cbd23e31ec3109f78b1be868a1666fb01e72e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4987548b9e1a70a573987b67c5f656d8ffcd5d463a53344ab3ccd88999c943ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4987548b9e1a70a573987b67c5f656d8ffcd5d463a53344ab3ccd88999c943ee->enter($__internal_4987548b9e1a70a573987b67c5f656d8ffcd5d463a53344ab3ccd88999c943ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_4987548b9e1a70a573987b67c5f656d8ffcd5d463a53344ab3ccd88999c943ee->leave($__internal_4987548b9e1a70a573987b67c5f656d8ffcd5d463a53344ab3ccd88999c943ee_prof);

        
        $__internal_b3262a4519d5a823a2c687adb1cbd23e31ec3109f78b1be868a1666fb01e72e7->leave($__internal_b3262a4519d5a823a2c687adb1cbd23e31ec3109f78b1be868a1666fb01e72e7_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba4a486701596b369bbb7f63c7579538f615160ed192ab146a6f27f354382196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4a486701596b369bbb7f63c7579538f615160ed192ab146a6f27f354382196->enter($__internal_ba4a486701596b369bbb7f63c7579538f615160ed192ab146a6f27f354382196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99f2e128c4982a45f4ebb05b53827ea13f763fe84f4928f921bd8251ce5201ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f2e128c4982a45f4ebb05b53827ea13f763fe84f4928f921bd8251ce5201ac->enter($__internal_99f2e128c4982a45f4ebb05b53827ea13f763fe84f4928f921bd8251ce5201ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99f2e128c4982a45f4ebb05b53827ea13f763fe84f4928f921bd8251ce5201ac->leave($__internal_99f2e128c4982a45f4ebb05b53827ea13f763fe84f4928f921bd8251ce5201ac_prof);

        
        $__internal_ba4a486701596b369bbb7f63c7579538f615160ed192ab146a6f27f354382196->leave($__internal_ba4a486701596b369bbb7f63c7579538f615160ed192ab146a6f27f354382196_prof);

    }

    // line 52
    public function block_id($context, array $blocks = array())
    {
        $__internal_e8edea71e9024cc4bf97626171813b3feb9e9e9e5193fd5ad7c1f8be812df70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8edea71e9024cc4bf97626171813b3feb9e9e9e5193fd5ad7c1f8be812df70e->enter($__internal_e8edea71e9024cc4bf97626171813b3feb9e9e9e5193fd5ad7c1f8be812df70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_b20728378f3da5f4cc4cdac15429c7939d3d6cdd8aeae65ea7db290ba55fcb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20728378f3da5f4cc4cdac15429c7939d3d6cdd8aeae65ea7db290ba55fcb67->enter($__internal_b20728378f3da5f4cc4cdac15429c7939d3d6cdd8aeae65ea7db290ba55fcb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        
        $__internal_b20728378f3da5f4cc4cdac15429c7939d3d6cdd8aeae65ea7db290ba55fcb67->leave($__internal_b20728378f3da5f4cc4cdac15429c7939d3d6cdd8aeae65ea7db290ba55fcb67_prof);

        
        $__internal_e8edea71e9024cc4bf97626171813b3feb9e9e9e5193fd5ad7c1f8be812df70e->leave($__internal_e8edea71e9024cc4bf97626171813b3feb9e9e9e5193fd5ad7c1f8be812df70e_prof);

    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        $__internal_204bba1e7f53b22b8ed3d5f4a0a69bdb943853712e13783bbfad8bb54ff286f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204bba1e7f53b22b8ed3d5f4a0a69bdb943853712e13783bbfad8bb54ff286f6->enter($__internal_204bba1e7f53b22b8ed3d5f4a0a69bdb943853712e13783bbfad8bb54ff286f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6bb8a1ea2ccdcdbf6b5fed269510c2767d11808944eee222255ff44c5c4a57d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb8a1ea2ccdcdbf6b5fed269510c2767d11808944eee222255ff44c5c4a57d7->enter($__internal_6bb8a1ea2ccdcdbf6b5fed269510c2767d11808944eee222255ff44c5c4a57d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6bb8a1ea2ccdcdbf6b5fed269510c2767d11808944eee222255ff44c5c4a57d7->leave($__internal_6bb8a1ea2ccdcdbf6b5fed269510c2767d11808944eee222255ff44c5c4a57d7_prof);

        
        $__internal_204bba1e7f53b22b8ed3d5f4a0a69bdb943853712e13783bbfad8bb54ff286f6->leave($__internal_204bba1e7f53b22b8ed3d5f4a0a69bdb943853712e13783bbfad8bb54ff286f6_prof);

    }

    // line 97
    public function block_section($context, array $blocks = array())
    {
        $__internal_f2cedf39b631827400dbdaf8cdfd91601090162dce22cac662b4525230b51988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2cedf39b631827400dbdaf8cdfd91601090162dce22cac662b4525230b51988->enter($__internal_f2cedf39b631827400dbdaf8cdfd91601090162dce22cac662b4525230b51988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_bd36f214b1101738d6b2468725679f5e24ae1f42586c10c8a006958db12f6521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd36f214b1101738d6b2468725679f5e24ae1f42586c10c8a006958db12f6521->enter($__internal_bd36f214b1101738d6b2468725679f5e24ae1f42586c10c8a006958db12f6521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 98
        echo "
    ";
        
        $__internal_bd36f214b1101738d6b2468725679f5e24ae1f42586c10c8a006958db12f6521->leave($__internal_bd36f214b1101738d6b2468725679f5e24ae1f42586c10c8a006958db12f6521_prof);

        
        $__internal_f2cedf39b631827400dbdaf8cdfd91601090162dce22cac662b4525230b51988->leave($__internal_f2cedf39b631827400dbdaf8cdfd91601090162dce22cac662b4525230b51988_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $__internal_18f435de54da13eaeae045fb1ca04832584e3edadb48bb5f09873e7aac799dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f435de54da13eaeae045fb1ca04832584e3edadb48bb5f09873e7aac799dd3->enter($__internal_18f435de54da13eaeae045fb1ca04832584e3edadb48bb5f09873e7aac799dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c679d40f03ce6c84abb2d6df92bd5bfa071a3d13231476b26f52c63d3016f7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c679d40f03ce6c84abb2d6df92bd5bfa071a3d13231476b26f52c63d3016f7ae->enter($__internal_c679d40f03ce6c84abb2d6df92bd5bfa071a3d13231476b26f52c63d3016f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "    ";
        echo twig_include($this->env, $context, "front/footer.html.twig");
        echo "

";
        
        $__internal_c679d40f03ce6c84abb2d6df92bd5bfa071a3d13231476b26f52c63d3016f7ae->leave($__internal_c679d40f03ce6c84abb2d6df92bd5bfa071a3d13231476b26f52c63d3016f7ae_prof);

        
        $__internal_18f435de54da13eaeae045fb1ca04832584e3edadb48bb5f09873e7aac799dd3->leave($__internal_18f435de54da13eaeae045fb1ca04832584e3edadb48bb5f09873e7aac799dd3_prof);

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

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5133801f28c090da5a5bf1fae78ada1470f2d375c2facc32113a2b13c3026052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5133801f28c090da5a5bf1fae78ada1470f2d375c2facc32113a2b13c3026052->enter($__internal_5133801f28c090da5a5bf1fae78ada1470f2d375c2facc32113a2b13c3026052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a4c06681f747bab980d52fb756b9717b37f4ede25c15403b51a74bb9949e8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4c06681f747bab980d52fb756b9717b37f4ede25c15403b51a74bb9949e8f2->enter($__internal_4a4c06681f747bab980d52fb756b9717b37f4ede25c15403b51a74bb9949e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5133801f28c090da5a5bf1fae78ada1470f2d375c2facc32113a2b13c3026052->leave($__internal_5133801f28c090da5a5bf1fae78ada1470f2d375c2facc32113a2b13c3026052_prof);

        
        $__internal_4a4c06681f747bab980d52fb756b9717b37f4ede25c15403b51a74bb9949e8f2->leave($__internal_4a4c06681f747bab980d52fb756b9717b37f4ede25c15403b51a74bb9949e8f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fd6e557a4e488b0641dd58fb35fd29a7b992f61c49f8797da1be5d2a1e73f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd6e557a4e488b0641dd58fb35fd29a7b992f61c49f8797da1be5d2a1e73f8c->enter($__internal_0fd6e557a4e488b0641dd58fb35fd29a7b992f61c49f8797da1be5d2a1e73f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f67c67ae9654fbddbdc959b5eba59c7c4753c1631c049562c0eec3284e29e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f67c67ae9654fbddbdc959b5eba59c7c4753c1631c049562c0eec3284e29e82->enter($__internal_8f67c67ae9654fbddbdc959b5eba59c7c4753c1631c049562c0eec3284e29e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f67c67ae9654fbddbdc959b5eba59c7c4753c1631c049562c0eec3284e29e82->leave($__internal_8f67c67ae9654fbddbdc959b5eba59c7c4753c1631c049562c0eec3284e29e82_prof);

        
        $__internal_0fd6e557a4e488b0641dd58fb35fd29a7b992f61c49f8797da1be5d2a1e73f8c->leave($__internal_0fd6e557a4e488b0641dd58fb35fd29a7b992f61c49f8797da1be5d2a1e73f8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_031b14b89c5ff70b1c37343aab50b50b693626c3abb04608bad4a10cda46cb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031b14b89c5ff70b1c37343aab50b50b693626c3abb04608bad4a10cda46cb2b->enter($__internal_031b14b89c5ff70b1c37343aab50b50b693626c3abb04608bad4a10cda46cb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ff6fd86469c6d29c99676bec6f72ca154d163c28514e0ca63045b6c930928fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff6fd86469c6d29c99676bec6f72ca154d163c28514e0ca63045b6c930928fb->enter($__internal_8ff6fd86469c6d29c99676bec6f72ca154d163c28514e0ca63045b6c930928fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ff6fd86469c6d29c99676bec6f72ca154d163c28514e0ca63045b6c930928fb->leave($__internal_8ff6fd86469c6d29c99676bec6f72ca154d163c28514e0ca63045b6c930928fb_prof);

        
        $__internal_031b14b89c5ff70b1c37343aab50b50b693626c3abb04608bad4a10cda46cb2b->leave($__internal_031b14b89c5ff70b1c37343aab50b50b693626c3abb04608bad4a10cda46cb2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63d4c81a5ace7afde3d562d28991a3f30f6824ffc7562ec855e181df3c719d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d4c81a5ace7afde3d562d28991a3f30f6824ffc7562ec855e181df3c719d6d->enter($__internal_63d4c81a5ace7afde3d562d28991a3f30f6824ffc7562ec855e181df3c719d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_584a7e02e8162d3688e5e3fe63f8d87dcafef30cfa87ec8459367c18a5c243b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584a7e02e8162d3688e5e3fe63f8d87dcafef30cfa87ec8459367c18a5c243b5->enter($__internal_584a7e02e8162d3688e5e3fe63f8d87dcafef30cfa87ec8459367c18a5c243b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_584a7e02e8162d3688e5e3fe63f8d87dcafef30cfa87ec8459367c18a5c243b5->leave($__internal_584a7e02e8162d3688e5e3fe63f8d87dcafef30cfa87ec8459367c18a5c243b5_prof);

        
        $__internal_63d4c81a5ace7afde3d562d28991a3f30f6824ffc7562ec855e181df3c719d6d->leave($__internal_63d4c81a5ace7afde3d562d28991a3f30f6824ffc7562ec855e181df3c719d6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

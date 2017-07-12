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
        $__internal_de6e916e43d87e69342ce927c0a3853f84bc794db790976c827f74e7b4828e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6e916e43d87e69342ce927c0a3853f84bc794db790976c827f74e7b4828e05->enter($__internal_de6e916e43d87e69342ce927c0a3853f84bc794db790976c827f74e7b4828e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3f5055e66719217b23c5111b6c004981a004d3e987e458e1719ce6b0bfbd8e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5055e66719217b23c5111b6c004981a004d3e987e458e1719ce6b0bfbd8e77->enter($__internal_3f5055e66719217b23c5111b6c004981a004d3e987e458e1719ce6b0bfbd8e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6e916e43d87e69342ce927c0a3853f84bc794db790976c827f74e7b4828e05->leave($__internal_de6e916e43d87e69342ce927c0a3853f84bc794db790976c827f74e7b4828e05_prof);

        
        $__internal_3f5055e66719217b23c5111b6c004981a004d3e987e458e1719ce6b0bfbd8e77->leave($__internal_3f5055e66719217b23c5111b6c004981a004d3e987e458e1719ce6b0bfbd8e77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0152217671d4267e49fb09b860cb21cd008ed1915416c8036b645e1c1f5e677d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0152217671d4267e49fb09b860cb21cd008ed1915416c8036b645e1c1f5e677d->enter($__internal_0152217671d4267e49fb09b860cb21cd008ed1915416c8036b645e1c1f5e677d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a1e202820187009d7d52b8f500c4a49c82454de3eeb4381f69c82c908771cc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e202820187009d7d52b8f500c4a49c82454de3eeb4381f69c82c908771cc37->enter($__internal_a1e202820187009d7d52b8f500c4a49c82454de3eeb4381f69c82c908771cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a1e202820187009d7d52b8f500c4a49c82454de3eeb4381f69c82c908771cc37->leave($__internal_a1e202820187009d7d52b8f500c4a49c82454de3eeb4381f69c82c908771cc37_prof);

        
        $__internal_0152217671d4267e49fb09b860cb21cd008ed1915416c8036b645e1c1f5e677d->leave($__internal_0152217671d4267e49fb09b860cb21cd008ed1915416c8036b645e1c1f5e677d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bf93c81864ea0487788fb57aa17ccf265559a1da9661b57d69e61b566eaf195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf93c81864ea0487788fb57aa17ccf265559a1da9661b57d69e61b566eaf195->enter($__internal_3bf93c81864ea0487788fb57aa17ccf265559a1da9661b57d69e61b566eaf195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d75232148acfb271633ab2a62be17d542e7c8e880484ede1458106a632cf0a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75232148acfb271633ab2a62be17d542e7c8e880484ede1458106a632cf0a57->enter($__internal_d75232148acfb271633ab2a62be17d542e7c8e880484ede1458106a632cf0a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d75232148acfb271633ab2a62be17d542e7c8e880484ede1458106a632cf0a57->leave($__internal_d75232148acfb271633ab2a62be17d542e7c8e880484ede1458106a632cf0a57_prof);

        
        $__internal_3bf93c81864ea0487788fb57aa17ccf265559a1da9661b57d69e61b566eaf195->leave($__internal_3bf93c81864ea0487788fb57aa17ccf265559a1da9661b57d69e61b566eaf195_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e2f0a6bfb0c31aef090bfcb26c4cdcb67824d73c9ad882446a000c3ac815237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2f0a6bfb0c31aef090bfcb26c4cdcb67824d73c9ad882446a000c3ac815237->enter($__internal_8e2f0a6bfb0c31aef090bfcb26c4cdcb67824d73c9ad882446a000c3ac815237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b826cc24d82ae1ada3a0cea8c77b274088f307fee705f36be1f30f328c3403f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b826cc24d82ae1ada3a0cea8c77b274088f307fee705f36be1f30f328c3403f->enter($__internal_7b826cc24d82ae1ada3a0cea8c77b274088f307fee705f36be1f30f328c3403f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b826cc24d82ae1ada3a0cea8c77b274088f307fee705f36be1f30f328c3403f->leave($__internal_7b826cc24d82ae1ada3a0cea8c77b274088f307fee705f36be1f30f328c3403f_prof);

        
        $__internal_8e2f0a6bfb0c31aef090bfcb26c4cdcb67824d73c9ad882446a000c3ac815237->leave($__internal_8e2f0a6bfb0c31aef090bfcb26c4cdcb67824d73c9ad882446a000c3ac815237_prof);

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

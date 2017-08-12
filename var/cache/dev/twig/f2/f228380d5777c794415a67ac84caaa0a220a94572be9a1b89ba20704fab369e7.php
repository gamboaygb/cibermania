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
        $__internal_468f155c0cadc1ed6db82438ee677ce3df4d6ab934c0876f6ececb98d8d11cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468f155c0cadc1ed6db82438ee677ce3df4d6ab934c0876f6ececb98d8d11cea->enter($__internal_468f155c0cadc1ed6db82438ee677ce3df4d6ab934c0876f6ececb98d8d11cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b29da0725721374b151de693a5dc0386a72a1404339f645c5b44b2e560539ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29da0725721374b151de693a5dc0386a72a1404339f645c5b44b2e560539ffe->enter($__internal_b29da0725721374b151de693a5dc0386a72a1404339f645c5b44b2e560539ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468f155c0cadc1ed6db82438ee677ce3df4d6ab934c0876f6ececb98d8d11cea->leave($__internal_468f155c0cadc1ed6db82438ee677ce3df4d6ab934c0876f6ececb98d8d11cea_prof);

        
        $__internal_b29da0725721374b151de693a5dc0386a72a1404339f645c5b44b2e560539ffe->leave($__internal_b29da0725721374b151de693a5dc0386a72a1404339f645c5b44b2e560539ffe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9c292e3558a038c0aa916648e5cdf0a2b09632a7703315ec8473256cb265efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c292e3558a038c0aa916648e5cdf0a2b09632a7703315ec8473256cb265efc->enter($__internal_a9c292e3558a038c0aa916648e5cdf0a2b09632a7703315ec8473256cb265efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed88c689d038e676423ef6ffd77c714c34f6f5af4bc8c261a63be238446c4251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed88c689d038e676423ef6ffd77c714c34f6f5af4bc8c261a63be238446c4251->enter($__internal_ed88c689d038e676423ef6ffd77c714c34f6f5af4bc8c261a63be238446c4251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed88c689d038e676423ef6ffd77c714c34f6f5af4bc8c261a63be238446c4251->leave($__internal_ed88c689d038e676423ef6ffd77c714c34f6f5af4bc8c261a63be238446c4251_prof);

        
        $__internal_a9c292e3558a038c0aa916648e5cdf0a2b09632a7703315ec8473256cb265efc->leave($__internal_a9c292e3558a038c0aa916648e5cdf0a2b09632a7703315ec8473256cb265efc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65d5c0922127811a21276c1996afd65693d97326979ea28d1b0dc0091af3e0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d5c0922127811a21276c1996afd65693d97326979ea28d1b0dc0091af3e0c6->enter($__internal_65d5c0922127811a21276c1996afd65693d97326979ea28d1b0dc0091af3e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba382155d44979868562316dc454d3261cfa1e5dce37262be270803b4e546d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba382155d44979868562316dc454d3261cfa1e5dce37262be270803b4e546d27->enter($__internal_ba382155d44979868562316dc454d3261cfa1e5dce37262be270803b4e546d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba382155d44979868562316dc454d3261cfa1e5dce37262be270803b4e546d27->leave($__internal_ba382155d44979868562316dc454d3261cfa1e5dce37262be270803b4e546d27_prof);

        
        $__internal_65d5c0922127811a21276c1996afd65693d97326979ea28d1b0dc0091af3e0c6->leave($__internal_65d5c0922127811a21276c1996afd65693d97326979ea28d1b0dc0091af3e0c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4a5d8b4a962a6b7a4e5b61002a303eef4227a7cc1cd8812bd4acf7d6e660bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a5d8b4a962a6b7a4e5b61002a303eef4227a7cc1cd8812bd4acf7d6e660bba->enter($__internal_a4a5d8b4a962a6b7a4e5b61002a303eef4227a7cc1cd8812bd4acf7d6e660bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20efd600a793f955b44d8ab92b81f27a2e217c3785fd6d808d4aeb7452da5213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20efd600a793f955b44d8ab92b81f27a2e217c3785fd6d808d4aeb7452da5213->enter($__internal_20efd600a793f955b44d8ab92b81f27a2e217c3785fd6d808d4aeb7452da5213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20efd600a793f955b44d8ab92b81f27a2e217c3785fd6d808d4aeb7452da5213->leave($__internal_20efd600a793f955b44d8ab92b81f27a2e217c3785fd6d808d4aeb7452da5213_prof);

        
        $__internal_a4a5d8b4a962a6b7a4e5b61002a303eef4227a7cc1cd8812bd4acf7d6e660bba->leave($__internal_a4a5d8b4a962a6b7a4e5b61002a303eef4227a7cc1cd8812bd4acf7d6e660bba_prof);

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

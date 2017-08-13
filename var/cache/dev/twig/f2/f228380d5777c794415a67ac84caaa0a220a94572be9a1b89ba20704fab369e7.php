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
        $__internal_09e4c7d7a31e4a20d6d25cff11ad9df9c2805fc6e8060e0a0cff064d16b4cbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e4c7d7a31e4a20d6d25cff11ad9df9c2805fc6e8060e0a0cff064d16b4cbac->enter($__internal_09e4c7d7a31e4a20d6d25cff11ad9df9c2805fc6e8060e0a0cff064d16b4cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_86a829cfec038e6db3c15a09ec26d5640ef6730b406ec8084fd02b5ec165c7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a829cfec038e6db3c15a09ec26d5640ef6730b406ec8084fd02b5ec165c7c0->enter($__internal_86a829cfec038e6db3c15a09ec26d5640ef6730b406ec8084fd02b5ec165c7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e4c7d7a31e4a20d6d25cff11ad9df9c2805fc6e8060e0a0cff064d16b4cbac->leave($__internal_09e4c7d7a31e4a20d6d25cff11ad9df9c2805fc6e8060e0a0cff064d16b4cbac_prof);

        
        $__internal_86a829cfec038e6db3c15a09ec26d5640ef6730b406ec8084fd02b5ec165c7c0->leave($__internal_86a829cfec038e6db3c15a09ec26d5640ef6730b406ec8084fd02b5ec165c7c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edfe8c47af646cf61d0649e0220e782a3d3e09431057359a3dc4cbfc6c903dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfe8c47af646cf61d0649e0220e782a3d3e09431057359a3dc4cbfc6c903dd5->enter($__internal_edfe8c47af646cf61d0649e0220e782a3d3e09431057359a3dc4cbfc6c903dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e637c6fcbdacb39574c1bc9813416441e720c7a07be05d2332b9ca9c23fb00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e637c6fcbdacb39574c1bc9813416441e720c7a07be05d2332b9ca9c23fb00e->enter($__internal_7e637c6fcbdacb39574c1bc9813416441e720c7a07be05d2332b9ca9c23fb00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e637c6fcbdacb39574c1bc9813416441e720c7a07be05d2332b9ca9c23fb00e->leave($__internal_7e637c6fcbdacb39574c1bc9813416441e720c7a07be05d2332b9ca9c23fb00e_prof);

        
        $__internal_edfe8c47af646cf61d0649e0220e782a3d3e09431057359a3dc4cbfc6c903dd5->leave($__internal_edfe8c47af646cf61d0649e0220e782a3d3e09431057359a3dc4cbfc6c903dd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1d27b6b483dd7a06b16822159a7c485bc7ee497776c426d7a1aee6e03331c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d27b6b483dd7a06b16822159a7c485bc7ee497776c426d7a1aee6e03331c06->enter($__internal_b1d27b6b483dd7a06b16822159a7c485bc7ee497776c426d7a1aee6e03331c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08f6be8ca98646b158e91949497ae09136d18651eaaa91f9ffa1a17ea3fefa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f6be8ca98646b158e91949497ae09136d18651eaaa91f9ffa1a17ea3fefa35->enter($__internal_08f6be8ca98646b158e91949497ae09136d18651eaaa91f9ffa1a17ea3fefa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08f6be8ca98646b158e91949497ae09136d18651eaaa91f9ffa1a17ea3fefa35->leave($__internal_08f6be8ca98646b158e91949497ae09136d18651eaaa91f9ffa1a17ea3fefa35_prof);

        
        $__internal_b1d27b6b483dd7a06b16822159a7c485bc7ee497776c426d7a1aee6e03331c06->leave($__internal_b1d27b6b483dd7a06b16822159a7c485bc7ee497776c426d7a1aee6e03331c06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73d10ad5dab3652bf752d3023a3293b64e7ee8e3f743924d5d208fcdc1bd3885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d10ad5dab3652bf752d3023a3293b64e7ee8e3f743924d5d208fcdc1bd3885->enter($__internal_73d10ad5dab3652bf752d3023a3293b64e7ee8e3f743924d5d208fcdc1bd3885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12d992a3f6bf409731badf9dc8ce3e862eaf70c3766262c9e02d76f16d9a0403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d992a3f6bf409731badf9dc8ce3e862eaf70c3766262c9e02d76f16d9a0403->enter($__internal_12d992a3f6bf409731badf9dc8ce3e862eaf70c3766262c9e02d76f16d9a0403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12d992a3f6bf409731badf9dc8ce3e862eaf70c3766262c9e02d76f16d9a0403->leave($__internal_12d992a3f6bf409731badf9dc8ce3e862eaf70c3766262c9e02d76f16d9a0403_prof);

        
        $__internal_73d10ad5dab3652bf752d3023a3293b64e7ee8e3f743924d5d208fcdc1bd3885->leave($__internal_73d10ad5dab3652bf752d3023a3293b64e7ee8e3f743924d5d208fcdc1bd3885_prof);

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

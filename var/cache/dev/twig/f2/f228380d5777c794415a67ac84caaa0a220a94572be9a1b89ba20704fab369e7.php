<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_9c4ad6042936068cf8c02ac3a5dadff63ef679909faa8ad88365e2ca75aee720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4ad6042936068cf8c02ac3a5dadff63ef679909faa8ad88365e2ca75aee720->enter($__internal_9c4ad6042936068cf8c02ac3a5dadff63ef679909faa8ad88365e2ca75aee720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b99e889e8a2a963d137ad0453ad3b4026ae79a6dbca157fae9efc446d2470bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99e889e8a2a963d137ad0453ad3b4026ae79a6dbca157fae9efc446d2470bfb->enter($__internal_b99e889e8a2a963d137ad0453ad3b4026ae79a6dbca157fae9efc446d2470bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4ad6042936068cf8c02ac3a5dadff63ef679909faa8ad88365e2ca75aee720->leave($__internal_9c4ad6042936068cf8c02ac3a5dadff63ef679909faa8ad88365e2ca75aee720_prof);

        
        $__internal_b99e889e8a2a963d137ad0453ad3b4026ae79a6dbca157fae9efc446d2470bfb->leave($__internal_b99e889e8a2a963d137ad0453ad3b4026ae79a6dbca157fae9efc446d2470bfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0c3a339d85fb29e9ef8ed042170ffe7c72bb574f3c31afe16f5e132680ded6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c3a339d85fb29e9ef8ed042170ffe7c72bb574f3c31afe16f5e132680ded6f->enter($__internal_c0c3a339d85fb29e9ef8ed042170ffe7c72bb574f3c31afe16f5e132680ded6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f631e7b0cdb72000f6e4ec05700aea7436a0a77c10efa3ee44bfe4087b4f0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f631e7b0cdb72000f6e4ec05700aea7436a0a77c10efa3ee44bfe4087b4f0c2->enter($__internal_6f631e7b0cdb72000f6e4ec05700aea7436a0a77c10efa3ee44bfe4087b4f0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f631e7b0cdb72000f6e4ec05700aea7436a0a77c10efa3ee44bfe4087b4f0c2->leave($__internal_6f631e7b0cdb72000f6e4ec05700aea7436a0a77c10efa3ee44bfe4087b4f0c2_prof);

        
        $__internal_c0c3a339d85fb29e9ef8ed042170ffe7c72bb574f3c31afe16f5e132680ded6f->leave($__internal_c0c3a339d85fb29e9ef8ed042170ffe7c72bb574f3c31afe16f5e132680ded6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f12f06a572fb60a7554eaea4f57633d4e83d3d1ffed9468bc37af10324793924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12f06a572fb60a7554eaea4f57633d4e83d3d1ffed9468bc37af10324793924->enter($__internal_f12f06a572fb60a7554eaea4f57633d4e83d3d1ffed9468bc37af10324793924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ecc9d903f6a07b819bba003b3af43ac567994d2733d0b58fef06e665aed97cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecc9d903f6a07b819bba003b3af43ac567994d2733d0b58fef06e665aed97cb->enter($__internal_8ecc9d903f6a07b819bba003b3af43ac567994d2733d0b58fef06e665aed97cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ecc9d903f6a07b819bba003b3af43ac567994d2733d0b58fef06e665aed97cb->leave($__internal_8ecc9d903f6a07b819bba003b3af43ac567994d2733d0b58fef06e665aed97cb_prof);

        
        $__internal_f12f06a572fb60a7554eaea4f57633d4e83d3d1ffed9468bc37af10324793924->leave($__internal_f12f06a572fb60a7554eaea4f57633d4e83d3d1ffed9468bc37af10324793924_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64705c004a1721497d88d808c6ca35d83aaa3e6eba4850424a992e317e020eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64705c004a1721497d88d808c6ca35d83aaa3e6eba4850424a992e317e020eb7->enter($__internal_64705c004a1721497d88d808c6ca35d83aaa3e6eba4850424a992e317e020eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f4faa6a00ffa34c5978cbd361c4d419d259c7532f0c0573a97a0b060190e092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4faa6a00ffa34c5978cbd361c4d419d259c7532f0c0573a97a0b060190e092->enter($__internal_1f4faa6a00ffa34c5978cbd361c4d419d259c7532f0c0573a97a0b060190e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f4faa6a00ffa34c5978cbd361c4d419d259c7532f0c0573a97a0b060190e092->leave($__internal_1f4faa6a00ffa34c5978cbd361c4d419d259c7532f0c0573a97a0b060190e092_prof);

        
        $__internal_64705c004a1721497d88d808c6ca35d83aaa3e6eba4850424a992e317e020eb7->leave($__internal_64705c004a1721497d88d808c6ca35d83aaa3e6eba4850424a992e317e020eb7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

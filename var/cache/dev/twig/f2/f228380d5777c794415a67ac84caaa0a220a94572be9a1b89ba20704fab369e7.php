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
        $__internal_c432db1af8bda99a2bc93c7560f4de94cf61b7289523f43c60851df24570e85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c432db1af8bda99a2bc93c7560f4de94cf61b7289523f43c60851df24570e85e->enter($__internal_c432db1af8bda99a2bc93c7560f4de94cf61b7289523f43c60851df24570e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fe97d5a6a9af8be60acbdc2e44e32fc97b05ff9e8beea1aa36cb1b184273e2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe97d5a6a9af8be60acbdc2e44e32fc97b05ff9e8beea1aa36cb1b184273e2ff->enter($__internal_fe97d5a6a9af8be60acbdc2e44e32fc97b05ff9e8beea1aa36cb1b184273e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c432db1af8bda99a2bc93c7560f4de94cf61b7289523f43c60851df24570e85e->leave($__internal_c432db1af8bda99a2bc93c7560f4de94cf61b7289523f43c60851df24570e85e_prof);

        
        $__internal_fe97d5a6a9af8be60acbdc2e44e32fc97b05ff9e8beea1aa36cb1b184273e2ff->leave($__internal_fe97d5a6a9af8be60acbdc2e44e32fc97b05ff9e8beea1aa36cb1b184273e2ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f33059ebdb43f1ba1c79b4388dc7d31ab31b45965cc4da0ef9d220ac36871a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33059ebdb43f1ba1c79b4388dc7d31ab31b45965cc4da0ef9d220ac36871a78->enter($__internal_f33059ebdb43f1ba1c79b4388dc7d31ab31b45965cc4da0ef9d220ac36871a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d78f84d4740714bb9bc300a9f0570b5716453fce2bc3b15803414e9f7f55507b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78f84d4740714bb9bc300a9f0570b5716453fce2bc3b15803414e9f7f55507b->enter($__internal_d78f84d4740714bb9bc300a9f0570b5716453fce2bc3b15803414e9f7f55507b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d78f84d4740714bb9bc300a9f0570b5716453fce2bc3b15803414e9f7f55507b->leave($__internal_d78f84d4740714bb9bc300a9f0570b5716453fce2bc3b15803414e9f7f55507b_prof);

        
        $__internal_f33059ebdb43f1ba1c79b4388dc7d31ab31b45965cc4da0ef9d220ac36871a78->leave($__internal_f33059ebdb43f1ba1c79b4388dc7d31ab31b45965cc4da0ef9d220ac36871a78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3d788aabfd669894181d898eceffa39180781c55392db8967c08b250c691798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d788aabfd669894181d898eceffa39180781c55392db8967c08b250c691798->enter($__internal_b3d788aabfd669894181d898eceffa39180781c55392db8967c08b250c691798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_963303f5c6a59713f96b1e97e7c0cd48d20ead21654b1e486648b6825d2bddf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963303f5c6a59713f96b1e97e7c0cd48d20ead21654b1e486648b6825d2bddf7->enter($__internal_963303f5c6a59713f96b1e97e7c0cd48d20ead21654b1e486648b6825d2bddf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_963303f5c6a59713f96b1e97e7c0cd48d20ead21654b1e486648b6825d2bddf7->leave($__internal_963303f5c6a59713f96b1e97e7c0cd48d20ead21654b1e486648b6825d2bddf7_prof);

        
        $__internal_b3d788aabfd669894181d898eceffa39180781c55392db8967c08b250c691798->leave($__internal_b3d788aabfd669894181d898eceffa39180781c55392db8967c08b250c691798_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d80aa1a6903fae50097a372d961e5c42214168bbf0ab43b9d19c5f4584f3fe61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80aa1a6903fae50097a372d961e5c42214168bbf0ab43b9d19c5f4584f3fe61->enter($__internal_d80aa1a6903fae50097a372d961e5c42214168bbf0ab43b9d19c5f4584f3fe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d264b05fd27b7ee9fc227b4ef5ce18106126998d7ff98053e99b6f75958647b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d264b05fd27b7ee9fc227b4ef5ce18106126998d7ff98053e99b6f75958647b->enter($__internal_3d264b05fd27b7ee9fc227b4ef5ce18106126998d7ff98053e99b6f75958647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d264b05fd27b7ee9fc227b4ef5ce18106126998d7ff98053e99b6f75958647b->leave($__internal_3d264b05fd27b7ee9fc227b4ef5ce18106126998d7ff98053e99b6f75958647b_prof);

        
        $__internal_d80aa1a6903fae50097a372d961e5c42214168bbf0ab43b9d19c5f4584f3fe61->leave($__internal_d80aa1a6903fae50097a372d961e5c42214168bbf0ab43b9d19c5f4584f3fe61_prof);

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

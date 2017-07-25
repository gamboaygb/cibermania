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
        $__internal_f7236d4850215283a0e37a078ca170909244f8b620b6be3c4c6cf943eaaed37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7236d4850215283a0e37a078ca170909244f8b620b6be3c4c6cf943eaaed37f->enter($__internal_f7236d4850215283a0e37a078ca170909244f8b620b6be3c4c6cf943eaaed37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f76d12922a5960a5e56540945847c3cadca96b0b8e2c65d966902162327c41d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76d12922a5960a5e56540945847c3cadca96b0b8e2c65d966902162327c41d4->enter($__internal_f76d12922a5960a5e56540945847c3cadca96b0b8e2c65d966902162327c41d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7236d4850215283a0e37a078ca170909244f8b620b6be3c4c6cf943eaaed37f->leave($__internal_f7236d4850215283a0e37a078ca170909244f8b620b6be3c4c6cf943eaaed37f_prof);

        
        $__internal_f76d12922a5960a5e56540945847c3cadca96b0b8e2c65d966902162327c41d4->leave($__internal_f76d12922a5960a5e56540945847c3cadca96b0b8e2c65d966902162327c41d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2afced0333ebec839a44e44da5df9ced57f2ccba29a1a2a2a2603903aad45423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afced0333ebec839a44e44da5df9ced57f2ccba29a1a2a2a2603903aad45423->enter($__internal_2afced0333ebec839a44e44da5df9ced57f2ccba29a1a2a2a2603903aad45423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f027c07cc1caf8c00e6cd9f0571abc50669b1d4fc7306af1e43b79d28b0d4c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f027c07cc1caf8c00e6cd9f0571abc50669b1d4fc7306af1e43b79d28b0d4c58->enter($__internal_f027c07cc1caf8c00e6cd9f0571abc50669b1d4fc7306af1e43b79d28b0d4c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f027c07cc1caf8c00e6cd9f0571abc50669b1d4fc7306af1e43b79d28b0d4c58->leave($__internal_f027c07cc1caf8c00e6cd9f0571abc50669b1d4fc7306af1e43b79d28b0d4c58_prof);

        
        $__internal_2afced0333ebec839a44e44da5df9ced57f2ccba29a1a2a2a2603903aad45423->leave($__internal_2afced0333ebec839a44e44da5df9ced57f2ccba29a1a2a2a2603903aad45423_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_013030ac4631b2a04d07be27721d546df3b3b81c81b94f0713707f512b6cb492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013030ac4631b2a04d07be27721d546df3b3b81c81b94f0713707f512b6cb492->enter($__internal_013030ac4631b2a04d07be27721d546df3b3b81c81b94f0713707f512b6cb492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_83efacc0c87272d26622c19fa2c286029b49d48eb115b40c859fc5b2f5736d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83efacc0c87272d26622c19fa2c286029b49d48eb115b40c859fc5b2f5736d36->enter($__internal_83efacc0c87272d26622c19fa2c286029b49d48eb115b40c859fc5b2f5736d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83efacc0c87272d26622c19fa2c286029b49d48eb115b40c859fc5b2f5736d36->leave($__internal_83efacc0c87272d26622c19fa2c286029b49d48eb115b40c859fc5b2f5736d36_prof);

        
        $__internal_013030ac4631b2a04d07be27721d546df3b3b81c81b94f0713707f512b6cb492->leave($__internal_013030ac4631b2a04d07be27721d546df3b3b81c81b94f0713707f512b6cb492_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32a56daf0060dc7ca8291cb2f73ec5f219456c016220d40a4029831cab4bf007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a56daf0060dc7ca8291cb2f73ec5f219456c016220d40a4029831cab4bf007->enter($__internal_32a56daf0060dc7ca8291cb2f73ec5f219456c016220d40a4029831cab4bf007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e28781b0d8cbda53713dde1e0b8d4b92ed71c443fe3578d76b68c4b78fc0df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e28781b0d8cbda53713dde1e0b8d4b92ed71c443fe3578d76b68c4b78fc0df1->enter($__internal_1e28781b0d8cbda53713dde1e0b8d4b92ed71c443fe3578d76b68c4b78fc0df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e28781b0d8cbda53713dde1e0b8d4b92ed71c443fe3578d76b68c4b78fc0df1->leave($__internal_1e28781b0d8cbda53713dde1e0b8d4b92ed71c443fe3578d76b68c4b78fc0df1_prof);

        
        $__internal_32a56daf0060dc7ca8291cb2f73ec5f219456c016220d40a4029831cab4bf007->leave($__internal_32a56daf0060dc7ca8291cb2f73ec5f219456c016220d40a4029831cab4bf007_prof);

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

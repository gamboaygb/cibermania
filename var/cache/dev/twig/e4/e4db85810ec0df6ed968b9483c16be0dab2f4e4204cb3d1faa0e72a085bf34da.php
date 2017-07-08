<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_452d1c57628d03b895b7050f71ccde13a888a2a9191a418d1567dd2d87213798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452d1c57628d03b895b7050f71ccde13a888a2a9191a418d1567dd2d87213798->enter($__internal_452d1c57628d03b895b7050f71ccde13a888a2a9191a418d1567dd2d87213798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd91712c387ebb876fc188a547660cdccc5d920c8e0f9023d3a2db24722a7c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd91712c387ebb876fc188a547660cdccc5d920c8e0f9023d3a2db24722a7c76->enter($__internal_cd91712c387ebb876fc188a547660cdccc5d920c8e0f9023d3a2db24722a7c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452d1c57628d03b895b7050f71ccde13a888a2a9191a418d1567dd2d87213798->leave($__internal_452d1c57628d03b895b7050f71ccde13a888a2a9191a418d1567dd2d87213798_prof);

        
        $__internal_cd91712c387ebb876fc188a547660cdccc5d920c8e0f9023d3a2db24722a7c76->leave($__internal_cd91712c387ebb876fc188a547660cdccc5d920c8e0f9023d3a2db24722a7c76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7f0cf58666ede7752a83eb6f34903a4c322bfb72d6df6a3bfc56839edca7af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f0cf58666ede7752a83eb6f34903a4c322bfb72d6df6a3bfc56839edca7af3->enter($__internal_a7f0cf58666ede7752a83eb6f34903a4c322bfb72d6df6a3bfc56839edca7af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a0ca6507c6ed44d63a76f6c73eed2a0b1a87eb818bf8fc2edf756f0cd36e38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ca6507c6ed44d63a76f6c73eed2a0b1a87eb818bf8fc2edf756f0cd36e38f->enter($__internal_4a0ca6507c6ed44d63a76f6c73eed2a0b1a87eb818bf8fc2edf756f0cd36e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4a0ca6507c6ed44d63a76f6c73eed2a0b1a87eb818bf8fc2edf756f0cd36e38f->leave($__internal_4a0ca6507c6ed44d63a76f6c73eed2a0b1a87eb818bf8fc2edf756f0cd36e38f_prof);

        
        $__internal_a7f0cf58666ede7752a83eb6f34903a4c322bfb72d6df6a3bfc56839edca7af3->leave($__internal_a7f0cf58666ede7752a83eb6f34903a4c322bfb72d6df6a3bfc56839edca7af3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a484eef56e387ed8da8164e3b2b44443e6b98a40514c309d6f3f029ed839b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a484eef56e387ed8da8164e3b2b44443e6b98a40514c309d6f3f029ed839b54->enter($__internal_1a484eef56e387ed8da8164e3b2b44443e6b98a40514c309d6f3f029ed839b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ae4fbd233e27635187259371441289228b507b08c2e0dc006e53b0fbc121b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae4fbd233e27635187259371441289228b507b08c2e0dc006e53b0fbc121b3e->enter($__internal_6ae4fbd233e27635187259371441289228b507b08c2e0dc006e53b0fbc121b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ae4fbd233e27635187259371441289228b507b08c2e0dc006e53b0fbc121b3e->leave($__internal_6ae4fbd233e27635187259371441289228b507b08c2e0dc006e53b0fbc121b3e_prof);

        
        $__internal_1a484eef56e387ed8da8164e3b2b44443e6b98a40514c309d6f3f029ed839b54->leave($__internal_1a484eef56e387ed8da8164e3b2b44443e6b98a40514c309d6f3f029ed839b54_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a550ce869d508184111431486a00b6aa7e404cfc7fce486c94efff4ecdf67ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a550ce869d508184111431486a00b6aa7e404cfc7fce486c94efff4ecdf67ac->enter($__internal_9a550ce869d508184111431486a00b6aa7e404cfc7fce486c94efff4ecdf67ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_737a6f937de68d576b4f59f7a3afc957902b74e715e37e66c05875a2c9bc8212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737a6f937de68d576b4f59f7a3afc957902b74e715e37e66c05875a2c9bc8212->enter($__internal_737a6f937de68d576b4f59f7a3afc957902b74e715e37e66c05875a2c9bc8212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_737a6f937de68d576b4f59f7a3afc957902b74e715e37e66c05875a2c9bc8212->leave($__internal_737a6f937de68d576b4f59f7a3afc957902b74e715e37e66c05875a2c9bc8212_prof);

        
        $__internal_9a550ce869d508184111431486a00b6aa7e404cfc7fce486c94efff4ecdf67ac->leave($__internal_9a550ce869d508184111431486a00b6aa7e404cfc7fce486c94efff4ecdf67ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

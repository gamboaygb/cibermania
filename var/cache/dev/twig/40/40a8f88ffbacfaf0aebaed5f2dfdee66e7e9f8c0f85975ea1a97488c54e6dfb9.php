<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_4896b5eda35378d74152c8429acf08f0e6b2985407d2aa9d5b3ec8b47ec5c713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4896b5eda35378d74152c8429acf08f0e6b2985407d2aa9d5b3ec8b47ec5c713->enter($__internal_4896b5eda35378d74152c8429acf08f0e6b2985407d2aa9d5b3ec8b47ec5c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d617f400d075a2d8e2537ccb2c15251cec646c412eb6915ae2c1a40e93560f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d617f400d075a2d8e2537ccb2c15251cec646c412eb6915ae2c1a40e93560f37->enter($__internal_d617f400d075a2d8e2537ccb2c15251cec646c412eb6915ae2c1a40e93560f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4896b5eda35378d74152c8429acf08f0e6b2985407d2aa9d5b3ec8b47ec5c713->leave($__internal_4896b5eda35378d74152c8429acf08f0e6b2985407d2aa9d5b3ec8b47ec5c713_prof);

        
        $__internal_d617f400d075a2d8e2537ccb2c15251cec646c412eb6915ae2c1a40e93560f37->leave($__internal_d617f400d075a2d8e2537ccb2c15251cec646c412eb6915ae2c1a40e93560f37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_222d1146ae77025f2ea154c154b72dbb832229a90eb91bf0357adb4f1dee15b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222d1146ae77025f2ea154c154b72dbb832229a90eb91bf0357adb4f1dee15b3->enter($__internal_222d1146ae77025f2ea154c154b72dbb832229a90eb91bf0357adb4f1dee15b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90c2a48d1949fdac598c9c8c2fe867a12c2772598581020a3c62c892416c7c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c2a48d1949fdac598c9c8c2fe867a12c2772598581020a3c62c892416c7c38->enter($__internal_90c2a48d1949fdac598c9c8c2fe867a12c2772598581020a3c62c892416c7c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_90c2a48d1949fdac598c9c8c2fe867a12c2772598581020a3c62c892416c7c38->leave($__internal_90c2a48d1949fdac598c9c8c2fe867a12c2772598581020a3c62c892416c7c38_prof);

        
        $__internal_222d1146ae77025f2ea154c154b72dbb832229a90eb91bf0357adb4f1dee15b3->leave($__internal_222d1146ae77025f2ea154c154b72dbb832229a90eb91bf0357adb4f1dee15b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d7be56cc252dc0b927703a683cd7ba42f206c94c4bbdc2faebfeeeaf23a3cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7be56cc252dc0b927703a683cd7ba42f206c94c4bbdc2faebfeeeaf23a3cea->enter($__internal_6d7be56cc252dc0b927703a683cd7ba42f206c94c4bbdc2faebfeeeaf23a3cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52656cb6a935ff5f7e3fd72cff1e58c87e8680b87ef9fc939f65be78434771a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52656cb6a935ff5f7e3fd72cff1e58c87e8680b87ef9fc939f65be78434771a5->enter($__internal_52656cb6a935ff5f7e3fd72cff1e58c87e8680b87ef9fc939f65be78434771a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_52656cb6a935ff5f7e3fd72cff1e58c87e8680b87ef9fc939f65be78434771a5->leave($__internal_52656cb6a935ff5f7e3fd72cff1e58c87e8680b87ef9fc939f65be78434771a5_prof);

        
        $__internal_6d7be56cc252dc0b927703a683cd7ba42f206c94c4bbdc2faebfeeeaf23a3cea->leave($__internal_6d7be56cc252dc0b927703a683cd7ba42f206c94c4bbdc2faebfeeeaf23a3cea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcaf8f0eb169d806f793aff0ea5b558157e20a940ab47a92053d8c5cb72c1432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaf8f0eb169d806f793aff0ea5b558157e20a940ab47a92053d8c5cb72c1432->enter($__internal_bcaf8f0eb169d806f793aff0ea5b558157e20a940ab47a92053d8c5cb72c1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7965fe553d7e856fb5b37af181dbdfedfa8a3785a8973039835a83e75c2bded7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7965fe553d7e856fb5b37af181dbdfedfa8a3785a8973039835a83e75c2bded7->enter($__internal_7965fe553d7e856fb5b37af181dbdfedfa8a3785a8973039835a83e75c2bded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7965fe553d7e856fb5b37af181dbdfedfa8a3785a8973039835a83e75c2bded7->leave($__internal_7965fe553d7e856fb5b37af181dbdfedfa8a3785a8973039835a83e75c2bded7_prof);

        
        $__internal_bcaf8f0eb169d806f793aff0ea5b558157e20a940ab47a92053d8c5cb72c1432->leave($__internal_bcaf8f0eb169d806f793aff0ea5b558157e20a940ab47a92053d8c5cb72c1432_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

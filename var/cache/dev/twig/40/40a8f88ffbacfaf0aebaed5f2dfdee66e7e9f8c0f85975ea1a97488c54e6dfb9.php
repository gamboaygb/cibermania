<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_d11c09c11f38d60f5d74ff805420de8e81c4f454df870d4a0b0668479aafb6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11c09c11f38d60f5d74ff805420de8e81c4f454df870d4a0b0668479aafb6e9->enter($__internal_d11c09c11f38d60f5d74ff805420de8e81c4f454df870d4a0b0668479aafb6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_96d29a74c3369cc8eacdc127d36a562bc0f64d96a4ff2dd488e58794376ed6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d29a74c3369cc8eacdc127d36a562bc0f64d96a4ff2dd488e58794376ed6d6->enter($__internal_96d29a74c3369cc8eacdc127d36a562bc0f64d96a4ff2dd488e58794376ed6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11c09c11f38d60f5d74ff805420de8e81c4f454df870d4a0b0668479aafb6e9->leave($__internal_d11c09c11f38d60f5d74ff805420de8e81c4f454df870d4a0b0668479aafb6e9_prof);

        
        $__internal_96d29a74c3369cc8eacdc127d36a562bc0f64d96a4ff2dd488e58794376ed6d6->leave($__internal_96d29a74c3369cc8eacdc127d36a562bc0f64d96a4ff2dd488e58794376ed6d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ceb0a80582b503e73bdb162c26f6e354723dafa06789afce85c68a5b3fe54426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb0a80582b503e73bdb162c26f6e354723dafa06789afce85c68a5b3fe54426->enter($__internal_ceb0a80582b503e73bdb162c26f6e354723dafa06789afce85c68a5b3fe54426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_80125607d0f4215501992468737e20944b36720fb7229b59f4e949e1870bfab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80125607d0f4215501992468737e20944b36720fb7229b59f4e949e1870bfab8->enter($__internal_80125607d0f4215501992468737e20944b36720fb7229b59f4e949e1870bfab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_80125607d0f4215501992468737e20944b36720fb7229b59f4e949e1870bfab8->leave($__internal_80125607d0f4215501992468737e20944b36720fb7229b59f4e949e1870bfab8_prof);

        
        $__internal_ceb0a80582b503e73bdb162c26f6e354723dafa06789afce85c68a5b3fe54426->leave($__internal_ceb0a80582b503e73bdb162c26f6e354723dafa06789afce85c68a5b3fe54426_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab72b8e74e9866e58830c97445a1a5646c3a48691340e20a1836f8ced0a52793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab72b8e74e9866e58830c97445a1a5646c3a48691340e20a1836f8ced0a52793->enter($__internal_ab72b8e74e9866e58830c97445a1a5646c3a48691340e20a1836f8ced0a52793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57b02bfc74f773ddf380d3deaba95ea4fbb1e521a107fbf3963393f2aa472543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b02bfc74f773ddf380d3deaba95ea4fbb1e521a107fbf3963393f2aa472543->enter($__internal_57b02bfc74f773ddf380d3deaba95ea4fbb1e521a107fbf3963393f2aa472543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_57b02bfc74f773ddf380d3deaba95ea4fbb1e521a107fbf3963393f2aa472543->leave($__internal_57b02bfc74f773ddf380d3deaba95ea4fbb1e521a107fbf3963393f2aa472543_prof);

        
        $__internal_ab72b8e74e9866e58830c97445a1a5646c3a48691340e20a1836f8ced0a52793->leave($__internal_ab72b8e74e9866e58830c97445a1a5646c3a48691340e20a1836f8ced0a52793_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00a216711b723263b336bf2446ba547f9fa8c8891cd4076c1f2af6b354d1cdf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a216711b723263b336bf2446ba547f9fa8c8891cd4076c1f2af6b354d1cdf5->enter($__internal_00a216711b723263b336bf2446ba547f9fa8c8891cd4076c1f2af6b354d1cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b3441336ff35d50177f6cb69127f6c9abcb48c2d159e93476029175c3fe0818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3441336ff35d50177f6cb69127f6c9abcb48c2d159e93476029175c3fe0818->enter($__internal_4b3441336ff35d50177f6cb69127f6c9abcb48c2d159e93476029175c3fe0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b3441336ff35d50177f6cb69127f6c9abcb48c2d159e93476029175c3fe0818->leave($__internal_4b3441336ff35d50177f6cb69127f6c9abcb48c2d159e93476029175c3fe0818_prof);

        
        $__internal_00a216711b723263b336bf2446ba547f9fa8c8891cd4076c1f2af6b354d1cdf5->leave($__internal_00a216711b723263b336bf2446ba547f9fa8c8891cd4076c1f2af6b354d1cdf5_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

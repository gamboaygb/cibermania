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
        $__internal_7e566f00eade072fd221565412e410d9fad7d398825dd639f91540f6fabaa090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e566f00eade072fd221565412e410d9fad7d398825dd639f91540f6fabaa090->enter($__internal_7e566f00eade072fd221565412e410d9fad7d398825dd639f91540f6fabaa090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a14904840bb8ec9b8570ae14bf8682a402cb01e7845fc82a686d8e9f3d058961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14904840bb8ec9b8570ae14bf8682a402cb01e7845fc82a686d8e9f3d058961->enter($__internal_a14904840bb8ec9b8570ae14bf8682a402cb01e7845fc82a686d8e9f3d058961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e566f00eade072fd221565412e410d9fad7d398825dd639f91540f6fabaa090->leave($__internal_7e566f00eade072fd221565412e410d9fad7d398825dd639f91540f6fabaa090_prof);

        
        $__internal_a14904840bb8ec9b8570ae14bf8682a402cb01e7845fc82a686d8e9f3d058961->leave($__internal_a14904840bb8ec9b8570ae14bf8682a402cb01e7845fc82a686d8e9f3d058961_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fdff18e97383d995eeeae3351f6fada01da09697823dbfe260e9cd7d5d45b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdff18e97383d995eeeae3351f6fada01da09697823dbfe260e9cd7d5d45b25->enter($__internal_3fdff18e97383d995eeeae3351f6fada01da09697823dbfe260e9cd7d5d45b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef5664b89b3a52e1ff700f87373341934028b30273b4e1709e153a6f09dc7571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5664b89b3a52e1ff700f87373341934028b30273b4e1709e153a6f09dc7571->enter($__internal_ef5664b89b3a52e1ff700f87373341934028b30273b4e1709e153a6f09dc7571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ef5664b89b3a52e1ff700f87373341934028b30273b4e1709e153a6f09dc7571->leave($__internal_ef5664b89b3a52e1ff700f87373341934028b30273b4e1709e153a6f09dc7571_prof);

        
        $__internal_3fdff18e97383d995eeeae3351f6fada01da09697823dbfe260e9cd7d5d45b25->leave($__internal_3fdff18e97383d995eeeae3351f6fada01da09697823dbfe260e9cd7d5d45b25_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_989bf31961bd11e88970aa67424e9e3e910b425c5acf5272817b31968497c75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989bf31961bd11e88970aa67424e9e3e910b425c5acf5272817b31968497c75d->enter($__internal_989bf31961bd11e88970aa67424e9e3e910b425c5acf5272817b31968497c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_022ad6d5e9fdd9f67c161b8823284ac171df9ca38e03c5eae2c646ae700fcb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022ad6d5e9fdd9f67c161b8823284ac171df9ca38e03c5eae2c646ae700fcb92->enter($__internal_022ad6d5e9fdd9f67c161b8823284ac171df9ca38e03c5eae2c646ae700fcb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_022ad6d5e9fdd9f67c161b8823284ac171df9ca38e03c5eae2c646ae700fcb92->leave($__internal_022ad6d5e9fdd9f67c161b8823284ac171df9ca38e03c5eae2c646ae700fcb92_prof);

        
        $__internal_989bf31961bd11e88970aa67424e9e3e910b425c5acf5272817b31968497c75d->leave($__internal_989bf31961bd11e88970aa67424e9e3e910b425c5acf5272817b31968497c75d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d6cb415e558628c1dfb9b95b1f71c7fa260dc8af70f65c1590a6ec167cfa26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6cb415e558628c1dfb9b95b1f71c7fa260dc8af70f65c1590a6ec167cfa26a->enter($__internal_3d6cb415e558628c1dfb9b95b1f71c7fa260dc8af70f65c1590a6ec167cfa26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b0da47f3904503b0bd7b59e09e01df74bf0f4d123fc3abbfc5e8bd62d034e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0da47f3904503b0bd7b59e09e01df74bf0f4d123fc3abbfc5e8bd62d034e0e->enter($__internal_9b0da47f3904503b0bd7b59e09e01df74bf0f4d123fc3abbfc5e8bd62d034e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9b0da47f3904503b0bd7b59e09e01df74bf0f4d123fc3abbfc5e8bd62d034e0e->leave($__internal_9b0da47f3904503b0bd7b59e09e01df74bf0f4d123fc3abbfc5e8bd62d034e0e_prof);

        
        $__internal_3d6cb415e558628c1dfb9b95b1f71c7fa260dc8af70f65c1590a6ec167cfa26a->leave($__internal_3d6cb415e558628c1dfb9b95b1f71c7fa260dc8af70f65c1590a6ec167cfa26a_prof);

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

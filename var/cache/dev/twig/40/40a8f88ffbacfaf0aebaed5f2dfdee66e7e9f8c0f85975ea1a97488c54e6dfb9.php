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
        $__internal_a65fdd070fbe9cce33c4a806c7c2db8f56563f5c5976f012d0c9430bd3bc24b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65fdd070fbe9cce33c4a806c7c2db8f56563f5c5976f012d0c9430bd3bc24b8->enter($__internal_a65fdd070fbe9cce33c4a806c7c2db8f56563f5c5976f012d0c9430bd3bc24b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0254e3a177ce0d5977922f44e262857c99b7faa03df02e642536899e066ed6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0254e3a177ce0d5977922f44e262857c99b7faa03df02e642536899e066ed6fd->enter($__internal_0254e3a177ce0d5977922f44e262857c99b7faa03df02e642536899e066ed6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a65fdd070fbe9cce33c4a806c7c2db8f56563f5c5976f012d0c9430bd3bc24b8->leave($__internal_a65fdd070fbe9cce33c4a806c7c2db8f56563f5c5976f012d0c9430bd3bc24b8_prof);

        
        $__internal_0254e3a177ce0d5977922f44e262857c99b7faa03df02e642536899e066ed6fd->leave($__internal_0254e3a177ce0d5977922f44e262857c99b7faa03df02e642536899e066ed6fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16bff073d5df96f70753a593ea2145b295c74ceb92df5493affa0b241b29112f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bff073d5df96f70753a593ea2145b295c74ceb92df5493affa0b241b29112f->enter($__internal_16bff073d5df96f70753a593ea2145b295c74ceb92df5493affa0b241b29112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a93d78ed83f2cd7950e6a5e1f7e303245bf83d9d100b1f74e822dd95264f9898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93d78ed83f2cd7950e6a5e1f7e303245bf83d9d100b1f74e822dd95264f9898->enter($__internal_a93d78ed83f2cd7950e6a5e1f7e303245bf83d9d100b1f74e822dd95264f9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a93d78ed83f2cd7950e6a5e1f7e303245bf83d9d100b1f74e822dd95264f9898->leave($__internal_a93d78ed83f2cd7950e6a5e1f7e303245bf83d9d100b1f74e822dd95264f9898_prof);

        
        $__internal_16bff073d5df96f70753a593ea2145b295c74ceb92df5493affa0b241b29112f->leave($__internal_16bff073d5df96f70753a593ea2145b295c74ceb92df5493affa0b241b29112f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9d41a3c7cd83900d7ba16ab76b60134423a6745a0dadd45b010e778a1ef7dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d41a3c7cd83900d7ba16ab76b60134423a6745a0dadd45b010e778a1ef7dee->enter($__internal_d9d41a3c7cd83900d7ba16ab76b60134423a6745a0dadd45b010e778a1ef7dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_83bd69acb5b91e822c187a92fb03e02eebc26341247d3babe294369c4141daa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bd69acb5b91e822c187a92fb03e02eebc26341247d3babe294369c4141daa5->enter($__internal_83bd69acb5b91e822c187a92fb03e02eebc26341247d3babe294369c4141daa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_83bd69acb5b91e822c187a92fb03e02eebc26341247d3babe294369c4141daa5->leave($__internal_83bd69acb5b91e822c187a92fb03e02eebc26341247d3babe294369c4141daa5_prof);

        
        $__internal_d9d41a3c7cd83900d7ba16ab76b60134423a6745a0dadd45b010e778a1ef7dee->leave($__internal_d9d41a3c7cd83900d7ba16ab76b60134423a6745a0dadd45b010e778a1ef7dee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c2ef92622deac340881ab647673b90ce1bd57b563a8c7eeb22c766f2199afde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2ef92622deac340881ab647673b90ce1bd57b563a8c7eeb22c766f2199afde->enter($__internal_9c2ef92622deac340881ab647673b90ce1bd57b563a8c7eeb22c766f2199afde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5663f4773ab84c4ae5d7ec4a2ca4d4dba5562d2e1953a11e4b02e1cc6ace730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5663f4773ab84c4ae5d7ec4a2ca4d4dba5562d2e1953a11e4b02e1cc6ace730->enter($__internal_e5663f4773ab84c4ae5d7ec4a2ca4d4dba5562d2e1953a11e4b02e1cc6ace730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e5663f4773ab84c4ae5d7ec4a2ca4d4dba5562d2e1953a11e4b02e1cc6ace730->leave($__internal_e5663f4773ab84c4ae5d7ec4a2ca4d4dba5562d2e1953a11e4b02e1cc6ace730_prof);

        
        $__internal_9c2ef92622deac340881ab647673b90ce1bd57b563a8c7eeb22c766f2199afde->leave($__internal_9c2ef92622deac340881ab647673b90ce1bd57b563a8c7eeb22c766f2199afde_prof);

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

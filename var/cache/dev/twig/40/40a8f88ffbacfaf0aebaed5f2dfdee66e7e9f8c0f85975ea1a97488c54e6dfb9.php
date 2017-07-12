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
        $__internal_2bf89300d0e2eab073ddceb8151a40dc2e48810604b2486f530494317f6659ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf89300d0e2eab073ddceb8151a40dc2e48810604b2486f530494317f6659ed->enter($__internal_2bf89300d0e2eab073ddceb8151a40dc2e48810604b2486f530494317f6659ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_db10e96914e7b9b6a0b4b5d6095611f5b9cdc6624ca4b9f27a56e767f58ba73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db10e96914e7b9b6a0b4b5d6095611f5b9cdc6624ca4b9f27a56e767f58ba73d->enter($__internal_db10e96914e7b9b6a0b4b5d6095611f5b9cdc6624ca4b9f27a56e767f58ba73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf89300d0e2eab073ddceb8151a40dc2e48810604b2486f530494317f6659ed->leave($__internal_2bf89300d0e2eab073ddceb8151a40dc2e48810604b2486f530494317f6659ed_prof);

        
        $__internal_db10e96914e7b9b6a0b4b5d6095611f5b9cdc6624ca4b9f27a56e767f58ba73d->leave($__internal_db10e96914e7b9b6a0b4b5d6095611f5b9cdc6624ca4b9f27a56e767f58ba73d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96268bbba7b84b299f2b10e40260b01a8cbb8706b8e07351dcad7fb9950c54eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96268bbba7b84b299f2b10e40260b01a8cbb8706b8e07351dcad7fb9950c54eb->enter($__internal_96268bbba7b84b299f2b10e40260b01a8cbb8706b8e07351dcad7fb9950c54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42dc9e20da11bab51f248d973739e8f0aecfe9ce0df7939e5d75ddd7bbf06001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dc9e20da11bab51f248d973739e8f0aecfe9ce0df7939e5d75ddd7bbf06001->enter($__internal_42dc9e20da11bab51f248d973739e8f0aecfe9ce0df7939e5d75ddd7bbf06001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_42dc9e20da11bab51f248d973739e8f0aecfe9ce0df7939e5d75ddd7bbf06001->leave($__internal_42dc9e20da11bab51f248d973739e8f0aecfe9ce0df7939e5d75ddd7bbf06001_prof);

        
        $__internal_96268bbba7b84b299f2b10e40260b01a8cbb8706b8e07351dcad7fb9950c54eb->leave($__internal_96268bbba7b84b299f2b10e40260b01a8cbb8706b8e07351dcad7fb9950c54eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6aed9c3f0fb28b7453eb667841f00694be68a03e4863dbbd2a5efdf5ddeb55e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aed9c3f0fb28b7453eb667841f00694be68a03e4863dbbd2a5efdf5ddeb55e4->enter($__internal_6aed9c3f0fb28b7453eb667841f00694be68a03e4863dbbd2a5efdf5ddeb55e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ee3ead278a3a328a5de3cb2f640fa7e32611af52d4b706d1ec0b8947c7e93a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee3ead278a3a328a5de3cb2f640fa7e32611af52d4b706d1ec0b8947c7e93a0->enter($__internal_8ee3ead278a3a328a5de3cb2f640fa7e32611af52d4b706d1ec0b8947c7e93a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8ee3ead278a3a328a5de3cb2f640fa7e32611af52d4b706d1ec0b8947c7e93a0->leave($__internal_8ee3ead278a3a328a5de3cb2f640fa7e32611af52d4b706d1ec0b8947c7e93a0_prof);

        
        $__internal_6aed9c3f0fb28b7453eb667841f00694be68a03e4863dbbd2a5efdf5ddeb55e4->leave($__internal_6aed9c3f0fb28b7453eb667841f00694be68a03e4863dbbd2a5efdf5ddeb55e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4fed179b07c0b5fdd70dc4bd04cf6b9b7f341398e0c8e7f0ba327f5e548a742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fed179b07c0b5fdd70dc4bd04cf6b9b7f341398e0c8e7f0ba327f5e548a742->enter($__internal_d4fed179b07c0b5fdd70dc4bd04cf6b9b7f341398e0c8e7f0ba327f5e548a742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ccb7133157a59e6ac9c6eba041a3fc797277092d0885154c6a0fbbadd09f9b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb7133157a59e6ac9c6eba041a3fc797277092d0885154c6a0fbbadd09f9b52->enter($__internal_ccb7133157a59e6ac9c6eba041a3fc797277092d0885154c6a0fbbadd09f9b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ccb7133157a59e6ac9c6eba041a3fc797277092d0885154c6a0fbbadd09f9b52->leave($__internal_ccb7133157a59e6ac9c6eba041a3fc797277092d0885154c6a0fbbadd09f9b52_prof);

        
        $__internal_d4fed179b07c0b5fdd70dc4bd04cf6b9b7f341398e0c8e7f0ba327f5e548a742->leave($__internal_d4fed179b07c0b5fdd70dc4bd04cf6b9b7f341398e0c8e7f0ba327f5e548a742_prof);

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

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
        $__internal_aa05a47f69ad777729f0b72dee2938b6eb21bcbc86942b1786865aa0e8a185d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa05a47f69ad777729f0b72dee2938b6eb21bcbc86942b1786865aa0e8a185d0->enter($__internal_aa05a47f69ad777729f0b72dee2938b6eb21bcbc86942b1786865aa0e8a185d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0af1b2a938ab968c7b419f153b758a7eb94feed03c52fea879bcc23e4b1fba31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af1b2a938ab968c7b419f153b758a7eb94feed03c52fea879bcc23e4b1fba31->enter($__internal_0af1b2a938ab968c7b419f153b758a7eb94feed03c52fea879bcc23e4b1fba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa05a47f69ad777729f0b72dee2938b6eb21bcbc86942b1786865aa0e8a185d0->leave($__internal_aa05a47f69ad777729f0b72dee2938b6eb21bcbc86942b1786865aa0e8a185d0_prof);

        
        $__internal_0af1b2a938ab968c7b419f153b758a7eb94feed03c52fea879bcc23e4b1fba31->leave($__internal_0af1b2a938ab968c7b419f153b758a7eb94feed03c52fea879bcc23e4b1fba31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a546950c9d63cbdfbacfc318fc6364ea58446dbcff0b7c7a029662c04d5f6524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a546950c9d63cbdfbacfc318fc6364ea58446dbcff0b7c7a029662c04d5f6524->enter($__internal_a546950c9d63cbdfbacfc318fc6364ea58446dbcff0b7c7a029662c04d5f6524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fceb6f0171eae0093af667a682e829a904638ff43d631681676623e477938b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fceb6f0171eae0093af667a682e829a904638ff43d631681676623e477938b0->enter($__internal_7fceb6f0171eae0093af667a682e829a904638ff43d631681676623e477938b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7fceb6f0171eae0093af667a682e829a904638ff43d631681676623e477938b0->leave($__internal_7fceb6f0171eae0093af667a682e829a904638ff43d631681676623e477938b0_prof);

        
        $__internal_a546950c9d63cbdfbacfc318fc6364ea58446dbcff0b7c7a029662c04d5f6524->leave($__internal_a546950c9d63cbdfbacfc318fc6364ea58446dbcff0b7c7a029662c04d5f6524_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96acbeb828c50082dcd2724310060ec92f6fe9991b529680e62fba4a68b651ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96acbeb828c50082dcd2724310060ec92f6fe9991b529680e62fba4a68b651ff->enter($__internal_96acbeb828c50082dcd2724310060ec92f6fe9991b529680e62fba4a68b651ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_120e5233c3fc14dfcb0ea177ca83626e1e9afef6ae153d3b9349d4f71c9a0efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120e5233c3fc14dfcb0ea177ca83626e1e9afef6ae153d3b9349d4f71c9a0efe->enter($__internal_120e5233c3fc14dfcb0ea177ca83626e1e9afef6ae153d3b9349d4f71c9a0efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_120e5233c3fc14dfcb0ea177ca83626e1e9afef6ae153d3b9349d4f71c9a0efe->leave($__internal_120e5233c3fc14dfcb0ea177ca83626e1e9afef6ae153d3b9349d4f71c9a0efe_prof);

        
        $__internal_96acbeb828c50082dcd2724310060ec92f6fe9991b529680e62fba4a68b651ff->leave($__internal_96acbeb828c50082dcd2724310060ec92f6fe9991b529680e62fba4a68b651ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38875b6f77b8d2ecafc69f8e5ac151f71b1c1ab8581140dd3884fd20e899bb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38875b6f77b8d2ecafc69f8e5ac151f71b1c1ab8581140dd3884fd20e899bb0f->enter($__internal_38875b6f77b8d2ecafc69f8e5ac151f71b1c1ab8581140dd3884fd20e899bb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b8bcdea0a8c96c9a8836f29d4adca913f0ba574441e8b2351c15f9978970ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8bcdea0a8c96c9a8836f29d4adca913f0ba574441e8b2351c15f9978970ad0->enter($__internal_8b8bcdea0a8c96c9a8836f29d4adca913f0ba574441e8b2351c15f9978970ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8b8bcdea0a8c96c9a8836f29d4adca913f0ba574441e8b2351c15f9978970ad0->leave($__internal_8b8bcdea0a8c96c9a8836f29d4adca913f0ba574441e8b2351c15f9978970ad0_prof);

        
        $__internal_38875b6f77b8d2ecafc69f8e5ac151f71b1c1ab8581140dd3884fd20e899bb0f->leave($__internal_38875b6f77b8d2ecafc69f8e5ac151f71b1c1ab8581140dd3884fd20e899bb0f_prof);

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

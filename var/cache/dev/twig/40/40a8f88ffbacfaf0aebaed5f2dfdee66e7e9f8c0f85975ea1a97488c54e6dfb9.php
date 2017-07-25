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
        $__internal_f37e26e131304aa53a5b02efddc5e818b5e2af1232eddaa9c8d5c05f3f26e976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37e26e131304aa53a5b02efddc5e818b5e2af1232eddaa9c8d5c05f3f26e976->enter($__internal_f37e26e131304aa53a5b02efddc5e818b5e2af1232eddaa9c8d5c05f3f26e976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d779b72700120eba91f6d2d2d462c2167e8cbbc417f531e25cc066ce9211ef5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d779b72700120eba91f6d2d2d462c2167e8cbbc417f531e25cc066ce9211ef5f->enter($__internal_d779b72700120eba91f6d2d2d462c2167e8cbbc417f531e25cc066ce9211ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f37e26e131304aa53a5b02efddc5e818b5e2af1232eddaa9c8d5c05f3f26e976->leave($__internal_f37e26e131304aa53a5b02efddc5e818b5e2af1232eddaa9c8d5c05f3f26e976_prof);

        
        $__internal_d779b72700120eba91f6d2d2d462c2167e8cbbc417f531e25cc066ce9211ef5f->leave($__internal_d779b72700120eba91f6d2d2d462c2167e8cbbc417f531e25cc066ce9211ef5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2764ec25fdc6d0a460c8d99b9881a273919bff1f673bbd77ef020e6f6597018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2764ec25fdc6d0a460c8d99b9881a273919bff1f673bbd77ef020e6f6597018->enter($__internal_f2764ec25fdc6d0a460c8d99b9881a273919bff1f673bbd77ef020e6f6597018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d3347de8eeb38569bcaccda2f5e653dd0ec240ba3b62ccef97fb94c4a9e3912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3347de8eeb38569bcaccda2f5e653dd0ec240ba3b62ccef97fb94c4a9e3912->enter($__internal_8d3347de8eeb38569bcaccda2f5e653dd0ec240ba3b62ccef97fb94c4a9e3912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d3347de8eeb38569bcaccda2f5e653dd0ec240ba3b62ccef97fb94c4a9e3912->leave($__internal_8d3347de8eeb38569bcaccda2f5e653dd0ec240ba3b62ccef97fb94c4a9e3912_prof);

        
        $__internal_f2764ec25fdc6d0a460c8d99b9881a273919bff1f673bbd77ef020e6f6597018->leave($__internal_f2764ec25fdc6d0a460c8d99b9881a273919bff1f673bbd77ef020e6f6597018_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf807aece0c0dfbf795de3884f222f49f93a09bc327f20a9473c2ca9099233e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf807aece0c0dfbf795de3884f222f49f93a09bc327f20a9473c2ca9099233e1->enter($__internal_bf807aece0c0dfbf795de3884f222f49f93a09bc327f20a9473c2ca9099233e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef51321d8d144a41141f379277fd7696fdb417e254bdc6d8b444d89dd4e97e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef51321d8d144a41141f379277fd7696fdb417e254bdc6d8b444d89dd4e97e56->enter($__internal_ef51321d8d144a41141f379277fd7696fdb417e254bdc6d8b444d89dd4e97e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef51321d8d144a41141f379277fd7696fdb417e254bdc6d8b444d89dd4e97e56->leave($__internal_ef51321d8d144a41141f379277fd7696fdb417e254bdc6d8b444d89dd4e97e56_prof);

        
        $__internal_bf807aece0c0dfbf795de3884f222f49f93a09bc327f20a9473c2ca9099233e1->leave($__internal_bf807aece0c0dfbf795de3884f222f49f93a09bc327f20a9473c2ca9099233e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9f2c6a9b807e55d77676117366355fda6dca02b0211e8bb0146ac912315fb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f2c6a9b807e55d77676117366355fda6dca02b0211e8bb0146ac912315fb70->enter($__internal_f9f2c6a9b807e55d77676117366355fda6dca02b0211e8bb0146ac912315fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d516029a30c715710fa1e5dfabaca4428d381afe1bbe7baa33f410b8e6221500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d516029a30c715710fa1e5dfabaca4428d381afe1bbe7baa33f410b8e6221500->enter($__internal_d516029a30c715710fa1e5dfabaca4428d381afe1bbe7baa33f410b8e6221500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d516029a30c715710fa1e5dfabaca4428d381afe1bbe7baa33f410b8e6221500->leave($__internal_d516029a30c715710fa1e5dfabaca4428d381afe1bbe7baa33f410b8e6221500_prof);

        
        $__internal_f9f2c6a9b807e55d77676117366355fda6dca02b0211e8bb0146ac912315fb70->leave($__internal_f9f2c6a9b807e55d77676117366355fda6dca02b0211e8bb0146ac912315fb70_prof);

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

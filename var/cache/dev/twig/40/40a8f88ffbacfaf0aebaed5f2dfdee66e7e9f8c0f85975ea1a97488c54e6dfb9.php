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
        $__internal_f6421ef7d53ef1d73352723a87d31b93109b2ad680dd15054e14769c053fef78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6421ef7d53ef1d73352723a87d31b93109b2ad680dd15054e14769c053fef78->enter($__internal_f6421ef7d53ef1d73352723a87d31b93109b2ad680dd15054e14769c053fef78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_59039b28f518b7cd9cc8294d80638f5145a1f213e56507ed21ad192f7f515e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59039b28f518b7cd9cc8294d80638f5145a1f213e56507ed21ad192f7f515e38->enter($__internal_59039b28f518b7cd9cc8294d80638f5145a1f213e56507ed21ad192f7f515e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6421ef7d53ef1d73352723a87d31b93109b2ad680dd15054e14769c053fef78->leave($__internal_f6421ef7d53ef1d73352723a87d31b93109b2ad680dd15054e14769c053fef78_prof);

        
        $__internal_59039b28f518b7cd9cc8294d80638f5145a1f213e56507ed21ad192f7f515e38->leave($__internal_59039b28f518b7cd9cc8294d80638f5145a1f213e56507ed21ad192f7f515e38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08f41edb09d0dee765a53e8f73405ac55c872b6a01243d1484fd175387a55dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f41edb09d0dee765a53e8f73405ac55c872b6a01243d1484fd175387a55dfc->enter($__internal_08f41edb09d0dee765a53e8f73405ac55c872b6a01243d1484fd175387a55dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7ad15eb32520e55e56279b2ec42d7c170bbf6de7d0d3717f8a9bfd9f3563dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ad15eb32520e55e56279b2ec42d7c170bbf6de7d0d3717f8a9bfd9f3563dc3->enter($__internal_e7ad15eb32520e55e56279b2ec42d7c170bbf6de7d0d3717f8a9bfd9f3563dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e7ad15eb32520e55e56279b2ec42d7c170bbf6de7d0d3717f8a9bfd9f3563dc3->leave($__internal_e7ad15eb32520e55e56279b2ec42d7c170bbf6de7d0d3717f8a9bfd9f3563dc3_prof);

        
        $__internal_08f41edb09d0dee765a53e8f73405ac55c872b6a01243d1484fd175387a55dfc->leave($__internal_08f41edb09d0dee765a53e8f73405ac55c872b6a01243d1484fd175387a55dfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77757d975c465e297f00946828f2894af2428973f248300bd498b1b40c90be76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77757d975c465e297f00946828f2894af2428973f248300bd498b1b40c90be76->enter($__internal_77757d975c465e297f00946828f2894af2428973f248300bd498b1b40c90be76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90e7ddea7865e66709a7748d1cfa417c43259c08feeec7c659390c7b65f1296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e7ddea7865e66709a7748d1cfa417c43259c08feeec7c659390c7b65f1296e->enter($__internal_90e7ddea7865e66709a7748d1cfa417c43259c08feeec7c659390c7b65f1296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90e7ddea7865e66709a7748d1cfa417c43259c08feeec7c659390c7b65f1296e->leave($__internal_90e7ddea7865e66709a7748d1cfa417c43259c08feeec7c659390c7b65f1296e_prof);

        
        $__internal_77757d975c465e297f00946828f2894af2428973f248300bd498b1b40c90be76->leave($__internal_77757d975c465e297f00946828f2894af2428973f248300bd498b1b40c90be76_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c439f8114d5c7f019a6e48b1299a504f0e3135eb12f667a454acf81bec53d70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c439f8114d5c7f019a6e48b1299a504f0e3135eb12f667a454acf81bec53d70d->enter($__internal_c439f8114d5c7f019a6e48b1299a504f0e3135eb12f667a454acf81bec53d70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca3798c53d796d14c2fde66483091a9e73cfaf141bc412b7b68da3ffedf742ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3798c53d796d14c2fde66483091a9e73cfaf141bc412b7b68da3ffedf742ae->enter($__internal_ca3798c53d796d14c2fde66483091a9e73cfaf141bc412b7b68da3ffedf742ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ca3798c53d796d14c2fde66483091a9e73cfaf141bc412b7b68da3ffedf742ae->leave($__internal_ca3798c53d796d14c2fde66483091a9e73cfaf141bc412b7b68da3ffedf742ae_prof);

        
        $__internal_c439f8114d5c7f019a6e48b1299a504f0e3135eb12f667a454acf81bec53d70d->leave($__internal_c439f8114d5c7f019a6e48b1299a504f0e3135eb12f667a454acf81bec53d70d_prof);

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

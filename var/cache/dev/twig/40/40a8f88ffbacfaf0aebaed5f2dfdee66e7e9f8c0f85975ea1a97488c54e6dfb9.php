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
        $__internal_2c68c7f8231c53723098d91707af3066a1beca2578089e391a71d7f5fc4b9fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c68c7f8231c53723098d91707af3066a1beca2578089e391a71d7f5fc4b9fb1->enter($__internal_2c68c7f8231c53723098d91707af3066a1beca2578089e391a71d7f5fc4b9fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77f66ce9ac5b558b4ce85b71df03071ff390e480142c08deedaebe765c5dd5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f66ce9ac5b558b4ce85b71df03071ff390e480142c08deedaebe765c5dd5c9->enter($__internal_77f66ce9ac5b558b4ce85b71df03071ff390e480142c08deedaebe765c5dd5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c68c7f8231c53723098d91707af3066a1beca2578089e391a71d7f5fc4b9fb1->leave($__internal_2c68c7f8231c53723098d91707af3066a1beca2578089e391a71d7f5fc4b9fb1_prof);

        
        $__internal_77f66ce9ac5b558b4ce85b71df03071ff390e480142c08deedaebe765c5dd5c9->leave($__internal_77f66ce9ac5b558b4ce85b71df03071ff390e480142c08deedaebe765c5dd5c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5304e02eaad747ee88dca44b98fd595326b0b879072e3877edc52aedba5dc64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5304e02eaad747ee88dca44b98fd595326b0b879072e3877edc52aedba5dc64a->enter($__internal_5304e02eaad747ee88dca44b98fd595326b0b879072e3877edc52aedba5dc64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bef536e42548190a66146aee94a15545007c849029df6257896981ea7f93c1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef536e42548190a66146aee94a15545007c849029df6257896981ea7f93c1eb->enter($__internal_bef536e42548190a66146aee94a15545007c849029df6257896981ea7f93c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bef536e42548190a66146aee94a15545007c849029df6257896981ea7f93c1eb->leave($__internal_bef536e42548190a66146aee94a15545007c849029df6257896981ea7f93c1eb_prof);

        
        $__internal_5304e02eaad747ee88dca44b98fd595326b0b879072e3877edc52aedba5dc64a->leave($__internal_5304e02eaad747ee88dca44b98fd595326b0b879072e3877edc52aedba5dc64a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fb8317fb73592f0b67f6f66c69044a523ba5abf78a4c10f328a33fb97ac5f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb8317fb73592f0b67f6f66c69044a523ba5abf78a4c10f328a33fb97ac5f9b->enter($__internal_3fb8317fb73592f0b67f6f66c69044a523ba5abf78a4c10f328a33fb97ac5f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_192d966b3a9f45a05c3e55a07fc131c11bb8e1c53025d99f02f6456fe2815ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192d966b3a9f45a05c3e55a07fc131c11bb8e1c53025d99f02f6456fe2815ab8->enter($__internal_192d966b3a9f45a05c3e55a07fc131c11bb8e1c53025d99f02f6456fe2815ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_192d966b3a9f45a05c3e55a07fc131c11bb8e1c53025d99f02f6456fe2815ab8->leave($__internal_192d966b3a9f45a05c3e55a07fc131c11bb8e1c53025d99f02f6456fe2815ab8_prof);

        
        $__internal_3fb8317fb73592f0b67f6f66c69044a523ba5abf78a4c10f328a33fb97ac5f9b->leave($__internal_3fb8317fb73592f0b67f6f66c69044a523ba5abf78a4c10f328a33fb97ac5f9b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_014d846052b0445afee07fb394449fcf83ddaad20e710d95c852272c405e559c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014d846052b0445afee07fb394449fcf83ddaad20e710d95c852272c405e559c->enter($__internal_014d846052b0445afee07fb394449fcf83ddaad20e710d95c852272c405e559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8157aa843c417b7d649549865ec10fa0942f11d61a59fd5022e38346de538d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8157aa843c417b7d649549865ec10fa0942f11d61a59fd5022e38346de538d1->enter($__internal_f8157aa843c417b7d649549865ec10fa0942f11d61a59fd5022e38346de538d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f8157aa843c417b7d649549865ec10fa0942f11d61a59fd5022e38346de538d1->leave($__internal_f8157aa843c417b7d649549865ec10fa0942f11d61a59fd5022e38346de538d1_prof);

        
        $__internal_014d846052b0445afee07fb394449fcf83ddaad20e710d95c852272c405e559c->leave($__internal_014d846052b0445afee07fb394449fcf83ddaad20e710d95c852272c405e559c_prof);

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

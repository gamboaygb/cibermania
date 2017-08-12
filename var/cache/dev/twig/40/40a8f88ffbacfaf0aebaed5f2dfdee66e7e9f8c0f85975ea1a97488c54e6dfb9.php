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
        $__internal_77206cae645ff459a28865c56e60c8951cf13fe75b9c0deffda506cea381057c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77206cae645ff459a28865c56e60c8951cf13fe75b9c0deffda506cea381057c->enter($__internal_77206cae645ff459a28865c56e60c8951cf13fe75b9c0deffda506cea381057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_090a09768d20ebcd846a40a4d733eca40995340d2665a6a7f516dd23fdec3c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090a09768d20ebcd846a40a4d733eca40995340d2665a6a7f516dd23fdec3c91->enter($__internal_090a09768d20ebcd846a40a4d733eca40995340d2665a6a7f516dd23fdec3c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77206cae645ff459a28865c56e60c8951cf13fe75b9c0deffda506cea381057c->leave($__internal_77206cae645ff459a28865c56e60c8951cf13fe75b9c0deffda506cea381057c_prof);

        
        $__internal_090a09768d20ebcd846a40a4d733eca40995340d2665a6a7f516dd23fdec3c91->leave($__internal_090a09768d20ebcd846a40a4d733eca40995340d2665a6a7f516dd23fdec3c91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75656f807982f953f7626c11f0f091d1127ea351c7ba5e6f73d5eaabbefc6f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75656f807982f953f7626c11f0f091d1127ea351c7ba5e6f73d5eaabbefc6f9e->enter($__internal_75656f807982f953f7626c11f0f091d1127ea351c7ba5e6f73d5eaabbefc6f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91a565d6e65bfe238bf818bdb931e81065c1d0e519e0139cf078c144c892b282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a565d6e65bfe238bf818bdb931e81065c1d0e519e0139cf078c144c892b282->enter($__internal_91a565d6e65bfe238bf818bdb931e81065c1d0e519e0139cf078c144c892b282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91a565d6e65bfe238bf818bdb931e81065c1d0e519e0139cf078c144c892b282->leave($__internal_91a565d6e65bfe238bf818bdb931e81065c1d0e519e0139cf078c144c892b282_prof);

        
        $__internal_75656f807982f953f7626c11f0f091d1127ea351c7ba5e6f73d5eaabbefc6f9e->leave($__internal_75656f807982f953f7626c11f0f091d1127ea351c7ba5e6f73d5eaabbefc6f9e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c41337c8ec800e2505afd97ca983ec380d99ae229ec86b3552d77e78e3edf75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41337c8ec800e2505afd97ca983ec380d99ae229ec86b3552d77e78e3edf75d->enter($__internal_c41337c8ec800e2505afd97ca983ec380d99ae229ec86b3552d77e78e3edf75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71847c060b4bc2a8503c67859dbd5ae97e9ee75ffbb285984d5324af946a1c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71847c060b4bc2a8503c67859dbd5ae97e9ee75ffbb285984d5324af946a1c1c->enter($__internal_71847c060b4bc2a8503c67859dbd5ae97e9ee75ffbb285984d5324af946a1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71847c060b4bc2a8503c67859dbd5ae97e9ee75ffbb285984d5324af946a1c1c->leave($__internal_71847c060b4bc2a8503c67859dbd5ae97e9ee75ffbb285984d5324af946a1c1c_prof);

        
        $__internal_c41337c8ec800e2505afd97ca983ec380d99ae229ec86b3552d77e78e3edf75d->leave($__internal_c41337c8ec800e2505afd97ca983ec380d99ae229ec86b3552d77e78e3edf75d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e031333e916b5d5a68ce82a12773b7959909565ab873f7161cd87f1d1f48a17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e031333e916b5d5a68ce82a12773b7959909565ab873f7161cd87f1d1f48a17c->enter($__internal_e031333e916b5d5a68ce82a12773b7959909565ab873f7161cd87f1d1f48a17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_392d0b264b63baf8e498cd978fb5b7b6e67e3d45a90f7f27133e13823ad86e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392d0b264b63baf8e498cd978fb5b7b6e67e3d45a90f7f27133e13823ad86e74->enter($__internal_392d0b264b63baf8e498cd978fb5b7b6e67e3d45a90f7f27133e13823ad86e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_392d0b264b63baf8e498cd978fb5b7b6e67e3d45a90f7f27133e13823ad86e74->leave($__internal_392d0b264b63baf8e498cd978fb5b7b6e67e3d45a90f7f27133e13823ad86e74_prof);

        
        $__internal_e031333e916b5d5a68ce82a12773b7959909565ab873f7161cd87f1d1f48a17c->leave($__internal_e031333e916b5d5a68ce82a12773b7959909565ab873f7161cd87f1d1f48a17c_prof);

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

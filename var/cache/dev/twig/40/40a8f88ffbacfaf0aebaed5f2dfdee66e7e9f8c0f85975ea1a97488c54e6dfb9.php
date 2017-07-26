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
        $__internal_2e4b83b5102f010b2f6099724c4704fbcf1c50536c81a75710fd6379410f2f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4b83b5102f010b2f6099724c4704fbcf1c50536c81a75710fd6379410f2f8c->enter($__internal_2e4b83b5102f010b2f6099724c4704fbcf1c50536c81a75710fd6379410f2f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bac81ee73f04eef22e69184ba5631d2f62806d84cc547925aa5aebedde978544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac81ee73f04eef22e69184ba5631d2f62806d84cc547925aa5aebedde978544->enter($__internal_bac81ee73f04eef22e69184ba5631d2f62806d84cc547925aa5aebedde978544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4b83b5102f010b2f6099724c4704fbcf1c50536c81a75710fd6379410f2f8c->leave($__internal_2e4b83b5102f010b2f6099724c4704fbcf1c50536c81a75710fd6379410f2f8c_prof);

        
        $__internal_bac81ee73f04eef22e69184ba5631d2f62806d84cc547925aa5aebedde978544->leave($__internal_bac81ee73f04eef22e69184ba5631d2f62806d84cc547925aa5aebedde978544_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5ad1883826f40fcbedc8bc926cb10a9c31f03700e3ec107b87d886a048a54d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ad1883826f40fcbedc8bc926cb10a9c31f03700e3ec107b87d886a048a54d5->enter($__internal_c5ad1883826f40fcbedc8bc926cb10a9c31f03700e3ec107b87d886a048a54d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa67595821100a798f0dedcfdd5c9e6106604ab785e1641f5faf8985816e4e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa67595821100a798f0dedcfdd5c9e6106604ab785e1641f5faf8985816e4e47->enter($__internal_aa67595821100a798f0dedcfdd5c9e6106604ab785e1641f5faf8985816e4e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa67595821100a798f0dedcfdd5c9e6106604ab785e1641f5faf8985816e4e47->leave($__internal_aa67595821100a798f0dedcfdd5c9e6106604ab785e1641f5faf8985816e4e47_prof);

        
        $__internal_c5ad1883826f40fcbedc8bc926cb10a9c31f03700e3ec107b87d886a048a54d5->leave($__internal_c5ad1883826f40fcbedc8bc926cb10a9c31f03700e3ec107b87d886a048a54d5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_665b6666d114d83d01148c03710f2bc2c0312cd2711c9124e6f98bb3f5ec393a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665b6666d114d83d01148c03710f2bc2c0312cd2711c9124e6f98bb3f5ec393a->enter($__internal_665b6666d114d83d01148c03710f2bc2c0312cd2711c9124e6f98bb3f5ec393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97df1ff3db75ad3cfe0e251978896d8803d6b2b5a64e452a5da6eb3b41be7714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97df1ff3db75ad3cfe0e251978896d8803d6b2b5a64e452a5da6eb3b41be7714->enter($__internal_97df1ff3db75ad3cfe0e251978896d8803d6b2b5a64e452a5da6eb3b41be7714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_97df1ff3db75ad3cfe0e251978896d8803d6b2b5a64e452a5da6eb3b41be7714->leave($__internal_97df1ff3db75ad3cfe0e251978896d8803d6b2b5a64e452a5da6eb3b41be7714_prof);

        
        $__internal_665b6666d114d83d01148c03710f2bc2c0312cd2711c9124e6f98bb3f5ec393a->leave($__internal_665b6666d114d83d01148c03710f2bc2c0312cd2711c9124e6f98bb3f5ec393a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d7aa59b6b940c284b672064751a6bcff69202397245377de7bc3d4d58cf6afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7aa59b6b940c284b672064751a6bcff69202397245377de7bc3d4d58cf6afa->enter($__internal_8d7aa59b6b940c284b672064751a6bcff69202397245377de7bc3d4d58cf6afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d14f75448d93b539455de64dde65dbb3d68de822b1a376a12a94e5a6ea30311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d14f75448d93b539455de64dde65dbb3d68de822b1a376a12a94e5a6ea30311->enter($__internal_0d14f75448d93b539455de64dde65dbb3d68de822b1a376a12a94e5a6ea30311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0d14f75448d93b539455de64dde65dbb3d68de822b1a376a12a94e5a6ea30311->leave($__internal_0d14f75448d93b539455de64dde65dbb3d68de822b1a376a12a94e5a6ea30311_prof);

        
        $__internal_8d7aa59b6b940c284b672064751a6bcff69202397245377de7bc3d4d58cf6afa->leave($__internal_8d7aa59b6b940c284b672064751a6bcff69202397245377de7bc3d4d58cf6afa_prof);

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

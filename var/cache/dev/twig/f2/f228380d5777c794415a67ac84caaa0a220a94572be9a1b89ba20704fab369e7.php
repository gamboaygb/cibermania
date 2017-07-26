<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1f677c7a50e79b9f146333c29afe77f47b47285f9b1e140e8eb9a1ba07605e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f677c7a50e79b9f146333c29afe77f47b47285f9b1e140e8eb9a1ba07605e86->enter($__internal_1f677c7a50e79b9f146333c29afe77f47b47285f9b1e140e8eb9a1ba07605e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5bce9781eb5c2b8bdf870d06b3f34b25adf4fd6f4b5333bbddb6592f8fdf00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bce9781eb5c2b8bdf870d06b3f34b25adf4fd6f4b5333bbddb6592f8fdf00f->enter($__internal_e5bce9781eb5c2b8bdf870d06b3f34b25adf4fd6f4b5333bbddb6592f8fdf00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f677c7a50e79b9f146333c29afe77f47b47285f9b1e140e8eb9a1ba07605e86->leave($__internal_1f677c7a50e79b9f146333c29afe77f47b47285f9b1e140e8eb9a1ba07605e86_prof);

        
        $__internal_e5bce9781eb5c2b8bdf870d06b3f34b25adf4fd6f4b5333bbddb6592f8fdf00f->leave($__internal_e5bce9781eb5c2b8bdf870d06b3f34b25adf4fd6f4b5333bbddb6592f8fdf00f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f926bc4e49408063b17482d382fb58ba4fbdc893e2efdb52beb7ff27df61e1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f926bc4e49408063b17482d382fb58ba4fbdc893e2efdb52beb7ff27df61e1c2->enter($__internal_f926bc4e49408063b17482d382fb58ba4fbdc893e2efdb52beb7ff27df61e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d2e3770929f08719f91fae6918f97044d3228839c68b3db1f14cb823f9d2bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2e3770929f08719f91fae6918f97044d3228839c68b3db1f14cb823f9d2bd5->enter($__internal_1d2e3770929f08719f91fae6918f97044d3228839c68b3db1f14cb823f9d2bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d2e3770929f08719f91fae6918f97044d3228839c68b3db1f14cb823f9d2bd5->leave($__internal_1d2e3770929f08719f91fae6918f97044d3228839c68b3db1f14cb823f9d2bd5_prof);

        
        $__internal_f926bc4e49408063b17482d382fb58ba4fbdc893e2efdb52beb7ff27df61e1c2->leave($__internal_f926bc4e49408063b17482d382fb58ba4fbdc893e2efdb52beb7ff27df61e1c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_655796ea2caf10db48401e0c116d60cdede42e39fde3dc9d873c5060744915e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655796ea2caf10db48401e0c116d60cdede42e39fde3dc9d873c5060744915e8->enter($__internal_655796ea2caf10db48401e0c116d60cdede42e39fde3dc9d873c5060744915e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13f5b393d4a685c4f09de8655ea48a1c755827db32d2539cc8afad598db4b3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f5b393d4a685c4f09de8655ea48a1c755827db32d2539cc8afad598db4b3ca->enter($__internal_13f5b393d4a685c4f09de8655ea48a1c755827db32d2539cc8afad598db4b3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13f5b393d4a685c4f09de8655ea48a1c755827db32d2539cc8afad598db4b3ca->leave($__internal_13f5b393d4a685c4f09de8655ea48a1c755827db32d2539cc8afad598db4b3ca_prof);

        
        $__internal_655796ea2caf10db48401e0c116d60cdede42e39fde3dc9d873c5060744915e8->leave($__internal_655796ea2caf10db48401e0c116d60cdede42e39fde3dc9d873c5060744915e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_062286f7362f56b11f1488a875265ef97224ce01ff6d1f2f6b8c3844e9a81018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062286f7362f56b11f1488a875265ef97224ce01ff6d1f2f6b8c3844e9a81018->enter($__internal_062286f7362f56b11f1488a875265ef97224ce01ff6d1f2f6b8c3844e9a81018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74df6a1a9d2e27bada14d43ceb393be71dfb6c8e343b8b4d8d97a3c805a29d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74df6a1a9d2e27bada14d43ceb393be71dfb6c8e343b8b4d8d97a3c805a29d6e->enter($__internal_74df6a1a9d2e27bada14d43ceb393be71dfb6c8e343b8b4d8d97a3c805a29d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74df6a1a9d2e27bada14d43ceb393be71dfb6c8e343b8b4d8d97a3c805a29d6e->leave($__internal_74df6a1a9d2e27bada14d43ceb393be71dfb6c8e343b8b4d8d97a3c805a29d6e_prof);

        
        $__internal_062286f7362f56b11f1488a875265ef97224ce01ff6d1f2f6b8c3844e9a81018->leave($__internal_062286f7362f56b11f1488a875265ef97224ce01ff6d1f2f6b8c3844e9a81018_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

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
        $__internal_f0ddabdb84b4f066619eb1670de3597119e6145ac123a0476bca577d4c7c1806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ddabdb84b4f066619eb1670de3597119e6145ac123a0476bca577d4c7c1806->enter($__internal_f0ddabdb84b4f066619eb1670de3597119e6145ac123a0476bca577d4c7c1806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4eb7323a307cc78c50d554d83682b9a23cf4154638d59d3722a406be750d8092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb7323a307cc78c50d554d83682b9a23cf4154638d59d3722a406be750d8092->enter($__internal_4eb7323a307cc78c50d554d83682b9a23cf4154638d59d3722a406be750d8092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0ddabdb84b4f066619eb1670de3597119e6145ac123a0476bca577d4c7c1806->leave($__internal_f0ddabdb84b4f066619eb1670de3597119e6145ac123a0476bca577d4c7c1806_prof);

        
        $__internal_4eb7323a307cc78c50d554d83682b9a23cf4154638d59d3722a406be750d8092->leave($__internal_4eb7323a307cc78c50d554d83682b9a23cf4154638d59d3722a406be750d8092_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47087861df68a40e6449bed76576971cadccb63ae16974107eba41b1146396b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47087861df68a40e6449bed76576971cadccb63ae16974107eba41b1146396b9->enter($__internal_47087861df68a40e6449bed76576971cadccb63ae16974107eba41b1146396b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70beb78b84ef538757d80e7329ff0b46edf16ed79b9a93817ded627633316adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70beb78b84ef538757d80e7329ff0b46edf16ed79b9a93817ded627633316adc->enter($__internal_70beb78b84ef538757d80e7329ff0b46edf16ed79b9a93817ded627633316adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70beb78b84ef538757d80e7329ff0b46edf16ed79b9a93817ded627633316adc->leave($__internal_70beb78b84ef538757d80e7329ff0b46edf16ed79b9a93817ded627633316adc_prof);

        
        $__internal_47087861df68a40e6449bed76576971cadccb63ae16974107eba41b1146396b9->leave($__internal_47087861df68a40e6449bed76576971cadccb63ae16974107eba41b1146396b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15478047e9ac593315b5a13ede7d189b236dd63b801557f8f9e5c3086d083aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15478047e9ac593315b5a13ede7d189b236dd63b801557f8f9e5c3086d083aad->enter($__internal_15478047e9ac593315b5a13ede7d189b236dd63b801557f8f9e5c3086d083aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aac0283ad8f7aaa7d58c1d6ae12cc90a318fa756cc010ecc0a66c7aae96cbe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac0283ad8f7aaa7d58c1d6ae12cc90a318fa756cc010ecc0a66c7aae96cbe3f->enter($__internal_aac0283ad8f7aaa7d58c1d6ae12cc90a318fa756cc010ecc0a66c7aae96cbe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aac0283ad8f7aaa7d58c1d6ae12cc90a318fa756cc010ecc0a66c7aae96cbe3f->leave($__internal_aac0283ad8f7aaa7d58c1d6ae12cc90a318fa756cc010ecc0a66c7aae96cbe3f_prof);

        
        $__internal_15478047e9ac593315b5a13ede7d189b236dd63b801557f8f9e5c3086d083aad->leave($__internal_15478047e9ac593315b5a13ede7d189b236dd63b801557f8f9e5c3086d083aad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eccbc401a8e2b0dba0e85215b34e3a5ffb11ded44808bba1f0ff937b3e51607c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eccbc401a8e2b0dba0e85215b34e3a5ffb11ded44808bba1f0ff937b3e51607c->enter($__internal_eccbc401a8e2b0dba0e85215b34e3a5ffb11ded44808bba1f0ff937b3e51607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_defcb861c97a0eb2d74a338506b184ba6eb7f1c8ff65384a9c608f67aa8c6920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defcb861c97a0eb2d74a338506b184ba6eb7f1c8ff65384a9c608f67aa8c6920->enter($__internal_defcb861c97a0eb2d74a338506b184ba6eb7f1c8ff65384a9c608f67aa8c6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_defcb861c97a0eb2d74a338506b184ba6eb7f1c8ff65384a9c608f67aa8c6920->leave($__internal_defcb861c97a0eb2d74a338506b184ba6eb7f1c8ff65384a9c608f67aa8c6920_prof);

        
        $__internal_eccbc401a8e2b0dba0e85215b34e3a5ffb11ded44808bba1f0ff937b3e51607c->leave($__internal_eccbc401a8e2b0dba0e85215b34e3a5ffb11ded44808bba1f0ff937b3e51607c_prof);

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

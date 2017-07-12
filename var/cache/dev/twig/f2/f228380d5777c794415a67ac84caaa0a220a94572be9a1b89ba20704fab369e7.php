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
        $__internal_bca7d623b2f127f7aac2afea9db219ee5a25e36fd3c3f068515db0a81f3ba185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca7d623b2f127f7aac2afea9db219ee5a25e36fd3c3f068515db0a81f3ba185->enter($__internal_bca7d623b2f127f7aac2afea9db219ee5a25e36fd3c3f068515db0a81f3ba185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_db899bb47d8369279496b6e9d09986fa3e83a5bfb61684099addd7ee3ec744b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db899bb47d8369279496b6e9d09986fa3e83a5bfb61684099addd7ee3ec744b3->enter($__internal_db899bb47d8369279496b6e9d09986fa3e83a5bfb61684099addd7ee3ec744b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca7d623b2f127f7aac2afea9db219ee5a25e36fd3c3f068515db0a81f3ba185->leave($__internal_bca7d623b2f127f7aac2afea9db219ee5a25e36fd3c3f068515db0a81f3ba185_prof);

        
        $__internal_db899bb47d8369279496b6e9d09986fa3e83a5bfb61684099addd7ee3ec744b3->leave($__internal_db899bb47d8369279496b6e9d09986fa3e83a5bfb61684099addd7ee3ec744b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_528148a27b814560aed8e8c40958f4d54126ff39549f92d78a07e4abcd6c3b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528148a27b814560aed8e8c40958f4d54126ff39549f92d78a07e4abcd6c3b38->enter($__internal_528148a27b814560aed8e8c40958f4d54126ff39549f92d78a07e4abcd6c3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0bb0c25d10ccf549362af3cff733358bd74c284eeb9ec43b03f2963c4f81e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bb0c25d10ccf549362af3cff733358bd74c284eeb9ec43b03f2963c4f81e8a->enter($__internal_b0bb0c25d10ccf549362af3cff733358bd74c284eeb9ec43b03f2963c4f81e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0bb0c25d10ccf549362af3cff733358bd74c284eeb9ec43b03f2963c4f81e8a->leave($__internal_b0bb0c25d10ccf549362af3cff733358bd74c284eeb9ec43b03f2963c4f81e8a_prof);

        
        $__internal_528148a27b814560aed8e8c40958f4d54126ff39549f92d78a07e4abcd6c3b38->leave($__internal_528148a27b814560aed8e8c40958f4d54126ff39549f92d78a07e4abcd6c3b38_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_683a198da76944c6132fb47cf63109395092b00d349e81298a9df5f55dc9d7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683a198da76944c6132fb47cf63109395092b00d349e81298a9df5f55dc9d7af->enter($__internal_683a198da76944c6132fb47cf63109395092b00d349e81298a9df5f55dc9d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d84f31c65f0c31f140d704ffdcf4985aa2c97e8b7bde43e1bd203648e42ee2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d84f31c65f0c31f140d704ffdcf4985aa2c97e8b7bde43e1bd203648e42ee2a->enter($__internal_1d84f31c65f0c31f140d704ffdcf4985aa2c97e8b7bde43e1bd203648e42ee2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d84f31c65f0c31f140d704ffdcf4985aa2c97e8b7bde43e1bd203648e42ee2a->leave($__internal_1d84f31c65f0c31f140d704ffdcf4985aa2c97e8b7bde43e1bd203648e42ee2a_prof);

        
        $__internal_683a198da76944c6132fb47cf63109395092b00d349e81298a9df5f55dc9d7af->leave($__internal_683a198da76944c6132fb47cf63109395092b00d349e81298a9df5f55dc9d7af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c93da8d661c32fb8c1dbf281545d7edaae8ca629bccbc221b7027dc0f0fb9f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93da8d661c32fb8c1dbf281545d7edaae8ca629bccbc221b7027dc0f0fb9f70->enter($__internal_c93da8d661c32fb8c1dbf281545d7edaae8ca629bccbc221b7027dc0f0fb9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be7f41de3b94786eb34562c36bd66f8dbc1c59cf4e4a9eec232e6474200dfb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7f41de3b94786eb34562c36bd66f8dbc1c59cf4e4a9eec232e6474200dfb08->enter($__internal_be7f41de3b94786eb34562c36bd66f8dbc1c59cf4e4a9eec232e6474200dfb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be7f41de3b94786eb34562c36bd66f8dbc1c59cf4e4a9eec232e6474200dfb08->leave($__internal_be7f41de3b94786eb34562c36bd66f8dbc1c59cf4e4a9eec232e6474200dfb08_prof);

        
        $__internal_c93da8d661c32fb8c1dbf281545d7edaae8ca629bccbc221b7027dc0f0fb9f70->leave($__internal_c93da8d661c32fb8c1dbf281545d7edaae8ca629bccbc221b7027dc0f0fb9f70_prof);

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

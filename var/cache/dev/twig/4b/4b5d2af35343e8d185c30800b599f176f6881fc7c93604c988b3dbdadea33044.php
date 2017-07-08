<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
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
        $__internal_848da116eae6622b90ed694c41f58ca8206b5d171bea1b7979b48938004d8efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848da116eae6622b90ed694c41f58ca8206b5d171bea1b7979b48938004d8efe->enter($__internal_848da116eae6622b90ed694c41f58ca8206b5d171bea1b7979b48938004d8efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_32033937536fd6031af933c55b64dd31ea4f4cabacfefbdea08c43a10b320b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32033937536fd6031af933c55b64dd31ea4f4cabacfefbdea08c43a10b320b04->enter($__internal_32033937536fd6031af933c55b64dd31ea4f4cabacfefbdea08c43a10b320b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848da116eae6622b90ed694c41f58ca8206b5d171bea1b7979b48938004d8efe->leave($__internal_848da116eae6622b90ed694c41f58ca8206b5d171bea1b7979b48938004d8efe_prof);

        
        $__internal_32033937536fd6031af933c55b64dd31ea4f4cabacfefbdea08c43a10b320b04->leave($__internal_32033937536fd6031af933c55b64dd31ea4f4cabacfefbdea08c43a10b320b04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f3f88d2d362a4f4d9951c883521e8a1dbaac05de45a58e0309e15b31f517f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3f88d2d362a4f4d9951c883521e8a1dbaac05de45a58e0309e15b31f517f10->enter($__internal_4f3f88d2d362a4f4d9951c883521e8a1dbaac05de45a58e0309e15b31f517f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_78283edfc7164545230455097765056c765a0055bf62bc076677b23f9bc88e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78283edfc7164545230455097765056c765a0055bf62bc076677b23f9bc88e55->enter($__internal_78283edfc7164545230455097765056c765a0055bf62bc076677b23f9bc88e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78283edfc7164545230455097765056c765a0055bf62bc076677b23f9bc88e55->leave($__internal_78283edfc7164545230455097765056c765a0055bf62bc076677b23f9bc88e55_prof);

        
        $__internal_4f3f88d2d362a4f4d9951c883521e8a1dbaac05de45a58e0309e15b31f517f10->leave($__internal_4f3f88d2d362a4f4d9951c883521e8a1dbaac05de45a58e0309e15b31f517f10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71e76d4b499a9b31a8622f74c39cf8c4e72a696293fc4ff04c9c78d4ebd03adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e76d4b499a9b31a8622f74c39cf8c4e72a696293fc4ff04c9c78d4ebd03adc->enter($__internal_71e76d4b499a9b31a8622f74c39cf8c4e72a696293fc4ff04c9c78d4ebd03adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4f508a2c10b0a947ff3dbba75b582f1429d9ff752970b337635c30c523f0f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f508a2c10b0a947ff3dbba75b582f1429d9ff752970b337635c30c523f0f4a->enter($__internal_d4f508a2c10b0a947ff3dbba75b582f1429d9ff752970b337635c30c523f0f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4f508a2c10b0a947ff3dbba75b582f1429d9ff752970b337635c30c523f0f4a->leave($__internal_d4f508a2c10b0a947ff3dbba75b582f1429d9ff752970b337635c30c523f0f4a_prof);

        
        $__internal_71e76d4b499a9b31a8622f74c39cf8c4e72a696293fc4ff04c9c78d4ebd03adc->leave($__internal_71e76d4b499a9b31a8622f74c39cf8c4e72a696293fc4ff04c9c78d4ebd03adc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c3f315887601b23a43c644f13efc0404a852d9b9b3c57e2763cb3878409c20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3f315887601b23a43c644f13efc0404a852d9b9b3c57e2763cb3878409c20b->enter($__internal_3c3f315887601b23a43c644f13efc0404a852d9b9b3c57e2763cb3878409c20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11c8f6e33b3fc927784cac58b016ddcb6da0488bfd4d2baca252a97509cc8d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c8f6e33b3fc927784cac58b016ddcb6da0488bfd4d2baca252a97509cc8d32->enter($__internal_11c8f6e33b3fc927784cac58b016ddcb6da0488bfd4d2baca252a97509cc8d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_11c8f6e33b3fc927784cac58b016ddcb6da0488bfd4d2baca252a97509cc8d32->leave($__internal_11c8f6e33b3fc927784cac58b016ddcb6da0488bfd4d2baca252a97509cc8d32_prof);

        
        $__internal_3c3f315887601b23a43c644f13efc0404a852d9b9b3c57e2763cb3878409c20b->leave($__internal_3c3f315887601b23a43c644f13efc0404a852d9b9b3c57e2763cb3878409c20b_prof);

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

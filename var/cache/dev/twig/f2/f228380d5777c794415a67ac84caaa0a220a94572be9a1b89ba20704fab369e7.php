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
        $__internal_b018c0f3586ff5dfaa48e8d3dbfc84b641d8087bdb9bd7463f79dd153e1a3081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b018c0f3586ff5dfaa48e8d3dbfc84b641d8087bdb9bd7463f79dd153e1a3081->enter($__internal_b018c0f3586ff5dfaa48e8d3dbfc84b641d8087bdb9bd7463f79dd153e1a3081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3dc6d784c29cecd53f91fa3a02859b1182dfe9ed1b17046ca8dd542f6eaaabf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc6d784c29cecd53f91fa3a02859b1182dfe9ed1b17046ca8dd542f6eaaabf9->enter($__internal_3dc6d784c29cecd53f91fa3a02859b1182dfe9ed1b17046ca8dd542f6eaaabf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b018c0f3586ff5dfaa48e8d3dbfc84b641d8087bdb9bd7463f79dd153e1a3081->leave($__internal_b018c0f3586ff5dfaa48e8d3dbfc84b641d8087bdb9bd7463f79dd153e1a3081_prof);

        
        $__internal_3dc6d784c29cecd53f91fa3a02859b1182dfe9ed1b17046ca8dd542f6eaaabf9->leave($__internal_3dc6d784c29cecd53f91fa3a02859b1182dfe9ed1b17046ca8dd542f6eaaabf9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41f15b80a730fcda0938e0f2dac84299b5bdae8641bea100593b547036eabb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f15b80a730fcda0938e0f2dac84299b5bdae8641bea100593b547036eabb99->enter($__internal_41f15b80a730fcda0938e0f2dac84299b5bdae8641bea100593b547036eabb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a6c127d454671532f546ea3e9ec01cfef8740feffeb7cd672246e7c3f5e2ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6c127d454671532f546ea3e9ec01cfef8740feffeb7cd672246e7c3f5e2ae7->enter($__internal_7a6c127d454671532f546ea3e9ec01cfef8740feffeb7cd672246e7c3f5e2ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a6c127d454671532f546ea3e9ec01cfef8740feffeb7cd672246e7c3f5e2ae7->leave($__internal_7a6c127d454671532f546ea3e9ec01cfef8740feffeb7cd672246e7c3f5e2ae7_prof);

        
        $__internal_41f15b80a730fcda0938e0f2dac84299b5bdae8641bea100593b547036eabb99->leave($__internal_41f15b80a730fcda0938e0f2dac84299b5bdae8641bea100593b547036eabb99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22197a22571865a2b6d7eba0fc25dd6e772906f9854f30d70c043af28e7692bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22197a22571865a2b6d7eba0fc25dd6e772906f9854f30d70c043af28e7692bc->enter($__internal_22197a22571865a2b6d7eba0fc25dd6e772906f9854f30d70c043af28e7692bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af3cd458207ab834f7370eb8cef3bc9b411050e49ac0980d3766b1ce7bdc204e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3cd458207ab834f7370eb8cef3bc9b411050e49ac0980d3766b1ce7bdc204e->enter($__internal_af3cd458207ab834f7370eb8cef3bc9b411050e49ac0980d3766b1ce7bdc204e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af3cd458207ab834f7370eb8cef3bc9b411050e49ac0980d3766b1ce7bdc204e->leave($__internal_af3cd458207ab834f7370eb8cef3bc9b411050e49ac0980d3766b1ce7bdc204e_prof);

        
        $__internal_22197a22571865a2b6d7eba0fc25dd6e772906f9854f30d70c043af28e7692bc->leave($__internal_22197a22571865a2b6d7eba0fc25dd6e772906f9854f30d70c043af28e7692bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cfe65cfc19a97ee9c50a200e521c08bfa8dcaaa8044a6e95bc536276e99b741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfe65cfc19a97ee9c50a200e521c08bfa8dcaaa8044a6e95bc536276e99b741->enter($__internal_9cfe65cfc19a97ee9c50a200e521c08bfa8dcaaa8044a6e95bc536276e99b741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9c819ed8ed28ea1e714bc96e2288c5a644a11201501159a017de02683b68fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c819ed8ed28ea1e714bc96e2288c5a644a11201501159a017de02683b68fd1->enter($__internal_e9c819ed8ed28ea1e714bc96e2288c5a644a11201501159a017de02683b68fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9c819ed8ed28ea1e714bc96e2288c5a644a11201501159a017de02683b68fd1->leave($__internal_e9c819ed8ed28ea1e714bc96e2288c5a644a11201501159a017de02683b68fd1_prof);

        
        $__internal_9cfe65cfc19a97ee9c50a200e521c08bfa8dcaaa8044a6e95bc536276e99b741->leave($__internal_9cfe65cfc19a97ee9c50a200e521c08bfa8dcaaa8044a6e95bc536276e99b741_prof);

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

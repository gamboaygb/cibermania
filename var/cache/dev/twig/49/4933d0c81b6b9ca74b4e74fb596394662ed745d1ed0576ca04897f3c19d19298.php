<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48be8fbedf7df57cbe23b1343753f3bfc10448f9061970a18f0f3b84d7857be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48be8fbedf7df57cbe23b1343753f3bfc10448f9061970a18f0f3b84d7857be7->enter($__internal_48be8fbedf7df57cbe23b1343753f3bfc10448f9061970a18f0f3b84d7857be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_aed7c240b4d395049e6a35dad337263b2ff3957174be06112970457056f4b1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed7c240b4d395049e6a35dad337263b2ff3957174be06112970457056f4b1eb->enter($__internal_aed7c240b4d395049e6a35dad337263b2ff3957174be06112970457056f4b1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48be8fbedf7df57cbe23b1343753f3bfc10448f9061970a18f0f3b84d7857be7->leave($__internal_48be8fbedf7df57cbe23b1343753f3bfc10448f9061970a18f0f3b84d7857be7_prof);

        
        $__internal_aed7c240b4d395049e6a35dad337263b2ff3957174be06112970457056f4b1eb->leave($__internal_aed7c240b4d395049e6a35dad337263b2ff3957174be06112970457056f4b1eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e04e66d142ef142fa242ff614dfecf89e06809b2906b83708353bce6e7eef2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e04e66d142ef142fa242ff614dfecf89e06809b2906b83708353bce6e7eef2d->enter($__internal_3e04e66d142ef142fa242ff614dfecf89e06809b2906b83708353bce6e7eef2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c04d77b4116b140e91128409bb83c47e9fa578dee9f265155bd1e1348a8158b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04d77b4116b140e91128409bb83c47e9fa578dee9f265155bd1e1348a8158b5->enter($__internal_c04d77b4116b140e91128409bb83c47e9fa578dee9f265155bd1e1348a8158b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c04d77b4116b140e91128409bb83c47e9fa578dee9f265155bd1e1348a8158b5->leave($__internal_c04d77b4116b140e91128409bb83c47e9fa578dee9f265155bd1e1348a8158b5_prof);

        
        $__internal_3e04e66d142ef142fa242ff614dfecf89e06809b2906b83708353bce6e7eef2d->leave($__internal_3e04e66d142ef142fa242ff614dfecf89e06809b2906b83708353bce6e7eef2d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9473863d653ee3dd6c808e5fe9a1f106719514018baf8f6b90d81e4e0316b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9473863d653ee3dd6c808e5fe9a1f106719514018baf8f6b90d81e4e0316b30->enter($__internal_f9473863d653ee3dd6c808e5fe9a1f106719514018baf8f6b90d81e4e0316b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b675a1e217fe8aeec62c1299e4780a0ade1e9d97e0aaab408a83a018592543ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b675a1e217fe8aeec62c1299e4780a0ade1e9d97e0aaab408a83a018592543ba->enter($__internal_b675a1e217fe8aeec62c1299e4780a0ade1e9d97e0aaab408a83a018592543ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b675a1e217fe8aeec62c1299e4780a0ade1e9d97e0aaab408a83a018592543ba->leave($__internal_b675a1e217fe8aeec62c1299e4780a0ade1e9d97e0aaab408a83a018592543ba_prof);

        
        $__internal_f9473863d653ee3dd6c808e5fe9a1f106719514018baf8f6b90d81e4e0316b30->leave($__internal_f9473863d653ee3dd6c808e5fe9a1f106719514018baf8f6b90d81e4e0316b30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

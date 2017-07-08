<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed7df39d7af268e14f039d6046d3fd109a4b444fa23714f36da9cb50d0c9dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed7df39d7af268e14f039d6046d3fd109a4b444fa23714f36da9cb50d0c9dcb->enter($__internal_fed7df39d7af268e14f039d6046d3fd109a4b444fa23714f36da9cb50d0c9dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_69b3221dde0180734b49fdfe6d88896c07f2d6453bc3c9e91ae36e85b4ea5b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b3221dde0180734b49fdfe6d88896c07f2d6453bc3c9e91ae36e85b4ea5b5b->enter($__internal_69b3221dde0180734b49fdfe6d88896c07f2d6453bc3c9e91ae36e85b4ea5b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed7df39d7af268e14f039d6046d3fd109a4b444fa23714f36da9cb50d0c9dcb->leave($__internal_fed7df39d7af268e14f039d6046d3fd109a4b444fa23714f36da9cb50d0c9dcb_prof);

        
        $__internal_69b3221dde0180734b49fdfe6d88896c07f2d6453bc3c9e91ae36e85b4ea5b5b->leave($__internal_69b3221dde0180734b49fdfe6d88896c07f2d6453bc3c9e91ae36e85b4ea5b5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1094ced806f86c6c87f5217de6a6771b8e22f47b9cb83f4a41bf418b6c15db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1094ced806f86c6c87f5217de6a6771b8e22f47b9cb83f4a41bf418b6c15db4->enter($__internal_d1094ced806f86c6c87f5217de6a6771b8e22f47b9cb83f4a41bf418b6c15db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4630cfe821355a35ac3ac597684c13c79fdaed71edf5d271512926f3c67f0a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4630cfe821355a35ac3ac597684c13c79fdaed71edf5d271512926f3c67f0a8f->enter($__internal_4630cfe821355a35ac3ac597684c13c79fdaed71edf5d271512926f3c67f0a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4630cfe821355a35ac3ac597684c13c79fdaed71edf5d271512926f3c67f0a8f->leave($__internal_4630cfe821355a35ac3ac597684c13c79fdaed71edf5d271512926f3c67f0a8f_prof);

        
        $__internal_d1094ced806f86c6c87f5217de6a6771b8e22f47b9cb83f4a41bf418b6c15db4->leave($__internal_d1094ced806f86c6c87f5217de6a6771b8e22f47b9cb83f4a41bf418b6c15db4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97aae1a5cad0cc9c2bfe8885f491afd70c668cf3542f995c8f12fced79aa61fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97aae1a5cad0cc9c2bfe8885f491afd70c668cf3542f995c8f12fced79aa61fb->enter($__internal_97aae1a5cad0cc9c2bfe8885f491afd70c668cf3542f995c8f12fced79aa61fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_529190cc15b6c5f8135a670f885278dee893a919cbdd8882ff32bda83195b143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529190cc15b6c5f8135a670f885278dee893a919cbdd8882ff32bda83195b143->enter($__internal_529190cc15b6c5f8135a670f885278dee893a919cbdd8882ff32bda83195b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_97aae1a5cad0cc9c2bfe8885f491afd70c668cf3542f995c8f12fced79aa61fb->leave($__internal_97aae1a5cad0cc9c2bfe8885f491afd70c668cf3542f995c8f12fced79aa61fb_prof);

        
        $__internal_529190cc15b6c5f8135a670f885278dee893a919cbdd8882ff32bda83195b143->leave($__internal_529190cc15b6c5f8135a670f885278dee893a919cbdd8882ff32bda83195b143_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b512165d01812ab0be47eae26ef6243f7b5ccc2c31873b50073dd9e72dc5976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b512165d01812ab0be47eae26ef6243f7b5ccc2c31873b50073dd9e72dc5976->enter($__internal_5b512165d01812ab0be47eae26ef6243f7b5ccc2c31873b50073dd9e72dc5976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5705355c9b23bea44cfb4c79c82d3090e31b6e9c8b2bc854b7d3307cf737ac43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5705355c9b23bea44cfb4c79c82d3090e31b6e9c8b2bc854b7d3307cf737ac43->enter($__internal_5705355c9b23bea44cfb4c79c82d3090e31b6e9c8b2bc854b7d3307cf737ac43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5705355c9b23bea44cfb4c79c82d3090e31b6e9c8b2bc854b7d3307cf737ac43->leave($__internal_5705355c9b23bea44cfb4c79c82d3090e31b6e9c8b2bc854b7d3307cf737ac43_prof);

        
        $__internal_5b512165d01812ab0be47eae26ef6243f7b5ccc2c31873b50073dd9e72dc5976->leave($__internal_5b512165d01812ab0be47eae26ef6243f7b5ccc2c31873b50073dd9e72dc5976_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_61e7ecaab18376905b5c4d120557df6b193e574d1651cc6fcda90f865ecf7d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e7ecaab18376905b5c4d120557df6b193e574d1651cc6fcda90f865ecf7d69->enter($__internal_61e7ecaab18376905b5c4d120557df6b193e574d1651cc6fcda90f865ecf7d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_393ead624edc06c6de82365601369b9230852df642e7aad24674837f637cc0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393ead624edc06c6de82365601369b9230852df642e7aad24674837f637cc0af->enter($__internal_393ead624edc06c6de82365601369b9230852df642e7aad24674837f637cc0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_393ead624edc06c6de82365601369b9230852df642e7aad24674837f637cc0af->leave($__internal_393ead624edc06c6de82365601369b9230852df642e7aad24674837f637cc0af_prof);

        
        $__internal_61e7ecaab18376905b5c4d120557df6b193e574d1651cc6fcda90f865ecf7d69->leave($__internal_61e7ecaab18376905b5c4d120557df6b193e574d1651cc6fcda90f865ecf7d69_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33f86ed68bbbb819fa398c809addfd98f9884d30dfe8df50481bd50e53095f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33f86ed68bbbb819fa398c809addfd98f9884d30dfe8df50481bd50e53095f9->enter($__internal_a33f86ed68bbbb819fa398c809addfd98f9884d30dfe8df50481bd50e53095f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_487c8fc3e424e6923cfeb7d61bee7a839809bcbc0652a9dc2026d90c3c83dd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487c8fc3e424e6923cfeb7d61bee7a839809bcbc0652a9dc2026d90c3c83dd3e->enter($__internal_487c8fc3e424e6923cfeb7d61bee7a839809bcbc0652a9dc2026d90c3c83dd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_487c8fc3e424e6923cfeb7d61bee7a839809bcbc0652a9dc2026d90c3c83dd3e->leave($__internal_487c8fc3e424e6923cfeb7d61bee7a839809bcbc0652a9dc2026d90c3c83dd3e_prof);

        
        $__internal_a33f86ed68bbbb819fa398c809addfd98f9884d30dfe8df50481bd50e53095f9->leave($__internal_a33f86ed68bbbb819fa398c809addfd98f9884d30dfe8df50481bd50e53095f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

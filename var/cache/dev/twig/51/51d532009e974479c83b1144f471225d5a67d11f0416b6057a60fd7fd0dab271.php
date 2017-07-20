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
        $__internal_558825824cf89ec225865d37b1676086a25b6b5195b001a7f726659ad54920ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558825824cf89ec225865d37b1676086a25b6b5195b001a7f726659ad54920ba->enter($__internal_558825824cf89ec225865d37b1676086a25b6b5195b001a7f726659ad54920ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eda2b0bfc5c7c0871f80168169db5c5b6ba0af48d717d99613cc71fe7d8fe624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda2b0bfc5c7c0871f80168169db5c5b6ba0af48d717d99613cc71fe7d8fe624->enter($__internal_eda2b0bfc5c7c0871f80168169db5c5b6ba0af48d717d99613cc71fe7d8fe624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_558825824cf89ec225865d37b1676086a25b6b5195b001a7f726659ad54920ba->leave($__internal_558825824cf89ec225865d37b1676086a25b6b5195b001a7f726659ad54920ba_prof);

        
        $__internal_eda2b0bfc5c7c0871f80168169db5c5b6ba0af48d717d99613cc71fe7d8fe624->leave($__internal_eda2b0bfc5c7c0871f80168169db5c5b6ba0af48d717d99613cc71fe7d8fe624_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f0cd54801cbd0e3334fd139be93cdcccad3471135220d195046eb1a976b6d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0cd54801cbd0e3334fd139be93cdcccad3471135220d195046eb1a976b6d16->enter($__internal_6f0cd54801cbd0e3334fd139be93cdcccad3471135220d195046eb1a976b6d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73c259acde2959a463907fe4885c9e9a4626c8053f95588341355ad9727df0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c259acde2959a463907fe4885c9e9a4626c8053f95588341355ad9727df0b2->enter($__internal_73c259acde2959a463907fe4885c9e9a4626c8053f95588341355ad9727df0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_73c259acde2959a463907fe4885c9e9a4626c8053f95588341355ad9727df0b2->leave($__internal_73c259acde2959a463907fe4885c9e9a4626c8053f95588341355ad9727df0b2_prof);

        
        $__internal_6f0cd54801cbd0e3334fd139be93cdcccad3471135220d195046eb1a976b6d16->leave($__internal_6f0cd54801cbd0e3334fd139be93cdcccad3471135220d195046eb1a976b6d16_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3456a5a5d93a856407a12e8f4c3da24deb9859d27d26216ae7c0f4fb42c358a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3456a5a5d93a856407a12e8f4c3da24deb9859d27d26216ae7c0f4fb42c358a->enter($__internal_b3456a5a5d93a856407a12e8f4c3da24deb9859d27d26216ae7c0f4fb42c358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8fbce58aca016c86dde5174eaf8f91c39c0e9b88cc7be374be131a5d279bbaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbce58aca016c86dde5174eaf8f91c39c0e9b88cc7be374be131a5d279bbaa5->enter($__internal_8fbce58aca016c86dde5174eaf8f91c39c0e9b88cc7be374be131a5d279bbaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8fbce58aca016c86dde5174eaf8f91c39c0e9b88cc7be374be131a5d279bbaa5->leave($__internal_8fbce58aca016c86dde5174eaf8f91c39c0e9b88cc7be374be131a5d279bbaa5_prof);

        
        $__internal_b3456a5a5d93a856407a12e8f4c3da24deb9859d27d26216ae7c0f4fb42c358a->leave($__internal_b3456a5a5d93a856407a12e8f4c3da24deb9859d27d26216ae7c0f4fb42c358a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ee102a800f500919718130fb4359fef56961ba9355be47ce69986629f431df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ee102a800f500919718130fb4359fef56961ba9355be47ce69986629f431df->enter($__internal_d4ee102a800f500919718130fb4359fef56961ba9355be47ce69986629f431df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd179668473d44b9dccb5d94d2b35129f1334e0f0a677aec47653da173402250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd179668473d44b9dccb5d94d2b35129f1334e0f0a677aec47653da173402250->enter($__internal_dd179668473d44b9dccb5d94d2b35129f1334e0f0a677aec47653da173402250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd179668473d44b9dccb5d94d2b35129f1334e0f0a677aec47653da173402250->leave($__internal_dd179668473d44b9dccb5d94d2b35129f1334e0f0a677aec47653da173402250_prof);

        
        $__internal_d4ee102a800f500919718130fb4359fef56961ba9355be47ce69986629f431df->leave($__internal_d4ee102a800f500919718130fb4359fef56961ba9355be47ce69986629f431df_prof);

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

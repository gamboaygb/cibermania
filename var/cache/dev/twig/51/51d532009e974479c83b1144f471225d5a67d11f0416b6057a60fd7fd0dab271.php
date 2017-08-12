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
        $__internal_31b315f438333e3b1cd324d3d01176f27b948ad7ec856338ea038cedf3417610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b315f438333e3b1cd324d3d01176f27b948ad7ec856338ea038cedf3417610->enter($__internal_31b315f438333e3b1cd324d3d01176f27b948ad7ec856338ea038cedf3417610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_18c33167356acac4664664e14bafd4ea2c0baa35d3773d5a296008c3813e605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c33167356acac4664664e14bafd4ea2c0baa35d3773d5a296008c3813e605c->enter($__internal_18c33167356acac4664664e14bafd4ea2c0baa35d3773d5a296008c3813e605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_31b315f438333e3b1cd324d3d01176f27b948ad7ec856338ea038cedf3417610->leave($__internal_31b315f438333e3b1cd324d3d01176f27b948ad7ec856338ea038cedf3417610_prof);

        
        $__internal_18c33167356acac4664664e14bafd4ea2c0baa35d3773d5a296008c3813e605c->leave($__internal_18c33167356acac4664664e14bafd4ea2c0baa35d3773d5a296008c3813e605c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfa73b3d4d08b7a2950edf0450a766f3788e163602cfcf7430869b3d707108d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa73b3d4d08b7a2950edf0450a766f3788e163602cfcf7430869b3d707108d5->enter($__internal_bfa73b3d4d08b7a2950edf0450a766f3788e163602cfcf7430869b3d707108d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20821874250176b292e428e03b23f9e788c87bc08879a257d6ecbc288cf2527a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20821874250176b292e428e03b23f9e788c87bc08879a257d6ecbc288cf2527a->enter($__internal_20821874250176b292e428e03b23f9e788c87bc08879a257d6ecbc288cf2527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_20821874250176b292e428e03b23f9e788c87bc08879a257d6ecbc288cf2527a->leave($__internal_20821874250176b292e428e03b23f9e788c87bc08879a257d6ecbc288cf2527a_prof);

        
        $__internal_bfa73b3d4d08b7a2950edf0450a766f3788e163602cfcf7430869b3d707108d5->leave($__internal_bfa73b3d4d08b7a2950edf0450a766f3788e163602cfcf7430869b3d707108d5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0443afa16aa8980fa6da2d8cc12d281a17d5c4b395cd19a3bc66c0187e5bf0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0443afa16aa8980fa6da2d8cc12d281a17d5c4b395cd19a3bc66c0187e5bf0a5->enter($__internal_0443afa16aa8980fa6da2d8cc12d281a17d5c4b395cd19a3bc66c0187e5bf0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a1e155d0e85f7ac191ebf29c8a8b0b18579311e80376aea38bdb7b25a37b4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1e155d0e85f7ac191ebf29c8a8b0b18579311e80376aea38bdb7b25a37b4ea->enter($__internal_5a1e155d0e85f7ac191ebf29c8a8b0b18579311e80376aea38bdb7b25a37b4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5a1e155d0e85f7ac191ebf29c8a8b0b18579311e80376aea38bdb7b25a37b4ea->leave($__internal_5a1e155d0e85f7ac191ebf29c8a8b0b18579311e80376aea38bdb7b25a37b4ea_prof);

        
        $__internal_0443afa16aa8980fa6da2d8cc12d281a17d5c4b395cd19a3bc66c0187e5bf0a5->leave($__internal_0443afa16aa8980fa6da2d8cc12d281a17d5c4b395cd19a3bc66c0187e5bf0a5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ffd2d24bec61ea8498611d456b4835fbe5123e75e5dd950888cce5929986005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffd2d24bec61ea8498611d456b4835fbe5123e75e5dd950888cce5929986005->enter($__internal_5ffd2d24bec61ea8498611d456b4835fbe5123e75e5dd950888cce5929986005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64f9849a8dec597080506e966bb266849121aea690ef348912803ccd8475ad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f9849a8dec597080506e966bb266849121aea690ef348912803ccd8475ad6e->enter($__internal_64f9849a8dec597080506e966bb266849121aea690ef348912803ccd8475ad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64f9849a8dec597080506e966bb266849121aea690ef348912803ccd8475ad6e->leave($__internal_64f9849a8dec597080506e966bb266849121aea690ef348912803ccd8475ad6e_prof);

        
        $__internal_5ffd2d24bec61ea8498611d456b4835fbe5123e75e5dd950888cce5929986005->leave($__internal_5ffd2d24bec61ea8498611d456b4835fbe5123e75e5dd950888cce5929986005_prof);

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

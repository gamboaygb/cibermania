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
        $__internal_fa0e65d467a187b86b01fbc34fd48de0514f61ab181777fac2b9267446b00999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0e65d467a187b86b01fbc34fd48de0514f61ab181777fac2b9267446b00999->enter($__internal_fa0e65d467a187b86b01fbc34fd48de0514f61ab181777fac2b9267446b00999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f67e1a422e7c317b5ac770c265cebe3eab9ff3ed755a48033ef892b43ddb765e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67e1a422e7c317b5ac770c265cebe3eab9ff3ed755a48033ef892b43ddb765e->enter($__internal_f67e1a422e7c317b5ac770c265cebe3eab9ff3ed755a48033ef892b43ddb765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fa0e65d467a187b86b01fbc34fd48de0514f61ab181777fac2b9267446b00999->leave($__internal_fa0e65d467a187b86b01fbc34fd48de0514f61ab181777fac2b9267446b00999_prof);

        
        $__internal_f67e1a422e7c317b5ac770c265cebe3eab9ff3ed755a48033ef892b43ddb765e->leave($__internal_f67e1a422e7c317b5ac770c265cebe3eab9ff3ed755a48033ef892b43ddb765e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99c02255a439246c1c6d69b128e909c323916294483c60e48344dffa41459eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c02255a439246c1c6d69b128e909c323916294483c60e48344dffa41459eb4->enter($__internal_99c02255a439246c1c6d69b128e909c323916294483c60e48344dffa41459eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae45712630c111f145c7466a00a1886efbdfdc24d8133561425e40c2b8499c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae45712630c111f145c7466a00a1886efbdfdc24d8133561425e40c2b8499c29->enter($__internal_ae45712630c111f145c7466a00a1886efbdfdc24d8133561425e40c2b8499c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ae45712630c111f145c7466a00a1886efbdfdc24d8133561425e40c2b8499c29->leave($__internal_ae45712630c111f145c7466a00a1886efbdfdc24d8133561425e40c2b8499c29_prof);

        
        $__internal_99c02255a439246c1c6d69b128e909c323916294483c60e48344dffa41459eb4->leave($__internal_99c02255a439246c1c6d69b128e909c323916294483c60e48344dffa41459eb4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_441165ea5f71c013a7f551a82a1b9deb9453f8162033ebb8294d7910b1ef20b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441165ea5f71c013a7f551a82a1b9deb9453f8162033ebb8294d7910b1ef20b0->enter($__internal_441165ea5f71c013a7f551a82a1b9deb9453f8162033ebb8294d7910b1ef20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd9f7b506d4fd05c878e908cca9ececba9cd10ef638335d70041e668a1fcba50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9f7b506d4fd05c878e908cca9ececba9cd10ef638335d70041e668a1fcba50->enter($__internal_bd9f7b506d4fd05c878e908cca9ececba9cd10ef638335d70041e668a1fcba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bd9f7b506d4fd05c878e908cca9ececba9cd10ef638335d70041e668a1fcba50->leave($__internal_bd9f7b506d4fd05c878e908cca9ececba9cd10ef638335d70041e668a1fcba50_prof);

        
        $__internal_441165ea5f71c013a7f551a82a1b9deb9453f8162033ebb8294d7910b1ef20b0->leave($__internal_441165ea5f71c013a7f551a82a1b9deb9453f8162033ebb8294d7910b1ef20b0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8af4184ca36040e2044b0c254f8afd3cbd9bc83e16f9bebdf4f631cfd3068b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af4184ca36040e2044b0c254f8afd3cbd9bc83e16f9bebdf4f631cfd3068b4f->enter($__internal_8af4184ca36040e2044b0c254f8afd3cbd9bc83e16f9bebdf4f631cfd3068b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af8fc07239ee7a7040a139f598fae70b92bf0ad81a15bc5437da3f00b3f55cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8fc07239ee7a7040a139f598fae70b92bf0ad81a15bc5437da3f00b3f55cfa->enter($__internal_af8fc07239ee7a7040a139f598fae70b92bf0ad81a15bc5437da3f00b3f55cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af8fc07239ee7a7040a139f598fae70b92bf0ad81a15bc5437da3f00b3f55cfa->leave($__internal_af8fc07239ee7a7040a139f598fae70b92bf0ad81a15bc5437da3f00b3f55cfa_prof);

        
        $__internal_8af4184ca36040e2044b0c254f8afd3cbd9bc83e16f9bebdf4f631cfd3068b4f->leave($__internal_8af4184ca36040e2044b0c254f8afd3cbd9bc83e16f9bebdf4f631cfd3068b4f_prof);

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

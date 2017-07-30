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
        $__internal_39ecc765bfdc8ce4d1a8329a344ab851cfe87b35396570811f97def12cab4708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ecc765bfdc8ce4d1a8329a344ab851cfe87b35396570811f97def12cab4708->enter($__internal_39ecc765bfdc8ce4d1a8329a344ab851cfe87b35396570811f97def12cab4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f25635c452ed47820586e674615fcf9e90c574c6cd08e5c9736b86763d49d039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25635c452ed47820586e674615fcf9e90c574c6cd08e5c9736b86763d49d039->enter($__internal_f25635c452ed47820586e674615fcf9e90c574c6cd08e5c9736b86763d49d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_39ecc765bfdc8ce4d1a8329a344ab851cfe87b35396570811f97def12cab4708->leave($__internal_39ecc765bfdc8ce4d1a8329a344ab851cfe87b35396570811f97def12cab4708_prof);

        
        $__internal_f25635c452ed47820586e674615fcf9e90c574c6cd08e5c9736b86763d49d039->leave($__internal_f25635c452ed47820586e674615fcf9e90c574c6cd08e5c9736b86763d49d039_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88c6d87c5ced13a165eec3d4b9e1eeac055af1bc2a8a318157e7caff418cfc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c6d87c5ced13a165eec3d4b9e1eeac055af1bc2a8a318157e7caff418cfc81->enter($__internal_88c6d87c5ced13a165eec3d4b9e1eeac055af1bc2a8a318157e7caff418cfc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71b8be5982abaa2ee17cb3d54529f08638645d3680ac27d487708d833cee4be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b8be5982abaa2ee17cb3d54529f08638645d3680ac27d487708d833cee4be4->enter($__internal_71b8be5982abaa2ee17cb3d54529f08638645d3680ac27d487708d833cee4be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71b8be5982abaa2ee17cb3d54529f08638645d3680ac27d487708d833cee4be4->leave($__internal_71b8be5982abaa2ee17cb3d54529f08638645d3680ac27d487708d833cee4be4_prof);

        
        $__internal_88c6d87c5ced13a165eec3d4b9e1eeac055af1bc2a8a318157e7caff418cfc81->leave($__internal_88c6d87c5ced13a165eec3d4b9e1eeac055af1bc2a8a318157e7caff418cfc81_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cbfa89a28ec713dae2973bc0613f0352dc2d36592c077406f30f8cef91070fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbfa89a28ec713dae2973bc0613f0352dc2d36592c077406f30f8cef91070fb->enter($__internal_9cbfa89a28ec713dae2973bc0613f0352dc2d36592c077406f30f8cef91070fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_02a414d2ad6dbb1d1496e24d6c06fc8a83f3f5de216324080cfa6228392285fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a414d2ad6dbb1d1496e24d6c06fc8a83f3f5de216324080cfa6228392285fc->enter($__internal_02a414d2ad6dbb1d1496e24d6c06fc8a83f3f5de216324080cfa6228392285fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_02a414d2ad6dbb1d1496e24d6c06fc8a83f3f5de216324080cfa6228392285fc->leave($__internal_02a414d2ad6dbb1d1496e24d6c06fc8a83f3f5de216324080cfa6228392285fc_prof);

        
        $__internal_9cbfa89a28ec713dae2973bc0613f0352dc2d36592c077406f30f8cef91070fb->leave($__internal_9cbfa89a28ec713dae2973bc0613f0352dc2d36592c077406f30f8cef91070fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd56f42361dfa93ec770cbb7c7ce365f03c9fd41ad789aa4cc02d4cd7c1592cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd56f42361dfa93ec770cbb7c7ce365f03c9fd41ad789aa4cc02d4cd7c1592cc->enter($__internal_bd56f42361dfa93ec770cbb7c7ce365f03c9fd41ad789aa4cc02d4cd7c1592cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a33e0b0912836c616000e12a2bea8dfd153bc6bd3023b53b3b511903e292d656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33e0b0912836c616000e12a2bea8dfd153bc6bd3023b53b3b511903e292d656->enter($__internal_a33e0b0912836c616000e12a2bea8dfd153bc6bd3023b53b3b511903e292d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a33e0b0912836c616000e12a2bea8dfd153bc6bd3023b53b3b511903e292d656->leave($__internal_a33e0b0912836c616000e12a2bea8dfd153bc6bd3023b53b3b511903e292d656_prof);

        
        $__internal_bd56f42361dfa93ec770cbb7c7ce365f03c9fd41ad789aa4cc02d4cd7c1592cc->leave($__internal_bd56f42361dfa93ec770cbb7c7ce365f03c9fd41ad789aa4cc02d4cd7c1592cc_prof);

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

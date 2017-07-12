<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02497cb5d5b78d561edd87f9f879d59fef47d65592e74887391c044338b265e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02497cb5d5b78d561edd87f9f879d59fef47d65592e74887391c044338b265e0->enter($__internal_02497cb5d5b78d561edd87f9f879d59fef47d65592e74887391c044338b265e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_04c29c1d8fe52e9a2c7cf4cc6e71c56cee955f4969cbc807d94e94329c66e987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c29c1d8fe52e9a2c7cf4cc6e71c56cee955f4969cbc807d94e94329c66e987->enter($__internal_04c29c1d8fe52e9a2c7cf4cc6e71c56cee955f4969cbc807d94e94329c66e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02497cb5d5b78d561edd87f9f879d59fef47d65592e74887391c044338b265e0->leave($__internal_02497cb5d5b78d561edd87f9f879d59fef47d65592e74887391c044338b265e0_prof);

        
        $__internal_04c29c1d8fe52e9a2c7cf4cc6e71c56cee955f4969cbc807d94e94329c66e987->leave($__internal_04c29c1d8fe52e9a2c7cf4cc6e71c56cee955f4969cbc807d94e94329c66e987_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76d321ba26c9cd9a91204f7ca43884d0592e11d6a4e34cd58667a67a88bf7ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d321ba26c9cd9a91204f7ca43884d0592e11d6a4e34cd58667a67a88bf7ffd->enter($__internal_76d321ba26c9cd9a91204f7ca43884d0592e11d6a4e34cd58667a67a88bf7ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92d2b5a0fd0a0fbe37157f24c0d2c786c3f8001c5b26b352cfa843f2d85b876e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2b5a0fd0a0fbe37157f24c0d2c786c3f8001c5b26b352cfa843f2d85b876e->enter($__internal_92d2b5a0fd0a0fbe37157f24c0d2c786c3f8001c5b26b352cfa843f2d85b876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_92d2b5a0fd0a0fbe37157f24c0d2c786c3f8001c5b26b352cfa843f2d85b876e->leave($__internal_92d2b5a0fd0a0fbe37157f24c0d2c786c3f8001c5b26b352cfa843f2d85b876e_prof);

        
        $__internal_76d321ba26c9cd9a91204f7ca43884d0592e11d6a4e34cd58667a67a88bf7ffd->leave($__internal_76d321ba26c9cd9a91204f7ca43884d0592e11d6a4e34cd58667a67a88bf7ffd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc038fff44f9e4f589bcc8829eb8d699e4818e5c98707c1e73254a399e0ce603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc038fff44f9e4f589bcc8829eb8d699e4818e5c98707c1e73254a399e0ce603->enter($__internal_dc038fff44f9e4f589bcc8829eb8d699e4818e5c98707c1e73254a399e0ce603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e38b153d0f8d5f3ddfa8010b7da878d3dae861f77364872dac1b640bb076883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e38b153d0f8d5f3ddfa8010b7da878d3dae861f77364872dac1b640bb076883->enter($__internal_0e38b153d0f8d5f3ddfa8010b7da878d3dae861f77364872dac1b640bb076883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0e38b153d0f8d5f3ddfa8010b7da878d3dae861f77364872dac1b640bb076883->leave($__internal_0e38b153d0f8d5f3ddfa8010b7da878d3dae861f77364872dac1b640bb076883_prof);

        
        $__internal_dc038fff44f9e4f589bcc8829eb8d699e4818e5c98707c1e73254a399e0ce603->leave($__internal_dc038fff44f9e4f589bcc8829eb8d699e4818e5c98707c1e73254a399e0ce603_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c6bb24dcb9377e4d9e6bc1f2b2783217d743563fb1bb0cf8da29c5b8d6c2be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6bb24dcb9377e4d9e6bc1f2b2783217d743563fb1bb0cf8da29c5b8d6c2be8->enter($__internal_3c6bb24dcb9377e4d9e6bc1f2b2783217d743563fb1bb0cf8da29c5b8d6c2be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ee661dacc965796be99b5d1123c1f54e43a27162822254ec59533088932fcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee661dacc965796be99b5d1123c1f54e43a27162822254ec59533088932fcda->enter($__internal_3ee661dacc965796be99b5d1123c1f54e43a27162822254ec59533088932fcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3ee661dacc965796be99b5d1123c1f54e43a27162822254ec59533088932fcda->leave($__internal_3ee661dacc965796be99b5d1123c1f54e43a27162822254ec59533088932fcda_prof);

        
        $__internal_3c6bb24dcb9377e4d9e6bc1f2b2783217d743563fb1bb0cf8da29c5b8d6c2be8->leave($__internal_3c6bb24dcb9377e4d9e6bc1f2b2783217d743563fb1bb0cf8da29c5b8d6c2be8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

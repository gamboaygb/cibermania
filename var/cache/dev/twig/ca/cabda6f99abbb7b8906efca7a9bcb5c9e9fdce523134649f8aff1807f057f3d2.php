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
        $__internal_5de8af9f5861189d4b40e2b98dff623d5272a37039c2512b0c0b75fe22cac09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de8af9f5861189d4b40e2b98dff623d5272a37039c2512b0c0b75fe22cac09f->enter($__internal_5de8af9f5861189d4b40e2b98dff623d5272a37039c2512b0c0b75fe22cac09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_11a045c6e95b2f16f0a0483abf4a8615e2b4a504883087f2e8090ecc45c69f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a045c6e95b2f16f0a0483abf4a8615e2b4a504883087f2e8090ecc45c69f43->enter($__internal_11a045c6e95b2f16f0a0483abf4a8615e2b4a504883087f2e8090ecc45c69f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5de8af9f5861189d4b40e2b98dff623d5272a37039c2512b0c0b75fe22cac09f->leave($__internal_5de8af9f5861189d4b40e2b98dff623d5272a37039c2512b0c0b75fe22cac09f_prof);

        
        $__internal_11a045c6e95b2f16f0a0483abf4a8615e2b4a504883087f2e8090ecc45c69f43->leave($__internal_11a045c6e95b2f16f0a0483abf4a8615e2b4a504883087f2e8090ecc45c69f43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0b9be2053a4127d76611662f0f7342251e9707f6b72cfa3fdcfa1e4330a5209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b9be2053a4127d76611662f0f7342251e9707f6b72cfa3fdcfa1e4330a5209->enter($__internal_e0b9be2053a4127d76611662f0f7342251e9707f6b72cfa3fdcfa1e4330a5209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40beefa395ed8d5a3fb5c6f65c11a12c68f00d3eb8100fe3571e60648387d676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40beefa395ed8d5a3fb5c6f65c11a12c68f00d3eb8100fe3571e60648387d676->enter($__internal_40beefa395ed8d5a3fb5c6f65c11a12c68f00d3eb8100fe3571e60648387d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_40beefa395ed8d5a3fb5c6f65c11a12c68f00d3eb8100fe3571e60648387d676->leave($__internal_40beefa395ed8d5a3fb5c6f65c11a12c68f00d3eb8100fe3571e60648387d676_prof);

        
        $__internal_e0b9be2053a4127d76611662f0f7342251e9707f6b72cfa3fdcfa1e4330a5209->leave($__internal_e0b9be2053a4127d76611662f0f7342251e9707f6b72cfa3fdcfa1e4330a5209_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfcb71028e9b36d7db5aab74feb28be8d7df7d002780851bfd185de5ead40ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcb71028e9b36d7db5aab74feb28be8d7df7d002780851bfd185de5ead40ce0->enter($__internal_cfcb71028e9b36d7db5aab74feb28be8d7df7d002780851bfd185de5ead40ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da9f2d0367b6e4ceb2d169ab4c9691117b88a596e845549ff905d9fe3e2af012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9f2d0367b6e4ceb2d169ab4c9691117b88a596e845549ff905d9fe3e2af012->enter($__internal_da9f2d0367b6e4ceb2d169ab4c9691117b88a596e845549ff905d9fe3e2af012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da9f2d0367b6e4ceb2d169ab4c9691117b88a596e845549ff905d9fe3e2af012->leave($__internal_da9f2d0367b6e4ceb2d169ab4c9691117b88a596e845549ff905d9fe3e2af012_prof);

        
        $__internal_cfcb71028e9b36d7db5aab74feb28be8d7df7d002780851bfd185de5ead40ce0->leave($__internal_cfcb71028e9b36d7db5aab74feb28be8d7df7d002780851bfd185de5ead40ce0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0339d0e648edb6c336f4973c28265c0efdc943344f74078798d61ff9add16db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0339d0e648edb6c336f4973c28265c0efdc943344f74078798d61ff9add16db7->enter($__internal_0339d0e648edb6c336f4973c28265c0efdc943344f74078798d61ff9add16db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6be16a7f3edbf284f6c2bd7b256b220ea873cc630f99a1b73981936dd44704d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be16a7f3edbf284f6c2bd7b256b220ea873cc630f99a1b73981936dd44704d7->enter($__internal_6be16a7f3edbf284f6c2bd7b256b220ea873cc630f99a1b73981936dd44704d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6be16a7f3edbf284f6c2bd7b256b220ea873cc630f99a1b73981936dd44704d7->leave($__internal_6be16a7f3edbf284f6c2bd7b256b220ea873cc630f99a1b73981936dd44704d7_prof);

        
        $__internal_0339d0e648edb6c336f4973c28265c0efdc943344f74078798d61ff9add16db7->leave($__internal_0339d0e648edb6c336f4973c28265c0efdc943344f74078798d61ff9add16db7_prof);

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

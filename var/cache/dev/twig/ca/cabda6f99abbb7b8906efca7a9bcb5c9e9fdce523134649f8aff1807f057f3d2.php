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
        $__internal_c7cf524e56f9164cb7924793524f6dce6612a5b0876aae956d2b22d8e91b1e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cf524e56f9164cb7924793524f6dce6612a5b0876aae956d2b22d8e91b1e36->enter($__internal_c7cf524e56f9164cb7924793524f6dce6612a5b0876aae956d2b22d8e91b1e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_549f882c6f13a6aea18ef75aa709697b96296e3d3d02dff3d2439489d496602b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549f882c6f13a6aea18ef75aa709697b96296e3d3d02dff3d2439489d496602b->enter($__internal_549f882c6f13a6aea18ef75aa709697b96296e3d3d02dff3d2439489d496602b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7cf524e56f9164cb7924793524f6dce6612a5b0876aae956d2b22d8e91b1e36->leave($__internal_c7cf524e56f9164cb7924793524f6dce6612a5b0876aae956d2b22d8e91b1e36_prof);

        
        $__internal_549f882c6f13a6aea18ef75aa709697b96296e3d3d02dff3d2439489d496602b->leave($__internal_549f882c6f13a6aea18ef75aa709697b96296e3d3d02dff3d2439489d496602b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8563c34199682ad6edf5d4bf45c9ed353540d67cd62c2c46feaaca9b94ae9260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8563c34199682ad6edf5d4bf45c9ed353540d67cd62c2c46feaaca9b94ae9260->enter($__internal_8563c34199682ad6edf5d4bf45c9ed353540d67cd62c2c46feaaca9b94ae9260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36b71d87928cb749ec2b0644c604724d68cbc1ec68e4a4ebb879f93470cb80d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b71d87928cb749ec2b0644c604724d68cbc1ec68e4a4ebb879f93470cb80d1->enter($__internal_36b71d87928cb749ec2b0644c604724d68cbc1ec68e4a4ebb879f93470cb80d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_36b71d87928cb749ec2b0644c604724d68cbc1ec68e4a4ebb879f93470cb80d1->leave($__internal_36b71d87928cb749ec2b0644c604724d68cbc1ec68e4a4ebb879f93470cb80d1_prof);

        
        $__internal_8563c34199682ad6edf5d4bf45c9ed353540d67cd62c2c46feaaca9b94ae9260->leave($__internal_8563c34199682ad6edf5d4bf45c9ed353540d67cd62c2c46feaaca9b94ae9260_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_345320e508f249949924e692cada97b2d595cb0a1581250b681a9949b2a1cc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345320e508f249949924e692cada97b2d595cb0a1581250b681a9949b2a1cc4e->enter($__internal_345320e508f249949924e692cada97b2d595cb0a1581250b681a9949b2a1cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e1b918b20fc0d27a4bd0b01183bd0fbdacd833f8fe370e72f0c9bb7754bb920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1b918b20fc0d27a4bd0b01183bd0fbdacd833f8fe370e72f0c9bb7754bb920->enter($__internal_6e1b918b20fc0d27a4bd0b01183bd0fbdacd833f8fe370e72f0c9bb7754bb920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e1b918b20fc0d27a4bd0b01183bd0fbdacd833f8fe370e72f0c9bb7754bb920->leave($__internal_6e1b918b20fc0d27a4bd0b01183bd0fbdacd833f8fe370e72f0c9bb7754bb920_prof);

        
        $__internal_345320e508f249949924e692cada97b2d595cb0a1581250b681a9949b2a1cc4e->leave($__internal_345320e508f249949924e692cada97b2d595cb0a1581250b681a9949b2a1cc4e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb791c30cffced3b40e551e4179902d643c62eb6f97b82cfd39d7d56d3d365d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb791c30cffced3b40e551e4179902d643c62eb6f97b82cfd39d7d56d3d365d5->enter($__internal_bb791c30cffced3b40e551e4179902d643c62eb6f97b82cfd39d7d56d3d365d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b351db1a832709796844b312e4d584148ab11e18c7c7b3736048c03d2d2b8ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b351db1a832709796844b312e4d584148ab11e18c7c7b3736048c03d2d2b8ff6->enter($__internal_b351db1a832709796844b312e4d584148ab11e18c7c7b3736048c03d2d2b8ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b351db1a832709796844b312e4d584148ab11e18c7c7b3736048c03d2d2b8ff6->leave($__internal_b351db1a832709796844b312e4d584148ab11e18c7c7b3736048c03d2d2b8ff6_prof);

        
        $__internal_bb791c30cffced3b40e551e4179902d643c62eb6f97b82cfd39d7d56d3d365d5->leave($__internal_bb791c30cffced3b40e551e4179902d643c62eb6f97b82cfd39d7d56d3d365d5_prof);

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

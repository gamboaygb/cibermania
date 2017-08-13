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
        $__internal_318657d38c8388e7bec66b1dd28c12dee9ba2d0976db9f01b8fa1ddcc8c6ce89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318657d38c8388e7bec66b1dd28c12dee9ba2d0976db9f01b8fa1ddcc8c6ce89->enter($__internal_318657d38c8388e7bec66b1dd28c12dee9ba2d0976db9f01b8fa1ddcc8c6ce89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1d1fc3356007a7f71bd4a718ae97684b6768caeb7e3bc1cd1a4b3ed74d4b95bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1fc3356007a7f71bd4a718ae97684b6768caeb7e3bc1cd1a4b3ed74d4b95bb->enter($__internal_1d1fc3356007a7f71bd4a718ae97684b6768caeb7e3bc1cd1a4b3ed74d4b95bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318657d38c8388e7bec66b1dd28c12dee9ba2d0976db9f01b8fa1ddcc8c6ce89->leave($__internal_318657d38c8388e7bec66b1dd28c12dee9ba2d0976db9f01b8fa1ddcc8c6ce89_prof);

        
        $__internal_1d1fc3356007a7f71bd4a718ae97684b6768caeb7e3bc1cd1a4b3ed74d4b95bb->leave($__internal_1d1fc3356007a7f71bd4a718ae97684b6768caeb7e3bc1cd1a4b3ed74d4b95bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac765fd82ff6a19868141673d5091d6b868edb5cb2d7f3df0f4d5e3b28f8ed03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac765fd82ff6a19868141673d5091d6b868edb5cb2d7f3df0f4d5e3b28f8ed03->enter($__internal_ac765fd82ff6a19868141673d5091d6b868edb5cb2d7f3df0f4d5e3b28f8ed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_111781837d01a2825e3851563064a8f194a4c58834b7d14b89a0c828054e89f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111781837d01a2825e3851563064a8f194a4c58834b7d14b89a0c828054e89f2->enter($__internal_111781837d01a2825e3851563064a8f194a4c58834b7d14b89a0c828054e89f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_111781837d01a2825e3851563064a8f194a4c58834b7d14b89a0c828054e89f2->leave($__internal_111781837d01a2825e3851563064a8f194a4c58834b7d14b89a0c828054e89f2_prof);

        
        $__internal_ac765fd82ff6a19868141673d5091d6b868edb5cb2d7f3df0f4d5e3b28f8ed03->leave($__internal_ac765fd82ff6a19868141673d5091d6b868edb5cb2d7f3df0f4d5e3b28f8ed03_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e3abf2252c57c4282ea9a04fa165febd3688dd8e47746669466f7b8d0d2f858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3abf2252c57c4282ea9a04fa165febd3688dd8e47746669466f7b8d0d2f858->enter($__internal_6e3abf2252c57c4282ea9a04fa165febd3688dd8e47746669466f7b8d0d2f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95a08ee46b10a1fba467baa09f2d300d63f0575059a44eace654f3f1dfce01d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a08ee46b10a1fba467baa09f2d300d63f0575059a44eace654f3f1dfce01d6->enter($__internal_95a08ee46b10a1fba467baa09f2d300d63f0575059a44eace654f3f1dfce01d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95a08ee46b10a1fba467baa09f2d300d63f0575059a44eace654f3f1dfce01d6->leave($__internal_95a08ee46b10a1fba467baa09f2d300d63f0575059a44eace654f3f1dfce01d6_prof);

        
        $__internal_6e3abf2252c57c4282ea9a04fa165febd3688dd8e47746669466f7b8d0d2f858->leave($__internal_6e3abf2252c57c4282ea9a04fa165febd3688dd8e47746669466f7b8d0d2f858_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2b8304f417e42939708725c16d78e3a99ca8dbb4b7920cea7b01aaa47fd1c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b8304f417e42939708725c16d78e3a99ca8dbb4b7920cea7b01aaa47fd1c72->enter($__internal_a2b8304f417e42939708725c16d78e3a99ca8dbb4b7920cea7b01aaa47fd1c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3ab50334b9a08bb0720af8a8f1e6496cdb8354364b8612bd6c5a221005a34da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ab50334b9a08bb0720af8a8f1e6496cdb8354364b8612bd6c5a221005a34da->enter($__internal_f3ab50334b9a08bb0720af8a8f1e6496cdb8354364b8612bd6c5a221005a34da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f3ab50334b9a08bb0720af8a8f1e6496cdb8354364b8612bd6c5a221005a34da->leave($__internal_f3ab50334b9a08bb0720af8a8f1e6496cdb8354364b8612bd6c5a221005a34da_prof);

        
        $__internal_a2b8304f417e42939708725c16d78e3a99ca8dbb4b7920cea7b01aaa47fd1c72->leave($__internal_a2b8304f417e42939708725c16d78e3a99ca8dbb4b7920cea7b01aaa47fd1c72_prof);

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

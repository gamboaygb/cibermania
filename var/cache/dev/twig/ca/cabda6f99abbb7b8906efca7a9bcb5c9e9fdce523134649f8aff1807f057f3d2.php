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
        $__internal_355aec9787d287c445c59958ee329382234c39dfeee4bf38acaf5df69e24dedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355aec9787d287c445c59958ee329382234c39dfeee4bf38acaf5df69e24dedb->enter($__internal_355aec9787d287c445c59958ee329382234c39dfeee4bf38acaf5df69e24dedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6e1541a72d74784c87fcdcde8cbc7d0934679841a7119f965d134b91f1b6d20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1541a72d74784c87fcdcde8cbc7d0934679841a7119f965d134b91f1b6d20f->enter($__internal_6e1541a72d74784c87fcdcde8cbc7d0934679841a7119f965d134b91f1b6d20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355aec9787d287c445c59958ee329382234c39dfeee4bf38acaf5df69e24dedb->leave($__internal_355aec9787d287c445c59958ee329382234c39dfeee4bf38acaf5df69e24dedb_prof);

        
        $__internal_6e1541a72d74784c87fcdcde8cbc7d0934679841a7119f965d134b91f1b6d20f->leave($__internal_6e1541a72d74784c87fcdcde8cbc7d0934679841a7119f965d134b91f1b6d20f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cec18ec43c7d8317ea73e3d5c6207c2a9bb1cd761b6bddbc0258a3753458246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec18ec43c7d8317ea73e3d5c6207c2a9bb1cd761b6bddbc0258a3753458246d->enter($__internal_cec18ec43c7d8317ea73e3d5c6207c2a9bb1cd761b6bddbc0258a3753458246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b22bef827b4125d26d08d43bd811296752de3179ab358507debcbcaa1feee71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22bef827b4125d26d08d43bd811296752de3179ab358507debcbcaa1feee71d->enter($__internal_b22bef827b4125d26d08d43bd811296752de3179ab358507debcbcaa1feee71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b22bef827b4125d26d08d43bd811296752de3179ab358507debcbcaa1feee71d->leave($__internal_b22bef827b4125d26d08d43bd811296752de3179ab358507debcbcaa1feee71d_prof);

        
        $__internal_cec18ec43c7d8317ea73e3d5c6207c2a9bb1cd761b6bddbc0258a3753458246d->leave($__internal_cec18ec43c7d8317ea73e3d5c6207c2a9bb1cd761b6bddbc0258a3753458246d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c9689999238b42b8244c7b504ea1df814a33977d958b775160bb9c11bedaf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9689999238b42b8244c7b504ea1df814a33977d958b775160bb9c11bedaf59->enter($__internal_4c9689999238b42b8244c7b504ea1df814a33977d958b775160bb9c11bedaf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_294bf916d0cfacdda8fdf176f828a503558495c5cb7324f347e92972858d0207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294bf916d0cfacdda8fdf176f828a503558495c5cb7324f347e92972858d0207->enter($__internal_294bf916d0cfacdda8fdf176f828a503558495c5cb7324f347e92972858d0207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_294bf916d0cfacdda8fdf176f828a503558495c5cb7324f347e92972858d0207->leave($__internal_294bf916d0cfacdda8fdf176f828a503558495c5cb7324f347e92972858d0207_prof);

        
        $__internal_4c9689999238b42b8244c7b504ea1df814a33977d958b775160bb9c11bedaf59->leave($__internal_4c9689999238b42b8244c7b504ea1df814a33977d958b775160bb9c11bedaf59_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75bb219f89bcc2864b5badb890b52364a7eecfe19084b70ca04d000c5fbdb576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bb219f89bcc2864b5badb890b52364a7eecfe19084b70ca04d000c5fbdb576->enter($__internal_75bb219f89bcc2864b5badb890b52364a7eecfe19084b70ca04d000c5fbdb576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa2896862251168e5ca1ce6bd8a48d4bfa778457201eef481cc8c004213a3727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2896862251168e5ca1ce6bd8a48d4bfa778457201eef481cc8c004213a3727->enter($__internal_fa2896862251168e5ca1ce6bd8a48d4bfa778457201eef481cc8c004213a3727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fa2896862251168e5ca1ce6bd8a48d4bfa778457201eef481cc8c004213a3727->leave($__internal_fa2896862251168e5ca1ce6bd8a48d4bfa778457201eef481cc8c004213a3727_prof);

        
        $__internal_75bb219f89bcc2864b5badb890b52364a7eecfe19084b70ca04d000c5fbdb576->leave($__internal_75bb219f89bcc2864b5badb890b52364a7eecfe19084b70ca04d000c5fbdb576_prof);

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

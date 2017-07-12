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
        $__internal_c11d69fe01f2265ce4b0afae92dc2442097a85924417eecd54a571fd4c40cb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11d69fe01f2265ce4b0afae92dc2442097a85924417eecd54a571fd4c40cb35->enter($__internal_c11d69fe01f2265ce4b0afae92dc2442097a85924417eecd54a571fd4c40cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_30a1335838d41934b383a5110749e9016c295ab766478b2e26e1166de1a2503f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a1335838d41934b383a5110749e9016c295ab766478b2e26e1166de1a2503f->enter($__internal_30a1335838d41934b383a5110749e9016c295ab766478b2e26e1166de1a2503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11d69fe01f2265ce4b0afae92dc2442097a85924417eecd54a571fd4c40cb35->leave($__internal_c11d69fe01f2265ce4b0afae92dc2442097a85924417eecd54a571fd4c40cb35_prof);

        
        $__internal_30a1335838d41934b383a5110749e9016c295ab766478b2e26e1166de1a2503f->leave($__internal_30a1335838d41934b383a5110749e9016c295ab766478b2e26e1166de1a2503f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c2e24566b572c74dc95f753227146426716cb65a7fa052134fc58bbee3a37fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2e24566b572c74dc95f753227146426716cb65a7fa052134fc58bbee3a37fd->enter($__internal_6c2e24566b572c74dc95f753227146426716cb65a7fa052134fc58bbee3a37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a63f17dd0dc6ae38deb49790f38944afa61da6195678044a02a4e724b505c927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63f17dd0dc6ae38deb49790f38944afa61da6195678044a02a4e724b505c927->enter($__internal_a63f17dd0dc6ae38deb49790f38944afa61da6195678044a02a4e724b505c927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a63f17dd0dc6ae38deb49790f38944afa61da6195678044a02a4e724b505c927->leave($__internal_a63f17dd0dc6ae38deb49790f38944afa61da6195678044a02a4e724b505c927_prof);

        
        $__internal_6c2e24566b572c74dc95f753227146426716cb65a7fa052134fc58bbee3a37fd->leave($__internal_6c2e24566b572c74dc95f753227146426716cb65a7fa052134fc58bbee3a37fd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64167f4403dbeb1bb758611ab248fde215b875bcf843ba2fdca2683b43e7697b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64167f4403dbeb1bb758611ab248fde215b875bcf843ba2fdca2683b43e7697b->enter($__internal_64167f4403dbeb1bb758611ab248fde215b875bcf843ba2fdca2683b43e7697b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85a3844e60584e078b0f1bc81d34e151fc870bacb4e7e5468f144ec01b7bad13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a3844e60584e078b0f1bc81d34e151fc870bacb4e7e5468f144ec01b7bad13->enter($__internal_85a3844e60584e078b0f1bc81d34e151fc870bacb4e7e5468f144ec01b7bad13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85a3844e60584e078b0f1bc81d34e151fc870bacb4e7e5468f144ec01b7bad13->leave($__internal_85a3844e60584e078b0f1bc81d34e151fc870bacb4e7e5468f144ec01b7bad13_prof);

        
        $__internal_64167f4403dbeb1bb758611ab248fde215b875bcf843ba2fdca2683b43e7697b->leave($__internal_64167f4403dbeb1bb758611ab248fde215b875bcf843ba2fdca2683b43e7697b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4324f310f6985f967e09ebb3070adc3543055655eebd74c4acec541d3f85027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4324f310f6985f967e09ebb3070adc3543055655eebd74c4acec541d3f85027->enter($__internal_a4324f310f6985f967e09ebb3070adc3543055655eebd74c4acec541d3f85027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a2d0750309e1b7666efaf84dff698c0199e0a30c56b2ba4b50f6ee8a1b2ea38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2d0750309e1b7666efaf84dff698c0199e0a30c56b2ba4b50f6ee8a1b2ea38->enter($__internal_2a2d0750309e1b7666efaf84dff698c0199e0a30c56b2ba4b50f6ee8a1b2ea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2a2d0750309e1b7666efaf84dff698c0199e0a30c56b2ba4b50f6ee8a1b2ea38->leave($__internal_2a2d0750309e1b7666efaf84dff698c0199e0a30c56b2ba4b50f6ee8a1b2ea38_prof);

        
        $__internal_a4324f310f6985f967e09ebb3070adc3543055655eebd74c4acec541d3f85027->leave($__internal_a4324f310f6985f967e09ebb3070adc3543055655eebd74c4acec541d3f85027_prof);

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

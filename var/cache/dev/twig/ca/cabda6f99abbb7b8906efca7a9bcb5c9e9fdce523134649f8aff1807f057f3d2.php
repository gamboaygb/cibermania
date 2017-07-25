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
        $__internal_c1f82d15a4feb0576051c7c5782c0ae09aa251fdc4601c0d953079398643d882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f82d15a4feb0576051c7c5782c0ae09aa251fdc4601c0d953079398643d882->enter($__internal_c1f82d15a4feb0576051c7c5782c0ae09aa251fdc4601c0d953079398643d882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_67b756de03446ddbdf132433d1ef1ec3ef0d7ccea45b947b500baea7419cdd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b756de03446ddbdf132433d1ef1ec3ef0d7ccea45b947b500baea7419cdd6a->enter($__internal_67b756de03446ddbdf132433d1ef1ec3ef0d7ccea45b947b500baea7419cdd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f82d15a4feb0576051c7c5782c0ae09aa251fdc4601c0d953079398643d882->leave($__internal_c1f82d15a4feb0576051c7c5782c0ae09aa251fdc4601c0d953079398643d882_prof);

        
        $__internal_67b756de03446ddbdf132433d1ef1ec3ef0d7ccea45b947b500baea7419cdd6a->leave($__internal_67b756de03446ddbdf132433d1ef1ec3ef0d7ccea45b947b500baea7419cdd6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43fa86046bfa07756b603b381965441f27f7f553c7e7d40576040b83c93948d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fa86046bfa07756b603b381965441f27f7f553c7e7d40576040b83c93948d7->enter($__internal_43fa86046bfa07756b603b381965441f27f7f553c7e7d40576040b83c93948d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ddce34c5dd380ec87dfebae76c8394a0cdfde77f2fd7bc5a30accd89062e06f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddce34c5dd380ec87dfebae76c8394a0cdfde77f2fd7bc5a30accd89062e06f3->enter($__internal_ddce34c5dd380ec87dfebae76c8394a0cdfde77f2fd7bc5a30accd89062e06f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ddce34c5dd380ec87dfebae76c8394a0cdfde77f2fd7bc5a30accd89062e06f3->leave($__internal_ddce34c5dd380ec87dfebae76c8394a0cdfde77f2fd7bc5a30accd89062e06f3_prof);

        
        $__internal_43fa86046bfa07756b603b381965441f27f7f553c7e7d40576040b83c93948d7->leave($__internal_43fa86046bfa07756b603b381965441f27f7f553c7e7d40576040b83c93948d7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02216eda4e0e9af5cf80334adb2cca7f45f8dfa1ed085235f5b9075f79b08b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02216eda4e0e9af5cf80334adb2cca7f45f8dfa1ed085235f5b9075f79b08b00->enter($__internal_02216eda4e0e9af5cf80334adb2cca7f45f8dfa1ed085235f5b9075f79b08b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47db5d6b7369f8e2b2b8d3722191e77b9d1539285a1618c8d2e5c6c60025f9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47db5d6b7369f8e2b2b8d3722191e77b9d1539285a1618c8d2e5c6c60025f9f8->enter($__internal_47db5d6b7369f8e2b2b8d3722191e77b9d1539285a1618c8d2e5c6c60025f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47db5d6b7369f8e2b2b8d3722191e77b9d1539285a1618c8d2e5c6c60025f9f8->leave($__internal_47db5d6b7369f8e2b2b8d3722191e77b9d1539285a1618c8d2e5c6c60025f9f8_prof);

        
        $__internal_02216eda4e0e9af5cf80334adb2cca7f45f8dfa1ed085235f5b9075f79b08b00->leave($__internal_02216eda4e0e9af5cf80334adb2cca7f45f8dfa1ed085235f5b9075f79b08b00_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4cfd0119eb2ec08149ce76436eedd5ce4a3e69ee3264b3da66efe5849b3ca10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cfd0119eb2ec08149ce76436eedd5ce4a3e69ee3264b3da66efe5849b3ca10->enter($__internal_a4cfd0119eb2ec08149ce76436eedd5ce4a3e69ee3264b3da66efe5849b3ca10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4692f500f00135ec8f69acc1cbb8d99b1ee33ef14b89e5981c148b02cc97198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4692f500f00135ec8f69acc1cbb8d99b1ee33ef14b89e5981c148b02cc97198f->enter($__internal_4692f500f00135ec8f69acc1cbb8d99b1ee33ef14b89e5981c148b02cc97198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4692f500f00135ec8f69acc1cbb8d99b1ee33ef14b89e5981c148b02cc97198f->leave($__internal_4692f500f00135ec8f69acc1cbb8d99b1ee33ef14b89e5981c148b02cc97198f_prof);

        
        $__internal_a4cfd0119eb2ec08149ce76436eedd5ce4a3e69ee3264b3da66efe5849b3ca10->leave($__internal_a4cfd0119eb2ec08149ce76436eedd5ce4a3e69ee3264b3da66efe5849b3ca10_prof);

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

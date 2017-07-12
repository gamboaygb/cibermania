<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebbc126ac8431326cea531be00ffb5fdcd78921fc0ffd37e43c12b166ec368c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbc126ac8431326cea531be00ffb5fdcd78921fc0ffd37e43c12b166ec368c0->enter($__internal_ebbc126ac8431326cea531be00ffb5fdcd78921fc0ffd37e43c12b166ec368c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f6b16650972255afb0e12748d85ed2a9a8b0689001ac0ce28ab7c4ebde71bb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b16650972255afb0e12748d85ed2a9a8b0689001ac0ce28ab7c4ebde71bb77->enter($__internal_f6b16650972255afb0e12748d85ed2a9a8b0689001ac0ce28ab7c4ebde71bb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Cibermania</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/front.css"), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
</head>
<body id=\"";
        // line 10
        $this->displayBlock('id', $context, $blocks);
        echo "\">
<div class=\"container-fuid\">
    ";
        // line 12
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "

    <section>
        <footer class=\"col-12\">

            &copy; ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cibermania
        </footer>
    </section>
    ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
</div>
</body>
</html>

";
        
        $__internal_ebbc126ac8431326cea531be00ffb5fdcd78921fc0ffd37e43c12b166ec368c0->leave($__internal_ebbc126ac8431326cea531be00ffb5fdcd78921fc0ffd37e43c12b166ec368c0_prof);

        
        $__internal_f6b16650972255afb0e12748d85ed2a9a8b0689001ac0ce28ab7c4ebde71bb77->leave($__internal_f6b16650972255afb0e12748d85ed2a9a8b0689001ac0ce28ab7c4ebde71bb77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d717ffd874b5e69b8c022a759208f3a0dee7a10b4bcc0bad077a188688332f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d717ffd874b5e69b8c022a759208f3a0dee7a10b4bcc0bad077a188688332f->enter($__internal_40d717ffd874b5e69b8c022a759208f3a0dee7a10b4bcc0bad077a188688332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e45b90cec6e9ac6425e3736ccc0e104b1c58943ec76c9a47ef6c107ecc428112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45b90cec6e9ac6425e3736ccc0e104b1c58943ec76c9a47ef6c107ecc428112->enter($__internal_e45b90cec6e9ac6425e3736ccc0e104b1c58943ec76c9a47ef6c107ecc428112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e45b90cec6e9ac6425e3736ccc0e104b1c58943ec76c9a47ef6c107ecc428112->leave($__internal_e45b90cec6e9ac6425e3736ccc0e104b1c58943ec76c9a47ef6c107ecc428112_prof);

        
        $__internal_40d717ffd874b5e69b8c022a759208f3a0dee7a10b4bcc0bad077a188688332f->leave($__internal_40d717ffd874b5e69b8c022a759208f3a0dee7a10b4bcc0bad077a188688332f_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_ef72954d6fe9e643a9d58c5c7116d6a6e3c07424525da7029d6d276f121ea5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef72954d6fe9e643a9d58c5c7116d6a6e3c07424525da7029d6d276f121ea5e4->enter($__internal_ef72954d6fe9e643a9d58c5c7116d6a6e3c07424525da7029d6d276f121ea5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_230ed48b56926e43bfdd730e51b1ee5149afa6c23a79e758b1537787dfb89a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230ed48b56926e43bfdd730e51b1ee5149afa6c23a79e758b1537787dfb89a38->enter($__internal_230ed48b56926e43bfdd730e51b1ee5149afa6c23a79e758b1537787dfb89a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_230ed48b56926e43bfdd730e51b1ee5149afa6c23a79e758b1537787dfb89a38->leave($__internal_230ed48b56926e43bfdd730e51b1ee5149afa6c23a79e758b1537787dfb89a38_prof);

        
        $__internal_ef72954d6fe9e643a9d58c5c7116d6a6e3c07424525da7029d6d276f121ea5e4->leave($__internal_ef72954d6fe9e643a9d58c5c7116d6a6e3c07424525da7029d6d276f121ea5e4_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_05977d364f6af1385fb7aa76e52bd2c34a69f87a241cf09245c8eab9c43ca45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05977d364f6af1385fb7aa76e52bd2c34a69f87a241cf09245c8eab9c43ca45c->enter($__internal_05977d364f6af1385fb7aa76e52bd2c34a69f87a241cf09245c8eab9c43ca45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_38808c4cf6cf6326294c9c6c833a4256c118955c52473fb2d992223b49f69e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38808c4cf6cf6326294c9c6c833a4256c118955c52473fb2d992223b49f69e33->enter($__internal_38808c4cf6cf6326294c9c6c833a4256c118955c52473fb2d992223b49f69e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_38808c4cf6cf6326294c9c6c833a4256c118955c52473fb2d992223b49f69e33->leave($__internal_38808c4cf6cf6326294c9c6c833a4256c118955c52473fb2d992223b49f69e33_prof);

        
        $__internal_05977d364f6af1385fb7aa76e52bd2c34a69f87a241cf09245c8eab9c43ca45c->leave($__internal_05977d364f6af1385fb7aa76e52bd2c34a69f87a241cf09245c8eab9c43ca45c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_443dda64628a47e754eb5fbe2c0e1cd2743999310ba6c25cc5849522d88afb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443dda64628a47e754eb5fbe2c0e1cd2743999310ba6c25cc5849522d88afb68->enter($__internal_443dda64628a47e754eb5fbe2c0e1cd2743999310ba6c25cc5849522d88afb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b35294cb24263efc315580282d792165d4cf432996ff6958be664ba2e4eec88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b35294cb24263efc315580282d792165d4cf432996ff6958be664ba2e4eec88->enter($__internal_4b35294cb24263efc315580282d792165d4cf432996ff6958be664ba2e4eec88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b35294cb24263efc315580282d792165d4cf432996ff6958be664ba2e4eec88->leave($__internal_4b35294cb24263efc315580282d792165d4cf432996ff6958be664ba2e4eec88_prof);

        
        $__internal_443dda64628a47e754eb5fbe2c0e1cd2743999310ba6c25cc5849522d88afb68->leave($__internal_443dda64628a47e754eb5fbe2c0e1cd2743999310ba6c25cc5849522d88afb68_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18d65f790dc8664b0e304fe7832a2dd869507e992f99227f3497acf0b8cec940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d65f790dc8664b0e304fe7832a2dd869507e992f99227f3497acf0b8cec940->enter($__internal_18d65f790dc8664b0e304fe7832a2dd869507e992f99227f3497acf0b8cec940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1088f373bf8064241dfccfa4f952d00a50a7de8d59df988808d9d77d0f9427c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1088f373bf8064241dfccfa4f952d00a50a7de8d59df988808d9d77d0f9427c0->enter($__internal_1088f373bf8064241dfccfa4f952d00a50a7de8d59df988808d9d77d0f9427c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/font-awsome.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_1088f373bf8064241dfccfa4f952d00a50a7de8d59df988808d9d77d0f9427c0->leave($__internal_1088f373bf8064241dfccfa4f952d00a50a7de8d59df988808d9d77d0f9427c0_prof);

        
        $__internal_18d65f790dc8664b0e304fe7832a2dd869507e992f99227f3497acf0b8cec940->leave($__internal_18d65f790dc8664b0e304fe7832a2dd869507e992f99227f3497acf0b8cec940_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 27,  181 => 26,  177 => 25,  171 => 23,  162 => 22,  145 => 13,  128 => 12,  110 => 10,  93 => 5,  78 => 29,  76 => 22,  70 => 19,  63 => 14,  60 => 13,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>{% block title %}{% endblock %} | Cibermania</title>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/front.css') }}\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png') }}\" />
</head>
<body id=\"{% block id '' %}\">
<div class=\"container-fuid\">
    {% block sidebar %}{% endblock %}
    {% block body %}{% endblock %}


    <section>
        <footer class=\"col-12\">

            &copy; {{ 'now' | date('Y') }} - Cibermania
        </footer>
    </section>
    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/font-awsome.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
    {% endblock %}

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

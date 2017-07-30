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
            'stylesheet' => array($this, 'block_stylesheet'),
            'css' => array($this, 'block_css'),
            'id' => array($this, 'block_id'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910493c19848349b2e15433c70e6b92876fddfbf9e9af081b8cf95bee4ead777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910493c19848349b2e15433c70e6b92876fddfbf9e9af081b8cf95bee4ead777->enter($__internal_910493c19848349b2e15433c70e6b92876fddfbf9e9af081b8cf95bee4ead777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b19bce0150cc1a3a40418fb44fe5876dcaf590e180c270c2eaee4f61229f7aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19bce0150cc1a3a40418fb44fe5876dcaf590e180c270c2eaee4f61229f7aef->enter($__internal_b19bce0150cc1a3a40418fb44fe5876dcaf590e180c270c2eaee4f61229f7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Cibermania</title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 11
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body id=\"";
        // line 13
        $this->displayBlock('id', $context, $blocks);
        echo "\">
<div class=\"container-fuid\">
    ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
</div>
";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "</body>
</html>

";
        
        $__internal_910493c19848349b2e15433c70e6b92876fddfbf9e9af081b8cf95bee4ead777->leave($__internal_910493c19848349b2e15433c70e6b92876fddfbf9e9af081b8cf95bee4ead777_prof);

        
        $__internal_b19bce0150cc1a3a40418fb44fe5876dcaf590e180c270c2eaee4f61229f7aef->leave($__internal_b19bce0150cc1a3a40418fb44fe5876dcaf590e180c270c2eaee4f61229f7aef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad133c602f149c4c6264bf4f7966abca5bc70df4b3788b76e4276da080b10b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad133c602f149c4c6264bf4f7966abca5bc70df4b3788b76e4276da080b10b0->enter($__internal_9ad133c602f149c4c6264bf4f7966abca5bc70df4b3788b76e4276da080b10b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d39eec4c68ed6d78d92f82b9c4e6ce4d222b2b46ce699e4b7de22042f420ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d39eec4c68ed6d78d92f82b9c4e6ce4d222b2b46ce699e4b7de22042f420ab5->enter($__internal_5d39eec4c68ed6d78d92f82b9c4e6ce4d222b2b46ce699e4b7de22042f420ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5d39eec4c68ed6d78d92f82b9c4e6ce4d222b2b46ce699e4b7de22042f420ab5->leave($__internal_5d39eec4c68ed6d78d92f82b9c4e6ce4d222b2b46ce699e4b7de22042f420ab5_prof);

        
        $__internal_9ad133c602f149c4c6264bf4f7966abca5bc70df4b3788b76e4276da080b10b0->leave($__internal_9ad133c602f149c4c6264bf4f7966abca5bc70df4b3788b76e4276da080b10b0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5eb88ae60f58ff29180bcf9eaca3df479878071e3424a0efbead6fa6ff5790e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb88ae60f58ff29180bcf9eaca3df479878071e3424a0efbead6fa6ff5790e6->enter($__internal_5eb88ae60f58ff29180bcf9eaca3df479878071e3424a0efbead6fa6ff5790e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_66b43ddccb4043552a332d93bd6fdc471901fab20553ff87de190585ba4d470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b43ddccb4043552a332d93bd6fdc471901fab20553ff87de190585ba4d470a->enter($__internal_66b43ddccb4043552a332d93bd6fdc471901fab20553ff87de190585ba4d470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/front.css"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "    ";
        
        $__internal_66b43ddccb4043552a332d93bd6fdc471901fab20553ff87de190585ba4d470a->leave($__internal_66b43ddccb4043552a332d93bd6fdc471901fab20553ff87de190585ba4d470a_prof);

        
        $__internal_5eb88ae60f58ff29180bcf9eaca3df479878071e3424a0efbead6fa6ff5790e6->leave($__internal_5eb88ae60f58ff29180bcf9eaca3df479878071e3424a0efbead6fa6ff5790e6_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_f69e5964161a73a812c11a8719108a08bbbee2d0fe02a58fe7a68177163fab1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69e5964161a73a812c11a8719108a08bbbee2d0fe02a58fe7a68177163fab1b->enter($__internal_f69e5964161a73a812c11a8719108a08bbbee2d0fe02a58fe7a68177163fab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f1da04b897b3c02640bde12600ec93fe6224c1f09e9a1000f530545fb23b9592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1da04b897b3c02640bde12600ec93fe6224c1f09e9a1000f530545fb23b9592->enter($__internal_f1da04b897b3c02640bde12600ec93fe6224c1f09e9a1000f530545fb23b9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_f1da04b897b3c02640bde12600ec93fe6224c1f09e9a1000f530545fb23b9592->leave($__internal_f1da04b897b3c02640bde12600ec93fe6224c1f09e9a1000f530545fb23b9592_prof);

        
        $__internal_f69e5964161a73a812c11a8719108a08bbbee2d0fe02a58fe7a68177163fab1b->leave($__internal_f69e5964161a73a812c11a8719108a08bbbee2d0fe02a58fe7a68177163fab1b_prof);

    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        $__internal_0be3d041055bbb1a2aa804edf5df5968eddb6b6c73402b3655add0e51786d491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be3d041055bbb1a2aa804edf5df5968eddb6b6c73402b3655add0e51786d491->enter($__internal_0be3d041055bbb1a2aa804edf5df5968eddb6b6c73402b3655add0e51786d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_6da2014caa9d2eb23a27f8c5fc6bd696f67fa0dc3b71adc865f24b97c0a70739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da2014caa9d2eb23a27f8c5fc6bd696f67fa0dc3b71adc865f24b97c0a70739->enter($__internal_6da2014caa9d2eb23a27f8c5fc6bd696f67fa0dc3b71adc865f24b97c0a70739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_6da2014caa9d2eb23a27f8c5fc6bd696f67fa0dc3b71adc865f24b97c0a70739->leave($__internal_6da2014caa9d2eb23a27f8c5fc6bd696f67fa0dc3b71adc865f24b97c0a70739_prof);

        
        $__internal_0be3d041055bbb1a2aa804edf5df5968eddb6b6c73402b3655add0e51786d491->leave($__internal_0be3d041055bbb1a2aa804edf5df5968eddb6b6c73402b3655add0e51786d491_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8b13147e2cdbb844edb228f85c94ae4f59cc7fffd49bb09892461c34277da12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b13147e2cdbb844edb228f85c94ae4f59cc7fffd49bb09892461c34277da12f->enter($__internal_8b13147e2cdbb844edb228f85c94ae4f59cc7fffd49bb09892461c34277da12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_ce533cad935884e0b65ff48bca1c47a8a1bbf1bfd3157b7594aeeab72c8bfdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce533cad935884e0b65ff48bca1c47a8a1bbf1bfd3157b7594aeeab72c8bfdaf->enter($__internal_ce533cad935884e0b65ff48bca1c47a8a1bbf1bfd3157b7594aeeab72c8bfdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ce533cad935884e0b65ff48bca1c47a8a1bbf1bfd3157b7594aeeab72c8bfdaf->leave($__internal_ce533cad935884e0b65ff48bca1c47a8a1bbf1bfd3157b7594aeeab72c8bfdaf_prof);

        
        $__internal_8b13147e2cdbb844edb228f85c94ae4f59cc7fffd49bb09892461c34277da12f->leave($__internal_8b13147e2cdbb844edb228f85c94ae4f59cc7fffd49bb09892461c34277da12f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a6a8218476cbeabf16c1e6fb2d6149946c2d91d28174a514092c13612c313cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6a8218476cbeabf16c1e6fb2d6149946c2d91d28174a514092c13612c313cd->enter($__internal_5a6a8218476cbeabf16c1e6fb2d6149946c2d91d28174a514092c13612c313cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4947f7ce0328cf7868292e120ad7257d9af02295fab3b931087612f720317b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4947f7ce0328cf7868292e120ad7257d9af02295fab3b931087612f720317b52->enter($__internal_4947f7ce0328cf7868292e120ad7257d9af02295fab3b931087612f720317b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4947f7ce0328cf7868292e120ad7257d9af02295fab3b931087612f720317b52->leave($__internal_4947f7ce0328cf7868292e120ad7257d9af02295fab3b931087612f720317b52_prof);

        
        $__internal_5a6a8218476cbeabf16c1e6fb2d6149946c2d91d28174a514092c13612c313cd->leave($__internal_5a6a8218476cbeabf16c1e6fb2d6149946c2d91d28174a514092c13612c313cd_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c35ea2123521bc22eb0c9180a3b966d8296b533958e3b56c64688fc25c0efb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35ea2123521bc22eb0c9180a3b966d8296b533958e3b56c64688fc25c0efb78->enter($__internal_c35ea2123521bc22eb0c9180a3b966d8296b533958e3b56c64688fc25c0efb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_583e91d17efc5698f2fc50c32e6fab8262cdbe7d9403ce1c38955a2e4f8104a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583e91d17efc5698f2fc50c32e6fab8262cdbe7d9403ce1c38955a2e4f8104a6->enter($__internal_583e91d17efc5698f2fc50c32e6fab8262cdbe7d9403ce1c38955a2e4f8104a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_583e91d17efc5698f2fc50c32e6fab8262cdbe7d9403ce1c38955a2e4f8104a6->leave($__internal_583e91d17efc5698f2fc50c32e6fab8262cdbe7d9403ce1c38955a2e4f8104a6_prof);

        
        $__internal_c35ea2123521bc22eb0c9180a3b966d8296b533958e3b56c64688fc25c0efb78->leave($__internal_c35ea2123521bc22eb0c9180a3b966d8296b533958e3b56c64688fc25c0efb78_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb0dd3d3ba94fcdfc8f9d0736c451b6a2395b7a25df952faf2d54ba6db93a7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0dd3d3ba94fcdfc8f9d0736c451b6a2395b7a25df952faf2d54ba6db93a7db->enter($__internal_bb0dd3d3ba94fcdfc8f9d0736c451b6a2395b7a25df952faf2d54ba6db93a7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_152a83229b3eab1644717106047332c66aa78e3ea74131aca3aabb23786761fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152a83229b3eab1644717106047332c66aa78e3ea74131aca3aabb23786761fc->enter($__internal_152a83229b3eab1644717106047332c66aa78e3ea74131aca3aabb23786761fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/font-awsome.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
    <!--script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script-->
    ";
        // line 27
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_152a83229b3eab1644717106047332c66aa78e3ea74131aca3aabb23786761fc->leave($__internal_152a83229b3eab1644717106047332c66aa78e3ea74131aca3aabb23786761fc_prof);

        
        $__internal_bb0dd3d3ba94fcdfc8f9d0736c451b6a2395b7a25df952faf2d54ba6db93a7db->leave($__internal_bb0dd3d3ba94fcdfc8f9d0736c451b6a2395b7a25df952faf2d54ba6db93a7db_prof);

    }

    public function block_js($context, array $blocks = array())
    {
        $__internal_cd0b5e80ba20421df5733885a2a3b95bbf2b4cb21ccc86543e326ce6ccda1537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0b5e80ba20421df5733885a2a3b95bbf2b4cb21ccc86543e326ce6ccda1537->enter($__internal_cd0b5e80ba20421df5733885a2a3b95bbf2b4cb21ccc86543e326ce6ccda1537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_600a3b3b9f8453ce0dccd61d24bcd2cdc78f876c952019c3a94a72873baac5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600a3b3b9f8453ce0dccd61d24bcd2cdc78f876c952019c3a94a72873baac5b3->enter($__internal_600a3b3b9f8453ce0dccd61d24bcd2cdc78f876c952019c3a94a72873baac5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_600a3b3b9f8453ce0dccd61d24bcd2cdc78f876c952019c3a94a72873baac5b3->leave($__internal_600a3b3b9f8453ce0dccd61d24bcd2cdc78f876c952019c3a94a72873baac5b3_prof);

        
        $__internal_cd0b5e80ba20421df5733885a2a3b95bbf2b4cb21ccc86543e326ce6ccda1537->leave($__internal_cd0b5e80ba20421df5733885a2a3b95bbf2b4cb21ccc86543e326ce6ccda1537_prof);

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
        return array (  247 => 27,  242 => 25,  238 => 24,  234 => 23,  230 => 22,  225 => 21,  216 => 20,  199 => 19,  182 => 16,  165 => 15,  147 => 13,  130 => 9,  120 => 10,  118 => 9,  114 => 8,  109 => 7,  100 => 6,  83 => 5,  70 => 29,  68 => 20,  66 => 19,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  46 => 11,  44 => 6,  40 => 5,  34 => 1,);
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
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/front.css') }}\" />
        {% block css %}{% endblock %}
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body id=\"{% block id '' %}\">
<div class=\"container-fuid\">
    {% block sidebar %}{% endblock %}
    {% block body %}{% endblock %}

</div>
{% block footer %}{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/jquery-3.2.1.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/tether.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/font-awsome.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
    <!--script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script-->
    {% block js %}{% endblock %}
{% endblock %}
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

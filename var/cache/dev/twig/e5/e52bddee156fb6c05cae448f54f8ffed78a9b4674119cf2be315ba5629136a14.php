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
        $__internal_4e80a9fa88e4867dc633ba637087917acedea2b83e2c9a6af723116ecb52d925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e80a9fa88e4867dc633ba637087917acedea2b83e2c9a6af723116ecb52d925->enter($__internal_4e80a9fa88e4867dc633ba637087917acedea2b83e2c9a6af723116ecb52d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9f056e3fc3d097124ab69f65740d07fcc8cb868e3ebfe4b162a93d21ffed0264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f056e3fc3d097124ab69f65740d07fcc8cb868e3ebfe4b162a93d21ffed0264->enter($__internal_9f056e3fc3d097124ab69f65740d07fcc8cb868e3ebfe4b162a93d21ffed0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        // line 31
        echo "
</div>
</body>
</html>

";
        
        $__internal_4e80a9fa88e4867dc633ba637087917acedea2b83e2c9a6af723116ecb52d925->leave($__internal_4e80a9fa88e4867dc633ba637087917acedea2b83e2c9a6af723116ecb52d925_prof);

        
        $__internal_9f056e3fc3d097124ab69f65740d07fcc8cb868e3ebfe4b162a93d21ffed0264->leave($__internal_9f056e3fc3d097124ab69f65740d07fcc8cb868e3ebfe4b162a93d21ffed0264_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf5895b073404dfbb64a83327d4b62483793d61b70b21829370da2b142d8a16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5895b073404dfbb64a83327d4b62483793d61b70b21829370da2b142d8a16f->enter($__internal_bf5895b073404dfbb64a83327d4b62483793d61b70b21829370da2b142d8a16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acd21448ab09c5b7776aa60b397d08d61dc140536b1a509195a83922719ec463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd21448ab09c5b7776aa60b397d08d61dc140536b1a509195a83922719ec463->enter($__internal_acd21448ab09c5b7776aa60b397d08d61dc140536b1a509195a83922719ec463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_acd21448ab09c5b7776aa60b397d08d61dc140536b1a509195a83922719ec463->leave($__internal_acd21448ab09c5b7776aa60b397d08d61dc140536b1a509195a83922719ec463_prof);

        
        $__internal_bf5895b073404dfbb64a83327d4b62483793d61b70b21829370da2b142d8a16f->leave($__internal_bf5895b073404dfbb64a83327d4b62483793d61b70b21829370da2b142d8a16f_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_cf6416f33e4781a4fa5a49dd5c9b8bf91fa018b880edad87cad6d67a1aca4904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6416f33e4781a4fa5a49dd5c9b8bf91fa018b880edad87cad6d67a1aca4904->enter($__internal_cf6416f33e4781a4fa5a49dd5c9b8bf91fa018b880edad87cad6d67a1aca4904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_d208e689de1d5a249b2f8b37edca46c6364b82479636708b0deea8b04a28b262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d208e689de1d5a249b2f8b37edca46c6364b82479636708b0deea8b04a28b262->enter($__internal_d208e689de1d5a249b2f8b37edca46c6364b82479636708b0deea8b04a28b262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_d208e689de1d5a249b2f8b37edca46c6364b82479636708b0deea8b04a28b262->leave($__internal_d208e689de1d5a249b2f8b37edca46c6364b82479636708b0deea8b04a28b262_prof);

        
        $__internal_cf6416f33e4781a4fa5a49dd5c9b8bf91fa018b880edad87cad6d67a1aca4904->leave($__internal_cf6416f33e4781a4fa5a49dd5c9b8bf91fa018b880edad87cad6d67a1aca4904_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9e0ca25f7898b5a140175c97ba2ef75e20025ab629013a65704c6bdff77ba0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0ca25f7898b5a140175c97ba2ef75e20025ab629013a65704c6bdff77ba0c4->enter($__internal_9e0ca25f7898b5a140175c97ba2ef75e20025ab629013a65704c6bdff77ba0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_b6599e4796b15c6b9c89e50c69be32c02d04d625784913d4b91358c600486bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6599e4796b15c6b9c89e50c69be32c02d04d625784913d4b91358c600486bc7->enter($__internal_b6599e4796b15c6b9c89e50c69be32c02d04d625784913d4b91358c600486bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b6599e4796b15c6b9c89e50c69be32c02d04d625784913d4b91358c600486bc7->leave($__internal_b6599e4796b15c6b9c89e50c69be32c02d04d625784913d4b91358c600486bc7_prof);

        
        $__internal_9e0ca25f7898b5a140175c97ba2ef75e20025ab629013a65704c6bdff77ba0c4->leave($__internal_9e0ca25f7898b5a140175c97ba2ef75e20025ab629013a65704c6bdff77ba0c4_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_738e4be87e049028abaf0e442467ee8537281ee28397ad07fcbe62396f111dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738e4be87e049028abaf0e442467ee8537281ee28397ad07fcbe62396f111dd4->enter($__internal_738e4be87e049028abaf0e442467ee8537281ee28397ad07fcbe62396f111dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1921219033ac24ca1079f60a0034fed6ecd0a84e83e11f3879ec67dee3dd812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1921219033ac24ca1079f60a0034fed6ecd0a84e83e11f3879ec67dee3dd812->enter($__internal_d1921219033ac24ca1079f60a0034fed6ecd0a84e83e11f3879ec67dee3dd812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1921219033ac24ca1079f60a0034fed6ecd0a84e83e11f3879ec67dee3dd812->leave($__internal_d1921219033ac24ca1079f60a0034fed6ecd0a84e83e11f3879ec67dee3dd812_prof);

        
        $__internal_738e4be87e049028abaf0e442467ee8537281ee28397ad07fcbe62396f111dd4->leave($__internal_738e4be87e049028abaf0e442467ee8537281ee28397ad07fcbe62396f111dd4_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_648ca6374ec9ba0cc98ee8e4ae1ae011eee7e5da7926e793ab8b2661209c2db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648ca6374ec9ba0cc98ee8e4ae1ae011eee7e5da7926e793ab8b2661209c2db8->enter($__internal_648ca6374ec9ba0cc98ee8e4ae1ae011eee7e5da7926e793ab8b2661209c2db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_229e99e2279ac47a5d6f054dfce80fc77c148c05de1778d0c7803a45d4fc78c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229e99e2279ac47a5d6f054dfce80fc77c148c05de1778d0c7803a45d4fc78c3->enter($__internal_229e99e2279ac47a5d6f054dfce80fc77c148c05de1778d0c7803a45d4fc78c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/tether.min.js"), "html", null, true);
        echo "\"></script>
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
        <script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_229e99e2279ac47a5d6f054dfce80fc77c148c05de1778d0c7803a45d4fc78c3->leave($__internal_229e99e2279ac47a5d6f054dfce80fc77c148c05de1778d0c7803a45d4fc78c3_prof);

        
        $__internal_648ca6374ec9ba0cc98ee8e4ae1ae011eee7e5da7926e793ab8b2661209c2db8->leave($__internal_648ca6374ec9ba0cc98ee8e4ae1ae011eee7e5da7926e793ab8b2661209c2db8_prof);

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
        return array (  193 => 29,  188 => 27,  184 => 26,  180 => 25,  176 => 24,  171 => 23,  162 => 22,  145 => 13,  128 => 12,  110 => 10,  93 => 5,  78 => 31,  76 => 22,  70 => 19,  63 => 14,  60 => 13,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
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
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/tether.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/font-awsome.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
        <script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
    {% endblock %}

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

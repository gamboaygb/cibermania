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
        $__internal_0551d088622e3b9f2b9b431e5a7f7649486a4d4234329dd2ec14278b69010a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0551d088622e3b9f2b9b431e5a7f7649486a4d4234329dd2ec14278b69010a5e->enter($__internal_0551d088622e3b9f2b9b431e5a7f7649486a4d4234329dd2ec14278b69010a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_baa671e68259de106556cf4998c3e53c69e60be321d0659d2a2730c1542f3210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa671e68259de106556cf4998c3e53c69e60be321d0659d2a2730c1542f3210->enter($__internal_baa671e68259de106556cf4998c3e53c69e60be321d0659d2a2730c1542f3210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0551d088622e3b9f2b9b431e5a7f7649486a4d4234329dd2ec14278b69010a5e->leave($__internal_0551d088622e3b9f2b9b431e5a7f7649486a4d4234329dd2ec14278b69010a5e_prof);

        
        $__internal_baa671e68259de106556cf4998c3e53c69e60be321d0659d2a2730c1542f3210->leave($__internal_baa671e68259de106556cf4998c3e53c69e60be321d0659d2a2730c1542f3210_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b256ef3002642bc4c5d735714ff13ac22a06f1e602c27b6cf2a5807826dd4b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b256ef3002642bc4c5d735714ff13ac22a06f1e602c27b6cf2a5807826dd4b50->enter($__internal_b256ef3002642bc4c5d735714ff13ac22a06f1e602c27b6cf2a5807826dd4b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cb8401e822ea50b644622e59d45c79a819ea7c278b2a835c58108072e7ddf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb8401e822ea50b644622e59d45c79a819ea7c278b2a835c58108072e7ddf5d->enter($__internal_2cb8401e822ea50b644622e59d45c79a819ea7c278b2a835c58108072e7ddf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2cb8401e822ea50b644622e59d45c79a819ea7c278b2a835c58108072e7ddf5d->leave($__internal_2cb8401e822ea50b644622e59d45c79a819ea7c278b2a835c58108072e7ddf5d_prof);

        
        $__internal_b256ef3002642bc4c5d735714ff13ac22a06f1e602c27b6cf2a5807826dd4b50->leave($__internal_b256ef3002642bc4c5d735714ff13ac22a06f1e602c27b6cf2a5807826dd4b50_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_3c75030c4188df6e602afca6afc1f3b57ffb5bf493ea5305b874c8a938dc253d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c75030c4188df6e602afca6afc1f3b57ffb5bf493ea5305b874c8a938dc253d->enter($__internal_3c75030c4188df6e602afca6afc1f3b57ffb5bf493ea5305b874c8a938dc253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_ed4c27ec3c0d5b9595d9b6a5b36601e8b13b0a48ff8d5870e6ef84ac41544550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4c27ec3c0d5b9595d9b6a5b36601e8b13b0a48ff8d5870e6ef84ac41544550->enter($__internal_ed4c27ec3c0d5b9595d9b6a5b36601e8b13b0a48ff8d5870e6ef84ac41544550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_ed4c27ec3c0d5b9595d9b6a5b36601e8b13b0a48ff8d5870e6ef84ac41544550->leave($__internal_ed4c27ec3c0d5b9595d9b6a5b36601e8b13b0a48ff8d5870e6ef84ac41544550_prof);

        
        $__internal_3c75030c4188df6e602afca6afc1f3b57ffb5bf493ea5305b874c8a938dc253d->leave($__internal_3c75030c4188df6e602afca6afc1f3b57ffb5bf493ea5305b874c8a938dc253d_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a252bfb67c466ee6a632c9d05b9d9eb21311488d7755d324b0a145e64806eff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a252bfb67c466ee6a632c9d05b9d9eb21311488d7755d324b0a145e64806eff7->enter($__internal_a252bfb67c466ee6a632c9d05b9d9eb21311488d7755d324b0a145e64806eff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_e52b6ae3d9030a3d96fdd40ed0512cb502d51010d43aa92e171599dc1de988c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52b6ae3d9030a3d96fdd40ed0512cb502d51010d43aa92e171599dc1de988c5->enter($__internal_e52b6ae3d9030a3d96fdd40ed0512cb502d51010d43aa92e171599dc1de988c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_e52b6ae3d9030a3d96fdd40ed0512cb502d51010d43aa92e171599dc1de988c5->leave($__internal_e52b6ae3d9030a3d96fdd40ed0512cb502d51010d43aa92e171599dc1de988c5_prof);

        
        $__internal_a252bfb67c466ee6a632c9d05b9d9eb21311488d7755d324b0a145e64806eff7->leave($__internal_a252bfb67c466ee6a632c9d05b9d9eb21311488d7755d324b0a145e64806eff7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8221056531edd0bc6570159dd4e369bb4ef3c326420946e07dff668e4c0ca73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8221056531edd0bc6570159dd4e369bb4ef3c326420946e07dff668e4c0ca73d->enter($__internal_8221056531edd0bc6570159dd4e369bb4ef3c326420946e07dff668e4c0ca73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5d83232293209b2f28d097bbce3b1bf63ab78567dda951139886472c9922f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d83232293209b2f28d097bbce3b1bf63ab78567dda951139886472c9922f3b->enter($__internal_e5d83232293209b2f28d097bbce3b1bf63ab78567dda951139886472c9922f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5d83232293209b2f28d097bbce3b1bf63ab78567dda951139886472c9922f3b->leave($__internal_e5d83232293209b2f28d097bbce3b1bf63ab78567dda951139886472c9922f3b_prof);

        
        $__internal_8221056531edd0bc6570159dd4e369bb4ef3c326420946e07dff668e4c0ca73d->leave($__internal_8221056531edd0bc6570159dd4e369bb4ef3c326420946e07dff668e4c0ca73d_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30a14978102f683721ea99d6b74daa928e245a36d5e91289d8ca4e10db48480a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a14978102f683721ea99d6b74daa928e245a36d5e91289d8ca4e10db48480a->enter($__internal_30a14978102f683721ea99d6b74daa928e245a36d5e91289d8ca4e10db48480a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6345f7ad4e80a9fd9c3145d030a1216af2198d9c011a4fea963babd15c5821d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6345f7ad4e80a9fd9c3145d030a1216af2198d9c011a4fea963babd15c5821d4->enter($__internal_6345f7ad4e80a9fd9c3145d030a1216af2198d9c011a4fea963babd15c5821d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6345f7ad4e80a9fd9c3145d030a1216af2198d9c011a4fea963babd15c5821d4->leave($__internal_6345f7ad4e80a9fd9c3145d030a1216af2198d9c011a4fea963babd15c5821d4_prof);

        
        $__internal_30a14978102f683721ea99d6b74daa928e245a36d5e91289d8ca4e10db48480a->leave($__internal_30a14978102f683721ea99d6b74daa928e245a36d5e91289d8ca4e10db48480a_prof);

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

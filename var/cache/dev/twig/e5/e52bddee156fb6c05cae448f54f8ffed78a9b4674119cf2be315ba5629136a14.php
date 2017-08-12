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
        $__internal_9ebf4ddaace5ba48143af17e5f77813c0bd76dedc48939bd0f46815b28f50483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebf4ddaace5ba48143af17e5f77813c0bd76dedc48939bd0f46815b28f50483->enter($__internal_9ebf4ddaace5ba48143af17e5f77813c0bd76dedc48939bd0f46815b28f50483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6b2b772aad8da7ec434ef1f18d5afddbbd5ffbd428eaa6e526b47fa75cda7897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2b772aad8da7ec434ef1f18d5afddbbd5ffbd428eaa6e526b47fa75cda7897->enter($__internal_6b2b772aad8da7ec434ef1f18d5afddbbd5ffbd428eaa6e526b47fa75cda7897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9ebf4ddaace5ba48143af17e5f77813c0bd76dedc48939bd0f46815b28f50483->leave($__internal_9ebf4ddaace5ba48143af17e5f77813c0bd76dedc48939bd0f46815b28f50483_prof);

        
        $__internal_6b2b772aad8da7ec434ef1f18d5afddbbd5ffbd428eaa6e526b47fa75cda7897->leave($__internal_6b2b772aad8da7ec434ef1f18d5afddbbd5ffbd428eaa6e526b47fa75cda7897_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f023e1e3c0a9ae936f4f683a5417b41cc8e2f71eda441d95f267903e2dab422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f023e1e3c0a9ae936f4f683a5417b41cc8e2f71eda441d95f267903e2dab422->enter($__internal_6f023e1e3c0a9ae936f4f683a5417b41cc8e2f71eda441d95f267903e2dab422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b538b9250e9f148b170d99eb69e6d4d6d0c758c04afd5a52dba64fa5f93d7706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b538b9250e9f148b170d99eb69e6d4d6d0c758c04afd5a52dba64fa5f93d7706->enter($__internal_b538b9250e9f148b170d99eb69e6d4d6d0c758c04afd5a52dba64fa5f93d7706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b538b9250e9f148b170d99eb69e6d4d6d0c758c04afd5a52dba64fa5f93d7706->leave($__internal_b538b9250e9f148b170d99eb69e6d4d6d0c758c04afd5a52dba64fa5f93d7706_prof);

        
        $__internal_6f023e1e3c0a9ae936f4f683a5417b41cc8e2f71eda441d95f267903e2dab422->leave($__internal_6f023e1e3c0a9ae936f4f683a5417b41cc8e2f71eda441d95f267903e2dab422_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e2ec0da7725236d0a9c33ec30ba5a91feed82b9f7c9bd5fdcb836867dac36010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ec0da7725236d0a9c33ec30ba5a91feed82b9f7c9bd5fdcb836867dac36010->enter($__internal_e2ec0da7725236d0a9c33ec30ba5a91feed82b9f7c9bd5fdcb836867dac36010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e5fa5932cd01edbcc7934b29e99aae8b6fe93cb6cf722d5e65033e2e572f666c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa5932cd01edbcc7934b29e99aae8b6fe93cb6cf722d5e65033e2e572f666c->enter($__internal_e5fa5932cd01edbcc7934b29e99aae8b6fe93cb6cf722d5e65033e2e572f666c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_e5fa5932cd01edbcc7934b29e99aae8b6fe93cb6cf722d5e65033e2e572f666c->leave($__internal_e5fa5932cd01edbcc7934b29e99aae8b6fe93cb6cf722d5e65033e2e572f666c_prof);

        
        $__internal_e2ec0da7725236d0a9c33ec30ba5a91feed82b9f7c9bd5fdcb836867dac36010->leave($__internal_e2ec0da7725236d0a9c33ec30ba5a91feed82b9f7c9bd5fdcb836867dac36010_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_b56282d1abb82b47a544846b91c39ed581752dcd481fa01539de2a204d56ad9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56282d1abb82b47a544846b91c39ed581752dcd481fa01539de2a204d56ad9e->enter($__internal_b56282d1abb82b47a544846b91c39ed581752dcd481fa01539de2a204d56ad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_7bc55286b096f88358f0ebe80bcdccefb84821cbde8515d28dde59bba90ee07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc55286b096f88358f0ebe80bcdccefb84821cbde8515d28dde59bba90ee07e->enter($__internal_7bc55286b096f88358f0ebe80bcdccefb84821cbde8515d28dde59bba90ee07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_7bc55286b096f88358f0ebe80bcdccefb84821cbde8515d28dde59bba90ee07e->leave($__internal_7bc55286b096f88358f0ebe80bcdccefb84821cbde8515d28dde59bba90ee07e_prof);

        
        $__internal_b56282d1abb82b47a544846b91c39ed581752dcd481fa01539de2a204d56ad9e->leave($__internal_b56282d1abb82b47a544846b91c39ed581752dcd481fa01539de2a204d56ad9e_prof);

    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        $__internal_20bcce9f00e43e5c104eef6724e81472b79f7babf52e91507bf451f58bd64285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bcce9f00e43e5c104eef6724e81472b79f7babf52e91507bf451f58bd64285->enter($__internal_20bcce9f00e43e5c104eef6724e81472b79f7babf52e91507bf451f58bd64285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_a555816caa3617476d10334d978ab1a9a1e453ca6e3bc7d06b5e30b5a3176b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a555816caa3617476d10334d978ab1a9a1e453ca6e3bc7d06b5e30b5a3176b4d->enter($__internal_a555816caa3617476d10334d978ab1a9a1e453ca6e3bc7d06b5e30b5a3176b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_a555816caa3617476d10334d978ab1a9a1e453ca6e3bc7d06b5e30b5a3176b4d->leave($__internal_a555816caa3617476d10334d978ab1a9a1e453ca6e3bc7d06b5e30b5a3176b4d_prof);

        
        $__internal_20bcce9f00e43e5c104eef6724e81472b79f7babf52e91507bf451f58bd64285->leave($__internal_20bcce9f00e43e5c104eef6724e81472b79f7babf52e91507bf451f58bd64285_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_60d98244fcbddb633d8ecf0f89dd0a829e0eb3db99892af676ecffc6186e36ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d98244fcbddb633d8ecf0f89dd0a829e0eb3db99892af676ecffc6186e36ea->enter($__internal_60d98244fcbddb633d8ecf0f89dd0a829e0eb3db99892af676ecffc6186e36ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_da5c2885b4d934a26ff2ca9f7c7d0b951883d7c2416faae011604f429d732aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5c2885b4d934a26ff2ca9f7c7d0b951883d7c2416faae011604f429d732aa9->enter($__internal_da5c2885b4d934a26ff2ca9f7c7d0b951883d7c2416faae011604f429d732aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_da5c2885b4d934a26ff2ca9f7c7d0b951883d7c2416faae011604f429d732aa9->leave($__internal_da5c2885b4d934a26ff2ca9f7c7d0b951883d7c2416faae011604f429d732aa9_prof);

        
        $__internal_60d98244fcbddb633d8ecf0f89dd0a829e0eb3db99892af676ecffc6186e36ea->leave($__internal_60d98244fcbddb633d8ecf0f89dd0a829e0eb3db99892af676ecffc6186e36ea_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d6b5ea7d953acf2c682c73a71a01a80cbf3a8e93eeb62a0b51515b25b11ce5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6b5ea7d953acf2c682c73a71a01a80cbf3a8e93eeb62a0b51515b25b11ce5f->enter($__internal_5d6b5ea7d953acf2c682c73a71a01a80cbf3a8e93eeb62a0b51515b25b11ce5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bcf161e15f5194be673da4fa7e64e7203554fc15c1ecab8a9f99254d35a40ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcf161e15f5194be673da4fa7e64e7203554fc15c1ecab8a9f99254d35a40ad->enter($__internal_7bcf161e15f5194be673da4fa7e64e7203554fc15c1ecab8a9f99254d35a40ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bcf161e15f5194be673da4fa7e64e7203554fc15c1ecab8a9f99254d35a40ad->leave($__internal_7bcf161e15f5194be673da4fa7e64e7203554fc15c1ecab8a9f99254d35a40ad_prof);

        
        $__internal_5d6b5ea7d953acf2c682c73a71a01a80cbf3a8e93eeb62a0b51515b25b11ce5f->leave($__internal_5d6b5ea7d953acf2c682c73a71a01a80cbf3a8e93eeb62a0b51515b25b11ce5f_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cd61dd7651bd0f097f02ce9faf8b779200788db37fa537534f1a344aa46eacaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd61dd7651bd0f097f02ce9faf8b779200788db37fa537534f1a344aa46eacaf->enter($__internal_cd61dd7651bd0f097f02ce9faf8b779200788db37fa537534f1a344aa46eacaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d6399b6479f754c8aaf7e9e40893052412cbbe507c78690d5fc1780b2e04e123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6399b6479f754c8aaf7e9e40893052412cbbe507c78690d5fc1780b2e04e123->enter($__internal_d6399b6479f754c8aaf7e9e40893052412cbbe507c78690d5fc1780b2e04e123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d6399b6479f754c8aaf7e9e40893052412cbbe507c78690d5fc1780b2e04e123->leave($__internal_d6399b6479f754c8aaf7e9e40893052412cbbe507c78690d5fc1780b2e04e123_prof);

        
        $__internal_cd61dd7651bd0f097f02ce9faf8b779200788db37fa537534f1a344aa46eacaf->leave($__internal_cd61dd7651bd0f097f02ce9faf8b779200788db37fa537534f1a344aa46eacaf_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45420ac6473f68cbd0107ba9ea2d85b0f7c6e41bf8f8acc48145143259862241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45420ac6473f68cbd0107ba9ea2d85b0f7c6e41bf8f8acc48145143259862241->enter($__internal_45420ac6473f68cbd0107ba9ea2d85b0f7c6e41bf8f8acc48145143259862241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_33b50b9c585fd9c9ee42d6df43eb0a79cbec5a480a6f040b503e0b1147d3759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b50b9c585fd9c9ee42d6df43eb0a79cbec5a480a6f040b503e0b1147d3759a->enter($__internal_33b50b9c585fd9c9ee42d6df43eb0a79cbec5a480a6f040b503e0b1147d3759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_33b50b9c585fd9c9ee42d6df43eb0a79cbec5a480a6f040b503e0b1147d3759a->leave($__internal_33b50b9c585fd9c9ee42d6df43eb0a79cbec5a480a6f040b503e0b1147d3759a_prof);

        
        $__internal_45420ac6473f68cbd0107ba9ea2d85b0f7c6e41bf8f8acc48145143259862241->leave($__internal_45420ac6473f68cbd0107ba9ea2d85b0f7c6e41bf8f8acc48145143259862241_prof);

    }

    public function block_js($context, array $blocks = array())
    {
        $__internal_42a4008d01fcb815de2cd17ced964ceaf5ef731723a99fe5f6199e84e87cf7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a4008d01fcb815de2cd17ced964ceaf5ef731723a99fe5f6199e84e87cf7e5->enter($__internal_42a4008d01fcb815de2cd17ced964ceaf5ef731723a99fe5f6199e84e87cf7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_65f9a1488226effe930da8a28dcd39711fbb1d36c313d93332540bccda2dc3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f9a1488226effe930da8a28dcd39711fbb1d36c313d93332540bccda2dc3f2->enter($__internal_65f9a1488226effe930da8a28dcd39711fbb1d36c313d93332540bccda2dc3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_65f9a1488226effe930da8a28dcd39711fbb1d36c313d93332540bccda2dc3f2->leave($__internal_65f9a1488226effe930da8a28dcd39711fbb1d36c313d93332540bccda2dc3f2_prof);

        
        $__internal_42a4008d01fcb815de2cd17ced964ceaf5ef731723a99fe5f6199e84e87cf7e5->leave($__internal_42a4008d01fcb815de2cd17ced964ceaf5ef731723a99fe5f6199e84e87cf7e5_prof);

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

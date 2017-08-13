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
        $__internal_8dbff20784b8a3173cac6a682fdc7318d02247ee89d3c21d7a7e052fbd5d4460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbff20784b8a3173cac6a682fdc7318d02247ee89d3c21d7a7e052fbd5d4460->enter($__internal_8dbff20784b8a3173cac6a682fdc7318d02247ee89d3c21d7a7e052fbd5d4460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c34584b89eee96f631c412959e81f5e782a48c7f4ba75d35888b37a9a2966b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34584b89eee96f631c412959e81f5e782a48c7f4ba75d35888b37a9a2966b2e->enter($__internal_c34584b89eee96f631c412959e81f5e782a48c7f4ba75d35888b37a9a2966b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8dbff20784b8a3173cac6a682fdc7318d02247ee89d3c21d7a7e052fbd5d4460->leave($__internal_8dbff20784b8a3173cac6a682fdc7318d02247ee89d3c21d7a7e052fbd5d4460_prof);

        
        $__internal_c34584b89eee96f631c412959e81f5e782a48c7f4ba75d35888b37a9a2966b2e->leave($__internal_c34584b89eee96f631c412959e81f5e782a48c7f4ba75d35888b37a9a2966b2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_733304973a29706e4f3042d750801214f9273481d6a5cf3b61cd27e871bb9cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733304973a29706e4f3042d750801214f9273481d6a5cf3b61cd27e871bb9cd2->enter($__internal_733304973a29706e4f3042d750801214f9273481d6a5cf3b61cd27e871bb9cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd7d44ba8ed3d3172e034151f5883c41a13d019eaa773021976ddc4d7e7583e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7d44ba8ed3d3172e034151f5883c41a13d019eaa773021976ddc4d7e7583e7->enter($__internal_fd7d44ba8ed3d3172e034151f5883c41a13d019eaa773021976ddc4d7e7583e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd7d44ba8ed3d3172e034151f5883c41a13d019eaa773021976ddc4d7e7583e7->leave($__internal_fd7d44ba8ed3d3172e034151f5883c41a13d019eaa773021976ddc4d7e7583e7_prof);

        
        $__internal_733304973a29706e4f3042d750801214f9273481d6a5cf3b61cd27e871bb9cd2->leave($__internal_733304973a29706e4f3042d750801214f9273481d6a5cf3b61cd27e871bb9cd2_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_995ed7a81ce6a32ef13bce9eae4a83eac9076b0f1053f88636261a1c9652e891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995ed7a81ce6a32ef13bce9eae4a83eac9076b0f1053f88636261a1c9652e891->enter($__internal_995ed7a81ce6a32ef13bce9eae4a83eac9076b0f1053f88636261a1c9652e891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2e21302a3d32176a2755e1a8e98a90de5921d1e486c6d376d6e7a135d8af73d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e21302a3d32176a2755e1a8e98a90de5921d1e486c6d376d6e7a135d8af73d6->enter($__internal_2e21302a3d32176a2755e1a8e98a90de5921d1e486c6d376d6e7a135d8af73d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_2e21302a3d32176a2755e1a8e98a90de5921d1e486c6d376d6e7a135d8af73d6->leave($__internal_2e21302a3d32176a2755e1a8e98a90de5921d1e486c6d376d6e7a135d8af73d6_prof);

        
        $__internal_995ed7a81ce6a32ef13bce9eae4a83eac9076b0f1053f88636261a1c9652e891->leave($__internal_995ed7a81ce6a32ef13bce9eae4a83eac9076b0f1053f88636261a1c9652e891_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_ac92d16f45d5a3f433a750c33ab4dc483ae12abffa3d80e4a9a1293cb39920f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac92d16f45d5a3f433a750c33ab4dc483ae12abffa3d80e4a9a1293cb39920f8->enter($__internal_ac92d16f45d5a3f433a750c33ab4dc483ae12abffa3d80e4a9a1293cb39920f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_1a9b4dad49e653610bf9b50a4a45a8d479bf81d4be918616a531760d56f01e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9b4dad49e653610bf9b50a4a45a8d479bf81d4be918616a531760d56f01e7b->enter($__internal_1a9b4dad49e653610bf9b50a4a45a8d479bf81d4be918616a531760d56f01e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_1a9b4dad49e653610bf9b50a4a45a8d479bf81d4be918616a531760d56f01e7b->leave($__internal_1a9b4dad49e653610bf9b50a4a45a8d479bf81d4be918616a531760d56f01e7b_prof);

        
        $__internal_ac92d16f45d5a3f433a750c33ab4dc483ae12abffa3d80e4a9a1293cb39920f8->leave($__internal_ac92d16f45d5a3f433a750c33ab4dc483ae12abffa3d80e4a9a1293cb39920f8_prof);

    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        $__internal_5f74de561340c04a4f9789767c81e87db8389845db909338ccff181cb605af5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f74de561340c04a4f9789767c81e87db8389845db909338ccff181cb605af5f->enter($__internal_5f74de561340c04a4f9789767c81e87db8389845db909338ccff181cb605af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_779179d416eb152050012a6a9d8b678101ab25e01ffa78afb826fe3935001251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779179d416eb152050012a6a9d8b678101ab25e01ffa78afb826fe3935001251->enter($__internal_779179d416eb152050012a6a9d8b678101ab25e01ffa78afb826fe3935001251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_779179d416eb152050012a6a9d8b678101ab25e01ffa78afb826fe3935001251->leave($__internal_779179d416eb152050012a6a9d8b678101ab25e01ffa78afb826fe3935001251_prof);

        
        $__internal_5f74de561340c04a4f9789767c81e87db8389845db909338ccff181cb605af5f->leave($__internal_5f74de561340c04a4f9789767c81e87db8389845db909338ccff181cb605af5f_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_09829bd4111619bfeb17fe9420fc841b209979b34bf7425fd9f4229df5b4a4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09829bd4111619bfeb17fe9420fc841b209979b34bf7425fd9f4229df5b4a4f5->enter($__internal_09829bd4111619bfeb17fe9420fc841b209979b34bf7425fd9f4229df5b4a4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4da85c4a26cdaba76de19cd2b622685590fbf77c37661c17adde4fe29537c8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da85c4a26cdaba76de19cd2b622685590fbf77c37661c17adde4fe29537c8c1->enter($__internal_4da85c4a26cdaba76de19cd2b622685590fbf77c37661c17adde4fe29537c8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4da85c4a26cdaba76de19cd2b622685590fbf77c37661c17adde4fe29537c8c1->leave($__internal_4da85c4a26cdaba76de19cd2b622685590fbf77c37661c17adde4fe29537c8c1_prof);

        
        $__internal_09829bd4111619bfeb17fe9420fc841b209979b34bf7425fd9f4229df5b4a4f5->leave($__internal_09829bd4111619bfeb17fe9420fc841b209979b34bf7425fd9f4229df5b4a4f5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_63c7f6fcea14930eccf7382490e3c907bbfe6d4c5dacc7d0e5d136e8a394c287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c7f6fcea14930eccf7382490e3c907bbfe6d4c5dacc7d0e5d136e8a394c287->enter($__internal_63c7f6fcea14930eccf7382490e3c907bbfe6d4c5dacc7d0e5d136e8a394c287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0866c5ccf0475b0c2d34dac62c6da8e1d0036a96f91c084d83747fc4ec7ef906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0866c5ccf0475b0c2d34dac62c6da8e1d0036a96f91c084d83747fc4ec7ef906->enter($__internal_0866c5ccf0475b0c2d34dac62c6da8e1d0036a96f91c084d83747fc4ec7ef906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0866c5ccf0475b0c2d34dac62c6da8e1d0036a96f91c084d83747fc4ec7ef906->leave($__internal_0866c5ccf0475b0c2d34dac62c6da8e1d0036a96f91c084d83747fc4ec7ef906_prof);

        
        $__internal_63c7f6fcea14930eccf7382490e3c907bbfe6d4c5dacc7d0e5d136e8a394c287->leave($__internal_63c7f6fcea14930eccf7382490e3c907bbfe6d4c5dacc7d0e5d136e8a394c287_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_83ef9f633abea8a22430f32a8396e19644eb93724a76bbcf0bfef3c5677aaa86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ef9f633abea8a22430f32a8396e19644eb93724a76bbcf0bfef3c5677aaa86->enter($__internal_83ef9f633abea8a22430f32a8396e19644eb93724a76bbcf0bfef3c5677aaa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0f5c5b5d412730ae3611ca6a21690647103459cba5f88a4c70b626a6038904d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5c5b5d412730ae3611ca6a21690647103459cba5f88a4c70b626a6038904d6->enter($__internal_0f5c5b5d412730ae3611ca6a21690647103459cba5f88a4c70b626a6038904d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_0f5c5b5d412730ae3611ca6a21690647103459cba5f88a4c70b626a6038904d6->leave($__internal_0f5c5b5d412730ae3611ca6a21690647103459cba5f88a4c70b626a6038904d6_prof);

        
        $__internal_83ef9f633abea8a22430f32a8396e19644eb93724a76bbcf0bfef3c5677aaa86->leave($__internal_83ef9f633abea8a22430f32a8396e19644eb93724a76bbcf0bfef3c5677aaa86_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea654558ea1ad51ee70116aa84927c2e07d777427904262efb91164680c50506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea654558ea1ad51ee70116aa84927c2e07d777427904262efb91164680c50506->enter($__internal_ea654558ea1ad51ee70116aa84927c2e07d777427904262efb91164680c50506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_47e5baab9dda460e375bbe400ab070ca5b65424c1341eadcf6e61832320810ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e5baab9dda460e375bbe400ab070ca5b65424c1341eadcf6e61832320810ae->enter($__internal_47e5baab9dda460e375bbe400ab070ca5b65424c1341eadcf6e61832320810ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_47e5baab9dda460e375bbe400ab070ca5b65424c1341eadcf6e61832320810ae->leave($__internal_47e5baab9dda460e375bbe400ab070ca5b65424c1341eadcf6e61832320810ae_prof);

        
        $__internal_ea654558ea1ad51ee70116aa84927c2e07d777427904262efb91164680c50506->leave($__internal_ea654558ea1ad51ee70116aa84927c2e07d777427904262efb91164680c50506_prof);

    }

    public function block_js($context, array $blocks = array())
    {
        $__internal_2358470af530bee8f85f60843112a870780041dec7fb2dd2778347d685346462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2358470af530bee8f85f60843112a870780041dec7fb2dd2778347d685346462->enter($__internal_2358470af530bee8f85f60843112a870780041dec7fb2dd2778347d685346462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_8be01607889ec702a4c70af36ac3c75265e4bc468fb7d8551b4ae12af7ad8039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be01607889ec702a4c70af36ac3c75265e4bc468fb7d8551b4ae12af7ad8039->enter($__internal_8be01607889ec702a4c70af36ac3c75265e4bc468fb7d8551b4ae12af7ad8039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_8be01607889ec702a4c70af36ac3c75265e4bc468fb7d8551b4ae12af7ad8039->leave($__internal_8be01607889ec702a4c70af36ac3c75265e4bc468fb7d8551b4ae12af7ad8039_prof);

        
        $__internal_2358470af530bee8f85f60843112a870780041dec7fb2dd2778347d685346462->leave($__internal_2358470af530bee8f85f60843112a870780041dec7fb2dd2778347d685346462_prof);

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

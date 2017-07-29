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
        $__internal_c1bce2874341a6da2bb44205b9ef78477c36283f32fdb49dbf28b1003d489e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bce2874341a6da2bb44205b9ef78477c36283f32fdb49dbf28b1003d489e05->enter($__internal_c1bce2874341a6da2bb44205b9ef78477c36283f32fdb49dbf28b1003d489e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_89309cb0d68e049a8ce6c8752462392227659c2c4ae79cb1d46f5ee7a66d1a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89309cb0d68e049a8ce6c8752462392227659c2c4ae79cb1d46f5ee7a66d1a1f->enter($__internal_89309cb0d68e049a8ce6c8752462392227659c2c4ae79cb1d46f5ee7a66d1a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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



    ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "
</div>
</body>
</html>

";
        
        $__internal_c1bce2874341a6da2bb44205b9ef78477c36283f32fdb49dbf28b1003d489e05->leave($__internal_c1bce2874341a6da2bb44205b9ef78477c36283f32fdb49dbf28b1003d489e05_prof);

        
        $__internal_89309cb0d68e049a8ce6c8752462392227659c2c4ae79cb1d46f5ee7a66d1a1f->leave($__internal_89309cb0d68e049a8ce6c8752462392227659c2c4ae79cb1d46f5ee7a66d1a1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319704bc8e44d728eda187f4bb2c938a6d399db5b1298e66ae8d287326ec8025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319704bc8e44d728eda187f4bb2c938a6d399db5b1298e66ae8d287326ec8025->enter($__internal_319704bc8e44d728eda187f4bb2c938a6d399db5b1298e66ae8d287326ec8025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a476f8568ba258a8c0f1f465ad90512204d14b380796d929e1f5d47ac07e04d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a476f8568ba258a8c0f1f465ad90512204d14b380796d929e1f5d47ac07e04d1->enter($__internal_a476f8568ba258a8c0f1f465ad90512204d14b380796d929e1f5d47ac07e04d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a476f8568ba258a8c0f1f465ad90512204d14b380796d929e1f5d47ac07e04d1->leave($__internal_a476f8568ba258a8c0f1f465ad90512204d14b380796d929e1f5d47ac07e04d1_prof);

        
        $__internal_319704bc8e44d728eda187f4bb2c938a6d399db5b1298e66ae8d287326ec8025->leave($__internal_319704bc8e44d728eda187f4bb2c938a6d399db5b1298e66ae8d287326ec8025_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_efe367981c1af36c17bf1057c0f60f5001ac06842eb003a7d292c47d688abcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe367981c1af36c17bf1057c0f60f5001ac06842eb003a7d292c47d688abcf3->enter($__internal_efe367981c1af36c17bf1057c0f60f5001ac06842eb003a7d292c47d688abcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_fed6d66f75ccfe3e6058560b893c2fc96fce6509dee5b7a054d61ff4d9e13ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed6d66f75ccfe3e6058560b893c2fc96fce6509dee5b7a054d61ff4d9e13ee4->enter($__internal_fed6d66f75ccfe3e6058560b893c2fc96fce6509dee5b7a054d61ff4d9e13ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_fed6d66f75ccfe3e6058560b893c2fc96fce6509dee5b7a054d61ff4d9e13ee4->leave($__internal_fed6d66f75ccfe3e6058560b893c2fc96fce6509dee5b7a054d61ff4d9e13ee4_prof);

        
        $__internal_efe367981c1af36c17bf1057c0f60f5001ac06842eb003a7d292c47d688abcf3->leave($__internal_efe367981c1af36c17bf1057c0f60f5001ac06842eb003a7d292c47d688abcf3_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_994f5cc4e9178b94ab9b4b1946c597a73546b02b27e81f0277b0cd8f1787cac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994f5cc4e9178b94ab9b4b1946c597a73546b02b27e81f0277b0cd8f1787cac1->enter($__internal_994f5cc4e9178b94ab9b4b1946c597a73546b02b27e81f0277b0cd8f1787cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_540d21a5d0d0d85fbafecee4c0833e9a6cd38cc6eed600aa0be6ccffc55c83af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540d21a5d0d0d85fbafecee4c0833e9a6cd38cc6eed600aa0be6ccffc55c83af->enter($__internal_540d21a5d0d0d85fbafecee4c0833e9a6cd38cc6eed600aa0be6ccffc55c83af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_540d21a5d0d0d85fbafecee4c0833e9a6cd38cc6eed600aa0be6ccffc55c83af->leave($__internal_540d21a5d0d0d85fbafecee4c0833e9a6cd38cc6eed600aa0be6ccffc55c83af_prof);

        
        $__internal_994f5cc4e9178b94ab9b4b1946c597a73546b02b27e81f0277b0cd8f1787cac1->leave($__internal_994f5cc4e9178b94ab9b4b1946c597a73546b02b27e81f0277b0cd8f1787cac1_prof);

    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        $__internal_5643a18f12a97a05548310616d4ab08abdd02c7ac0866857f09e5f43640535e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5643a18f12a97a05548310616d4ab08abdd02c7ac0866857f09e5f43640535e7->enter($__internal_5643a18f12a97a05548310616d4ab08abdd02c7ac0866857f09e5f43640535e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_b868f3d5968cd6b2d9fa2c73f9a27138fa78e44561bf2ac1138e4ee0d3cdb3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b868f3d5968cd6b2d9fa2c73f9a27138fa78e44561bf2ac1138e4ee0d3cdb3d4->enter($__internal_b868f3d5968cd6b2d9fa2c73f9a27138fa78e44561bf2ac1138e4ee0d3cdb3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_b868f3d5968cd6b2d9fa2c73f9a27138fa78e44561bf2ac1138e4ee0d3cdb3d4->leave($__internal_b868f3d5968cd6b2d9fa2c73f9a27138fa78e44561bf2ac1138e4ee0d3cdb3d4_prof);

        
        $__internal_5643a18f12a97a05548310616d4ab08abdd02c7ac0866857f09e5f43640535e7->leave($__internal_5643a18f12a97a05548310616d4ab08abdd02c7ac0866857f09e5f43640535e7_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7be4ecce6a2b265ba9e0731cb48bba346a2787bebf08e364deb6468b1349ffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be4ecce6a2b265ba9e0731cb48bba346a2787bebf08e364deb6468b1349ffd7->enter($__internal_7be4ecce6a2b265ba9e0731cb48bba346a2787bebf08e364deb6468b1349ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8ca8f960f2bb8d7fb5992fb720ecde6c0349dd554bfef6040b508e4fa5c7eb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca8f960f2bb8d7fb5992fb720ecde6c0349dd554bfef6040b508e4fa5c7eb87->enter($__internal_8ca8f960f2bb8d7fb5992fb720ecde6c0349dd554bfef6040b508e4fa5c7eb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8ca8f960f2bb8d7fb5992fb720ecde6c0349dd554bfef6040b508e4fa5c7eb87->leave($__internal_8ca8f960f2bb8d7fb5992fb720ecde6c0349dd554bfef6040b508e4fa5c7eb87_prof);

        
        $__internal_7be4ecce6a2b265ba9e0731cb48bba346a2787bebf08e364deb6468b1349ffd7->leave($__internal_7be4ecce6a2b265ba9e0731cb48bba346a2787bebf08e364deb6468b1349ffd7_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_06539796850de847e0ef4de32f97bafc69cb8beb03e72544c7db09b60f6403b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06539796850de847e0ef4de32f97bafc69cb8beb03e72544c7db09b60f6403b3->enter($__internal_06539796850de847e0ef4de32f97bafc69cb8beb03e72544c7db09b60f6403b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c802028e498c91eaabe30a37140032737c984ee3d7726a101edbb1c420638539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c802028e498c91eaabe30a37140032737c984ee3d7726a101edbb1c420638539->enter($__internal_c802028e498c91eaabe30a37140032737c984ee3d7726a101edbb1c420638539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c802028e498c91eaabe30a37140032737c984ee3d7726a101edbb1c420638539->leave($__internal_c802028e498c91eaabe30a37140032737c984ee3d7726a101edbb1c420638539_prof);

        
        $__internal_06539796850de847e0ef4de32f97bafc69cb8beb03e72544c7db09b60f6403b3->leave($__internal_06539796850de847e0ef4de32f97bafc69cb8beb03e72544c7db09b60f6403b3_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cb687b5746503e02c7c9e6f89a095a72ee6f2d15a77addc2a6d21ecccce81cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb687b5746503e02c7c9e6f89a095a72ee6f2d15a77addc2a6d21ecccce81cc8->enter($__internal_cb687b5746503e02c7c9e6f89a095a72ee6f2d15a77addc2a6d21ecccce81cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_422bcd04a6d17af3a15b7284971079035684db3bfd04970821a46fc6f2e257a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422bcd04a6d17af3a15b7284971079035684db3bfd04970821a46fc6f2e257a0->enter($__internal_422bcd04a6d17af3a15b7284971079035684db3bfd04970821a46fc6f2e257a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_422bcd04a6d17af3a15b7284971079035684db3bfd04970821a46fc6f2e257a0->leave($__internal_422bcd04a6d17af3a15b7284971079035684db3bfd04970821a46fc6f2e257a0_prof);

        
        $__internal_cb687b5746503e02c7c9e6f89a095a72ee6f2d15a77addc2a6d21ecccce81cc8->leave($__internal_cb687b5746503e02c7c9e6f89a095a72ee6f2d15a77addc2a6d21ecccce81cc8_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40e004c99239d5fe11e0dd93cb817abe627e0f28f83b1b5c02f38eba458d54b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e004c99239d5fe11e0dd93cb817abe627e0f28f83b1b5c02f38eba458d54b2->enter($__internal_40e004c99239d5fe11e0dd93cb817abe627e0f28f83b1b5c02f38eba458d54b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72f98df9b92d4ea97ecf57108de2b2ef715634c00bd41945a4bbe953521c3cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f98df9b92d4ea97ecf57108de2b2ef715634c00bd41945a4bbe953521c3cb6->enter($__internal_72f98df9b92d4ea97ecf57108de2b2ef715634c00bd41945a4bbe953521c3cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/font-awsome.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
        <!--script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script-->
        ";
        // line 30
        $this->displayBlock('js', $context, $blocks);
        // line 31
        echo "    ";
        
        $__internal_72f98df9b92d4ea97ecf57108de2b2ef715634c00bd41945a4bbe953521c3cb6->leave($__internal_72f98df9b92d4ea97ecf57108de2b2ef715634c00bd41945a4bbe953521c3cb6_prof);

        
        $__internal_40e004c99239d5fe11e0dd93cb817abe627e0f28f83b1b5c02f38eba458d54b2->leave($__internal_40e004c99239d5fe11e0dd93cb817abe627e0f28f83b1b5c02f38eba458d54b2_prof);

    }

    // line 30
    public function block_js($context, array $blocks = array())
    {
        $__internal_8025cbc44ff8ebea8242170383768ab81b3efd5d3cd95382d9da8bf5b861a761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8025cbc44ff8ebea8242170383768ab81b3efd5d3cd95382d9da8bf5b861a761->enter($__internal_8025cbc44ff8ebea8242170383768ab81b3efd5d3cd95382d9da8bf5b861a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_09a8e39fd97d0a827b45922067f6a778b75ca2b9fa2293582c13d25541e6febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a8e39fd97d0a827b45922067f6a778b75ca2b9fa2293582c13d25541e6febc->enter($__internal_09a8e39fd97d0a827b45922067f6a778b75ca2b9fa2293582c13d25541e6febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_09a8e39fd97d0a827b45922067f6a778b75ca2b9fa2293582c13d25541e6febc->leave($__internal_09a8e39fd97d0a827b45922067f6a778b75ca2b9fa2293582c13d25541e6febc_prof);

        
        $__internal_8025cbc44ff8ebea8242170383768ab81b3efd5d3cd95382d9da8bf5b861a761->leave($__internal_8025cbc44ff8ebea8242170383768ab81b3efd5d3cd95382d9da8bf5b861a761_prof);

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
        return array (  266 => 30,  256 => 31,  254 => 30,  249 => 28,  245 => 27,  241 => 26,  237 => 25,  232 => 24,  223 => 23,  206 => 21,  189 => 16,  172 => 15,  154 => 13,  137 => 9,  127 => 10,  125 => 9,  121 => 8,  116 => 7,  107 => 6,  90 => 5,  75 => 32,  73 => 23,  70 => 22,  68 => 21,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  46 => 11,  44 => 6,  40 => 5,  34 => 1,);
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

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

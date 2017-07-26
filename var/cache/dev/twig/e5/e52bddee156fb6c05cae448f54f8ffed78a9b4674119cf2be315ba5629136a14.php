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
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b913a7c9d9ed450c06023f1cda8f61dacd356b60023082e733d73bb452b0524a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b913a7c9d9ed450c06023f1cda8f61dacd356b60023082e733d73bb452b0524a->enter($__internal_b913a7c9d9ed450c06023f1cda8f61dacd356b60023082e733d73bb452b0524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_63bc25d581d9e889feb2e820e7379fec594c2e93413b3834c34a6d336fa826c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bc25d581d9e889feb2e820e7379fec594c2e93413b3834c34a6d336fa826c6->enter($__internal_63bc25d581d9e889feb2e820e7379fec594c2e93413b3834c34a6d336fa826c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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



    ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
</div>
</body>
</html>

";
        
        $__internal_b913a7c9d9ed450c06023f1cda8f61dacd356b60023082e733d73bb452b0524a->leave($__internal_b913a7c9d9ed450c06023f1cda8f61dacd356b60023082e733d73bb452b0524a_prof);

        
        $__internal_63bc25d581d9e889feb2e820e7379fec594c2e93413b3834c34a6d336fa826c6->leave($__internal_63bc25d581d9e889feb2e820e7379fec594c2e93413b3834c34a6d336fa826c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3c17c901a762027234269e3edbe155cd52a38bc1c46c6a2d383311f4c1ed84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3c17c901a762027234269e3edbe155cd52a38bc1c46c6a2d383311f4c1ed84->enter($__internal_3f3c17c901a762027234269e3edbe155cd52a38bc1c46c6a2d383311f4c1ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80c6941cfd1f93646991c7e13561e9597215938912427b08774b67bb35fa267f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c6941cfd1f93646991c7e13561e9597215938912427b08774b67bb35fa267f->enter($__internal_80c6941cfd1f93646991c7e13561e9597215938912427b08774b67bb35fa267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_80c6941cfd1f93646991c7e13561e9597215938912427b08774b67bb35fa267f->leave($__internal_80c6941cfd1f93646991c7e13561e9597215938912427b08774b67bb35fa267f_prof);

        
        $__internal_3f3c17c901a762027234269e3edbe155cd52a38bc1c46c6a2d383311f4c1ed84->leave($__internal_3f3c17c901a762027234269e3edbe155cd52a38bc1c46c6a2d383311f4c1ed84_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_4621714e04bb2a20ff23253a0867a8fd1e3b81f7e8c147685e5fce4edd9ec306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4621714e04bb2a20ff23253a0867a8fd1e3b81f7e8c147685e5fce4edd9ec306->enter($__internal_4621714e04bb2a20ff23253a0867a8fd1e3b81f7e8c147685e5fce4edd9ec306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_d7a10dd650e013b4ec74efed83e1268bde8dc8fe019210c1df9624cbf0a112b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a10dd650e013b4ec74efed83e1268bde8dc8fe019210c1df9624cbf0a112b1->enter($__internal_d7a10dd650e013b4ec74efed83e1268bde8dc8fe019210c1df9624cbf0a112b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_d7a10dd650e013b4ec74efed83e1268bde8dc8fe019210c1df9624cbf0a112b1->leave($__internal_d7a10dd650e013b4ec74efed83e1268bde8dc8fe019210c1df9624cbf0a112b1_prof);

        
        $__internal_4621714e04bb2a20ff23253a0867a8fd1e3b81f7e8c147685e5fce4edd9ec306->leave($__internal_4621714e04bb2a20ff23253a0867a8fd1e3b81f7e8c147685e5fce4edd9ec306_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e2c624368ecec6ddc3114eef3fa1466d49825319f64712061ff0ac7338f91644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c624368ecec6ddc3114eef3fa1466d49825319f64712061ff0ac7338f91644->enter($__internal_e2c624368ecec6ddc3114eef3fa1466d49825319f64712061ff0ac7338f91644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_a308b683437b4540610b02106db5f24f3cb66a595124b380e05f594a377ce148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a308b683437b4540610b02106db5f24f3cb66a595124b380e05f594a377ce148->enter($__internal_a308b683437b4540610b02106db5f24f3cb66a595124b380e05f594a377ce148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a308b683437b4540610b02106db5f24f3cb66a595124b380e05f594a377ce148->leave($__internal_a308b683437b4540610b02106db5f24f3cb66a595124b380e05f594a377ce148_prof);

        
        $__internal_e2c624368ecec6ddc3114eef3fa1466d49825319f64712061ff0ac7338f91644->leave($__internal_e2c624368ecec6ddc3114eef3fa1466d49825319f64712061ff0ac7338f91644_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_220b205eeb89f2bfcefdb3514c080dbfc68c18937f45058ee47c948c50db16fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220b205eeb89f2bfcefdb3514c080dbfc68c18937f45058ee47c948c50db16fb->enter($__internal_220b205eeb89f2bfcefdb3514c080dbfc68c18937f45058ee47c948c50db16fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cb49669a10d6fd04c28b99cf3dbbee853697f75cbef416ec6fb5e782469d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb49669a10d6fd04c28b99cf3dbbee853697f75cbef416ec6fb5e782469d8b7->enter($__internal_9cb49669a10d6fd04c28b99cf3dbbee853697f75cbef416ec6fb5e782469d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cb49669a10d6fd04c28b99cf3dbbee853697f75cbef416ec6fb5e782469d8b7->leave($__internal_9cb49669a10d6fd04c28b99cf3dbbee853697f75cbef416ec6fb5e782469d8b7_prof);

        
        $__internal_220b205eeb89f2bfcefdb3514c080dbfc68c18937f45058ee47c948c50db16fb->leave($__internal_220b205eeb89f2bfcefdb3514c080dbfc68c18937f45058ee47c948c50db16fb_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aaf814a6d9fa680a4526bc914d7fce97e0e945ca1b0568d1ca0c4b0f1dc6f6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf814a6d9fa680a4526bc914d7fce97e0e945ca1b0568d1ca0c4b0f1dc6f6d3->enter($__internal_aaf814a6d9fa680a4526bc914d7fce97e0e945ca1b0568d1ca0c4b0f1dc6f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b41244dbb8d1c1f67417deda24a9cc459e0bd0424e5ed1d999446b3e432d71da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41244dbb8d1c1f67417deda24a9cc459e0bd0424e5ed1d999446b3e432d71da->enter($__internal_b41244dbb8d1c1f67417deda24a9cc459e0bd0424e5ed1d999446b3e432d71da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b41244dbb8d1c1f67417deda24a9cc459e0bd0424e5ed1d999446b3e432d71da->leave($__internal_b41244dbb8d1c1f67417deda24a9cc459e0bd0424e5ed1d999446b3e432d71da_prof);

        
        $__internal_aaf814a6d9fa680a4526bc914d7fce97e0e945ca1b0568d1ca0c4b0f1dc6f6d3->leave($__internal_aaf814a6d9fa680a4526bc914d7fce97e0e945ca1b0568d1ca0c4b0f1dc6f6d3_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e58dafacc9f51d5e891baf7a81a0dca24dc7e5390f2e34d93e0ef17dd4d9581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e58dafacc9f51d5e891baf7a81a0dca24dc7e5390f2e34d93e0ef17dd4d9581->enter($__internal_4e58dafacc9f51d5e891baf7a81a0dca24dc7e5390f2e34d93e0ef17dd4d9581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4af2c5f3d5794cfc76bec517e5424a0affa6b197405e90525cc2db667f67f464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af2c5f3d5794cfc76bec517e5424a0affa6b197405e90525cc2db667f67f464->enter($__internal_4af2c5f3d5794cfc76bec517e5424a0affa6b197405e90525cc2db667f67f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script type=\"text/javascript\" src=\"";
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
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4af2c5f3d5794cfc76bec517e5424a0affa6b197405e90525cc2db667f67f464->leave($__internal_4af2c5f3d5794cfc76bec517e5424a0affa6b197405e90525cc2db667f67f464_prof);

        
        $__internal_4e58dafacc9f51d5e891baf7a81a0dca24dc7e5390f2e34d93e0ef17dd4d9581->leave($__internal_4e58dafacc9f51d5e891baf7a81a0dca24dc7e5390f2e34d93e0ef17dd4d9581_prof);

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
        return array (  209 => 27,  204 => 25,  200 => 24,  196 => 23,  192 => 22,  187 => 21,  178 => 20,  161 => 18,  144 => 13,  127 => 12,  109 => 10,  92 => 5,  77 => 29,  75 => 20,  72 => 19,  70 => 18,  64 => 14,  61 => 13,  59 => 12,  54 => 10,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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




    {% block footer %}{% endblock %}

    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/jquery-3.2.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/tether.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/font-awsome.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
        <!--script src=\"//cdn.ckeditor.com/4.7.1/basic/ckeditor.js\"></script-->
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
    {% endblock %}

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

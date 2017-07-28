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
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03fdb55ba94dfa53a9b07d804c14e7cd318d630bb9e2bbdc5eafdc67798d03ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fdb55ba94dfa53a9b07d804c14e7cd318d630bb9e2bbdc5eafdc67798d03ad->enter($__internal_03fdb55ba94dfa53a9b07d804c14e7cd318d630bb9e2bbdc5eafdc67798d03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5761ba6b27e45b08303779cb83c3a00a1f9a958e71f7caa18cef6b91e191c5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5761ba6b27e45b08303779cb83c3a00a1f9a958e71f7caa18cef6b91e191c5f5->enter($__internal_5761ba6b27e45b08303779cb83c3a00a1f9a958e71f7caa18cef6b91e191c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_03fdb55ba94dfa53a9b07d804c14e7cd318d630bb9e2bbdc5eafdc67798d03ad->leave($__internal_03fdb55ba94dfa53a9b07d804c14e7cd318d630bb9e2bbdc5eafdc67798d03ad_prof);

        
        $__internal_5761ba6b27e45b08303779cb83c3a00a1f9a958e71f7caa18cef6b91e191c5f5->leave($__internal_5761ba6b27e45b08303779cb83c3a00a1f9a958e71f7caa18cef6b91e191c5f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_246c3b58250122b623eca5fa4783612151120c1e9f6c595d79033c2ac362f5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246c3b58250122b623eca5fa4783612151120c1e9f6c595d79033c2ac362f5be->enter($__internal_246c3b58250122b623eca5fa4783612151120c1e9f6c595d79033c2ac362f5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_169c8ae5694e4dec415fb19225df7cfc19ff10f66d57d825cd00957ca195edb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169c8ae5694e4dec415fb19225df7cfc19ff10f66d57d825cd00957ca195edb4->enter($__internal_169c8ae5694e4dec415fb19225df7cfc19ff10f66d57d825cd00957ca195edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_169c8ae5694e4dec415fb19225df7cfc19ff10f66d57d825cd00957ca195edb4->leave($__internal_169c8ae5694e4dec415fb19225df7cfc19ff10f66d57d825cd00957ca195edb4_prof);

        
        $__internal_246c3b58250122b623eca5fa4783612151120c1e9f6c595d79033c2ac362f5be->leave($__internal_246c3b58250122b623eca5fa4783612151120c1e9f6c595d79033c2ac362f5be_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_e8c3bedcbbad761b1b74212d0ce6fbbb4008f3e7058a8231767c22c7ac21fec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c3bedcbbad761b1b74212d0ce6fbbb4008f3e7058a8231767c22c7ac21fec0->enter($__internal_e8c3bedcbbad761b1b74212d0ce6fbbb4008f3e7058a8231767c22c7ac21fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_57c12c8e4b4a59deab59b359808ffed2da88878a6f98d0aba93f5b5cddb380c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c12c8e4b4a59deab59b359808ffed2da88878a6f98d0aba93f5b5cddb380c1->enter($__internal_57c12c8e4b4a59deab59b359808ffed2da88878a6f98d0aba93f5b5cddb380c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_57c12c8e4b4a59deab59b359808ffed2da88878a6f98d0aba93f5b5cddb380c1->leave($__internal_57c12c8e4b4a59deab59b359808ffed2da88878a6f98d0aba93f5b5cddb380c1_prof);

        
        $__internal_e8c3bedcbbad761b1b74212d0ce6fbbb4008f3e7058a8231767c22c7ac21fec0->leave($__internal_e8c3bedcbbad761b1b74212d0ce6fbbb4008f3e7058a8231767c22c7ac21fec0_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8ced1bae233be1d214ce46c398bbd1918802e748e5a69f0cf7fbde47beb7bfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ced1bae233be1d214ce46c398bbd1918802e748e5a69f0cf7fbde47beb7bfb1->enter($__internal_8ced1bae233be1d214ce46c398bbd1918802e748e5a69f0cf7fbde47beb7bfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_89b0e9961c0e6eadb2a960fe1a910e0858c586a4c582a5963ca1d7aea9ba550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b0e9961c0e6eadb2a960fe1a910e0858c586a4c582a5963ca1d7aea9ba550f->enter($__internal_89b0e9961c0e6eadb2a960fe1a910e0858c586a4c582a5963ca1d7aea9ba550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_89b0e9961c0e6eadb2a960fe1a910e0858c586a4c582a5963ca1d7aea9ba550f->leave($__internal_89b0e9961c0e6eadb2a960fe1a910e0858c586a4c582a5963ca1d7aea9ba550f_prof);

        
        $__internal_8ced1bae233be1d214ce46c398bbd1918802e748e5a69f0cf7fbde47beb7bfb1->leave($__internal_8ced1bae233be1d214ce46c398bbd1918802e748e5a69f0cf7fbde47beb7bfb1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec3f7d2e9b4711e6e96442e11ea837e00e24aafdb788cf27364b424ea925aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec3f7d2e9b4711e6e96442e11ea837e00e24aafdb788cf27364b424ea925aea->enter($__internal_3ec3f7d2e9b4711e6e96442e11ea837e00e24aafdb788cf27364b424ea925aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c35ba8567a66bd00fd43cf398281234235704c919446477adf02a699921467f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35ba8567a66bd00fd43cf398281234235704c919446477adf02a699921467f6->enter($__internal_c35ba8567a66bd00fd43cf398281234235704c919446477adf02a699921467f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c35ba8567a66bd00fd43cf398281234235704c919446477adf02a699921467f6->leave($__internal_c35ba8567a66bd00fd43cf398281234235704c919446477adf02a699921467f6_prof);

        
        $__internal_3ec3f7d2e9b4711e6e96442e11ea837e00e24aafdb788cf27364b424ea925aea->leave($__internal_3ec3f7d2e9b4711e6e96442e11ea837e00e24aafdb788cf27364b424ea925aea_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6d7b701f961f48e58c77c8430031933987c362ff8d9653b264652b43ddec194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d7b701f961f48e58c77c8430031933987c362ff8d9653b264652b43ddec194->enter($__internal_c6d7b701f961f48e58c77c8430031933987c362ff8d9653b264652b43ddec194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fb17c2551a13ab94a8711136cbd02987ca79306bf056365f512126d54c8cab70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb17c2551a13ab94a8711136cbd02987ca79306bf056365f512126d54c8cab70->enter($__internal_fb17c2551a13ab94a8711136cbd02987ca79306bf056365f512126d54c8cab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_fb17c2551a13ab94a8711136cbd02987ca79306bf056365f512126d54c8cab70->leave($__internal_fb17c2551a13ab94a8711136cbd02987ca79306bf056365f512126d54c8cab70_prof);

        
        $__internal_c6d7b701f961f48e58c77c8430031933987c362ff8d9653b264652b43ddec194->leave($__internal_c6d7b701f961f48e58c77c8430031933987c362ff8d9653b264652b43ddec194_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95d119cf7c8f2036165a4c879dc075778b77e4b7ef1dea47def6027d37735a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d119cf7c8f2036165a4c879dc075778b77e4b7ef1dea47def6027d37735a9a->enter($__internal_95d119cf7c8f2036165a4c879dc075778b77e4b7ef1dea47def6027d37735a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5f44fb300ecb4bb5334b188f49a2837766c7f25c0dc0fc2d867d8be9b60c53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f44fb300ecb4bb5334b188f49a2837766c7f25c0dc0fc2d867d8be9b60c53a->enter($__internal_f5f44fb300ecb4bb5334b188f49a2837766c7f25c0dc0fc2d867d8be9b60c53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        ";
        // line 27
        $this->displayBlock('js', $context, $blocks);
        // line 28
        echo "    ";
        
        $__internal_f5f44fb300ecb4bb5334b188f49a2837766c7f25c0dc0fc2d867d8be9b60c53a->leave($__internal_f5f44fb300ecb4bb5334b188f49a2837766c7f25c0dc0fc2d867d8be9b60c53a_prof);

        
        $__internal_95d119cf7c8f2036165a4c879dc075778b77e4b7ef1dea47def6027d37735a9a->leave($__internal_95d119cf7c8f2036165a4c879dc075778b77e4b7ef1dea47def6027d37735a9a_prof);

    }

    // line 27
    public function block_js($context, array $blocks = array())
    {
        $__internal_eb9715a151cdb6fc0ea963fd8b68869fbc372e2d641b961aa5f58a7637628817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9715a151cdb6fc0ea963fd8b68869fbc372e2d641b961aa5f58a7637628817->enter($__internal_eb9715a151cdb6fc0ea963fd8b68869fbc372e2d641b961aa5f58a7637628817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_6aac670c5a94d7441493b98708b284fca9d1f212f9d1b722d14601ab79ef74bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aac670c5a94d7441493b98708b284fca9d1f212f9d1b722d14601ab79ef74bc->enter($__internal_6aac670c5a94d7441493b98708b284fca9d1f212f9d1b722d14601ab79ef74bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6aac670c5a94d7441493b98708b284fca9d1f212f9d1b722d14601ab79ef74bc->leave($__internal_6aac670c5a94d7441493b98708b284fca9d1f212f9d1b722d14601ab79ef74bc_prof);

        
        $__internal_eb9715a151cdb6fc0ea963fd8b68869fbc372e2d641b961aa5f58a7637628817->leave($__internal_eb9715a151cdb6fc0ea963fd8b68869fbc372e2d641b961aa5f58a7637628817_prof);

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
        return array (  222 => 27,  212 => 28,  210 => 27,  205 => 25,  201 => 24,  197 => 23,  193 => 22,  188 => 21,  179 => 20,  162 => 18,  145 => 13,  128 => 12,  110 => 10,  93 => 5,  78 => 29,  76 => 20,  73 => 19,  71 => 18,  65 => 14,  62 => 13,  60 => 12,  55 => 10,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  32 => 1,);
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
        {% block js %}{% endblock %}
    {% endblock %}

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

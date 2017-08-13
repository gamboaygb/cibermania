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
        $__internal_93d1041a7e32381329b09fc81b3804ec1e1996eadc3a1b82e2dfef12ab3b8f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d1041a7e32381329b09fc81b3804ec1e1996eadc3a1b82e2dfef12ab3b8f91->enter($__internal_93d1041a7e32381329b09fc81b3804ec1e1996eadc3a1b82e2dfef12ab3b8f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9397d2ddb54f017d1e6ac972892dc7dc5ffcb341e066ca9ab00759d6327508c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9397d2ddb54f017d1e6ac972892dc7dc5ffcb341e066ca9ab00759d6327508c9->enter($__internal_9397d2ddb54f017d1e6ac972892dc7dc5ffcb341e066ca9ab00759d6327508c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_93d1041a7e32381329b09fc81b3804ec1e1996eadc3a1b82e2dfef12ab3b8f91->leave($__internal_93d1041a7e32381329b09fc81b3804ec1e1996eadc3a1b82e2dfef12ab3b8f91_prof);

        
        $__internal_9397d2ddb54f017d1e6ac972892dc7dc5ffcb341e066ca9ab00759d6327508c9->leave($__internal_9397d2ddb54f017d1e6ac972892dc7dc5ffcb341e066ca9ab00759d6327508c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e46c16dbce29ff16b548513d276fefcd9192058eee7cb666a57e6c68944611b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c16dbce29ff16b548513d276fefcd9192058eee7cb666a57e6c68944611b8->enter($__internal_e46c16dbce29ff16b548513d276fefcd9192058eee7cb666a57e6c68944611b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_239aacac4f5c740c94063f14e28ffd4e4e0990f26870ab7b8cf2dc9585d92db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239aacac4f5c740c94063f14e28ffd4e4e0990f26870ab7b8cf2dc9585d92db3->enter($__internal_239aacac4f5c740c94063f14e28ffd4e4e0990f26870ab7b8cf2dc9585d92db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_239aacac4f5c740c94063f14e28ffd4e4e0990f26870ab7b8cf2dc9585d92db3->leave($__internal_239aacac4f5c740c94063f14e28ffd4e4e0990f26870ab7b8cf2dc9585d92db3_prof);

        
        $__internal_e46c16dbce29ff16b548513d276fefcd9192058eee7cb666a57e6c68944611b8->leave($__internal_e46c16dbce29ff16b548513d276fefcd9192058eee7cb666a57e6c68944611b8_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5a06a72a3700b7ae29bc933c7e892f5cedf2dc5d7949a13dc91deee663d7243a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a06a72a3700b7ae29bc933c7e892f5cedf2dc5d7949a13dc91deee663d7243a->enter($__internal_5a06a72a3700b7ae29bc933c7e892f5cedf2dc5d7949a13dc91deee663d7243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5bcd3e0238697f3595ec14097f9584a118ee8e6d2eeb26f4c47b55f46d70f492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcd3e0238697f3595ec14097f9584a118ee8e6d2eeb26f4c47b55f46d70f492->enter($__internal_5bcd3e0238697f3595ec14097f9584a118ee8e6d2eeb26f4c47b55f46d70f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_5bcd3e0238697f3595ec14097f9584a118ee8e6d2eeb26f4c47b55f46d70f492->leave($__internal_5bcd3e0238697f3595ec14097f9584a118ee8e6d2eeb26f4c47b55f46d70f492_prof);

        
        $__internal_5a06a72a3700b7ae29bc933c7e892f5cedf2dc5d7949a13dc91deee663d7243a->leave($__internal_5a06a72a3700b7ae29bc933c7e892f5cedf2dc5d7949a13dc91deee663d7243a_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_ece05e6eec757ffe0281664058086b9f193458c567b9f200986a56e82de4167b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece05e6eec757ffe0281664058086b9f193458c567b9f200986a56e82de4167b->enter($__internal_ece05e6eec757ffe0281664058086b9f193458c567b9f200986a56e82de4167b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_c407a4f4e3f97666990de24f591a5f41a13eea4c1696be388e2cf1e383e9edcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c407a4f4e3f97666990de24f591a5f41a13eea4c1696be388e2cf1e383e9edcc->enter($__internal_c407a4f4e3f97666990de24f591a5f41a13eea4c1696be388e2cf1e383e9edcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_c407a4f4e3f97666990de24f591a5f41a13eea4c1696be388e2cf1e383e9edcc->leave($__internal_c407a4f4e3f97666990de24f591a5f41a13eea4c1696be388e2cf1e383e9edcc_prof);

        
        $__internal_ece05e6eec757ffe0281664058086b9f193458c567b9f200986a56e82de4167b->leave($__internal_ece05e6eec757ffe0281664058086b9f193458c567b9f200986a56e82de4167b_prof);

    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        $__internal_7b8ab61a432f4e3c4ce307dec81e3d6a8954bfa401fa7c468a09e2c84ff9b080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8ab61a432f4e3c4ce307dec81e3d6a8954bfa401fa7c468a09e2c84ff9b080->enter($__internal_7b8ab61a432f4e3c4ce307dec81e3d6a8954bfa401fa7c468a09e2c84ff9b080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_42bdd2955267a1d6479ded357a225716731b3887b43895e29601506a393952a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bdd2955267a1d6479ded357a225716731b3887b43895e29601506a393952a6->enter($__internal_42bdd2955267a1d6479ded357a225716731b3887b43895e29601506a393952a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_42bdd2955267a1d6479ded357a225716731b3887b43895e29601506a393952a6->leave($__internal_42bdd2955267a1d6479ded357a225716731b3887b43895e29601506a393952a6_prof);

        
        $__internal_7b8ab61a432f4e3c4ce307dec81e3d6a8954bfa401fa7c468a09e2c84ff9b080->leave($__internal_7b8ab61a432f4e3c4ce307dec81e3d6a8954bfa401fa7c468a09e2c84ff9b080_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b8f288ed04e70b347c4bcded28162386b111fbe0981c276b651bd6c2f7502311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f288ed04e70b347c4bcded28162386b111fbe0981c276b651bd6c2f7502311->enter($__internal_b8f288ed04e70b347c4bcded28162386b111fbe0981c276b651bd6c2f7502311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d506fed992a42b2f95641b46f85237d310f50bba6d5b2eff55a78d7017dc1526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506fed992a42b2f95641b46f85237d310f50bba6d5b2eff55a78d7017dc1526->enter($__internal_d506fed992a42b2f95641b46f85237d310f50bba6d5b2eff55a78d7017dc1526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d506fed992a42b2f95641b46f85237d310f50bba6d5b2eff55a78d7017dc1526->leave($__internal_d506fed992a42b2f95641b46f85237d310f50bba6d5b2eff55a78d7017dc1526_prof);

        
        $__internal_b8f288ed04e70b347c4bcded28162386b111fbe0981c276b651bd6c2f7502311->leave($__internal_b8f288ed04e70b347c4bcded28162386b111fbe0981c276b651bd6c2f7502311_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_22698109cf9e2167a878d80b690392f4c68bde4e0aee467c138d78ea06ca02d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22698109cf9e2167a878d80b690392f4c68bde4e0aee467c138d78ea06ca02d6->enter($__internal_22698109cf9e2167a878d80b690392f4c68bde4e0aee467c138d78ea06ca02d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5bb01ad91d1094ade1a7ece28f89f9192780e712306def113e34facf43b65a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bb01ad91d1094ade1a7ece28f89f9192780e712306def113e34facf43b65a1->enter($__internal_d5bb01ad91d1094ade1a7ece28f89f9192780e712306def113e34facf43b65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5bb01ad91d1094ade1a7ece28f89f9192780e712306def113e34facf43b65a1->leave($__internal_d5bb01ad91d1094ade1a7ece28f89f9192780e712306def113e34facf43b65a1_prof);

        
        $__internal_22698109cf9e2167a878d80b690392f4c68bde4e0aee467c138d78ea06ca02d6->leave($__internal_22698109cf9e2167a878d80b690392f4c68bde4e0aee467c138d78ea06ca02d6_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8561c888a2f30d7d330d2b977d455a6b60bd41cc427d29454c6c9274b29ac1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8561c888a2f30d7d330d2b977d455a6b60bd41cc427d29454c6c9274b29ac1ac->enter($__internal_8561c888a2f30d7d330d2b977d455a6b60bd41cc427d29454c6c9274b29ac1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c7abd6545294fa3a9ddae68ae7c22a6c486f459a6a8489bc394092708b30215b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7abd6545294fa3a9ddae68ae7c22a6c486f459a6a8489bc394092708b30215b->enter($__internal_c7abd6545294fa3a9ddae68ae7c22a6c486f459a6a8489bc394092708b30215b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c7abd6545294fa3a9ddae68ae7c22a6c486f459a6a8489bc394092708b30215b->leave($__internal_c7abd6545294fa3a9ddae68ae7c22a6c486f459a6a8489bc394092708b30215b_prof);

        
        $__internal_8561c888a2f30d7d330d2b977d455a6b60bd41cc427d29454c6c9274b29ac1ac->leave($__internal_8561c888a2f30d7d330d2b977d455a6b60bd41cc427d29454c6c9274b29ac1ac_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5dc4ee92e91794cc98dd01d20d86d73f75fad6d31490fb27060b9d6d2a093fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc4ee92e91794cc98dd01d20d86d73f75fad6d31490fb27060b9d6d2a093fe0->enter($__internal_5dc4ee92e91794cc98dd01d20d86d73f75fad6d31490fb27060b9d6d2a093fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d83cab83776596efb5bb0586bdea2e105a904a5993215890645097f896d4fe02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83cab83776596efb5bb0586bdea2e105a904a5993215890645097f896d4fe02->enter($__internal_d83cab83776596efb5bb0586bdea2e105a904a5993215890645097f896d4fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d83cab83776596efb5bb0586bdea2e105a904a5993215890645097f896d4fe02->leave($__internal_d83cab83776596efb5bb0586bdea2e105a904a5993215890645097f896d4fe02_prof);

        
        $__internal_5dc4ee92e91794cc98dd01d20d86d73f75fad6d31490fb27060b9d6d2a093fe0->leave($__internal_5dc4ee92e91794cc98dd01d20d86d73f75fad6d31490fb27060b9d6d2a093fe0_prof);

    }

    public function block_js($context, array $blocks = array())
    {
        $__internal_68b41439e45461ae11774a73fd50f24ed702aac396f53e57d8d671af7a7553b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b41439e45461ae11774a73fd50f24ed702aac396f53e57d8d671af7a7553b0->enter($__internal_68b41439e45461ae11774a73fd50f24ed702aac396f53e57d8d671af7a7553b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_e6aa1e58b94014e8f9db482fbadebd5a00e577567d01812108168d722dcc3fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aa1e58b94014e8f9db482fbadebd5a00e577567d01812108168d722dcc3fac->enter($__internal_e6aa1e58b94014e8f9db482fbadebd5a00e577567d01812108168d722dcc3fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_e6aa1e58b94014e8f9db482fbadebd5a00e577567d01812108168d722dcc3fac->leave($__internal_e6aa1e58b94014e8f9db482fbadebd5a00e577567d01812108168d722dcc3fac_prof);

        
        $__internal_68b41439e45461ae11774a73fd50f24ed702aac396f53e57d8d671af7a7553b0->leave($__internal_68b41439e45461ae11774a73fd50f24ed702aac396f53e57d8d671af7a7553b0_prof);

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

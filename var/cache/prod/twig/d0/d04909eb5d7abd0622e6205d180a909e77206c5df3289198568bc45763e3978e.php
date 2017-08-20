<?php

/* base.html.twig */
class __TwigTemplate_9cd88c3a9e21bfedd79a0ef10b0e259fa7035859ae9e7087bc45d257736be066 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
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
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
    }

    // line 13
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function block_js($context, array $blocks = array())
    {
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
        return array (  145 => 27,  140 => 25,  136 => 24,  132 => 23,  128 => 22,  123 => 21,  120 => 20,  115 => 19,  110 => 16,  105 => 15,  99 => 13,  94 => 9,  90 => 10,  88 => 9,  84 => 8,  79 => 7,  76 => 6,  71 => 5,  64 => 29,  62 => 20,  60 => 19,  56 => 17,  53 => 16,  51 => 15,  46 => 13,  40 => 11,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

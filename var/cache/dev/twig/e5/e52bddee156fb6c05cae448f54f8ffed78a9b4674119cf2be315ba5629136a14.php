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
        $__internal_8bc9e8082029325ace7c4219b88a061b88fdc96977dc4b2a1a8e64b99f9c80b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc9e8082029325ace7c4219b88a061b88fdc96977dc4b2a1a8e64b99f9c80b9->enter($__internal_8bc9e8082029325ace7c4219b88a061b88fdc96977dc4b2a1a8e64b99f9c80b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_de8982292991a1105e944e7cff60a8dc96610424c05e230e1eab943bcffb5449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8982292991a1105e944e7cff60a8dc96610424c05e230e1eab943bcffb5449->enter($__internal_de8982292991a1105e944e7cff60a8dc96610424c05e230e1eab943bcffb5449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 29
        echo "
</div>
</body>
</html>

";
        
        $__internal_8bc9e8082029325ace7c4219b88a061b88fdc96977dc4b2a1a8e64b99f9c80b9->leave($__internal_8bc9e8082029325ace7c4219b88a061b88fdc96977dc4b2a1a8e64b99f9c80b9_prof);

        
        $__internal_de8982292991a1105e944e7cff60a8dc96610424c05e230e1eab943bcffb5449->leave($__internal_de8982292991a1105e944e7cff60a8dc96610424c05e230e1eab943bcffb5449_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1f3e3b1425ebb1904c177c6de9486079aeb247ae4fbf9969be745dca39b7097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f3e3b1425ebb1904c177c6de9486079aeb247ae4fbf9969be745dca39b7097->enter($__internal_a1f3e3b1425ebb1904c177c6de9486079aeb247ae4fbf9969be745dca39b7097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72d5141714e37d23adce8f44e7b3da415e8af2058a4cd8e4251fe0b5ecfe3ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d5141714e37d23adce8f44e7b3da415e8af2058a4cd8e4251fe0b5ecfe3ad6->enter($__internal_72d5141714e37d23adce8f44e7b3da415e8af2058a4cd8e4251fe0b5ecfe3ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_72d5141714e37d23adce8f44e7b3da415e8af2058a4cd8e4251fe0b5ecfe3ad6->leave($__internal_72d5141714e37d23adce8f44e7b3da415e8af2058a4cd8e4251fe0b5ecfe3ad6_prof);

        
        $__internal_a1f3e3b1425ebb1904c177c6de9486079aeb247ae4fbf9969be745dca39b7097->leave($__internal_a1f3e3b1425ebb1904c177c6de9486079aeb247ae4fbf9969be745dca39b7097_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_d19b6c2d9625c9ab695d1cc11c23c791eeae040ca92d1a66fd43a905ac39ab80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19b6c2d9625c9ab695d1cc11c23c791eeae040ca92d1a66fd43a905ac39ab80->enter($__internal_d19b6c2d9625c9ab695d1cc11c23c791eeae040ca92d1a66fd43a905ac39ab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_e4a0aac570f0c6912eaa5a33e302b008aa5a2a4e620833047c66957f16e1c81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a0aac570f0c6912eaa5a33e302b008aa5a2a4e620833047c66957f16e1c81e->enter($__internal_e4a0aac570f0c6912eaa5a33e302b008aa5a2a4e620833047c66957f16e1c81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_e4a0aac570f0c6912eaa5a33e302b008aa5a2a4e620833047c66957f16e1c81e->leave($__internal_e4a0aac570f0c6912eaa5a33e302b008aa5a2a4e620833047c66957f16e1c81e_prof);

        
        $__internal_d19b6c2d9625c9ab695d1cc11c23c791eeae040ca92d1a66fd43a905ac39ab80->leave($__internal_d19b6c2d9625c9ab695d1cc11c23c791eeae040ca92d1a66fd43a905ac39ab80_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9e0249106752b75955fb1c472dd078dd0a928ca998f7b367b83be4fa2ba2a32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0249106752b75955fb1c472dd078dd0a928ca998f7b367b83be4fa2ba2a32d->enter($__internal_9e0249106752b75955fb1c472dd078dd0a928ca998f7b367b83be4fa2ba2a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8ead3a9f8356c8691f0cfbd16b8643de9d8e9c23bfd9dfb1e558afba9dae90cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead3a9f8356c8691f0cfbd16b8643de9d8e9c23bfd9dfb1e558afba9dae90cb->enter($__internal_8ead3a9f8356c8691f0cfbd16b8643de9d8e9c23bfd9dfb1e558afba9dae90cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8ead3a9f8356c8691f0cfbd16b8643de9d8e9c23bfd9dfb1e558afba9dae90cb->leave($__internal_8ead3a9f8356c8691f0cfbd16b8643de9d8e9c23bfd9dfb1e558afba9dae90cb_prof);

        
        $__internal_9e0249106752b75955fb1c472dd078dd0a928ca998f7b367b83be4fa2ba2a32d->leave($__internal_9e0249106752b75955fb1c472dd078dd0a928ca998f7b367b83be4fa2ba2a32d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a9455e114037471491d1a5aa4efad1ad72f5c7fa5f3bd7655c69dfaa72d86de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9455e114037471491d1a5aa4efad1ad72f5c7fa5f3bd7655c69dfaa72d86de->enter($__internal_6a9455e114037471491d1a5aa4efad1ad72f5c7fa5f3bd7655c69dfaa72d86de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07cf4680eb7ed8713c0a8e99fff34f42b914a7ded01c215e92e2d525c785646d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf4680eb7ed8713c0a8e99fff34f42b914a7ded01c215e92e2d525c785646d->enter($__internal_07cf4680eb7ed8713c0a8e99fff34f42b914a7ded01c215e92e2d525c785646d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07cf4680eb7ed8713c0a8e99fff34f42b914a7ded01c215e92e2d525c785646d->leave($__internal_07cf4680eb7ed8713c0a8e99fff34f42b914a7ded01c215e92e2d525c785646d_prof);

        
        $__internal_6a9455e114037471491d1a5aa4efad1ad72f5c7fa5f3bd7655c69dfaa72d86de->leave($__internal_6a9455e114037471491d1a5aa4efad1ad72f5c7fa5f3bd7655c69dfaa72d86de_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd9eb08541ff1fae53c0035af21e8880c0aa63d0d6168046adacd53ebb19d3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9eb08541ff1fae53c0035af21e8880c0aa63d0d6168046adacd53ebb19d3b8->enter($__internal_cd9eb08541ff1fae53c0035af21e8880c0aa63d0d6168046adacd53ebb19d3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5231f6a190e89f73d6497b968ec89d0e236f1264b2be909bcc5c19f2d7b5c7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5231f6a190e89f73d6497b968ec89d0e236f1264b2be909bcc5c19f2d7b5c7fd->enter($__internal_5231f6a190e89f73d6497b968ec89d0e236f1264b2be909bcc5c19f2d7b5c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"></script>
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
    ";
        
        $__internal_5231f6a190e89f73d6497b968ec89d0e236f1264b2be909bcc5c19f2d7b5c7fd->leave($__internal_5231f6a190e89f73d6497b968ec89d0e236f1264b2be909bcc5c19f2d7b5c7fd_prof);

        
        $__internal_cd9eb08541ff1fae53c0035af21e8880c0aa63d0d6168046adacd53ebb19d3b8->leave($__internal_cd9eb08541ff1fae53c0035af21e8880c0aa63d0d6168046adacd53ebb19d3b8_prof);

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
        return array (  185 => 27,  181 => 26,  177 => 25,  171 => 23,  162 => 22,  145 => 13,  128 => 12,  110 => 10,  93 => 5,  78 => 29,  76 => 22,  70 => 19,  63 => 14,  60 => 13,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/font-awsome.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/js/front.js') }}\"></script>
    {% endblock %}

</div>
</body>
</html>

", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

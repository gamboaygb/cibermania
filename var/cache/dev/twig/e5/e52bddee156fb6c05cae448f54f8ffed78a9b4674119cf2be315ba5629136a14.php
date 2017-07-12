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
        $__internal_19ecd42b7a1c22b2b2651c1e572b6a86158649e51a267c777b4abb23b45cf396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ecd42b7a1c22b2b2651c1e572b6a86158649e51a267c777b4abb23b45cf396->enter($__internal_19ecd42b7a1c22b2b2651c1e572b6a86158649e51a267c777b4abb23b45cf396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c75969914dd97b36b91dbc762f7fe05d4f964b524998942e757bb48c5de57520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75969914dd97b36b91dbc762f7fe05d4f964b524998942e757bb48c5de57520->enter($__internal_c75969914dd97b36b91dbc762f7fe05d4f964b524998942e757bb48c5de57520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_19ecd42b7a1c22b2b2651c1e572b6a86158649e51a267c777b4abb23b45cf396->leave($__internal_19ecd42b7a1c22b2b2651c1e572b6a86158649e51a267c777b4abb23b45cf396_prof);

        
        $__internal_c75969914dd97b36b91dbc762f7fe05d4f964b524998942e757bb48c5de57520->leave($__internal_c75969914dd97b36b91dbc762f7fe05d4f964b524998942e757bb48c5de57520_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_954dc2115268670af8afce208cbe29592c6dc371a567baa30bcabe4cd3f8dd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954dc2115268670af8afce208cbe29592c6dc371a567baa30bcabe4cd3f8dd0c->enter($__internal_954dc2115268670af8afce208cbe29592c6dc371a567baa30bcabe4cd3f8dd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c81133fab8fa0c381aacd5082c5afcfbcca78deb17d76cfadec5322f70e688fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81133fab8fa0c381aacd5082c5afcfbcca78deb17d76cfadec5322f70e688fc->enter($__internal_c81133fab8fa0c381aacd5082c5afcfbcca78deb17d76cfadec5322f70e688fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c81133fab8fa0c381aacd5082c5afcfbcca78deb17d76cfadec5322f70e688fc->leave($__internal_c81133fab8fa0c381aacd5082c5afcfbcca78deb17d76cfadec5322f70e688fc_prof);

        
        $__internal_954dc2115268670af8afce208cbe29592c6dc371a567baa30bcabe4cd3f8dd0c->leave($__internal_954dc2115268670af8afce208cbe29592c6dc371a567baa30bcabe4cd3f8dd0c_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_ec83452d196e2667dd2bb21d8b093463461ee6ed04b89cd479dd3897ffac6e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec83452d196e2667dd2bb21d8b093463461ee6ed04b89cd479dd3897ffac6e91->enter($__internal_ec83452d196e2667dd2bb21d8b093463461ee6ed04b89cd479dd3897ffac6e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_2da49083de4b8ed0aebddeb2a5cd6e899a267dd250a6f9583ede0b9fed1981e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da49083de4b8ed0aebddeb2a5cd6e899a267dd250a6f9583ede0b9fed1981e6->enter($__internal_2da49083de4b8ed0aebddeb2a5cd6e899a267dd250a6f9583ede0b9fed1981e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_2da49083de4b8ed0aebddeb2a5cd6e899a267dd250a6f9583ede0b9fed1981e6->leave($__internal_2da49083de4b8ed0aebddeb2a5cd6e899a267dd250a6f9583ede0b9fed1981e6_prof);

        
        $__internal_ec83452d196e2667dd2bb21d8b093463461ee6ed04b89cd479dd3897ffac6e91->leave($__internal_ec83452d196e2667dd2bb21d8b093463461ee6ed04b89cd479dd3897ffac6e91_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ed675675169d364203ddbb3dd0f6bada81ef515f63149435543b22081a6d61eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed675675169d364203ddbb3dd0f6bada81ef515f63149435543b22081a6d61eb->enter($__internal_ed675675169d364203ddbb3dd0f6bada81ef515f63149435543b22081a6d61eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_33172890c4841942b6341b04925447ef342b4edeaf10db5d40b1f3ce7014f1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33172890c4841942b6341b04925447ef342b4edeaf10db5d40b1f3ce7014f1e0->enter($__internal_33172890c4841942b6341b04925447ef342b4edeaf10db5d40b1f3ce7014f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_33172890c4841942b6341b04925447ef342b4edeaf10db5d40b1f3ce7014f1e0->leave($__internal_33172890c4841942b6341b04925447ef342b4edeaf10db5d40b1f3ce7014f1e0_prof);

        
        $__internal_ed675675169d364203ddbb3dd0f6bada81ef515f63149435543b22081a6d61eb->leave($__internal_ed675675169d364203ddbb3dd0f6bada81ef515f63149435543b22081a6d61eb_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1180804dc1d5e26770ba999463d515c3588eba442f276672ba4121f2f8c812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1180804dc1d5e26770ba999463d515c3588eba442f276672ba4121f2f8c812->enter($__internal_8f1180804dc1d5e26770ba999463d515c3588eba442f276672ba4121f2f8c812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a60bdb21aa5c5676743fd2dcf1cd652aa6cfd28bea1e990b04b7b49c5a4025e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a60bdb21aa5c5676743fd2dcf1cd652aa6cfd28bea1e990b04b7b49c5a4025e->enter($__internal_8a60bdb21aa5c5676743fd2dcf1cd652aa6cfd28bea1e990b04b7b49c5a4025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a60bdb21aa5c5676743fd2dcf1cd652aa6cfd28bea1e990b04b7b49c5a4025e->leave($__internal_8a60bdb21aa5c5676743fd2dcf1cd652aa6cfd28bea1e990b04b7b49c5a4025e_prof);

        
        $__internal_8f1180804dc1d5e26770ba999463d515c3588eba442f276672ba4121f2f8c812->leave($__internal_8f1180804dc1d5e26770ba999463d515c3588eba442f276672ba4121f2f8c812_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3761b8ca799972f7050c9886876a327128ba1e724215f1faa63b83142a556c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3761b8ca799972f7050c9886876a327128ba1e724215f1faa63b83142a556c3->enter($__internal_f3761b8ca799972f7050c9886876a327128ba1e724215f1faa63b83142a556c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_747ac2ef52802489d4741d255234dc1ec1cd5aeaeeed8c7c296bdd6304a4f90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747ac2ef52802489d4741d255234dc1ec1cd5aeaeeed8c7c296bdd6304a4f90f->enter($__internal_747ac2ef52802489d4741d255234dc1ec1cd5aeaeeed8c7c296bdd6304a4f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_747ac2ef52802489d4741d255234dc1ec1cd5aeaeeed8c7c296bdd6304a4f90f->leave($__internal_747ac2ef52802489d4741d255234dc1ec1cd5aeaeeed8c7c296bdd6304a4f90f_prof);

        
        $__internal_f3761b8ca799972f7050c9886876a327128ba1e724215f1faa63b83142a556c3->leave($__internal_f3761b8ca799972f7050c9886876a327128ba1e724215f1faa63b83142a556c3_prof);

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

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
        $__internal_1fb8101c4ad5af20b7b44ab475b05116c06b948899584d694bd1bb2131bab829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb8101c4ad5af20b7b44ab475b05116c06b948899584d694bd1bb2131bab829->enter($__internal_1fb8101c4ad5af20b7b44ab475b05116c06b948899584d694bd1bb2131bab829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f2e1f327cb7efd0e845914e143b9d37b531deb62b97acc79091b6ce0330d63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e1f327cb7efd0e845914e143b9d37b531deb62b97acc79091b6ce0330d63b->enter($__internal_6f2e1f327cb7efd0e845914e143b9d37b531deb62b97acc79091b6ce0330d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1fb8101c4ad5af20b7b44ab475b05116c06b948899584d694bd1bb2131bab829->leave($__internal_1fb8101c4ad5af20b7b44ab475b05116c06b948899584d694bd1bb2131bab829_prof);

        
        $__internal_6f2e1f327cb7efd0e845914e143b9d37b531deb62b97acc79091b6ce0330d63b->leave($__internal_6f2e1f327cb7efd0e845914e143b9d37b531deb62b97acc79091b6ce0330d63b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_069211bef619229c60584fe45a760b0a9bdaffbca4dc5799565cf44eede4f5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069211bef619229c60584fe45a760b0a9bdaffbca4dc5799565cf44eede4f5fe->enter($__internal_069211bef619229c60584fe45a760b0a9bdaffbca4dc5799565cf44eede4f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ae6c41b86d643e58059a5384fe46d545debfcb1f11141dbe64bf89d3eca1062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae6c41b86d643e58059a5384fe46d545debfcb1f11141dbe64bf89d3eca1062->enter($__internal_4ae6c41b86d643e58059a5384fe46d545debfcb1f11141dbe64bf89d3eca1062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ae6c41b86d643e58059a5384fe46d545debfcb1f11141dbe64bf89d3eca1062->leave($__internal_4ae6c41b86d643e58059a5384fe46d545debfcb1f11141dbe64bf89d3eca1062_prof);

        
        $__internal_069211bef619229c60584fe45a760b0a9bdaffbca4dc5799565cf44eede4f5fe->leave($__internal_069211bef619229c60584fe45a760b0a9bdaffbca4dc5799565cf44eede4f5fe_prof);

    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        $__internal_399d2306e53daca65196d170a5201df99a5ab608507c2dbc81c6bcbb2816ea85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399d2306e53daca65196d170a5201df99a5ab608507c2dbc81c6bcbb2816ea85->enter($__internal_399d2306e53daca65196d170a5201df99a5ab608507c2dbc81c6bcbb2816ea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        $__internal_d5efeff781cea1b0ded6885c026305f9b58414f63113cf5f4751e24395645a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5efeff781cea1b0ded6885c026305f9b58414f63113cf5f4751e24395645a57->enter($__internal_d5efeff781cea1b0ded6885c026305f9b58414f63113cf5f4751e24395645a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "id"));

        echo "";
        
        $__internal_d5efeff781cea1b0ded6885c026305f9b58414f63113cf5f4751e24395645a57->leave($__internal_d5efeff781cea1b0ded6885c026305f9b58414f63113cf5f4751e24395645a57_prof);

        
        $__internal_399d2306e53daca65196d170a5201df99a5ab608507c2dbc81c6bcbb2816ea85->leave($__internal_399d2306e53daca65196d170a5201df99a5ab608507c2dbc81c6bcbb2816ea85_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_016dadb947f0ff409d314a26e426f07082302e142e28153112df4cbcaca9a566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016dadb947f0ff409d314a26e426f07082302e142e28153112df4cbcaca9a566->enter($__internal_016dadb947f0ff409d314a26e426f07082302e142e28153112df4cbcaca9a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d5ab8b12d79a6f852251e50352b52da40d89cb7e2b79358e3a753126c743092f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ab8b12d79a6f852251e50352b52da40d89cb7e2b79358e3a753126c743092f->enter($__internal_d5ab8b12d79a6f852251e50352b52da40d89cb7e2b79358e3a753126c743092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d5ab8b12d79a6f852251e50352b52da40d89cb7e2b79358e3a753126c743092f->leave($__internal_d5ab8b12d79a6f852251e50352b52da40d89cb7e2b79358e3a753126c743092f_prof);

        
        $__internal_016dadb947f0ff409d314a26e426f07082302e142e28153112df4cbcaca9a566->leave($__internal_016dadb947f0ff409d314a26e426f07082302e142e28153112df4cbcaca9a566_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c59cb15c6c6b64907b0d6af9b33e8069ecf34b9faddeb319c7be4e1032a3420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c59cb15c6c6b64907b0d6af9b33e8069ecf34b9faddeb319c7be4e1032a3420->enter($__internal_1c59cb15c6c6b64907b0d6af9b33e8069ecf34b9faddeb319c7be4e1032a3420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ec68fb6d6e570b4f2a16cd7ea1c1ffaee829f44027559d39f6c4b614da687a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec68fb6d6e570b4f2a16cd7ea1c1ffaee829f44027559d39f6c4b614da687a1->enter($__internal_0ec68fb6d6e570b4f2a16cd7ea1c1ffaee829f44027559d39f6c4b614da687a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ec68fb6d6e570b4f2a16cd7ea1c1ffaee829f44027559d39f6c4b614da687a1->leave($__internal_0ec68fb6d6e570b4f2a16cd7ea1c1ffaee829f44027559d39f6c4b614da687a1_prof);

        
        $__internal_1c59cb15c6c6b64907b0d6af9b33e8069ecf34b9faddeb319c7be4e1032a3420->leave($__internal_1c59cb15c6c6b64907b0d6af9b33e8069ecf34b9faddeb319c7be4e1032a3420_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d77963dc7bffbec5a147e6e533cc5aa87d2c24cd7e374d86ae44f51ca38ac72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77963dc7bffbec5a147e6e533cc5aa87d2c24cd7e374d86ae44f51ca38ac72f->enter($__internal_d77963dc7bffbec5a147e6e533cc5aa87d2c24cd7e374d86ae44f51ca38ac72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42ac0b9cc0b918c3a245c8d4ba037474c57c4b08b3f912e05d2ccb39237ec988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ac0b9cc0b918c3a245c8d4ba037474c57c4b08b3f912e05d2ccb39237ec988->enter($__internal_42ac0b9cc0b918c3a245c8d4ba037474c57c4b08b3f912e05d2ccb39237ec988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_42ac0b9cc0b918c3a245c8d4ba037474c57c4b08b3f912e05d2ccb39237ec988->leave($__internal_42ac0b9cc0b918c3a245c8d4ba037474c57c4b08b3f912e05d2ccb39237ec988_prof);

        
        $__internal_d77963dc7bffbec5a147e6e533cc5aa87d2c24cd7e374d86ae44f51ca38ac72f->leave($__internal_d77963dc7bffbec5a147e6e533cc5aa87d2c24cd7e374d86ae44f51ca38ac72f_prof);

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

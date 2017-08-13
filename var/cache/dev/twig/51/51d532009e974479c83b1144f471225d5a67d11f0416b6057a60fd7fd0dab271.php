<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18354aa02922891257ef4c49aaf8c0b11b965909f25619d07074fbb9887d7832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18354aa02922891257ef4c49aaf8c0b11b965909f25619d07074fbb9887d7832->enter($__internal_18354aa02922891257ef4c49aaf8c0b11b965909f25619d07074fbb9887d7832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3af244965dfcd099dde39ce43c1612dcae9ebdbdec2cf3ca0ecf585717af98bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af244965dfcd099dde39ce43c1612dcae9ebdbdec2cf3ca0ecf585717af98bf->enter($__internal_3af244965dfcd099dde39ce43c1612dcae9ebdbdec2cf3ca0ecf585717af98bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_18354aa02922891257ef4c49aaf8c0b11b965909f25619d07074fbb9887d7832->leave($__internal_18354aa02922891257ef4c49aaf8c0b11b965909f25619d07074fbb9887d7832_prof);

        
        $__internal_3af244965dfcd099dde39ce43c1612dcae9ebdbdec2cf3ca0ecf585717af98bf->leave($__internal_3af244965dfcd099dde39ce43c1612dcae9ebdbdec2cf3ca0ecf585717af98bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a86b02d88df7f1527bbe90f5e3434a7de67c1be62e2fe523f39a93578ada095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a86b02d88df7f1527bbe90f5e3434a7de67c1be62e2fe523f39a93578ada095->enter($__internal_8a86b02d88df7f1527bbe90f5e3434a7de67c1be62e2fe523f39a93578ada095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1ebf64c8ba1a4e7abf3afd29a36baff2097f3415cea5e74454963979ad3e862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ebf64c8ba1a4e7abf3afd29a36baff2097f3415cea5e74454963979ad3e862->enter($__internal_f1ebf64c8ba1a4e7abf3afd29a36baff2097f3415cea5e74454963979ad3e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f1ebf64c8ba1a4e7abf3afd29a36baff2097f3415cea5e74454963979ad3e862->leave($__internal_f1ebf64c8ba1a4e7abf3afd29a36baff2097f3415cea5e74454963979ad3e862_prof);

        
        $__internal_8a86b02d88df7f1527bbe90f5e3434a7de67c1be62e2fe523f39a93578ada095->leave($__internal_8a86b02d88df7f1527bbe90f5e3434a7de67c1be62e2fe523f39a93578ada095_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_47f7800584ad4b41a15cf50392c9fdd56706232c708e39fd6645dc5c846b9b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f7800584ad4b41a15cf50392c9fdd56706232c708e39fd6645dc5c846b9b7e->enter($__internal_47f7800584ad4b41a15cf50392c9fdd56706232c708e39fd6645dc5c846b9b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9f08d16df78cb20d0f6eb4895e715ee8f42e5959481e75c8dbd907034981b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f08d16df78cb20d0f6eb4895e715ee8f42e5959481e75c8dbd907034981b61->enter($__internal_e9f08d16df78cb20d0f6eb4895e715ee8f42e5959481e75c8dbd907034981b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e9f08d16df78cb20d0f6eb4895e715ee8f42e5959481e75c8dbd907034981b61->leave($__internal_e9f08d16df78cb20d0f6eb4895e715ee8f42e5959481e75c8dbd907034981b61_prof);

        
        $__internal_47f7800584ad4b41a15cf50392c9fdd56706232c708e39fd6645dc5c846b9b7e->leave($__internal_47f7800584ad4b41a15cf50392c9fdd56706232c708e39fd6645dc5c846b9b7e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d211202a00a4d44ff578104df73b3692beea7613cea340e984388085523ffbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d211202a00a4d44ff578104df73b3692beea7613cea340e984388085523ffbe->enter($__internal_8d211202a00a4d44ff578104df73b3692beea7613cea340e984388085523ffbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dca57420c77aba51931bb2e1f4e51ce77f15d244c68346940136366e3028dd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca57420c77aba51931bb2e1f4e51ce77f15d244c68346940136366e3028dd3f->enter($__internal_dca57420c77aba51931bb2e1f4e51ce77f15d244c68346940136366e3028dd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dca57420c77aba51931bb2e1f4e51ce77f15d244c68346940136366e3028dd3f->leave($__internal_dca57420c77aba51931bb2e1f4e51ce77f15d244c68346940136366e3028dd3f_prof);

        
        $__internal_8d211202a00a4d44ff578104df73b3692beea7613cea340e984388085523ffbe->leave($__internal_8d211202a00a4d44ff578104df73b3692beea7613cea340e984388085523ffbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/cibermania/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

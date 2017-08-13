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
        $__internal_c0ce009c0cc30fc27f2232e831c0d11e972fdb7ff9d5249d5519c5c2b0d30f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ce009c0cc30fc27f2232e831c0d11e972fdb7ff9d5249d5519c5c2b0d30f46->enter($__internal_c0ce009c0cc30fc27f2232e831c0d11e972fdb7ff9d5249d5519c5c2b0d30f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0b372e0714bca63d6c9532796a6a4acdefe8c306a10380da2c2ab0171c709f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b372e0714bca63d6c9532796a6a4acdefe8c306a10380da2c2ab0171c709f3e->enter($__internal_0b372e0714bca63d6c9532796a6a4acdefe8c306a10380da2c2ab0171c709f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c0ce009c0cc30fc27f2232e831c0d11e972fdb7ff9d5249d5519c5c2b0d30f46->leave($__internal_c0ce009c0cc30fc27f2232e831c0d11e972fdb7ff9d5249d5519c5c2b0d30f46_prof);

        
        $__internal_0b372e0714bca63d6c9532796a6a4acdefe8c306a10380da2c2ab0171c709f3e->leave($__internal_0b372e0714bca63d6c9532796a6a4acdefe8c306a10380da2c2ab0171c709f3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_404c756f59ce11b786b7f61e2e4e5e5b8e6483c5739a17d67f85f134e1ac2428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404c756f59ce11b786b7f61e2e4e5e5b8e6483c5739a17d67f85f134e1ac2428->enter($__internal_404c756f59ce11b786b7f61e2e4e5e5b8e6483c5739a17d67f85f134e1ac2428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93835ca0f50d788472e60704e179b6927d7d0e22745e7a4495ac3dc9ba9b7f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93835ca0f50d788472e60704e179b6927d7d0e22745e7a4495ac3dc9ba9b7f75->enter($__internal_93835ca0f50d788472e60704e179b6927d7d0e22745e7a4495ac3dc9ba9b7f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_93835ca0f50d788472e60704e179b6927d7d0e22745e7a4495ac3dc9ba9b7f75->leave($__internal_93835ca0f50d788472e60704e179b6927d7d0e22745e7a4495ac3dc9ba9b7f75_prof);

        
        $__internal_404c756f59ce11b786b7f61e2e4e5e5b8e6483c5739a17d67f85f134e1ac2428->leave($__internal_404c756f59ce11b786b7f61e2e4e5e5b8e6483c5739a17d67f85f134e1ac2428_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_349be90619a7fd7124842315983b26507a46ca27feca8e5d0bc9a01acdf67b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349be90619a7fd7124842315983b26507a46ca27feca8e5d0bc9a01acdf67b14->enter($__internal_349be90619a7fd7124842315983b26507a46ca27feca8e5d0bc9a01acdf67b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fca02889f427257f3d80ade80aa6bec00a4f2819bb624590dcb979c3862441e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca02889f427257f3d80ade80aa6bec00a4f2819bb624590dcb979c3862441e7->enter($__internal_fca02889f427257f3d80ade80aa6bec00a4f2819bb624590dcb979c3862441e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fca02889f427257f3d80ade80aa6bec00a4f2819bb624590dcb979c3862441e7->leave($__internal_fca02889f427257f3d80ade80aa6bec00a4f2819bb624590dcb979c3862441e7_prof);

        
        $__internal_349be90619a7fd7124842315983b26507a46ca27feca8e5d0bc9a01acdf67b14->leave($__internal_349be90619a7fd7124842315983b26507a46ca27feca8e5d0bc9a01acdf67b14_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf1bb5a054414fbca8a9b25b2a85da3bf2bece1a8478d8f2ba1f1cada159144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf1bb5a054414fbca8a9b25b2a85da3bf2bece1a8478d8f2ba1f1cada159144->enter($__internal_3cf1bb5a054414fbca8a9b25b2a85da3bf2bece1a8478d8f2ba1f1cada159144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b627a99e4464cb0bcedf04c5e121a8db8f5d9bfef8d056ce9f782a978798e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b627a99e4464cb0bcedf04c5e121a8db8f5d9bfef8d056ce9f782a978798e8f->enter($__internal_1b627a99e4464cb0bcedf04c5e121a8db8f5d9bfef8d056ce9f782a978798e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b627a99e4464cb0bcedf04c5e121a8db8f5d9bfef8d056ce9f782a978798e8f->leave($__internal_1b627a99e4464cb0bcedf04c5e121a8db8f5d9bfef8d056ce9f782a978798e8f_prof);

        
        $__internal_3cf1bb5a054414fbca8a9b25b2a85da3bf2bece1a8478d8f2ba1f1cada159144->leave($__internal_3cf1bb5a054414fbca8a9b25b2a85da3bf2bece1a8478d8f2ba1f1cada159144_prof);

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

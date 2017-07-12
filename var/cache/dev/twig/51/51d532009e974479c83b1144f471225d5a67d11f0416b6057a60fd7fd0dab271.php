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
        $__internal_2587e141524058b8e8309b8ebafb89fcfe8b035507647efaa6b92e0b43b93bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2587e141524058b8e8309b8ebafb89fcfe8b035507647efaa6b92e0b43b93bf6->enter($__internal_2587e141524058b8e8309b8ebafb89fcfe8b035507647efaa6b92e0b43b93bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ac5576f9e6bae9d2f964337445903f2ac696259b55baa0f44d57efddcd73a76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5576f9e6bae9d2f964337445903f2ac696259b55baa0f44d57efddcd73a76c->enter($__internal_ac5576f9e6bae9d2f964337445903f2ac696259b55baa0f44d57efddcd73a76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2587e141524058b8e8309b8ebafb89fcfe8b035507647efaa6b92e0b43b93bf6->leave($__internal_2587e141524058b8e8309b8ebafb89fcfe8b035507647efaa6b92e0b43b93bf6_prof);

        
        $__internal_ac5576f9e6bae9d2f964337445903f2ac696259b55baa0f44d57efddcd73a76c->leave($__internal_ac5576f9e6bae9d2f964337445903f2ac696259b55baa0f44d57efddcd73a76c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e165649a12c73c47ca417f0bed5df97b57cdcfee58bef4de981cf6cd03841ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e165649a12c73c47ca417f0bed5df97b57cdcfee58bef4de981cf6cd03841ec->enter($__internal_9e165649a12c73c47ca417f0bed5df97b57cdcfee58bef4de981cf6cd03841ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2255e7d45a76fa9deff00a675d55ae80aaca66d4f05c4b807042fee1e91426d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2255e7d45a76fa9deff00a675d55ae80aaca66d4f05c4b807042fee1e91426d->enter($__internal_e2255e7d45a76fa9deff00a675d55ae80aaca66d4f05c4b807042fee1e91426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e2255e7d45a76fa9deff00a675d55ae80aaca66d4f05c4b807042fee1e91426d->leave($__internal_e2255e7d45a76fa9deff00a675d55ae80aaca66d4f05c4b807042fee1e91426d_prof);

        
        $__internal_9e165649a12c73c47ca417f0bed5df97b57cdcfee58bef4de981cf6cd03841ec->leave($__internal_9e165649a12c73c47ca417f0bed5df97b57cdcfee58bef4de981cf6cd03841ec_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebda4a66276453d92602fc51790f0d1363f8a4ac2d06958070ccff84ba3b9ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebda4a66276453d92602fc51790f0d1363f8a4ac2d06958070ccff84ba3b9ec6->enter($__internal_ebda4a66276453d92602fc51790f0d1363f8a4ac2d06958070ccff84ba3b9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97f1d4b3e613e709f385a20c320a3575a15847b8a7be3bd068a6fa12a077854a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1d4b3e613e709f385a20c320a3575a15847b8a7be3bd068a6fa12a077854a->enter($__internal_97f1d4b3e613e709f385a20c320a3575a15847b8a7be3bd068a6fa12a077854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_97f1d4b3e613e709f385a20c320a3575a15847b8a7be3bd068a6fa12a077854a->leave($__internal_97f1d4b3e613e709f385a20c320a3575a15847b8a7be3bd068a6fa12a077854a_prof);

        
        $__internal_ebda4a66276453d92602fc51790f0d1363f8a4ac2d06958070ccff84ba3b9ec6->leave($__internal_ebda4a66276453d92602fc51790f0d1363f8a4ac2d06958070ccff84ba3b9ec6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a12b5e789a7b51ba4ac033add3816e854cfbc3e09deb2fad9796f1ca6834d2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12b5e789a7b51ba4ac033add3816e854cfbc3e09deb2fad9796f1ca6834d2d0->enter($__internal_a12b5e789a7b51ba4ac033add3816e854cfbc3e09deb2fad9796f1ca6834d2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35b7efbcea6fd7973da5717380ae5d8a3be02b7eaa0194f81a6ff6959ce67b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b7efbcea6fd7973da5717380ae5d8a3be02b7eaa0194f81a6ff6959ce67b0f->enter($__internal_35b7efbcea6fd7973da5717380ae5d8a3be02b7eaa0194f81a6ff6959ce67b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35b7efbcea6fd7973da5717380ae5d8a3be02b7eaa0194f81a6ff6959ce67b0f->leave($__internal_35b7efbcea6fd7973da5717380ae5d8a3be02b7eaa0194f81a6ff6959ce67b0f_prof);

        
        $__internal_a12b5e789a7b51ba4ac033add3816e854cfbc3e09deb2fad9796f1ca6834d2d0->leave($__internal_a12b5e789a7b51ba4ac033add3816e854cfbc3e09deb2fad9796f1ca6834d2d0_prof);

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

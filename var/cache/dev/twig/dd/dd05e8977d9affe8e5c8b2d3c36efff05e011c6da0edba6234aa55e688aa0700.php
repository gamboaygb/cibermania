<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_200e70aa79ba9762f5e1b53c8be76a46df5a77fb5e512d919d229216542ee94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200e70aa79ba9762f5e1b53c8be76a46df5a77fb5e512d919d229216542ee94d->enter($__internal_200e70aa79ba9762f5e1b53c8be76a46df5a77fb5e512d919d229216542ee94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_16f8747d41de10e0e2912f969fa8e624360a8c620f30c895ae5dab794f7ab23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f8747d41de10e0e2912f969fa8e624360a8c620f30c895ae5dab794f7ab23e->enter($__internal_16f8747d41de10e0e2912f969fa8e624360a8c620f30c895ae5dab794f7ab23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_200e70aa79ba9762f5e1b53c8be76a46df5a77fb5e512d919d229216542ee94d->leave($__internal_200e70aa79ba9762f5e1b53c8be76a46df5a77fb5e512d919d229216542ee94d_prof);

        
        $__internal_16f8747d41de10e0e2912f969fa8e624360a8c620f30c895ae5dab794f7ab23e->leave($__internal_16f8747d41de10e0e2912f969fa8e624360a8c620f30c895ae5dab794f7ab23e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e6ed913072201a11d6b83cf9f2856270f678aeaa393e899fcf3e32bd5b34977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6ed913072201a11d6b83cf9f2856270f678aeaa393e899fcf3e32bd5b34977->enter($__internal_4e6ed913072201a11d6b83cf9f2856270f678aeaa393e899fcf3e32bd5b34977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91449e163e216b98403623b83023041fc5ae9dd4ecb10da800e66346722fdadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91449e163e216b98403623b83023041fc5ae9dd4ecb10da800e66346722fdadb->enter($__internal_91449e163e216b98403623b83023041fc5ae9dd4ecb10da800e66346722fdadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91449e163e216b98403623b83023041fc5ae9dd4ecb10da800e66346722fdadb->leave($__internal_91449e163e216b98403623b83023041fc5ae9dd4ecb10da800e66346722fdadb_prof);

        
        $__internal_4e6ed913072201a11d6b83cf9f2856270f678aeaa393e899fcf3e32bd5b34977->leave($__internal_4e6ed913072201a11d6b83cf9f2856270f678aeaa393e899fcf3e32bd5b34977_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c388f0cafeb35b768d7d88256d0852e692e7b82443dfdcc21b8f890fca6b6461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c388f0cafeb35b768d7d88256d0852e692e7b82443dfdcc21b8f890fca6b6461->enter($__internal_c388f0cafeb35b768d7d88256d0852e692e7b82443dfdcc21b8f890fca6b6461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5b38e37e836bb8f1b75fdcdf489c3f98c8234dc943161dccd9c923e7e9243dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b38e37e836bb8f1b75fdcdf489c3f98c8234dc943161dccd9c923e7e9243dc->enter($__internal_f5b38e37e836bb8f1b75fdcdf489c3f98c8234dc943161dccd9c923e7e9243dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f5b38e37e836bb8f1b75fdcdf489c3f98c8234dc943161dccd9c923e7e9243dc->leave($__internal_f5b38e37e836bb8f1b75fdcdf489c3f98c8234dc943161dccd9c923e7e9243dc_prof);

        
        $__internal_c388f0cafeb35b768d7d88256d0852e692e7b82443dfdcc21b8f890fca6b6461->leave($__internal_c388f0cafeb35b768d7d88256d0852e692e7b82443dfdcc21b8f890fca6b6461_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3692c5bad8d0bbbb6dc37f08c8249fbb08d7d989c5eb455cca2825eb182b0fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3692c5bad8d0bbbb6dc37f08c8249fbb08d7d989c5eb455cca2825eb182b0fd1->enter($__internal_3692c5bad8d0bbbb6dc37f08c8249fbb08d7d989c5eb455cca2825eb182b0fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9b023838916730211608d023b206cb6503f9ba85b9c682b3ec96faab6fe4114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b023838916730211608d023b206cb6503f9ba85b9c682b3ec96faab6fe4114->enter($__internal_b9b023838916730211608d023b206cb6503f9ba85b9c682b3ec96faab6fe4114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9b023838916730211608d023b206cb6503f9ba85b9c682b3ec96faab6fe4114->leave($__internal_b9b023838916730211608d023b206cb6503f9ba85b9c682b3ec96faab6fe4114_prof);

        
        $__internal_3692c5bad8d0bbbb6dc37f08c8249fbb08d7d989c5eb455cca2825eb182b0fd1->leave($__internal_3692c5bad8d0bbbb6dc37f08c8249fbb08d7d989c5eb455cca2825eb182b0fd1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_398d6828349445b38eeba2a2738a5143ac4447ee9c71f3462e9c08c7cfa38020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398d6828349445b38eeba2a2738a5143ac4447ee9c71f3462e9c08c7cfa38020->enter($__internal_398d6828349445b38eeba2a2738a5143ac4447ee9c71f3462e9c08c7cfa38020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5ce55ce2df35b4d596c63c4a907d350fab48a822b5f27ba340c783164c092068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce55ce2df35b4d596c63c4a907d350fab48a822b5f27ba340c783164c092068->enter($__internal_5ce55ce2df35b4d596c63c4a907d350fab48a822b5f27ba340c783164c092068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5ce55ce2df35b4d596c63c4a907d350fab48a822b5f27ba340c783164c092068->leave($__internal_5ce55ce2df35b4d596c63c4a907d350fab48a822b5f27ba340c783164c092068_prof);

        
        $__internal_398d6828349445b38eeba2a2738a5143ac4447ee9c71f3462e9c08c7cfa38020->leave($__internal_398d6828349445b38eeba2a2738a5143ac4447ee9c71f3462e9c08c7cfa38020_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/cibermania/app/Resources/views/base.html.twig");
    }
}

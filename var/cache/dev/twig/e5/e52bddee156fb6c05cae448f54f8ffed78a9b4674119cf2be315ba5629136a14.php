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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91785d0d0b1e69db6e62a9df2a814ce6b99da4bee1957b954af86737782b0ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91785d0d0b1e69db6e62a9df2a814ce6b99da4bee1957b954af86737782b0ce8->enter($__internal_91785d0d0b1e69db6e62a9df2a814ce6b99da4bee1957b954af86737782b0ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3877e2eec94362f68ab1f9afd27fa1889fe6ca2d110df96fe68a6c3df31f7648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3877e2eec94362f68ab1f9afd27fa1889fe6ca2d110df96fe68a6c3df31f7648->enter($__internal_3877e2eec94362f68ab1f9afd27fa1889fe6ca2d110df96fe68a6c3df31f7648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_91785d0d0b1e69db6e62a9df2a814ce6b99da4bee1957b954af86737782b0ce8->leave($__internal_91785d0d0b1e69db6e62a9df2a814ce6b99da4bee1957b954af86737782b0ce8_prof);

        
        $__internal_3877e2eec94362f68ab1f9afd27fa1889fe6ca2d110df96fe68a6c3df31f7648->leave($__internal_3877e2eec94362f68ab1f9afd27fa1889fe6ca2d110df96fe68a6c3df31f7648_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_219a90ab2d0e0fd062e329c0e0871cbd9c6ca384d6f3be98037468d4443f41c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219a90ab2d0e0fd062e329c0e0871cbd9c6ca384d6f3be98037468d4443f41c5->enter($__internal_219a90ab2d0e0fd062e329c0e0871cbd9c6ca384d6f3be98037468d4443f41c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9054857c8f2fa4eeb6c7095d9ee22e950151a85e20079350a7b3f763e9fae40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9054857c8f2fa4eeb6c7095d9ee22e950151a85e20079350a7b3f763e9fae40->enter($__internal_d9054857c8f2fa4eeb6c7095d9ee22e950151a85e20079350a7b3f763e9fae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9054857c8f2fa4eeb6c7095d9ee22e950151a85e20079350a7b3f763e9fae40->leave($__internal_d9054857c8f2fa4eeb6c7095d9ee22e950151a85e20079350a7b3f763e9fae40_prof);

        
        $__internal_219a90ab2d0e0fd062e329c0e0871cbd9c6ca384d6f3be98037468d4443f41c5->leave($__internal_219a90ab2d0e0fd062e329c0e0871cbd9c6ca384d6f3be98037468d4443f41c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27d2a67033ca42a768b958897ec49f257dd1f528c2a3e6ae8e9bfe45da4f7172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d2a67033ca42a768b958897ec49f257dd1f528c2a3e6ae8e9bfe45da4f7172->enter($__internal_27d2a67033ca42a768b958897ec49f257dd1f528c2a3e6ae8e9bfe45da4f7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a89c3a5f63f52fce9ef5aa437a79387d4e6cd035e6ae5ed298c5f81d7b3cf29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a89c3a5f63f52fce9ef5aa437a79387d4e6cd035e6ae5ed298c5f81d7b3cf29->enter($__internal_9a89c3a5f63f52fce9ef5aa437a79387d4e6cd035e6ae5ed298c5f81d7b3cf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a89c3a5f63f52fce9ef5aa437a79387d4e6cd035e6ae5ed298c5f81d7b3cf29->leave($__internal_9a89c3a5f63f52fce9ef5aa437a79387d4e6cd035e6ae5ed298c5f81d7b3cf29_prof);

        
        $__internal_27d2a67033ca42a768b958897ec49f257dd1f528c2a3e6ae8e9bfe45da4f7172->leave($__internal_27d2a67033ca42a768b958897ec49f257dd1f528c2a3e6ae8e9bfe45da4f7172_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05b6d2e50698a29b20c84f41361d3352d4577e5291386ee226ab697d5d120766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b6d2e50698a29b20c84f41361d3352d4577e5291386ee226ab697d5d120766->enter($__internal_05b6d2e50698a29b20c84f41361d3352d4577e5291386ee226ab697d5d120766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46ba9a21649b5b65831d0e6dddad857250f7c676800c3ea969ab377906a3fa2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ba9a21649b5b65831d0e6dddad857250f7c676800c3ea969ab377906a3fa2e->enter($__internal_46ba9a21649b5b65831d0e6dddad857250f7c676800c3ea969ab377906a3fa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46ba9a21649b5b65831d0e6dddad857250f7c676800c3ea969ab377906a3fa2e->leave($__internal_46ba9a21649b5b65831d0e6dddad857250f7c676800c3ea969ab377906a3fa2e_prof);

        
        $__internal_05b6d2e50698a29b20c84f41361d3352d4577e5291386ee226ab697d5d120766->leave($__internal_05b6d2e50698a29b20c84f41361d3352d4577e5291386ee226ab697d5d120766_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81f4e7b0914a1000282d81a636449b5eed9314465110cd5ea61700d3119262bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f4e7b0914a1000282d81a636449b5eed9314465110cd5ea61700d3119262bc->enter($__internal_81f4e7b0914a1000282d81a636449b5eed9314465110cd5ea61700d3119262bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e758c1a67f8744b00544700d0ee3286fafbf05954932a205650e946fc8e3d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e758c1a67f8744b00544700d0ee3286fafbf05954932a205650e946fc8e3d59->enter($__internal_5e758c1a67f8744b00544700d0ee3286fafbf05954932a205650e946fc8e3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e758c1a67f8744b00544700d0ee3286fafbf05954932a205650e946fc8e3d59->leave($__internal_5e758c1a67f8744b00544700d0ee3286fafbf05954932a205650e946fc8e3d59_prof);

        
        $__internal_81f4e7b0914a1000282d81a636449b5eed9314465110cd5ea61700d3119262bc->leave($__internal_81f4e7b0914a1000282d81a636449b5eed9314465110cd5ea61700d3119262bc_prof);

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

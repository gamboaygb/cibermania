<?php

/* static/_category_list.html.twig */
class __TwigTemplate_6ada729fe87028e9458ef8134bfa24154924c124b13b63d416312fd110114279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26c76ef6cbbe017d5d3219f68cba045f9244e83b4ba14c9f2c9c0bfe7b9d346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26c76ef6cbbe017d5d3219f68cba045f9244e83b4ba14c9f2c9c0bfe7b9d346->enter($__internal_b26c76ef6cbbe017d5d3219f68cba045f9244e83b4ba14c9f2c9c0bfe7b9d346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "static/_category_list.html.twig"));

        $__internal_eb6bae4f6593a4d75de1d87445d81b89d290436a753b2a7427e900465d56c324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6bae4f6593a4d75de1d87445d81b89d290436a753b2a7427e900465d56c324->enter($__internal_eb6bae4f6593a4d75de1d87445d81b89d290436a753b2a7427e900465d56c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "static/_category_list.html.twig"));

        // line 1
        echo "<ul class=\" col-xs-12 col-sm-10 col-md-6 mx-auto in-line\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_post_list", array("slug" => twig_lower_filter($this->env, $this->getAttribute($context["cat"], "name", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>";
        
        $__internal_b26c76ef6cbbe017d5d3219f68cba045f9244e83b4ba14c9f2c9c0bfe7b9d346->leave($__internal_b26c76ef6cbbe017d5d3219f68cba045f9244e83b4ba14c9f2c9c0bfe7b9d346_prof);

        
        $__internal_eb6bae4f6593a4d75de1d87445d81b89d290436a753b2a7427e900465d56c324->leave($__internal_eb6bae4f6593a4d75de1d87445d81b89d290436a753b2a7427e900465d56c324_prof);

    }

    public function getTemplateName()
    {
        return "static/_category_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\" col-xs-12 col-sm-10 col-md-6 mx-auto in-line\">
    {% for cat in category_list %}
        <li><a href=\"{{ path('category_post_list',{slug:cat.name|lower}) }}\">{{ cat.name }}</a> </li>
    {% endfor %}
</ul>", "static/_category_list.html.twig", "/var/www/cibermania/app/Resources/views/static/_category_list.html.twig");
    }
}

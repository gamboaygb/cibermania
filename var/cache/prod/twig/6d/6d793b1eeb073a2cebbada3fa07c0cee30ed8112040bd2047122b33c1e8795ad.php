<?php

/* front/homepage/_create_acount.html.twig */
class __TwigTemplate_36c61b6b3720f5f78176c3bc6de7847e377ed5501654e52dae7006433160bdbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("front/frontend.html.twig", "front/homepage/_create_acount.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "front/frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Crear Cuenta en cibermania";
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">
    <div class=\"col-12\">
        <h3 class=\"text-center\">Crea una cuenta en menos de 1 minuto y conviertete en cibermaniatico</h3>
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-8 mx-auto\">
       ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "my-form-class")));
        echo "

        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "person", array()), "name", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "person", array()), "lastName", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "user", array()), "email", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "user", array()), "passwordClear", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "person", array()), "photoPath", array()), 'widget');
        echo "
        </div>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "front/homepage/_create_acount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  76 => 25,  70 => 22,  64 => 19,  58 => 16,  52 => 13,  46 => 10,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/homepage/_create_acount.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/_create_acount.html.twig");
    }
}

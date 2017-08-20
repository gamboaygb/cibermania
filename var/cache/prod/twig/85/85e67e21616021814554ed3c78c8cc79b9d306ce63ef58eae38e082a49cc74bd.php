<?php

/* front/footer.html.twig */
class __TwigTemplate_b270de5cea75524feacffcb380c33bb62202a7881d8d2817509320b66d7a002c extends Twig_Template
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
        // line 1
        echo "    <footer class=\"container-fluid\">
        <div class=\"col-12 footer\">
            ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Front:footer"));
        echo "
        </div>
        <div class=\"col-12 main-footer\">
            ";
        // line 28
        echo "
                <div class=\"col-12\">
                    <p class=\"text-center reserved\">&copy; ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cibermania Todos los derechos reservados</p>
                    <a href=\"#\" id=\"back-to-top\" title=\"Back to top\">&uarr;</a>
                </div>

            </div>
        </div>


    </footer>";
    }

    public function getTemplateName()
    {
        return "front/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 30,  29 => 28,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/footer.html.twig", "/var/www/cibermania/app/Resources/views/front/footer.html.twig");
    }
}

<?php

/* front/footer.html.twig */
class __TwigTemplate_321b43d939cadf8df65b9e2b0f7b11b0eec76f2752ee688a133ec95483c221c4 extends Twig_Template
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
        $__internal_b608e5ebe364ef2cc1546b4261a7b20629ec04be7517f4d02bc1d2e666b7efb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b608e5ebe364ef2cc1546b4261a7b20629ec04be7517f4d02bc1d2e666b7efb5->enter($__internal_b608e5ebe364ef2cc1546b4261a7b20629ec04be7517f4d02bc1d2e666b7efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        $__internal_393e153d3a25fc2d5fcebbceb8c5460a7db7dba3dfd4f1983b181be2ba8b885e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393e153d3a25fc2d5fcebbceb8c5460a7db7dba3dfd4f1983b181be2ba8b885e->enter($__internal_393e153d3a25fc2d5fcebbceb8c5460a7db7dba3dfd4f1983b181be2ba8b885e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

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
        
        $__internal_b608e5ebe364ef2cc1546b4261a7b20629ec04be7517f4d02bc1d2e666b7efb5->leave($__internal_b608e5ebe364ef2cc1546b4261a7b20629ec04be7517f4d02bc1d2e666b7efb5_prof);

        
        $__internal_393e153d3a25fc2d5fcebbceb8c5460a7db7dba3dfd4f1983b181be2ba8b885e->leave($__internal_393e153d3a25fc2d5fcebbceb8c5460a7db7dba3dfd4f1983b181be2ba8b885e_prof);

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
        return array (  39 => 30,  35 => 28,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <footer class=\"container-fluid\">
        <div class=\"col-12 footer\">
            {{ render(controller('AppBundle:Front:footer')) }}
        </div>
        <div class=\"col-12 main-footer\">
            {#<div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-3\">
                        <img src=\"{{ asset('bundles/images/logo1.png') }}\">
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-6\">
                        <h3>Newsletter</h3>
                        <form action=\"\" method=\"post\">
                            <div class=\"col-12\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\" id=\"sizing-addon1\">@</span>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"ejemplo@cibermania.es\" />
                                    <span class=\"input-group-btn\">
                                               <button class=\"btn btn-success\" type=\"submit\">Subcribirme</button>
                                          </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-12 col-md-3\">
                </div>#}

                <div class=\"col-12\">
                    <p class=\"text-center reserved\">&copy; {{ 'now' | date('Y') }} - Cibermania Todos los derechos reservados</p>
                    <a href=\"#\" id=\"back-to-top\" title=\"Back to top\">&uarr;</a>
                </div>

            </div>
        </div>


    </footer>", "front/footer.html.twig", "/var/www/cibermania/app/Resources/views/front/footer.html.twig");
    }
}

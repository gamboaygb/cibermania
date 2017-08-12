<?php

/* front/homepage/_login.html.twig */
class __TwigTemplate_5aff9339dd1866f426fa6fc86ca4bbfc277f75bca5203867c17964eec0c329ba extends Twig_Template
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
        $__internal_89502b30c8fddf9f4cb0fa7ed2e985fc64f5136a1af42419147998e39fa1527f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89502b30c8fddf9f4cb0fa7ed2e985fc64f5136a1af42419147998e39fa1527f->enter($__internal_89502b30c8fddf9f4cb0fa7ed2e985fc64f5136a1af42419147998e39fa1527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/homepage/_login.html.twig"));

        $__internal_c7a795ba813838f78f70a95080710ac14297ec31d18e211d7d4ccf76149c3b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a795ba813838f78f70a95080710ac14297ec31d18e211d7d4ccf76149c3b2d->enter($__internal_c7a795ba813838f78f70a95080710ac14297ec31d18e211d7d4ccf76149c3b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/homepage/_login.html.twig"));

        // line 1
        echo "
<div class=\"col-12\">

         <h2>Accede a tu cuenta</h2>
         <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login_check");
        echo "\" method=\"post\">
             ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "                 <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
             ";
        }
        // line 9
        echo "             <div class=\"form-group\">
                 <input class=\"form-control\" placeholder=\"example@cibermania.es\" id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" />
             </div>

             <div class=\"form-group\">
                 <input type=\"password\" class=\"form-control\" id=\"login_pass\" placeholder=\"Contraseña\" name=\"_password\">
             </div>

             <div class=\"form-check\">
                 <label for=\"remember_me\" class=\"form-check-label\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                     No cerrar sesión
                 </label>

             </div>

             <div class=\"form-group\">
                 <input type=\"submit\" class=\"btn btn-outline-primary\" value=\"Entrar\">
             </div>
         </form>
    <a class=\"cuenta\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_account");
        echo "\"><button class=\"btn btn-outline-danger\">Regístrate</button></a>

    <ul class=\"social-link\">
        <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["facebook"] ?? $this->getContext($context, "facebook")), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i></a> </li>
    </ul>


</div>

";
        
        $__internal_89502b30c8fddf9f4cb0fa7ed2e985fc64f5136a1af42419147998e39fa1527f->leave($__internal_89502b30c8fddf9f4cb0fa7ed2e985fc64f5136a1af42419147998e39fa1527f_prof);

        
        $__internal_c7a795ba813838f78f70a95080710ac14297ec31d18e211d7d4ccf76149c3b2d->leave($__internal_c7a795ba813838f78f70a95080710ac14297ec31d18e211d7d4ccf76149c3b2d_prof);

    }

    public function getTemplateName()
    {
        return "front/homepage/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 32,  68 => 29,  46 => 10,  43 => 9,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"col-12\">

         <h2>Accede a tu cuenta</h2>
         <form action=\"{{ path('user_login_check') }}\" method=\"post\">
             {% if error %}
                 <div>{{ error.message }}</div>
             {% endif %}
             <div class=\"form-group\">
                 <input class=\"form-control\" placeholder=\"example@cibermania.es\" id=\"login_user\" type=\"text\" name=\"_username\" value=\"{{ last_username|default('') }}\" />
             </div>

             <div class=\"form-group\">
                 <input type=\"password\" class=\"form-control\" id=\"login_pass\" placeholder=\"Contraseña\" name=\"_password\">
             </div>

             <div class=\"form-check\">
                 <label for=\"remember_me\" class=\"form-check-label\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
                     No cerrar sesión
                 </label>

             </div>

             <div class=\"form-group\">
                 <input type=\"submit\" class=\"btn btn-outline-primary\" value=\"Entrar\">
             </div>
         </form>
    <a class=\"cuenta\" href=\"{{ path('create_account') }}\"><button class=\"btn btn-outline-danger\">Regístrate</button></a>

    <ul class=\"social-link\">
        <li><a href=\"{{ facebook }}\"><i class=\"fa fa-facebook-official fa-2x\" aria-hidden=\"true\"></i></a> </li>
    </ul>


</div>

", "front/homepage/_login.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/_login.html.twig");
    }
}

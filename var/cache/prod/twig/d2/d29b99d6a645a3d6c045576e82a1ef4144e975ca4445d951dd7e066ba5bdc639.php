<?php

/* front/homepage/_login.html.twig */
class __TwigTemplate_3632237d92563c2d8596c59250ab62364128673ff5c727eeabe56e3bc48e9a70 extends Twig_Template
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
        echo "
<div class=\"col-12\">

         <h2>Accede a tu cuenta</h2>
         <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login_check");
        echo "\" method=\"post\">
             ";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            echo "                 <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
            echo "</div>
             ";
        }
        // line 9
        echo "             <div class=\"form-group\">
                 <input class=\"form-control\" placeholder=\"example@cibermania.es\" id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
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


</div>

";
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
        return array (  62 => 29,  40 => 10,  37 => 9,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "front/homepage/_login.html.twig", "/var/www/cibermania/app/Resources/views/front/homepage/_login.html.twig");
    }
}

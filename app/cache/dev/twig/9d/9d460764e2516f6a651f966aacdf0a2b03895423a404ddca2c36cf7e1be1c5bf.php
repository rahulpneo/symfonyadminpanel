<?php

/* AdminBundle:Admin/Layout:footer.html.twig */
class __TwigTemplate_3d5e648d667e415a2c67d9c2b4692fa9c3976ded42b4bb2c1803152aa0b3f1c1 extends Twig_Template
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
        $__internal_343b67b2e94e21812b0b0d7e8c93e296e91e3162b39f2cce388535438a07e106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343b67b2e94e21812b0b0d7e8c93e296e91e3162b39f2cce388535438a07e106->enter($__internal_343b67b2e94e21812b0b0d7e8c93e296e91e3162b39f2cce388535438a07e106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:footer.html.twig"));

        // line 1
        echo "<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
         2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"page-footer-tools\">
        <span class=\"go-top\">
        <i class=\"fa fa-angle-up\"></i>
        </span>
    </div>
</div>";
        
        $__internal_343b67b2e94e21812b0b0d7e8c93e296e91e3162b39f2cce388535438a07e106->leave($__internal_343b67b2e94e21812b0b0d7e8c93e296e91e3162b39f2cce388535438a07e106_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-footer\">
    <div class=\"page-footer-inner\">
         2014 &copy; Metronic by keenthemes.
    </div>
    <div class=\"page-footer-tools\">
        <span class=\"go-top\">
        <i class=\"fa fa-angle-up\"></i>
        </span>
    </div>
</div>", "AdminBundle:Admin/Layout:footer.html.twig", "/var/www/html/symfonyAdminPanel/src/AdminBundle/Resources/views/Admin/Layout/footer.html.twig");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e7c78766e568aa3e0faf788a019a6aac385a48d64824f634802b48988824bcf8 extends Twig_Template
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
        $__internal_9305d3e1fe59c036ebe5279584ed8254b9d97f6f2d17c81daa02c41abbbe6153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9305d3e1fe59c036ebe5279584ed8254b9d97f6f2d17c81daa02c41abbbe6153->enter($__internal_9305d3e1fe59c036ebe5279584ed8254b9d97f6f2d17c81daa02c41abbbe6153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9305d3e1fe59c036ebe5279584ed8254b9d97f6f2d17c81daa02c41abbbe6153->leave($__internal_9305d3e1fe59c036ebe5279584ed8254b9d97f6f2d17c81daa02c41abbbe6153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfonyAdminPanel--/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

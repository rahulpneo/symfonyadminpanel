<?php

/* AdminBundle:Admin:login.html.twig */
class __TwigTemplate_4189d42706f9c4b392aef5d725978b672683360e3398f2fa2a0f441ba5f9d50a extends Twig_Template
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
        $__internal_651177bf2f5e57943edc8ad5e33093f46104017566978a521d9ccf5a9bc78ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651177bf2f5e57943edc8ad5e33093f46104017566978a521d9ccf5a9bc78ef3->enter($__internal_651177bf2f5e57943edc8ad5e33093f46104017566978a521d9ccf5a9bc78ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>Metronic | User Login 1</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\" login\">
        <!-- BEGIN LOGO -->
        <div class=\"logo\">
            <a href=\"index.html\">
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/img/logo-big.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
       
            <div></div>
      
            <!-- BEGIN LOGIN FORM -->
            <form class=\"login-form\" action=\"login_check\" method=\"post\">
                <h3 class=\"form-title font-green\">Sign In</h3>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                     ";
        // line 68
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != " ")) {
            // line 69
            echo "                    <span> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
                      ";
        }
        // line 71
        echo "                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >

                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\" value=\"\"/> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"password\" /> </div>
                     <!-- <input type=\"hidden\" name=\"_failure_path\"  /> -->
<!--                      <input type=\"hidden\" name=\"_target_path\"  />
 -->                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn green uppercase\">Login</button>
                    <!-- <label class=\"rememberme check\">
                        <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"1\" />Remember </label> -->
                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                </div>
               
                <div class=\"create-account\">
                    <p>
                        <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            ";
        // line 98
        echo twig_include($this->env, $context, "AdminBundle:Admin:forgot_password.html.twig");
        echo "
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            ";
        // line 101
        echo twig_include($this->env, $context, "AdminBundle:Admin:registration.html.twig");
        echo "
            <!-- END REGISTRATION FORM -->
        </div>
        <div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/pages/scripts/login.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>";
        
        $__internal_651177bf2f5e57943edc8ad5e33093f46104017566978a521d9ccf5a9bc78ef3->leave($__internal_651177bf2f5e57943edc8ad5e33093f46104017566978a521d9ccf5a9bc78ef3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 128,  236 => 125,  230 => 122,  226 => 121,  222 => 120,  216 => 117,  212 => 116,  208 => 115,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  188 => 110,  182 => 107,  178 => 106,  170 => 101,  164 => 98,  137 => 74,  132 => 71,  126 => 69,  124 => 68,  108 => 55,  94 => 44,  88 => 41,  84 => 40,  78 => 37,  74 => 36,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  52 => 29,  22 => 1,);
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
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset=\"utf-8\" />
        <title>Metronic | User Login 1</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/uniform/css/uniform.default.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"{{ asset('bundles/assets/global/plugins/select2/css/select2.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('bundles/assets/global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('bundles/assets/global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=\"{{ asset('bundles/assets/pages/css/login.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\" login\">
        <!-- BEGIN LOGO -->
        <div class=\"logo\">
            <a href=\"index.html\">
                <img src=\"{{ asset('bundles/assets/pages/img/logo-big.png')}}\" alt=\"\" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
       
            <div></div>
      
            <!-- BEGIN LOGIN FORM -->
            <form class=\"login-form\" action=\"login_check\" method=\"post\">
                <h3 class=\"form-title font-green\">Sign In</h3>
                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                     {% if error !=' ' %}
                    <span> {{ error }}</span>
                      {% endif %}
                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >

                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\" value=\"\"/> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"password\" /> </div>
                     <!-- <input type=\"hidden\" name=\"_failure_path\"  /> -->
<!--                      <input type=\"hidden\" name=\"_target_path\"  />
 -->                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn green uppercase\">Login</button>
                    <!-- <label class=\"rememberme check\">
                        <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"1\" />Remember </label> -->
                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                </div>
               
                <div class=\"create-account\">
                    <p>
                        <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            {{ include('AdminBundle:Admin:forgot_password.html.twig') }}
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            {{ include('AdminBundle:Admin:registration.html.twig') }}
            <!-- END REGISTRATION FORM -->
        </div>
        <div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
<script src=\"{{ asset('bundles/assets/global/plugins/respond.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/global/plugins/excanvas.min.js')}}\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/js.cookie.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery.blockui.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/uniform/jquery.uniform.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/assets/global/plugins/select2/js/select2.full.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('bundles/assets/global/scripts/app.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('bundles/assets/pages/scripts/login.min.js')}}\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>", "AdminBundle:Admin:login.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/login.html.twig");
    }
}

<?php

/* AdminBundle:Admin/Layout:content.html.twig */
class __TwigTemplate_e2b7d0a8a83f67555863a1ce7945fbe5b8716c61051a6ce0ce1fdd641aa2db9d extends Twig_Template
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
        $__internal_e677649fc2dd27fb8b9aedf67c8e62aaf16bd345307400382be2365857070c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e677649fc2dd27fb8b9aedf67c8e62aaf16bd345307400382be2365857070c9c->enter($__internal_e677649fc2dd27fb8b9aedf67c8e62aaf16bd345307400382be2365857070c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin/Layout:content.html.twig"));

        // line 1
        echo "<div class=\"page-content-wrapper\">
    <div class=\"page-content\">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class=\"modal fade\" id=\"portlet-config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                        <h4 class=\"modal-title\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                        Widget settings form goes here
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn blue\">Save changes</button>
                        <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN STYLE CUSTOMIZER -->
        <div class=\"theme-panel hidden-xs hidden-sm\">
            <div class=\"toggler\">
            </div>
            <div class=\"toggler-close\">
            </div>
            <div class=\"theme-options\">
                <div class=\"theme-option theme-colors clearfix\">
                    <span>
                    THEME COLOR </span>
                    <ul>
                        <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\">
                        </li>
                        <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\">
                        </li>
                        <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\">
                        </li>
                        <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\">
                        </li>
                        <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\">
                        </li>
                        <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\">
                        </li>
                    </ul>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Layout </span>
                    <select class=\"layout-option form-control input-small\">
                        <option value=\"fluid\" selected=\"selected\">Fluid</option>
                        <option value=\"boxed\">Boxed</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Header </span>
                    <select class=\"page-header-option form-control input-small\">
                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                        <option value=\"default\">Default</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Mode</span>
                    <select class=\"sidebar-option form-control input-small\">
                        <option value=\"fixed\">Fixed</option>
                        <option value=\"default\" selected=\"selected\">Default</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Menu </span>
                    <select class=\"sidebar-menu-option form-control input-small\">
                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                        <option value=\"hover\">Hover</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Style </span>
                    <select class=\"sidebar-style-option form-control input-small\">
                        <option value=\"default\" selected=\"selected\">Default</option>
                        <option value=\"light\">Light</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Position </span>
                    <select class=\"sidebar-pos-option form-control input-small\">
                        <option value=\"left\" selected=\"selected\">Left</option>
                        <option value=\"right\">Right</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Footer </span>
                    <select class=\"page-footer-option form-control input-small\">
                        <option value=\"fixed\">Fixed</option>
                        <option value=\"default\" selected=\"selected\">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <h3 class=\"page-title\">
            Blank Page <small>blank page</small>
        </h3>
        <div class=\"page-bar\">
            <ul class=\"page-breadcrumb\">
                <li>
                    <i class=\"fa fa-home\"></i>
                    <a href=\"index.html\">Home</a>
                    <i class=\"fa fa-angle-right\"></i>
                </li>
                <li>
                    <a href=\"#\">Page Layouts</a>
                    <i class=\"fa fa-angle-right\"></i>
                </li>
                <li>
                    <a href=\"#\">Blank Page</a>
                </li>
            </ul>
            <div class=\"page-toolbar\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\">
                    Actions <i class=\"fa fa-angle-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li>
                            <a href=\"#\">Action</a>
                        </li>
                        <li>
                            <a href=\"#\">Another action</a>
                        </li>
                        <li>
                            <a href=\"#\">Something else here</a>
                        </li>
                        <li class=\"divider\">
                        </li>
                        <li>
                            <a href=\"#\">Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class=\"row\">
            <div class=\"col-md-12\">
                Page content goes here
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>";
        
        $__internal_e677649fc2dd27fb8b9aedf67c8e62aaf16bd345307400382be2365857070c9c->leave($__internal_e677649fc2dd27fb8b9aedf67c8e62aaf16bd345307400382be2365857070c9c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin/Layout:content.html.twig";
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
        return new Twig_Source("<div class=\"page-content-wrapper\">
    <div class=\"page-content\">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class=\"modal fade\" id=\"portlet-config\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                        <h4 class=\"modal-title\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                        Widget settings form goes here
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn blue\">Save changes</button>
                        <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN STYLE CUSTOMIZER -->
        <div class=\"theme-panel hidden-xs hidden-sm\">
            <div class=\"toggler\">
            </div>
            <div class=\"toggler-close\">
            </div>
            <div class=\"theme-options\">
                <div class=\"theme-option theme-colors clearfix\">
                    <span>
                    THEME COLOR </span>
                    <ul>
                        <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\">
                        </li>
                        <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\">
                        </li>
                        <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\">
                        </li>
                        <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\">
                        </li>
                        <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\">
                        </li>
                        <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\">
                        </li>
                    </ul>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Layout </span>
                    <select class=\"layout-option form-control input-small\">
                        <option value=\"fluid\" selected=\"selected\">Fluid</option>
                        <option value=\"boxed\">Boxed</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Header </span>
                    <select class=\"page-header-option form-control input-small\">
                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                        <option value=\"default\">Default</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Mode</span>
                    <select class=\"sidebar-option form-control input-small\">
                        <option value=\"fixed\">Fixed</option>
                        <option value=\"default\" selected=\"selected\">Default</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Menu </span>
                    <select class=\"sidebar-menu-option form-control input-small\">
                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                        <option value=\"hover\">Hover</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Style </span>
                    <select class=\"sidebar-style-option form-control input-small\">
                        <option value=\"default\" selected=\"selected\">Default</option>
                        <option value=\"light\">Light</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Sidebar Position </span>
                    <select class=\"sidebar-pos-option form-control input-small\">
                        <option value=\"left\" selected=\"selected\">Left</option>
                        <option value=\"right\">Right</option>
                    </select>
                </div>
                <div class=\"theme-option\">
                    <span>
                    Footer </span>
                    <select class=\"page-footer-option form-control input-small\">
                        <option value=\"fixed\">Fixed</option>
                        <option value=\"default\" selected=\"selected\">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <h3 class=\"page-title\">
            Blank Page <small>blank page</small>
        </h3>
        <div class=\"page-bar\">
            <ul class=\"page-breadcrumb\">
                <li>
                    <i class=\"fa fa-home\"></i>
                    <a href=\"index.html\">Home</a>
                    <i class=\"fa fa-angle-right\"></i>
                </li>
                <li>
                    <a href=\"#\">Page Layouts</a>
                    <i class=\"fa fa-angle-right\"></i>
                </li>
                <li>
                    <a href=\"#\">Blank Page</a>
                </li>
            </ul>
            <div class=\"page-toolbar\">
                <div class=\"btn-group pull-right\">
                    <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\">
                    Actions <i class=\"fa fa-angle-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li>
                            <a href=\"#\">Action</a>
                        </li>
                        <li>
                            <a href=\"#\">Another action</a>
                        </li>
                        <li>
                            <a href=\"#\">Something else here</a>
                        </li>
                        <li class=\"divider\">
                        </li>
                        <li>
                            <a href=\"#\">Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class=\"row\">
            <div class=\"col-md-12\">
                Page content goes here
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>", "AdminBundle:Admin/Layout:content.html.twig", "/var/www/html/symfonyAdminPanel--/src/AdminBundle/Resources/views/Admin/Layout/content.html.twig");
    }
}

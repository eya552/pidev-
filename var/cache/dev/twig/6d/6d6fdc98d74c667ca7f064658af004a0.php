<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/Asidebar.html.twig */
class __TwigTemplate_b8b8b09ece50d55b3310ef97628f206d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Asidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Asidebar.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/Asidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
        <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
            <img src=\"../assets/img/logo-ct.png\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
            <span class=\"ms-1 font-weight-bold text-white\">Material Dashboard 2</span>
        </a>
        </div>
        <hr class=\"horizontal light mt-0 mb-2\">
        <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_dashboard");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">dashboard</i>
                </div>
                <span class=\"nav-link-text ms-1\">Dashboard</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white active bg-gradient-primary\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_tables");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">table_view</i>
                </div>
                <span class=\"nav-link-text ms-1\">Tables</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_billing");
        echo ".\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">receipt_long</i>
                </div>
                <span class=\"nav-link-text ms-1\">Billing</span>
            </a>
            </li>
            
            ";
        // line 50
        echo "            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_notifications");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">notifications</i>
                </div>
                <span class=\"nav-link-text ms-1\">Notifications</span>
            </a>
            </li>
            <li class=\"nav-item mt-3\">
            <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_profile");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">person</i>
                </div>
                <span class=\"nav-link-text ms-1\">Profile</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_sign-in");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">login</i>
                </div>
                <span class=\"nav-link-text ms-1\">Sign In</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_sign-up");
        echo "\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">assignment</i>
                </div>
                <span class=\"nav-link-text ms-1\">Sign Up</span>
            </a>
            </li>
        </ul>
        </div>
        <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
        <div class=\"mx-3\">
            <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
        </div>
        </div>
    </aside>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/Asidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 78,  145 => 70,  134 => 62,  120 => 51,  117 => 50,  106 => 34,  95 => 26,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/Base.html.twig'%}

{% block body %}


    <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
        <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
            <img src=\"../assets/img/logo-ct.png\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
            <span class=\"ms-1 font-weight-bold text-white\">Material Dashboard 2</span>
        </a>
        </div>
        <hr class=\"horizontal light mt-0 mb-2\">
        <div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_dashboard')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">dashboard</i>
                </div>
                <span class=\"nav-link-text ms-1\">Dashboard</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white active bg-gradient-primary\" href=\"{{path('display_tables')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">table_view</i>
                </div>
                <span class=\"nav-link-text ms-1\">Tables</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_billing')}}.\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">receipt_long</i>
                </div>
                <span class=\"nav-link-text ms-1\">Billing</span>
            </a>
            </li>
            
            {# <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_rtl')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
                </div>
                <span class=\"nav-link-text ms-1\">RTL</span>
            </a>
            </li> #}
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_notifications')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">notifications</i>
                </div>
                <span class=\"nav-link-text ms-1\">Notifications</span>
            </a>
            </li>
            <li class=\"nav-item mt-3\">
            <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_profile')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">person</i>
                </div>
                <span class=\"nav-link-text ms-1\">Profile</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_sign-in')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">login</i>
                </div>
                <span class=\"nav-link-text ms-1\">Sign In</span>
            </a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link text-white \" href=\"{{path('display_sign-up')}}\">
                <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                <i class=\"material-icons opacity-10\">assignment</i>
                </div>
                <span class=\"nav-link-text ms-1\">Sign Up</span>
            </a>
            </li>
        </ul>
        </div>
        <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
        <div class=\"mx-3\">
            <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
        </div>
        </div>
    </aside>

    {% endblock %}", "admin/Asidebar.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\admin\\Asidebar.html.twig");
    }
}

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

/* admin/Base.html.twig */
class __TwigTemplate_ccc56933fdf2efcf7c76148e4c0e6f42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </head>
    <body>

        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 279
        echo "
        ";
        // line 280
        $this->displayBlock('sidebar', $context, $blocks);
        // line 467
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 472
        echo "
    ";
        // line 473
        $this->displayBlock('footer', $context, $blocks);
        // line 488
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "

            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
            <!-- Vendor JS Files -->
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

            <!-- Template Main JS File -->
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/js/main.js"), "html", null, true);
        echo "\"></script>        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "            <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"search-bar\">
                    <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
                    </form>
                </div><!-- End Search Bar -->

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/img/messages-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/img/messages-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/img/messages-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Admin/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                             ";
        // line 218
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218) != null)) {
            // line 219
            echo "
                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "username", [], "any", false, false, false, 220), "html", null, true);
            echo "</span>
                                ";
        }
        // line 222
        echo "                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                ";
        // line 269
        echo "
                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 280
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 281
        echo "            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar col-md-2\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    ";
        // line 399
        echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            ";
        // line 415
        echo "                           
                           
                        </ul>
                    </li><!-- End Tables Nav -->

                   

                   

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"";
        // line 436
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_sign-in");
        echo "\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"";
        // line 443
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_sign-up");
        echo "\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Regiter</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 467
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 468
        echo "


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 473
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 474
        echo "        <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/Base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  635 => 474,  625 => 473,  612 => 468,  602 => 467,  568 => 443,  558 => 436,  535 => 415,  527 => 399,  520 => 281,  510 => 280,  491 => 269,  448 => 222,  443 => 220,  440 => 219,  438 => 218,  434 => 217,  408 => 194,  391 => 180,  374 => 166,  256 => 51,  249 => 46,  239 => 45,  228 => 41,  222 => 38,  218 => 37,  214 => 36,  210 => 35,  206 => 34,  202 => 33,  198 => 32,  194 => 31,  190 => 29,  180 => 28,  168 => 25,  162 => 22,  158 => 21,  154 => 20,  150 => 19,  146 => 18,  142 => 17,  138 => 16,  129 => 9,  119 => 8,  100 => 5,  88 => 488,  86 => 473,  83 => 472,  80 => 467,  78 => 280,  75 => 279,  73 => 45,  68 => 42,  66 => 28,  63 => 27,  60 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}


            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"{{ asset('assets/Admin/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/Admin/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"{{ asset('assets/Admin/css/style.css') }}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}

            <!-- Vendor JS Files -->
            <script src=\"{{ asset('assets/Admin/vendor/apexcharts/apexcharts.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/chart.js/chart.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/echarts/echarts.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/quill/quill.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/simple-datatables/simple-datatables.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/tinymce/tinymce.min.js') }}\"></script>
            <script src=\"{{ asset('assets/Admin/vendor/php-email-form/validate.js') }}\"></script>

            <!-- Template Main JS File -->
            <script src=\"{{ asset('assets/Admin/js/main.js') }}\"></script>        {% endblock %}
    </head>
    <body>

        {% block header %}
            <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"{{ asset('assets/Admin/img/logo.png')}}\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"search-bar\">
                    <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
                    </form>
                </div><!-- End Search Bar -->

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"{{ asset('assets/Admin/img/messages-1.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"{{ asset('assets/Admin/img/messages-2.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"{{ asset('assets/Admin/img/messages-3.jpg')}}\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"{{ asset('assets/Admin/img/profile-img.jpg')}}\" alt=\"Profile\" class=\"rounded-circle\">
                             {% if app.user !=null %}

                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.username }}</span>
                                {% endif %}
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                {# <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_logout') }}\">
                                        <i class=\"bi bi-box-arrow-right\"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li> #}

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        {% endblock %}

        {% block sidebar %}
            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar col-md-2\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    {# <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"{{path('display_dashboard')}}\">
                            <i class=\"bi bi-grid\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- End Dashboard Nav -->
                    

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-menu-button-wide\"></i><span>Gestion des proudits</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"components-alerts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Alerts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-accordion.html\">
                                    <i class=\"bi bi-circle\"></i><span>Accordion</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-badges.html\">
                                    <i class=\"bi bi-circle\"></i><span>Badges</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-breadcrumbs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-buttons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-cards.html\">
                                    <i class=\"bi bi-circle\"></i><span>Cards</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-carousel.html\">
                                    <i class=\"bi bi-circle\"></i><span>Carousel</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-list-group.html\">
                                    <i class=\"bi bi-circle\"></i><span>List group</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-modal.html\">
                                    <i class=\"bi bi-circle\"></i><span>Modal</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tabs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tabs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-pagination.html\">
                                    <i class=\"bi bi-circle\"></i><span>Pagination</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-progress.html\">
                                    <i class=\"bi bi-circle\"></i><span>Progress</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-spinners.html\">
                                    <i class=\"bi bi-circle\"></i><span>Spinners</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-tooltips.html\">
                                    <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-journal-text\"></i><span>Gestion des utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"forms-elements.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-layouts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-editors.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-validation.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Forms Nav --> #}

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            {# <li>
                                <a href=\"tables-general.html\">
                                    <i class=\"bi bi-circle\"></i><span>General Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"tables-data.html\">
                                    <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                                </a>
                            </li> #}
                           
                           
                        </ul>
                    </li><!-- End Tables Nav -->

                   

                   

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"{{path('display_sign-in')}}\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"{{path('display_sign-up')}}\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Regiter</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
        {% endblock %}
        {% block body %}



        {% endblock %}

    {% block footer %}
        <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
    {% endblock %}
    </body>
</html>
", "admin/Base.html.twig", "C:\\Users\\ghass\\OneDrive\\Documents\\GitHub\\pidev-\\templates\\admin\\Base.html.twig");
    }
}

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

/* footer.html.twig */
class __TwigTemplate_f51cc03e9724aa090da440ab7f084ca4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo " <!-- FOOTER
        ================================================== -->
        <footer class=\"pt-6 pt-md-8 bg-img dark-overlay\" data-overlay-dark=\"85\" data-background=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg/footer-map.png"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row pb-6 pb-md-8 mt-n1-9\">
                    <div class=\"col-md-6 col-lg-4 mt-1-9 wow fadeIn\" data-wow-delay=\"200ms\">
                        <div class=\"pe-lg-1-6 pe-xl-7\">
                            <div class=\"footer-logo mb-4\">
                                <a href=\"index-2.html\">
                                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logos/Vet_Assur__1_-removebg-preview.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </a>
                            </div>
                            <p class=\"mb-4 opacity85\">We assist you to develop up your flourishing commercial enterprise.</p>
                             
                                <form class=\"quform newsletter-form\" action=\"https://insurshtml.websitelayout.net/quform/newsletter-two.php\" method=\"post\" enctype=\"multipart/form-data\" onclick=\"\">

                                    <div class=\"quform-elements\">
                                        <div class=\"row\">

                                            <!-- Begin Text input element -->
                                            <div class=\"col-md-12\">
                                                <div class=\"quform-element mb-0\">
                                                    <div class=\"quform-input\">
                                                        <input class=\"form-control\" id=\"email_address\" type=\"text\" name=\"email_address\" placeholder=\"Subscribe with us\">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->

                                            <!-- Begin Submit button -->
                                            <div class=\"col-md-12\">
                                                <div class=\"quform-submit-inner\">
                                                    <button class=\"btn btn-white text-primary m-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                                                </div>
                                                <div class=\"quform-loading-wrap\"><span class=\"quform-loading\"></span></div>
                                            </div>
                                            <!-- End Submit button -->
                                        </div>

                                    </div>

                                </form>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-5 mt-1-9 wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"ps-xl-2-9\">
                            <h3 class=\"text-primary mb-1-9 h5\">Quick Links</h3>
                            <div class=\"row\">
                                
                                <div class=\"col-sm-6\">
                                    <ul class=\"footer-link list-unstyled mb-0\">
                                        <li class=\"mb-3\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Aboutus");
        echo "\">About Us</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Contactus");
        echo "\">Contact</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_E404");
        echo "\">404 Page</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_EspaceClient");
        echo "\">Espace client</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_EspaceVeterinaire");
        echo "\">Espace Veterinaire</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Actualites");
        echo "\">Actualités</a></li>
                                        <li class=\"mb-3\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ActualiteInfo");
        echo "\">Actualité Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 mt-1-9 wow fadeIn\" data-wow-delay=\"600ms\">
                        <h3 class=\"text-primary mb-1-9 h5\">Contact Us</h3>
                        <ul class=\"list-unstyled mb-1-9\">
                            <li class=\"text-white mb-3 opacity85\"><i class=\"far fa-envelope display-25 me-3 text-primary\"></i>InterstellarDeveloppers@esprit.tn</li>
                            <li class=\"text-white mb-3 opacity85\"><i class=\"fas fa-mobile-alt display-25 me-3 text-primary\"></i>(+216) 55 88 96 65</li>
                            <li class=\"opacity85\"><span class=\"text-white\"><i class=\"fas fa-map-marker-alt display-25 me-3 text-primary\"></i> Av. Fethi Zouhir, Cebalat Ben Ammar 2083.</span></li>
                        </ul>
                        <ul class=\"list-unstyled mb-0\"> 
                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://www.facebook.com/\" class=\"opacity-link\"><i class=\"ti-facebook\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://twitter.com/\" class=\"opacity-link\"><i class=\"ti-twitter-alt\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://instagram.com/\" class=\"opacity-link\"><i class=\"ti-instagram\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://www.linkedin.com/\" class=\"opacity-link\"><i class=\"ti-linkedin\"></i></a></li>

                            <li class=\"d-inline-block\"><a target=\"_blank\" href=\"https://dribbble.com/\" class=\"opacity-link\"><i class=\"ti-dribbble\"></i></a></li>
                                
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"border-top border-color-light-white-fifty text-center py-4\">
                <div class=\"container\">
                    <p class=\"mb-0 text-white\">&copy; <span class=\"current-year\"></span> Insurs Powered by <a class=\"text-primary text-white-hover\" href=\"#!\">InterstellarDeveloppers</a></p>
                </div>
            </div>

        </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  127 => 59,  123 => 58,  119 => 57,  115 => 56,  111 => 55,  107 => 54,  103 => 53,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- FOOTER
        ================================================== -->
        <footer class=\"pt-6 pt-md-8 bg-img dark-overlay\" data-overlay-dark=\"85\" data-background=\"{{asset('assets/img/bg/footer-map.png')}}\">
            <div class=\"container\">
                <div class=\"row pb-6 pb-md-8 mt-n1-9\">
                    <div class=\"col-md-6 col-lg-4 mt-1-9 wow fadeIn\" data-wow-delay=\"200ms\">
                        <div class=\"pe-lg-1-6 pe-xl-7\">
                            <div class=\"footer-logo mb-4\">
                                <a href=\"index-2.html\">
                                    <img src=\"{{asset('assets/img/logos/Vet_Assur__1_-removebg-preview.png')}}\" alt=\"...\">
                                </a>
                            </div>
                            <p class=\"mb-4 opacity85\">We assist you to develop up your flourishing commercial enterprise.</p>
                             
                                <form class=\"quform newsletter-form\" action=\"https://insurshtml.websitelayout.net/quform/newsletter-two.php\" method=\"post\" enctype=\"multipart/form-data\" onclick=\"\">

                                    <div class=\"quform-elements\">
                                        <div class=\"row\">

                                            <!-- Begin Text input element -->
                                            <div class=\"col-md-12\">
                                                <div class=\"quform-element mb-0\">
                                                    <div class=\"quform-input\">
                                                        <input class=\"form-control\" id=\"email_address\" type=\"text\" name=\"email_address\" placeholder=\"Subscribe with us\">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Text input element -->

                                            <!-- Begin Submit button -->
                                            <div class=\"col-md-12\">
                                                <div class=\"quform-submit-inner\">
                                                    <button class=\"btn btn-white text-primary m-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                                                </div>
                                                <div class=\"quform-loading-wrap\"><span class=\"quform-loading\"></span></div>
                                            </div>
                                            <!-- End Submit button -->
                                        </div>

                                    </div>

                                </form>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-5 mt-1-9 wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"ps-xl-2-9\">
                            <h3 class=\"text-primary mb-1-9 h5\">Quick Links</h3>
                            <div class=\"row\">
                                
                                <div class=\"col-sm-6\">
                                    <ul class=\"footer-link list-unstyled mb-0\">
                                        <li class=\"mb-3\"><a href=\"{{path('app_home')}}\">Home</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_Aboutus')}}\">About Us</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_Contactus')}}\">Contact</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_E404')}}\">404 Page</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_EspaceClient')}}\">Espace client</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_EspaceVeterinaire')}}\">Espace Veterinaire</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_Actualites')}}\">Actualités</a></li>
                                        <li class=\"mb-3\"><a href=\"{{path('app_ActualiteInfo')}}\">Actualité Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-lg-3 mt-1-9 wow fadeIn\" data-wow-delay=\"600ms\">
                        <h3 class=\"text-primary mb-1-9 h5\">Contact Us</h3>
                        <ul class=\"list-unstyled mb-1-9\">
                            <li class=\"text-white mb-3 opacity85\"><i class=\"far fa-envelope display-25 me-3 text-primary\"></i>InterstellarDeveloppers@esprit.tn</li>
                            <li class=\"text-white mb-3 opacity85\"><i class=\"fas fa-mobile-alt display-25 me-3 text-primary\"></i>(+216) 55 88 96 65</li>
                            <li class=\"opacity85\"><span class=\"text-white\"><i class=\"fas fa-map-marker-alt display-25 me-3 text-primary\"></i> Av. Fethi Zouhir, Cebalat Ben Ammar 2083.</span></li>
                        </ul>
                        <ul class=\"list-unstyled mb-0\"> 
                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://www.facebook.com/\" class=\"opacity-link\"><i class=\"ti-facebook\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://twitter.com/\" class=\"opacity-link\"><i class=\"ti-twitter-alt\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://instagram.com/\" class=\"opacity-link\"><i class=\"ti-instagram\"></i></a></li>

                            <li class=\"d-inline-block me-3\"><a target=\"_blank\" href=\"https://www.linkedin.com/\" class=\"opacity-link\"><i class=\"ti-linkedin\"></i></a></li>

                            <li class=\"d-inline-block\"><a target=\"_blank\" href=\"https://dribbble.com/\" class=\"opacity-link\"><i class=\"ti-dribbble\"></i></a></li>
                                
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"border-top border-color-light-white-fifty text-center py-4\">
                <div class=\"container\">
                    <p class=\"mb-0 text-white\">&copy; <span class=\"current-year\"></span> Insurs Powered by <a class=\"text-primary text-white-hover\" href=\"#!\">InterstellarDeveloppers</a></p>
                </div>
            </div>

        </footer>", "footer.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\Footer.html.twig");
    }
}

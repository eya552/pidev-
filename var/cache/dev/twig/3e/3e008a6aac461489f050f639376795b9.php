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

/* client/Contactus.html.twig */
class __TwigTemplate_3c496817d5ae32b7834067cf922cfc60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "client/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Contactus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Contactus.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "client/Contactus.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ClientController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- PAGE TITLE
        ================================================== -->
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/banner/page-title.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Contact Us</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-xl-4 mb-2-9 mb-lg-0 wow fadeIn\" data-wow-delay=\"200ms\">
                        <div class=\"pe-lg-3 mt-n1-9\">
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"200ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-location-pin text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Location</h4>
                                            <span>66 Guild Street 512B, Great North Town.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"400ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-mobile text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Phone Number</h4>
                                            <span class=\"d-block\">(+44) 123 456 789</span>
                                            <span>(+1) 234-567-9874</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"600ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-email text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Email Address</h4>
                                            <span class=\"d-block\">example@yourdomain.com</span>
                                            <span>info@yourdomain.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-xl-8 wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"contact-form p-4 p-md-5 ms-xl-3\">
                            <div class=\"title-style2 mb-2-2\">
                                <h2>Quick Contact</h2>
                            </div>
                            <form class=\"quform\" action=\"https://insurshtml.websitelayout.net/quform/contact.php\" method=\"post\" enctype=\"multipart/form-data\" onclick=\"\">
                                <div class=\"quform-elements\">
                                    <div class=\"row\">
                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"name\">Your Name <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" placeholder=\"Your name here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"email\">Your Email <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" placeholder=\"Your email here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"subject\">Your Subject <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"subject\" type=\"text\" name=\"subject\" placeholder=\"Your subject here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"phone\">Contact Number</label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"phone\" type=\"text\" name=\"phone\" placeholder=\"Your phone here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"message\">Message <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <textarea class=\"form-control h-auto\" id=\"message\" name=\"message\" rows=\"3\" placeholder=\"Tell us a few words\"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element\">
                                                <div class=\"form-group\">
                                                    <div class=\"quform-input\">
                                                        <input class=\"form-control\" id=\"type_the_word\" type=\"text\" name=\"type_the_word\" placeholder=\"Type the below word\" />
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <div class=\"quform-captcha\">
                                                        <div class=\"quform-captcha-inner\">
                                                            <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/quform/images/captcha/courier-new-light.png"), "html", null, true);
        echo "\" alt=\"...\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-submit-inner\">
                                                <button class=\"butn-style3 secondary\" type=\"submit\"><span>Send Message</span></button>
                                            </div>
                                            <div class=\"quform-loading-wrap text-start\"><span class=\"quform-loading\"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <div class=\"wow fadeIn\" data-wow-delay=\"600ms\">
            <iframe class=\"map\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"></iframe>
        </div>

       

    

   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/Contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 154,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/base.html.twig' %}

{% block title %}Hello ClientController!{% endblock %}

{% block body %}

<!-- PAGE TITLE
        ================================================== -->
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"{{asset('assets/client/img/banner/page-title.jpg')}}\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Contact Us</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 col-xl-4 mb-2-9 mb-lg-0 wow fadeIn\" data-wow-delay=\"200ms\">
                        <div class=\"pe-lg-3 mt-n1-9\">
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"200ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-location-pin text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Location</h4>
                                            <span>66 Guild Street 512B, Great North Town.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"400ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-mobile text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Phone Number</h4>
                                            <span class=\"d-block\">(+44) 123 456 789</span>
                                            <span>(+1) 234-567-9874</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card card-style8 mt-1-9 wow fadeIn\" data-wow-delay=\"600ms\">
                                <div class=\"card-body p-1-9\">
                                    <div class=\"media\">
                                        <div>
                                            <i class=\"ti-email text-white\"></i>
                                        </div>
                                        <div class=\"media-body ms-3\">
                                            <h4 class=\"h5\">Email Address</h4>
                                            <span class=\"d-block\">example@yourdomain.com</span>
                                            <span>info@yourdomain.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-7 col-xl-8 wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"contact-form p-4 p-md-5 ms-xl-3\">
                            <div class=\"title-style2 mb-2-2\">
                                <h2>Quick Contact</h2>
                            </div>
                            <form class=\"quform\" action=\"https://insurshtml.websitelayout.net/quform/contact.php\" method=\"post\" enctype=\"multipart/form-data\" onclick=\"\">
                                <div class=\"quform-elements\">
                                    <div class=\"row\">
                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"name\">Your Name <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" placeholder=\"Your name here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"email\">Your Email <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"email\" type=\"text\" name=\"email\" placeholder=\"Your email here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"subject\">Your Subject <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"subject\" type=\"text\" name=\"subject\" placeholder=\"Your subject here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"phone\">Contact Number</label>
                                                <div class=\"quform-input\">
                                                    <input class=\"form-control\" id=\"phone\" type=\"text\" name=\"phone\" placeholder=\"Your phone here\" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element form-group\">
                                                <label for=\"message\">Message <span class=\"quform-required\">*</span></label>
                                                <div class=\"quform-input\">
                                                    <textarea class=\"form-control h-auto\" id=\"message\" name=\"message\" rows=\"3\" placeholder=\"Tell us a few words\"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element\">
                                                <div class=\"form-group\">
                                                    <div class=\"quform-input\">
                                                        <input class=\"form-control\" id=\"type_the_word\" type=\"text\" name=\"type_the_word\" placeholder=\"Type the below word\" />
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <div class=\"quform-captcha\">
                                                        <div class=\"quform-captcha-inner\">
                                                            <img src=\"{{asset('assets/client/quform/images/captcha/courier-new-light.png')}}\" alt=\"...\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-submit-inner\">
                                                <button class=\"butn-style3 secondary\" type=\"submit\"><span>Send Message</span></button>
                                            </div>
                                            <div class=\"quform-loading-wrap text-start\"><span class=\"quform-loading\"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <div class=\"wow fadeIn\" data-wow-delay=\"600ms\">
            <iframe class=\"map\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"></iframe>
        </div>

       

    

   {% endblock %}", "client/Contactus.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\Contactus.html.twig");
    }
}

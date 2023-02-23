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

/* client/Aboutus.html.twig */
class __TwigTemplate_7faaba33bbae7b465a1729f324f3ffc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Aboutus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Aboutus.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "client/Aboutus.html.twig", 1);
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/banner/page-title.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>About Us</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- ABOUT US
        ================================================== -->
        <section class=\"bg-light\">
            <div class=\"container mt-lg-3 mt-xl-0\">
                <div class=\"row clearfix align-items-xl-center\">
                    <div class=\"col-lg-6 mb-2-9 mb-lg-0 position-relative wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"position-relative\">
                            <div class=\"text-center text-sm-end text-md-center text-lg-end pe-xxl-1-9 overflow-hidden position-relative\">
                                <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/about-01.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                            </div>
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/about-02.jpg"), "html", null, true);
        echo "\" class=\"rounded position-absolute top-15 d-none d-sm-block\" alt=\"...\">
                            <div class=\"bg-white text-center border-radius-10 p-1-9 d-inline-block position-absolute bottom-10 left-10\">
                                <h4 class=\"h1\"><span class=\"countup\">28</span>+</h4>
                                <span>Years of experience</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 text-column\">
                        <div class=\"ps-lg-2-3\">
                            <div class=\"title-style2 mb-1-6 wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h2 class=\"h1\">Providing full range of high exploring protection!</h2>
                            </div>
                            <p class=\"mb-2-2 wow fadeInUp\" data-wow-delay=\"200ms\">Team is a diverse network of consultants and industry professionals with a global mindset and a collaborative culture. We work to understand your issues and are driven to ask better questions.</p>
                            <div class=\"border-top border-bottom py-4 mb-2-3 wow fadeInUp\" data-wow-delay=\"300ms\">
                                <div class=\"row gx-5\">
                                    <div class=\"col-md-6 mb-4 mb-md-0\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/icons/01.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-3\">
                                                <h4 class=\"mb-0 h5\">Anytime Cancellation Policy</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/icons/02.png"), "html", null, true);
        echo "\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-3\">
                                                <h4 class=\"mb-0 h5\">Money Back Guarantee</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bg-dark ps-2-3 pe-10 py-1-9 position-relative border-radius-10 wow fadeInUp\" data-wow-delay=\"200ms\">
                                <p class=\"mb-0 lead font-weight-500 position-relative z-index-9 text-white\">We deliver solution with the goal of trusting relationships! - Insurs got you covered.</p>
                                <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/quote-right.png"), "html", null, true);
        echo "\" class=\"position-absolute top-0 right\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block bg-secondary p-3 ani-zoomin rounded-circle position-absolute top-8 right-5 z-index-1 opacity1\"></div>
        </section>

        <!-- HISTORY
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"title-style2 text-center mb-2-2 wow fadeIn\" data-wow-delay=\"200ms\">
                    <h2 class=\"h1\">We Have A Great History</h2>
                </div>
                <div class=\"row\">
                    <div class=\"horizontaltab tab-style3\">
                        <ul class=\"resp-tabs-list hor_1 text-center\">
                            <li>2000</li>
                            <li>2004</li>
                            <li>2008</li>
                            <li>2012</li>
                            <li>2016</li>
                        </ul>
                        <div class=\"resp-tabs-container hor_1 p-0\">
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Established Insurs</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/history1.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/history2.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"ps-0 ps-lg-3 ps-xl-4\">
                                            <h4 class=\"mb-3\">Registered as a Company</h4>
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Launch a new branch</h4>
                                            <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/history3.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/history4.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"ps-0 ps-lg-3 ps-xl-4\">
                                            <h4 class=\"mb-3\">Strategic plans</h4>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Awards win</h4>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/history5.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary opacity2 position-absolute z-index-1 bottom-10 left-10 ani-top-bottom\"></div>
        </section>

       <!-- TESTIMONIALS
        ================================================== -->
        <section class=\"p-0 testimonials-four bg-dark\">
            <div class=\"container\">
                <div class=\"row align-items-stretch\">
                    <div class=\"col-lg-6 py-8 py-xl-10 position-relative\">
                        <div class=\"title-style2 white mb-2-2\">
                            <h2 class=\"mb-0 h1 text-white w-lg-80\">What Our Clients Say About Insurs</h2>
                        </div>

                        <div class=\"testimonial-carousel3 owl-carousel owl-theme\">
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">Your company is truly upstanding and is behind its product 100%. We've used insurance for the last five years. It fits our needs perfectly. I didn't even need training. Nice work on your insurance. It's incredible.</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-01.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Georgia Holden </h5>
                                        <p class=\"mb-0 text-primary\">- Senior Marketer</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">Thanks insurance! Best. Product. Ever! Wow what great service, I love it! Keep up the excellent work. Insurance is the most valuable business resource we have EVER purchased. Insurance is great. Thank You!</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-02.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Hayden Welch</h5>
                                        <p class=\"mb-0 text-primary\">- Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">It's exactly what I've been looking for. Insurance is the most valuable business resource we have EVER purchased. Insurance is exactly what our business has been lacking. I am so pleased with this product.</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-03.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Lucas Azevedo</h5>
                                        <p class=\"mb-0 text-primary\">- Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/quote.png"), "html", null, true);
        echo "\" class=\"position-absolute mx-auto left-0 right-0 bottom-0 opacity1\" alt=\"...\">
                    </div>
                    <div class=\"col-lg-6 d-none d-lg-block\">

                    
                        
                                <div class=\"image-hover\">
                                    <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/pets/hudson-hintze-CXQgs12wFHc-unsplash.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"...\">
                                </div>
                        
                    </div>
                </div>
            </div>
        </section>
       
        <!-- CLIENT
        ================================================== -->
        <section class=\"bg-light\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6 bg-img cover-background px-lg-4 pt-6 pb-lg-4 mb-2-6 mb-md-0 wow fadeInUp\" data-wow-delay=\"200ms\" data-overlay-dark=\"0\" data-background=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/map.png"), "html", null, true);
        echo "\">
                        <div class=\"media d-block text-center\">
                            <div class=\"client-count\">
                                <h3 class=\"text-secondary\"><span class=\"countup\">78</span><sup class=\"pe-2 text-secondary font-weight-500\">+</sup></h3>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"mb-0\">Partners in world wide</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"400ms\">
                        <div class=\"row text-center\">
                            <div class=\"col-6 col-md-4 border-bottom border-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-1.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-bottom border-md-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-2.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-bottom borders-end border-color-light-black border-md-end-0 py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-3.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-color-light-black borders-bottom border-md-bottom-0 border-md-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-4.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-5.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/partners/partner-6.png"), "html", null, true);
        echo "\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/Aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 331,  473 => 326,  465 => 321,  457 => 316,  449 => 311,  441 => 306,  424 => 292,  408 => 279,  398 => 272,  386 => 263,  371 => 251,  356 => 239,  326 => 212,  288 => 177,  276 => 168,  238 => 133,  226 => 124,  179 => 80,  165 => 69,  152 => 59,  131 => 41,  126 => 39,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>About Us</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- ABOUT US
        ================================================== -->
        <section class=\"bg-light\">
            <div class=\"container mt-lg-3 mt-xl-0\">
                <div class=\"row clearfix align-items-xl-center\">
                    <div class=\"col-lg-6 mb-2-9 mb-lg-0 position-relative wow fadeIn\" data-wow-delay=\"400ms\">
                        <div class=\"position-relative\">
                            <div class=\"text-center text-sm-end text-md-center text-lg-end pe-xxl-1-9 overflow-hidden position-relative\">
                                <img src=\"{{asset('assets/client/img/content/about-01.jpg')}}\" alt=\"...\" class=\"rounded\">
                            </div>
                            <img src=\"{{asset('assets/client/img/content/about-02.jpg')}}\" class=\"rounded position-absolute top-15 d-none d-sm-block\" alt=\"...\">
                            <div class=\"bg-white text-center border-radius-10 p-1-9 d-inline-block position-absolute bottom-10 left-10\">
                                <h4 class=\"h1\"><span class=\"countup\">28</span>+</h4>
                                <span>Years of experience</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 text-column\">
                        <div class=\"ps-lg-2-3\">
                            <div class=\"title-style2 mb-1-6 wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h2 class=\"h1\">Providing full range of high exploring protection!</h2>
                            </div>
                            <p class=\"mb-2-2 wow fadeInUp\" data-wow-delay=\"200ms\">Team is a diverse network of consultants and industry professionals with a global mindset and a collaborative culture. We work to understand your issues and are driven to ask better questions.</p>
                            <div class=\"border-top border-bottom py-4 mb-2-3 wow fadeInUp\" data-wow-delay=\"300ms\">
                                <div class=\"row gx-5\">
                                    <div class=\"col-md-6 mb-4 mb-md-0\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <img src=\"{{asset('assets/client/img/icons/01.png')}}\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-3\">
                                                <h4 class=\"mb-0 h5\">Anytime Cancellation Policy</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"flex-shrink-0\">
                                                <img src=\"{{asset('assets/client/img/icons/02.png')}}\" alt=\"...\">
                                            </div>
                                            <div class=\"flex-grow-1 ms-3\">
                                                <h4 class=\"mb-0 h5\">Money Back Guarantee</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"bg-dark ps-2-3 pe-10 py-1-9 position-relative border-radius-10 wow fadeInUp\" data-wow-delay=\"200ms\">
                                <p class=\"mb-0 lead font-weight-500 position-relative z-index-9 text-white\">We deliver solution with the goal of trusting relationships! - Insurs got you covered.</p>
                                <img src=\"{{asset('assets/client/img/content/quote-right.png')}}\" class=\"position-absolute top-0 right\" alt=\"...\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block bg-secondary p-3 ani-zoomin rounded-circle position-absolute top-8 right-5 z-index-1 opacity1\"></div>
        </section>

        <!-- HISTORY
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"title-style2 text-center mb-2-2 wow fadeIn\" data-wow-delay=\"200ms\">
                    <h2 class=\"h1\">We Have A Great History</h2>
                </div>
                <div class=\"row\">
                    <div class=\"horizontaltab tab-style3\">
                        <ul class=\"resp-tabs-list hor_1 text-center\">
                            <li>2000</li>
                            <li>2004</li>
                            <li>2008</li>
                            <li>2012</li>
                            <li>2016</li>
                        </ul>
                        <div class=\"resp-tabs-container hor_1 p-0\">
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Established Insurs</h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"{{asset('assets/client/img/content/history1.jpg')}}\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"{{asset('assets/client/img/content/history2.jpg')}}\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"ps-0 ps-lg-3 ps-xl-4\">
                                            <h4 class=\"mb-3\">Registered as a Company</h4>
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Launch a new branch</h4>
                                            <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"{{asset('assets/client/img/content/history3.jpg')}}\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"{{asset('assets/client/img/content/history4.jpg')}}\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"ps-0 ps-lg-3 ps-xl-4\">
                                            <h4 class=\"mb-3\">Strategic plans</h4>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-6 order-lg-1 order-2\">
                                        <div class=\"pe-0 pe-lg-3 pe-xl-4\">
                                            <h4 class=\"mb-3\">Awards win</h4>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined.</p>
                                            <ul class=\"list-style1 mb-4\">
                                                <li>Life time supports</li>
                                                <li>Solve your problem with us</li>
                                                <li>We Provide Awesome Services</li>
                                                <li>Your business deserves best software</li>
                                            </ul>
                                            <a href=\"#!\" class=\"butn-style3 medium\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0\">
                                        <div class=\"image-hover\">
                                            <img src=\"{{asset('assets/client/img/content/history5.jpg')}}\" alt=\"...\" class=\"rounded\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary opacity2 position-absolute z-index-1 bottom-10 left-10 ani-top-bottom\"></div>
        </section>

       <!-- TESTIMONIALS
        ================================================== -->
        <section class=\"p-0 testimonials-four bg-dark\">
            <div class=\"container\">
                <div class=\"row align-items-stretch\">
                    <div class=\"col-lg-6 py-8 py-xl-10 position-relative\">
                        <div class=\"title-style2 white mb-2-2\">
                            <h2 class=\"mb-0 h1 text-white w-lg-80\">What Our Clients Say About Insurs</h2>
                        </div>

                        <div class=\"testimonial-carousel3 owl-carousel owl-theme\">
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">Your company is truly upstanding and is behind its product 100%. We've used insurance for the last five years. It fits our needs perfectly. I didn't even need training. Nice work on your insurance. It's incredible.</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"{{asset('assets/client/img/avatar/avatar-01.jpg')}}\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Georgia Holden </h5>
                                        <p class=\"mb-0 text-primary\">- Senior Marketer</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">Thanks insurance! Best. Product. Ever! Wow what great service, I love it! Keep up the excellent work. Insurance is the most valuable business resource we have EVER purchased. Insurance is great. Thank You!</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"{{asset('assets/client/img/avatar/avatar-02.jpg')}}\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Hayden Welch</h5>
                                        <p class=\"mb-0 text-primary\">- Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class=\"lh-lg mb-2-6 w-lg-90 w-xl-80 text-white lead\">It's exactly what I've been looking for. Insurance is the most valuable business resource we have EVER purchased. Insurance is exactly what our business has been lacking. I am so pleased with this product.</p>
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"flex-shrink-0\">
                                        <img src=\"{{asset('assets/client/img/avatar/avatar-03.jpg')}}\" class=\"rounded-circle\" alt=\"...\">
                                    </div>
                                    <div class=\"flex-grow-1 ms-3\">
                                        <h5 class=\"text-white\">Lucas Azevedo</h5>
                                        <p class=\"mb-0 text-primary\">- Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src=\"{{asset('assets/client/img/content/quote.png')}}\" class=\"position-absolute mx-auto left-0 right-0 bottom-0 opacity1\" alt=\"...\">
                    </div>
                    <div class=\"col-lg-6 d-none d-lg-block\">

                    
                        
                                <div class=\"image-hover\">
                                    <img src=\"{{asset('assets/client/img/pets/hudson-hintze-CXQgs12wFHc-unsplash.jpg')}}\" class=\"rounded\" alt=\"...\">
                                </div>
                        
                    </div>
                </div>
            </div>
        </section>
       
        <!-- CLIENT
        ================================================== -->
        <section class=\"bg-light\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6 bg-img cover-background px-lg-4 pt-6 pb-lg-4 mb-2-6 mb-md-0 wow fadeInUp\" data-wow-delay=\"200ms\" data-overlay-dark=\"0\" data-background=\"{{asset('assets/client/img/partners/map.png')}}\">
                        <div class=\"media d-block text-center\">
                            <div class=\"client-count\">
                                <h3 class=\"text-secondary\"><span class=\"countup\">78</span><sup class=\"pe-2 text-secondary font-weight-500\">+</sup></h3>
                            </div>
                            <div class=\"media-body\">
                                <h4 class=\"mb-0\">Partners in world wide</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 wow fadeInUp\" data-wow-delay=\"400ms\">
                        <div class=\"row text-center\">
                            <div class=\"col-6 col-md-4 border-bottom border-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-1.png')}}\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-bottom border-md-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-2.png')}}\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-bottom borders-end border-color-light-black border-md-end-0 py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-3.png')}}\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-color-light-black borders-bottom border-md-bottom-0 border-md-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-4.png')}}\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 border-end py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-5.png')}}\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-6 col-md-4 py-4 py-lg-3\">
                                <div class=\"p-xl-4 p-md-2\">
                                    <img src=\"{{asset('assets/client/img/partners/partner-6.png')}}\" alt=\"...\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




{% endblock %}", "client/Aboutus.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\Aboutus.html.twig");
    }
}

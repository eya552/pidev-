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

/* client/BilansDesoin.html.twig */
class __TwigTemplate_e21f15627a9492cb6d452495fd019b49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/BilansDesoin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/BilansDesoin.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "client/BilansDesoin.html.twig", 1);
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
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"img/banner/page-title.jpg\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Mes bilans</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                <li><a href=\"#!\">Mes bilans</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- BLOG LIST
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 mb-5 mb-lg-0 mt-n2-2\">
                        <article class=\"card card-style10 border-0 h-auto image-hover wow fadeInUp mt-2-2\" data-wow-delay=\"100ms\">
                            
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li class=\"text-danger text-capitalize\">refusée</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"mb-4\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h3>
                                <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>

                        <ul class=\"pagination justify-content-center d-sm-flex text-center mb-0 mt-6 mt-lg-7 wow fadeInUp\" data-wow-delay=\"200ms\">
                            <li><a href=\"#!\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i></a></li>
                            <li class=\"active\"><a href=\"#!\">1</a></li>
                            <li><a href=\"#!\">2</a></li>
                            <li><a href=\"#!\">3</a></li>
                            <li><a href=\"#!\"><i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a></li>
                        </ul>

                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"sidebar ps-xl-4\">
                            <div class=\"widget mb-1-9 p-4 widget_search wow fadeInUp\" data-wow-delay=\"200ms\">
                                <form>
                                    <div class=\"input-group\">
                                        <input type=\"search\" class=\"form-control search-input\" placeholder=\"Search...\">
                                        <div class=\"input-group-append\">
                                            <button class=\"butn-style3\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </form>
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
        return "client/BilansDesoin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/base.html.twig' %}

{% block title %}Hello ClientController!{% endblock %}

{% block body %}

 <!-- PAGE TITLE
        ================================================== -->
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"img/banner/page-title.jpg\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Mes bilans</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                <li><a href=\"#!\">Mes bilans</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- BLOG LIST
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 mb-5 mb-lg-0 mt-n2-2\">
                        <article class=\"card card-style10 border-0 h-auto image-hover wow fadeInUp mt-2-2\" data-wow-delay=\"100ms\">
                            
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li class=\"text-danger text-capitalize\">refusée</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"mb-4\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h3>
                                <p>There are endless ways to create a some ways to have a business. We spend more time at the meetings than ever with knowledge melioration.</p>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>

                        <ul class=\"pagination justify-content-center d-sm-flex text-center mb-0 mt-6 mt-lg-7 wow fadeInUp\" data-wow-delay=\"200ms\">
                            <li><a href=\"#!\"><i class=\"fas fa-long-arrow-alt-left me-2\"></i></a></li>
                            <li class=\"active\"><a href=\"#!\">1</a></li>
                            <li><a href=\"#!\">2</a></li>
                            <li><a href=\"#!\">3</a></li>
                            <li><a href=\"#!\"><i class=\"fas fa-long-arrow-alt-right ms-2\"></i></a></li>
                        </ul>

                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"sidebar ps-xl-4\">
                            <div class=\"widget mb-1-9 p-4 widget_search wow fadeInUp\" data-wow-delay=\"200ms\">
                                <form>
                                    <div class=\"input-group\">
                                        <input type=\"search\" class=\"form-control search-input\" placeholder=\"Search...\">
                                        <div class=\"input-group-append\">
                                            <button class=\"butn-style3\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


{% endblock %}", "client/BilansDesoin.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\BilansDeSoin.html.twig");
    }
}

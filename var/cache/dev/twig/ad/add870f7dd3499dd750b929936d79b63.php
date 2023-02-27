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

/* client/Actualites.html.twig */
class __TwigTemplate_af6156456029b745f77b855416ecf6b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Actualites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/Actualites.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "client/Actualites.html.twig", 1);
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
        echo " <!-- PAGE TITLE
        ================================================== -->
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/banner/page-title.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Blog Grid</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Blog Grid</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- ACTUALITES
        ================================================== -->
<section>
            <div class=\"container\">
                <div class=\"row gx-xxl-5 mt-n2-2\">
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-01.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Business</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mb-4\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"450ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-02.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Agency</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">You will never believe these truth behind insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"600ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-03.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Design</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">Fantastic insurance with minimal spending.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-04.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Business</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mb-4\"><a href=\"blog-details.html\">The reason why everyone love insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"450ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-05.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Corporate</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">Understand the background of insurance now.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"600ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-06.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Web</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">The worst advices we’ve heard for insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
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
        return "client/Actualites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 117,  200 => 101,  181 => 85,  162 => 69,  143 => 53,  124 => 37,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>Blog Grid</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Blog Grid</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- ACTUALITES
        ================================================== -->
<section>
            <div class=\"container\">
                <div class=\"row gx-xxl-5 mt-n2-2\">
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-01.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Business</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mb-4\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"450ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-02.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Agency</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">You will never believe these truth behind insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"600ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-03.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Design</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">Fantastic insurance with minimal spending.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"300ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-04.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Business</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mb-4\"><a href=\"blog-details.html\">The reason why everyone love insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"450ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-05.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Corporate</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">Understand the background of insurance now.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class=\"col-md-6 col-lg-4 mt-2-2 wow fadeInUp\" data-wow-delay=\"600ms\">
                        <article class=\"card card-style10 border-0 h-100 image-hover\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-06.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                                <span class=\"card-tag\"><a href=\"blog-details.html\">Web</a></span>
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"card-list ps-0 mb-3\">
                                    <li><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"text-capitalize\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>
                                <h3 class=\"h4 mt-3 mb-4\"><a href=\"blog-details.html\">The worst advices we’ve heard for insurance.</a></h3>
                                <a href=\"blog-details.html\" class=\"text-dark text-primary-hover font-weight-600\">Read more <i class=\"ti-arrow-right ms-2 align-middle display-30\"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>



{% endblock %}", "client/Actualites.html.twig", "C:\\Users\\ghass\\OneDrive\\Documents\\GitHub\\pidev-\\templates\\client\\Actualites.html.twig");
    }
}

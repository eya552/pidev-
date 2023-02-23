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

/* client/ActualiteInfo.html.twig */
class __TwigTemplate_81ffce4a39a824644f08243197bd4350 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/ActualiteInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/ActualiteInfo.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "client/ActualiteInfo.html.twig", 1);
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
                            <h1>Here’s what people are saying about insurance.</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Here’s what people are saying about insurance.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- BLOG DETAILS
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 mb-5 mb-lg-0\">
                        <article class=\"card card-style10 border-0 h-auto\">
                            <div class=\"card-img position-relative\">
                                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-01.jpg"), "html", null, true);
        echo "\" class=\"rounded-top\" alt=\"...\">
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"entry-meta list-unstyled mb-3\">
                                    <li class=\"me-3 my-1\"><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"me-3 my-1\"><i class=\"fas fa-comment me-1 text-primary\"></i> 3 Comments</li>
                                    <li class=\"my-1\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>                                
                                <p>Insurance is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making.</p>
                                <div class=\"text-start p-1-6 p-sm-1-9 position-relative mb-4 bg-secondary rounded\">
                                    <p><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/content/quote-right.png"), "html", null, true);
        echo "\" alt=\"...\"></p>
                                    <p class=\"text-white\">Needless to say we are extremely satisfied with the results. Insurance is exactly what our business has been lacking. I don’t know what else to say. Insurance is awesome!</p>
                                    <p class=\"mb-0\"><span class=\"text-white\">– Bethany Ellery</span></p>
                                </div>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
                                <div class=\"row mt-n4 mb-4\">
                                    <div class=\"col-md-6 mt-4 image-hover\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-post-02.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\"></div>
                                    <div class=\"col-md-6 mt-4 image-hover\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/blog-post-03.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\"></div>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                <ul class=\"list-style1 mb-0\">
                                    <li>Clarifying and accomplishing private and expert goals</li>
                                    <li>Working to enhance conversation skills</li>
                                    <li>Accomplishing financial freedom and security</li>
                                </ul>
                                <div class=\"row border-top border-color-light-black pt-4 pt-lg-5 mt-4 mt-lg-5 g-0\">
                                    <div class=\"col-md-8 mb-4 mb-md-0 wow fadeIn\" data-wow-delay=\"200ms\">
                                        <h5 class=\"h6 mb-3\">Related Tags:</h5>
                                        <div class=\"blog-tags mt-n2\">
                                            <a href=\"#!\">Web</a>
                                            <a href=\"#!\">Insurance</a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 wow fadeIn\" data-wow-delay=\"400ms\">
                                        <div class=\"blog-share-icon text-start text-md-end\">
                                            <h5 class=\"h6 mb-3\">Share:</h5>
                                            <ul class=\"list-unstyled m-0 p-0\">
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-dribbble\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-youtube\"></i></a></li>
                                                <li class=\"d-inline-block\"><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                      
                        <div class=\"page-navigation mb-6 mt-2-9\">
                            <div class=\"prev-page\">
                                <div class=\"page-info\">
                                    <a href=\"#!\">
                                        <span class=\"image-prev\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/prev-blog.jpg"), "html", null, true);
        echo "\" alt=\"...\"></span>
                                        <div class=\"prev-link-page-info\">
                                            <h4 class=\"prev-title\">15 awesome things you can learn from web security.</h4>
                                            <span class=\"date-details\"><span class=\"create-date\">May 16, 2022</span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=\"next-page\">
                                <div class=\"page-info\">
                                    <a href=\"#!\">
                                        <div class=\"next-link-page-info\">
                                            <h4 class=\"next-title\">How digital marketing can increase your profit!</h4>
                                            <span class=\"date-details\"><span class=\"create-date\">May 29, 2022</span></span>
                                        </div>
                                        <span class=\"image-next\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/next-blog.jpg"), "html", null, true);
        echo "\" alt=\"...\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-5\">
                            <h3 class=\"h4 mb-1-9\">3 Comments</h3>
                            <div class=\"d-flex border-bottom border-color-light-black pb-4 mb-5\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-01.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">Denis Irwin</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                            <div class=\"d-flex border-bottom border-color-light-black pb-4 mb-5\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-02.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">Erica Turner</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/avatar/avatar-03.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">John Martin</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                        </div>

                        <h3 class=\"h4 mb-3\">Leave a reply</h3>
                        <!-- Form -->
                        <form>
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <textarea name=\"reply\" rows=\"6\" class=\"form-control h-100\" placeholder=\"Your Reply\"></textarea>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Your Name\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href=\"#!\" class=\"butn-style3 secondary medium\"><span>Leave a Reply</span></a>
                            </div>
                        </form>
                        <!-- End Form -->
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
                            <div class=\"widget wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Recent Posts</h4>
                                <div class=\"widget-body\">
                                    <div class=\"d-flex recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/01.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"Here’s what people are saying about insurance.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h4>
                                        </div>
                                    </div>
                                    <div class=\"d-flex mt-4 recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/02.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"You will never believe these truth behind insurance.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">You will never believe these truth behind insurance.</a></h4>
                                        </div>
                                    </div>
                                    <div class=\"d-flex mt-4 recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/blog/03.jpg"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"How to have fantastic insurance with minimal spending.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">How to have fantastic insurance with minimal spending.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"widget widget_categories wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Categories</h4>
                                <div class=\"widget-body\">
                                     <ul>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Business</span> <span class=\"float-end cat-count\">(2)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Corporate</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Development</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Technology</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Web</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                    </ul>
                                </div>
                            </div>                             
                            <div class=\"widget widget_tag_cloud wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Tags</h4>
                                <div class=\"widget-body\">
                                    <div class=\"tagcloud\">
                                        <ul class=\"wp-tag-cloud\">
                                            <li><a href=\"#\">Agency</a></li>
                                            <li><a href=\"#\">Business</a></li>
                                            <li><a href=\"#\">Design</a></li>
                                            <li><a href=\"#\">development</a></li>
                                            <li><a href=\"#\">technology</a></li>
                                            <li><a href=\"#\">web</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"widget wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Follow Us</h4>
                                <div class=\"widget-body\">
                                    <ul class=\"social-icon-style1 mb-0 d-inline-block list-unstyled\">
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-youtube\"></i></a></li>
                                        <li class=\"d-inline-block\"><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                    </ul>
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
        return "client/ActualiteInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 213,  321 => 204,  309 => 195,  252 => 141,  237 => 129,  222 => 117,  209 => 107,  191 => 92,  152 => 56,  148 => 55,  139 => 49,  125 => 38,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>Here’s what people are saying about insurance.</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Here’s what people are saying about insurance.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

        <!-- BLOG DETAILS
        ================================================== -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 mb-5 mb-lg-0\">
                        <article class=\"card card-style10 border-0 h-auto\">
                            <div class=\"card-img position-relative\">
                                <img src=\"{{asset('assets/client/img/blog/blog-01.jpg')}}\" class=\"rounded-top\" alt=\"...\">
                            </div>
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"entry-meta list-unstyled mb-3\">
                                    <li class=\"me-3 my-1\"><i class=\"far fa-calendar me-2\"></i>Jan 02, 2023</li>
                                    <li class=\"me-3 my-1\"><i class=\"fas fa-comment me-1 text-primary\"></i> 3 Comments</li>
                                    <li class=\"my-1\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">admin</a></li>
                                </ul>                                
                                <p>Insurance is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making.</p>
                                <div class=\"text-start p-1-6 p-sm-1-9 position-relative mb-4 bg-secondary rounded\">
                                    <p><img src=\"{{asset('assets/client/img/content/quote-right.png')}}\" alt=\"...\"></p>
                                    <p class=\"text-white\">Needless to say we are extremely satisfied with the results. Insurance is exactly what our business has been lacking. I don’t know what else to say. Insurance is awesome!</p>
                                    <p class=\"mb-0\"><span class=\"text-white\">– Bethany Ellery</span></p>
                                </div>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
                                <div class=\"row mt-n4 mb-4\">
                                    <div class=\"col-md-6 mt-4 image-hover\"><img src=\"{{asset('assets/client/img/blog/blog-post-02.jpg')}}\" alt=\"...\" class=\"rounded\"></div>
                                    <div class=\"col-md-6 mt-4 image-hover\"><img src=\"{{asset('assets/client/img/blog/blog-post-03.jpg')}}\" alt=\"...\" class=\"rounded\"></div>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                <ul class=\"list-style1 mb-0\">
                                    <li>Clarifying and accomplishing private and expert goals</li>
                                    <li>Working to enhance conversation skills</li>
                                    <li>Accomplishing financial freedom and security</li>
                                </ul>
                                <div class=\"row border-top border-color-light-black pt-4 pt-lg-5 mt-4 mt-lg-5 g-0\">
                                    <div class=\"col-md-8 mb-4 mb-md-0 wow fadeIn\" data-wow-delay=\"200ms\">
                                        <h5 class=\"h6 mb-3\">Related Tags:</h5>
                                        <div class=\"blog-tags mt-n2\">
                                            <a href=\"#!\">Web</a>
                                            <a href=\"#!\">Insurance</a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 wow fadeIn\" data-wow-delay=\"400ms\">
                                        <div class=\"blog-share-icon text-start text-md-end\">
                                            <h5 class=\"h6 mb-3\">Share:</h5>
                                            <ul class=\"list-unstyled m-0 p-0\">
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-dribbble\"></i></a></li>
                                                <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-youtube\"></i></a></li>
                                                <li class=\"d-inline-block\"><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                      
                        <div class=\"page-navigation mb-6 mt-2-9\">
                            <div class=\"prev-page\">
                                <div class=\"page-info\">
                                    <a href=\"#!\">
                                        <span class=\"image-prev\"><img src=\"{{asset('assets/client/img/blog/prev-blog.jpg')}}\" alt=\"...\"></span>
                                        <div class=\"prev-link-page-info\">
                                            <h4 class=\"prev-title\">15 awesome things you can learn from web security.</h4>
                                            <span class=\"date-details\"><span class=\"create-date\">May 16, 2022</span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=\"next-page\">
                                <div class=\"page-info\">
                                    <a href=\"#!\">
                                        <div class=\"next-link-page-info\">
                                            <h4 class=\"next-title\">How digital marketing can increase your profit!</h4>
                                            <span class=\"date-details\"><span class=\"create-date\">May 29, 2022</span></span>
                                        </div>
                                        <span class=\"image-next\"><img src=\"{{asset('assets/client/img/blog/next-blog.jpg')}}\" alt=\"...\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"mb-5\">
                            <h3 class=\"h4 mb-1-9\">3 Comments</h3>
                            <div class=\"d-flex border-bottom border-color-light-black pb-4 mb-5\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"{{asset('assets/client/img/avatar/avatar-01.jpg')}}\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">Denis Irwin</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                            <div class=\"d-flex border-bottom border-color-light-black pb-4 mb-5\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"{{asset('assets/client/img/avatar/avatar-02.jpg')}}\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">Erica Turner</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <img src=\"{{asset('assets/client/img/avatar/avatar-03.jpg')}}\" alt=\"...\" class=\"rounded\">
                                </div>
                                <div class=\"flex-grow-1 ms-3\">
                                    <h4 class=\"h6 mb-2\">John Martin</h4>
                                    <p>
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                    </p>
                                    <a class=\"comment-reply-link\" href=\"#!\">Reply</a>
                                </div>
                            </div>
                        </div>

                        <h3 class=\"h4 mb-3\">Leave a reply</h3>
                        <!-- Form -->
                        <form>
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <textarea name=\"reply\" rows=\"6\" class=\"form-control h-100\" placeholder=\"Your Reply\"></textarea>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Your Name\">
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href=\"#!\" class=\"butn-style3 secondary medium\"><span>Leave a Reply</span></a>
                            </div>
                        </form>
                        <!-- End Form -->
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
                            <div class=\"widget wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Recent Posts</h4>
                                <div class=\"widget-body\">
                                    <div class=\"d-flex recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"{{asset('assets/client/img/blog/01.jpg')}}\" class=\"rounded\" alt=\"Here’s what people are saying about insurance.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">Here’s what people are saying about insurance.</a></h4>
                                        </div>
                                    </div>
                                    <div class=\"d-flex mt-4 recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"{{asset('assets/client/img/blog/02.jpg')}}\" class=\"rounded\" alt=\"You will never believe these truth behind insurance.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">You will never believe these truth behind insurance.</a></h4>
                                        </div>
                                    </div>
                                    <div class=\"d-flex mt-4 recent-post align-items-start align-items-sm-center align-items-lg-start\">
                                        <div class=\"flex-shrink-0 image-hover me-3\">
                                            <a href=\"#\"><img src=\"{{asset('assets/client/img/blog/03.jpg')}}\" class=\"rounded\" alt=\"How to have fantastic insurance with minimal spending.\"></a>
                                        </div>
                                        <div class=\"flex-grow-1\">
                                            <span class=\"display-30 d-block mb-2 font-weight-500\">January 20, 2022</span>
                                            <h4 class=\"h6 mb-0\"><a href=\"blog-details.html\">How to have fantastic insurance with minimal spending.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"widget widget_categories wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Categories</h4>
                                <div class=\"widget-body\">
                                     <ul>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Business</span> <span class=\"float-end cat-count\">(2)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Corporate</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Development</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Technology</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                        <li class=\"cat-item\"><a href=\"#\"><span class=\"cat-name\">Web</span> <span class=\"float-end cat-count\">(1)</span></a></li>
                                    </ul>
                                </div>
                            </div>                             
                            <div class=\"widget widget_tag_cloud wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Tags</h4>
                                <div class=\"widget-body\">
                                    <div class=\"tagcloud\">
                                        <ul class=\"wp-tag-cloud\">
                                            <li><a href=\"#\">Agency</a></li>
                                            <li><a href=\"#\">Business</a></li>
                                            <li><a href=\"#\">Design</a></li>
                                            <li><a href=\"#\">development</a></li>
                                            <li><a href=\"#\">technology</a></li>
                                            <li><a href=\"#\">web</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"widget wow fadeInUp\" data-wow-delay=\"200ms\">
                                <h4 class=\"widget-title text-white\">Follow Us</h4>
                                <div class=\"widget-body\">
                                    <ul class=\"social-icon-style1 mb-0 d-inline-block list-unstyled\">
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                                        <li class=\"d-inline-block me-2\"><a href=\"#!\"><i class=\"fab fa-youtube\"></i></a></li>
                                        <li class=\"d-inline-block\"><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

{% endblock %}", "client/ActualiteInfo.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\ActualiteInfo.html.twig");
    }
}

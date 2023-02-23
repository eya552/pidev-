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

/* Client/BilanDeSoin.html.twig */
class __TwigTemplate_3113d119ae6c17e2d35e0e46673b2475 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/BilanDeSoin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/BilanDeSoin.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "Client/BilanDeSoin.html.twig", 1);
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
                            <h1>Bilan n°";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo " </h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                <li><a href=\"#!\">Mes bilans</a></li>
                                <li><a href=\"#!\">Bilan n°";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></li>
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
                            
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"entry-meta list-unstyled mb-3\">

                                    ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 43, $this->source); })()), "etat", [], "any", false, false, false, 43) == "refusé")) {
            // line 44
            echo "                                    <li class=\"me-3 my-1 text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 44, $this->source); })()), "etat", [], "any", false, false, false, 44), "html", null, true);
            echo "</li>
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 45, $this->source); })()), "etat", [], "any", false, false, false, 45) == "accepté")) {
            // line 46
            echo "                                    <li class=\"me-3 my-1 text-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 46, $this->source); })()), "etat", [], "any", false, false, false, 46), "html", null, true);
            echo "</li>
                                    ";
        } else {
            // line 48
            echo "                                    <li class=\"me-3 my-1 text-warning-emphasis\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 48, $this->source); })()), "etat", [], "any", false, false, false, 48), "html", null, true);
            echo "</li>
                                    ";
        }
        // line 50
        echo "                                    <li class=\"my-1\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">Employé</a></li>
                                </ul>                                
                                <p >";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 52, $this->source); })()), "Animal", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                                <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 53, $this->source); })()), "Prix", [], "any", false, false, false, 53), "html", null, true);
        echo " TND</p>
                                <div class=\"text-start p-1-6 p-sm-1-9 position-relative mb-4 bg-secondary rounded\">
                                    <p class=\"text-white\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 55, $this->source); })()), "Description", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                                    
                                </div>
                                <div class=\"quform-element\">
                                    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\"> <button class=\"butn-style3\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Faire une reclamation  ")) : ("Faire une reclamation  ")), "html", null, true);
        echo "</button> <a> 
                                </div>
                               
                               
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
        return "Client/BilanDeSoin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 59,  167 => 55,  162 => 53,  158 => 52,  154 => 50,  148 => 48,  142 => 46,  140 => 45,  135 => 44,  133 => 43,  108 => 21,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>Bilan n°{{ bilan_de_soin.id }} </h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                <li><a href=\"#!\">Mes bilans</a></li>
                                <li><a href=\"#!\">Bilan n°{{ bilan_de_soin.id }}</a></li>
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
                            
                            <div class=\"card-body p-1-9 pt-2-3\">
                                <ul class=\"entry-meta list-unstyled mb-3\">

                                    {% if bilan_de_soin.etat ==\"refusé\"  %}
                                    <li class=\"me-3 my-1 text-danger\">{{ bilan_de_soin.etat }}</li>
                                    {% elseif bilan_de_soin.etat ==\"accepté\" %}
                                    <li class=\"me-3 my-1 text-primary\">{{ bilan_de_soin.etat }}</li>
                                    {% else %}
                                    <li class=\"me-3 my-1 text-warning-emphasis\">{{ bilan_de_soin.etat }}</li>
                                    {% endif %}
                                    <li class=\"my-1\"><i class=\"far fa-user me-2\"></i><a href=\"#!\">Employé</a></li>
                                </ul>                                
                                <p >{{ bilan_de_soin.Animal }}</p>
                                <p>{{ bilan_de_soin.Prix }} TND</p>
                                <div class=\"text-start p-1-6 p-sm-1-9 position-relative mb-4 bg-secondary rounded\">
                                    <p class=\"text-white\">{{ bilan_de_soin.Description }}</p>
                                    
                                </div>
                                <div class=\"quform-element\">
                                    <a href=\"{{ path('app_reclamation_new') }}\"> <button class=\"butn-style3\">{{ button_label|default('Faire une reclamation  ') }}</button> <a> 
                                </div>
                               
                               
                            </div>
                        </article>
                      
                        

                       

                    </div>

                   

                </div>
            </div>
        </section>


{% endblock %}", "Client/BilanDeSoin.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\BilanDesoin.html.twig");
    }
}

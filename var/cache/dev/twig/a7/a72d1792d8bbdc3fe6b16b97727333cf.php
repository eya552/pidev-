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

/* reclamation/NewReclamation.html.twig */
class __TwigTemplate_3742351009d3395ed9b55fcb7a26209f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/NewReclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/NewReclamation.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "reclamation/NewReclamation.html.twig", 1);
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
                            <h1>Ajouter une reclamation</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

  <section>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-9 wow fadeIn\" data-wow-delay=\"200ms\">

                        <div class=\"position-relative elements-block\">

                            <div class=\"inner-title\">
                                <h2 class=\"mb-0\">Ajouter une reclamation</h2>
                            </div>

                            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"quform-elements\">
                                    <div class=\"row\">

                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "IdBilan", [], "any", false, false, false, 49), 'label', ["label" => "IdBilan"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "IdBilan", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "IdBilan", [], "any", false, false, false, 51), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "IdClient", [], "any", false, false, false, 56), 'label', ["label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "IdClient", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "IdClient", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Text", [], "any", false, false, false, 63), 'label', ["label" => "Text"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Text", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "Text", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                       
                                        
                                        
                                        ";
        // line 78
        echo "

                                        <div class\"col-md-12\"> 
                                            <div class=\"quform-element\">
                                                <button class=\"butn-style3\">";
        // line 82
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 82, $this->source); })()), "Ajouter reclamation ")) : ("Ajouter reclamation ")), "html", null, true);
        echo "</button>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "

                          

                          

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
        return "reclamation/NewReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 88,  194 => 82,  188 => 78,  179 => 65,  175 => 64,  171 => 63,  163 => 58,  159 => 57,  155 => 56,  147 => 51,  143 => 50,  139 => 49,  130 => 43,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>Ajouter une reclamation</h1>
                        </div>
                        <div class=\"col-md-12\">
                            <ul class=\"ps-0\">
                                <li><a href=\"index-2.html\">Home</a></li>
                                <li><a href=\"#!\">Espace client</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"d-inline-block p-3 rounded-circle bg-primary position-absolute z-index-1 top-35 right-20 ani-top-bottom\"></div>
            <div class=\"d-inline-block p-2 rounded-circle bg-secondary position-absolute z-index-1 top-25 left-10 ani-top-bottom\"></div>
            <div class=\"d-inline-block bg-white p-3 ani-zoomin rounded-circle position-absolute bottom-5 left-10 opacity1 z-index-1\"></div>
        </section>

  <section>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-9 wow fadeIn\" data-wow-delay=\"200ms\">

                        <div class=\"position-relative elements-block\">

                            <div class=\"inner-title\">
                                <h2 class=\"mb-0\">Ajouter une reclamation</h2>
                            </div>

                            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}})}}
                                <div class=\"quform-elements\">
                                    <div class=\"row\">

                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.IdBilan,\"IdBilan\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.IdBilan,{'attr':{'class':'form-control'}}) }}
                                                {{ form_errors(form.IdBilan,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.IdClient,\"IdClient\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.IdClient,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.IdClient,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.Text,\"Text\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.Text,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.Text,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                       
                                        
                                        
                                        {# <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.Etat,\"Etat\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.Etat,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.Etat,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div> #}


                                        <div class\"col-md-12\"> 
                                            <div class=\"quform-element\">
                                                <button class=\"butn-style3\">{{ button_label|default('Ajouter reclamation ') }}</button>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            {{ form_end(form) }}

                          

                          

                        </div>

                    </div>
                </div>
            </div>
    </section>


{% endblock %}", "reclamation/NewReclamation.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\reclamation\\NewReclamation.html.twig");
    }
}

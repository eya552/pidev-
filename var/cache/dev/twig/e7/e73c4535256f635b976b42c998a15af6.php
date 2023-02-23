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

/* Client/NewBilan.html.twig */
class __TwigTemplate_6384acff922c971ebc44e5a4d400a7b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/NewBilan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Client/NewBilan.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "Client/NewBilan.html.twig", 1);
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
        echo "<!-- PAGE TITLE
        ================================================== -->
        <section class=\"page-title-section bg-img cover-background left-overlay-dark\" data-overlay-dark=\"8\" data-background=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/banner/page-title.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"page-title mx-1-6 mx-lg-2-0 mx-xl-2-6 mx-xxl-2-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>Ajouter un bilan</h1>
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
                                <h2 class=\"mb-0\">Ajouter bilan</h2>
                            </div>

                            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"quform-elements\">
                                    <div class=\"row\">

                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "IdClient", [], "any", false, false, false, 47), 'label', ["label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "IdClient", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "IdClient", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 54), 'label', ["label" => "IdVeterinaire"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Animal", [], "any", false, false, false, 61), 'label', ["label" => "Animal"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Animal", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Animal", [], "any", false, false, false, 63), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "Prix", [], "any", false, false, false, 68), 'label', ["label" => "Prix"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Prix", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Prix", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element \">
                                                <div >";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "Description", [], "any", false, false, false, 75), 'label', ["label" => "Description"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Description", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control h-auto"]]);
        echo "</span></div>
                                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Description", [], "any", false, false, false, 77), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        
                                        
                                        ";
        // line 89
        echo "

                                        <div class\"col-md-12\"> 
                                            <div class=\"quform-element\">
                                                <button class=\"butn-style3\">";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 93, $this->source); })()), "Ajouter bilan  ")) : ("Ajouter bilan  ")), "html", null, true);
        echo "</button>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
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
        return "Client/NewBilan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 99,  223 => 93,  217 => 89,  209 => 77,  205 => 76,  201 => 75,  193 => 70,  189 => 69,  185 => 68,  177 => 63,  173 => 62,  169 => 61,  161 => 56,  157 => 55,  153 => 54,  145 => 49,  141 => 48,  137 => 47,  128 => 41,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                            <h1>Ajouter un bilan</h1>
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
                                <h2 class=\"mb-0\">Ajouter bilan</h2>
                            </div>

                            {{ form_start(form,{'attr': {'novalidate': 'novalidate'}})}}
                                <div class=\"quform-elements\">
                                    <div class=\"row\">

                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.IdClient,\"IdClient\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.IdClient,{'attr':{'class':'form-control'}}) }}
                                                {{ form_errors(form.IdClient,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.IdVeterinaire,\"IdVeterinaire\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.IdVeterinaire,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.IdVeterinaire,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.Animal,\"Animal\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.Animal,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.Animal,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.Prix,\"Prix\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.Prix,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.Prix,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element \">
                                                <div >{{form_label(form.Description,\"Description\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.Description,{'attr':{'class':'form-control h-auto'}}) }}</span></div>
                                                {{ form_errors(form.Description,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div>
                                        
                                        
                                        {# <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >{{form_label(form.etat,\"etat\")}} <span class=\"quform-required\"> *</span> </div>
                                                {{ form_widget(form.etat,{'attr':{'class':'form-control'}}) }}</span></div>
                                                {{ form_errors(form.etat,{'attr':{'class':'text-danger'}})}}
                                            </div>
                                        </div> #}


                                        <div class\"col-md-12\"> 
                                            <div class=\"quform-element\">
                                                <button class=\"butn-style3\">{{ button_label|default('Ajouter bilan  ') }}</button>  
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


{% endblock %}", "Client/NewBilan.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\client\\NewBilan.html.twig");
    }
}

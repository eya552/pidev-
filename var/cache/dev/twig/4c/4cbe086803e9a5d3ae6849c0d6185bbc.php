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

/* bilan_de_soin/NewBilan.html.twig */
class __TwigTemplate_d8c84521993f3f253d9b101d1696fd82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/NewBilan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/NewBilan.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "bilan_de_soin/NewBilan.html.twig", 1);
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
  <section>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-9 wow fadeIn\" data-wow-delay=\"200ms\">

                        <div class=\"position-relative elements-block\">

                            <div class=\"inner-title\">
                                <h2 class=\"mb-0\">Ajouter bilan</h2>
                            </div>

                            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"quform-elements\">
                                    <div class=\"row\">

                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "IdClient", [], "any", false, false, false, 24), 'label', ["label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "IdClient", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "IdClient", [], "any", false, false, false, 26), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 31), 'label', ["label" => "IdVeterinaire"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 33), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Animal", [], "any", false, false, false, 38), 'label', ["label" => "Animal"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Animal", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Animal", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"quform-element\">
                                                <div >";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Prix", [], "any", false, false, false, 45), 'label', ["label" => "Prix"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Prix", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Prix", [], "any", false, false, false, 47), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <div class=\"quform-element \">
                                                <div >";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Description", [], "any", false, false, false, 52), 'label', ["label" => "Description"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Description", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control h-auto"]]);
        echo "</span></div>
                                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Description", [], "any", false, false, false, 54), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                            </div>
                                        </div>
                                        
                                        
                                        ";
        // line 66
        echo "

                                        <div class\"col-md-12\"> 
                                            <div class=\"quform-element\">
                                                <button class=\"butn-style3\">";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 70, $this->source); })()), "Ajouter bilan  ")) : ("Ajouter bilan  ")), "html", null, true);
        echo "</button>  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
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
        return "bilan_de_soin/NewBilan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 76,  197 => 70,  191 => 66,  183 => 54,  179 => 53,  175 => 52,  167 => 47,  163 => 46,  159 => 45,  151 => 40,  147 => 39,  143 => 38,  135 => 33,  131 => 32,  127 => 31,  119 => 26,  115 => 25,  111 => 24,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/base.html.twig' %}

{% block title %}Hello ClientController!{% endblock %}

{% block body %}

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


{% endblock %}", "bilan_de_soin/NewBilan.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\bilan_de_soin\\NewBilan.html.twig");
    }
}

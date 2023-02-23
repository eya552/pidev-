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

/* bilan_de_soin/_form.html.twig */
class __TwigTemplate_66c03f0bf20e316d684dcef72949b8e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/_form.html.twig"));

        $this->parent = $this->loadTemplate("client/base.html.twig", "bilan_de_soin/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 9
        echo "



    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"quform-elements\">
        <div class=\"row\">
            

            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "IdClient", [], "any", false, false, false, 20), 'label', ["label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "IdClient", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "IdClient", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 27), 'label', ["label" => "IdVeterinaire"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 29), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Animal", [], "any", false, false, false, 34), 'label', ["label" => "Animal"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Animal", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Animal", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"quform-element\">
                    <div >";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Description", [], "any", false, false, false, 41), 'label', ["label" => "Description"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Description", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control h-auto"]]);
        echo "</span></div>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Description", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Prix", [], "any", false, false, false, 48), 'label', ["label" => "Prix"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Prix", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Prix", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "etat", [], "any", false, false, false, 56), 'label', ["label" => "etat"]);
        echo " <span class=\"quform-required\"> *</span> </div>
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "etat", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</span></div>
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "etat", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            
        </div>
    </div>

    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "bilan_de_soin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 65,  176 => 58,  172 => 57,  168 => 56,  159 => 50,  155 => 49,  151 => 48,  143 => 43,  139 => 42,  135 => 41,  127 => 36,  123 => 35,  119 => 34,  111 => 29,  107 => 28,  103 => 27,  95 => 22,  91 => 21,  87 => 20,  77 => 13,  71 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/base.html.twig' %}

{% block body %}

{# {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}




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
            <div class=\"col-md-12\">
                <div class=\"quform-element\">
                    <div >{{form_label(form.Description,\"Description\")}} <span class=\"quform-required\"> *</span> </div>
                    {{ form_widget(form.Description,{'attr':{'class':'form-control h-auto'}}) }}</span></div>
                    {{ form_errors(form.Description,{'attr':{'class':'text-danger'}})}}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >{{form_label(form.Prix,\"Prix\")}} <span class=\"quform-required\"> *</span> </div>
                    {{ form_widget(form.Prix,{'attr':{'class':'form-control'}}) }}</span></div>
                    {{ form_errors(form.Prix,{'attr':{'class':'text-danger'}})}}
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"quform-element\">
                    <div >{{form_label(form.etat,\"etat\")}} <span class=\"quform-required\"> *</span> </div>
                    {{ form_widget(form.etat,{'attr':{'class':'form-control'}}) }}</span></div>
                    {{ form_errors(form.etat,{'attr':{'class':'text-danger'}})}}
                </div>
            </div>
            
        </div>
    </div>

    {{ form_end(form) }}


{% endblock %}", "bilan_de_soin/_form.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\bilan_de_soin\\_form.html.twig");
    }
}

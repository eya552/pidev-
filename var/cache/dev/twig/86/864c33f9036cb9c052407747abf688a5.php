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

/* reclamation/new.html.twig */
class __TwigTemplate_3f67d6272a2746102f13795a1434a92f extends Template
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
        return "admin/Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "reclamation/new.html.twig", 1);
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

        echo "Ajouter reclamation ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"\" style='margin-left: 20% ;'>
    <div class=\"pagetitle\">
      <h1>Nouveau reclamation</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil</a></li>
          <li class=\"breadcrumb-item\">reclamation</li>
          <li class=\"breadcrumb-item active\">Nouvaeu reclamation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    
    


   <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajouter reclamation</h5>

              <!-- Modifier reclamation -->
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row mb-3\">
                        <div>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "IdBilan", [], "any", false, false, false, 31), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "IdBilan"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "IdBilan", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "IdBilan", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "IdClient", [], "any", false, false, false, 38), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "IdClient", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "IdClient", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Text", [], "any", false, false, false, 46), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Text"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Text", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Text", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Etat", [], "any", false, false, false, 53), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Etat"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Etat", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Etat", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                    <div class=\"col-sm-10\">
                        <button class=\"btn btn-primary\">";
        // line 63
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 63, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                        
                    </div>
                    </div>

                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "


            </div>
          </div>




</div>










";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  187 => 63,  177 => 56,  173 => 55,  168 => 53,  161 => 49,  157 => 48,  152 => 46,  144 => 41,  140 => 40,  135 => 38,  128 => 34,  124 => 33,  119 => 31,  114 => 29,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/Base.html.twig'%}

{% block title %}Ajouter reclamation {% endblock %}
{% block body %}

<div class=\"\" style='margin-left: 20% ;'>
    <div class=\"pagetitle\">
      <h1>Nouveau reclamation</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil</a></li>
          <li class=\"breadcrumb-item\">reclamation</li>
          <li class=\"breadcrumb-item active\">Nouvaeu reclamation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    
    


   <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Ajouter reclamation</h5>

              <!-- Modifier reclamation -->
                {{ form_start(form) }}
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.IdBilan,\"IdBilan\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.IdBilan,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.IdBilan,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.IdClient,\"IdClient\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.IdClient,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.IdClient,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.Text,\"Text\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.Text,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.Text,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.Etat,\"Etat\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.Etat,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.Etat,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                    <div class=\"col-sm-10\">
                        <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
                        
                    </div>
                    </div>

                {{ form_end(form) }}


            </div>
          </div>




</div>










{% endblock %}

    


", "reclamation/new.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\reclamation\\new.html.twig");
    }
}

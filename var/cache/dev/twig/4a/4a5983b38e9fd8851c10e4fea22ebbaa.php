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

/* bilan_de_soin/edit.html.twig */
class __TwigTemplate_ea7f6853c3cfe3914d9da15961a8d466 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "bilan_de_soin/edit.html.twig", 1);
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

        echo "Modifier bilan ";
        
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
      <h1>Modifier bilan</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil</a></li>
          <li class=\"breadcrumb-item\">bilan</li>
          <li class=\"breadcrumb-item active\">Modifier bilan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    
    


   <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Modifier bilan</h5>

              <!-- Modifier bilan -->
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row mb-3\">
                        <div>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "IdClient", [], "any", false, false, false, 31), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "IdClient"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "IdClient", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "IdClient", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 38), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "IdVeterinaire"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Animal", [], "any", false, false, false, 45), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Animal"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Animal", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Animal", [], "any", false, false, false, 48), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "Description", [], "any", false, false, false, 52), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Description"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Description", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Description", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Prix", [], "any", false, false, false, 59), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Prix"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Prix", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Prix", [], "any", false, false, false, 62), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>


                    
                    <div class=\"row mb-3\">
                        <div>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "etat", [], "any", false, false, false, 69), 'label', ["attr" => ["class" => "col-sm-2 col-form-label"], "label" => "etat"]);
        echo " <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "etat", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "etat", [], "any", false, false, false, 72), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                    <div class=\"col-sm-10\">
                        <button class=\"btn btn-primary\">";
        // line 79
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 79, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                        
                    </div>
                    </div>

                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
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
        return "bilan_de_soin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  221 => 79,  211 => 72,  207 => 71,  202 => 69,  192 => 62,  188 => 61,  183 => 59,  176 => 55,  172 => 54,  167 => 52,  160 => 48,  156 => 47,  151 => 45,  144 => 41,  140 => 40,  135 => 38,  128 => 34,  124 => 33,  119 => 31,  114 => 29,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/Base.html.twig'%}

{% block title %}Modifier bilan {% endblock %}
{% block body %}

<div class=\"\" style='margin-left: 20% ;'>
    <div class=\"pagetitle\">
      <h1>Modifier bilan</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Accueil</a></li>
          <li class=\"breadcrumb-item\">bilan</li>
          <li class=\"breadcrumb-item active\">Modifier bilan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



    
    


   <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Modifier bilan</h5>

              <!-- Modifier bilan -->
                {{ form_start(form) }}
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.IdClient,\"IdClient\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.IdClient,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.IdClient,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.IdVeterinaire,\"IdVeterinaire\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.IdVeterinaire,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.IdVeterinaire,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.Animal,\"Animal\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.Animal,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.Animal,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.Description,\"Description\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.Description,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.Description,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.Prix,\"Prix\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.Prix,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.Prix,{'attr':{'class':'text-danger'}})}}
                        </div>
                    </div>


                    
                    <div class=\"row mb-3\">
                        <div>{{form_label(form.etat,\"etat\",{'attr':{'class':'col-sm-2 col-form-label'}})}} <span class=\"quform-required\"> *</span></div>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.etat,{'attr':{'class':'form-select'}}) }}
                            {{ form_errors(form.etat,{'attr':{'class':'text-danger'}})}}
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
", "bilan_de_soin/edit.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\bilan_de_soin\\edit.html.twig");
    }
}

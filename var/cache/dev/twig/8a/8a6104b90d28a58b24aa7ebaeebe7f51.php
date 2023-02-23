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

/* reclamation/show.html.twig */
class __TwigTemplate_fa78a3fe9ee05ae942abf78f2e6a03b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "reclamation/show.html.twig", 1);
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

        echo "Reclamation";
        
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

<div style='margin-left: 20% ;'>
    <h1>Reclamation</h1>

    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <table class=\"card\" >
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>IdBilan</th>
                                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 24, $this->source); })()), "IdBilan", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>IdClient</th>
                                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 28, $this->source); })()), "IdClient", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Text</th>
                                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 32, $this->source); })()), "Text", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Etat</th>
                                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 36, $this->source); })()), "Etat", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\" margin-bottom: 10px;\">
                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_index");
        echo "\" class=\" btn btn-dark\">back to list</a>

                            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" class=\" btn btn-warning\">edit</a>
                        </div> 
                        
                        ";
        // line 46
        echo twig_include($this->env, $context, "reclamation/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            <div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  145 => 43,  140 => 41,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/Base.html.twig'%}

{% block title %}Reclamation{% endblock %}

{% block body %}


<div style='margin-left: 20% ;'>
    <h1>Reclamation</h1>

    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <table class=\"card\" >
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ reclamation.id }}</td>
                                </tr>
                                <tr>
                                    <th>IdBilan</th>
                                    <td>{{ reclamation.IdBilan }}</td>
                                </tr>
                                <tr>
                                    <th>IdClient</th>
                                    <td>{{ reclamation.IdClient }}</td>
                                </tr>
                                <tr>
                                    <th>Text</th>
                                    <td>{{ reclamation.Text }}</td>
                                </tr>
                                <tr>
                                    <th>Etat</th>
                                    <td>{{ reclamation.Etat }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\" margin-bottom: 10px;\">
                            <a href=\"{{ path('app_reclamations_index') }}\" class=\" btn btn-dark\">back to list</a>

                            <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\" btn btn-warning\">edit</a>
                        </div> 
                        
                        {{ include('reclamation/_delete_form.html.twig') }}
                    </div>
                </div>
            <div>
        </div>
    </div>
</div>
{% endblock %}
", "reclamation/show.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\reclamation\\show.html.twig");
    }
}

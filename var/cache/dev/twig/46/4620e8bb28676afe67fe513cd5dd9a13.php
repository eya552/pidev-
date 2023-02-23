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

/* bilan_de_soin/show.html.twig */
class __TwigTemplate_acccfc773e6f3744395e8163196a132c extends Template
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
        return "admin/Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan_de_soin/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "bilan_de_soin/show.html.twig", 1);
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

<div style='margin-left: 20% ;'>
    <h1>BilanDeSoin</h1>

    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <table class=\"card\" >
                            <tbody>
                                <tr>
                                    <th >Id</th>
                                    <td >";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>IdClient</th>
                                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 22, $this->source); })()), "IdClient", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>IdVeterinaire</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 26, $this->source); })()), "IdVeterinaire", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Animal</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 30, $this->source); })()), "Animal", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 34, $this->source); })()), "Description", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Prix</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 38, $this->source); })()), "Prix", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Etat</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 42, $this->source); })()), "etat", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\" margin-bottom: 10px;\">
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_de_soin_index");
        echo "\" class=\" btn btn-dark\">back to list</a>

                            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_de_soin_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["bilan_de_soin"]) || array_key_exists("bilan_de_soin", $context) ? $context["bilan_de_soin"] : (function () { throw new RuntimeError('Variable "bilan_de_soin" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\" class=\" btn btn-warning\">edit</a>
                        </div> 
                        
                        ";
        // line 52
        echo twig_include($this->env, $context, "bilan_de_soin/_delete_form.html.twig");
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
        return "bilan_de_soin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  139 => 49,  134 => 47,  126 => 42,  119 => 38,  112 => 34,  105 => 30,  98 => 26,  91 => 22,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/Base.html.twig'%}

{% block body %}


<div style='margin-left: 20% ;'>
    <h1>BilanDeSoin</h1>

    <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <table class=\"card\" >
                            <tbody>
                                <tr>
                                    <th >Id</th>
                                    <td >{{ bilan_de_soin.id }}</td>
                                </tr>
                                <tr>
                                    <th>IdClient</th>
                                    <td>{{ bilan_de_soin.IdClient }}</td>
                                </tr>
                                <tr>
                                    <th>IdVeterinaire</th>
                                    <td>{{ bilan_de_soin.IdVeterinaire }}</td>
                                </tr>
                                <tr>
                                    <th>Animal</th>
                                    <td>{{ bilan_de_soin.Animal }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ bilan_de_soin.Description }}</td>
                                </tr>
                                <tr>
                                    <th>Prix</th>
                                    <td>{{ bilan_de_soin.Prix }}</td>
                                </tr>
                                <tr>
                                    <th>Etat</th>
                                    <td>{{ bilan_de_soin.etat }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style=\" margin-bottom: 10px;\">
                            <a href=\"{{ path('app_bilan_de_soin_index') }}\" class=\" btn btn-dark\">back to list</a>

                            <a href=\"{{ path('app_bilan_de_soin_edit', {'id': bilan_de_soin.id}) }}\" class=\" btn btn-warning\">edit</a>
                        </div> 
                        
                        {{ include('bilan_de_soin/_delete_form.html.twig') }}
                    </div>
                </div>
            <div>
        </div>
    </div>
</div>
{% endblock %}
", "bilan_de_soin/show.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\bilan_de_soin\\show.html.twig");
    }
}

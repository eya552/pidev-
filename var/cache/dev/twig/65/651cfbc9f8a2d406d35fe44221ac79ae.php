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

/* reclamation/Reclamations.html.twig */
class __TwigTemplate_e163f878dd400633566e40a232fa1b2d extends Template
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
        // line 3
        return "admin/Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/Reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/Reclamations.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "reclamation/Reclamations.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

    <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Table des reclamations </h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">


              ";
        // line 23
        if ((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id_Bilan</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id_Bilan</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id_Client</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Text</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Etat</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 38
                echo "                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          
                          <div class=\"d-flex flex-column justify-content-center\"> 
                            <p class=\"text-xs font-weight-bold mb-0\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "</p>  
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "IdBilan", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>  
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <p class=\"text-xs font-weight-bold mb-0\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "IdClient", [], "any", false, false, false, 51), "html", null, true);
                echo "</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Text", [], "any", false, false, false, 54), "html", null, true);
                echo "</span>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Etat", [], "any", false, false, false, 57), "html", null, true);
                echo "</span>
                      </td>
                      
                      <td class=\"align-middle\">
                      
                        <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" class=\" btn btn-link text-dark px-3 mb-0 \" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Modifier
                        </a>
                        <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\" class=\"btn btn-link text-danger text-gradient px-3 mb-0\" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Supprimer 
                        </a>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    
                   
                    
                  </tbody>
                </table>
                ";
        }
        // line 77
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\" class=\"btn btn-link text-success text-gradient px-3 mb-0\">Create new</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/Reclamations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 77,  167 => 71,  155 => 65,  149 => 62,  141 => 57,  135 => 54,  129 => 51,  123 => 48,  115 => 43,  108 => 38,  104 => 37,  89 => 24,  87 => 23,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{%extends 'admin/Base.html.twig'%}

{% block body %}


<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

    <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Table des reclamations </h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">


              {% if reclamations %}
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id_Bilan</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id_Bilan</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id_Client</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Text</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Etat</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  {% for reclamation in reclamations %}
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          
                          <div class=\"d-flex flex-column justify-content-center\"> 
                            <p class=\"text-xs font-weight-bold mb-0\">{{reclamation.id}}</p>  
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">{{reclamation.IdBilan}}</p>  
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <p class=\"text-xs font-weight-bold mb-0\">{{reclamation.IdClient}}</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{reclamation.Text}}</span>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{reclamation.Etat}}</span>
                      </td>
                      
                      <td class=\"align-middle\">
                      
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\" btn btn-link text-dark px-3 mb-0 \" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Modifier
                        </a>
                        <a href=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" class=\"btn btn-link text-danger text-gradient px-3 mb-0\" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Supprimer 
                        </a>
                      </td>
                    </tr>
                  {% endfor %}
                    
                   
                    
                  </tbody>
                </table>
                {% endif %}
                <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-link text-success text-gradient px-3 mb-0\">Create new</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  
  {% endblock %}
 ", "reclamation/Reclamations.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\reclamation\\Reclamations.html.twig");
    }
}

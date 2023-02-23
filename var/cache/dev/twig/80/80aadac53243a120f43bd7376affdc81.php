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

/* admin/Bilans.html.twig */
class __TwigTemplate_0ee51d1de78305e5140038a6b6ff1d80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Bilans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/Bilans.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/Bilans.html.twig", 3);
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

<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \"  style='margin-left: 20% ;'>

    <div class=\"container-fluid py-4\">
        <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Table des bilans </h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">


              ";
        // line 23
        if ((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs  opacity-7\">Id_Bilan</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id_Client</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id-veterinaire</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Animal</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Description</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Prix</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Etat</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
                // line 40
                echo "                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          
                          <div class=\"d-flex flex-column justify-content-center\"> 
                            <p class=\"text-xs font-weight-bold mb-0\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "</p>  
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "Idclient", [], "any", false, false, false, 50), "html", null, true);
                echo "</p>  
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <p class=\"text-xs font-weight-bold mb-0\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "Idveterinaire", [], "any", false, false, false, 53), "html", null, true);
                echo "</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "animal", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "description", [], "any", false, false, false, 59), "html", null, true);
                echo "</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "prix", [], "any", false, false, false, 62), "html", null, true);
                echo "</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        ";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["bilan"], "etat", [], "any", false, false, false, 65) == "refusé")) {
                    // line 66
                    echo "                          <span class=\"badge rounded-pill bg-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "etat", [], "any", false, false, false, 66), "html", null, true);
                    echo "</span>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 67
$context["bilan"], "etat", [], "any", false, false, false, 67) == "accepté")) {
                    // line 68
                    echo "                          <span class=\"badge rounded-pill bg-success\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "etat", [], "any", false, false, false, 68), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 70
                    echo "                          <span class=\"badge rounded-pill bg-secondary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bilan"], "etat", [], "any", false, false, false, 70), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 71
                echo "                  
                      </td>
                      <td class=\"align-middle\">
                      
                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_de_soin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"btn btn-warning text-dark px-3 mb-0 \" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Modifier
                        </a>
                        <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_de_soin_showA", ["id" => twig_get_attribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" class=\"btn btn-danger text-gradient px-3 mb-0\" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Supprimer 
                        </a>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    
                  </tbody>
                </table>
                ";
        }
        // line 88
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_de_soin_new2");
        echo "\" class=\"btn btn-success text-gradient px-3 mb-0\">Create new</a>
                  

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
        return "admin/Bilans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 88,  200 => 84,  188 => 78,  182 => 75,  176 => 71,  170 => 70,  164 => 68,  162 => 67,  157 => 66,  155 => 65,  149 => 62,  143 => 59,  137 => 56,  131 => 53,  125 => 50,  117 => 45,  110 => 40,  106 => 39,  89 => 24,  87 => 23,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{%extends 'admin/Base.html.twig'%}

{% block body %}


<main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \"  style='margin-left: 20% ;'>

    <div class=\"container-fluid py-4\">
        <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;margin-top: 150px;\">
        <div class=\"col-12\">
          <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\">Table des bilans </h6>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive p-0\">


              {% if bilans %}
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs  opacity-7\">Id_Bilan</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Id_Client</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Id-veterinaire</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Animal</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Description</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Prix</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Etat</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  {% for bilan in bilans %}
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          
                          <div class=\"d-flex flex-column justify-content-center\"> 
                            <p class=\"text-xs font-weight-bold mb-0\">{{bilan.id}}</p>  
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class=\"text-xs font-weight-bold mb-0\">{{bilan.Idclient}}</p>  
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <p class=\"text-xs font-weight-bold mb-0\">{{bilan.Idveterinaire}}</p>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{bilan.animal}}</span>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{bilan.description}}</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        <span class=\"text-secondary text-xs font-weight-bold\">{{bilan.prix}}</span>
                      </td>
                      <td class=\"align-middle text-center\">
                        {% if bilan.etat =='refusé' %}
                          <span class=\"badge rounded-pill bg-danger\">{{bilan.etat}}</span>
                        {% elseif bilan.etat =='accepté' %}
                          <span class=\"badge rounded-pill bg-success\">{{bilan.etat}}</span>
                        {% else %}
                          <span class=\"badge rounded-pill bg-secondary\">{{bilan.etat}}</span>
                        {% endif %}                  
                      </td>
                      <td class=\"align-middle\">
                      
                        <a href=\"{{ path('app_bilan_de_soin_edit', {'id': bilan.id}) }}\" class=\"btn btn-warning text-dark px-3 mb-0 \" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Modifier
                        </a>
                        <a href=\"{{ path('app_bilan_de_soin_showA', {'id': bilan.id}) }}\" class=\"btn btn-danger text-gradient px-3 mb-0\" data-toggle=\"tooltip\" data-original-title=\"Edit user\">
                          Supprimer 
                        </a>
                      </td>
                    </tr>
                  {% endfor %}
                    
                  </tbody>
                </table>
                {% endif %}
                <a href=\"{{ path('app_bilan_de_soin_new2') }}\" class=\"btn btn-success text-gradient px-3 mb-0\">Create new</a>
                  

              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  
  {% endblock %}
 ", "admin/Bilans.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\admin\\Bilans.html.twig");
    }
}

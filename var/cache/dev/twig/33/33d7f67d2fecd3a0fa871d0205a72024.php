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

/* admin/footer.html.twig */
class __TwigTemplate_7bd806c9447d3a6bc8e3d4ff0e4cd01e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footer.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/footer.html.twig", 1);
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
        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              ";
        // line 14
        echo "            </div>
            ";
        // line 31
        echo "          </div>
        </div>
      

         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  74 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/Base.html.twig'%}

{% block body%}

        <div class=\"container-fluid\">
          <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
              {# <div class=\"copyright text-center text-sm text-muted text-lg-start\">
           
                made with <i class=\"fa fa-heart\"></i> by
                <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold\" target=\"_blank\">Creative Tim</a>
                for a better web.
              </div> #}
            </div>
            {# <div class=\"col-lg-6\">
              <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                </li>
              </ul>
            </div> #}
          </div>
        </div>
      

         {% endblock %}", "admin/footer.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\admin\\footer.html.twig");
    }
}

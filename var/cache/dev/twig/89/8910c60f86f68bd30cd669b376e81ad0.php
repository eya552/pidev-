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

/* admin/sign-up.html.twig */
class __TwigTemplate_0884cc5a77b2023dd90773887956614f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sign-up.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sign-up.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/sign-up.html.twig", 1);
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
  <main >
    <div class=\"container\"  style='margin-top: 1% ;' >

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                    <p class=\"text-center small\">Enter your personal details to create account</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate>
                    <div class=\"col-12\">
                      <label for=\"yourName\" class=\"form-label\">Your Name</label>
                      <input type=\"text\" name=\"name\" class=\"form-control\" id=\"yourName\" required>
                      <div class=\"invalid-feedback\">Please, enter your name!</div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                      <input type=\"email\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required>
                      <div class=\"invalid-feedback\">Please enter a valid Email adddress!</div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\">Username</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"text\" name=\"username\" class=\"form-control\" id=\"yourUsername\" required>
                        <div class=\"invalid-feedback\">Please choose a username.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\" required>
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>

                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/sign-up.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/Base.html.twig'%}

{% block body %}

  <main >
    <div class=\"container\"  style='margin-top: 1% ;' >

      <section class=\"section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4\">
        <div class=\"container\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center\">

              <div class=\"d-flex justify-content-center py-4\">
                <a href=\"index.html\" class=\"logo d-flex align-items-center w-auto\">
                  <img src=\"assets/img/logo.png\" alt=\"\">
                  <span class=\"d-none d-lg-block\">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class=\"card mb-3\">

                <div class=\"card-body\">

                  <div class=\"pt-4 pb-2\">
                    <h5 class=\"card-title text-center pb-0 fs-4\">Create an Account</h5>
                    <p class=\"text-center small\">Enter your personal details to create account</p>
                  </div>

                  <form class=\"row g-3 needs-validation\" novalidate>
                    <div class=\"col-12\">
                      <label for=\"yourName\" class=\"form-label\">Your Name</label>
                      <input type=\"text\" name=\"name\" class=\"form-control\" id=\"yourName\" required>
                      <div class=\"invalid-feedback\">Please, enter your name!</div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourEmail\" class=\"form-label\">Your Email</label>
                      <input type=\"email\" name=\"email\" class=\"form-control\" id=\"yourEmail\" required>
                      <div class=\"invalid-feedback\">Please enter a valid Email adddress!</div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourUsername\" class=\"form-label\">Username</label>
                      <div class=\"input-group has-validation\">
                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">@</span>
                        <input type=\"text\" name=\"username\" class=\"form-control\" id=\"yourUsername\" required>
                        <div class=\"invalid-feedback\">Please choose a username.</div>
                      </div>
                    </div>

                    <div class=\"col-12\">
                      <label for=\"yourPassword\" class=\"form-label\">Password</label>
                      <input type=\"password\" name=\"password\" class=\"form-control\" id=\"yourPassword\" required>
                      <div class=\"invalid-feedback\">Please enter your password!</div>
                    </div>

                    <div class=\"col-12\">
                      <div class=\"form-check\">
                        <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                        <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                        <div class=\"invalid-feedback\">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class=\"col-12\">
                      <button class=\"btn btn-primary w-100\" type=\"submit\">Create Account</button>
                    </div>
                    <div class=\"col-12\">
                      <p class=\"small mb-0\">Already have an account? <a href=\"pages-login.html\">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>{% endblock %}", "admin/sign-up.html.twig", "C:\\Users\\ghass\\OneDrive\\Documents\\GitHub\\pidev-\\templates\\admin\\sign-up.html.twig");
    }
}

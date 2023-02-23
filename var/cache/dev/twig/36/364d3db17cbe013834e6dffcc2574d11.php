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

/* admin/home.html.twig */
class __TwigTemplate_f36c42ad32c69105224e152de058566c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/home.html.twig", 1);
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
  <div style=\"margin-right:50px;margin-left:350px\">

      <main class=\"main-content border-radius-lg \">



            <div class=\"container-fluid py-4\">
              


<div class=\"row\">
  <div class=\"col-lg-7 position-relative z-index-2\">
    <div class=\"card card-plain mb-4\">
      <div class=\"card-body p-3\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"d-flex flex-column h-100\">
  <h2 class=\"font-weight-bolder mb-0\">General Statistics</h2>
</div>

          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-5 col-sm-5\">
        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2\">
    <div class=\"icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">weekend</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize\">Bookings</p>
      <h4 class=\"mb-0\">281</h4>
    </div>
  </div>

  <hr class=\"dark horizontal my-0\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+55% </span>than last week</p>
  </div>
</div>

        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2\">
    <div class=\"icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">leaderboard</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize\">Today's Users</p>
      <h4 class=\"mb-0\">2,300</h4>
    </div>
  </div>

  <hr class=\"dark horizontal my-0\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+3% </span>than last month</p>
  </div>
</div>

      </div>
      <div class=\"col-lg-5 col-sm-5 mt-sm-0 mt-4\">
        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2 bg-transparent\">
    <div class=\"icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">store</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize \">Revenue</p>
      <h4 class=\"mb-0 \">34k</h4>
    </div>
  </div>

  <hr class=\"horizontal my-0 dark\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0 \"><span class=\"text-success text-sm font-weight-bolder\">+1% </span>than yesterday</p>
  </div>
</div>

        <div class=\"card \">
  <div class=\"card-header p-3 pt-2 bg-transparent\">
    <div class=\"icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">person_add</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize \">Followers</p>
      <h4 class=\"mb-0 \">+91</h4>
    </div>
  </div>

  <hr class=\"horizontal my-0 dark\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0 \">Just updated</p>
  </div>
</div>

      </div>
    </div>

    <div class=\"row mt-4\">
      <div class=\"col-10\">
        <div class=\"card mb-4 \">
  <div class=\"d-flex\">
    <div class=\"icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4\">
      <i class=\"material-icons opacity-10\" aria-hidden=\"true\">language</i>
    </div>
    <h6 class=\"mt-3 mb-2 ms-3 \">Sales by Country</h6>
  </div>
  <div class=\"card-body p-3\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-7\">
        <div class=\"table-responsive\">
          <table class=\"table align-items-center \">
            <tbody>
              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/icons/flags/US.png"), "html", null, true);
        echo "\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">United States</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">2500</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$230,900</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">29.9%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/icons/flags/DE.png"), "html", null, true);
        echo "\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Germany</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">3.900</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$440,000</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">40.22%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/icons/flags/GB.png"), "html", null, true);
        echo "\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Great Britain</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">1.400</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$190,700</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">23.44%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/icons/flags/BR.png"), "html", null, true);
        echo "\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Brasil</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">562</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$143,960</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">32.14%</h6>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-lg-6 col-md-5\">
        <div id=\"map\" class=\"mt-0 mt-lg-n4\"></div>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>

<div class=\"row mt-4\">
  <div class=\"col-lg-5 mb-lg-0 mb-4\">
    <div class=\"card z-index-2 mt-4\">
  <div class=\"card-body mt-n5 px-3\">
    <div class=\"bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3\">
      <div class=\"chart\">
        <canvas id=\"chart-bars\" class=\"chart-canvas\" height=\"170\"></canvas>
      </div>
    </div>
    <h6 class=\"ms-2 mt-4 mb-0\"> Active Users </h6>
    <p class=\"text-sm ms-2\"> (<span class=\"font-weight-bolder\">+11%</span>) than last week </p>
    <div class=\"container border-radius-lg\">
      <div class=\"row\">
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">groups</i>
            </div>
            <p class=\"text-xs my-auto font-weight-bold\">Users</p>
          </div>
          <h4 class=\"font-weight-bolder\">42K</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">ads_click</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Clicks</p>
          </div>
          <h4 class=\"font-weight-bolder\">1.7m</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-90\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">receipt</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Sales</p>
          </div>
          <h4 class=\"font-weight-bolder\">399\$</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-30\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">category</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Items</p>
          </div>
          <h4 class=\"font-weight-bolder\">74</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-50\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
  <div class=\"col-lg-7\">
    <div class=\"card z-index-2\">
  <div class=\"card-header pb-0\">
    <h6>Sales overview</h6>
    <p class=\"text-sm\">
      <i class=\"fa fa-arrow-up text-success\"></i>
      <span class=\"font-weight-bold\">4% more</span> in 2021
    </p>
  </div>
  <div class=\"card-body p-3\">
    <div class=\"chart\">
      <canvas id=\"chart-line\" class=\"chart-canvas\" height=\"300\"></canvas>
    </div>
  </div>
</div>

  </div>
</div>

<div class=\"row\">
  <div class=\"col-12\">
    <div id=\"globe\" class=\"position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7\">
      <canvas width=\"700\" height=\"600\" class=\"w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5\"></canvas>
    </div>
  </div>
</div>
</div>

         
       </main>
    

      
          <div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
      <i class=\"material-icons py-2\">settings</i>
    </a>
    <div class=\"card shadow-lg\">
      <div class=\"card-header pb-0 pt-3\">
        <div class=\"float-start\">
          <h5 class=\"mt-3 mb-0\">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class=\"float-end mt-4\">
          <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"material-icons\">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class=\"horizontal dark my-1\">
      <div class=\"card-body pt-sm-3 pt-0\">
        
        
        

        
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        
        
        <a class=\"btn bg-gradient-info w-100\" href=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.creative-tim.com/product/material-dashboard-pro"), "html", null, true);
        echo "\">Free Download</a>
        
        
        <a class=\"btn btn-outline-dark w-100\" href=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard"), "html", null, true);
        echo "\">View documentation</a>
        
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://github.com/creativetimofficial/material-dashboard"), "html", null, true);
        echo "\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          
          <a href=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"), "html", null, true);
        echo "\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          

          
          <a href=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"), "html", null, true);
        echo "\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
          
        </div>
      </div>
    </div>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 412,  493 => 406,  487 => 403,  481 => 400,  475 => 397,  295 => 220,  260 => 188,  225 => 156,  190 => 124,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'admin/Base.html.twig'%}

{% block body %}

  <div style=\"margin-right:50px;margin-left:350px\">

      <main class=\"main-content border-radius-lg \">



            <div class=\"container-fluid py-4\">
              


<div class=\"row\">
  <div class=\"col-lg-7 position-relative z-index-2\">
    <div class=\"card card-plain mb-4\">
      <div class=\"card-body p-3\">
        <div class=\"row\">
          <div class=\"col-lg-6\">
            <div class=\"d-flex flex-column h-100\">
  <h2 class=\"font-weight-bolder mb-0\">General Statistics</h2>
</div>

          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-5 col-sm-5\">
        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2\">
    <div class=\"icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">weekend</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize\">Bookings</p>
      <h4 class=\"mb-0\">281</h4>
    </div>
  </div>

  <hr class=\"dark horizontal my-0\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+55% </span>than last week</p>
  </div>
</div>

        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2\">
    <div class=\"icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">leaderboard</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize\">Today's Users</p>
      <h4 class=\"mb-0\">2,300</h4>
    </div>
  </div>

  <hr class=\"dark horizontal my-0\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+3% </span>than last month</p>
  </div>
</div>

      </div>
      <div class=\"col-lg-5 col-sm-5 mt-sm-0 mt-4\">
        <div class=\"card  mb-2\">
  <div class=\"card-header p-3 pt-2 bg-transparent\">
    <div class=\"icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">store</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize \">Revenue</p>
      <h4 class=\"mb-0 \">34k</h4>
    </div>
  </div>

  <hr class=\"horizontal my-0 dark\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0 \"><span class=\"text-success text-sm font-weight-bolder\">+1% </span>than yesterday</p>
  </div>
</div>

        <div class=\"card \">
  <div class=\"card-header p-3 pt-2 bg-transparent\">
    <div class=\"icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute\">
      <i class=\"material-icons opacity-10\">person_add</i>
    </div>
    <div class=\"text-end pt-1\">
      <p class=\"text-sm mb-0 text-capitalize \">Followers</p>
      <h4 class=\"mb-0 \">+91</h4>
    </div>
  </div>

  <hr class=\"horizontal my-0 dark\">
  <div class=\"card-footer p-3\">
    <p class=\"mb-0 \">Just updated</p>
  </div>
</div>

      </div>
    </div>

    <div class=\"row mt-4\">
      <div class=\"col-10\">
        <div class=\"card mb-4 \">
  <div class=\"d-flex\">
    <div class=\"icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4\">
      <i class=\"material-icons opacity-10\" aria-hidden=\"true\">language</i>
    </div>
    <h6 class=\"mt-3 mb-2 ms-3 \">Sales by Country</h6>
  </div>
  <div class=\"card-body p-3\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-7\">
        <div class=\"table-responsive\">
          <table class=\"table align-items-center \">
            <tbody>
              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"{{asset('assets/admin/img/icons/flags/US.png')}}\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">United States</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">2500</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$230,900</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">29.9%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"{{asset('assets/admin/img/icons/flags/DE.png')}}\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Germany</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">3.900</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$440,000</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">40.22%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"{{asset('assets/admin/img/icons/flags/GB.png')}}\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Great Britain</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">1.400</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$190,700</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">23.44%</h6>
                  </div>
                </td>
              </tr>

              <tr>
                <td class=\"w-30\">
                  <div class=\"d-flex px-2 py-1 align-items-center\">
                    <div>
                      <img src=\"{{asset('assets/admin/img/icons/flags/BR.png')}}\" alt=\"Country flag\">
                    </div>
                    <div class=\"ms-4\">
                      <p class=\"text-xs font-weight-bold mb-0 \">Country:</p>
                      <h6 class=\"text-sm font-weight-normal mb-0 \">Brasil</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Sales:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">562</h6>
                  </div>
                </td>
                <td>
                  <div class=\"text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Value:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">\$143,960</h6>
                  </div>
                </td>
                <td class=\"align-middle text-sm\">
                  <div class=\"col text-center\">
                    <p class=\"text-xs font-weight-bold mb-0 \">Bounce:</p>
                    <h6 class=\"text-sm font-weight-normal mb-0 \">32.14%</h6>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"col-lg-6 col-md-5\">
        <div id=\"map\" class=\"mt-0 mt-lg-n4\"></div>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>

<div class=\"row mt-4\">
  <div class=\"col-lg-5 mb-lg-0 mb-4\">
    <div class=\"card z-index-2 mt-4\">
  <div class=\"card-body mt-n5 px-3\">
    <div class=\"bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3\">
      <div class=\"chart\">
        <canvas id=\"chart-bars\" class=\"chart-canvas\" height=\"170\"></canvas>
      </div>
    </div>
    <h6 class=\"ms-2 mt-4 mb-0\"> Active Users </h6>
    <p class=\"text-sm ms-2\"> (<span class=\"font-weight-bolder\">+11%</span>) than last week </p>
    <div class=\"container border-radius-lg\">
      <div class=\"row\">
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">groups</i>
            </div>
            <p class=\"text-xs my-auto font-weight-bold\">Users</p>
          </div>
          <h4 class=\"font-weight-bolder\">42K</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">ads_click</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Clicks</p>
          </div>
          <h4 class=\"font-weight-bolder\">1.7m</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-90\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">receipt</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Sales</p>
          </div>
          <h4 class=\"font-weight-bolder\">399\$</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-30\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
        <div class=\"col-3 py-3 ps-0\">
          <div class=\"d-flex mb-2\">
            <div class=\"icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">category</i>
            </div>
            <p class=\"text-xs mt-1 mb-0 font-weight-bold\">Items</p>
          </div>
          <h4 class=\"font-weight-bolder\">74</h4>
          <div class=\"progress w-75\">
            <div class=\"progress-bar bg-dark w-50\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
  <div class=\"col-lg-7\">
    <div class=\"card z-index-2\">
  <div class=\"card-header pb-0\">
    <h6>Sales overview</h6>
    <p class=\"text-sm\">
      <i class=\"fa fa-arrow-up text-success\"></i>
      <span class=\"font-weight-bold\">4% more</span> in 2021
    </p>
  </div>
  <div class=\"card-body p-3\">
    <div class=\"chart\">
      <canvas id=\"chart-line\" class=\"chart-canvas\" height=\"300\"></canvas>
    </div>
  </div>
</div>

  </div>
</div>

<div class=\"row\">
  <div class=\"col-12\">
    <div id=\"globe\" class=\"position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7\">
      <canvas width=\"700\" height=\"600\" class=\"w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5\"></canvas>
    </div>
  </div>
</div>
</div>

         
       </main>
    

      
          <div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
      <i class=\"material-icons py-2\">settings</i>
    </a>
    <div class=\"card shadow-lg\">
      <div class=\"card-header pb-0 pt-3\">
        <div class=\"float-start\">
          <h5 class=\"mt-3 mb-0\">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class=\"float-end mt-4\">
          <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"material-icons\">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class=\"horizontal dark my-1\">
      <div class=\"card-body pt-sm-3 pt-0\">
        
        
        

        
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        
        
        <a class=\"btn bg-gradient-info w-100\" href=\"{{asset(\"https://www.creative-tim.com/product/material-dashboard-pro\")}}\">Free Download</a>
        
        
        <a class=\"btn btn-outline-dark w-100\" href=\"{{asset(\"https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard\")}}\">View documentation</a>
        
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"{{asset(\"https://github.com/creativetimofficial/material-dashboard\")}}\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          
          <a href=\"{{asset(\"https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard\")}}\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          

          
          <a href=\"{{asset(\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard\")}}\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
          
        </div>
      </div>
    </div>
</div>
</div>
{% endblock %}", "admin/home.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\admin\\home.html.twig");
    }
}

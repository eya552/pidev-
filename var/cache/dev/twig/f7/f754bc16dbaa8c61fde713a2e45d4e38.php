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

/* admin/dashboard.html.twig */
class __TwigTemplate_e284019e2e56308c874f4f87c2f8fef7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/Base.html.twig", "admin/dashboard.html.twig", 1);
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
  
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

    <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Today's Money</p>
                <h4 class=\"mb-0\">\$53k</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
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
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">New Clients</p>
                <h4 class=\"mb-0\">3,462</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-danger text-sm font-weight-bolder\">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Sales</p>
                <h4 class=\"mb-0\">\$103,430</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mt-4\">
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-bars\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Website Views</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2  \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-success shadow-success border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \"> Daily Sales </h6>
              <p class=\"text-sm \"> (<span class=\"font-weight-bolder\">+15%</span>) increase in today sales. </p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mt-4 mb-3\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line-tasks\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Completed Tasks</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mb-4\">
        <div class=\"col-lg-8 col-md-6 mb-md-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header pb-0\">
              <div class=\"row\">
                <div class=\"col-lg-6 col-7\">
                  <h6>Projects</h6>
                  <p class=\"text-sm mb-0\">
                    <i class=\"fa fa-check text-info\" aria-hidden=\"true\"></i>
                    <span class=\"font-weight-bold ms-1\">30 done</span> this month
                  </p>
                </div>
                <div class=\"col-lg-6 col-5 my-auto text-end\">
                  <div class=\"dropdown float-lg-end pe-4\">
                    <a class=\"cursor-pointer\" id=\"dropdownTable\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fa fa-ellipsis-v text-secondary\"></i>
                    </a>
                    <ul class=\"dropdown-menu px-2 py-3 ms-sm-n4 ms-n5\" aria-labelledby=\"dropdownTable\">
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Another action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Companies</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Members</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Budget</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-xd.svg\" class=\"avatar avatar-sm me-3\" alt=\"xd\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$14,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">60%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-atlassian.svg\" class=\"avatar avatar-sm me-3\" alt=\"atlassian\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team5\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team6\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$3,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">10%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-10\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-slack.svg\" class=\"avatar avatar-sm me-3\" alt=\"team7\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team8\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team9\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> Not set </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm me-3\" alt=\"spotify\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"user2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$20,500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-jira.svg\" class=\"avatar avatar-sm me-3\" alt=\"jira\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user5\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">25%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-25\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"25\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-invision.svg\" class=\"avatar avatar-sm me-3\" alt=\"invision\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user6\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user7\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$2,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">40%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-40\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"40\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"card h-100\">
            <div class=\"card-header pb-0\">
              <h6>Orders overview</h6>
              <p class=\"text-sm\">
                <i class=\"fa fa-arrow-up text-success\" aria-hidden=\"true\"></i>
                <span class=\"font-weight-bold\">24%</span> this month
              </p>
            </div>
            <div class=\"card-body p-3\">
              <div class=\"timeline timeline-one-side\">
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-success text-gradient\">notifications</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">\$2400, Design changes</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-danger text-gradient\">code</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #1832412</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-info text-gradient\">shopping_cart</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Server payments for April</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-warning text-gradient\">credit_card</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New card added for order #4395133</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-primary text-gradient\">key</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Unlock packages for development</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-dark text-gradient\">payments</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #9583120</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
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
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
          <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
          <h6 class=\"mb-0\">Sidenav Type</h6>
          <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
          <button class=\"btn bg-gradient-dark px-3 mb-2 active\" data-class=\"bg-gradient-dark\" onclick=\"sidebarType(this)\">Dark</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-transparent\" onclick=\"sidebarType(this)\">Transparent</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"mt-3 d-flex\">
          <h6 class=\"mb-0\">Navbar Fixed</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <a class=\"btn bg-gradient-info w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro\">Free Download</a>
        <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard\">View documentation</a>
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          <a href=\"https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
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
        return "admin/dashboard.html.twig";
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

  
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

    <div class=\"container-fluid py-4\">
      <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Today's Money</p>
                <h4 class=\"mb-0\">\$53k</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
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
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">person</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">New Clients</p>
                <h4 class=\"mb-0\">3,462</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-danger text-sm font-weight-bolder\">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
          <div class=\"card\">
            <div class=\"card-header p-3 pt-2\">
              <div class=\"icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute\">
                <i class=\"material-icons opacity-10\">weekend</i>
              </div>
              <div class=\"text-end pt-1\">
                <p class=\"text-sm mb-0 text-capitalize\">Sales</p>
                <h4 class=\"mb-0\">\$103,430</h4>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
            <div class=\"card-footer p-3\">
              <p class=\"mb-0\"><span class=\"text-success text-sm font-weight-bolder\">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mt-4\">
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-bars\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Website Views</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
          <div class=\"card z-index-2  \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-success shadow-success border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \"> Daily Sales </h6>
              <p class=\"text-sm \"> (<span class=\"font-weight-bolder\">+15%</span>) increase in today sales. </p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mt-4 mb-3\">
          <div class=\"card z-index-2 \">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent\">
              <div class=\"bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1\">
                <div class=\"chart\">
                  <canvas id=\"chart-line-tasks\" class=\"chart-canvas\" height=\"170\"></canvas>
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <h6 class=\"mb-0 \">Completed Tasks</h6>
              <p class=\"text-sm \">Last Campaign Performance</p>
              <hr class=\"dark horizontal\">
              <div class=\"d-flex \">
                <i class=\"material-icons text-sm my-auto me-1\">schedule</i>
                <p class=\"mb-0 text-sm\">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mb-4\">
        <div class=\"col-lg-8 col-md-6 mb-md-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header pb-0\">
              <div class=\"row\">
                <div class=\"col-lg-6 col-7\">
                  <h6>Projects</h6>
                  <p class=\"text-sm mb-0\">
                    <i class=\"fa fa-check text-info\" aria-hidden=\"true\"></i>
                    <span class=\"font-weight-bold ms-1\">30 done</span> this month
                  </p>
                </div>
                <div class=\"col-lg-6 col-5 my-auto text-end\">
                  <div class=\"dropdown float-lg-end pe-4\">
                    <a class=\"cursor-pointer\" id=\"dropdownTable\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fa fa-ellipsis-v text-secondary\"></i>
                    </a>
                    <ul class=\"dropdown-menu px-2 py-3 ms-sm-n4 ms-n5\" aria-labelledby=\"dropdownTable\">
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Another action</a></li>
                      <li><a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
              <div class=\"table-responsive\">
                <table class=\"table align-items-center mb-0\">
                  <thead>
                    <tr>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Companies</th>
                      <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Members</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Budget</th>
                      <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-xd.svg\" class=\"avatar avatar-sm me-3\" alt=\"xd\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Material XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$14,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">60%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-atlassian.svg\" class=\"avatar avatar-sm me-3\" alt=\"atlassian\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-2.jpg\" alt=\"team5\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"team6\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$3,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">10%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-10\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-slack.svg\" class=\"avatar avatar-sm me-3\" alt=\"team7\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"team8\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"team9\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> Not set </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm me-3\" alt=\"spotify\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user1\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Romina Hadid\">
                            <img src=\"../assets/img/team-3.jpg\" alt=\"user2\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Alexander Smith\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user3\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user4\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$20,500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">100%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-success w-100\" role=\"progressbar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-jira.svg\" class=\"avatar avatar-sm me-3\" alt=\"jira\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user5\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$500 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">25%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-25\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"25\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=\"d-flex px-2 py-1\">
                          <div>
                            <img src=\"../assets/img/small-logos/logo-invision.svg\" class=\"avatar avatar-sm me-3\" alt=\"invision\">
                          </div>
                          <div class=\"d-flex flex-column justify-content-center\">
                            <h6 class=\"mb-0 text-sm\">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class=\"avatar-group mt-2\">
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Ryan Tompson\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"user6\">
                          </a>
                          <a href=\"javascript:;\" class=\"avatar avatar-xs rounded-circle\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Jessica Doe\">
                            <img src=\"../assets/img/team-4.jpg\" alt=\"user7\">
                          </a>
                        </div>
                      </td>
                      <td class=\"align-middle text-center text-sm\">
                        <span class=\"text-xs font-weight-bold\"> \$2,000 </span>
                      </td>
                      <td class=\"align-middle\">
                        <div class=\"progress-wrapper w-75 mx-auto\">
                          <div class=\"progress-info\">
                            <div class=\"progress-percentage\">
                              <span class=\"text-xs font-weight-bold\">40%</span>
                            </div>
                          </div>
                          <div class=\"progress\">
                            <div class=\"progress-bar bg-gradient-info w-40\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"40\"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-md-6\">
          <div class=\"card h-100\">
            <div class=\"card-header pb-0\">
              <h6>Orders overview</h6>
              <p class=\"text-sm\">
                <i class=\"fa fa-arrow-up text-success\" aria-hidden=\"true\"></i>
                <span class=\"font-weight-bold\">24%</span> this month
              </p>
            </div>
            <div class=\"card-body p-3\">
              <div class=\"timeline timeline-one-side\">
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-success text-gradient\">notifications</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">\$2400, Design changes</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-danger text-gradient\">code</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #1832412</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-info text-gradient\">shopping_cart</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Server payments for April</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-warning text-gradient\">credit_card</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New card added for order #4395133</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block mb-3\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-primary text-gradient\">key</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">Unlock packages for development</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class=\"timeline-block\">
                  <span class=\"timeline-step\">
                    <i class=\"material-icons text-dark text-gradient\">payments</i>
                  </span>
                  <div class=\"timeline-content\">
                    <h6 class=\"text-dark text-sm font-weight-bold mb-0\">New order #9583120</h6>
                    <p class=\"text-secondary font-weight-bold text-xs mt-1 mb-0\">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
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
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
          <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
          <h6 class=\"mb-0\">Sidenav Type</h6>
          <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
          <button class=\"btn bg-gradient-dark px-3 mb-2 active\" data-class=\"bg-gradient-dark\" onclick=\"sidebarType(this)\">Dark</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-transparent\" onclick=\"sidebarType(this)\">Transparent</button>
          <button class=\"btn bg-gradient-dark px-3 mb-2 ms-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"mt-3 d-flex\">
          <h6 class=\"mb-0\">Navbar Fixed</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-3\">
        <div class=\"mt-2 d-flex\">
          <h6 class=\"mb-0\">Light / Dark</h6>
          <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
          </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <a class=\"btn bg-gradient-info w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro\">Free Download</a>
        <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard\">View documentation</a>
        <div class=\"w-100 text-center\">
          <a class=\"github-button\" href=\"https://github.com/creativetimofficial/material-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/material-dashboard on GitHub\">Star</a>
          <h6 class=\"mt-3\">Thank you for sharing!</h6>
          <a href=\"https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
          </a>
          <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
            <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  


{% endblock %}", "admin/dashboard.html.twig", "C:\\xampp\\htdocs\\PIdev1\\templates\\admin\\dashboard.html.twig");
    }
}

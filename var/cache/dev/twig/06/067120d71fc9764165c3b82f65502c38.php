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

/* inc/rightsidebar.html.twig */
class __TwigTemplate_6889d04cfe2df650b0ba3213a70207a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/rightsidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/rightsidebar.html.twig"));

        // line 1
        echo "<div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
              </ul>
            </div>
            <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary me-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
              <p class=\"text-gray mb-0\">The total number of sessions</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary me-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face5.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("staradmin/images/faces/face6.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/rightsidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 139,  187 => 131,  176 => 123,  165 => 115,  151 => 104,  140 => 96,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-bs-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-bs-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
              </ul>
            </div>
            <h4 class=\"px-3 text-muted mt-5 fw-light mb-0\">Events</h4>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary me-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
              <p class=\"text-gray mb-0\">The total number of sessions</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary me-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face1.jpg\") }}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face2.jpg\") }}\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face3.jpg\") }}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face4.jpg\") }}\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face5.jpg\") }}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset(\"staradmin/images/faces/face6.jpg\") }}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>", "inc/rightsidebar.html.twig", "/opt/lampp/htdocs/bo-FIND/templates/inc/rightsidebar.html.twig");
    }
}

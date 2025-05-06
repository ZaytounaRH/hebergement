<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* back.html.twig */
class __TwigTemplate_3e92506e0fd6770d7523e6b471a5f8bb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>ZaytounaRH</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
    <meta name=\"author\" content=\"Codedthemes\" />
    <!-- Favicon icon -->
<link rel=\"icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">


<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">



    <!-- Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700\" rel=\"stylesheet\">
    <!-- Waves CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/waves/css/waves.min.css"), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">

<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">

<!-- Themify Icons -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/icon/themify-icons/themify-icons.css"), "html", null, true);
        yield "\">

<!-- Font Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/font-awesome-n.min.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/font-awesome.min.css"), "html", null, true);
        yield "\">

<!-- Scrollbar CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/jquery.mCustomScrollbar.css"), "html", null, true);
        yield "\">

<!-- Custom Style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        yield "\">
</head>

<body>


    <!-- Pre-loader start -->
    <div class=\"theme-loader\">
        <div class=\"loader-track\">
            <div class=\"preloader-wrapper\">
                <div class=\"spinner-layer spinner-blue\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
                <div class=\"spinner-layer spinner-red\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>

                <div class=\"spinner-layer spinner-yellow\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>

                <div class=\"spinner-layer spinner-green\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id=\"pcoded\" class=\"pcoded\">
        <div class=\"pcoded-overlay-box\"></div>
        <div class=\"pcoded-container navbar-wrapper\">
            <nav class=\"navbar header-navbar pcoded-header\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-logo\">
                        <a class=\"mobile-menu waves-effect waves-light\" id=\"mobile-collapse\" href=\"#!\">
                            <i class=\"ti-menu\"></i>
                        </a>
                        <div class=\"mobile-search waves-effect waves-light\">
                            <div class=\"header-search\">
                                <div class=\"main-search morphsearch-search\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend search-close\"><i class=\"ti-close input-group-text\"></i></span>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
                                        <span class=\"input-group-append search-btn\"><i class=\"ti-search input-group-text\"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"d-flex align-items-center gap-2 text-white fw-bold\" style=\"font-size: 20px; text-decoration: none;\">
    <img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png") . "?v=2"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"height: 30px;\">
    <span>Zaytouna<span style=\"color: #28c745;\">RH</span></span>
</a>


                        <a class=\"mobile-options waves-effect waves-light\">
                            <i class=\"ti-more\"></i>
                        </a>
                    </div>
                    <div class=\"navbar-container container-fluid\">
                        <ul class=\"nav-left\">
                            <li>
                                <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                            </li>
                            <li>
                                <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
                                    <i class=\"ti-fullscreen\"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav-right\">
                            <li class=\"header-notification\">
                                <a href=\"#!\" class=\"waves-effect waves-light\">
                                    <i class=\"ti-bell\"></i>
                                    <span class=\"badge bg-c-red\"></span>
                                </a>
                                <ul class=\"show-notification\">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class=\"label label-danger\">New</label>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
                                                <img class=\"d-flex align-self-center img-radius\" src=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar-2.jpg"), "html", null, true);
        yield "\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Responsable RH</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
<img class=\"d-flex align-self-center img-radius\" src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Mariem.jpeg"), "html", null, true);
        yield "\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Joseph William</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
<img class=\"d-flex align-self-center img-radius\" src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar-3.jpg"), "html", null, true);
        yield "\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Sara Soudein</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"user-profile header-notification\">
                                <a href=\"#!\" class=\"waves-effect waves-light\">
<img src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Mariem.jpeg"), "html", null, true);
        yield "\" class=\"img-radius\" alt=\"User-Profile-Image\">
                                    <span>Responsable RH</span>
                                    <i class=\"ti-angle-down\"></i>
                                </a>
                                <ul class=\"show-notification profile-notification\">
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"#!\">
                                            <i class=\"ti-settings\"></i> Settings
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"user-profile.html\">
                                            <i class=\"ti-user\"></i> Profile
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"email-inbox.html\">
                                            <i class=\"ti-email\"></i> My Messages
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"auth-lock-screen.html\">
                                            <i class=\"ti-lock\"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"auth-normal-sign-in.html\">
                                            <i class=\"ti-layout-sidebar-left\"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class=\"pcoded-main-container\">
                <div class=\"pcoded-wrapper\">
                    <nav class=\"pcoded-navbar\">
                        <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                        <div class=\"pcoded-inner-navbar main-menu\">
                            <div class=\"\">
                                <div class=\"main-menu-header\">
<img class=\"img-80 img-radius\" src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/Mariem.jpeg"), "html", null, true);
        yield "\" alt=\"User-Profile-Image\">
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">Responsable RH<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                                </div>
                                <div class=\"main-menu-content\">
                                    <ul>
                                        <li class=\"more-details\">
                                            <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                            <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                            <a href=\"auth-normal-sign-in.html\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"p-15 p-b-0\">
                                <form class=\"form-material\">
                                    <div class=\"form-group form-primary\">
                                        <input type=\"text\" name=\"footer-email\" class=\"form-control\">
                                        <span class=\"form-bar\"></span>
                                        <label class=\"float-label\"><i class=\"fa fa-search m-r-10\"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class=\"pcoded-navigation-label\">Navigation</div>
                           <ul class=\"pcoded-item pcoded-left-item\">
    <li class=\"";
        // line 262
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 262, $this->source); })()), "request", [], "any", false, false, false, 262), "attributes", [], "any", false, false, false, 262), "get", ["_route"], "method", false, false, false, 262) == "admin_dashboard")) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-home\"></i><b>D</b></span>
        <span class=\"pcoded-mtext\">Dashboard</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 270
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "request", [], "any", false, false, false, 270), "attributes", [], "any", false, false, false, 270), "get", ["_route"], "method", false, false, false, 270)) && is_string($_v1 = "app_formation") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-book\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Formations</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 278
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "request", [], "any", false, false, false, 278), "attributes", [], "any", false, false, false, 278), "get", ["_route"], "method", false, false, false, 278)) && is_string($_v3 = "app_certification") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-crown\"></i><b>C</b></span>
        <span class=\"pcoded-mtext\">Certifications</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 286
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 286, $this->source); })()), "request", [], "any", false, false, false, 286), "attributes", [], "any", false, false, false, 286), "get", ["_route"], "method", false, false, false, 286)) && is_string($_v5 = "app_offreemploi_back_") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 287
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_back_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-briefcase\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Offres d'emploi</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 294
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "request", [], "any", false, false, false, 294), "attributes", [], "any", false, false, false, 294), "get", ["_route"], "method", false, false, false, 294)) && is_string($_v7 = "app_entretien") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-user\"></i><b>E</b></span>
        <span class=\"pcoded-mtext\">Entretiens</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 302
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "request", [], "any", false, false, false, 302), "attributes", [], "any", false, false, false, 302), "get", ["_route"], "method", false, false, false, 302)) && is_string($_v9 = "app_presence_admin") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 303
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_admin_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-calendar\"></i><b>P</b></span>
        <span class=\"pcoded-mtext\">Présences</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 310
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "request", [], "any", false, false, false, 310), "attributes", [], "any", false, false, false, 310), "get", ["_route"], "method", false, false, false, 310)) && is_string($_v11 = "app_conge") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_indexback")), "html", null, true);
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-calendar\"></i><b>G</b></span>
        <span class=\"pcoded-mtext\">Congés</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>



<li class=\"";
        // line 320
        yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "request", [], "any", false, false, false, 320), "attributes", [], "any", false, false, false, 320), "get", ["_route"], "method", false, false, false, 320)) && is_string($_v13 = "app_fournisseur") && str_starts_with($_v12, $_v13))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-credit-card\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Finance</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 328
        yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 328, $this->source); })()), "request", [], "any", false, false, false, 328), "attributes", [], "any", false, false, false, 328), "get", ["_route"], "method", false, false, false, 328)) && is_string($_v15 = "app_produit") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_produit_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-package\"></i><b>P</b></span>
        <span class=\"pcoded-mtext\">Produit</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 336
        yield (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 336, $this->source); })()), "request", [], "any", false, false, false, 336), "attributes", [], "any", false, false, false, 336), "get", ["_route"], "method", false, false, false, 336)) && is_string($_v17 = "app_commande") && str_starts_with($_v16, $_v17))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-clipboard\"></i><b>C</b></span>
        <span class=\"pcoded-mtext\">Commande</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 344
        yield (((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 344, $this->source); })()), "request", [], "any", false, false, false, 344), "attributes", [], "any", false, false, false, 344), "get", ["_route"], "method", false, false, false, 344)) && is_string($_v19 = "app_budget") && str_starts_with($_v18, $_v19))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 345
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-wallet\"></i><b>B</b></span>
        <span class=\"pcoded-mtext\">Budget</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 352
        yield (((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "attributes", [], "any", false, false, false, 352), "get", ["_route"], "method", false, false, false, 352)) && is_string($_v21 = "app_assurance") && str_starts_with($_v20, $_v21))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 353
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_assurance");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-shield\"></i><b>A</b></span>
        <span class=\"pcoded-mtext\">Assurances</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 360
        yield (((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 360, $this->source); })()), "request", [], "any", false, false, false, 360), "attributes", [], "any", false, false, false, 360), "get", ["_route"], "method", false, false, false, 360)) && is_string($_v23 = "app_reponse") && str_starts_with($_v22, $_v23))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-comment\"></i><b>R</b></span>
        <span class=\"pcoded-mtext\">Réponses</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"";
        // line 368
        yield (((is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 368, $this->source); })()), "request", [], "any", false, false, false, 368), "attributes", [], "any", false, false, false, 368), "get", ["_route"], "method", false, false, false, 368)) && is_string($_v25 = "app_ocr") && str_starts_with($_v24, $_v25))) ? ("active") : (""));
        yield "\">
    <a href=\"";
        // line 369
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ocr");
        yield "\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-camera\"></i><b>O</b></span>
        <span class=\"pcoded-mtext\">OCR</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>


</ul>

                    </nav>
                    <div class=\"pcoded-content\">
                        <!-- Page-header start -->
                        ";
        // line 382
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 385
        yield "                     </div>
                       
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required jQuery -->
<script type=\"text/javascript\" src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/popper.js/popper.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

<!-- Waves JS -->
<script src=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/waves/js/waves.min.js"), "html", null, true);
        yield "\"></script>

<!-- jQuery SlimScroll -->
<script type=\"text/javascript\" src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        yield "\"></script>

<!-- Custom Scrollbar -->
<script src=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        yield "\"></script>

<!-- Menu JS -->
<script src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/pcoded.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/vertical/vertical-layout.min.js"), "html", null, true);
        yield "\"></script>

<!-- Main Script -->
<script type=\"text/javascript\" src=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/script.js"), "html", null, true);
        yield "\"></script>


<!-- Multi select employee formation  -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css\" />
<script src=\"https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js\"></script>




<style>
.toast-container {
    position: fixed;
    top: 0.7rem;
    right: 1.5rem;
    z-index: 1050;
}

.toast {
    background-color: #0d6efd;
    color: white;
    padding: 1rem 1.5rem;
    margin-bottom: 0.75rem;
    border-radius: 0.75rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    min-width: 280px;
    max-width: 350px;
    animation: slideRightFade 0.5s ease forwards;
    font-size: 0.95rem;
}

.toast.toast-danger {
    background-color: #dc3545;
}

.toast.toast-success {
    background-color: #198754;
}

.toast.toast-warning {
    background-color: #ffc107;
    color: #212529;
}

@keyframes slideRightFade {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 382
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 383
        yield "                            <!-- Ce bloc sera remplacé par les pages spécifiques -->
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  701 => 383,  688 => 382,  617 => 410,  611 => 407,  607 => 406,  601 => 403,  595 => 400,  589 => 397,  583 => 394,  579 => 393,  575 => 392,  571 => 391,  563 => 385,  561 => 382,  545 => 369,  541 => 368,  531 => 361,  527 => 360,  517 => 353,  513 => 352,  503 => 345,  499 => 344,  489 => 337,  485 => 336,  475 => 329,  471 => 328,  461 => 321,  457 => 320,  445 => 311,  441 => 310,  431 => 303,  427 => 302,  417 => 295,  413 => 294,  403 => 287,  399 => 286,  389 => 279,  385 => 278,  375 => 271,  371 => 270,  361 => 263,  357 => 262,  328 => 236,  281 => 192,  266 => 180,  253 => 170,  240 => 160,  204 => 127,  200 => 126,  117 => 46,  111 => 43,  105 => 40,  101 => 39,  95 => 36,  89 => 33,  83 => 30,  70 => 20,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>ZaytounaRH</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
    <meta name=\"author\" content=\"Codedthemes\" />
    <!-- Favicon icon -->
<link rel=\"icon\" href=\"{{ asset('back/images/logo.png') }}\" type=\"image/x-icon\">


<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">



    <!-- Google font-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700\" rel=\"stylesheet\">
    <!-- Waves CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('back/pages/waves/css/waves.min.css') }}\" type=\"text/css\" media=\"all\">

<!-- Bootstrap CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/bootstrap/css/bootstrap.min.css') }}\">

<!-- Themify Icons -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/icon/themify-icons/themify-icons.css') }}\">

<!-- Font Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/font-awesome-n.min.css') }}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/font-awesome.min.css') }}\">

<!-- Scrollbar CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/jquery.mCustomScrollbar.css') }}\">

<!-- Custom Style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/style.css') }}\">
</head>

<body>


    <!-- Pre-loader start -->
    <div class=\"theme-loader\">
        <div class=\"loader-track\">
            <div class=\"preloader-wrapper\">
                <div class=\"spinner-layer spinner-blue\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
                <div class=\"spinner-layer spinner-red\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>

                <div class=\"spinner-layer spinner-yellow\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>

                <div class=\"spinner-layer spinner-green\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"gap-patch\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id=\"pcoded\" class=\"pcoded\">
        <div class=\"pcoded-overlay-box\"></div>
        <div class=\"pcoded-container navbar-wrapper\">
            <nav class=\"navbar header-navbar pcoded-header\">
                <div class=\"navbar-wrapper\">
                    <div class=\"navbar-logo\">
                        <a class=\"mobile-menu waves-effect waves-light\" id=\"mobile-collapse\" href=\"#!\">
                            <i class=\"ti-menu\"></i>
                        </a>
                        <div class=\"mobile-search waves-effect waves-light\">
                            <div class=\"header-search\">
                                <div class=\"main-search morphsearch-search\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend search-close\"><i class=\"ti-close input-group-text\"></i></span>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
                                        <span class=\"input-group-append search-btn\"><i class=\"ti-search input-group-text\"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href=\"{{ path('admin_dashboard') }}\" class=\"d-flex align-items-center gap-2 text-white fw-bold\" style=\"font-size: 20px; text-decoration: none;\">
    <img src=\"{{ asset('back/images/logo.png') ~ '?v=2'  }}\" alt=\"Logo\" style=\"height: 30px;\">
    <span>Zaytouna<span style=\"color: #28c745;\">RH</span></span>
</a>


                        <a class=\"mobile-options waves-effect waves-light\">
                            <i class=\"ti-more\"></i>
                        </a>
                    </div>
                    <div class=\"navbar-container container-fluid\">
                        <ul class=\"nav-left\">
                            <li>
                                <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                            </li>
                            <li>
                                <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
                                    <i class=\"ti-fullscreen\"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav-right\">
                            <li class=\"header-notification\">
                                <a href=\"#!\" class=\"waves-effect waves-light\">
                                    <i class=\"ti-bell\"></i>
                                    <span class=\"badge bg-c-red\"></span>
                                </a>
                                <ul class=\"show-notification\">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class=\"label label-danger\">New</label>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
                                                <img class=\"d-flex align-self-center img-radius\" src=\"{{ asset('back/images/avatar-2.jpg') }}\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Responsable RH</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
<img class=\"d-flex align-self-center img-radius\" src=\"{{ asset('assets/img/team/Mariem.jpeg') }}\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Joseph William</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <div class=\"media\">
<img class=\"d-flex align-self-center img-radius\" src=\"{{ asset('back/images/avatar-3.jpg') }}\" alt=\"Generic placeholder image\">
                                            <div class=\"media-body\">
                                                <h5 class=\"notification-user\">Sara Soudein</h5>
                                                <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class=\"notification-time\">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"user-profile header-notification\">
                                <a href=\"#!\" class=\"waves-effect waves-light\">
<img src=\"{{ asset('assets/img/team/Mariem.jpeg') }}\" class=\"img-radius\" alt=\"User-Profile-Image\">
                                    <span>Responsable RH</span>
                                    <i class=\"ti-angle-down\"></i>
                                </a>
                                <ul class=\"show-notification profile-notification\">
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"#!\">
                                            <i class=\"ti-settings\"></i> Settings
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"user-profile.html\">
                                            <i class=\"ti-user\"></i> Profile
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"email-inbox.html\">
                                            <i class=\"ti-email\"></i> My Messages
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"auth-lock-screen.html\">
                                            <i class=\"ti-lock\"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class=\"waves-effect waves-light\">
                                        <a href=\"auth-normal-sign-in.html\">
                                            <i class=\"ti-layout-sidebar-left\"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class=\"pcoded-main-container\">
                <div class=\"pcoded-wrapper\">
                    <nav class=\"pcoded-navbar\">
                        <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                        <div class=\"pcoded-inner-navbar main-menu\">
                            <div class=\"\">
                                <div class=\"main-menu-header\">
<img class=\"img-80 img-radius\" src=\"{{ asset('assets/img/team/Mariem.jpeg') }}\" alt=\"User-Profile-Image\">
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">Responsable RH<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                                </div>
                                <div class=\"main-menu-content\">
                                    <ul>
                                        <li class=\"more-details\">
                                            <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                            <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                            <a href=\"auth-normal-sign-in.html\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"p-15 p-b-0\">
                                <form class=\"form-material\">
                                    <div class=\"form-group form-primary\">
                                        <input type=\"text\" name=\"footer-email\" class=\"form-control\">
                                        <span class=\"form-bar\"></span>
                                        <label class=\"float-label\"><i class=\"fa fa-search m-r-10\"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class=\"pcoded-navigation-label\">Navigation</div>
                           <ul class=\"pcoded-item pcoded-left-item\">
    <li class=\"{{ app.request.attributes.get('_route') == 'admin_dashboard' ? 'active' : '' }}\">
    <a href=\"{{ path('admin_dashboard') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-home\"></i><b>D</b></span>
        <span class=\"pcoded-mtext\">Dashboard</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_formation' ? 'active' : '' }}\">
    <a href=\"{{ path('app_formation_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-book\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Formations</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_certification' ? 'active' : '' }}\">
    <a href=\"{{ path('app_certification_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-crown\"></i><b>C</b></span>
        <span class=\"pcoded-mtext\">Certifications</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_offreemploi_back_' ? 'active' : '' }}\">
    <a href=\"{{ path('app_offreemploi_back_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-briefcase\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Offres d'emploi</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_entretien' ? 'active' : '' }}\">
    <a href=\"{{ path('app_entretien_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-user\"></i><b>E</b></span>
        <span class=\"pcoded-mtext\">Entretiens</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_presence_admin' ? 'active' : '' }}\">
    <a href=\"{{ path('app_presence_admin_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-calendar\"></i><b>P</b></span>
        <span class=\"pcoded-mtext\">Présences</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_conge' ? 'active' : '' }}\">
    <a href=\"{{ absolute_url(path('app_conge_indexback')) }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-calendar\"></i><b>G</b></span>
        <span class=\"pcoded-mtext\">Congés</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>



<li class=\"{{ app.request.attributes.get('_route') starts with 'app_fournisseur' ? 'active' : '' }}\">
    <a href=\"{{ path('back_fournisseur_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-credit-card\"></i><b>F</b></span>
        <span class=\"pcoded-mtext\">Finance</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_produit' ? 'active' : '' }}\">
    <a href=\"{{ path('back_produit_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-package\"></i><b>P</b></span>
        <span class=\"pcoded-mtext\">Produit</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_commande' ? 'active' : '' }}\">
    <a href=\"{{ path('back_commande_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-clipboard\"></i><b>C</b></span>
        <span class=\"pcoded-mtext\">Commande</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_budget' ? 'active' : '' }}\">
    <a href=\"{{ path('app_back_budget_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-wallet\"></i><b>B</b></span>
        <span class=\"pcoded-mtext\">Budget</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_assurance' ? 'active' : '' }}\">
    <a href=\"{{ path('app_recherche_assurance') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-shield\"></i><b>A</b></span>
        <span class=\"pcoded-mtext\">Assurances</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_reponse' ? 'active' : '' }}\">
    <a href=\"{{ path('app_reponse_index') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-comment\"></i><b>R</b></span>
        <span class=\"pcoded-mtext\">Réponses</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>

<li class=\"{{ app.request.attributes.get('_route') starts with 'app_ocr' ? 'active' : '' }}\">
    <a href=\"{{ path('app_ocr') }}\" class=\"waves-effect waves-dark\">
        <span class=\"pcoded-micon\"><i class=\"ti-camera\"></i><b>O</b></span>
        <span class=\"pcoded-mtext\">OCR</span>
        <span class=\"pcoded-mcaret\"></span>
    </a>
</li>


</ul>

                    </nav>
                    <div class=\"pcoded-content\">
                        <!-- Page-header start -->
                        {% block content %}
                            <!-- Ce bloc sera remplacé par les pages spécifiques -->
                        {% endblock %}
                     </div>
                       
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required jQuery -->
<script type=\"text/javascript\" src=\"{{ asset('back/js/jquery/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('back/js/jquery-ui/jquery-ui.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('back/js/popper.js/popper.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('back/js/bootstrap/js/bootstrap.min.js') }}\"></script>

<!-- Waves JS -->
<script src=\"{{ asset('back/pages/waves/js/waves.min.js') }}\"></script>

<!-- jQuery SlimScroll -->
<script type=\"text/javascript\" src=\"{{ asset('back/js/jquery-slimscroll/jquery.slimscroll.js') }}\"></script>

<!-- Custom Scrollbar -->
<script src=\"{{ asset('back/js/jquery.mCustomScrollbar.concat.min.js') }}\"></script>

<!-- Menu JS -->
<script src=\"{{ asset('back/js/pcoded.min.js') }}\"></script>
<script src=\"{{ asset('back/js/vertical/vertical-layout.min.js') }}\"></script>

<!-- Main Script -->
<script type=\"text/javascript\" src=\"{{ asset('back/js/script.js') }}\"></script>


<!-- Multi select employee formation  -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css\" />
<script src=\"https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js\"></script>




<style>
.toast-container {
    position: fixed;
    top: 0.7rem;
    right: 1.5rem;
    z-index: 1050;
}

.toast {
    background-color: #0d6efd;
    color: white;
    padding: 1rem 1.5rem;
    margin-bottom: 0.75rem;
    border-radius: 0.75rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    min-width: 280px;
    max-width: 350px;
    animation: slideRightFade 0.5s ease forwards;
    font-size: 0.95rem;
}

.toast.toast-danger {
    background-color: #dc3545;
}

.toast.toast-success {
    background-color: #198754;
}

.toast.toast-warning {
    background-color: #ffc107;
    color: #212529;
}

@keyframes slideRightFade {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>

</body>

</html>
", "back.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\back.html.twig");
    }
}

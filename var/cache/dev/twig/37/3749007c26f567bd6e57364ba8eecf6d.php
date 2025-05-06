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

/* security/login.html.twig */
class __TwigTemplate_4f5386c66ac26e02186f9c294fdfddaf extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>ZaytounaRH - Login</title>

    <!-- Meta -->
    <meta charset=\"utf-8\"> 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

    <meta name=\"keywords\" content=\"bootstrap, admin template, dashboard\"/>
    <meta name=\"author\" content=\"Codedthemes\"/>

    <!-- Favicon icon -->
    <link rel=\"icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        yield "\" type=\"image/x-icon\">

    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700\" rel=\"stylesheet\">

    <!-- Waves CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/waves/css/waves.min.css"), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">

    <!-- Themify Icons -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/icon/themify-icons/themify-icons.css"), "html", null, true);
        yield "\">

    <!-- Font Awesome -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/font-awesome-n.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/font-awesome.min.css"), "html", null, true);
        yield "\">

    <!-- Custom Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        yield "\">
</head>

<body themebg-pattern=\"theme1\">

<section class=\"login-block\">
    <form method=\"post\" action=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"form-material\">
        ";
        // line 42
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })())) {
            // line 43
            yield "            <div class=\"alert alert-danger\">Identifiants invalides</div>
        ";
        }
        // line 45
        yield "
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <div class=\"text-center mb-4\">
            <img class=\"img-fluid\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        yield "\" alt=\"ZaytounaRH Logo\" style=\"width: 280px; height: auto;\"/>
        </div>

        <div class=\"auth-box card\">
            <div class=\"card-body\">
                <div class=\"row mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <h3>Sign In</h3>
                    </div>
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputEmail\" class=\"form-label\">Your Email Address</label>
                    <input type=\"text\" id=\"inputEmail\" name=\"_username\" class=\"form-control\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\" required autofocus>
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputPassword\" class=\"form-label\">Password</label>
                    <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" required>
                </div>

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect waves-light\">Sign In</button>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-6\">
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-muted\"><b>Forgot your password?</b></a>
                    </div>
                    <div class=\"col-6 text-end\">
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-muted\"><b>Don't have an account?</b></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- JS Files -->
<script type=\"text/javascript\" src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/waves/js/waves.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/pcoded.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/script.js"), "html", null, true);
        yield "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  201 => 93,  197 => 92,  193 => 91,  189 => 90,  185 => 89,  181 => 88,  169 => 79,  163 => 76,  146 => 62,  130 => 49,  124 => 46,  121 => 45,  117 => 43,  115 => 42,  111 => 41,  102 => 35,  96 => 32,  92 => 31,  86 => 28,  80 => 25,  74 => 22,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>ZaytounaRH - Login</title>

    <!-- Meta -->
    <meta charset=\"utf-8\"> 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

    <meta name=\"keywords\" content=\"bootstrap, admin template, dashboard\"/>
    <meta name=\"author\" content=\"Codedthemes\"/>

    <!-- Favicon icon -->
    <link rel=\"icon\" href=\"{{ asset('back/images/logo.png') }}\" type=\"image/x-icon\">

    <!-- Google fonts -->
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

    <!-- Custom Style -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/css/style.css') }}\">
</head>

<body themebg-pattern=\"theme1\">

<section class=\"login-block\">
    <form method=\"post\" action=\"{{ path('app_login') }}\" class=\"form-material\">
        {% if error %}
            <div class=\"alert alert-danger\">Identifiants invalides</div>
        {% endif %}

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <div class=\"text-center mb-4\">
            <img class=\"img-fluid\" src=\"{{ asset('back/images/logo.png') }}\" alt=\"ZaytounaRH Logo\" style=\"width: 280px; height: auto;\"/>
        </div>

        <div class=\"auth-box card\">
            <div class=\"card-body\">
                <div class=\"row mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <h3>Sign In</h3>
                    </div>
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputEmail\" class=\"form-label\">Your Email Address</label>
                    <input type=\"text\" id=\"inputEmail\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" required autofocus>
                </div>

                <div class=\"form-group mb-3\">
                    <label for=\"inputPassword\" class=\"form-label\">Password</label>
                    <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" required>
                </div>

                <div class=\"form-group mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect waves-light\">Sign In</button>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-6\">
                        <a href=\"{{ path('app_login') }}\" class=\"text-muted\"><b>Forgot your password?</b></a>
                    </div>
                    <div class=\"col-6 text-end\">
                        <a href=\"{{ path('app_register') }}\" class=\"text-muted\"><b>Don't have an account?</b></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- JS Files -->
<script type=\"text/javascript\" src=\"{{ asset('back/js/jquery/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('back/js/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('back/pages/waves/js/waves.min.js') }}\"></script>
<script src=\"{{ asset('back/js/pcoded.min.js') }}\"></script>
<script src=\"{{ asset('back/js/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
<script src=\"{{ asset('back/js/script.js') }}\"></script>

</body>

</html>", "security/login.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\security\\login.html.twig");
    }
}

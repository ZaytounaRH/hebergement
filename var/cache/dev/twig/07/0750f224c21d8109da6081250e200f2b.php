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

/* presence/index.html.twig */
class __TwigTemplate_77058456119fee88b7765c8606d7ff4b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presence/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Présences";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
    background-image: url('/images/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    filter: blur(5px) brightness(0.7);
}


        .fade-in {
            animation: fadeZoomIn 0.8s ease-out both;
        }

        @keyframes fadeZoomIn {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }

        .presence-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .presence-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .presence-header {
            background: linear-gradient(135deg, #1d8cf8, #3358f4);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body p {
            font-size: 0.95rem;
            color: #555;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        yield "<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-5\">📋 Liste des Présences</h1>

    ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "employee", [], "any", false, false, false, 74))) {
            // line 75
            yield "        <div class=\"text-center mb-5\">
            <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_checkin", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "employee", [], "any", false, false, false, 76), "employeeId", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-outline-success btn-custom me-3\">
                ✅ Pointer l'arrivée
            </a>
            <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "employee", [], "any", false, false, false, 79), "employeeId", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger btn-custom\">
                ❌ Pointer le départ
            </a>
        </div>
    ";
        }
        // line 84
        yield "
    <div class=\"row g-4\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presences"]) || array_key_exists("presences", $context) ? $context["presences"] : (function () { throw new RuntimeError('Variable "presences" does not exist.', 86, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["presence"]) {
            // line 87
            yield "            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87) * 100), "html", null, true);
            yield "\">
                <div class=\"card presence-card h-100\">
                    
                    <div class=\"card-body\">
                        <p><strong>📅 Date :</strong> ";
            // line 91
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "date", [], "any", false, false, false, 91)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "date", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</p>
                        <p><strong>🕗 Heure d'arrivée :</strong> ";
            // line 92
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureArrive", [], "any", false, false, false, 92)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureArrive", [], "any", false, false, false, 92), "H:i"), "html", null, true)) : ("-"));
            yield "</p>
                        <p><strong>🕔 Heure de départ :</strong> ";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureDepart", [], "any", false, false, false, 93)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureDepart", [], "any", false, false, false, 93), "H:i"), "html", null, true)) : ("-"));
            yield "</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_show", ["id_presence" => CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "idPresence", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm rounded-pill\">
                            🔍 Détails
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune présence trouvée pour l'instant.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presence'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "    </div>

    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_new");
        yield "\" class=\"btn btn-primary btn-lg btn-custom me-3\">
            ⏱️ Pointer l'arrivée
        </a>
        
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
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
        return "presence/index.html.twig";
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
        return array (  324 => 119,  311 => 118,  293 => 110,  288 => 107,  279 => 103,  277 => 102,  258 => 96,  252 => 93,  248 => 92,  244 => 91,  236 => 87,  218 => 86,  214 => 84,  206 => 79,  200 => 76,  197 => 75,  195 => 74,  190 => 71,  177 => 70,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Présences{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
    background-image: url('/images/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    filter: blur(5px) brightness(0.7);
}


        .fade-in {
            animation: fadeZoomIn 0.8s ease-out both;
        }

        @keyframes fadeZoomIn {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }

        .presence-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .presence-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .presence-header {
            background: linear-gradient(135deg, #1d8cf8, #3358f4);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body p {
            font-size: 0.95rem;
            color: #555;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-5\">📋 Liste des Présences</h1>

    {% if app.user and app.user.employee %}
        <div class=\"text-center mb-5\">
            <a href=\"{{ path('app_presence_checkin', { id: app.user.employee.employeeId }) }}\" class=\"btn btn-outline-success btn-custom me-3\">
                ✅ Pointer l'arrivée
            </a>
            <a href=\"{{ path('app_presence_checkout', { id: app.user.employee.employeeId }) }}\" class=\"btn btn-outline-danger btn-custom\">
                ❌ Pointer le départ
            </a>
        </div>
    {% endif %}

    <div class=\"row g-4\">
        {% for presence in presences %}
            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                <div class=\"card presence-card h-100\">
                    
                    <div class=\"card-body\">
                        <p><strong>📅 Date :</strong> {{ presence.date ? presence.date|date('d/m/Y') : '-' }}</p>
                        <p><strong>🕗 Heure d'arrivée :</strong> {{ presence.heureArrive ? presence.heureArrive|date('H:i') : '-' }}</p>
                        <p><strong>🕔 Heure de départ :</strong> {{ presence.heureDepart ? presence.heureDepart|date('H:i') : '-' }}</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"{{ path('app_presence_show', {'id_presence': presence.idPresence}) }}\" class=\"btn btn-outline-primary btn-sm rounded-pill\">
                            🔍 Détails
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune présence trouvée pour l'instant.
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"{{ path('app_presence_new') }}\" class=\"btn btn-primary btn-lg btn-custom me-3\">
            ⏱️ Pointer l'arrivée
        </a>
        
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
{% endblock %}
", "presence/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\presence\\index.html.twig");
    }
}

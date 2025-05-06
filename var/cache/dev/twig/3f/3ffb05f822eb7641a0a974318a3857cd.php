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

/* offreemploi/show.html.twig */
class __TwigTemplate_574a59b3e1d1d13dc71718c8ea32a867 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offreemploi/show.html.twig", 1);
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

        yield "Détails de l'offre d'emploi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary mb-5 font-weight-bold display-4 animate__animated animate__fadeIn\">Détails de l'offre d'emploi</h1>

        <div class=\"card shadow-lg border-0 rounded-4 animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 text-center\">
                        <h5 class=\"card-title text-dark font-weight-bold display-5\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 13, $this->source); })()), "titreOffre", [], "any", false, false, false, 13), "html", null, true);
        yield "</h5>
                        <p class=\"text-muted\">";
        // line 14
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 14, $this->source); })()), "datePublication", [], "any", false, false, false, 14)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 14, $this->source); })()), "datePublication", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
        yield "</p>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Description:</p>
                        <p class=\"card-text\">";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true)) : ("Non spécifiée"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Salaire:</p>
                        <p class=\"h4 text-success\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 25, $this->source); })()), "salaire", [], "any", false, false, false, 25), "html", null, true);
        yield " TND</p>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Date de publication:</p>
                        <p>";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 32, $this->source); })()), "datePublication", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 32, $this->source); })()), "datePublication", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true)) : ("Non spécifiée"));
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Statut:</p>
                        ";
        // line 36
        $context["statut"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 36, $this->source); })()), "statut", [], "any", false, false, false, 36));
        // line 37
        yield "                        ";
        if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 37, $this->source); })()) == "ouverte")) {
            // line 38
            yield "                            <span class=\"badge bg-success text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">OUVERTE</span>
                        ";
        } elseif ((        // line 39
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 39, $this->source); })()) == "fermee")) {
            // line 40
            yield "                            <span class=\"badge bg-danger text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">FERMEE</span>
                        ";
        } elseif ((        // line 41
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 41, $this->source); })()) == "en attente")) {
            // line 42
            yield "                            <span class=\"badge bg-warning text-dark px-4 py-2 rounded-pill animate__animated animate__pulse\">EN ATTENTE</span>
                        ";
        } elseif ((        // line 43
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 43, $this->source); })()) == "pourvue")) {
            // line 44
            yield "                            <span class=\"badge bg-secondary text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">POURVUE</span>
                        ";
        } elseif ((        // line 45
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 45, $this->source); })()) == "annulee")) {
            // line 46
            yield "                            <span class=\"badge bg-dark text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">ANNULEE</span>
                        ";
        } elseif ((        // line 47
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 47, $this->source); })()) == "encours")) {
            // line 48
            yield "                            <span class=\"badge bg-info text-dark px-4 py-2 rounded-pill animate__animated animate__pulse\">EN COURS</span>
                        ";
        } else {
            // line 50
            yield "                            <span class=\"badge bg-dark text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">Statut non spécifié</span>
                        ";
        }
        // line 52
        yield "                    </div>
                </div>

                <div class=\"row mt-5\">
                    <div class=\"col-md-12 text-center\">
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\" class=\"btn btn-outline-primary btn-lg mb-3 mr-3 animate__animated animate__fadeIn animate__delay-1s\" style=\"box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;\">
                            <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                        </a>
                        <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidat_entretien_new", ["idOffre" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["offreemploi"]) || array_key_exists("offreemploi", $context) ? $context["offreemploi"] : (function () { throw new RuntimeError('Variable "offreemploi" does not exist.', 60, $this->source); })()), "idOffre", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-success btn-lg mb-3 animate__animated animate__fadeIn animate__delay-1s\" style=\"box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;\">
                            <i class=\"bi bi-calendar-plus\"></i> Ajouter un entretien
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-md-12 text-center\">
                <p class=\"text-muted\">L'offre d'emploi est publiée par notre équipe RH. Pour plus d'informations, n'hésitez pas à nous contacter.</p>
            </div>
        </div>
    </div>

    <style>
        .btn:hover {
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(2px);
        }

        .badge {
            font-size: 1.1rem;
            padding: 0.75rem 1.5rem;
        }

        .card-body {
            background-color: #f9f9f9;
            color: #333;
        }

        .card-title {
            font-size: 2rem;
            font-weight: 600;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        h1 {
            color: #0056b3;
            font-weight: 700;
        }
    </style>
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
        return "offreemploi/show.html.twig";
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
        return array (  198 => 60,  192 => 57,  185 => 52,  181 => 50,  177 => 48,  175 => 47,  172 => 46,  170 => 45,  167 => 44,  165 => 43,  162 => 42,  160 => 41,  157 => 40,  155 => 39,  152 => 38,  149 => 37,  147 => 36,  140 => 32,  130 => 25,  123 => 21,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'offre d'emploi{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-primary mb-5 font-weight-bold display-4 animate__animated animate__fadeIn\">Détails de l'offre d'emploi</h1>

        <div class=\"card shadow-lg border-0 rounded-4 animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 text-center\">
                        <h5 class=\"card-title text-dark font-weight-bold display-5\">{{ offreemploi.titreOffre }}</h5>
                        <p class=\"text-muted\">{{ offreemploi.datePublication ? offreemploi.datePublication|date('d/m/Y') : 'Non spécifiée' }}</p>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Description:</p>
                        <p class=\"card-text\">{{ offreemploi.description ?: 'Non spécifiée' }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Salaire:</p>
                        <p class=\"h4 text-success\">{{ offreemploi.salaire }} TND</p>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Date de publication:</p>
                        <p>{{ offreemploi.datePublication ? offreemploi.datePublication|date('d/m/Y') : 'Non spécifiée' }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p class=\"h5 font-weight-bold\">Statut:</p>
                        {% set statut = offreemploi.statut|lower %}
                        {% if statut == 'ouverte' %}
                            <span class=\"badge bg-success text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">OUVERTE</span>
                        {% elseif statut == 'fermee' %}
                            <span class=\"badge bg-danger text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">FERMEE</span>
                        {% elseif statut == 'en attente' %}
                            <span class=\"badge bg-warning text-dark px-4 py-2 rounded-pill animate__animated animate__pulse\">EN ATTENTE</span>
                        {% elseif statut == 'pourvue' %}
                            <span class=\"badge bg-secondary text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">POURVUE</span>
                        {% elseif statut == 'annulee' %}
                            <span class=\"badge bg-dark text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">ANNULEE</span>
                        {% elseif statut == 'encours' %}
                            <span class=\"badge bg-info text-dark px-4 py-2 rounded-pill animate__animated animate__pulse\">EN COURS</span>
                        {% else %}
                            <span class=\"badge bg-dark text-white px-4 py-2 rounded-pill animate__animated animate__pulse\">Statut non spécifié</span>
                        {% endif %}
                    </div>
                </div>

                <div class=\"row mt-5\">
                    <div class=\"col-md-12 text-center\">
                        <a href=\"{{ path('app_offreemploi_index') }}\" class=\"btn btn-outline-primary btn-lg mb-3 mr-3 animate__animated animate__fadeIn animate__delay-1s\" style=\"box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;\">
                            <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                        </a>
                        <a href=\"{{ path('app_candidat_entretien_new', {'idOffre': offreemploi.idOffre}) }}\" class=\"btn btn-success btn-lg mb-3 animate__animated animate__fadeIn animate__delay-1s\" style=\"box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;\">
                            <i class=\"bi bi-calendar-plus\"></i> Ajouter un entretien
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-md-12 text-center\">
                <p class=\"text-muted\">L'offre d'emploi est publiée par notre équipe RH. Pour plus d'informations, n'hésitez pas à nous contacter.</p>
            </div>
        </div>
    </div>

    <style>
        .btn:hover {
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(2px);
        }

        .badge {
            font-size: 1.1rem;
            padding: 0.75rem 1.5rem;
        }

        .card-body {
            background-color: #f9f9f9;
            color: #333;
        }

        .card-title {
            font-size: 2rem;
            font-weight: 600;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        h1 {
            color: #0056b3;
            font-weight: 700;
        }
    </style>
{% endblock %}
", "offreemploi/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\show.html.twig");
    }
}

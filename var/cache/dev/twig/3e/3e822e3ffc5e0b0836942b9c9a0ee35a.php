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

/* entretien/show.html.twig */
class __TwigTemplate_c1bcd8309bc2895a84ff1801b03aa231 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "entretien/show.html.twig", 1);
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

        yield "Détails de l'entretien";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container mt-5\">
    <!-- En-tête avec icône -->
    <div class=\"bg-gradient p-4 rounded text-center shadow-lg mb-4\" style=\"background: linear-gradient(45deg, #6a11cb, #2575fc);\">
        <h1 class=\"display-5 text-white\">
            <i class=\"bi bi-person-lines-fill text-light me-2\"></i>Détails de l'entretien
        </h1>
        <p class=\"text-light\">Consultez les informations relatives à cet entretien.</p>
    </div>

    <!-- Carte des détails avec bord arrondi et ombre -->
    <div class=\"card shadow-lg border-0 rounded-4\">
        <div class=\"card-body\">
            <table class=\"table table-bordered table-hover table-striped rounded bg-white\">
                <tbody>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-hash me-2 text-dark\"></i>ID Entretien
                        </th>
                        <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 24, $this->source); })()), "idEntretien", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-calendar-event me-2 text-primary\"></i>Date de l'entretien
                        </th>
                        <td>";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 30, $this->source); })()), "dateEntretien", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 30, $this->source); })()), "dateEntretien", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : ("Non spécifiée"));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-clock me-2 text-success\"></i>Heure de l'entretien
                        </th>
                        <td>";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 36, $this->source); })()), "heureEntretien", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 36, $this->source); })()), "heureEntretien", [], "any", false, false, false, 36), "H:i"), "html", null, true)) : ("Non spécifiée"));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-person-badge-fill me-2 text-warning\"></i>Type d'entretien
                        </th>
                        <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 42, $this->source); })()), "typeEntretien", [], "any", false, false, false, 42), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-check2-circle me-2 text-info\"></i>Statut
                        </th>
                        <td>
                            ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49) == "Prévu")) {
            // line 50
            yield "                                <span class=\"badge bg-warning text-dark\">Prévu</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) == "Réalisé")) {
            // line 52
            yield "                                <span class=\"badge bg-success\">Réalisé</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 53, $this->source); })()), "statut", [], "any", false, false, false, 53) == "Annulé")) {
            // line 54
            yield "                                <span class=\"badge bg-danger\">Annulé</span>
                            ";
        } else {
            // line 56
            yield "                                <span class=\"badge bg-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 56, $this->source); })()), "statut", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                            ";
        }
        // line 58
        yield "                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-chat-left-text me-2 text-secondary\"></i>Commentaire
                        </th>
                        <td>";
        // line 64
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 64, $this->source); })()), "commentaire", [], "any", false, false, false, 64)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 64, $this->source); })()), "commentaire", [], "any", false, false, false, 64), "html", null, true)) : ("Aucun commentaire"));
        yield "</td>
                    </tr>
                    <!-- Suppression de la ligne du CV -->
                </tbody>
            </table>

            <!-- Boutons d'action avec animations au survol -->
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_index");
        yield "\" class=\"btn btn-outline-secondary rounded-pill px-4 py-2 transition-all hover-effect\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_edit", ["idEntretien" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entretien"]) || array_key_exists("entretien", $context) ? $context["entretien"] : (function () { throw new RuntimeError('Variable "entretien" does not exist.', 76, $this->source); })()), "idEntretien", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-outline-warning rounded-pill px-4 py-2 transition-all hover-effect\">
                    <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Styles personnalisés -->
<style>
    /* Fond dégradé sur l'en-tête */
    .bg-gradient {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
    }

    /* Effet sur les boutons au survol */
    .btn-outline-secondary:hover, .btn-outline-warning:hover {
        background-color: #f8f9fa;
        color: #343a40;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    /* Transition de tous les éléments */
    .transition-all {
        transition: all 0.3s ease;
    }

    /* Effet au survol des boutons */
    .hover-effect:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    /* Apparence des badges */
    .badge {
        font-size: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 12px;
        font-weight: bold;
    }

    /* Design de la carte */
    .card {
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.2);
    }

    /* Table améliorée */
    .table {
        font-size: 1rem;
        border-radius: 10px;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .table td {
        padding: 1rem;
    }

    /* Réduire l'ombre au survol des éléments */
    .card-body {
        padding: 30px;
    }

    /* Ajuster l'apparence du titre */
    .display-5 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    /* Personnalisation de l'icône */
    .bi {
        font-size: 1.5rem;
    }

    /* Animation de la transition */
    .hover-effect {
        transition: all 0.3s ease;
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
        return "entretien/show.html.twig";
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
        return array (  205 => 76,  198 => 72,  187 => 64,  179 => 58,  173 => 56,  169 => 54,  167 => 53,  164 => 52,  162 => 51,  159 => 50,  157 => 49,  147 => 42,  138 => 36,  129 => 30,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détails de l'entretien{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <!-- En-tête avec icône -->
    <div class=\"bg-gradient p-4 rounded text-center shadow-lg mb-4\" style=\"background: linear-gradient(45deg, #6a11cb, #2575fc);\">
        <h1 class=\"display-5 text-white\">
            <i class=\"bi bi-person-lines-fill text-light me-2\"></i>Détails de l'entretien
        </h1>
        <p class=\"text-light\">Consultez les informations relatives à cet entretien.</p>
    </div>

    <!-- Carte des détails avec bord arrondi et ombre -->
    <div class=\"card shadow-lg border-0 rounded-4\">
        <div class=\"card-body\">
            <table class=\"table table-bordered table-hover table-striped rounded bg-white\">
                <tbody>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-hash me-2 text-dark\"></i>ID Entretien
                        </th>
                        <td>{{ entretien.idEntretien }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-calendar-event me-2 text-primary\"></i>Date de l'entretien
                        </th>
                        <td>{{ entretien.dateEntretien ? entretien.dateEntretien|date('Y-m-d') : 'Non spécifiée' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-clock me-2 text-success\"></i>Heure de l'entretien
                        </th>
                        <td>{{ entretien.heureEntretien ? entretien.heureEntretien|date('H:i') : 'Non spécifiée' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-person-badge-fill me-2 text-warning\"></i>Type d'entretien
                        </th>
                        <td>{{ entretien.typeEntretien }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-check2-circle me-2 text-info\"></i>Statut
                        </th>
                        <td>
                            {% if entretien.statut == 'Prévu' %}
                                <span class=\"badge bg-warning text-dark\">Prévu</span>
                            {% elseif entretien.statut == 'Réalisé' %}
                                <span class=\"badge bg-success\">Réalisé</span>
                            {% elseif entretien.statut == 'Annulé' %}
                                <span class=\"badge bg-danger\">Annulé</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">{{ entretien.statut }}</span>
                            {% endif %}
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\" class=\"fw-bold\">
                            <i class=\"bi bi-chat-left-text me-2 text-secondary\"></i>Commentaire
                        </th>
                        <td>{{ entretien.commentaire ?: 'Aucun commentaire' }}</td>
                    </tr>
                    <!-- Suppression de la ligne du CV -->
                </tbody>
            </table>

            <!-- Boutons d'action avec animations au survol -->
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_entretien_index') }}\" class=\"btn btn-outline-secondary rounded-pill px-4 py-2 transition-all hover-effect\">
                    <i class=\"bi bi-arrow-left-circle me-1\"></i> Retour
                </a>

                <a href=\"{{ path('app_entretien_edit', {'idEntretien': entretien.idEntretien}) }}\" class=\"btn btn-outline-warning rounded-pill px-4 py-2 transition-all hover-effect\">
                    <i class=\"bi bi-pencil-square me-1\"></i> Modifier
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Styles personnalisés -->
<style>
    /* Fond dégradé sur l'en-tête */
    .bg-gradient {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
    }

    /* Effet sur les boutons au survol */
    .btn-outline-secondary:hover, .btn-outline-warning:hover {
        background-color: #f8f9fa;
        color: #343a40;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    /* Transition de tous les éléments */
    .transition-all {
        transition: all 0.3s ease;
    }

    /* Effet au survol des boutons */
    .hover-effect:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    /* Apparence des badges */
    .badge {
        font-size: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 12px;
        font-weight: bold;
    }

    /* Design de la carte */
    .card {
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.2);
    }

    /* Table améliorée */
    .table {
        font-size: 1rem;
        border-radius: 10px;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }

    .table td {
        padding: 1rem;
    }

    /* Réduire l'ombre au survol des éléments */
    .card-body {
        padding: 30px;
    }

    /* Ajuster l'apparence du titre */
    .display-5 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    /* Personnalisation de l'icône */
    .bi {
        font-size: 1.5rem;
    }

    /* Animation de la transition */
    .hover-effect {
        transition: all 0.3s ease;
    }
</style>

{% endblock %}
", "entretien/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\show.html.twig");
    }
}

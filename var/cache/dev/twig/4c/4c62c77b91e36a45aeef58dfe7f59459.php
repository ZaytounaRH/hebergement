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

/* offreemploi/back.html.twig */
class __TwigTemplate_65b9763d407b4d53aecd8125f09244c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/back.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offreemploi/back.html.twig", 1);
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

        yield "Offres d'emploi";
        
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
        yield "  <style>
    /* Titres */
    .page-title {
      background: linear-gradient(90deg, #0069d9, #004085);
      color: white;
      font-family: 'Arial', sans-serif;
    }
    .page-title h2 {
      margin-bottom: 10px;
    }

    /* Breadcrumb */
    .breadcrumb-item a, .breadcrumb-item.active {
      color: white;
      text-decoration: none;
    }
    .breadcrumb-item a:hover {
      text-decoration: underline;
    }

    /* Boutons */
    .btn {
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 600;
      text-transform: uppercase;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-size: 0.9rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-sm {
      padding: 6px 12px;
      font-size: 0.8rem;
    }
    .btn-outline-light { border: 1px solid #ffffff; color: #ffffff; background: transparent; }
    .btn-outline-light:hover { background: #ffffff; color: #004085; }
    .btn-outline-warning { border: 1px solid #ffc107; color: #ffc107; background: transparent; }
    .btn-outline-warning:hover { background: #ffc107; color: white; }
    .btn-primary { background: #0069d9; border-color: #0069d9; }
    .btn-primary:hover { background: #004085; border-color: #004085; }
    .btn-success { background: #28a745; border-color: #28a745; }
    .btn-success:hover { background: #218838; border-color: #1e7e34; }

    /* Badge */
    .badge {
      font-size: 0.85rem;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 50px;
    }

    /* Table */
    .table {
      border-collapse: collapse;
      width: 100%;
    }
    .table-bordered th, .table-bordered td {
      border: 1px solid #ddd;
      padding: 12px 15px;
    }
    .table-striped tbody tr:nth-child(odd) { background-color: #f9f9f9; }
    .table-hover tbody tr:hover { background-color: #f1f1f1; }
    .table-light { background-color: #f8f9fa; }

    /* Transition */
    .transition-effect {
      transition: background-color 0.3s, color 0.3s;
    }
    .transition-effect:hover {
      background-color: #004085;
      color: white;
    }

    /* Section */
    .section {
      padding: 50px 0;
    }
    .section-header {
      margin-bottom: 30px;
    }
  </style>

  <!-- Titre et fil d'ariane -->
  <section class=\"page-title py-5\">
    <div class=\"container text-center\">
      <h2 class=\"fw-bold\">Offres d'emploi</h2>
      <nav>
        <ol class=\"breadcrumb justify-content-center mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Offres d'emploi</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Section principale -->
  <section class=\"section\">
    <div class=\"container\" data-aos=\"fade-up\">
      
      <!-- En-tête et boutons -->
      <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 section-header\">
        <h3 class=\"fw-bold mb-3 mb-md-0\">Liste des offres disponibles</h3>
        <div class=\"d-flex flex-wrap gap-2\">
          <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chatbot");
        yield "\" class=\"btn btn-outline-warning transition-effect\">
            <i class=\"bi bi-chat-dots\"></i> Questions
          </a>
          <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendarOffre");
        yield "\" class=\"btn btn-primary transition-effect\">
            <i class=\"bi bi-calendar-range\"></i> Calendrier
          </a>
          <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_new");
        yield "\" class=\"btn btn-success transition-effect\">
            <i class=\"bi bi-plus-circle\"></i> Nouvelle offre
          </a>
          <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_statistique");
        yield "\" class=\"btn btn-outline-light transition-effect\">
            <i class=\"bi bi-bar-chart\"></i> Statistiques
          </a>
        </div>
      </div>

      <!-- Tri et filtrage -->
      <div class=\"card mb-4 p-3 shadow-sm\">
        <!-- Tu peux ajouter un formulaire de filtrage ici si nécessaire -->
      </div>

      <!-- Tableau des offres -->
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover align-middle table-striped\">
          <thead class=\"table-light\">
            <tr>
              <th>Titre</th>
              <th>Description</th>
              <th>Date de publication</th>
              <th>Salaire</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offreemplois"]) || array_key_exists("offreemplois", $context) ? $context["offreemplois"] : (function () { throw new RuntimeError('Variable "offreemplois" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offreemploi"]) {
            // line 148
            yield "              <tr>
                <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "titreOffre", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                <td>";
            // line 150
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 150), 0, 60) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 150)) > 60)) ? ("...") : (""))), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 151
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "datePublication", [], "any", false, false, false, 151)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "datePublication", [], "any", false, false, false, 151), "Y-m-d"), "html", null, true)) : ("—"));
            yield "</td>
                <td>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "salaire", [], "any", false, false, false, 152), "html", null, true);
            yield " TND</td>
                <td>
                  ";
            // line 154
            $context["statut"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "statut", [], "any", false, false, false, 154));
            // line 155
            yield "                  ";
            if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 155, $this->source); })()) == "ouverte")) {
                // line 156
                yield "                    <span class=\"badge bg-success text-white\">OUVERTE</span>
                  ";
            } elseif ((            // line 157
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 157, $this->source); })()) == "fermee")) {
                // line 158
                yield "                    <span class=\"badge bg-danger text-white\">FERMÉE</span>
                  ";
            } elseif ((            // line 159
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 159, $this->source); })()) == "pourvue")) {
                // line 160
                yield "                    <span class=\"badge bg-secondary text-white\">POURVUE</span>
                  ";
            } elseif ((            // line 161
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 161, $this->source); })()) == "encours")) {
                // line 162
                yield "                    <span class=\"badge bg-info text-dark\">EN COURS</span>
                  ";
            } else {
                // line 164
                yield "                    <span class=\"badge bg-dark text-white\">ANNULEE</span>
                  ";
            }
            // line 166
            yield "                </td>
                <td class=\"text-center\">
                  <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_show_back", ["idOffre" => CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "idOffre", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info rounded-pill\">
                    <i class=\"bi bi-eye\"></i> Voir
                  </a>
                </td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 173
        if (!$context['_iterated']) {
            // line 174
            yield "              <tr>
                <td colspan=\"6\" class=\"text-center\">Aucune offre d'emploi disponible.</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offreemploi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "          </tbody>
        </table>
      </div>
      
    </div>
  </section>
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
        return "offreemploi/back.html.twig";
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
        return array (  336 => 178,  327 => 174,  325 => 173,  315 => 168,  311 => 166,  307 => 164,  303 => 162,  301 => 161,  298 => 160,  296 => 159,  293 => 158,  291 => 157,  288 => 156,  285 => 155,  283 => 154,  278 => 152,  274 => 151,  270 => 150,  266 => 149,  263 => 148,  258 => 147,  230 => 122,  224 => 119,  218 => 116,  212 => 113,  194 => 98,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Offres d'emploi{% endblock %}

{% block content %}
  <style>
    /* Titres */
    .page-title {
      background: linear-gradient(90deg, #0069d9, #004085);
      color: white;
      font-family: 'Arial', sans-serif;
    }
    .page-title h2 {
      margin-bottom: 10px;
    }

    /* Breadcrumb */
    .breadcrumb-item a, .breadcrumb-item.active {
      color: white;
      text-decoration: none;
    }
    .breadcrumb-item a:hover {
      text-decoration: underline;
    }

    /* Boutons */
    .btn {
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 600;
      text-transform: uppercase;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-size: 0.9rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-sm {
      padding: 6px 12px;
      font-size: 0.8rem;
    }
    .btn-outline-light { border: 1px solid #ffffff; color: #ffffff; background: transparent; }
    .btn-outline-light:hover { background: #ffffff; color: #004085; }
    .btn-outline-warning { border: 1px solid #ffc107; color: #ffc107; background: transparent; }
    .btn-outline-warning:hover { background: #ffc107; color: white; }
    .btn-primary { background: #0069d9; border-color: #0069d9; }
    .btn-primary:hover { background: #004085; border-color: #004085; }
    .btn-success { background: #28a745; border-color: #28a745; }
    .btn-success:hover { background: #218838; border-color: #1e7e34; }

    /* Badge */
    .badge {
      font-size: 0.85rem;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 50px;
    }

    /* Table */
    .table {
      border-collapse: collapse;
      width: 100%;
    }
    .table-bordered th, .table-bordered td {
      border: 1px solid #ddd;
      padding: 12px 15px;
    }
    .table-striped tbody tr:nth-child(odd) { background-color: #f9f9f9; }
    .table-hover tbody tr:hover { background-color: #f1f1f1; }
    .table-light { background-color: #f8f9fa; }

    /* Transition */
    .transition-effect {
      transition: background-color 0.3s, color 0.3s;
    }
    .transition-effect:hover {
      background-color: #004085;
      color: white;
    }

    /* Section */
    .section {
      padding: 50px 0;
    }
    .section-header {
      margin-bottom: 30px;
    }
  </style>

  <!-- Titre et fil d'ariane -->
  <section class=\"page-title py-5\">
    <div class=\"container text-center\">
      <h2 class=\"fw-bold\">Offres d'emploi</h2>
      <nav>
        <ol class=\"breadcrumb justify-content-center mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\">Accueil</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Offres d'emploi</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Section principale -->
  <section class=\"section\">
    <div class=\"container\" data-aos=\"fade-up\">
      
      <!-- En-tête et boutons -->
      <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 section-header\">
        <h3 class=\"fw-bold mb-3 mb-md-0\">Liste des offres disponibles</h3>
        <div class=\"d-flex flex-wrap gap-2\">
          <a href=\"{{ path('app_chatbot') }}\" class=\"btn btn-outline-warning transition-effect\">
            <i class=\"bi bi-chat-dots\"></i> Questions
          </a>
          <a href=\"{{ path('app_calendarOffre') }}\" class=\"btn btn-primary transition-effect\">
            <i class=\"bi bi-calendar-range\"></i> Calendrier
          </a>
          <a href=\"{{ path('app_offreemploi_new') }}\" class=\"btn btn-success transition-effect\">
            <i class=\"bi bi-plus-circle\"></i> Nouvelle offre
          </a>
          <a href=\"{{ path('app_offreemploi_statistique') }}\" class=\"btn btn-outline-light transition-effect\">
            <i class=\"bi bi-bar-chart\"></i> Statistiques
          </a>
        </div>
      </div>

      <!-- Tri et filtrage -->
      <div class=\"card mb-4 p-3 shadow-sm\">
        <!-- Tu peux ajouter un formulaire de filtrage ici si nécessaire -->
      </div>

      <!-- Tableau des offres -->
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover align-middle table-striped\">
          <thead class=\"table-light\">
            <tr>
              <th>Titre</th>
              <th>Description</th>
              <th>Date de publication</th>
              <th>Salaire</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            {% for offreemploi in offreemplois %}
              <tr>
                <td>{{ offreemploi.titreOffre }}</td>
                <td>{{ offreemploi.description ? offreemploi.description|slice(0, 60) ~ (offreemploi.description|length > 60 ? '...' : '') : '' }}</td>
                <td>{{ offreemploi.datePublication ? offreemploi.datePublication|date('Y-m-d') : '—' }}</td>
                <td>{{ offreemploi.salaire }} TND</td>
                <td>
                  {% set statut = offreemploi.statut|lower %}
                  {% if statut == 'ouverte' %}
                    <span class=\"badge bg-success text-white\">OUVERTE</span>
                  {% elseif statut == 'fermee' %}
                    <span class=\"badge bg-danger text-white\">FERMÉE</span>
                  {% elseif statut == 'pourvue' %}
                    <span class=\"badge bg-secondary text-white\">POURVUE</span>
                  {% elseif statut == 'encours' %}
                    <span class=\"badge bg-info text-dark\">EN COURS</span>
                  {% else %}
                    <span class=\"badge bg-dark text-white\">ANNULEE</span>
                  {% endif %}
                </td>
                <td class=\"text-center\">
                  <a href=\"{{ path('app_offreemploi_show_back', {'idOffre': offreemploi.idOffre}) }}\" class=\"btn btn-sm btn-outline-info rounded-pill\">
                    <i class=\"bi bi-eye\"></i> Voir
                  </a>
                </td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"6\" class=\"text-center\">Aucune offre d'emploi disponible.</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
      
    </div>
  </section>
{% endblock %}
", "offreemploi/back.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\back.html.twig");
    }
}

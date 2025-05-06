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

/* entretien/calendar.html.twig */
class __TwigTemplate_be28cbe387a1aea0603c98761ebb8b63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/calendar.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "entretien/calendar.html.twig", 1);
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

        yield "Calendrier des Entretiens";
        
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
        yield "  <div class=\"container py-5\">
    <h1 class=\"text-center mb-4 text-primary\">Calendrier des Entretiens</h1>

    <!-- Conteneur du calendrier -->
    <div id=\"calendar\" class=\"shadow-lg rounded-lg\"></div>
  </div>

  <!-- Modale des détails d'entretien -->
  <div class=\"modal fade\" id=\"entretienModal\" tabindex=\"-1\" aria-labelledby=\"entretienModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content rounded-3\">
        <div class=\"modal-header bg-info text-white\">
          <h5 class=\"modal-title\" id=\"entretienModalLabel\">Détails de l'entretien</h5>
        </div>
        <div class=\"modal-body\">
          <p><strong>Titre :</strong> <span id=\"entretienTitle\"></span></p>
          <p><strong>Type :</strong> <span id=\"entretienType\"></span></p>
          <p><strong>Statut :</strong> <span id=\"entretienStatut\"></span></p>
          <p><strong>Date et Heure :</strong> <span id=\"entretienDate\"></span></p>
          <p><strong>Candidat :</strong> <span id=\"entretienCandidat\"></span></p>
          <p><strong>Offre :</strong> <span id=\"entretienOffre\"></span></p>
        </div>
      </div>
    </div>
  </div>

  <style>
    #calendar {
      background-color: #f8f9fa;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    }

    .modal-content {
      border-radius: 15px;
      border: none;
    }

    .modal-header {
      border-bottom: 2px solid #f0f0f0;
      padding: 1.5rem 1.75rem;
      background-color: #007bff;
    }

    .modal-body {
      font-size: 1rem;
    }

    h1 {
      font-family: 'Arial', sans-serif;
      font-weight: 700;
    }
  </style>

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js\"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const calendarEl = document.getElementById('calendar');

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        themeSystem: 'bootstrap5',
        eventTextColor: '#fff',
        editable: true, // Permet de déplacer les événements

        events: function(info, successCallback, failureCallback) {
          fetch(\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_entretiens");
        yield "\")
            .then(response => response.json())
            .then(data => {
              const events = data.map(event => ({
                title: event.title,
                start: event.start,
                end: event.end,
                color: event.color,
                id: event.id,
                extendedProps: {
                  type: event.type,
                  statut: event.statut,
                  candidat: event.candidat,
                  offre: event.offre
                }
              }));
              successCallback(events);
            })
            .catch(error => {
              console.error(\"Erreur lors du chargement des événements :\", error);
              failureCallback(error);
            });
        },

        eventDrop: function(info) {
          const event = info.event;
          const updatedDate = event.start; // La nouvelle date du début de l'événement

          // Mettre à jour la date de l'entretien dans la base de données
          fetch(\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_entretien_date");
        yield "\", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_entretien_date"), "html", null, true);
        yield "'
            },
            body: JSON.stringify({
              id: event.id,
              start: updatedDate.toISOString(),
            })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              console.log(\"Date mise à jour avec succès !\");
            } else {
              console.error(\"Erreur lors de la mise à jour de la date.\");
            }
          })
          .catch(error => {
            console.error(\"Erreur lors de l'envoi de la requête :\", error);
          });
        },

        eventClick: function(info) {
          const event = info.event;

          document.getElementById('entretienTitle').textContent = event.title;
          document.getElementById('entretienType').textContent = event.extendedProps.type || 'Non spécifié';
          document.getElementById('entretienStatut').textContent = event.extendedProps.statut || 'Inconnu';
          document.getElementById('entretienDate').textContent = event.start.toLocaleString();
          document.getElementById('entretienCandidat').textContent =
            event.extendedProps.candidat ? `\${event.extendedProps.candidat.user_prenom} \${event.extendedProps.candidat.user_nom}` : 'Non spécifié';
          document.getElementById('entretienOffre').textContent =
            event.extendedProps.offre ? event.extendedProps.offre.titre : 'Non spécifiée';

          const modal = new bootstrap.Modal(document.getElementById('entretienModal'));
          modal.show();
        }
      });

      calendar.render();
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
        return "entretien/calendar.html.twig";
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
        return array (  215 => 113,  208 => 109,  176 => 80,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Calendrier des Entretiens{% endblock %}

{% block content %}
  <div class=\"container py-5\">
    <h1 class=\"text-center mb-4 text-primary\">Calendrier des Entretiens</h1>

    <!-- Conteneur du calendrier -->
    <div id=\"calendar\" class=\"shadow-lg rounded-lg\"></div>
  </div>

  <!-- Modale des détails d'entretien -->
  <div class=\"modal fade\" id=\"entretienModal\" tabindex=\"-1\" aria-labelledby=\"entretienModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content rounded-3\">
        <div class=\"modal-header bg-info text-white\">
          <h5 class=\"modal-title\" id=\"entretienModalLabel\">Détails de l'entretien</h5>
        </div>
        <div class=\"modal-body\">
          <p><strong>Titre :</strong> <span id=\"entretienTitle\"></span></p>
          <p><strong>Type :</strong> <span id=\"entretienType\"></span></p>
          <p><strong>Statut :</strong> <span id=\"entretienStatut\"></span></p>
          <p><strong>Date et Heure :</strong> <span id=\"entretienDate\"></span></p>
          <p><strong>Candidat :</strong> <span id=\"entretienCandidat\"></span></p>
          <p><strong>Offre :</strong> <span id=\"entretienOffre\"></span></p>
        </div>
      </div>
    </div>
  </div>

  <style>
    #calendar {
      background-color: #f8f9fa;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    }

    .modal-content {
      border-radius: 15px;
      border: none;
    }

    .modal-header {
      border-bottom: 2px solid #f0f0f0;
      padding: 1.5rem 1.75rem;
      background-color: #007bff;
    }

    .modal-body {
      font-size: 1rem;
    }

    h1 {
      font-family: 'Arial', sans-serif;
      font-weight: 700;
    }
  </style>

  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js\"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const calendarEl = document.getElementById('calendar');

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        themeSystem: 'bootstrap5',
        eventTextColor: '#fff',
        editable: true, // Permet de déplacer les événements

        events: function(info, successCallback, failureCallback) {
          fetch(\"{{ path('api_entretiens') }}\")
            .then(response => response.json())
            .then(data => {
              const events = data.map(event => ({
                title: event.title,
                start: event.start,
                end: event.end,
                color: event.color,
                id: event.id,
                extendedProps: {
                  type: event.type,
                  statut: event.statut,
                  candidat: event.candidat,
                  offre: event.offre
                }
              }));
              successCallback(events);
            })
            .catch(error => {
              console.error(\"Erreur lors du chargement des événements :\", error);
              failureCallback(error);
            });
        },

        eventDrop: function(info) {
          const event = info.event;
          const updatedDate = event.start; // La nouvelle date du début de l'événement

          // Mettre à jour la date de l'entretien dans la base de données
          fetch(\"{{ path('update_entretien_date') }}\", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token('update_entretien_date') }}'
            },
            body: JSON.stringify({
              id: event.id,
              start: updatedDate.toISOString(),
            })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              console.log(\"Date mise à jour avec succès !\");
            } else {
              console.error(\"Erreur lors de la mise à jour de la date.\");
            }
          })
          .catch(error => {
            console.error(\"Erreur lors de l'envoi de la requête :\", error);
          });
        },

        eventClick: function(info) {
          const event = info.event;

          document.getElementById('entretienTitle').textContent = event.title;
          document.getElementById('entretienType').textContent = event.extendedProps.type || 'Non spécifié';
          document.getElementById('entretienStatut').textContent = event.extendedProps.statut || 'Inconnu';
          document.getElementById('entretienDate').textContent = event.start.toLocaleString();
          document.getElementById('entretienCandidat').textContent =
            event.extendedProps.candidat ? `\${event.extendedProps.candidat.user_prenom} \${event.extendedProps.candidat.user_nom}` : 'Non spécifié';
          document.getElementById('entretienOffre').textContent =
            event.extendedProps.offre ? event.extendedProps.offre.titre : 'Non spécifiée';

          const modal = new bootstrap.Modal(document.getElementById('entretienModal'));
          modal.show();
        }
      });

      calendar.render();
    });
  </script>
{% endblock %}
", "entretien/calendar.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\calendar.html.twig");
    }
}

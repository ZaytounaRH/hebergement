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

/* offreemploi/calendarOffre.html.twig */
class __TwigTemplate_7f6ae7eea5e9448224eb2eacbf7a001c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/calendarOffre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/calendarOffre.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offreemploi/calendarOffre.html.twig", 1);
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
        yield "<div class=\"container py-5\">
  <h1 class=\"text-center mb-4 text-primary\">Calendrier des Offres</h1>

  <!-- Conteneur du calendrier -->
  <div id=\"calendar\" class=\"shadow-lg rounded-lg\"></div>
</div>

<!-- Bouton retour vers la page index -->
<div class=\"mb-4\">
  <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_back_index");
        yield "\" class=\"btn btn-secondary\">
    <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
  </a>
</div>

<!-- Modale des détails d'entretien -->
<div class=\"modal fade\" id=\"entretienModal\" tabindex=\"-1\" aria-labelledby=\"entretienModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content rounded-3\">
      <div class=\"modal-header bg-info text-white\">
        <h5 class=\"modal-title\" id=\"entretienModalLabel\">Détails de l'offre</h5>
      </div>
      <div class=\"modal-body\">
        <p><strong>Titre de l'Offre :</strong> <span id=\"offreTitre\"></span></p>
        <p><strong>Statut :</strong> <span id=\"offreStatut\"></span></p>
        <p><strong>Date de Publication :</strong> <span id=\"offreDate\"></span></p>
        <p><strong>Salaire :</strong> <span id=\"offreSalaire\"></span></p>
        <p><strong>Description :</strong> <span id=\"offreDescription\"></span></p>
        <p><strong>RH Responsable :</strong> <span id=\"offreRh\"></span></p>
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

      events: function(info, successCallback, failureCallback) {
        fetch(\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_offres");
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
                titreOffre: event.titreOffre,
                statut: event.statut,
                datePublication: event.datePublication,
                salaire: event.salaire,
                description: event.description,
                rh: event.RH // attention majuscule RH ici
              }
            }));
            successCallback(events);
          })
          .catch(error => {
            console.error(\"Erreur lors du chargement des événements :\", error);
            failureCallback(error);
          });
      },

      eventClick: function(info) {
        const event = info.event;

 // Titre de l'offre (vérification si disponible)
    const titreOffre = event.extendedProps.titreOffre || 'Non spécifié';
    document.getElementById('offreTitre').textContent = titreOffre;
            document.getElementById('offreStatut').textContent = event.extendedProps.statut || 'Inconnu';
// Date de publication (vérification si disponible)
    const datePublication = event.extendedProps.datePublication ? new Date(event.extendedProps.datePublication).toLocaleDateString() : 'Non spécifiée';
    document.getElementById('offreDate').textContent = datePublication;        document.getElementById('offreSalaire').textContent = event.extendedProps.salaire !== undefined ? event.extendedProps.salaire + ' TND' : 'Non spécifié';
        document.getElementById('offreDescription').textContent = event.extendedProps.description || 'Non spécifiée';

        // Correction ici pour RH :
        if (event.extendedProps.rh) {
          const prenom = event.extendedProps.rh.user_prenom || '';
          const nom = event.extendedProps.rh.user_nom || '';
          document.getElementById('offreRh').textContent = `\${prenom} \${nom}`.trim();
        } else {
          document.getElementById('offreRh').textContent = 'Non spécifié';
        }

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
        return "offreemploi/calendarOffre.html.twig";
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
        return array (  185 => 86,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Calendrier des Entretiens{% endblock %}

{% block content %}
<div class=\"container py-5\">
  <h1 class=\"text-center mb-4 text-primary\">Calendrier des Offres</h1>

  <!-- Conteneur du calendrier -->
  <div id=\"calendar\" class=\"shadow-lg rounded-lg\"></div>
</div>

<!-- Bouton retour vers la page index -->
<div class=\"mb-4\">
  <a href=\"{{ path('app_offreemploi_back_index') }}\" class=\"btn btn-secondary\">
    <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
  </a>
</div>

<!-- Modale des détails d'entretien -->
<div class=\"modal fade\" id=\"entretienModal\" tabindex=\"-1\" aria-labelledby=\"entretienModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content rounded-3\">
      <div class=\"modal-header bg-info text-white\">
        <h5 class=\"modal-title\" id=\"entretienModalLabel\">Détails de l'offre</h5>
      </div>
      <div class=\"modal-body\">
        <p><strong>Titre de l'Offre :</strong> <span id=\"offreTitre\"></span></p>
        <p><strong>Statut :</strong> <span id=\"offreStatut\"></span></p>
        <p><strong>Date de Publication :</strong> <span id=\"offreDate\"></span></p>
        <p><strong>Salaire :</strong> <span id=\"offreSalaire\"></span></p>
        <p><strong>Description :</strong> <span id=\"offreDescription\"></span></p>
        <p><strong>RH Responsable :</strong> <span id=\"offreRh\"></span></p>
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

      events: function(info, successCallback, failureCallback) {
        fetch(\"{{ path('api_offres') }}\")
          .then(response => response.json())
          .then(data => {
            const events = data.map(event => ({
              title: event.title,
              start: event.start,
              end: event.end,
              color: event.color,
              id: event.id,
              extendedProps: {
                titreOffre: event.titreOffre,
                statut: event.statut,
                datePublication: event.datePublication,
                salaire: event.salaire,
                description: event.description,
                rh: event.RH // attention majuscule RH ici
              }
            }));
            successCallback(events);
          })
          .catch(error => {
            console.error(\"Erreur lors du chargement des événements :\", error);
            failureCallback(error);
          });
      },

      eventClick: function(info) {
        const event = info.event;

 // Titre de l'offre (vérification si disponible)
    const titreOffre = event.extendedProps.titreOffre || 'Non spécifié';
    document.getElementById('offreTitre').textContent = titreOffre;
            document.getElementById('offreStatut').textContent = event.extendedProps.statut || 'Inconnu';
// Date de publication (vérification si disponible)
    const datePublication = event.extendedProps.datePublication ? new Date(event.extendedProps.datePublication).toLocaleDateString() : 'Non spécifiée';
    document.getElementById('offreDate').textContent = datePublication;        document.getElementById('offreSalaire').textContent = event.extendedProps.salaire !== undefined ? event.extendedProps.salaire + ' TND' : 'Non spécifié';
        document.getElementById('offreDescription').textContent = event.extendedProps.description || 'Non spécifiée';

        // Correction ici pour RH :
        if (event.extendedProps.rh) {
          const prenom = event.extendedProps.rh.user_prenom || '';
          const nom = event.extendedProps.rh.user_nom || '';
          document.getElementById('offreRh').textContent = `\${prenom} \${nom}`.trim();
        } else {
          document.getElementById('offreRh').textContent = 'Non spécifié';
        }

        const modal = new bootstrap.Modal(document.getElementById('entretienModal'));
        modal.show();
      }

    });

    calendar.render();
  });
</script>
{% endblock %}
", "offreemploi/calendarOffre.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\calendarOffre.html.twig");
    }
}

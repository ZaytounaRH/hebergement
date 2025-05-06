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

/* entretien/edit.html.twig */
class __TwigTemplate_c1cade1f48edbfa55dc04f6ca259481b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "entretien/edit.html.twig", 1);
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

        yield "Liste des Entretiens";
        
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
    <!-- En-tête avec un fond élégant -->
    <div class=\"p-5 rounded-4 shadow-lg bg-gradient text-white text-center mb-4\">
        <h1 class=\"display-4 fw-bold\">
            <i class=\"bi bi-chat-dots-fill me-2\"></i> Gestion des Entretiens
        </h1>
        <p class=\"lead\">Visualisez, modifiez et gérez efficacement vos entretiens programmés.</p>
    </div>

    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
        yield "\" class=\"btn btn-primary btn-lg rounded-pill\">
        <i class=\"bi bi-calendar-event me-2\"></i> Voir le calendrier
    </a>



<div class=\"d-flex justify-content-end mb-3\">
 <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretien_trier_date", ["order" => (((array_key_exists("order", $context) && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
    <i class=\"bi bi-sort-alpha-down me-2\"></i> Trier par Date ";
        // line 23
        yield (((array_key_exists("order", $context) && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()) == "ASC"))) ? ("🔽") : ("🔼"));
        yield "
</a>



    
</div>
 



    <!-- Tableau amélioré avec des effets modernes -->
    <div class=\"card shadow-lg border-0 rounded-4 mb-5\">
        <div class=\"card-body\">
            <table class=\"table table-hover table-borderless align-middle\">
                <thead class=\"table-dark text-uppercase\">
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>
                        <th>Statut</th>
                        <th>Commentaire</th>
                        <th>Offre d'emploi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entretiens"]) || array_key_exists("entretiens", $context) ? $context["entretiens"] : (function () { throw new RuntimeError('Variable "entretiens" does not exist.', 50, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
            // line 51
            yield "                    <tr class=\"table-light shadow-sm rounded\">
                        <td>";
            // line 52
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "dateEntretien", [], "any", false, false, false, 52)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "dateEntretien", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 53
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "heureEntretien", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "heureEntretien", [], "any", false, false, false, 53), "H:i"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "typeEntretien", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 56
            $context["statut"] = CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "statut", [], "any", false, false, false, 56);
            // line 57
            yield "                            <span class=\"badge 
                                ";
            // line 58
            if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 58, $this->source); })()) == "Réalisé")) {
                yield " bg-success 
                                ";
            } elseif ((            // line 59
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 59, $this->source); })()) == "Prévu")) {
                yield " bg-warning text-dark
                                ";
            } elseif ((            // line 60
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 60, $this->source); })()) == "Annulé")) {
                yield " bg-danger
                                ";
            } else {
                // line 61
                yield " bg-secondary
                                ";
            }
            // line 62
            yield " 
                                rounded-pill px-3 py-2\">
                                ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 67
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "commentaire", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "commentaire", [], "any", false, false, false, 67), "html", null, true)) : ("—"));
            yield "</td>
                        <td>";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "offreEmploi", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "offreEmploi", [], "any", false, false, false, 68), "titreOffre", [], "any", false, false, false, 68), "html", null, true)) : ("Aucune"));
            yield "</td>  <!-- Affichage de l'offre d'emploi -->
                        <td>
                            <div class=\"d-flex flex-column gap-2\">
                                <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_show", ["idEntretien" => CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "idEntretien", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-outline-primary btn-lg rounded-pill\">
                                   <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_edit", ["idEntretien" => CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "idEntretien", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\"
                                   class=\"btn btn-outline-warning btn-lg rounded-pill\">
                                   <i class=\"bi bi-pencil-square\"></i> Modifier
                                </a>
                                <div class=\"btn-group mt-2\" role=\"group\">
                                    <a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_statut_entretien", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "idEntretien", [], "any", false, false, false, 80), "statut" => "Planifié"]), "html", null, true);
            yield "\"
                                       class=\"btn btn-statut-planifie btn-sm rounded-pill\">Planifié</a>
                                    <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_statut_entretien", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "idEntretien", [], "any", false, false, false, 82), "statut" => "Terminé"]), "html", null, true);
            yield "\"
                                       class=\"btn btn-statut-termine btn-sm rounded-pill\">Terminé</a>
                                    <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changer_statut_entretien", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "idEntretien", [], "any", false, false, false, 84), "statut" => "Annulé"]), "html", null, true);
            yield "\"
                                       class=\"btn btn-statut-annule btn-sm rounded-pill\">Annulé</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">
                            <i class=\"bi bi-emoji-frown fs-3\"></i> Aucune donnée disponible
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entretien'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Style personnalisé pour un look plus dynamique -->
<style>
    /* Dégradé de fond de l'en-tête */
    .bg-gradient {
        background: linear-gradient(135deg, #4e73df, #1cc88a);
    }

    /* Effet de survol pour le tableau */
    tr:hover {
        background-color: #f8f9fa !important;
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    /* Stabilité des entêtes du tableau */
    .table thead th {
        font-size: 1.1rem;
        letter-spacing: 1px;
        font-weight: bold;
    }

    /* Couleurs des badges de statut */
    .badge {
        font-size: 0.9rem;
    }

    .btn-outline-primary, .btn-outline-warning {
        border-radius: 50px;
        padding: 12px 30px;
        font-size: 1rem;
    }

    .btn-outline-primary:hover, .btn-outline-warning:hover {
        color: #fff;
        background-color: #1cc88a;
        border-color: #1cc88a;
    }

    .btn-lg {
        font-size: 1.1rem;
        padding: 10px 20px;
        border-radius: 50px;
    }

    /* Boutons des statuts */
    .btn-statut-planifie {
        background: none;
        border: none;
        color: #ff8c00;
    }

    .btn-statut-termine {
        background: none;
        border: none;
        color: #28a745;
    }

    .btn-statut-annule {
        background: none;
        border: none;
        color: #dc3545;
    }

    .btn-statut-planifie:hover { color: #d2691e; }
    .btn-statut-termine:hover { color: #1e7e34; }
    .btn-statut-annule:hover { color: #a71d2a; }

    /* Bordures subtiles pour les cellules de tableau */
    .table td, .table th {
        border: 1px solid #ddd;
    }

    .table-responsive {
        border-radius: 10px;
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
        return "entretien/edit.html.twig";
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
        return array (  267 => 97,  256 => 91,  254 => 90,  243 => 84,  238 => 82,  233 => 80,  225 => 75,  218 => 71,  212 => 68,  208 => 67,  202 => 64,  198 => 62,  194 => 61,  189 => 60,  185 => 59,  181 => 58,  178 => 57,  176 => 56,  171 => 54,  167 => 53,  163 => 52,  160 => 51,  155 => 50,  125 => 23,  121 => 22,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Entretiens{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <!-- En-tête avec un fond élégant -->
    <div class=\"p-5 rounded-4 shadow-lg bg-gradient text-white text-center mb-4\">
        <h1 class=\"display-4 fw-bold\">
            <i class=\"bi bi-chat-dots-fill me-2\"></i> Gestion des Entretiens
        </h1>
        <p class=\"lead\">Visualisez, modifiez et gérez efficacement vos entretiens programmés.</p>
    </div>

    <a href=\"{{ path('app_calendar') }}\" class=\"btn btn-primary btn-lg rounded-pill\">
        <i class=\"bi bi-calendar-event me-2\"></i> Voir le calendrier
    </a>



<div class=\"d-flex justify-content-end mb-3\">
 <a href=\"{{ path('entretien_trier_date', {'order': (order is defined and order == 'ASC') ? 'DESC' : 'ASC'}) }}\" class=\"btn btn-primary\">
    <i class=\"bi bi-sort-alpha-down me-2\"></i> Trier par Date {{ (order is defined and order == 'ASC') ? '🔽' : '🔼' }}
</a>



    
</div>
 



    <!-- Tableau amélioré avec des effets modernes -->
    <div class=\"card shadow-lg border-0 rounded-4 mb-5\">
        <div class=\"card-body\">
            <table class=\"table table-hover table-borderless align-middle\">
                <thead class=\"table-dark text-uppercase\">
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>
                        <th>Statut</th>
                        <th>Commentaire</th>
                        <th>Offre d'emploi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for entretien in entretiens %}
                    <tr class=\"table-light shadow-sm rounded\">
                        <td>{{ entretien.dateEntretien ? entretien.dateEntretien|date('d/m/Y') : '—' }}</td>
                        <td>{{ entretien.heureEntretien ? entretien.heureEntretien|date('H:i') : '—' }}</td>
                        <td>{{ entretien.typeEntretien }}</td>
                        <td>
                            {% set statut = entretien.statut %}
                            <span class=\"badge 
                                {% if statut == 'Réalisé' %} bg-success 
                                {% elseif statut == 'Prévu' %} bg-warning text-dark
                                {% elseif statut == 'Annulé' %} bg-danger
                                {% else %} bg-secondary
                                {% endif %} 
                                rounded-pill px-3 py-2\">
                                {{ statut }}
                            </span>
                        </td>
                        <td>{{ entretien.commentaire ?: '—' }}</td>
                        <td>{{ entretien.offreEmploi ? entretien.offreEmploi.titreOffre : 'Aucune' }}</td>  <!-- Affichage de l'offre d'emploi -->
                        <td>
                            <div class=\"d-flex flex-column gap-2\">
                                <a href=\"{{ path('app_entretien_show', {'idEntretien': entretien.idEntretien}) }}\"
                                   class=\"btn btn-outline-primary btn-lg rounded-pill\">
                                   <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('app_entretien_edit', {'idEntretien': entretien.idEntretien}) }}\"
                                   class=\"btn btn-outline-warning btn-lg rounded-pill\">
                                   <i class=\"bi bi-pencil-square\"></i> Modifier
                                </a>
                                <div class=\"btn-group mt-2\" role=\"group\">
                                    <a href=\"{{ path('changer_statut_entretien', {'id': entretien.idEntretien, 'statut': 'Planifié'}) }}\"
                                       class=\"btn btn-statut-planifie btn-sm rounded-pill\">Planifié</a>
                                    <a href=\"{{ path('changer_statut_entretien', {'id': entretien.idEntretien, 'statut': 'Terminé'}) }}\"
                                       class=\"btn btn-statut-termine btn-sm rounded-pill\">Terminé</a>
                                    <a href=\"{{ path('changer_statut_entretien', {'id': entretien.idEntretien, 'statut': 'Annulé'}) }}\"
                                       class=\"btn btn-statut-annule btn-sm rounded-pill\">Annulé</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">
                            <i class=\"bi bi-emoji-frown fs-3\"></i> Aucune donnée disponible
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Style personnalisé pour un look plus dynamique -->
<style>
    /* Dégradé de fond de l'en-tête */
    .bg-gradient {
        background: linear-gradient(135deg, #4e73df, #1cc88a);
    }

    /* Effet de survol pour le tableau */
    tr:hover {
        background-color: #f8f9fa !important;
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    /* Stabilité des entêtes du tableau */
    .table thead th {
        font-size: 1.1rem;
        letter-spacing: 1px;
        font-weight: bold;
    }

    /* Couleurs des badges de statut */
    .badge {
        font-size: 0.9rem;
    }

    .btn-outline-primary, .btn-outline-warning {
        border-radius: 50px;
        padding: 12px 30px;
        font-size: 1rem;
    }

    .btn-outline-primary:hover, .btn-outline-warning:hover {
        color: #fff;
        background-color: #1cc88a;
        border-color: #1cc88a;
    }

    .btn-lg {
        font-size: 1.1rem;
        padding: 10px 20px;
        border-radius: 50px;
    }

    /* Boutons des statuts */
    .btn-statut-planifie {
        background: none;
        border: none;
        color: #ff8c00;
    }

    .btn-statut-termine {
        background: none;
        border: none;
        color: #28a745;
    }

    .btn-statut-annule {
        background: none;
        border: none;
        color: #dc3545;
    }

    .btn-statut-planifie:hover { color: #d2691e; }
    .btn-statut-termine:hover { color: #1e7e34; }
    .btn-statut-annule:hover { color: #a71d2a; }

    /* Bordures subtiles pour les cellules de tableau */
    .table td, .table th {
        border: 1px solid #ddd;
    }

    .table-responsive {
        border-radius: 10px;
    }
</style>

{% endblock %}
", "entretien/edit.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\edit.html.twig");
    }
}

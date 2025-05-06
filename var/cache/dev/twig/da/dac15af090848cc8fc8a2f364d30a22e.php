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

/* back/index.html.twig */
class __TwigTemplate_d9d366d3582082c089f14e5792748cc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">🎯 Tableau de bord RH</h5>
                    <p class=\"text-muted m-b-0\">Bienvenue sur ZaytounaRH – ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"breadcrumb float-end\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques principales -->
<div class=\"row\">
    ";
        // line 27
        $context["stats"] = [["icon" => "graduation-cap", "color" => "purple", "count" =>         // line 28
(isset($context["nombreFormations"]) || array_key_exists("nombreFormations", $context) ? $context["nombreFormations"] : (function () { throw new RuntimeError('Variable "nombreFormations" does not exist.', 28, $this->source); })()), "label" => "Formations"], ["icon" => "briefcase", "color" => "green", "count" =>         // line 29
(isset($context["nombreOffre"]) || array_key_exists("nombreOffre", $context) ? $context["nombreOffre"] : (function () { throw new RuntimeError('Variable "nombreOffre" does not exist.', 29, $this->source); })()), "label" => "Offres d'emploi"], ["icon" => "comments", "color" => "red", "count" =>         // line 30
(isset($context["nombreEntretien"]) || array_key_exists("nombreEntretien", $context) ? $context["nombreEntretien"] : (function () { throw new RuntimeError('Variable "nombreEntretien" does not exist.', 30, $this->source); })()), "label" => "Entretiens"], ["icon" => "shield-alt", "color" => "blue", "count" =>         // line 31
(isset($context["nombreAssurance"]) || array_key_exists("nombreAssurance", $context) ? $context["nombreAssurance"] : (function () { throw new RuntimeError('Variable "nombreAssurance" does not exist.', 31, $this->source); })()), "label" => "Assurances"], ["icon" => "calendar-check", "color" => "orange", "count" =>         // line 32
(isset($context["nombreConge"]) || array_key_exists("nombreConge", $context) ? $context["nombreConge"] : (function () { throw new RuntimeError('Variable "nombreConge" does not exist.', 32, $this->source); })()), "label" => "Congés"], ["icon" => "certificate", "color" => "teal", "count" =>         // line 33
(isset($context["nombreCertif"]) || array_key_exists("nombreCertif", $context) ? $context["nombreCertif"] : (function () { throw new RuntimeError('Variable "nombreCertif" does not exist.', 33, $this->source); })()), "label" => "Certifications"], ["icon" => "coins", "color" => "red", "count" =>         // line 34
(isset($context["nombreBudget"]) || array_key_exists("nombreBudget", $context) ? $context["nombreBudget"] : (function () { throw new RuntimeError('Variable "nombreBudget" does not exist.', 34, $this->source); })()), "label" => "Budgets"], ["icon" => "users", "color" => "blue", "count" =>         // line 35
(isset($context["nombreEmployee"]) || array_key_exists("nombreEmployee", $context) ? $context["nombreEmployee"] : (function () { throw new RuntimeError('Variable "nombreEmployee" does not exist.', 35, $this->source); })()), "label" => "Employés"]];
        // line 37
        yield "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 39
            yield "        <div class=\"col-md-6 col-xl-3 mb-4\">
            <div class=\"card shadow-sm border-left-";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "color", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                <div class=\"card-body d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "icon", [], "any", false, false, false, 43), "html", null, true);
            yield " text-c-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "color", [], "any", false, false, false, 43), "html", null, true);
            yield " f-30\"></i>
                    </div>
                    <div>
                        <h5 class=\"mb-0\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 46), "html", null, true);
            yield "</h5>
                        <p class=\"text-muted mb-0\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>

<!-- Graphique de performance des RH -->
<div class=\"row\">
    <div class=\"col-xl-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>📊 Répartition des formations</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"formationChart\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"col-xl-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>📈 Certifications par mois</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"certifChart\"></canvas>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx1 = document.getElementById('formationChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Formations', \"Offres d'emploi\", 'Entretiens'],
                datasets: [{
                    label: 'RH Data',
                    data: [";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreFormations"]) || array_key_exists("nombreFormations", $context) ? $context["nombreFormations"] : (function () { throw new RuntimeError('Variable "nombreFormations" does not exist.', 89, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreOffre"]) || array_key_exists("nombreOffre", $context) ? $context["nombreOffre"] : (function () { throw new RuntimeError('Variable "nombreOffre" does not exist.', 89, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreEntretien"]) || array_key_exists("nombreEntretien", $context) ? $context["nombreEntretien"] : (function () { throw new RuntimeError('Variable "nombreEntretien" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: ['#6f42c1', '#28a745', '#dc3545']
                }]
            }
        });

        const ctx2 = document.getElementById('certifChart').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Certifications',
                    data: [3, 6, 4, 5, 7, ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombreCertif"]) || array_key_exists("nombreCertif", $context) ? $context["nombreCertif"] : (function () { throw new RuntimeError('Variable "nombreCertif" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: '#17a2b8'
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
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
        return "back/index.html.twig";
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
        return array (  215 => 102,  195 => 89,  157 => 53,  145 => 47,  141 => 46,  133 => 43,  127 => 40,  124 => 39,  120 => 38,  117 => 37,  115 => 35,  114 => 34,  113 => 33,  112 => 32,  111 => 31,  110 => 30,  109 => 29,  108 => 28,  107 => 27,  93 => 16,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-8\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">🎯 Tableau de bord RH</h5>
                    <p class=\"text-muted m-b-0\">Bienvenue sur ZaytounaRH – {{ \"now\"|date(\"d/m/Y\") }}</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"breadcrumb float-end\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Statistiques principales -->
<div class=\"row\">
    {% set stats = [
        {'icon': 'graduation-cap', 'color': 'purple', 'count': nombreFormations, 'label': 'Formations'},
        {'icon': 'briefcase', 'color': 'green', 'count': nombreOffre, 'label': \"Offres d'emploi\"},
        {'icon': 'comments', 'color': 'red', 'count': nombreEntretien, 'label': 'Entretiens'},
        {'icon': 'shield-alt', 'color': 'blue', 'count': nombreAssurance, 'label': 'Assurances'},
        {'icon': 'calendar-check', 'color': 'orange', 'count': nombreConge, 'label': 'Congés'},
        {'icon': 'certificate', 'color': 'teal', 'count': nombreCertif, 'label': 'Certifications'},
        {'icon': 'coins', 'color': 'red', 'count': nombreBudget, 'label': 'Budgets'},
        {'icon': 'users', 'color': 'blue', 'count': nombreEmployee, 'label': 'Employés'}
    ] %}

    {% for stat in stats %}
        <div class=\"col-md-6 col-xl-3 mb-4\">
            <div class=\"card shadow-sm border-left-{{ stat.color }}\">
                <div class=\"card-body d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-{{ stat.icon }} text-c-{{ stat.color }} f-30\"></i>
                    </div>
                    <div>
                        <h5 class=\"mb-0\">{{ stat.count }}</h5>
                        <p class=\"text-muted mb-0\">{{ stat.label }}</p>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
</div>

<!-- Graphique de performance des RH -->
<div class=\"row\">
    <div class=\"col-xl-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>📊 Répartition des formations</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"formationChart\"></canvas>
            </div>
        </div>
    </div>
    <div class=\"col-xl-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5>📈 Certifications par mois</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"certifChart\"></canvas>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx1 = document.getElementById('formationChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Formations', \"Offres d'emploi\", 'Entretiens'],
                datasets: [{
                    label: 'RH Data',
                    data: [{{ nombreFormations }}, {{ nombreOffre }}, {{ nombreEntretien }}],
                    backgroundColor: ['#6f42c1', '#28a745', '#dc3545']
                }]
            }
        });

        const ctx2 = document.getElementById('certifChart').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin'],
                datasets: [{
                    label: 'Certifications',
                    data: [3, 6, 4, 5, 7, {{ nombreCertif }}],
                    backgroundColor: '#17a2b8'
                }]
            },
            options: {
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    });
</script>
{% endblock %}
", "back/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\back\\index.html.twig");
    }
}

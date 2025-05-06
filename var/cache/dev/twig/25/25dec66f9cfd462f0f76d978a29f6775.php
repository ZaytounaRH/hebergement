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

/* budget/index.html.twig */
class __TwigTemplate_2eec96debf86347554b4fdc673fa8e49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "budget/index.html.twig", 1);
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

        yield "Liste des Budgets";
        
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
        yield "<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Budgets</h5>
                    <p class=\"m-b-0\">Consultez, modifiez ou créez des budgets</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Budgets</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Liste des Budgets</h5>
        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_new");
        yield "\" class=\"btn btn-success btn-sm\">
            <i class=\"fa fa-plus\"></i> Nouveau Budget
        </a>
    </div>

    <div class=\"card-block table-responsive\">
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Montant Alloué (DT)</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Type Budget</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgets"]) || array_key_exists("budgets", $context) ? $context["budgets"] : (function () { throw new RuntimeError('Variable "budgets" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 47
            yield "                    <tr>
                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantAlloue", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                        <td>";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateDebut", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateDebut", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateFin", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateFin", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "typeBudget", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <!-- Voir le budget -->
                                <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i> Voir
                                </a>

                                <!-- Modifier le budget -->
                                <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i> Modifier
                                </a>

                                <!-- Supprimer le budget (avec confirmation) -->
                                <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce budget ?')\">
                                    <i class=\"fa fa-trash\"></i> Supprimer
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 72
        if (!$context['_iterated']) {
            // line 73
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted\">Aucun budget trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "            </tbody>
        </table>
    </div>
</div>
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
        return "budget/index.html.twig";
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
        return array (  217 => 77,  208 => 73,  206 => 72,  195 => 66,  187 => 61,  179 => 56,  172 => 52,  168 => 51,  164 => 50,  160 => 49,  156 => 48,  153 => 47,  148 => 46,  127 => 28,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Budgets{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Budgets</h5>
                    <p class=\"m-b-0\">Consultez, modifiez ou créez des budgets</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Budgets</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Liste des Budgets</h5>
        <a href=\"{{ path('app_back_budget_new') }}\" class=\"btn btn-success btn-sm\">
            <i class=\"fa fa-plus\"></i> Nouveau Budget
        </a>
    </div>

    <div class=\"card-block table-responsive\">
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Montant Alloué (DT)</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Type Budget</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for budget in budgets %}
                    <tr>
                        <td>{{ budget.id }}</td>
                        <td>{{ budget.montantAlloue }}</td>
                        <td>{{ budget.dateDebut ? budget.dateDebut|date('Y-m-d') : '' }}</td>
                        <td>{{ budget.dateFin ? budget.dateFin|date('Y-m-d') : '' }}</td>
                        <td>{{ budget.typeBudget }}</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <!-- Voir le budget -->
                                <a href=\"{{ path('app_back_budget_show', {'id': budget.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i> Voir
                                </a>

                                <!-- Modifier le budget -->
                                <a href=\"{{ path('app_back_budget_edit', {'id': budget.id}) }}\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i> Modifier
                                </a>

                                <!-- Supprimer le budget (avec confirmation) -->
                                <a href=\"{{ path('app_back_budget_delete', {'id': budget.id}) }}\" class=\"btn btn-outline-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce budget ?')\">
                                    <i class=\"fa fa-trash\"></i> Supprimer
                                </a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center text-muted\">Aucun budget trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "budget/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\budget\\index.html.twig");
    }
}

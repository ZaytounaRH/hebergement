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

/* budget/show.html.twig */
class __TwigTemplate_ad6881a7be5b400b7f724950f7de3b2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "budget/show.html.twig", 1);
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

        yield "Détails du Budget";
        
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
                    <h5 class=\"m-b-10\">Détails du Budget</h5>
                    <p class=\"m-b-0\">Consultez les informations détaillées du budget sélectionné</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_index");
        yield "\">Budgets</a>
                    </li>
                    <li class=\"breadcrumb-item active\">Détails du Budget</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Informations du Budget</h5>
    </div>
    <div class=\"card-body\">
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Montant Alloué</th>
                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 41, $this->source); })()), "montantAlloue", [], "any", false, false, false, 41), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Date Début</th>
                    <td>";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 45, $this->source); })()), "dateDebut", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 45, $this->source); })()), "dateDebut", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <th>Date Fin</th>
                    <td>";
        // line 49
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 49, $this->source); })()), "dateFin", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 49, $this->source); })()), "dateFin", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr>
                    <th>Type de Budget</th>
                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 53, $this->source); })()), "typeBudget", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"mt-4 d-flex gap-2\">
    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"fa fa-arrow-left\"></i> Retour à la liste
    </a>
    <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
        <i class=\"fa fa-edit\"></i> Modifier
    </a>

    <!-- Bouton de suppression qui ouvre le modal -->
    <a href=\"#\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
        <i class=\"fa fa-trash\"></i> Supprimer
    </a>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer ce budget ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fa fa-trash\"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
        return "budget/show.html.twig";
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
        return array (  209 => 86,  184 => 64,  178 => 61,  167 => 53,  160 => 49,  153 => 45,  146 => 41,  139 => 37,  118 => 19,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détails du Budget{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Détails du Budget</h5>
                    <p class=\"m-b-0\">Consultez les informations détaillées du budget sélectionné</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_back_budget_index') }}\">Budgets</a>
                    </li>
                    <li class=\"breadcrumb-item active\">Détails du Budget</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Informations du Budget</h5>
    </div>
    <div class=\"card-body\">
        <table class=\"table table-bordered table-striped\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ budget.id }}</td>
                </tr>
                <tr>
                    <th>Montant Alloué</th>
                    <td>{{ budget.montantAlloue }} DT</td>
                </tr>
                <tr>
                    <th>Date Début</th>
                    <td>{{ budget.dateDebut ? budget.dateDebut|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Date Fin</th>
                    <td>{{ budget.dateFin ? budget.dateFin|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Type de Budget</th>
                    <td>{{ budget.typeBudget }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"mt-4 d-flex gap-2\">
    <a href=\"{{ path('app_back_budget_index') }}\" class=\"btn btn-secondary\">
        <i class=\"fa fa-arrow-left\"></i> Retour à la liste
    </a>
    <a href=\"{{ path('app_back_budget_edit', {'id': budget.id}) }}\" class=\"btn btn-primary\">
        <i class=\"fa fa-edit\"></i> Modifier
    </a>

    <!-- Bouton de suppression qui ouvre le modal -->
    <a href=\"#\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
        <i class=\"fa fa-trash\"></i> Supprimer
    </a>

    <!-- Modal de confirmation de suppression -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer ce budget ?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"{{ path('app_back_budget_delete', {'id': budget.id}) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            <i class=\"fa fa-trash\"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "budget/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\budget\\show.html.twig");
    }
}

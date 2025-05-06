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

/* budget/edit.html.twig */
class __TwigTemplate_8630caf992b8443236bac302b96c26e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "budget/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "budget/edit.html.twig", 1);
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

        yield "Modifier le Budget";
        
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
                    <h5 class=\"m-b-10\">Modification du Budget</h5>
                    <p class=\"m-b-0\">Mettez à jour les informations du budget ci-dessous</p>
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
                    <li class=\"breadcrumb-item active\">Modifier le Budget</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Modifier les Détails du Budget</h5>
    </div>
    <div class=\"card-body\">
        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "budget/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
    </div>
</div>

<div class=\"mt-4 d-flex gap-2\">
    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"fa fa-arrow-left\"></i> Retour à la liste
    </a>

    <!-- Bouton pour supprimer le budget avec modal -->
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
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_budget_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["budget"]) || array_key_exists("budget", $context) ? $context["budget"] : (function () { throw new RuntimeError('Variable "budget" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
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
        return "budget/edit.html.twig";
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
        return array (  168 => 60,  143 => 38,  135 => 33,  118 => 19,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Modifier le Budget{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Modification du Budget</h5>
                    <p class=\"m-b-0\">Mettez à jour les informations du budget ci-dessous</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_back_budget_index') }}\">Budgets</a>
                    </li>
                    <li class=\"breadcrumb-item active\">Modifier le Budget</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Modifier les Détails du Budget</h5>
    </div>
    <div class=\"card-body\">
        {{ include('budget/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
    </div>
</div>

<div class=\"mt-4 d-flex gap-2\">
    <a href=\"{{ path('app_back_budget_index') }}\" class=\"btn btn-secondary\">
        <i class=\"fa fa-arrow-left\"></i> Retour à la liste
    </a>

    <!-- Bouton pour supprimer le budget avec modal -->
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
", "budget/edit.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\budget\\edit.html.twig");
    }
}

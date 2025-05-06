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

/* conge/show.html.twig */
class __TwigTemplate_205f4c6fca80a2c1bbaa916c0fb4a2f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conge/show.html.twig", 1);
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

        yield "Détails du Congé";
        
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center text-info mb-4\">Détails du Congé</h1>

    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-bordered table-striped\">
                <tbody>
                    <tr>
                        <th scope=\"row\">ID</th>
                        <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 15, $this->source); })()), "idConge", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date Début</th>
                        <td>";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 19, $this->source); })()), "dateDebut", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 19, $this->source); })()), "dateDebut", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date Fin</th>
                        <td>";
        // line 23
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 23, $this->source); })()), "dateFin", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 23, $this->source); })()), "dateFin", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Motif</th>
                        <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 27, $this->source); })()), "motif", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Statut</th>
                        <td>
                            ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 32, $this->source); })()), "statut", [], "any", false, false, false, 32) == "Accepté")) {
            // line 33
            yield "                                <span class=\"badge bg-success\">Accepté</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34) == "Refusé")) {
            // line 35
            yield "                                <span class=\"badge bg-danger\">Refusé</span>
                            ";
        } else {
            // line 37
            yield "                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            ";
        }
        // line 39
        yield "                        </td>
                    </tr>
                </tbody>
            </table>

            <div class=\"mt-4 d-flex justify-content-between\">
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                </a>

                <div>
                    <a href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_edit", ["id_conge" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["conge"]) || array_key_exists("conge", $context) ? $context["conge"] : (function () { throw new RuntimeError('Variable "conge" does not exist.', 50, $this->source); })()), "id_conge", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">
                        <i class=\"bi bi-pencil-square\"></i> Modifier
                    </a>
                    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "conge/_delete_form.html.twig");
        yield "
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
        return "conge/show.html.twig";
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
        return array (  177 => 53,  171 => 50,  163 => 45,  155 => 39,  151 => 37,  147 => 35,  145 => 34,  142 => 33,  140 => 32,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Congé{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center text-info mb-4\">Détails du Congé</h1>

    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <table class=\"table table-bordered table-striped\">
                <tbody>
                    <tr>
                        <th scope=\"row\">ID</th>
                        <td>{{ conge.idConge }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date Début</th>
                        <td>{{ conge.dateDebut ? conge.dateDebut|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date Fin</th>
                        <td>{{ conge.dateFin ? conge.dateFin|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Motif</th>
                        <td>{{ conge.motif }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Statut</th>
                        <td>
                            {% if conge.statut == 'Accepté' %}
                                <span class=\"badge bg-success\">Accepté</span>
                            {% elseif conge.statut == 'Refusé' %}
                                <span class=\"badge bg-danger\">Refusé</span>
                            {% else %}
                                <span class=\"badge bg-warning text-dark\">En attente</span>
                            {% endif %}
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class=\"mt-4 d-flex justify-content-between\">
                <a href=\"{{ path('app_conge_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                </a>

                <div>
                    <a href=\"{{ path('app_conge_edit', {'id_conge': conge.id_conge}) }}\" class=\"btn btn-primary me-2\">
                        <i class=\"bi bi-pencil-square\"></i> Modifier
                    </a>
                    {{ include('conge/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "conge/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\conge\\show.html.twig");
    }
}

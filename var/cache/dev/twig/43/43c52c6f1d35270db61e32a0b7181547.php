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

/* assurance/show.html.twig */
class __TwigTemplate_e6aa33bdddf45bccd54db0bf51f7e1a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assurance/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assurance/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "assurance/show.html.twig", 1);
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

        yield "Détail de l'Assurance";
        
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
    <h1 class=\"text-center text-primary mb-4\">📄 Détails de l'Assurance</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 13, $this->source); })()), "idA", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date d'expiration</th>
                <td>
                    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 26, $this->source); })()), "dateExpiration", [], "any", false, false, false, 26)) {
            // line 27
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 27, $this->source); })()), "dateExpiration", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true);
            yield "
                        ";
            // line 28
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 28, $this->source); })()), "dateExpiration", [], "any", false, false, false, 28) < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) {
                // line 29
                yield "                            <span class=\"badge bg-danger ms-2\">⛔ Expirée</span>
                        ";
            } else {
                // line 31
                yield "                            <span class=\"badge bg-success ms-2\">✔️ Active</span>
                        ";
            }
            // line 33
            yield "                    ";
        } else {
            // line 34
            yield "                        <span class=\"text-muted\">Non spécifiée</span>
                    ";
        }
        // line 36
        yield "                </td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_assurance");
        yield "\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
        <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_assurance_edit", ["idA" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["assurance"]) || array_key_exists("assurance", $context) ? $context["assurance"] : (function () { throw new RuntimeError('Variable "assurance" does not exist.', 49, $this->source); })()), "idA", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            ✏️ Modifier
        </a>
    </div>

    ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "assurance/_delete_form.html.twig");
        yield "
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
        return "assurance/show.html.twig";
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
        return array (  186 => 54,  178 => 49,  172 => 46,  161 => 40,  155 => 36,  151 => 34,  148 => 33,  144 => 31,  140 => 29,  138 => 28,  133 => 27,  131 => 26,  123 => 21,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détail de l'Assurance{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <h1 class=\"text-center text-primary mb-4\">📄 Détails de l'Assurance</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ assurance.idA }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ assurance.nom }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ assurance.type }}</td>
            </tr>
            <tr>
                <th>Date d'expiration</th>
                <td>
                    {% if assurance.dateExpiration %}
                        {{ assurance.dateExpiration|date('Y-m-d') }}
                        {% if assurance.dateExpiration < \"now\"|date(\"Y-m-d\") %}
                            <span class=\"badge bg-danger ms-2\">⛔ Expirée</span>
                        {% else %}
                            <span class=\"badge bg-success ms-2\">✔️ Active</span>
                        {% endif %}
                    {% else %}
                        <span class=\"text-muted\">Non spécifiée</span>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>{{ assurance.user.nom }} {{ assurance.user.prenom }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        <a href=\"{{ path('app_recherche_assurance') }}\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
        <a href=\"{{ path('app_assurance_edit', {'idA': assurance.idA}) }}\" class=\"btn btn-primary\">
            ✏️ Modifier
        </a>
    </div>

    {{ include('assurance/_delete_form.html.twig') }}
</div>
{% endblock %}
", "assurance/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\assurance\\show.html.twig");
    }
}

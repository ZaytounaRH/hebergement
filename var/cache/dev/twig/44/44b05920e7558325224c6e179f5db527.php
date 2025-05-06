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

/* presence/show.html.twig */
class __TwigTemplate_70793780af283b8d8ecdd0e3a6f6fdc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presence/show.html.twig", 1);
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

        yield "Détail de la Présence";
        
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
    <h1 class=\"text-center text-primary mb-4\">📋 Détails de la Présence</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 13, $this->source); })()), "idPresence", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 17
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Heure d'arrivée</th>
                <td>";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 21, $this->source); })()), "heureArrive", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 21, $this->source); })()), "heureArrive", [], "any", false, false, false, 21), "H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Heure de départ</th>
                <td>
                    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 26, $this->source); })()), "heureDepart", [], "any", false, false, false, 26)) {
            // line 27
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["presence"]) || array_key_exists("presence", $context) ? $context["presence"] : (function () { throw new RuntimeError('Variable "presence" does not exist.', 27, $this->source); })()), "heureDepart", [], "any", false, false, false, 27), "H:i:s"), "html", null, true);
            yield "
                        <span class=\"badge bg-success ms-2\">✔️ enregistré</span>
                    ";
        } else {
            // line 30
            yield "                        <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                    ";
        }
        // line 32
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_index");
        yield "\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
    </div>

    ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "presence/_delete_form.html.twig");
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
        return "presence/show.html.twig";
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
        return array (  161 => 44,  153 => 39,  144 => 32,  140 => 30,  133 => 27,  131 => 26,  123 => 21,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail de la Présence{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center text-primary mb-4\">📋 Détails de la Présence</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ presence.idPresence }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ presence.date ? presence.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Heure d'arrivée</th>
                <td>{{ presence.heureArrive ? presence.heureArrive|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Heure de départ</th>
                <td>
                    {% if presence.heureDepart %}
                        {{ presence.heureDepart|date('H:i:s') }}
                        <span class=\"badge bg-success ms-2\">✔️ enregistré</span>
                    {% else %}
                        <span class=\"badge bg-warning text-dark\">⏳ En attente</span>
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        
        <a href=\"{{ path('app_presence_index') }}\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
    </div>

    {{ include('presence/_delete_form.html.twig') }}

</div>
{% endblock %}", "presence/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\presence\\show.html.twig");
    }
}

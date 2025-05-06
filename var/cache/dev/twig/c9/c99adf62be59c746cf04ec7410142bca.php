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

/* conge/backindex.html.twig */
class __TwigTemplate_4133065494744891b680d883feeca6e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/backindex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/backindex.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "conge/backindex.html.twig", 1);
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

        yield "Liste des Congés";
        
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
    <h1 class=\"mb-4 text-center text-primary\">Liste des Congés</h1>

    <div class=\"d-flex justify-content-end mb-3\">
        
    </div>
<div class=\"d-flex justify-content-end mb-3\">
    
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_pdf");
        yield "\" class=\"btn btn-outline-danger\">
        📄 Télécharger PDF
    </a>
</div>
    <table class=\"table table-hover table-bordered shadow-sm\">
        <thead class=\"table-dark\">
            <tr class=\"text-center\">
                <th>Date début</th>
                <th>Date fin</th>
                <th>Motif</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
            // line 30
            yield "            <tr class=\"text-center align-middle\">
                <td>";
            // line 31
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateDebut", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateDebut", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 32
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateFin", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateFin", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "motif", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>
    ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 35) == "EN_ATTENTE")) {
                // line 36
                yield "        <span class=\"badge bg-warning text-dark\">En attente</span>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["conge"], "statut", [], "any", false, false, false, 37) == "ACCEPTE")) {
                // line 38
                yield "        <span class=\"badge bg-success\">Accepté</span>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 39
$context["conge"], "statut", [], "any", false, false, false, 39) == "REFUSE")) {
                // line 40
                yield "        <span class=\"badge bg-danger\">Refusé</span>
    ";
            } else {
                // line 42
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 42), "html", null, true);
                yield "
    ";
            }
            // line 44
            yield "</td>

                <td>
                    <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_show", ["id_conge" => CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "id_conge", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1\">
                        Voir
                    </a>
                    
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "            <tr>
                <td colspan=\"6\" class=\"text-center text-muted\">Aucun congé trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conge'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "        </tbody>
    </table>
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
        return "conge/backindex.html.twig";
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
        return array (  198 => 58,  189 => 54,  187 => 53,  176 => 47,  171 => 44,  165 => 42,  161 => 40,  159 => 39,  156 => 38,  154 => 37,  151 => 36,  149 => 35,  144 => 33,  140 => 32,  136 => 31,  133 => 30,  128 => 29,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Congés{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center text-primary\">Liste des Congés</h1>

    <div class=\"d-flex justify-content-end mb-3\">
        
    </div>
<div class=\"d-flex justify-content-end mb-3\">
    
    <a href=\"{{ path('app_conge_pdf') }}\" class=\"btn btn-outline-danger\">
        📄 Télécharger PDF
    </a>
</div>
    <table class=\"table table-hover table-bordered shadow-sm\">
        <thead class=\"table-dark\">
            <tr class=\"text-center\">
                <th>Date début</th>
                <th>Date fin</th>
                <th>Motif</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for conge in conges %}
            <tr class=\"text-center align-middle\">
                <td>{{ conge.dateDebut ? conge.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ conge.dateFin ? conge.dateFin|date('Y-m-d') : '' }}</td>
                <td>{{ conge.motif }}</td>
                <td>
    {% if conge.statut == 'EN_ATTENTE' %}
        <span class=\"badge bg-warning text-dark\">En attente</span>
    {% elseif conge.statut == 'ACCEPTE' %}
        <span class=\"badge bg-success\">Accepté</span>
    {% elseif conge.statut == 'REFUSE' %}
        <span class=\"badge bg-danger\">Refusé</span>
    {% else %}
        {{ conge.statut }}
    {% endif %}
</td>

                <td>
                    <a href=\"{{ path('app_conge_show', {'id_conge': conge.id_conge}) }}\" class=\"btn btn-sm btn-primary me-1\">
                        Voir
                    </a>
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\" class=\"text-center text-muted\">Aucun congé trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}", "conge/backindex.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\conge\\backindex.html.twig");
    }
}

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

/* reclamation/show.html.twig */
class __TwigTemplate_c4893cb9439f43016823eeee9642a3ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/show.html.twig", 1);
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

        yield "Détail de la Réclamation";
        
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
    <h1 class=\"text-center text-primary mb-4\">📨 Détails de la Réclamation</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 13, $this->source); })()), "idR", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Type d'incident</th>
                <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 25, $this->source); })()), "incidentType", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date de soumission</th>
                <td>";
        // line 29
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 29, $this->source); })()), "dateSoumission", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 29, $this->source); })()), "dateSoumission", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true)) : ("Non spécifiée"));
        yield "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>
                    ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 34, $this->source); })()), "statut", [], "any", false, false, false, 34), "html", null, true);
        yield "
                    ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 35, $this->source); })()), "statut", [], "any", false, false, false, 35) == "EN_ATTENTE")) {
            // line 36
            yield "                        <span class=\"badge bg-warning text-dark ms-2\">⏳ En attente</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 37, $this->source); })()), "statut", [], "any", false, false, false, 37) == "TRAITEE")) {
            // line 38
            yield "                        <span class=\"badge bg-success ms-2\">✔️ Traitée</span>
                    ";
        }
        // line 40
        yield "                </td>
            </tr>
            <tr>
                <th>Priorité</th>
                <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 44, $this->source); })()), "priorite", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Assurance liée</th>
                <td>";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "assurance", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 48, $this->source); })()), "assurance", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true)) : ("Aucune"));
        yield "</td>
            </tr>
            <tr>
            <th>Réponse(s)</th>
            <td>
                ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 53, $this->source); })()), "reponses", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                    <ul>
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 55, $this->source); })()), "reponses", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 56
                yield "                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenu", [], "any", false, false, false, 56), "html", null, true);
                yield " <br><small class=\"text-muted\">(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateRep", [], "any", false, false, false, 56), "Y-m-d H:i"), "html", null, true);
                yield ")</small></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                    </ul>
                ";
        } else {
            // line 60
            yield "                    <em>Aucune réponse pour le moment.</em>
                ";
        }
        // line 62
        yield "            </td>
        </tr>

        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
        <a href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idR" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 72, $this->source); })()), "idR", [], "any", false, false, false, 72)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
            ✏️ Modifier
        </a>
    </div>

    ";
        // line 77
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/_delete_form.html.twig");
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
        return "reclamation/show.html.twig";
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
        return array (  232 => 77,  224 => 72,  218 => 69,  209 => 62,  205 => 60,  201 => 58,  190 => 56,  186 => 55,  183 => 54,  181 => 53,  173 => 48,  166 => 44,  160 => 40,  156 => 38,  154 => 37,  151 => 36,  149 => 35,  145 => 34,  137 => 29,  130 => 25,  123 => 21,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail de la Réclamation{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center text-primary mb-4\">📨 Détails de la Réclamation</h1>

    <table class=\"table table-bordered shadow-sm\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ reclamation.idR }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ reclamation.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ reclamation.description }}</td>
            </tr>
            <tr>
                <th>Type d'incident</th>
                <td>{{ reclamation.incidentType }}</td>
            </tr>
            <tr>
                <th>Date de soumission</th>
                <td>{{ reclamation.dateSoumission ? reclamation.dateSoumission|date('Y-m-d') : 'Non spécifiée' }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>
                    {{ reclamation.statut }}
                    {% if reclamation.statut == 'EN_ATTENTE' %}
                        <span class=\"badge bg-warning text-dark ms-2\">⏳ En attente</span>
                    {% elseif reclamation.statut == 'TRAITEE' %}
                        <span class=\"badge bg-success ms-2\">✔️ Traitée</span>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Priorité</th>
                <td>{{ reclamation.priorite }}</td>
            </tr>
            <tr>
                <th>Assurance liée</th>
                <td>{{ reclamation.assurance ? reclamation.assurance.nom : 'Aucune' }}</td>
            </tr>
            <tr>
            <th>Réponse(s)</th>
            <td>
                {% if reclamation.reponses|length > 0 %}
                    <ul>
                        {% for reponse in reclamation.reponses %}
                            <li>{{ reponse.contenu }} <br><small class=\"text-muted\">({{ reponse.dateRep|date('Y-m-d H:i') }})</small></li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <em>Aucune réponse pour le moment.</em>
                {% endif %}
            </td>
        </tr>

        </tbody>
    </table>

    <div class=\"d-flex gap-2 my-4\">
        <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-outline-secondary\">
            🔙 Retour à la liste
        </a>
        <a href=\"{{ path('app_reclamation_edit', {'idR': reclamation.idR}) }}\" class=\"btn btn-primary\">
            ✏️ Modifier
        </a>
    </div>

    {{ include('reclamation/_delete_form.html.twig') }}
</div>
{% endblock %}
", "reclamation/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\reclamation\\show.html.twig");
    }
}

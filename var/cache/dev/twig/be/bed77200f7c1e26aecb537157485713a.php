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

/* presence/indexback.html.twig */
class __TwigTemplate_2d84292ba32c5a3f4226cea388841be7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/indexback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presence/indexback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "presence/indexback.html.twig", 1);
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

        yield "Liste des Présences";
        
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

    ";
        // line 9
        yield "    <div class=\"toast-container mb-4\">
        ";
        // line 10
        if (array_key_exists("retardataires", $context)) {
            // line 11
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["retardataires"]) || array_key_exists("retardataires", $context) ? $context["retardataires"] : (function () { throw new RuntimeError('Variable "retardataires" does not exist.', 11, $this->source); })()))) {
                // line 12
                yield "        <div class=\"toast align-items-center text-bg-danger border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    ⚠️ ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["retardataires"]) || array_key_exists("retardataires", $context) ? $context["retardataires"] : (function () { throw new RuntimeError('Variable "retardataires" does not exist.', 15, $this->source); })())), "html", null, true);
                yield " employé(s) avec 3 jours de retard consécutifs :
                    <ul class=\"mb-0 ms-3 mt-1\">
                        ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["retardataires"]) || array_key_exists("retardataires", $context) ? $context["retardataires"] : (function () { throw new RuntimeError('Variable "retardataires" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 18
                    yield "                            <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 18), "prenom", [], "any", false, false, false, 18), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["e"], "user", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
                    yield "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                yield "                    </ul>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 25
                yield "        <div class=\"toast align-items-center text-bg-success border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    ✅ Aucun employé avec 3 retards consécutifs
                </div>
                <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
            </div>
        </div>
    ";
            }
        } else {
            // line 35
            yield "    <div class=\"toast align-items-center text-bg-warning border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                ⚠️ Liste des retardataires non définie
            </div>
            <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
";
        }
        // line 44
        yield "
    </div>

    <h1 class=\"text-center text-primary mb-4\">Liste des Présences</h1>

    ";
        // line 50
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "employee", [], "any", false, false, false, 50))) {
            // line 51
            yield "        <div class=\"text-center mb-4\">
            <a href=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_checkin", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "employee", [], "any", false, false, false, 52), "employeeId", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"btn btn-success me-2\">
                ✅ Pointer l'arrivée
            </a>
            <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_checkout", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "employee", [], "any", false, false, false, 55), "employeeId", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">
                ❌ Pointer le départ
            </a>
        </div>
    ";
        }
        // line 60
        yield "
    ";
        // line 62
        yield "    <form method=\"get\" class=\"mb-4 d-flex align-items-center\">
        <input type=\"date\" name=\"search\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", ["search"], "method", false, false, false, 63), "html", null, true);
        yield "\" class=\"form-control me-2\" placeholder=\"Rechercher par date\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    ";
        // line 68
        yield "    <div class=\"mb-4 text-slideRightFade\">
     <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_stats");
        yield "\" class=\"btn btn-info btn-sm rounded-pill px-2 py-1 d-block text-centre\">
        📊 Voir les Stats présence
    </a>
</div>





    ";
        // line 79
        yield "    <div class=\"mb-3\">
        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_qrcode");
        yield "\" class=\"btn btn-success rounded-pill px-4 py-2\">Présences Aujourd'hui</a>
    </div>

    ";
        // line 84
        yield "    <div class=\"mb-3\">
        <a href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "query", [], "any", false, false, false, 85), "all", [], "any", false, false, false, 85), ["sort" => "date", "direction" => ((((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 85, $this->source); })()) == "asc")) ? ("desc") : ("asc"))])), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
            Trier par date ";
        // line 86
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 86, $this->source); })()) == "date")) {
            // line 87
            yield "                ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 87, $this->source); })()) == "asc")) {
                yield "🔼";
            } else {
                yield "🔽";
            }
            // line 88
            yield "            ";
        }
        // line 89
        yield "        </a>
    </div>

    ";
        // line 93
        yield "    <div class=\"table-responsive shadow-sm rounded-3\">
        <table class=\"table table-striped table-hover\">
            <thead class=\"table-secondary\">
                <tr class=\"text-center\">
                    <th>Date</th>
                    <th>Heure d'arrivée</th>
                    <th>Heure de départ</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["presences"]) || array_key_exists("presences", $context) ? $context["presences"] : (function () { throw new RuntimeError('Variable "presences" does not exist.', 104, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["presence"]) {
            // line 105
            yield "                    <tr class=\"text-center\">
                        <td>";
            // line 106
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "date", [], "any", false, false, false, 106)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "date", [], "any", false, false, false, 106), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 107
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureArrive", [], "any", false, false, false, 107)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureArrive", [], "any", false, false, false, 107), "H:i"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 108
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureDepart", [], "any", false, false, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "heureDepart", [], "any", false, false, false, 108), "H:i"), "html", null, true)) : ("-"));
            yield "</td>
                        <td>
                            <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presence_show", ["id_presence" => CoreExtension::getAttribute($this->env, $this->source, $context["presence"], "idPresence", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                Voir
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 115
        if (!$context['_iterated']) {
            // line 116
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted\">Aucune présence trouvée</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['presence'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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
        return "presence/indexback.html.twig";
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
        return array (  310 => 120,  301 => 116,  299 => 115,  289 => 110,  284 => 108,  280 => 107,  276 => 106,  273 => 105,  268 => 104,  255 => 93,  250 => 89,  247 => 88,  240 => 87,  238 => 86,  234 => 85,  231 => 84,  225 => 80,  222 => 79,  210 => 69,  207 => 68,  200 => 63,  197 => 62,  194 => 60,  186 => 55,  180 => 52,  177 => 51,  174 => 50,  167 => 44,  156 => 35,  144 => 25,  137 => 20,  126 => 18,  122 => 17,  117 => 15,  112 => 12,  109 => 11,  107 => 10,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Présences{% endblock %}

{% block content %}
<div class=\"container mt-5\">

    {# ✅ TOAST Retardataires - Correction #}
    <div class=\"toast-container mb-4\">
        {% if retardataires is defined %}
    {% if retardataires is not empty %}
        <div class=\"toast align-items-center text-bg-danger border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    ⚠️ {{ retardataires|length }} employé(s) avec 3 jours de retard consécutifs :
                    <ul class=\"mb-0 ms-3 mt-1\">
                        {% for e in retardataires %}
                            <li>{{ e.user.prenom }} {{ e.user.nom }}</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"toast align-items-center text-bg-success border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"d-flex\">
                <div class=\"toast-body\">
                    ✅ Aucun employé avec 3 retards consécutifs
                </div>
                <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
            </div>
        </div>
    {% endif %}
{% else %}
    <div class=\"toast align-items-center text-bg-warning border-0 show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
        <div class=\"d-flex\">
            <div class=\"toast-body\">
                ⚠️ Liste des retardataires non définie
            </div>
            <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
        </div>
    </div>
{% endif %}

    </div>

    <h1 class=\"text-center text-primary mb-4\">Liste des Présences</h1>

    {# ✅ Boutons pour pointer arrivée/départ #}
    {% if app.user and app.user.employee %}
        <div class=\"text-center mb-4\">
            <a href=\"{{ path('app_presence_checkin', { id: app.user.employee.employeeId }) }}\" class=\"btn btn-success me-2\">
                ✅ Pointer l'arrivée
            </a>
            <a href=\"{{ path('app_presence_checkout', { id: app.user.employee.employeeId }) }}\" class=\"btn btn-danger\">
                ❌ Pointer le départ
            </a>
        </div>
    {% endif %}

    {# ✅ Recherche par date #}
    <form method=\"get\" class=\"mb-4 d-flex align-items-center\">
        <input type=\"date\" name=\"search\" value=\"{{ app.request.get('search') }}\" class=\"form-control me-2\" placeholder=\"Rechercher par date\">
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    {# ✅ Bouton Stats à gauche, sous la recherche #}
    <div class=\"mb-4 text-slideRightFade\">
     <a href=\"{{ path('app_presence_stats') }}\" class=\"btn btn-info btn-sm rounded-pill px-2 py-1 d-block text-centre\">
        📊 Voir les Stats présence
    </a>
</div>





    {# ✅ Lien Présences Aujourd'hui #}
    <div class=\"mb-3\">
        <a href=\"{{ path('app_presence_qrcode') }}\" class=\"btn btn-success rounded-pill px-4 py-2\">Présences Aujourd'hui</a>
    </div>

    {# ✅ Trier par date #}
    <div class=\"mb-3\">
        <a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all|merge({'sort': 'date', 'direction': direction == 'asc' ? 'desc' : 'asc'})) }}\" class=\"btn btn-outline-secondary\">
            Trier par date {% if sort == 'date' %}
                {% if direction == 'asc' %}🔼{% else %}🔽{% endif %}
            {% endif %}
        </a>
    </div>

    {# ✅ Tableau des présences #}
    <div class=\"table-responsive shadow-sm rounded-3\">
        <table class=\"table table-striped table-hover\">
            <thead class=\"table-secondary\">
                <tr class=\"text-center\">
                    <th>Date</th>
                    <th>Heure d'arrivée</th>
                    <th>Heure de départ</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for presence in presences %}
                    <tr class=\"text-center\">
                        <td>{{ presence.date ? presence.date|date('Y-m-d') : '' }}</td>
                        <td>{{ presence.heureArrive ? presence.heureArrive|date('H:i') : '' }}</td>
                        <td>{{ presence.heureDepart ? presence.heureDepart|date('H:i') : '-' }}</td>
                        <td>
                            <a href=\"{{ path('app_presence_show', {'id_presence': presence.idPresence}) }}\" class=\"btn btn-outline-primary btn-sm\">
                                Voir
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center text-muted\">Aucune présence trouvée</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

</div>
{% endblock %}
", "presence/indexback.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\presence\\indexback.html.twig");
    }
}

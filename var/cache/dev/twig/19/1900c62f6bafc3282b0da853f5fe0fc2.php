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

/* formation/show.html.twig */
class __TwigTemplate_c49474a7b9456584feb9b518bd4e2f88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "formation/show.html.twig", 1);
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

        yield "Détail de la Formation";
        
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
                    <h5 class=\"m-b-10\">Détail de la Formation</h5>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\">Formations</a></li>
                    <li class=\"breadcrumb-item active\">Détail</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 27, $this->source); })()), "nomFormation", [], "any", false, false, false, 27), "html", null, true);
        yield "</h5>
    </div>
    <div class=\"card-block\">
        <div class=\"row mb-3\">
            <div class=\"col-md-4\">
                <strong>🗒️Description :</strong><br>
                <p>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 33, $this->source); })()), "descriptionFormation", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
            </div>
            <div class=\"col-md-4\">
                <strong>📆 Date de début :</strong><br>
                <p>";
        // line 37
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "dateDebutFormation", [], "any", false, false, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "dateDebutFormation", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true)) : ("—"));
        yield "</p>
            </div>
            <div class=\"col-md-4\">
                <strong>📆 Date de fin :</strong><br>
                <p>";
        // line 41
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 41, $this->source); })()), "dateFinFormation", [], "any", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 41, $this->source); })()), "dateFinFormation", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true)) : ("—"));
        yield "</p>
            </div>
            <div class=\"row\">
    <div class=\"col-md-12\">
        <h6 class=\"mt-4\">👥 Employés inscrits :</h6>
        ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 46, $this->source); })()), "employees", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            yield "            <ul class=\"list-group list-group-flush\">
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 48, $this->source); })()), "employees", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 49
                yield "                    <li class=\"list-group-item\">
                        ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "user", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
                yield "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['employee'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            </ul>
        ";
        } else {
            // line 55
            yield "            <div class=\"alert alert-info mt-2\">
                Aucun employé n'est encore inscrit à cette formation.
            </div>
        ";
        }
        // line 59
        yield "    </div>
</div>

        </div>

        <div class=\"text-end\">
            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
            <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_edit", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 68, $this->source); })()), "idFormation", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fa fa-edit\"></i> Modifier
            </a>
            ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "formation/_delete_form.html.twig");
        yield "
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
        return "formation/show.html.twig";
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
        return array (  213 => 71,  207 => 68,  201 => 65,  193 => 59,  187 => 55,  183 => 53,  172 => 50,  169 => 49,  165 => 48,  162 => 47,  160 => 46,  152 => 41,  145 => 37,  138 => 33,  129 => 27,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détail de la Formation{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Détail de la Formation</h5>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_formation_index') }}\">Formations</a></li>
                    <li class=\"breadcrumb-item active\">Détail</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">{{ formation.nomFormation }}</h5>
    </div>
    <div class=\"card-block\">
        <div class=\"row mb-3\">
            <div class=\"col-md-4\">
                <strong>🗒️Description :</strong><br>
                <p>{{ formation.descriptionFormation }}</p>
            </div>
            <div class=\"col-md-4\">
                <strong>📆 Date de début :</strong><br>
                <p>{{ formation.dateDebutFormation ? formation.dateDebutFormation|date('d/m/Y') : '—' }}</p>
            </div>
            <div class=\"col-md-4\">
                <strong>📆 Date de fin :</strong><br>
                <p>{{ formation.dateFinFormation ? formation.dateFinFormation|date('d/m/Y') : '—' }}</p>
            </div>
            <div class=\"row\">
    <div class=\"col-md-12\">
        <h6 class=\"mt-4\">👥 Employés inscrits :</h6>
        {% if formation.employees|length > 0 %}
            <ul class=\"list-group list-group-flush\">
                {% for employee in formation.employees %}
                    <li class=\"list-group-item\">
                        {{ employee.user.nom }} {{ employee.user.prenom }}
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <div class=\"alert alert-info mt-2\">
                Aucun employé n'est encore inscrit à cette formation.
            </div>
        {% endif %}
    </div>
</div>

        </div>

        <div class=\"text-end\">
            <a href=\"{{ path('app_formation_index') }}\" class=\"btn btn-secondary btn-sm\">
                <i class=\"fa fa-arrow-left\"></i> Retour
            </a>
            <a href=\"{{ path('app_formation_edit', {'idFormation': formation.idFormation}) }}\" class=\"btn btn-primary btn-sm\">
                <i class=\"fa fa-edit\"></i> Modifier
            </a>
            {{ include('formation/_delete_form.html.twig') }}
        </div>
    </div>
</div>
{% endblock %}
", "formation/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\show.html.twig");
    }
}

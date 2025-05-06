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

/* formation/index.html.twig */
class __TwigTemplate_f370af44e4d088c2f9c6c8fdabff4639 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "formation/index.html.twig", 1);
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

        yield "Liste des Formations";
        
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
                    <h5 class=\"m-b-10\">Gestion des Formations</h5>
                </div>
                <ul class=\"breadcrumb\">
                
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Formations</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Table Card Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Formations</h5>
        <div class=\"card-header-right\">
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_new");
        yield "\" class=\"btn btn-sm btn-primary\">+ Ajouter une formation </a>
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_stats_view");
        yield "\">📊 Statistiques</a>
<a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_export_excel");
        yield "\" class=\"btn btn-sm btn-outline-success\">
    📥 Exporter Excel
</a>

             <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" id=\"filterDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Filtrer
</button>
<ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"filterDropdown\">
    <li><a class=\"dropdown-item\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index", ["order" => "asc"]);
        yield "\">
        <i class=\"fa fa-arrow-up me-1\"></i> Date ascendante
    </a></li>
    <li><a class=\"dropdown-item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index", ["order" => "desc"]);
        yield "\">
        <i class=\"fa fa-arrow-down me-1\"></i> Date descendante
    </a></li>
</ul>



        </div>
    </div>
    <div class=\"card-block table-border-style\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 65
            yield "                        <tr>
                            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "descriptionFormation", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                            <td>";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true)) : ("—"));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\">Détails</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucune formation trouvée.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table Card End -->
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
        return "formation/index.html.twig";
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
        return array (  218 => 78,  209 => 74,  207 => 73,  199 => 70,  194 => 68,  190 => 67,  186 => 66,  183 => 65,  178 => 64,  154 => 43,  148 => 40,  137 => 32,  133 => 31,  129 => 30,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Formations{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Formations</h5>
                </div>
                <ul class=\"breadcrumb\">
                
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Formations</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Table Card Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Formations</h5>
        <div class=\"card-header-right\">
            <a href=\"{{ path('app_formation_new')}}\" class=\"btn btn-sm btn-primary\">+ Ajouter une formation </a>
            <a href=\"{{ path('app_formation_stats_view') }}\">📊 Statistiques</a>
<a href=\"{{ path('app_formation_export_excel') }}\" class=\"btn btn-sm btn-outline-success\">
    📥 Exporter Excel
</a>

             <button class=\"btn btn-sm btn-outline-secondary dropdown-toggle\" type=\"button\" id=\"filterDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Filtrer
</button>
<ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"filterDropdown\">
    <li><a class=\"dropdown-item\" href=\"{{ path('app_formation_index', {'order': 'asc'}) }}\">
        <i class=\"fa fa-arrow-up me-1\"></i> Date ascendante
    </a></li>
    <li><a class=\"dropdown-item\" href=\"{{ path('app_formation_index', {'order': 'desc'}) }}\">
        <i class=\"fa fa-arrow-down me-1\"></i> Date descendante
    </a></li>
</ul>



        </div>
    </div>
    <div class=\"card-block table-border-style\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for formation in formations %}
                        <tr>
                            <td>{{ formation.nomFormation }}</td>
                            <td>{{ formation.descriptionFormation }}</td>
                            <td>{{ formation.dateDebutFormation ? formation.dateDebutFormation|date('Y-m-d') : '—' }}</td>
                            <td>
                                <a href=\"{{ path('app_formation_show', {'idFormation': formation.idFormation}) }}\" class=\"btn btn-sm btn-outline-info\">Détails</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center text-muted\">Aucune formation trouvée.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table Card End -->
{% endblock %}
", "formation/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\index.html.twig");
    }
}

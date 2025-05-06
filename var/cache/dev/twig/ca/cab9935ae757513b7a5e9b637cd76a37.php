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

/* certification/index.html.twig */
class __TwigTemplate_08987c77588e4657066243dcd94e8e3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "certification/index.html.twig", 1);
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

        yield "Liste des Certifications";
        
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
                    <h5 class=\"m-b-10\">Gestion des Certifications</h5>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Certifications</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Table Card Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Certifications</h5>
        <div class=\"card-header-right\">
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_new");
        yield "\" class=\"btn btn-sm btn-primary\">
                <i class=\"fa fa-plus\"></i> Ajouter
            </a>
        </div>
    </div>
    <div class=\"card-block table-border-style\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Titre</th>
                        <th>Organisme</th>
                        <th>Formation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 47
            yield "                        <tr>
                            <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "titreCertif", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "organismeCertif", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                            <td>
                ";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "formation", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "formation", [], "any", false, false, false, 51), "nomFormation", [], "any", false, false, false, 51), "html", null, true)) : ("—"));
            yield "
            </td>
                            <td>
                                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_show", ["idCertif" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "idCertif", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\">Détails</a>
                                <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_edit", ["idCertif" => CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "idCertif", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\">Modifier</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center text-muted\">Aucune certification trouvée.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['certification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return "certification/index.html.twig";
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
        return array (  194 => 63,  185 => 59,  183 => 58,  175 => 55,  171 => 54,  165 => 51,  160 => 49,  156 => 48,  153 => 47,  148 => 46,  128 => 29,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Certifications{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Certifications</h5>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"#!\">Certifications</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Table Card Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Certifications</h5>
        <div class=\"card-header-right\">
            <a href=\"{{ path('app_certification_new') }}\" class=\"btn btn-sm btn-primary\">
                <i class=\"fa fa-plus\"></i> Ajouter
            </a>
        </div>
    </div>
    <div class=\"card-block table-border-style\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead class=\"thead-light\">
                    <tr>
                        <th>Titre</th>
                        <th>Organisme</th>
                        <th>Formation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for certification in certifications %}
                        <tr>
                            <td>{{ certification.titreCertif }}</td>
                            <td>{{ certification.organismeCertif }}</td>
                            <td>
                {{ certification.formation ? certification.formation.nomFormation : '—' }}
            </td>
                            <td>
                                <a href=\"{{ path('app_certification_show', {'idCertif': certification.idCertif}) }}\" class=\"btn btn-sm btn-outline-info\">Détails</a>
                                <a href=\"{{ path('app_certification_edit', {'idCertif': certification.idCertif}) }}\" class=\"btn btn-sm btn-outline-warning\">Modifier</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-center text-muted\">Aucune certification trouvée.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table Card End -->
{% endblock %}
", "certification/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\certification\\index.html.twig");
    }
}

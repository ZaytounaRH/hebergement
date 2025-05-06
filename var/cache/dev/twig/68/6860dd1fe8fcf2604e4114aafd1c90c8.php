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

/* commande/index.html.twig */
class __TwigTemplate_0d27080f6287fbddcacba0e7bb285c29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "commande/index.html.twig", 1);
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

        yield "Liste des Commandes";
        
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
                    <h5 class=\"m-b-10\">Gestion des Commandes</h5>
                    <p class=\"m-b-0\">Consultez, modifiez ou téléchargez les détails des commandes</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Commandes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Liste des Commandes</h5>
        <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_new");
        yield "\" class=\"btn btn-success btn-sm\">
            <i class=\"fa fa-plus\"></i> Nouvelle Commande
        </a>
    </div>

    <div class=\"card-block table-responsive\">
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Quantité</th>
                    <th>Statut</th>
                    <th>Fournisseur</th>
                    <th>Description</th>
                    <th>Prix (DT)</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 49
            yield "                    <tr>
                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                        <td>";
            // line 51
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "dateCommande", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                        <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statutCommande", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                        <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "fournisseur", [], "any", false, false, false, 54), "nomFournisseur", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "description", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                        <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixCommande", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\" title=\"Télécharger PDF\">
                                    <i class=\"fa fa-file-pdf-o\"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 71
        if (!$context['_iterated']) {
            // line 72
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return "commande/index.html.twig";
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
        return array (  222 => 76,  213 => 72,  211 => 71,  200 => 65,  194 => 62,  188 => 59,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  155 => 49,  150 => 48,  127 => 28,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Commandes{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Gestion des Commandes</h5>
                    <p class=\"m-b-0\">Consultez, modifiez ou téléchargez les détails des commandes</p>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item active\">Commandes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header d-flex justify-content-between align-items-center\">
        <h5 class=\"mb-0\">Liste des Commandes</h5>
        <a href=\"{{ path('back_commande_new') }}\" class=\"btn btn-success btn-sm\">
            <i class=\"fa fa-plus\"></i> Nouvelle Commande
        </a>
    </div>

    <div class=\"card-block table-responsive\">
        <table class=\"table table-hover\">
            <thead class=\"table-light\">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Quantité</th>
                    <th>Statut</th>
                    <th>Fournisseur</th>
                    <th>Description</th>
                    <th>Prix (DT)</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for commande in commandes %}
                    <tr>
                        <td>{{ commande.id }}</td>
                        <td>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d') : '' }}</td>
                        <td>{{ commande.quantite }}</td>
                        <td>{{ commande.statutCommande }}</td>
                        <td>{{ commande.fournisseur.nomFournisseur }}</td>
                        <td>{{ commande.description }}</td>
                        <td>{{ commande.prixCommande }}</td>
                        <td class=\"text-center\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <a href=\"{{ path('back_commande_show', {'id': commande.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('back_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-outline-warning\" title=\"Modifier\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                <a href=\"{{ path('back_commande_pdf', {'id': commande.id}) }}\" class=\"btn btn-outline-primary\" title=\"Télécharger PDF\">
                                    <i class=\"fa fa-file-pdf-o\"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "commande/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\commande\\index.html.twig");
    }
}

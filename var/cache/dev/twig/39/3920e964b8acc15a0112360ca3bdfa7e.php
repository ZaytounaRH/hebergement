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

/* fournisseur/index.html.twig */
class __TwigTemplate_07e482c6e9ba8dbf83d40e2e65521c0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "fournisseur/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <h4 class=\"mb-4\">Liste des fournisseurs</h4>
    
    <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_new");
        yield "\" class=\"btn btn-primary mb-3\">Ajouter un fournisseur</a>
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_index");
        yield "?download=pdf\" class=\"btn btn-secondary mb-3\">Télécharger la liste en PDF</a>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Fournisseur</th>
                <th>Adresse</th>
                <th>Contact</th>
                <th>Type de Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fournisseurs"]) || array_key_exists("fournisseurs", $context) ? $context["fournisseurs"] : (function () { throw new RuntimeError('Variable "fournisseurs" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 22
            yield "                <tr>
                    <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "nomFournisseur", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "adresse", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "contact", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "typeService", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        <form action=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_fournisseur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fournisseur"], "id", [], "any", false, false, false, 32))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 38
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center\">Aucun fournisseur trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
    </table>
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
        return "fournisseur/index.html.twig";
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
        return array (  163 => 42,  154 => 38,  152 => 37,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  125 => 27,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  106 => 22,  101 => 21,  84 => 7,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block content %}
    <h4 class=\"mb-4\">Liste des fournisseurs</h4>
    
    <a href=\"{{ path('back_fournisseur_new') }}\" class=\"btn btn-primary mb-3\">Ajouter un fournisseur</a>
    <a href=\"{{ path('back_fournisseur_index') }}?download=pdf\" class=\"btn btn-secondary mb-3\">Télécharger la liste en PDF</a>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Fournisseur</th>
                <th>Adresse</th>
                <th>Contact</th>
                <th>Type de Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for fournisseur in fournisseurs %}
                <tr>
                    <td>{{ fournisseur.id }}</td>
                    <td>{{ fournisseur.nomFournisseur }}</td>
                    <td>{{ fournisseur.adresse }}</td>
                    <td>{{ fournisseur.contact }}</td>
                    <td>{{ fournisseur.typeService }}</td>
                    <td>
                        <a href=\"{{ path('back_fournisseur_show', {'id': fournisseur.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                        <a href=\"{{ path('back_fournisseur_edit', {'id': fournisseur.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        <form action=\"{{ path('back_fournisseur_delete', {'id': fournisseur.id}) }}\" method=\"POST\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?')\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\" class=\"text-center\">Aucun fournisseur trouvé.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "fournisseur/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\fournisseur\\index.html.twig");
    }
}

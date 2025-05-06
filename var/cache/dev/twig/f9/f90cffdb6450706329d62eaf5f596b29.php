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

/* entretien/mes_entretiens.html.twig */
class __TwigTemplate_20a36ea1350ac644920bf06af67c8151 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/mes_entretiens.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/mes_entretiens.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/mes_entretiens.html.twig", 1);
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

        yield "Mes entretiens";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-5 text-primary font-weight-bold\">Mes Entretiens</h1>

        ";
        // line 9
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["entretiens"]) || array_key_exists("entretiens", $context) ? $context["entretiens"] : (function () { throw new RuntimeError('Variable "entretiens" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"list-group\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entretiens"]) || array_key_exists("entretiens", $context) ? $context["entretiens"] : (function () { throw new RuntimeError('Variable "entretiens" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entretien"]) {
                // line 12
                yield "                    <div class=\"list-group-item mb-4 p-4 border rounded-lg shadow-sm\">
                        <h5 class=\"mb-3 font-weight-bold text-dark\">";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "offreemploi", [], "any", false, false, false, 13), "titreOffre", [], "any", false, false, false, 13), "html", null, true);
                yield "</h5>
                        <p><strong>Date :</strong> <span class=\"text-muted\">";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "dateEntretien", [], "any", false, false, false, 14), "d/m/Y H:i"), "html", null, true);
                yield "</span></p>
                        <p><strong>Statut :</strong> 
                            <span class=\"badge 
                                ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "statut", [], "any", false, false, false, 17) == "Confirmé")) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "statut", [], "any", false, false, false, 17) == "En attente")) {
                    yield "bg-warning";
                } else {
                    yield "bg-danger";
                }
                // line 18
                yield "                            \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "statut", [], "any", false, false, false, 18), "html", null, true);
                yield "</span>
                        </p>
                        <p><strong>Type :</strong> <span class=\"text-muted\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entretien"], "typeEntretien", [], "any", false, false, false, 20), "html", null, true);
                yield "</span></p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['entretien'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "            </div>
        ";
        } else {
            // line 25
            yield "            <div class=\"alert alert-info text-center rounded-lg shadow-sm\">
                Aucun entretien trouvé.
            </div>
        ";
        }
        // line 29
        yield "
        <!-- Bouton retour -->
        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidats");
        yield "\" class=\"btn btn-secondary\">
    <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
  </a>
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
        return "entretien/mes_entretiens.html.twig";
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
        return array (  164 => 31,  160 => 29,  154 => 25,  150 => 23,  141 => 20,  135 => 18,  127 => 17,  121 => 14,  117 => 13,  114 => 12,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes entretiens{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-5 text-primary font-weight-bold\">Mes Entretiens</h1>

        {% if entretiens is not empty %}
            <div class=\"list-group\">
                {% for entretien in entretiens %}
                    <div class=\"list-group-item mb-4 p-4 border rounded-lg shadow-sm\">
                        <h5 class=\"mb-3 font-weight-bold text-dark\">{{ entretien.offreemploi.titreOffre }}</h5>
                        <p><strong>Date :</strong> <span class=\"text-muted\">{{ entretien.dateEntretien|date('d/m/Y H:i') }}</span></p>
                        <p><strong>Statut :</strong> 
                            <span class=\"badge 
                                {% if entretien.statut == 'Confirmé' %}bg-success{% elseif entretien.statut == 'En attente' %}bg-warning{% else %}bg-danger{% endif %}
                            \">{{ entretien.statut }}</span>
                        </p>
                        <p><strong>Type :</strong> <span class=\"text-muted\">{{ entretien.typeEntretien }}</span></p>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"alert alert-info text-center rounded-lg shadow-sm\">
                Aucun entretien trouvé.
            </div>
        {% endif %}

        <!-- Bouton retour -->
        <a href=\"{{ path('app_candidats') }}\" class=\"btn btn-secondary\">
    <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
  </a>
    </div>
{%endblock%}", "entretien/mes_entretiens.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\mes_entretiens.html.twig");
    }
}

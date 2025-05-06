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

/* entretien/select_candidat.html.twig */
class __TwigTemplate_c79055007734b936e866f5d6356e99f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/select_candidat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/select_candidat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/select_candidat.html.twig", 1);
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

        yield "✨ Sélectionner un Candidat ✨";
        
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
        <h1 class=\"text-center text-gradient mb-5 fw-bold display-4 animate__animated animate__fadeInDown\">
            🚀 Sélectionnez un Candidat pour l'Entretien
        </h1>

        <div class=\"card shadow-lg border-0 rounded-5 p-5 bg-light animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                <h3 class=\"text-center mb-4\">📋 Liste des Candidats</h3>
                <form method=\"GET\" action=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidat_entretien_new", ["idOffre" => (isset($context["idOffre"]) || array_key_exists("idOffre", $context) ? $context["idOffre"] : (function () { throw new RuntimeError('Variable "idOffre" does not exist.', 14, $this->source); })())]), "html", null, true);
        yield "\">
                    <div class=\"mb-4\">
                        <label class=\"form-label\">Sélectionner un Candidat</label>
                        <select class=\"form-select\" name=\"candidat_id\" required>
                            <option value=\"\">Choisissez un Candidat</option>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 20
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "nom", [], "any", false, false, false, 20), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "prenom", [], "any", false, false, false, 20), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "                        </select>
                    </div>

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-gradient px-5 py-2 fs-5 rounded-pill\">
                            ✨ Planifier l'entretien pour ce candidat ✨
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\" class=\"btn btn-outline-dark btn-sm rounded-pill\">
                ← Retour à la liste des Offres
            </a>
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
        return "entretien/select_candidat.html.twig";
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
        return array (  150 => 35,  135 => 22,  122 => 20,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}✨ Sélectionner un Candidat ✨{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-gradient mb-5 fw-bold display-4 animate__animated animate__fadeInDown\">
            🚀 Sélectionnez un Candidat pour l'Entretien
        </h1>

        <div class=\"card shadow-lg border-0 rounded-5 p-5 bg-light animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                <h3 class=\"text-center mb-4\">📋 Liste des Candidats</h3>
                <form method=\"GET\" action=\"{{ path('app_candidat_entretien_new', {'idOffre': idOffre}) }}\">
                    <div class=\"mb-4\">
                        <label class=\"form-label\">Sélectionner un Candidat</label>
                        <select class=\"form-select\" name=\"candidat_id\" required>
                            <option value=\"\">Choisissez un Candidat</option>
                            {% for candidat in candidats %}
                                <option value=\"{{ candidat.id }}\">{{ candidat.nom }} {{ candidat.prenom }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    <div class=\"text-center mt-4\">
                        <button type=\"submit\" class=\"btn btn-gradient px-5 py-2 fs-5 rounded-pill\">
                            ✨ Planifier l'entretien pour ce candidat ✨
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_offreemploi_index') }}\" class=\"btn btn-outline-dark btn-sm rounded-pill\">
                ← Retour à la liste des Offres
            </a>
        </div>
    </div>
{% endblock %}
", "entretien/select_candidat.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\select_candidat.html.twig");
    }
}

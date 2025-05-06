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

/* entretien/liste.html.twig */
class __TwigTemplate_0bf28450389df10d0b01dde3ebdb278d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/liste.html.twig", 1);
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

        yield "Liste des Candidats";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Roboto', sans-serif;
      color: #555;
      margin: 0;
      padding: 0;
    }

    .container {
      margin-top: 40px;
      max-width: 1200px;
      padding: 0 20px;
    }

    .page-title {
      background-color: #fff;
      padding: 60px 0;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
      margin-bottom: 40px;
    }

    .page-title h1 {
      font-size: 2.8rem;
      font-weight: 600;
      color: #333;
      letter-spacing: 1px;
    }

    .list-group {
      padding: 0;
    }

    .list-group-item {
      background-color: #fff;
      border: none;
      margin-bottom: 15px;
      padding: 18px 24px;
      border-radius: 8px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .list-group-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .list-group-item h5 {
      font-size: 1.25rem;
      font-weight: 500;
      color: #333;
      margin-bottom: 0;
    }

    .list-group-item a {
      text-decoration: none;
      color: inherit;
      transition: color 0.3s ease;
    }

    .list-group-item a:hover {
      color: #2575fc;
    }

    .list-group-item .icon {
      font-size: 1.7rem;
      margin-right: 15px;
      color: #2575fc;
    }

    .btn-sm {
      padding: 8px 18px;
      font-size: 0.9rem;
      text-transform: uppercase;
      border-radius: 25px;
      transition: background-color 0.3s ease;
    }

    .btn-primary {
      background-color: #2575fc;
      border: none;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #3b8cfc;
    }

    .no-candidates {
      text-align: center;
      color: #aaa;
      font-size: 1.2rem;
      font-style: italic;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .page-title h1 {
        font-size: 2.4rem;
      }

      .list-group-item h5 {
        font-size: 1.1rem;
      }

      .btn-sm {
        font-size: 0.85rem;
        padding: 7px 14px;
      }
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "  <div class=\"container\">
    <div class=\"page-title\">
      <h1>Liste des Candidats</h1>
    </div>

    <ul class=\"list-group\">
      ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 131, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 132
            yield "        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          <div class=\"d-flex align-items-center\">
            <i class=\"bi bi-person-circle icon\"></i>
            <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidat_mes_entretiens", ["candidatId" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\">
              <h5>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "getUser", [], "any", false, false, false, 136), "nom", [], "any", false, false, false, 136), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "getUser", [], "any", false, false, false, 136), "prenom", [], "any", false, false, false, 136), "html", null, true);
            yield "</h5>
            </a>
          </div>
          <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidat_mes_entretiens", ["candidatId" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Voir les entretiens</a>
        </li>
      ";
            $context['_iterated'] = true;
        }
        // line 141
        if (!$context['_iterated']) {
            // line 142
            yield "        <li class=\"list-group-item text-center text-muted no-candidates\">Aucun candidat trouvé.</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "    </ul>

 <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
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
        return "entretien/liste.html.twig";
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
        return array (  293 => 146,  289 => 144,  282 => 142,  280 => 141,  273 => 139,  265 => 136,  261 => 135,  256 => 132,  251 => 131,  243 => 125,  230 => 124,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Candidats{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Roboto', sans-serif;
      color: #555;
      margin: 0;
      padding: 0;
    }

    .container {
      margin-top: 40px;
      max-width: 1200px;
      padding: 0 20px;
    }

    .page-title {
      background-color: #fff;
      padding: 60px 0;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
      margin-bottom: 40px;
    }

    .page-title h1 {
      font-size: 2.8rem;
      font-weight: 600;
      color: #333;
      letter-spacing: 1px;
    }

    .list-group {
      padding: 0;
    }

    .list-group-item {
      background-color: #fff;
      border: none;
      margin-bottom: 15px;
      padding: 18px 24px;
      border-radius: 8px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }

    .list-group-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .list-group-item h5 {
      font-size: 1.25rem;
      font-weight: 500;
      color: #333;
      margin-bottom: 0;
    }

    .list-group-item a {
      text-decoration: none;
      color: inherit;
      transition: color 0.3s ease;
    }

    .list-group-item a:hover {
      color: #2575fc;
    }

    .list-group-item .icon {
      font-size: 1.7rem;
      margin-right: 15px;
      color: #2575fc;
    }

    .btn-sm {
      padding: 8px 18px;
      font-size: 0.9rem;
      text-transform: uppercase;
      border-radius: 25px;
      transition: background-color 0.3s ease;
    }

    .btn-primary {
      background-color: #2575fc;
      border: none;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #3b8cfc;
    }

    .no-candidates {
      text-align: center;
      color: #aaa;
      font-size: 1.2rem;
      font-style: italic;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .page-title h1 {
        font-size: 2.4rem;
      }

      .list-group-item h5 {
        font-size: 1.1rem;
      }

      .btn-sm {
        font-size: 0.85rem;
        padding: 7px 14px;
      }
    }
  </style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <div class=\"page-title\">
      <h1>Liste des Candidats</h1>
    </div>

    <ul class=\"list-group\">
      {% for candidat in candidats %}
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
          <div class=\"d-flex align-items-center\">
            <i class=\"bi bi-person-circle icon\"></i>
            <a href=\"{{ path('app_candidat_mes_entretiens', {'candidatId': candidat.id}) }}\">
              <h5>{{ candidat.getUser.nom }} {{ candidat.getUser.prenom }}</h5>
            </a>
          </div>
          <a href=\"{{ path('app_candidat_mes_entretiens', {'candidatId': candidat.id}) }}\" class=\"btn btn-primary btn-sm\">Voir les entretiens</a>
        </li>
      {% else %}
        <li class=\"list-group-item text-center text-muted no-candidates\">Aucun candidat trouvé.</li>
      {% endfor %}
    </ul>

 <a href=\"{{ path('app_offreemploi_index') }}\" class=\"btn btn-secondary\">
    <i class=\"bi bi-arrow-left me-2\"></i> Retour à la liste
  </a>

  </div>
{%endblock%}", "entretien/liste.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\liste.html.twig");
    }
}

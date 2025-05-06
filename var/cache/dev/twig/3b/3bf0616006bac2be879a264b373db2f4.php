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

/* entretien/new.html.twig */
class __TwigTemplate_38fe256ddf0a37e82e636ca1e7784a3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "entretien/new.html.twig", 1);
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

        yield "New Entretien";
        
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
        yield "  <!-- Google Fonts & Custom Style -->
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap\" rel=\"stylesheet\">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .page-title {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      padding: 60px 0;
    }

    .page-title h2 {
      font-size: 36px;
      color: white;
      font-weight: 700;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    }

    .breadcrumb-item a {
      color: #fff;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #ddd;
    }

    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      animation: fadeInUp 0.8s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-primary {
      background-color: #6a11cb;
      border: none;
      border-radius: 30px;
      padding: 10px 25px;
    }

    .btn-primary:hover {
      background-color: #8f35ff;
    }

    .btn-secondary {
      border-radius: 30px;
      padding: 10px 25px;
    }

    .form-error {
      color: red;
      font-size: 0.9rem;
      margin-top: 0.25rem;
    }

    .form-label {
      font-weight: 600;
    }

  </style>

  <!-- Page Title Section -->
  <section class=\"page-title\">
    <div class=\"container\">
      <h2 class=\"fw-bold\">Ajouter ton Entretien</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a>
          </li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Entretien</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Entretien Creation Section -->
  <div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
      <div class=\"card-body\">
        <!-- Form Start with Validation -->
        ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
        
        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'row');
        yield "
        
        <!-- Form Submit and Reset buttons -->
        <div class=\"form-group mt-4\">
          <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        <!-- Form End -->
        ";
        // line 108
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        yield "
      </div>
    </div>

    <div class=\"mt-4\">
      <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entretien_index");
        yield "\" class=\"btn btn-secondary\">⬅ Retour à la liste</a>
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
        return "entretien/new.html.twig";
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
        return array (  221 => 113,  213 => 108,  202 => 100,  197 => 98,  181 => 85,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}New Entretien{% endblock %}

{% block content %}
  <!-- Google Fonts & Custom Style -->
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap\" rel=\"stylesheet\">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .page-title {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      padding: 60px 0;
    }

    .page-title h2 {
      font-size: 36px;
      color: white;
      font-weight: 700;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    }

    .breadcrumb-item a {
      color: #fff;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #ddd;
    }

    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      animation: fadeInUp 0.8s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-primary {
      background-color: #6a11cb;
      border: none;
      border-radius: 30px;
      padding: 10px 25px;
    }

    .btn-primary:hover {
      background-color: #8f35ff;
    }

    .btn-secondary {
      border-radius: 30px;
      padding: 10px 25px;
    }

    .form-error {
      color: red;
      font-size: 0.9rem;
      margin-top: 0.25rem;
    }

    .form-label {
      font-weight: 600;
    }

  </style>

  <!-- Page Title Section -->
  <section class=\"page-title\">
    <div class=\"container\">
      <h2 class=\"fw-bold\">Ajouter ton Entretien</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\">
            <a href=\"{{ path('app_front') }}\">Accueil</a>
          </li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Entretien</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Entretien Creation Section -->
  <div class=\"container mt-5\">
    <div class=\"card shadow-lg p-4\">
      <div class=\"card-body\">
        <!-- Form Start with Validation -->
        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
        
        {{ form_row(form) }}
        
        <!-- Form Submit and Reset buttons -->
        <div class=\"form-group mt-4\">
          <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
        </div>

        <!-- Form End -->
        {{ form_end(form) }}
      </div>
    </div>

    <div class=\"mt-4\">
      <a href=\"{{ path('app_entretien_index') }}\" class=\"btn btn-secondary\">⬅ Retour à la liste</a>
    </div>
  </div>

{% endblock %}
", "entretien/new.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\new.html.twig");
    }
}

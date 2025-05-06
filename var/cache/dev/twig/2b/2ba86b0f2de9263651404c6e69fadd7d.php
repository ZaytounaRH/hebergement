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

/* commande/new.html.twig */
class __TwigTemplate_a6e9f0f54713e60f6d1a8385f5c71a04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "commande/new.html.twig", 1);
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

        yield "Nouvelle Commande";
        
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
        yield "<!-- Page Header Start -->
<div class=\"page-header\">
  <div class=\"page-block\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-8\">
        <div class=\"page-header-title\">
          <h5 class=\"m-b-10\">Ajouter une Commande</h5>
          <p class=\"m-b-0\">Remplissez les champs ci-dessous pour créer une nouvelle commande.</p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_index");
        yield "\">Commandes</a></li>
          <li class=\"breadcrumb-item active\">Ajout</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Form Start -->
<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">Nouvelle Commande</h5>
  </div>
  <div class=\"card-block\">
    ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "commande/_form.html.twig", ["button_label" => "Créer"]);
        yield "
    <div class=\"text-end mt-3\">
      <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
    </div>
  </div>
</div>
<!-- Form End -->
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
        return "commande/new.html.twig";
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
        return array (  143 => 38,  138 => 36,  120 => 21,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Nouvelle Commande{% endblock %}

{% block content %}
<!-- Page Header Start -->
<div class=\"page-header\">
  <div class=\"page-block\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-8\">
        <div class=\"page-header-title\">
          <h5 class=\"m-b-10\">Ajouter une Commande</h5>
          <p class=\"m-b-0\">Remplissez les champs ci-dessous pour créer une nouvelle commande.</p>
        </div>
      </div>
      <div class=\"col-md-4\">
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('back_commande_index') }}\">Commandes</a></li>
          <li class=\"breadcrumb-item active\">Ajout</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Form Start -->
<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">Nouvelle Commande</h5>
  </div>
  <div class=\"card-block\">
    {{ include('commande/_form.html.twig', {'button_label': 'Créer'}) }}
    <div class=\"text-end mt-3\">
      <a href=\"{{ path('back_commande_index') }}\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
    </div>
  </div>
</div>
<!-- Form End -->
{% endblock %}
", "commande/new.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\commande\\new.html.twig");
    }
}

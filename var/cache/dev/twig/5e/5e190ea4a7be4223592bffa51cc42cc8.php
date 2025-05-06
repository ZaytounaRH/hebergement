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

/* offreemploi/edit.html.twig */
class __TwigTemplate_0aef906e7c21fff26bb9ee405118d316 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offreemploi/edit.html.twig", 1);
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

        yield "Modifier l'Offre d'Emploi";
        
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
        yield "  <section class=\"py-5\">
    <div class=\"container\">
      <!-- Titre principal -->
      <h1 class=\"text-center mb-5 fw-bold text-primary\">Modifier l'Offre d'Emploi</h1>

      <!-- Formulaire de modification -->
      ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

      <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
          <!-- Card Container -->
          <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-gradient text-white text-center py-4\">
              <h5 class=\"mb-0\">Détails de l'Offre</h5>
            </div>
            <div class=\"card-body p-5\">
              <!-- Formulaire de modification -->
              ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offreemploi/_form_back.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
              
              <!-- Affichage des erreurs de formulaire -->
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 27
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
                // line 28
                yield "                  <div class=\"alert alert-danger mt-2\">
                    <strong>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), "html", null, true);
                yield ":</strong>
                    <ul>
                      ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 32
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
                    yield "</li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "                    </ul>
                  </div>
                ";
            }
            // line 37
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </div>
          </div>

          <!-- Action buttons -->
          <div class=\"d-flex justify-content-between align-items-center mt-4\">
            <!-- Retour à la liste -->
            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_back_index");
        yield "\" class=\"btn btn-outline-info btn-lg rounded-pill px-5 py-3 text-dark transition-all duration-300 ease-in-out hover:bg-info hover:text-white\">
              <i class=\"bi bi-arrow-left-circle me-2\"></i> Retour à la liste
            </a>

            <!-- Suppression de l'offre -->
            <div class=\"d-flex gap-3\">
              ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "offreemploi/_delete_form.html.twig");
        yield "
            </div>
          </div>
        </div>
      </div>

      ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        yield " <!-- Fin du formulaire -->
    </div>
  </section>
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
        return "offreemploi/edit.html.twig";
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
        return array (  193 => 56,  184 => 50,  175 => 44,  167 => 38,  161 => 37,  156 => 34,  147 => 32,  143 => 31,  138 => 29,  135 => 28,  132 => 27,  128 => 26,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Modifier l'Offre d'Emploi{% endblock %}

{% block content %}
  <section class=\"py-5\">
    <div class=\"container\">
      <!-- Titre principal -->
      <h1 class=\"text-center mb-5 fw-bold text-primary\">Modifier l'Offre d'Emploi</h1>

      <!-- Formulaire de modification -->
      {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

      <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
          <!-- Card Container -->
          <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-gradient text-white text-center py-4\">
              <h5 class=\"mb-0\">Détails de l'Offre</h5>
            </div>
            <div class=\"card-body p-5\">
              <!-- Formulaire de modification -->
              {{ include('offreemploi/_form_back.html.twig', {'button_label': 'Mettre à jour'}) }}
              
              <!-- Affichage des erreurs de formulaire -->
              {% for field in form %}
                {% if field.vars.errors|length > 0 %}
                  <div class=\"alert alert-danger mt-2\">
                    <strong>{{ field.vars.label }}:</strong>
                    <ul>
                      {% for error in field.vars.errors %}
                        <li>{{ error.message }}</li>
                      {% endfor %}
                    </ul>
                  </div>
                {% endif %}
              {% endfor %}
            </div>
          </div>

          <!-- Action buttons -->
          <div class=\"d-flex justify-content-between align-items-center mt-4\">
            <!-- Retour à la liste -->
            <a href=\"{{ path('app_offreemploi_back_index') }}\" class=\"btn btn-outline-info btn-lg rounded-pill px-5 py-3 text-dark transition-all duration-300 ease-in-out hover:bg-info hover:text-white\">
              <i class=\"bi bi-arrow-left-circle me-2\"></i> Retour à la liste
            </a>

            <!-- Suppression de l'offre -->
            <div class=\"d-flex gap-3\">
              {{ include('offreemploi/_delete_form.html.twig') }}
            </div>
          </div>
        </div>
      </div>

      {{ form_end(form) }} <!-- Fin du formulaire -->
    </div>
  </section>
{% endblock %}
", "offreemploi/edit.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\edit.html.twig");
    }
}

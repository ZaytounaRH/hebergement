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

/* formation/indexCertif.html.twig */
class __TwigTemplate_cb54c7e65b488bff6f242b9b4e46c867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/indexCertif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/indexCertif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/indexCertif.html.twig", 1);
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

        yield "Formation index";
        
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
        yield "  <section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
    <div class=\"container\">
      <h2 class=\"text-white fw-bold\">Formation</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"text-white text-decoration-none\">Home</a></li>
          <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Formation</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class=\"section\">
    <div class=\"container\" data-aos=\"fade-up\">
      <div class=\"section-title\">
        <h2>Mes Formations</h2>
      </div>

      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover align-middle\">
          <thead class=\"table-light\">
            <tr>
             
              <th>Nom</th>
              <th>Description</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 37
            yield "              <tr>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "descriptionFormation", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : ("—"));
            yield "</td>
                <td>
                  <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_certif_show", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\">Voir Certificat</a>
                </td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "              <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">Aucune formation trouvée</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "          </tbody>
        </table>
      </div>
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
        return "formation/indexCertif.html.twig";
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
        return array (  175 => 50,  166 => 46,  164 => 45,  156 => 42,  151 => 40,  147 => 39,  143 => 38,  140 => 37,  135 => 36,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formation index{% endblock %}

{% block body %}
  <section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
    <div class=\"container\">
      <h2 class=\"text-white fw-bold\">Formation</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\" class=\"text-white text-decoration-none\">Home</a></li>
          <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Formation</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class=\"section\">
    <div class=\"container\" data-aos=\"fade-up\">
      <div class=\"section-title\">
        <h2>Mes Formations</h2>
      </div>

      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover align-middle\">
          <thead class=\"table-light\">
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
                  <a href=\"{{ path('app_formation_certif_show', {'idFormation': formation.idFormation}) }}\" class=\"btn btn-sm btn-outline-info\">Voir Certificat</a>
                </td>
              </tr>
            {% else %}
              <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">Aucune formation trouvée</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </section>
{% endblock %}
", "formation/indexCertif.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\indexCertif.html.twig");
    }
}

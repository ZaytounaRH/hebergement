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

/* formation/indexFilter.html.twig */
class __TwigTemplate_ee027a24ea25c177c12bf593198c5e26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/indexFilter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/indexFilter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/indexFilter.html.twig", 1);
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

        yield "Formations ";
        
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
        yield "  <section class=\"section\">
    <div class=\"container\">
      <h2>Filtrer les formations par employé</h2>

      <form method=\"get\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_filtrer");
        yield "\" class=\"mb-4\">
        <div class=\"row g-3 align-items-center\">
          <div class=\"col-auto\">
            <label for=\"employee_id\" class=\"col-form-label\">Employé :</label>
          </div>
          <div class=\"col-auto\">
            <select name=\"employee_id\" id=\"employee_id\" class=\"form-select\" onchange=\"this.form.submit()\">
              <option value=\"\">-- Choisir un employé --</option>
              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 19
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employeeId", [], "any", false, false, false, 19), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employeeId", [], "any", false, false, false, 19) == (isset($context["selectedEmployee"]) || array_key_exists("selectedEmployee", $context) ? $context["selectedEmployee"] : (function () { throw new RuntimeError('Variable "selectedEmployee" does not exist.', 19, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                  ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "nom", [], "any", false, false, false, 20), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "prenom", [], "any", false, false, false, 20), "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employee'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "            </select>
          </div>
        </div>
      </form>

      ";
        // line 28
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 39
                yield "              <tr>
                <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "descriptionFormation", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                <td>";
                // line 42
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true)) : ("—"));
                yield "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "          </tbody>
        </table>
      ";
        } elseif (        // line 47
(isset($context["selectedEmployee"]) || array_key_exists("selectedEmployee", $context) ? $context["selectedEmployee"] : (function () { throw new RuntimeError('Variable "selectedEmployee" does not exist.', 47, $this->source); })())) {
            // line 48
            yield "        <p class=\"text-muted\">Aucune formation pour cet employé.</p>
      ";
        }
        // line 50
        yield "    </div>
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
        return "formation/indexFilter.html.twig";
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
        return array (  195 => 50,  191 => 48,  189 => 47,  185 => 45,  176 => 42,  172 => 41,  168 => 40,  165 => 39,  161 => 38,  150 => 29,  148 => 28,  141 => 23,  130 => 20,  121 => 19,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formations {% endblock %}

{% block body %}
  <section class=\"section\">
    <div class=\"container\">
      <h2>Filtrer les formations par employé</h2>

      <form method=\"get\" action=\"{{ path('app_formation_filtrer') }}\" class=\"mb-4\">
        <div class=\"row g-3 align-items-center\">
          <div class=\"col-auto\">
            <label for=\"employee_id\" class=\"col-form-label\">Employé :</label>
          </div>
          <div class=\"col-auto\">
            <select name=\"employee_id\" id=\"employee_id\" class=\"form-select\" onchange=\"this.form.submit()\">
              <option value=\"\">-- Choisir un employé --</option>
              {% for employee in employees %}
                <option value=\"{{ employee.employeeId }}\" {% if employee.employeeId == selectedEmployee %}selected{% endif %}>
                  {{ employee.nom }} {{ employee.prenom }}
                </option>
              {% endfor %}
            </select>
          </div>
        </div>
      </form>

      {% if formations is not empty %}
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            {% for formation in formations %}
              <tr>
                <td>{{ formation.nomFormation }}</td>
                <td>{{ formation.descriptionFormation }}</td>
                <td>{{ formation.dateDebutFormation ? formation.dateDebutFormation|date('Y-m-d') : '—' }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      {% elseif selectedEmployee %}
        <p class=\"text-muted\">Aucune formation pour cet employé.</p>
      {% endif %}
    </div>
  </section>
{% endblock %}
", "formation/indexFilter.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\indexFilter.html.twig");
    }
}

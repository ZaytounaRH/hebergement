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

/* certification/show.html.twig */
class __TwigTemplate_e2931d04b576bc6f142aecea2888f1f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "certification/show.html.twig", 1);
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

        yield "Détail de la Certification";
        
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
          <h5 class=\"m-b-10\">Certification</h5>
        </div>
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_index");
        yield "\">Certifications</a></li>
          <li class=\"breadcrumb-item active\">Détail</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 27, $this->source); })()), "titreCertif", [], "any", false, false, false, 27), "html", null, true);
        yield "</h5>
  </div>
  <div class=\"card-block\">
    <table class=\"table table-striped\">
      <tbody>
        <tr>
          <th>Organisme</th>
          <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 34, $this->source); })()), "organismeCertif", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
        </tr>
        <tr>
          <th>Formation liée</th>
          <td>
          <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 39, $this->source); })()), "formation", [], "any", false, false, false, 39), "idFormation", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">
    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 40, $this->source); })()), "formation", [], "any", false, false, false, 40), "nomFormation", [], "any", false, false, false, 40), "html", null, true);
        yield "
</a>

          </td>
        </tr>
      </tbody>
    </table>

    <div class=\"text-end mt-3\">
    
      <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
      <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_edit", ["idCertif" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 53, $this->source); })()), "idCertif", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-sm\">
        <i class=\"fa fa-edit\"></i> Modifier
      </a>
      ";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "certification/_delete_form.html.twig");
        yield "
    </div>
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
        return "certification/show.html.twig";
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
        return array (  176 => 56,  170 => 53,  164 => 50,  151 => 40,  147 => 39,  139 => 34,  129 => 27,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détail de la Certification{% endblock %}

{% block content %}
<div class=\"page-header\">
  <div class=\"page-block\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-12\">
        <div class=\"page-header-title\">
          <h5 class=\"m-b-10\">Certification</h5>
        </div>
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_certification_index') }}\">Certifications</a></li>
          <li class=\"breadcrumb-item active\">Détail</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">{{ certification.titreCertif }}</h5>
  </div>
  <div class=\"card-block\">
    <table class=\"table table-striped\">
      <tbody>
        <tr>
          <th>Organisme</th>
          <td>{{ certification.organismeCertif }}</td>
        </tr>
        <tr>
          <th>Formation liée</th>
          <td>
          <a href=\"{{ path('app_formation_show', {idFormation: certification.formation.idFormation}) }}\">
    {{ certification.formation.nomFormation }}
</a>

          </td>
        </tr>
      </tbody>
    </table>

    <div class=\"text-end mt-3\">
    
      <a href=\"{{ path('app_certification_index') }}\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
      <a href=\"{{ path('app_certification_edit', {'idCertif': certification.idCertif}) }}\" class=\"btn btn-warning btn-sm\">
        <i class=\"fa fa-edit\"></i> Modifier
      </a>
      {{ include('certification/_delete_form.html.twig') }}
    </div>
  </div>
</div>
{% endblock %}
", "certification/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\certification\\show.html.twig");
    }
}

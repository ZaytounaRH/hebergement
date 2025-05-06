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

/* commande/show.html.twig */
class __TwigTemplate_8b26b88accb98da9caa9452c855bc3d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "commande/show.html.twig", 1);
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

        yield "Détail de la Commande";
        
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
      <div class=\"col-md-12\">
        <div class=\"page-header-title\">
          <h5 class=\"m-b-10\">Détail de la Commande</h5>
        </div>
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_index");
        yield "\">Commandes</a></li>
          <li class=\"breadcrumb-item active\">Détail</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Card Start -->
<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">Commande n° ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "</h5>
  </div>
  <div class=\"card-block\">
    <div class=\"row mb-3\">
      <div class=\"col-md-4\">
        <strong>📅 Date de Commande :</strong><br>
        <p>";
        // line 36
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 36, $this->source); })()), "dateCommande", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 36, $this->source); })()), "dateCommande", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true)) : ("Non définie"));
        yield "</p>
      </div>
      <div class=\"col-md-4\">
        <strong>📦 Quantité :</strong><br>
        <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 40, $this->source); })()), "quantite", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
      </div>
      <div class=\"col-md-4\">
        <strong>📝 Statut :</strong><br>
        <p>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 44, $this->source); })()), "statutCommande", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
      </div>
      <div class=\"col-md-4\">
        <strong>👤 Fournisseur :</strong><br>
        <p>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 48, $this->source); })()), "fournisseur", [], "any", false, false, false, 48), "nomFournisseur", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
      </div>
      <div class=\"col-md-4\">
        <strong>🧾 Description :</strong><br>
        <p>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
      </div>
      <div class=\"col-md-4\">
        <strong>💰 Prix :</strong><br>
        <p>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 56, $this->source); })()), "prixCommande", [], "any", false, false, false, 56), "html", null, true);
        yield " DT</p>
      </div>
    </div>

    <div class=\"text-end d-flex justify-content-end gap-2\">
      <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
      <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\">
        <i class=\"fa fa-edit\"></i> Modifier
      </a>
      <form action=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_commande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        yield "\" method=\"post\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
          <i class=\"fa fa-trash\"></i> Supprimer
        </button>
      </form>
    </div>
  </div>
</div>
<!-- Card End -->
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
        return "commande/show.html.twig";
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
        return array (  200 => 68,  196 => 67,  190 => 64,  184 => 61,  176 => 56,  169 => 52,  162 => 48,  155 => 44,  148 => 40,  141 => 36,  132 => 30,  117 => 18,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Détail de la Commande{% endblock %}

{% block content %}
<!-- Page Header Start -->
<div class=\"page-header\">
  <div class=\"page-block\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-12\">
        <div class=\"page-header-title\">
          <h5 class=\"m-b-10\">Détail de la Commande</h5>
        </div>
        <ul class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">
            <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"breadcrumb-item\"><a href=\"{{ path('back_commande_index') }}\">Commandes</a></li>
          <li class=\"breadcrumb-item active\">Détail</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Card Start -->
<div class=\"card\">
  <div class=\"card-header\">
    <h5 class=\"mb-0\">Commande n° {{ commande.id }}</h5>
  </div>
  <div class=\"card-block\">
    <div class=\"row mb-3\">
      <div class=\"col-md-4\">
        <strong>📅 Date de Commande :</strong><br>
        <p>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d') : 'Non définie' }}</p>
      </div>
      <div class=\"col-md-4\">
        <strong>📦 Quantité :</strong><br>
        <p>{{ commande.quantite }}</p>
      </div>
      <div class=\"col-md-4\">
        <strong>📝 Statut :</strong><br>
        <p>{{ commande.statutCommande }}</p>
      </div>
      <div class=\"col-md-4\">
        <strong>👤 Fournisseur :</strong><br>
        <p>{{ commande.fournisseur.nomFournisseur }}</p>
      </div>
      <div class=\"col-md-4\">
        <strong>🧾 Description :</strong><br>
        <p>{{ commande.description }}</p>
      </div>
      <div class=\"col-md-4\">
        <strong>💰 Prix :</strong><br>
        <p>{{ commande.prixCommande }} DT</p>
      </div>
    </div>

    <div class=\"text-end d-flex justify-content-end gap-2\">
      <a href=\"{{ path('back_commande_index') }}\" class=\"btn btn-secondary btn-sm\">
        <i class=\"fa fa-arrow-left\"></i> Retour
      </a>
      <a href=\"{{ path('back_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-primary btn-sm\">
        <i class=\"fa fa-edit\"></i> Modifier
      </a>
      <form action=\"{{ path('back_commande_delete', {'id': commande.id}) }}\" method=\"post\" style=\"display:inline-block;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette commande ?')\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commande.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
          <i class=\"fa fa-trash\"></i> Supprimer
        </button>
      </form>
    </div>
  </div>
</div>
<!-- Card End -->
{% endblock %}
", "commande/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\commande\\show.html.twig");
    }
}

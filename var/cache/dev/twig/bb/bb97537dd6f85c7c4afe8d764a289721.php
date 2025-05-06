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

/* produit/edit.html.twig */
class __TwigTemplate_069abfb8c27f34b13850d11db991ef46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "produit/edit.html.twig", 1);
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

        yield "Modifier Produit";
        
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
                    <h5 class=\"m-b-10\">Modifier un Produit</h5>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_produit_index");
        yield "\">Produits</a></li>
                    <li class=\"breadcrumb-item active\">Modifier</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Éditer le produit : ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "produitName", [], "any", false, false, false, 27), "html", null, true);
        yield "</h5>
    </div>
    <div class=\"card-block\">
        ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "produitName", [], "any", false, false, false, 33), 'row');
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), 'row');
        yield "
                </div>
                <div class=\"col-md-6 mb-3\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "fournisseur", [], "any", false, false, false, 39), 'row');
        yield "
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-2 mt-3\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_produit_index");
        yield "\" class=\"btn btn-secondary btn-sm\">
                    <i class=\"fa fa-arrow-left\"></i> Retour
                </a>
                <button class=\"btn btn-primary btn-sm\" type=\"submit\">
                    <i class=\"fa fa-save\"></i> Mettre à jour
                </button>
                ";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "produit/_delete_form.html.twig");
        yield "
            </div>
        ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
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
        return "produit/edit.html.twig";
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
        return array (  174 => 51,  169 => 49,  160 => 43,  153 => 39,  147 => 36,  141 => 33,  135 => 30,  129 => 27,  116 => 17,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Modifier Produit{% endblock %}

{% block content %}
<div class=\"page-header\">
    <div class=\"page-block\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-12\">
                <div class=\"page-header-title\">
                    <h5 class=\"m-b-10\">Modifier un Produit</h5>
                </div>
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('admin_dashboard') }}\"><i class=\"fa fa-home\"></i></a>
                    </li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('back_produit_index') }}\">Produits</a></li>
                    <li class=\"breadcrumb-item active\">Modifier</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">Éditer le produit : {{ form.vars.value.produitName }}</h5>
    </div>
    <div class=\"card-block\">
        {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    {{ form_row(form.produitName) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_row(form.prix) }}
                </div>
                <div class=\"col-md-6 mb-3\">
                    {{ form_row(form.fournisseur) }}
                </div>
            </div>
            <div class=\"d-flex justify-content-end gap-2 mt-3\">
                <a href=\"{{ path('back_produit_index') }}\" class=\"btn btn-secondary btn-sm\">
                    <i class=\"fa fa-arrow-left\"></i> Retour
                </a>
                <button class=\"btn btn-primary btn-sm\" type=\"submit\">
                    <i class=\"fa fa-save\"></i> Mettre à jour
                </button>
                {{ include('produit/_delete_form.html.twig') }}
            </div>
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "produit/edit.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\produit\\edit.html.twig");
    }
}

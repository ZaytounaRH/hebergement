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

/* reponse/edit.html.twig */
class __TwigTemplate_adce844b5af0e5c37dbc2325e7afb70a extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reponse/edit.html.twig", 1);
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

        yield "Modifier Réponse";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1d1d1f;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            font-size: 1.2rem;
            font-weight: 500;
            color: #5f6368;
            margin-bottom: 0.8rem;
        }

        .form-control {
            border-radius: 15px;
            padding: 1.2rem;
            font-size: 1.1rem;
            color: #333;
            border: 2px solid #ddd;
            width: 100%;
            background-color: #f8f9fb;
            box-sizing: border-box;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #6c63ff;
            background-color: #ffffff;
            box-shadow: 0 0 8px rgba(108, 99, 255, 0.2);
        }

        .btn-custom {
            width: 100%;
            padding: 1.3rem;
            font-size: 1.1rem;
            border-radius: 30px;
            background-color: #6c63ff;
            color: white;
            font-weight: bold;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #5a52e6;
            transform: translateY(-2px);
        }

        .back-btn {
            display: inline-block;
            background-color: #e0e0e0;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 50px;
            color: #333;
            text-decoration: none;
            text-align: center;
            margin-top: 1.5rem;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #d4d4d4;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
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

        // line 102
        yield "<div class=\"container py-5\">
    <div class=\"form-container\">
        <h2>Modifier la Réponse</h2>

        ";
        // line 106
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reponse/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "

        <div class=\"d-flex justify-content-end\">
            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"back-btn\">← Retour à la liste</a>
        </div>

        ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reponse/_delete_form.html.twig");
        yield "
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js\"></script>
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
        return "reponse/edit.html.twig";
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
        return array (  267 => 118,  254 => 117,  239 => 112,  233 => 109,  227 => 106,  221 => 102,  208 => 101,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Modifier Réponse{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background-color: #f7f8fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1d1d1f;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            font-size: 1.2rem;
            font-weight: 500;
            color: #5f6368;
            margin-bottom: 0.8rem;
        }

        .form-control {
            border-radius: 15px;
            padding: 1.2rem;
            font-size: 1.1rem;
            color: #333;
            border: 2px solid #ddd;
            width: 100%;
            background-color: #f8f9fb;
            box-sizing: border-box;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #6c63ff;
            background-color: #ffffff;
            box-shadow: 0 0 8px rgba(108, 99, 255, 0.2);
        }

        .btn-custom {
            width: 100%;
            padding: 1.3rem;
            font-size: 1.1rem;
            border-radius: 30px;
            background-color: #6c63ff;
            color: white;
            font-weight: bold;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #5a52e6;
            transform: translateY(-2px);
        }

        .back-btn {
            display: inline-block;
            background-color: #e0e0e0;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 50px;
            color: #333;
            text-decoration: none;
            text-align: center;
            margin-top: 1.5rem;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #d4d4d4;
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"form-container\">
        <h2>Modifier la Réponse</h2>

        {{ include('reponse/_form.html.twig', {'button_label': 'Mettre à jour'}) }}

        <div class=\"d-flex justify-content-end\">
            <a href=\"{{ path('app_reponse_index') }}\" class=\"back-btn\">← Retour à la liste</a>
        </div>

        {{ include('reponse/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js\"></script>
{% endblock %}
", "reponse/edit.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\reponse\\edit.html.twig");
    }
}

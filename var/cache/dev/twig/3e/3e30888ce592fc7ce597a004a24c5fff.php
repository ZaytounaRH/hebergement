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

/* offreemploi/new.html.twig */
class __TwigTemplate_7e03250d4adbcc2d790514b73a9c2749 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/new.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "offreemploi/new.html.twig", 1);
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

        yield "Nouvelle Offre d'emploi";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-primary text-white rounded-top-4\">
                <h3 class=\"mb-0\"><i class=\"bi bi-briefcase-fill me-2\"></i>Créer une nouvelle offre d'emploi</h3>
            </div>

            <div class=\"card-body p-4\">
                ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        // line 19
        yield "

                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "titreOffre", [], "any", false, false, false, 23), 'label');
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titreOffre", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre de l'offre"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "titreOffre", [], "any", false, false, false, 25), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "datePublication", [], "any", false, false, false, 29), 'label');
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "datePublication", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "datePublication", [], "any", false, false, false, 31), 'errors');
        yield "</div>
                    </div>
                </div>

                <div class=\"mb-3\">
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'label');
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        yield "
                    <div class=\"text-danger small\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "salaire", [], "any", false, false, false, 43), 'label');
        yield "
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "salaire", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Salaire"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "salaire", [], "any", false, false, false, 45), 'errors');
        yield "</div>
                    </div>

                    <div class=\"col-md-6\">
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), 'label');
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51), 'errors');
        yield "</div>
                    </div>
                </div>

                <div class=\"mb-4\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "rh", [], "any", false, false, false, 56), 'label');
        yield "
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "rh", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div class=\"text-danger small\">";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "rh", [], "any", false, false, false, 58), 'errors');
        yield "</div>
                </div>



<div class=\"mb-3\">
    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), 'label');
        yield "
    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    <div class=\"text-danger small\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66), 'errors');
        yield "</div>
</div>




                <div class=\"d-flex justify-content-end\">
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_back_index");
        yield "\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"bi bi-arrow-left-circle\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-check-circle\"></i> Enregistrer
                    </button>
                </div>

                ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "offreemploi/new.html.twig";
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
        return array (  241 => 81,  230 => 73,  220 => 66,  216 => 65,  212 => 64,  203 => 58,  199 => 57,  195 => 56,  187 => 51,  183 => 50,  179 => 49,  172 => 45,  168 => 44,  164 => 43,  156 => 38,  152 => 37,  148 => 36,  140 => 31,  136 => 30,  132 => 29,  125 => 25,  121 => 24,  117 => 23,  111 => 19,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Nouvelle Offre d'emploi{% endblock %}

{% block content %}
    <div class=\"container mt-5\">
        <div class=\"card shadow-lg border-0 rounded-4\">
            <div class=\"card-header bg-primary text-white rounded-top-4\">
                <h3 class=\"mb-0\"><i class=\"bi bi-briefcase-fill me-2\"></i>Créer une nouvelle offre d'emploi</h3>
            </div>

            <div class=\"card-body p-4\">
                {{ form_start(form, {
                    'attr': {
                        'class': 'needs-validation',
                        'novalidate': 'novalidate',
                         'enctype': 'multipart/form-data'
                    }
                }) }}

                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_label(form.titreOffre) }}
                        {{ form_widget(form.titreOffre, {'attr': {'class': 'form-control', 'placeholder': 'Titre de l\\'offre'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.titreOffre) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        {{ form_label(form.datePublication) }}
                        {{ form_widget(form.datePublication, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.datePublication) }}</div>
                    </div>
                </div>

                <div class=\"mb-3\">
                    {{ form_label(form.description) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
                    <div class=\"text-danger small\">{{ form_errors(form.description) }}</div>
                </div>

                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        {{ form_label(form.salaire) }}
                        {{ form_widget(form.salaire, {'attr': {'class': 'form-control', 'placeholder': 'Salaire'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.salaire) }}</div>
                    </div>

                    <div class=\"col-md-6\">
                        {{ form_label(form.statut) }}
                        {{ form_widget(form.statut, {'attr': {'class': 'form-select'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.statut) }}</div>
                    </div>
                </div>

                <div class=\"mb-4\">
                    {{ form_label(form.rh) }}
                    {{ form_widget(form.rh, {'attr': {'class': 'form-select'}}) }}
                    <div class=\"text-danger small\">{{ form_errors(form.rh) }}</div>
                </div>



<div class=\"mb-3\">
    {{ form_label(form.image) }}
    {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
    <div class=\"text-danger small\">{{ form_errors(form.image) }}</div>
</div>




                <div class=\"d-flex justify-content-end\">
                    <a href=\"{{ path('app_offreemploi_back_index') }}\" class=\"btn btn-outline-secondary me-2\">
                        <i class=\"bi bi-arrow-left-circle\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"bi bi-check-circle\"></i> Enregistrer
                    </button>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "offreemploi/new.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\new.html.twig");
    }
}

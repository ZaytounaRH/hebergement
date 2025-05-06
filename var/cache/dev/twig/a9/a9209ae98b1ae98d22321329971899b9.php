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

/* conge/_form.html.twig */
class __TwigTemplate_7051aff49a13ae6d7498c3155743e22a extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

<div class=\"mb-3\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "dateDebut", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de début"]);
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "dateDebut", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => ("form-control rounded-pill shadow-sm" . ((        // line 7
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "dateDebut", [], "any", false, false, false, 7), 'errors')) ? (" is-invalid") : ("")))]]);
        // line 9
        yield "
    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "dateDebut", [], "any", false, false, false, 10), 'errors');
        yield "
</div>

<div class=\"mb-3\">
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "dateFin", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📅 Date de fin"]);
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "dateFin", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => ("form-control rounded-pill shadow-sm" . ((        // line 17
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "dateFin", [], "any", false, false, false, 17), 'errors')) ? (" is-invalid") : ("")))]]);
        // line 19
        yield "
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dateFin", [], "any", false, false, false, 20), 'errors');
        yield "
</div>

<div class=\"mb-3\">
    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "motif", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "📝 Motif"]);
        yield "
    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "motif", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ("form-control rounded-pill shadow-sm" . ((        // line 27
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "motif", [], "any", false, false, false, 27), 'errors')) ? (" is-invalid") : ("")))]]);
        // line 29
        yield "
    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "motif", [], "any", false, false, false, 30), 'errors');
        yield "
</div>

";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "employee", [], "any", true, true, false, 33)) {
            // line 34
            yield "<div class=\"mb-3\">
    ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "employee", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "👤 Employé"]);
            yield "
    ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "employee", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => ("form-select rounded-pill shadow-sm" . ((            // line 38
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "employee", [], "any", false, false, false, 38), 'errors')) ? (" is-invalid") : ("")))]]);
            // line 40
            yield "
    ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "employee", [], "any", false, false, false, 41), 'errors');
            yield "
</div>
";
        }
        // line 44
        yield "
";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "rh", [], "any", true, true, false, 45)) {
            // line 46
            yield "<div class=\"mb-3\">
    ";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "rh", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "👨‍💼 Responsable RH"]);
            yield "
    ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "rh", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => ("form-select rounded-pill shadow-sm" . ((            // line 50
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "rh", [], "any", false, false, false, 50), 'errors')) ? (" is-invalid") : ("")))]]);
            // line 52
            yield "
    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "rh", [], "any", false, false, false, 53), 'errors');
            yield "
</div>
";
        }
        // line 56
        yield "
<div class=\"text-center mt-4\">
    <button class=\"btn btn-success rounded-pill px-4 py-2 shadow-sm\">
        ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "💾 Enregistrer")) : ("💾 Enregistrer")), "html", null, true);
        yield "
    </button>
</div>

";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "conge/_form.html.twig";
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
        return array (  161 => 63,  154 => 59,  149 => 56,  143 => 53,  140 => 52,  138 => 50,  137 => 48,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  119 => 41,  116 => 40,  114 => 38,  113 => 36,  109 => 35,  106 => 34,  104 => 33,  98 => 30,  95 => 29,  93 => 27,  92 => 25,  88 => 24,  81 => 20,  78 => 19,  76 => 17,  75 => 15,  71 => 14,  64 => 10,  61 => 9,  59 => 7,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

<div class=\"mb-3\">
    {{ form_label(form.dateDebut, '📅 Date de début', {'label_attr': {'class': 'form-label fw-bold'}}) }}
    {{ form_widget(form.dateDebut, {
        'attr': {
            'class': 'form-control rounded-pill shadow-sm' ~ (form_errors(form.dateDebut) ? ' is-invalid' : '')
        }
    }) }}
    {{ form_errors(form.dateDebut) }}
</div>

<div class=\"mb-3\">
    {{ form_label(form.dateFin, '📅 Date de fin', {'label_attr': {'class': 'form-label fw-bold'}}) }}
    {{ form_widget(form.dateFin, {
        'attr': {
            'class': 'form-control rounded-pill shadow-sm' ~ (form_errors(form.dateFin) ? ' is-invalid' : '')
        }
    }) }}
    {{ form_errors(form.dateFin) }}
</div>

<div class=\"mb-3\">
    {{ form_label(form.motif, '📝 Motif', {'label_attr': {'class': 'form-label fw-bold'}}) }}
    {{ form_widget(form.motif, {
        'attr': {
            'class': 'form-control rounded-pill shadow-sm' ~ (form_errors(form.motif) ? ' is-invalid' : '')
        }
    }) }}
    {{ form_errors(form.motif) }}
</div>

{% if form.employee is defined %}
<div class=\"mb-3\">
    {{ form_label(form.employee, '👤 Employé', {'label_attr': {'class': 'form-label fw-bold'}}) }}
    {{ form_widget(form.employee, {
        'attr': {
            'class': 'form-select rounded-pill shadow-sm' ~ (form_errors(form.employee) ? ' is-invalid' : '')
        }
    }) }}
    {{ form_errors(form.employee) }}
</div>
{% endif %}

{% if form.rh is defined %}
<div class=\"mb-3\">
    {{ form_label(form.rh, '👨‍💼 Responsable RH', {'label_attr': {'class': 'form-label fw-bold'}}) }}
    {{ form_widget(form.rh, {
        'attr': {
            'class': 'form-select rounded-pill shadow-sm' ~ (form_errors(form.rh) ? ' is-invalid' : '')
        }
    }) }}
    {{ form_errors(form.rh) }}
</div>
{% endif %}

<div class=\"text-center mt-4\">
    <button class=\"btn btn-success rounded-pill px-4 py-2 shadow-sm\">
        {{ button_label|default('💾 Enregistrer') }}
    </button>
</div>

{{ form_end(form) }}
", "conge/_form.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\conge\\_form.html.twig");
    }
}

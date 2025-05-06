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

/* entretien/newcandidat.html.twig */
class __TwigTemplate_a499d5ba32bae0c63afaa803e315e65f extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/newcandidat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/newcandidat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/newcandidat.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "✨ Planifier un Entretien ✨";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center text-gradient mb-5 fw-bold display-4 animate__animated animate__fadeInDown\">
            🚀 Planifiez votre Entretien comme un Pro
        </h1>

        <div class=\"card shadow-lg border-0 rounded-5 p-5 bg-light animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "dateEntretien", [], "any", false, false, false, 18), 'label');
        yield "</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bi bi-calendar-event\"></i></span>
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateEntretien", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateEntretien", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 24
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "heureEntretien", [], "any", false, false, false, 29), 'label');
        yield "</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bi bi-clock-history\"></i></span>
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "heureEntretien", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "heureEntretien", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 35
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "typeEntretien", [], "any", false, false, false, 42), 'label');
        yield "</label>
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "typeEntretien", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "typeEntretien", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 45
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 45), "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "commentaire", [], "any", false, false, false, 50), 'label');
        yield "</label>
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "commentaire", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "commentaire", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 53
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 53), "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "candidat", [], "any", false, false, false, 60), 'label');
        yield "</label>
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "candidat", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "candidat", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            yield "                            <div class=\"form-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </div>
                </div>






                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-gradient px-5 py-2 fs-5 rounded-pill animate__animated animate__pulse animate__delay-1s\">
                        ✨ Valider l'entretien ✨
                    </button>
                </div>

                ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\" class=\"btn btn-outline-dark btn-sm rounded-pill animate__animated animate__fadeInUp\">
                ← Retour à la liste des Offres
            </a>
        </div>
    </div>

    <style>
        .text-gradient {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-gradient {
            background: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
            color: white;
            border: none;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #11998e 0%, #38ef7d 100%);
        }
        .form-error {
            color: red;
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }
    </style>
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
        return "entretien/newcandidat.html.twig";
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
        return array (  275 => 84,  267 => 79,  251 => 65,  242 => 63,  238 => 62,  234 => 61,  230 => 60,  223 => 55,  214 => 53,  210 => 52,  206 => 51,  202 => 50,  197 => 47,  188 => 45,  184 => 44,  180 => 43,  176 => 42,  169 => 37,  160 => 35,  156 => 34,  151 => 32,  145 => 29,  140 => 26,  131 => 24,  127 => 23,  122 => 21,  116 => 18,  109 => 14,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}✨ Planifier un Entretien ✨{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-gradient mb-5 fw-bold display-4 animate__animated animate__fadeInDown\">
            🚀 Planifiez votre Entretien comme un Pro
        </h1>

        <div class=\"card shadow-lg border-0 rounded-5 p-5 bg-light animate__animated animate__fadeInUp\">
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">{{ form_label(form.dateEntretien) }}</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bi bi-calendar-event\"></i></span>
                            {{ form_widget(form.dateEntretien, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        {% for error in form.dateEntretien.vars.errors %}
                            <div class=\"form-error\">{{ error.message }}</div>
                        {% endfor %}
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">{{ form_label(form.heureEntretien) }}</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text\"><i class=\"bi bi-clock-history\"></i></span>
                            {{ form_widget(form.heureEntretien, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        {% for error in form.heureEntretien.vars.errors %}
                            <div class=\"form-error\">{{ error.message }}</div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">{{ form_label(form.typeEntretien) }}</label>
                        {{ form_widget(form.typeEntretien, {'attr': {'class': 'form-select'}}) }}
                        {% for error in form.typeEntretien.vars.errors %}
                            <div class=\"form-error\">{{ error.message }}</div>
                        {% endfor %}
                    </div>

                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">{{ form_label(form.commentaire) }}</label>
                        {{ form_widget(form.commentaire, {'attr': {'class': 'form-control', 'rows': 4}}) }}
                        {% for error in form.commentaire.vars.errors %}
                            <div class=\"form-error\">{{ error.message }}</div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6 mb-4\">
                        <label class=\"form-label fw-semibold\">{{ form_label(form.candidat) }}</label>
                        {{ form_widget(form.candidat, {'attr': {'class': 'form-select'}}) }}
                        {% for error in form.candidat.vars.errors %}
                            <div class=\"form-error\">{{ error.message }}</div>
                        {% endfor %}
                    </div>
                </div>






                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-gradient px-5 py-2 fs-5 rounded-pill animate__animated animate__pulse animate__delay-1s\">
                        ✨ Valider l'entretien ✨
                    </button>
                </div>

                {{ form_end(form) }}
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_offreemploi_index') }}\" class=\"btn btn-outline-dark btn-sm rounded-pill animate__animated animate__fadeInUp\">
                ← Retour à la liste des Offres
            </a>
        </div>
    </div>

    <style>
        .text-gradient {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-gradient {
            background: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
            color: white;
            border: none;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #11998e 0%, #38ef7d 100%);
        }
        .form-error {
            color: red;
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }
    </style>
{% endblock %}", "entretien/newcandidat.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\newcandidat.html.twig");
    }
}

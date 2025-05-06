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

/* assurance/recherche.html.twig */
class __TwigTemplate_0439afac1310dde5b95092461c004193 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assurance/recherche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assurance/recherche.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "assurance/recherche.html.twig", 1);
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

        yield "Recherche Assurance";
        
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
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
            background-image: url('/images/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            filter: blur(0px) brightness(1); /* Garde normal ici pour lisibilité */
        }

        .assurance-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .assurance-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .assurance-header {
            background: linear-gradient(135deg, #00b894, #55efc4);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body p {
            font-size: 0.95rem;
            color: #555;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }

        /* Style pour le formulaire */
        .form-inline {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
        yield "<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-5\">🔍 Recherche d'Assurance</h1>

    ";
        // line 73
        yield "    <div class=\"form-inline\">
        ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start');
        yield "
            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "typeAssurance", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        yield "
    </div>

    <!-- Card Wrapper Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Assurances</h5>
        <div class=\"card-header-right\">
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_assurance_new");
        yield "\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\"></i> Ajouter
            </a>
        </div>
    </div>

    <div class=\"card-block\">
        <div class=\"container py-4\">
            <div class=\"row g-4\">
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["assurances"]) || array_key_exists("assurances", $context) ? $context["assurances"] : (function () { throw new RuntimeError('Variable "assurances" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["assurance"]) {
            // line 95
            yield "                    <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 95) * 100), "html", null, true);
            yield "\">
                        <div class=\"card assurance-card h-100\">
                            <div class=\"assurance-header\">
                                🛡️ ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "nom", [], "any", false, false, false, 98), "html", null, true);
            yield "
                            </div>
                            <div class=\"card-body\">
                                <p><strong>📂 Type :</strong> ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "type", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                                <p><strong>📅 Expiration :</strong> ";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "dateExpiration", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "dateExpiration", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</p>
                                <p><strong>👤 Utilisateur :</strong> ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "user", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "user", [], "any", false, false, false, 103), "prenom", [], "any", false, false, false, 103), "html", null, true);
            yield "</p>
                            </div>
                            <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                                <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_assurance_show", ["idA" => CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "idA", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                                <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_assurance_edit", ["idA" => CoreExtension::getAttribute($this->env, $this->source, $context["assurance"], "idA", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"btn btn-outline-success btn-sm rounded-pill\">✏️ Modifier</a>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 111
        if (!$context['_iterated']) {
            // line 112
            yield "                    <div class=\"col-12 text-center text-muted mt-5\">
                        Aucune assurance trouvée.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['assurance'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "            </div>
        </div>
    </div>
</div>
<!-- Card Wrapper End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
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

        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
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
        return "assurance/recherche.html.twig";
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
        return array (  336 => 124,  323 => 123,  307 => 116,  298 => 112,  296 => 111,  279 => 107,  275 => 106,  267 => 103,  263 => 102,  259 => 101,  253 => 98,  246 => 95,  228 => 94,  216 => 85,  205 => 77,  200 => 75,  196 => 74,  193 => 73,  188 => 69,  175 => 68,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Recherche Assurance{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
            background-image: url('/images/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            filter: blur(0px) brightness(1); /* Garde normal ici pour lisibilité */
        }

        .assurance-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .assurance-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .assurance-header {
            background: linear-gradient(135deg, #00b894, #55efc4);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body p {
            font-size: 0.95rem;
            color: #555;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }

        /* Style pour le formulaire */
        .form-inline {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-5\">🔍 Recherche d'Assurance</h1>

    {# Formulaire de recherche avec le bouton à droite du sélecteur #}
    <div class=\"form-inline\">
        {{ form_start(form) }}
            {{ form_row(form.typeAssurance, {'attr': {'class': 'form-control'}}) }}
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        {{ form_end(form) }}
    </div>

    <!-- Card Wrapper Start -->
<div class=\"card\">
    <div class=\"card-header\">
        <h5>Liste des Assurances</h5>
        <div class=\"card-header-right\">
            <a href=\"{{ path('app_assurance_new') }}\" class=\"btn btn-sm btn-success\">
                <i class=\"fa fa-plus\"></i> Ajouter
            </a>
        </div>
    </div>

    <div class=\"card-block\">
        <div class=\"container py-4\">
            <div class=\"row g-4\">
                {% for assurance in assurances %}
                    <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                        <div class=\"card assurance-card h-100\">
                            <div class=\"assurance-header\">
                                🛡️ {{ assurance.nom }}
                            </div>
                            <div class=\"card-body\">
                                <p><strong>📂 Type :</strong> {{ assurance.type }}</p>
                                <p><strong>📅 Expiration :</strong> {{ assurance.dateExpiration ? assurance.dateExpiration|date('d/m/Y') : '-' }}</p>
                                <p><strong>👤 Utilisateur :</strong> {{ assurance.user.nom }} {{ assurance.user.prenom }}</p>
                            </div>
                            <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                                <a href=\"{{ path('app_assurance_show', {'idA': assurance.idA}) }}\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                                <a href=\"{{ path('app_assurance_edit', {'idA': assurance.idA}) }}\" class=\"btn btn-outline-success btn-sm rounded-pill\">✏️ Modifier</a>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12 text-center text-muted mt-5\">
                        Aucune assurance trouvée.
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
<!-- Card Wrapper End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
{% endblock %}
", "assurance/recherche.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\assurance\\recherche.html.twig");
    }
}

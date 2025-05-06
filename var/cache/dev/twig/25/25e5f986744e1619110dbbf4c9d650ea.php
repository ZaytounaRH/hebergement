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

/* reclamation/index.html.twig */
class __TwigTemplate_359d0631d70b0d1e1ae73db4cee6eb2e extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Liste des Réclamations";
        
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
        }

        .reclamation-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .reclamation-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .reclamation-header {
            background: linear-gradient(135deg, #e17055, #d63031);
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
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

        // line 60
        yield "<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-4\">📨 Liste des Réclamations</h1>

    <div class=\"mb-5\">
    ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index"), "method" => "POST"]);
        yield "
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "incidentType", [], "any", false, false, false, 67), 'row');
        yield "
                </div>
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-outline-primary w-100 btn-custom\">🔎 Rechercher</button>
                </div>
            </div>
        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
    </div>

    <div class=\"row g-4\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 77, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 78
            yield "            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78) * 100), "html", null, true);
            yield "\">
                <div class=\"card reclamation-card h-100\">
                    <div class=\"reclamation-header\">
                        📝 ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 81), "html", null, true);
            yield "
                    </div>
                    <div class=\"card-body\">
                        <p><strong>📄 Description :</strong> ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
                        <p><strong>⚠️ Incident :</strong> ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "incidentType", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
                        <p><strong>📅 Soumise le :</strong> ";
            // line 86
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateSoumission", [], "any", false, false, false, 86)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateSoumission", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</p>
                        <p><strong>🔍 Statut :</strong> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>
                        <p><strong>🔥 Priorité :</strong> ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "priorite", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>
                        <p><strong>🛡️ Assurance :</strong> ";
            // line 89
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "assurance", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "assurance", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true)) : ("-"));
            yield "</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["idR" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idR", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                        <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idR" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idR", [], "any", false, false, false, 93)]), "html", null, true);
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
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune réclamation trouvée.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "    </div>

    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-danger btn-lg btn-custom\">
            ➕ Ajouter une réclamation
        </a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
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
        return "reclamation/index.html.twig";
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
        return array (  331 => 113,  318 => 112,  301 => 105,  296 => 102,  287 => 98,  285 => 97,  268 => 93,  264 => 92,  258 => 89,  254 => 88,  250 => 87,  246 => 86,  242 => 85,  238 => 84,  232 => 81,  225 => 78,  207 => 77,  200 => 73,  191 => 67,  185 => 64,  179 => 60,  166 => 59,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

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
        }

        .reclamation-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .reclamation-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 32px rgba(0, 0, 0, 0.15);
        }

        .reclamation-header {
            background: linear-gradient(135deg, #e17055, #d63031);
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
    </style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-4\">📨 Liste des Réclamations</h1>

    <div class=\"mb-5\">
    {{ form_start(form, {'action': path('app_reclamation_index'), 'method': 'POST'}) }}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-4\">
                    {{ form_row(form.incidentType) }}
                </div>
                <div class=\"col-md-2 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-outline-primary w-100 btn-custom\">🔎 Rechercher</button>
                </div>
            </div>
        {{ form_end(form) }}
    </div>

    <div class=\"row g-4\">
        {% for reclamation in reclamations %}
            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                <div class=\"card reclamation-card h-100\">
                    <div class=\"reclamation-header\">
                        📝 {{ reclamation.titre }}
                    </div>
                    <div class=\"card-body\">
                        <p><strong>📄 Description :</strong> {{ reclamation.description }}</p>
                        <p><strong>⚠️ Incident :</strong> {{ reclamation.incidentType }}</p>
                        <p><strong>📅 Soumise le :</strong> {{ reclamation.dateSoumission ? reclamation.dateSoumission|date('d/m/Y') : '-' }}</p>
                        <p><strong>🔍 Statut :</strong> {{ reclamation.statut }}</p>
                        <p><strong>🔥 Priorité :</strong> {{ reclamation.priorite }}</p>
                        <p><strong>🛡️ Assurance :</strong> {{ reclamation.assurance ? reclamation.assurance.nom : '-' }}</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"{{ path('app_reclamation_show', {'idR': reclamation.idR}) }}\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                        <a href=\"{{ path('app_reclamation_edit', {'idR': reclamation.idR}) }}\" class=\"btn btn-outline-success btn-sm rounded-pill\">✏️ Modifier</a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune réclamation trouvée.
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-danger btn-lg btn-custom\">
            ➕ Ajouter une réclamation
        </a>
    </div>
</div>
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
", "reclamation/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\reclamation\\index.html.twig");
    }
}

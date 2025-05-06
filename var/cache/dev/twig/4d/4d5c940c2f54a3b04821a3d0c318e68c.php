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

/* reponse/index.html.twig */
class __TwigTemplate_1efc23369e6f6dcc85fff7524313013a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "reponse/index.html.twig", 1);
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

        yield "Liste des Réponses";
        
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

        .reponse-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .reponse-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
        }

        .reponse-header {
            background: linear-gradient(135deg, #6c5ce7, #341f97);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }

        .pagination {
            margin-top: 2rem;
            text-align: center;
        }

        .pagination a {
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
            color: #341f97;
        }

        .pagination span {
            margin: 0 10px;
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-4\">🗣️ Liste des Réponses</h1>

    <div class=\"row g-4\">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 76, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 77
            yield "            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 77) * 100), "html", null, true);
            yield "\">
                <div class=\"card reponse-card h-100\">
                    <div class=\"reponse-header\">
                        📨 À : ";
            // line 80
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "reclamation", [], "any", false, false, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "reclamation", [], "any", false, false, false, 80), "titre", [], "any", false, false, false, 80), "html", null, true)) : ("Réclamation inconnue"));
            yield "
                    </div>
                    <div class=\"card-body\">
                        <p><strong>📝 Contenu :</strong><br> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenu", [], "any", false, false, false, 83), "html", null, true);
            yield "</p>
                        <p><strong>📅 Date de réponse :</strong> ";
            // line 84
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateRep", [], "any", false, false, false, 84)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateRep", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_show", ["idRep" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idRep", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                        <a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["idRep" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idRep", [], "any", false, false, false, 88)]), "html", null, true);
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
        // line 92
        if (!$context['_iterated']) {
            // line 93
            yield "            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune réponse trouvée.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "    </div>

    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
        yield "\" class=\"btn btn-primary btn-lg btn-custom\">➕ Ajouter une réponse</a>
    </div>

    ";
        // line 104
        yield "    <div class=\"pagination mt-4\">
        ";
        // line 105
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 105, $this->source); })()) > 1)) {
            // line 106
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 106, $this->source); })()) - 1)]), "html", null, true);
            yield "\">← Précédent</a>
        ";
        }
        // line 108
        yield "        <span>Page ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "</span>
        <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 109, $this->source); })()) + 1)]), "html", null, true);
        yield "\">Suivant →</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
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
        return "reponse/index.html.twig";
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
        return array (  325 => 115,  312 => 114,  297 => 109,  292 => 108,  286 => 106,  284 => 105,  281 => 104,  275 => 100,  270 => 97,  261 => 93,  259 => 92,  242 => 88,  238 => 87,  232 => 84,  228 => 83,  222 => 80,  215 => 77,  197 => 76,  191 => 72,  178 => 71,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Liste des Réponses{% endblock %}

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

        .reponse-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .reponse-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
        }

        .reponse-header {
            background: linear-gradient(135deg, #6c5ce7, #341f97);
            color: white;
            font-weight: bold;
            padding: 1rem;
            text-align: center;
            font-size: 1.2rem;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
        }

        .pagination {
            margin-top: 2rem;
            text-align: center;
        }

        .pagination a {
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
            color: #341f97;
        }

        .pagination span {
            margin: 0 10px;
            font-weight: bold;
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <h1 class=\"text-center text-dark fw-bold mb-4\">🗣️ Liste des Réponses</h1>

    <div class=\"row g-4\">
        {% for reponse in reponses %}
            <div class=\"col-md-6 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                <div class=\"card reponse-card h-100\">
                    <div class=\"reponse-header\">
                        📨 À : {{ reponse.reclamation ? reponse.reclamation.titre : 'Réclamation inconnue' }}
                    </div>
                    <div class=\"card-body\">
                        <p><strong>📝 Contenu :</strong><br> {{ reponse.contenu }}</p>
                        <p><strong>📅 Date de réponse :</strong> {{ reponse.dateRep ? reponse.dateRep|date('d/m/Y') : '-' }}</p>
                    </div>
                    <div class=\"card-footer text-center bg-transparent border-0 pb-3\">
                        <a href=\"{{ path('app_reponse_show', {'idRep': reponse.idRep}) }}\" class=\"btn btn-outline-primary btn-sm rounded-pill me-2\">🔍 Détails</a>
                        <a href=\"{{ path('app_reponse_edit', {'idRep': reponse.idRep}) }}\" class=\"btn btn-outline-success btn-sm rounded-pill\">✏️ Modifier</a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center text-muted mt-5\">
                Aucune réponse trouvée.
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"{{ path('app_reponse_new') }}\" class=\"btn btn-primary btn-lg btn-custom\">➕ Ajouter une réponse</a>
    </div>

    {# Pagination #}
    <div class=\"pagination mt-4\">
        {% if current_page > 1 %}
            <a href=\"{{ path('app_reponse_index', {'page': current_page - 1}) }}\">← Précédent</a>
        {% endif %}
        <span>Page {{ current_page }}</span>
        <a href=\"{{ path('app_reponse_index', {'page': current_page + 1}) }}\">Suivant →</a>
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
", "reponse/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\reponse\\index.html.twig");
    }
}

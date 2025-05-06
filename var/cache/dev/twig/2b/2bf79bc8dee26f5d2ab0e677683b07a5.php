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

/* conge/index.html.twig */
class __TwigTemplate_abd907e9da3b585b911f9e8ce76dbff3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conge/index.html.twig", 1);
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

        yield "Gestion des Congés";
        
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
            background-color: #f4f6f9;
        }
        .card-conge {
            transition: transform 0.3s ease;
        }
        .card-conge:hover {
            transform: scale(1.02);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
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

        // line 22
        yield "<div class=\"container py-5\">
    <h2 class=\"text-center text-uppercase fw-bold text-primary mb-5 border-bottom pb-3\">Liste des Congés</h2>

    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conge_new");
        yield "\" class=\"btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm\">
            <i class=\"bi bi-plus-lg me-2\"></i> Nouveau congé
        </a>
    </div>

    ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 31, $this->source); })())) > 0)) {
            // line 32
            yield "        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conges"]) || array_key_exists("conges", $context) ? $context["conges"] : (function () { throw new RuntimeError('Variable "conges" does not exist.', 33, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["conge"]) {
                // line 34
                yield "                <div class=\"col\" data-aos=\"fade-up\" data-aos-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 34) * 100), "html", null, true);
                yield "\">
                    <div class=\"card border-0 shadow-sm rounded-4 h-100 bg-white card-conge\">
                        <div class=\"card-body p-4\">
                            <ul class=\"list-unstyled mb-3 text-secondary\">
                                <li><strong class=\"text-dark\">Date début :</strong> ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateDebut", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                yield "</li>
                                <li><strong class=\"text-dark\">Date fin :</strong> ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "dateFin", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
                yield "</li>
                                <li><strong class=\"text-dark\">Motif :</strong> ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "motif", [], "any", false, false, false, 40), "html", null, true);
                yield "</li>
                            </ul>

                            <div class=\"mb-3\">
                                ";
                // line 44
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 44) == "EN_ATTENTE")) {
                    // line 45
                    yield "                                    <span class=\"badge rounded-pill bg-warning text-dark px-3 py-2\">En attente</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["conge"], "statut", [], "any", false, false, false, 46) == "ACCEPTE")) {
                    // line 47
                    yield "                                    <span class=\"badge rounded-pill bg-success px-3 py-2\">Accepté</span>
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["conge"], "statut", [], "any", false, false, false, 48) == "REFUSE")) {
                    // line 49
                    yield "                                    <span class=\"badge rounded-pill bg-danger px-3 py-2\">Refusé</span>
                                ";
                } else {
                    // line 51
                    yield "                                    <span class=\"badge rounded-pill bg-secondary px-3 py-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conge"], "statut", [], "any", false, false, false, 51), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 53
                yield "                            </div>

                            
                        </div>
                    </div>
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['conge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "        </div>
    ";
        } else {
            // line 62
            yield "        <div class=\"alert alert-info text-center mt-4\" role=\"alert\">
            Aucun congé enregistré pour le moment.
        </div>
    ";
        }
        // line 66
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 800,
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
        return "conge/index.html.twig";
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
        return array (  277 => 70,  264 => 69,  252 => 66,  246 => 62,  242 => 60,  222 => 53,  216 => 51,  212 => 49,  210 => 48,  207 => 47,  205 => 46,  202 => 45,  200 => 44,  193 => 40,  189 => 39,  185 => 38,  177 => 34,  160 => 33,  157 => 32,  155 => 31,  147 => 26,  141 => 22,  128 => 21,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Congés{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .card-conge {
            transition: transform 0.3s ease;
        }
        .card-conge:hover {
            transform: scale(1.02);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h2 class=\"text-center text-uppercase fw-bold text-primary mb-5 border-bottom pb-3\">Liste des Congés</h2>

    <div class=\"d-flex justify-content-end mb-4\">
        <a href=\"{{ path('app_conge_new') }}\" class=\"btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm\">
            <i class=\"bi bi-plus-lg me-2\"></i> Nouveau congé
        </a>
    </div>

    {% if conges|length > 0 %}
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            {% for conge in conges %}
                <div class=\"col\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                    <div class=\"card border-0 shadow-sm rounded-4 h-100 bg-white card-conge\">
                        <div class=\"card-body p-4\">
                            <ul class=\"list-unstyled mb-3 text-secondary\">
                                <li><strong class=\"text-dark\">Date début :</strong> {{ conge.dateDebut|date('d/m/Y') }}</li>
                                <li><strong class=\"text-dark\">Date fin :</strong> {{ conge.dateFin|date('d/m/Y') }}</li>
                                <li><strong class=\"text-dark\">Motif :</strong> {{ conge.motif }}</li>
                            </ul>

                            <div class=\"mb-3\">
                                {% if conge.statut == 'EN_ATTENTE' %}
                                    <span class=\"badge rounded-pill bg-warning text-dark px-3 py-2\">En attente</span>
                                {% elseif conge.statut == 'ACCEPTE' %}
                                    <span class=\"badge rounded-pill bg-success px-3 py-2\">Accepté</span>
                                {% elseif conge.statut == 'REFUSE' %}
                                    <span class=\"badge rounded-pill bg-danger px-3 py-2\">Refusé</span>
                                {% else %}
                                    <span class=\"badge rounded-pill bg-secondary px-3 py-2\">{{ conge.statut }}</span>
                                {% endif %}
                            </div>

                            
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"alert alert-info text-center mt-4\" role=\"alert\">
            Aucun congé enregistré pour le moment.
        </div>
    {% endif %}
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/aos@2.3.4/dist/aos.js\"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
{% endblock %}
", "conge/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\conge\\index.html.twig");
    }
}

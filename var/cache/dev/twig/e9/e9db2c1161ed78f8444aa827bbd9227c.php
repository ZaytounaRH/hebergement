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

/* ocr/index.html.twig */
class __TwigTemplate_f68322a41f2d00c6e5fb4fccf3feb606 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ocr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ocr/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "ocr/index.html.twig", 1);
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

        yield "📝 Modifier le texte OCR";
        
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
            background-image: url('/images/background-ocr.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .ocr-card {
            background: #ffffffee;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        h1, h2 {
            font-weight: bold;
            color: #2c3e50;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
        }

        .btn-scan {
            background-color: #27ae60;
            color: white;
        }

        .btn-scan:hover {
            background-color: #219150;
        }

        .btn-export {
            background-color: #c0392b;
            color: white;
        }

        .btn-export:hover {
            background-color: #a93226;
        }

        pre {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "<div class=\"container py-5\">
    <div class=\"ocr-card\" data-aos=\"zoom-in\">
        <h1 class=\"text-center mb-4\">📝 Modifier le texte OCR</h1>

        <!-- Formulaire Upload -->
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"mb-5\">
            <div class=\"mb-3\">
                <label for=\"document\" class=\"form-label fw-bold\">📄 Sélectionner un document :</label>
                <input class=\"form-control\" type=\"file\" name=\"document\" id=\"document\" required>
            </div>
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-scan btn-custom\">📤 Scanner</button>
            </div>
        </form>

        ";
        // line 78
        if ((array_key_exists("texte", $context) && (isset($context["texte"]) || array_key_exists("texte", $context) ? $context["texte"] : (function () { throw new RuntimeError('Variable "texte" does not exist.', 78, $this->source); })()))) {
            // line 79
            yield "            <hr>
            <h2>📋 Texte détecté :</h2>

            <!-- Formulaire Modification -->
            <form method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"texteModifie\" class=\"form-label fw-bold\">✏️ Modifier le texte :</label>
                    <textarea class=\"form-control\" name=\"texteModifie\" id=\"texteModifie\" rows=\"10\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["texte"]) || array_key_exists("texte", $context) ? $context["texte"] : (function () { throw new RuntimeError('Variable "texte" does not exist.', 86, $this->source); })()), "html", null, true);
            yield "</textarea>
                </div>
                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-custom\">💾 Soumettre les modifications</button>
                </div>
            </form>
        ";
        }
        // line 93
        yield "
        ";
        // line 94
        if ((array_key_exists("texteModifie", $context) && (isset($context["texteModifie"]) || array_key_exists("texteModifie", $context) ? $context["texteModifie"] : (function () { throw new RuntimeError('Variable "texteModifie" does not exist.', 94, $this->source); })()))) {
            // line 95
            yield "            <hr>
            <h2>🖨️ Texte modifié :</h2>
            <pre>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["texteModifie"]) || array_key_exists("texteModifie", $context) ? $context["texteModifie"] : (function () { throw new RuntimeError('Variable "texteModifie" does not exist.', 97, $this->source); })()), "html", null, true);
            yield "</pre>
            <div class=\"text-center mt-3\">
                <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_pdf", ["texte" => (isset($context["texteModifie"]) || array_key_exists("texteModifie", $context) ? $context["texteModifie"] : (function () { throw new RuntimeError('Variable "texteModifie" does not exist.', 99, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-export btn-custom\">📄 Exporter en PDF</a>
            </div>
        ";
        }
        // line 102
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
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
        return "ocr/index.html.twig";
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
        return array (  266 => 107,  253 => 106,  240 => 102,  234 => 99,  229 => 97,  225 => 95,  223 => 94,  220 => 93,  210 => 86,  201 => 79,  199 => 78,  182 => 63,  169 => 62,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}📝 Modifier le texte OCR{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://unpkg.com/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
    <style>
        body {
            background-image: url('/images/background-ocr.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .ocr-card {
            background: #ffffffee;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        h1, h2 {
            font-weight: bold;
            color: #2c3e50;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
        }

        .btn-scan {
            background-color: #27ae60;
            color: white;
        }

        .btn-scan:hover {
            background-color: #219150;
        }

        .btn-export {
            background-color: #c0392b;
            color: white;
        }

        .btn-export:hover {
            background-color: #a93226;
        }

        pre {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
        }
    </style>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"ocr-card\" data-aos=\"zoom-in\">
        <h1 class=\"text-center mb-4\">📝 Modifier le texte OCR</h1>

        <!-- Formulaire Upload -->
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"mb-5\">
            <div class=\"mb-3\">
                <label for=\"document\" class=\"form-label fw-bold\">📄 Sélectionner un document :</label>
                <input class=\"form-control\" type=\"file\" name=\"document\" id=\"document\" required>
            </div>
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-scan btn-custom\">📤 Scanner</button>
            </div>
        </form>

        {% if texte is defined and texte %}
            <hr>
            <h2>📋 Texte détecté :</h2>

            <!-- Formulaire Modification -->
            <form method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"texteModifie\" class=\"form-label fw-bold\">✏️ Modifier le texte :</label>
                    <textarea class=\"form-control\" name=\"texteModifie\" id=\"texteModifie\" rows=\"10\">{{ texte }}</textarea>
                </div>
                <div class=\"text-center\">
                    <button type=\"submit\" class=\"btn btn-primary btn-custom\">💾 Soumettre les modifications</button>
                </div>
            </form>
        {% endif %}

        {% if texteModifie is defined and texteModifie %}
            <hr>
            <h2>🖨️ Texte modifié :</h2>
            <pre>{{ texteModifie }}</pre>
            <div class=\"text-center mt-3\">
                <a href=\"{{ path('export_pdf', {'texte': texteModifie}) }}\" class=\"btn btn-export btn-custom\">📄 Exporter en PDF</a>
            </div>
        {% endif %}
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
", "ocr/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\ocr\\index.html.twig");
    }
}

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

/* entretien/merci.html.twig */
class __TwigTemplate_d8110bae9f1a5b19bc3e44f6b8d57998 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/merci.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entretien/merci.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entretien/merci.html.twig", 1);
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

        yield "Merci";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"card rounded-lg shadow-lg border-0 p-5 bg-light\">
                    <div class=\"text-center mb-4\">
                        <i class=\"fas fa-check-circle fa-6x text-success animate__animated animate__fadeIn\"></i>
                    </div>
                    <h1 class=\"text-center mb-4 animate__animated animate__fadeIn animate__delay-1s\">Merci !</h1>
                    <p class=\"lead text-center mb-5 animate__animated animate__fadeIn animate__delay-2s\">
                        Votre demande d’entretien a bien été envoyée. Nous vous contacterons très prochainement.
                    </p>
                    <div class=\"text-center\">
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\" class=\"btn btn-primary btn-lg px-5 py-3 rounded-pill text-white shadow-sm animate__animated animate__fadeIn animate__delay-3s\">
                            Retour à la liste des offres
                        </a>
                    </div>

                    <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_candidats", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"btn btn-info\">Voir mes entretiens</a>

                </div>
            </div>
        </div>


 <!-- Intégration du Messenger -->
    <script src=\"https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1\"></script>
    <df-messenger
      intent=\"WELCOME\"
      chat-title=\"Chatchouta\"
      agent-id=\"e3807af8-52a3-450d-86b1-381553c710b2\"
      language-code=\"fr\"
    ></df-messenger>

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
        return "entretien/merci.html.twig";
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
        return array (  122 => 23,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Merci{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"card rounded-lg shadow-lg border-0 p-5 bg-light\">
                    <div class=\"text-center mb-4\">
                        <i class=\"fas fa-check-circle fa-6x text-success animate__animated animate__fadeIn\"></i>
                    </div>
                    <h1 class=\"text-center mb-4 animate__animated animate__fadeIn animate__delay-1s\">Merci !</h1>
                    <p class=\"lead text-center mb-5 animate__animated animate__fadeIn animate__delay-2s\">
                        Votre demande d’entretien a bien été envoyée. Nous vous contacterons très prochainement.
                    </p>
                    <div class=\"text-center\">
                        <a href=\"{{ path('app_offreemploi_index') }}\" class=\"btn btn-primary btn-lg px-5 py-3 rounded-pill text-white shadow-sm animate__animated animate__fadeIn animate__delay-3s\">
                            Retour à la liste des offres
                        </a>
                    </div>

                    <a href=\"{{ path('app_candidats', {'id': candidat.id}) }}\" class=\"btn btn-info\">Voir mes entretiens</a>

                </div>
            </div>
        </div>


 <!-- Intégration du Messenger -->
    <script src=\"https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1\"></script>
    <df-messenger
      intent=\"WELCOME\"
      chat-title=\"Chatchouta\"
      agent-id=\"e3807af8-52a3-450d-86b1-381553c710b2\"
      language-code=\"fr\"
    ></df-messenger>

    </div>
{% endblock %}
", "entretien/merci.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\entretien\\merci.html.twig");
    }
}

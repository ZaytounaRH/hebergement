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

/* chatbot/chat.html.twig */
class __TwigTemplate_433df02b4d98a4dc5b5928f3d210c817 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/chat.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Chatbot - Entretien</title>
</head>
<body>
    <h1>Bienvenue sur le chatbot de l'entretien !</h1>

    <!-- Ton autre contenu ici -->

    <!-- Intégration du Messenger -->
    <script src=\"https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1\"></script>
    <df-messenger
      intent=\"WELCOME\"
      chat-title=\"ChatEntretien\"
      agent-id=\"e3807af8-52a3-450d-86b1-381553c710b2\"
      language-code=\"fr\"
    ></df-messenger>
</body>
</html>
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
        return "chatbot/chat.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Chatbot - Entretien</title>
</head>
<body>
    <h1>Bienvenue sur le chatbot de l'entretien !</h1>

    <!-- Ton autre contenu ici -->

    <!-- Intégration du Messenger -->
    <script src=\"https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1\"></script>
    <df-messenger
      intent=\"WELCOME\"
      chat-title=\"ChatEntretien\"
      agent-id=\"e3807af8-52a3-450d-86b1-381553c710b2\"
      language-code=\"fr\"
    ></df-messenger>
</body>
</html>
", "chatbot/chat.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\chatbot\\chat.html.twig");
    }
}

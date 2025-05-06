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

/* chatbot/chatbot.html.twig */
class __TwigTemplate_67b22fb630c5b4f7fa6ff1229facf761 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/chatbot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot/chatbot.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "chatbot/chatbot.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t<div class=\"container\">
\t\t<h2 class=\"mb-4\">Questionnez notre Chatbot !</h2>
\t\t<div class=\"form-group mb-4\">
\t\t\t<input type=\"text\" class=\"form-control\" id=\"userInput\" placeholder=\"Tapez votre question ici !\"/>
\t\t</div>
\t\t<button class=\"btn btn-success\" onclick=\"sendMessage()\">Envoyer</button>
\t\t<div id=\"response\"></div>
\t</div>

\t<script src=\"https://cdn.jsdelivr.net/npm/marked/marked.min.js\"></script>


\t<script>
\t\tasync function sendMessage() {
const input = document.getElementById('userInput').value; // Fixed typo
const responseDiv = document.getElementById('response');

if (! input) {
responseDiv.innerHTML = 'Please enter a message.';
return;
}

responseDiv.innerHTML = 'Loading...';

try {
const response = await fetch(\"https://openrouter.ai/api/v1/chat/completions\", {
method: \"POST\",
headers: {
Authorization: \"Bearer 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\",
\"X-Title\": \"Agriwise\",
\"Content-Type\": \"application/json\"
},
body: JSON.stringify(
{
\"model\": \"deepseek/deepseek-r1:free\",
\"messages\": [
{
\"role\": \"user\",
\"content\": input
}
]
}
)
});

const data = await response.json();
console.log(data);

const markdownText = data.choices ?. [0] ?. message ?. content || 'No response received.';
responseDiv.innerHTML = marked.parse(markdownText);

} catch (error) {
responseDiv.innerHTML = 'Error: ' + error.message;
}
}
\t</script>


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
        return "chatbot/chatbot.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block content %}
\t<div class=\"container\">
\t\t<h2 class=\"mb-4\">Questionnez notre Chatbot !</h2>
\t\t<div class=\"form-group mb-4\">
\t\t\t<input type=\"text\" class=\"form-control\" id=\"userInput\" placeholder=\"Tapez votre question ici !\"/>
\t\t</div>
\t\t<button class=\"btn btn-success\" onclick=\"sendMessage()\">Envoyer</button>
\t\t<div id=\"response\"></div>
\t</div>

\t<script src=\"https://cdn.jsdelivr.net/npm/marked/marked.min.js\"></script>


\t<script>
\t\tasync function sendMessage() {
const input = document.getElementById('userInput').value; // Fixed typo
const responseDiv = document.getElementById('response');

if (! input) {
responseDiv.innerHTML = 'Please enter a message.';
return;
}

responseDiv.innerHTML = 'Loading...';

try {
const response = await fetch(\"https://openrouter.ai/api/v1/chat/completions\", {
method: \"POST\",
headers: {
Authorization: \"Bearer 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\",
\"X-Title\": \"Agriwise\",
\"Content-Type\": \"application/json\"
},
body: JSON.stringify(
{
\"model\": \"deepseek/deepseek-r1:free\",
\"messages\": [
{
\"role\": \"user\",
\"content\": input
}
]
}
)
});

const data = await response.json();
console.log(data);

const markdownText = data.choices ?. [0] ?. message ?. content || 'No response received.';
responseDiv.innerHTML = marked.parse(markdownText);

} catch (error) {
responseDiv.innerHTML = 'Error: ' + error.message;
}
}
\t</script>


{% endblock %}
", "chatbot/chatbot.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\chatbot\\chatbot.html.twig");
    }
}

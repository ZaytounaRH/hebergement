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

/* user/show.html.twig */
class __TwigTemplate_742a88772cf857b25a69b1fd1e486bac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "user/show.html.twig", 1);
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

        yield "User Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div id=\"pcoded\" class=\"pcoded\">
    <div class=\"pcoded-overlay-box\"></div>
    <div class=\"pcoded-container navbar-wrapper\">

        <div class=\"pcoded-main-container\">
            <div class=\"pcoded-wrapper\">

                <div class=\"pcoded-content\">
                    <div class=\"pcoded-inner-content\">
                        <div class=\"main-body\">
                            <div class=\"page-wrapper\">

                                <!-- Page body start -->
                                <div class=\"page-body\">

                                    <div class=\"card-header\" style=\"background-color:rgb(46, 147, 205); color: white;\">
                                        <h5>User Details</h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <table class=\"table table-striped\">
                                                <tbody>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Prénom</th>
                                                        <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Numéro de téléphone</th>
                                                        <td>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "numTel", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adresse</th>
                                                        <td>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "address", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Genre</th>
                                                        <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "gender", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date de naissance</th>
                                                        <td>";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "dateDeNaissance", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type d'utilisateur</th>
                                                        <td>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "userType", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jours ouvrables</th>
                                                        <td>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "joursOuvrables", [], "any", false, false, false, 63), "html", null, true);
        yield "</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class=\"text-right mt-3\">
                                                <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"btn btn-secondary\">Retour</a>
                                                <a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                                                ";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Page body end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
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
        return "user/show.html.twig";
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
        return array (  242 => 90,  229 => 89,  201 => 71,  197 => 70,  193 => 69,  184 => 63,  177 => 59,  170 => 55,  163 => 51,  156 => 47,  149 => 43,  142 => 39,  135 => 35,  128 => 31,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}User Details{% endblock %}

{% block content %}
<div id=\"pcoded\" class=\"pcoded\">
    <div class=\"pcoded-overlay-box\"></div>
    <div class=\"pcoded-container navbar-wrapper\">

        <div class=\"pcoded-main-container\">
            <div class=\"pcoded-wrapper\">

                <div class=\"pcoded-content\">
                    <div class=\"pcoded-inner-content\">
                        <div class=\"main-body\">
                            <div class=\"page-wrapper\">

                                <!-- Page body start -->
                                <div class=\"page-body\">

                                    <div class=\"card-header\" style=\"background-color:rgb(46, 147, 205); color: white;\">
                                        <h5>User Details</h5>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <table class=\"table table-striped\">
                                                <tbody>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>{{ user.email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <td>{{ user.nom }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Prénom</th>
                                                        <td>{{ user.prenom }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Numéro de téléphone</th>
                                                        <td>{{ user.numTel }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adresse</th>
                                                        <td>{{ user.address }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Genre</th>
                                                        <td>{{ user.gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date de naissance</th>
                                                        <td>{{ user.dateDeNaissance ? user.dateDeNaissance|date('Y-m-d') : '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type d'utilisateur</th>
                                                        <td>{{ user.userType }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jours ouvrables</th>
                                                        <td>{{ user.joursOuvrables }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class=\"text-right mt-3\">
                                                <a href=\"{{ path('admin_dashboard') }}\" class=\"btn btn-secondary\">Retour</a>
                                                <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                                                {{ include('user/_delete_form.html.twig') }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Page body end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}", "user/show.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\user\\show.html.twig");
    }
}

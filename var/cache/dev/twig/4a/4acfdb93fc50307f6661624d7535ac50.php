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

/* formation/showCertif.html.twig */
class __TwigTemplate_15def267ff462fa1106f88c89c6c6b4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/showCertif.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/showCertif.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/showCertif.html.twig", 1);
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

        yield "Certificats pour ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 3, $this->source); })()), "nomFormation", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "  <section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
    <div class=\"container\">
      <h2 class=\"text-white fw-bold\">Certificats</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"text-white text-decoration-none\">Accueil</a></li>
          <li class=\"breadcrumb-item\"><a href=\"#\" onclick=\"history.back()\" class=\"text-white text-decoration-none\">Formations</a></li>
          <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Certificats</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class=\"section py-5\">
    <div class=\"container\">
      <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"mb-0\">📄 Certificats associés à la formation <strong class=\"text-success\">\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 22, $this->source); })()), "nomFormation", [], "any", false, false, false, 22), "html", null, true);
        yield "\"</strong></h4>
        <a href=\"javascript:history.back()\" class=\"btn btn-outline-secondary btn-sm\">← Retour</a>
      </div>

      ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 26, $this->source); })())) > 0)) {
            // line 27
            yield "        <div class=\"row\">
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["certifications"]) || array_key_exists("certifications", $context) ? $context["certifications"] : (function () { throw new RuntimeError('Variable "certifications" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["certif"]) {
                // line 29
                yield "  <div class=\"col-md-6 col-lg-4 mb-4\">
    <div class=\"card shadow-sm h-100\">
    ";
                // line 32
                yield "              <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-carousel/certif.jpg"), "html", null, true);
                yield "\"
                   class=\"card-img-top\" 
                   alt=\"Image du certificat\" 
                   style=\"object-fit: cover; height: 200px;\">
              ";
                // line 37
                yield "      <div class=\"card-body\">
        <h5 class=\"card-title text-primary mb-2\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certif"], "titreCertif", [], "any", false, false, false, 38), "html", null, true);
                yield "</h5>
        <p class=\"mb-1\"><i class=\"fa fa-university me-2\"></i><strong>Organisme :</strong> ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certif"], "organismeCertif", [], "any", false, false, false, 39), "html", null, true);
                yield "</p>

        <div class=\"mt-3\">
          <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certification_download_pdf", ["idCertif" => CoreExtension::getAttribute($this->env, $this->source, $context["certif"], "idCertif", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\"
             class=\"btn btn-sm btn-outline-success\">
            <i class=\"fa fa-download me-1\"></i> Télécharger PDF
          </a>
        </div>
      </div>
    </div>
  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['certif'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "
        </div>
      ";
        } else {
            // line 54
            yield "<div class=\"d-flex justify-content-center\">
  <div class=\"card shadow-sm p-4 text-center\" style=\"max-width: 500px; background-color: #f8f9fa; border-radius: 12px;\">
    <div class=\"card-body\">
      <div class=\"mb-3\" style=\"font-size: 50px;\">🎓</div>
      <h5 class=\"card-title text-success mb-3\">Bientôt votre Certificat !</h5>
      <p class=\"card-text\">
        Votre certificat sera disponible à la fin de votre formation.<br>
        Continuez votre apprentissage, votre succès est tout proche !
      </p>
    </div>
  </div>
</div>
";
        }
        // line 67
        yield "
    </div>
 
  ";
        // line 70
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["similarFormations"]) || array_key_exists("similarFormations", $context) ? $context["similarFormations"] : (function () { throw new RuntimeError('Variable "similarFormations" does not exist.', 70, $this->source); })()))) {
            // line 71
            yield "  <hr class=\"my-5\">
  <h4 class=\"mb-0\">🔎 Formations Similaires</h4>
  <div class=\"row\">
    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarFormations"]) || array_key_exists("similarFormations", $context) ? $context["similarFormations"] : (function () { throw new RuntimeError('Variable "similarFormations" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["similar"]) {
                // line 75
                yield "      <div class=\"col-md-6 col-lg-4 mb-4\">
        <div class=\"card h-100 shadow-sm border rounded p-3\">
          <h5 class=\"card-title text-primary\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "nomFormation", [], "any", false, false, false, 77), "html", null, true);
                yield "</h5>
          <p class=\"card-text\">
            <strong>Description :</strong> ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "descriptionFormation", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "descriptionFormation", [], "any", false, false, false, 79), "Aucune description.")) : ("Aucune description.")), "html", null, true);
                yield "<br>
            <strong>Date :</strong> ";
                // line 80
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "dateDebutFormation", [], "any", false, false, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "dateDebutFormation", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true)) : ("Non précisée"));
                yield "
          </p>
          <a href=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_certif_show", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, $context["similar"], "idFormation", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success mt-auto\">
            Voir Certificats
          </a>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['similar'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "     </section>
  </div>
";
        }
        // line 91
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
        return "formation/showCertif.html.twig";
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
        return array (  249 => 91,  244 => 88,  232 => 82,  227 => 80,  223 => 79,  218 => 77,  214 => 75,  210 => 74,  205 => 71,  203 => 70,  198 => 67,  183 => 54,  178 => 51,  163 => 42,  157 => 39,  153 => 38,  150 => 37,  142 => 32,  138 => 29,  134 => 28,  131 => 27,  129 => 26,  122 => 22,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{%block title%}Certificats pour {{ formation.nomFormation }}{%endblock%}

{%block body%}
  <section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
    <div class=\"container\">
      <h2 class=\"text-white fw-bold\">Certificats</h2>
      <nav>
        <ol class=\"breadcrumb mt-3\">
          <li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\" class=\"text-white text-decoration-none\">Accueil</a></li>
          <li class=\"breadcrumb-item\"><a href=\"#\" onclick=\"history.back()\" class=\"text-white text-decoration-none\">Formations</a></li>
          <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Certificats</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class=\"section py-5\">
    <div class=\"container\">
      <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h4 class=\"mb-0\">📄 Certificats associés à la formation <strong class=\"text-success\">\"{{ formation.nomFormation }}\"</strong></h4>
        <a href=\"javascript:history.back()\" class=\"btn btn-outline-secondary btn-sm\">← Retour</a>
      </div>

      {% if certifications|length > 0 %}
        <div class=\"row\">
          {% for certif in certifications %}
  <div class=\"col-md-6 col-lg-4 mb-4\">
    <div class=\"card shadow-sm h-100\">
    {# ======= AJOUT DE L'IMAGE DU CERTIFICAT ======= #}
              <img src=\"{{ asset('assets/img/hero-carousel/certif.jpg') }}\"
                   class=\"card-img-top\" 
                   alt=\"Image du certificat\" 
                   style=\"object-fit: cover; height: 200px;\">
              {# ============================================= #}
      <div class=\"card-body\">
        <h5 class=\"card-title text-primary mb-2\">{{ certif.titreCertif }}</h5>
        <p class=\"mb-1\"><i class=\"fa fa-university me-2\"></i><strong>Organisme :</strong> {{ certif.organismeCertif }}</p>

        <div class=\"mt-3\">
          <a href=\"{{ path('app_certification_download_pdf', {'idCertif': certif.idCertif}) }}\"
             class=\"btn btn-sm btn-outline-success\">
            <i class=\"fa fa-download me-1\"></i> Télécharger PDF
          </a>
        </div>
      </div>
    </div>
  </div>
{% endfor %}

        </div>
      {% else %}
<div class=\"d-flex justify-content-center\">
  <div class=\"card shadow-sm p-4 text-center\" style=\"max-width: 500px; background-color: #f8f9fa; border-radius: 12px;\">
    <div class=\"card-body\">
      <div class=\"mb-3\" style=\"font-size: 50px;\">🎓</div>
      <h5 class=\"card-title text-success mb-3\">Bientôt votre Certificat !</h5>
      <p class=\"card-text\">
        Votre certificat sera disponible à la fin de votre formation.<br>
        Continuez votre apprentissage, votre succès est tout proche !
      </p>
    </div>
  </div>
</div>
{% endif %}

    </div>
 
  {% if similarFormations is not empty %}
  <hr class=\"my-5\">
  <h4 class=\"mb-0\">🔎 Formations Similaires</h4>
  <div class=\"row\">
    {% for similar in similarFormations %}
      <div class=\"col-md-6 col-lg-4 mb-4\">
        <div class=\"card h-100 shadow-sm border rounded p-3\">
          <h5 class=\"card-title text-primary\">{{ similar.nomFormation }}</h5>
          <p class=\"card-text\">
            <strong>Description :</strong> {{ similar.descriptionFormation|default('Aucune description.') }}<br>
            <strong>Date :</strong> {{ similar.dateDebutFormation ? similar.dateDebutFormation|date('Y-m-d') : 'Non précisée' }}
          </p>
          <a href=\"{{ path('app_formation_certif_show', {'idFormation': similar.idFormation}) }}\" class=\"btn btn-outline-success mt-auto\">
            Voir Certificats
          </a>
        </div>
      </div>
    {% endfor %}
     </section>
  </div>
{% endif %}


{%endblock%}", "formation/showCertif.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\showCertif.html.twig");
    }
}

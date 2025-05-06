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

/* certification/pdf.html.twig */
class __TwigTemplate_6c699a59a00f1990e3224852cf2743f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certification/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
  body {
    font-family: DejaVu Sans, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 60px;
    background: url('data:image/png;base64,";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["borderBase64"]) || array_key_exists("borderBase64", $context) ? $context["borderBase64"] : (function () { throw new RuntimeError('Variable "borderBase64" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "') no-repeat center center;
    background-size: cover; /* ou contain, selon ton image */
    background-color: #fff;
    color: #333;
  }


    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      border-bottom: 2px solid #144670;
      padding-bottom: 10px;
      margin-bottom: 40px;
    }
.header-right {
  display: flex;
  align-items: center; /* Alignement vertical parfait */
  gap: 10px; /* Espace entre image et texte */
  text-align: right;
}

.header-right img {
  height: 100px;
  max-width: 150px;
  object-fit: contain;
}

.header-text {
  display: flex;
  flex-direction: column;
  align-items: flex-end; /* Texte aligné à droite */
}
    
    h1 {
      color: #144670;
       text-align: center; 
      font-size: 32px;
      margin-bottom: 10px;
    }
    

    .section {
      margin-bottom: 25px;
       text-align: center; 
      font-size: 16px; 
      line-height: 1.6; /
    }

    .label {
      font-weight: bold;
      color: #555;
    }

    footer {
      margin-top: 60px;
      text-align: right;
      font-style: italic;
      font-size: 12px;
      color: #777;
    }

    .signature {
      margin-top: 50px;
      display: flex;
      justify-content: space-between;
      font-size: 13px;
    }
    .signature-text {
  font-family: 'BridgetLily', cursive;
  font-size: 20px;
  color: #144670;
  rotate: -5deg;
}

@font-face {
  font-family: 'BridgetLily';
  src: url('";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/BridgetLily.otf")), "html", null, true);
        yield "') format('opentype');
}
    
  </style>
</head>
<body>

  <header>

      <div class=\"header-right\">
    <img src=\"data:image/png;base64,";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoBase64"]) || array_key_exists("logoBase64", $context) ? $context["logoBase64"] : (function () { throw new RuntimeError('Variable "logoBase64" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "\" alt=\"ZaytounaRH\" >
     <div class=\"header-text\">
      <strong>ZaytounaRH</strong><br>
      www.zaytounarh.tn
    </div>
  </header>
  <h1>Certificat de Formation au nom de Allani Oumayma</h1>
</div>
  <div class=\"section\">
    <p><span class=\"label\">Titre du Certificat :</span> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 107, $this->source); })()), "titreCertif", [], "any", false, false, false, 107), "html", null, true);
        yield "</p>
    <p><span class=\"label\">Organisme :</span> ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 108, $this->source); })()), "organismeCertif", [], "any", false, false, false, 108), "html", null, true);
        yield "</p>
    <p><span class=\"label\">Formation Associée :</span> ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 109, $this->source); })()), "formation", [], "any", false, false, false, 109), "nomFormation", [], "any", false, false, false, 109), "html", null, true);
        yield "</p>
    <p><span class=\"label\">Date de la Formation :</span>
      du ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 111, $this->source); })()), "formation", [], "any", false, false, false, 111), "dateDebutFormation", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
        yield "
      au ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 112, $this->source); })()), "formation", [], "any", false, false, false, 112), "dateFinFormation", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
        yield "
    </p>
  </div>
<div class=\"section\">
    <p><em>\"La formation est l'arme la plus puissante que vous puissiez utiliser pour changer le monde.\"</em></p>
</div>

<div class=\"section\">
    <p><span class=\"label\">Certificat N°:</span> 2024-00";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["certification"]) || array_key_exists("certification", $context) ? $context["certification"] : (function () { throw new RuntimeError('Variable "certification" does not exist.', 120, $this->source); })()), "idCertif", [], "any", false, false, false, 120), "html", null, true);
        yield "</p>
    <p><span class=\"label\">Lieu :</span> Tunis</p>
    <p><span class=\"label\">Date de délivrance :</span> ";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>
</div>
  <div class=\"signature\">
    <div>
    
      <p>__________________________</p>
      <p>Signature du Responsable</p>
    </div>
    </div>
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
        return "certification/pdf.html.twig";
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
        return array (  198 => 122,  193 => 120,  182 => 112,  178 => 111,  173 => 109,  169 => 108,  165 => 107,  153 => 98,  140 => 88,  60 => 11,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <style>
  body {
    font-family: DejaVu Sans, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 60px;
    background: url('data:image/png;base64,{{ borderBase64 }}') no-repeat center center;
    background-size: cover; /* ou contain, selon ton image */
    background-color: #fff;
    color: #333;
  }


    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      border-bottom: 2px solid #144670;
      padding-bottom: 10px;
      margin-bottom: 40px;
    }
.header-right {
  display: flex;
  align-items: center; /* Alignement vertical parfait */
  gap: 10px; /* Espace entre image et texte */
  text-align: right;
}

.header-right img {
  height: 100px;
  max-width: 150px;
  object-fit: contain;
}

.header-text {
  display: flex;
  flex-direction: column;
  align-items: flex-end; /* Texte aligné à droite */
}
    
    h1 {
      color: #144670;
       text-align: center; 
      font-size: 32px;
      margin-bottom: 10px;
    }
    

    .section {
      margin-bottom: 25px;
       text-align: center; 
      font-size: 16px; 
      line-height: 1.6; /
    }

    .label {
      font-weight: bold;
      color: #555;
    }

    footer {
      margin-top: 60px;
      text-align: right;
      font-style: italic;
      font-size: 12px;
      color: #777;
    }

    .signature {
      margin-top: 50px;
      display: flex;
      justify-content: space-between;
      font-size: 13px;
    }
    .signature-text {
  font-family: 'BridgetLily', cursive;
  font-size: 20px;
  color: #144670;
  rotate: -5deg;
}

@font-face {
  font-family: 'BridgetLily';
  src: url('{{ absolute_url(asset('assets/img/BridgetLily.otf')) }}') format('opentype');
}
    
  </style>
</head>
<body>

  <header>

      <div class=\"header-right\">
    <img src=\"data:image/png;base64,{{ logoBase64 }}\" alt=\"ZaytounaRH\" >
     <div class=\"header-text\">
      <strong>ZaytounaRH</strong><br>
      www.zaytounarh.tn
    </div>
  </header>
  <h1>Certificat de Formation au nom de Allani Oumayma</h1>
</div>
  <div class=\"section\">
    <p><span class=\"label\">Titre du Certificat :</span> {{ certification.titreCertif }}</p>
    <p><span class=\"label\">Organisme :</span> {{ certification.organismeCertif }}</p>
    <p><span class=\"label\">Formation Associée :</span> {{ certification.formation.nomFormation }}</p>
    <p><span class=\"label\">Date de la Formation :</span>
      du {{ certification.formation.dateDebutFormation|date('d/m/Y') }}
      au {{ certification.formation.dateFinFormation|date('d/m/Y') }}
    </p>
  </div>
<div class=\"section\">
    <p><em>\"La formation est l'arme la plus puissante que vous puissiez utiliser pour changer le monde.\"</em></p>
</div>

<div class=\"section\">
    <p><span class=\"label\">Certificat N°:</span> 2024-00{{ certification.idCertif }}</p>
    <p><span class=\"label\">Lieu :</span> Tunis</p>
    <p><span class=\"label\">Date de délivrance :</span> {{ \"now\"|date('d/m/Y') }}</p>
</div>
  <div class=\"signature\">
    <div>
    
      <p>__________________________</p>
      <p>Signature du Responsable</p>
    </div>
    </div>
</body>
</html>
", "certification/pdf.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\certification\\pdf.html.twig");
    }
}

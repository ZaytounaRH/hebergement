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

/* offreemploi/index.html.twig */
class __TwigTemplate_5806773cd88766e7ccc6082611a05a21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offreemploi/index.html.twig", 1);
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

        yield "Offres d'emploi";
        
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
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
  <style>
    body {
      background: #f8f9fa;
    }

    .transition-hover {
      transition: transform 0.5s, box-shadow 0.5s;
    }

    .transition-hover:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .card {
      border: none;
      background: linear-gradient(145deg, #ffffff, #f0f0f0);
      transition: all 0.5s ease;
      min-height: 480px;
      border-radius: 1.5rem;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      padding: 1.7rem;
    }

    .card-body img {
      object-fit: cover;
      width: 100%;
      height: 220px;
      border-radius: 1rem;
      margin-bottom: 1rem;
      transition: transform 0.5s ease;
    }

    .card:hover img {
      transform: scale(1.08);
    }

    .section-title h2 {
      font-weight: 900;
      font-size: 2.5rem;
      color: #2c3e50;
      margin-bottom: 1rem;
      animation: fadeInDown 1s;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-outline-primary {
      border-radius: 2rem;
      transition: all 0.3s;
    }

    .btn-outline-primary:hover {
      background-color: #007bff;
      color: #fff;
      transform: scale(1.05);
    }

    .image-container {
      width: 100%;
      height: 220px;
      overflow: hidden;
      border-radius: 1rem;
    }

    .breadcrumb {
      background: none;
      font-size: 1rem;
    }

    .card-title {
      font-size: 1.4rem;
      margin-bottom: 0.6rem;
      color: #007bff;
    }

    .card-subtitle {
      font-size: 1rem;
    }

    .card-text {
      font-size: 0.95rem;
    }

    .badge {
      font-size: 0.85rem;
      padding: 0.5em 0.8em;
      border-radius: 0.7rem;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
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

        // line 118
        yield "<section class=\"page-title\" style=\"background: linear-gradient(135deg, #74ebd5, #acb6e5); padding: 80px 0;\">
  <div class=\"container text-center\" data-aos=\"fade-down\">
    <h2 class=\"text-white fw-bold display-4\">Nos Offres d'Emploi</h2>
    <nav>
      <ol class=\"breadcrumb justify-content-center mt-3\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"text-white text-decoration-none\">Accueil</a>
        </li>
        <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Offres d'emploi</li>
      </ol>
    </nav>
  </div>
</section>

<section class=\"section py-5\">
  <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"section-title mb-5 text-center\">
      <h2 class=\"fw-bold\">Trouvez l'Offre de Vos Rêves</h2>
      <p class=\"text-muted\">Explorez nos opportunités pour élever votre carrière au niveau supérieur</p>
    </div>

    <!-- Formulaire de tri et recherche amélioré -->
    <form method=\"get\" action=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\" class=\"mb-5 p-4 rounded-4 shadow-sm bg-white border\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row g-4\">
        <div class=\"col-md-3\">
          <label for=\"search\" class=\"form-label fw-semibold\">Recherche par titre :</label>
          <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Ex: Développeur...\" value=\"";
        // line 144
        yield (((array_key_exists("currentSearch", $context) &&  !(null === $context["currentSearch"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["currentSearch"], "html", null, true)) : (""));
        yield "\">
        </div>
        <div class=\"col-md-3\">
          <label for=\"sort\" class=\"form-label fw-semibold\">Trier par :</label>
          <select name=\"sort\" id=\"sort\" class=\"form-select\">
            <option value=\"salaire\" ";
        // line 149
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 149, $this->source); })()) == "salaire")) {
            yield "selected";
        }
        yield ">Salaire</option>
            <option value=\"datePublication\" ";
        // line 150
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 150, $this->source); })()) == "datePublication")) {
            yield "selected";
        }
        yield ">Date de publication</option>
          </select>
        </div>
        <div class=\"col-md-3\">
          <label for=\"direction\" class=\"form-label fw-semibold\">Ordre :</label>
          <select name=\"direction\" id=\"direction\" class=\"form-select\">
            <option value=\"ASC\" ";
        // line 156
        if (((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 156, $this->source); })()) == "ASC")) {
            yield "selected";
        }
        yield ">Croissant</option>
            <option value=\"DESC\" ";
        // line 157
        if (((isset($context["currentDirection"]) || array_key_exists("currentDirection", $context) ? $context["currentDirection"] : (function () { throw new RuntimeError('Variable "currentDirection" does not exist.', 157, $this->source); })()) == "DESC")) {
            yield "selected";
        }
        yield ">Décroissant</option>
          </select>
        </div>
        <div class=\"col-md-3\">
          <label for=\"statut\" class=\"form-label fw-semibold\">Statut :</label>
          <select name=\"statut\" id=\"statut\" class=\"form-select\">
            <option value=\"\">Tous</option>
            <option value=\"ouverte\" ";
        // line 164
        if (((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 164, $this->source); })()) == "ouverte")) {
            yield "selected";
        }
        yield ">Ouverte</option>
            <option value=\"fermee\" ";
        // line 165
        if (((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 165, $this->source); })()) == "fermee")) {
            yield "selected";
        }
        yield ">Fermée</option>
            <option value=\"pourvue\" ";
        // line 166
        if (((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 166, $this->source); })()) == "pourvue")) {
            yield "selected";
        }
        yield ">Pourvue</option>
            <option value=\"encours\" ";
        // line 167
        if (((isset($context["currentStatut"]) || array_key_exists("currentStatut", $context) ? $context["currentStatut"] : (function () { throw new RuntimeError('Variable "currentStatut" does not exist.', 167, $this->source); })()) == "encours")) {
            yield "selected";
        }
        yield ">En cours</option>
          </select>
        </div>
        <div class=\"col-12 d-flex justify-content-center mt-4\">
          <button type=\"submit\" class=\"btn btn-primary shadow-sm rounded-4 px-5\">
            <i class=\"bi bi-search me-1\"></i> Rechercher
          </button>
        </div>
      </div>
    </form>

    <!-- Cartes des offres -->
    <div class=\"row\">
      ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offreemplois"]) || array_key_exists("offreemplois", $context) ? $context["offreemplois"] : (function () { throw new RuntimeError('Variable "offreemplois" does not exist.', 180, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["offreemploi"]) {
            // line 181
            yield "        ";
            $context["statut"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "statut", [], "any", false, false, false, 181));
            // line 182
            yield "        ";
            $context["borderColor"] = (((            // line 183
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 183, $this->source); })()) == "ouverte")) ? ("border-success") : ((((            // line 184
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 184, $this->source); })()) == "fermee")) ? ("border-danger") : ((((            // line 185
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 185, $this->source); })()) == "pourvue")) ? ("border-secondary") : ((((            // line 186
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 186, $this->source); })()) == "encours")) ? ("border-info") : ("border-dark"))))))));
            // line 188
            yield "        <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"zoom-in\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 188) * 80), "html", null, true);
            yield "\">
          <div class=\"card h-100 shadow-sm transition-hover ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["borderColor"]) || array_key_exists("borderColor", $context) ? $context["borderColor"] : (function () { throw new RuntimeError('Variable "borderColor" does not exist.', 189, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 190
            if (CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "image", [], "any", false, false, false, 190)) {
                // line 191
                yield "              <div class=\"image-container\">
                <img src=\"";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "image", [], "any", false, false, false, 192), "html", null, true);
                yield "\" alt=\"Image de l'offre d'emploi\" class=\"img-fluid\">
              </div>
            ";
            }
            // line 195
            yield "            <div class=\"card-body d-flex flex-column\">
              <h5 class=\"card-title fw-bold\">
                <i class=\"bi bi-briefcase-fill me-1\"></i>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "titreOffre", [], "any", false, false, false, 197), "html", null, true);
            yield "
              </h5>
              <h6 class=\"card-subtitle text-muted mb-2\">
                <i class=\"bi bi-calendar-event me-1\"></i>
                ";
            // line 201
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "datePublication", [], "any", false, false, false, 201)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "datePublication", [], "any", false, false, false, 201), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
              </h6>
              <p class=\"card-text text-muted mt-2 flex-grow-1\">
                <i class=\"bi bi-file-text me-1\"></i>
                ";
            // line 205
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 205)) ? ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 205)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 205), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "description", [], "any", false, false, false, 205), "html", null, true)))) : (""));
            yield "
              </p>
              <div class=\"mb-3\">
                ";
            // line 208
            if (((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 208, $this->source); })()) == "ouverte")) {
                // line 209
                yield "                  <span class=\"badge bg-success\"><i class=\"bi bi-unlock-fill me-1\"></i>OUVERTE</span>
                ";
            } elseif ((            // line 210
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 210, $this->source); })()) == "fermee")) {
                // line 211
                yield "                  <span class=\"badge bg-danger\"><i class=\"bi bi-lock-fill me-1\"></i>FERMÉE</span>
                ";
            } elseif ((            // line 212
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 212, $this->source); })()) == "pourvue")) {
                // line 213
                yield "                  <span class=\"badge bg-secondary\"><i class=\"bi bi-person-check-fill me-1\"></i>POURVUE</span>
                ";
            } elseif ((            // line 214
(isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 214, $this->source); })()) == "encours")) {
                // line 215
                yield "                  <span class=\"badge bg-info text-dark\"><i class=\"bi bi-hourglass-split me-1\"></i>EN COURS</span>
                ";
            } else {
                // line 217
                yield "                  <span class=\"badge bg-dark\"><i class=\"bi bi-question-circle-fill me-1\"></i>Non spécifié</span>
                ";
            }
            // line 219
            yield "              </div>
              <div class=\"mt-auto\">
                <a href=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_show", ["idOffre" => CoreExtension::getAttribute($this->env, $this->source, $context["offreemploi"], "idOffre", [], "any", false, false, false, 221)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary w-100\">
                  <i class=\"bi bi-eye me-1\"></i> Voir l'offre
                </a>
              </div>
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
        // line 228
        if (!$context['_iterated']) {
            // line 229
            yield "        <div class=\"col-12 text-center\" data-aos=\"fade-up\">
          <p class=\"text-muted fs-5\">Aucune offre d'emploi trouvée pour le moment.</p>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offreemploi'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        yield "    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
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

        // line 239
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>
  <script>
    AOS.init({
      duration: 1200,
      easing: 'ease-in-out-back',
      once: true,
      mirror: true
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
        return "offreemploi/index.html.twig";
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
        return array (  509 => 239,  496 => 238,  482 => 233,  473 => 229,  471 => 228,  451 => 221,  447 => 219,  443 => 217,  439 => 215,  437 => 214,  434 => 213,  432 => 212,  429 => 211,  427 => 210,  424 => 209,  422 => 208,  416 => 205,  409 => 201,  402 => 197,  398 => 195,  392 => 192,  389 => 191,  387 => 190,  383 => 189,  378 => 188,  376 => 186,  375 => 185,  374 => 184,  373 => 183,  371 => 182,  368 => 181,  350 => 180,  332 => 167,  326 => 166,  320 => 165,  314 => 164,  302 => 157,  296 => 156,  285 => 150,  279 => 149,  271 => 144,  264 => 140,  245 => 124,  237 => 118,  224 => 117,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres d'emploi{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css\" rel=\"stylesheet\">
  <style>
    body {
      background: #f8f9fa;
    }

    .transition-hover {
      transition: transform 0.5s, box-shadow 0.5s;
    }

    .transition-hover:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .card {
      border: none;
      background: linear-gradient(145deg, #ffffff, #f0f0f0);
      transition: all 0.5s ease;
      min-height: 480px;
      border-radius: 1.5rem;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      padding: 1.7rem;
    }

    .card-body img {
      object-fit: cover;
      width: 100%;
      height: 220px;
      border-radius: 1rem;
      margin-bottom: 1rem;
      transition: transform 0.5s ease;
    }

    .card:hover img {
      transform: scale(1.08);
    }

    .section-title h2 {
      font-weight: 900;
      font-size: 2.5rem;
      color: #2c3e50;
      margin-bottom: 1rem;
      animation: fadeInDown 1s;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-outline-primary {
      border-radius: 2rem;
      transition: all 0.3s;
    }

    .btn-outline-primary:hover {
      background-color: #007bff;
      color: #fff;
      transform: scale(1.05);
    }

    .image-container {
      width: 100%;
      height: 220px;
      overflow: hidden;
      border-radius: 1rem;
    }

    .breadcrumb {
      background: none;
      font-size: 1rem;
    }

    .card-title {
      font-size: 1.4rem;
      margin-bottom: 0.6rem;
      color: #007bff;
    }

    .card-subtitle {
      font-size: 1rem;
    }

    .card-text {
      font-size: 0.95rem;
    }

    .badge {
      font-size: 0.85rem;
      padding: 0.5em 0.8em;
      border-radius: 0.7rem;
    }
  </style>
{% endblock %}

{% block body %}
<section class=\"page-title\" style=\"background: linear-gradient(135deg, #74ebd5, #acb6e5); padding: 80px 0;\">
  <div class=\"container text-center\" data-aos=\"fade-down\">
    <h2 class=\"text-white fw-bold display-4\">Nos Offres d'Emploi</h2>
    <nav>
      <ol class=\"breadcrumb justify-content-center mt-3\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('app_front') }}\" class=\"text-white text-decoration-none\">Accueil</a>
        </li>
        <li class=\"breadcrumb-item active text-white\" aria-current=\"page\">Offres d'emploi</li>
      </ol>
    </nav>
  </div>
</section>

<section class=\"section py-5\">
  <div class=\"container\" data-aos=\"fade-up\">
    <div class=\"section-title mb-5 text-center\">
      <h2 class=\"fw-bold\">Trouvez l'Offre de Vos Rêves</h2>
      <p class=\"text-muted\">Explorez nos opportunités pour élever votre carrière au niveau supérieur</p>
    </div>

    <!-- Formulaire de tri et recherche amélioré -->
    <form method=\"get\" action=\"{{ path('app_offreemploi_index') }}\" class=\"mb-5 p-4 rounded-4 shadow-sm bg-white border\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row g-4\">
        <div class=\"col-md-3\">
          <label for=\"search\" class=\"form-label fw-semibold\">Recherche par titre :</label>
          <input type=\"text\" name=\"search\" id=\"search\" class=\"form-control\" placeholder=\"Ex: Développeur...\" value=\"{{ currentSearch ?? '' }}\">
        </div>
        <div class=\"col-md-3\">
          <label for=\"sort\" class=\"form-label fw-semibold\">Trier par :</label>
          <select name=\"sort\" id=\"sort\" class=\"form-select\">
            <option value=\"salaire\" {% if currentSort == 'salaire' %}selected{% endif %}>Salaire</option>
            <option value=\"datePublication\" {% if currentSort == 'datePublication' %}selected{% endif %}>Date de publication</option>
          </select>
        </div>
        <div class=\"col-md-3\">
          <label for=\"direction\" class=\"form-label fw-semibold\">Ordre :</label>
          <select name=\"direction\" id=\"direction\" class=\"form-select\">
            <option value=\"ASC\" {% if currentDirection == 'ASC' %}selected{% endif %}>Croissant</option>
            <option value=\"DESC\" {% if currentDirection == 'DESC' %}selected{% endif %}>Décroissant</option>
          </select>
        </div>
        <div class=\"col-md-3\">
          <label for=\"statut\" class=\"form-label fw-semibold\">Statut :</label>
          <select name=\"statut\" id=\"statut\" class=\"form-select\">
            <option value=\"\">Tous</option>
            <option value=\"ouverte\" {% if currentStatut == 'ouverte' %}selected{% endif %}>Ouverte</option>
            <option value=\"fermee\" {% if currentStatut == 'fermee' %}selected{% endif %}>Fermée</option>
            <option value=\"pourvue\" {% if currentStatut == 'pourvue' %}selected{% endif %}>Pourvue</option>
            <option value=\"encours\" {% if currentStatut == 'encours' %}selected{% endif %}>En cours</option>
          </select>
        </div>
        <div class=\"col-12 d-flex justify-content-center mt-4\">
          <button type=\"submit\" class=\"btn btn-primary shadow-sm rounded-4 px-5\">
            <i class=\"bi bi-search me-1\"></i> Rechercher
          </button>
        </div>
      </div>
    </form>

    <!-- Cartes des offres -->
    <div class=\"row\">
      {% for offreemploi in offreemplois %}
        {% set statut = offreemploi.statut|lower %}
        {% set borderColor =
          statut == 'ouverte' ? 'border-success' :
          (statut == 'fermee' ? 'border-danger' :
          (statut == 'pourvue' ? 'border-secondary' :
          (statut == 'encours' ? 'border-info' : 'border-dark')) )
        %}
        <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"zoom-in\" data-aos-delay=\"{{ loop.index * 80 }}\">
          <div class=\"card h-100 shadow-sm transition-hover {{ borderColor }}\">
            {% if offreemploi.image %}
              <div class=\"image-container\">
                <img src=\"{{ offreemploi.image }}\" alt=\"Image de l'offre d'emploi\" class=\"img-fluid\">
              </div>
            {% endif %}
            <div class=\"card-body d-flex flex-column\">
              <h5 class=\"card-title fw-bold\">
                <i class=\"bi bi-briefcase-fill me-1\"></i>{{ offreemploi.titreOffre }}
              </h5>
              <h6 class=\"card-subtitle text-muted mb-2\">
                <i class=\"bi bi-calendar-event me-1\"></i>
                {{ offreemploi.datePublication ? offreemploi.datePublication|date('d/m/Y') : '—' }}
              </h6>
              <p class=\"card-text text-muted mt-2 flex-grow-1\">
                <i class=\"bi bi-file-text me-1\"></i>
                {{ offreemploi.description ? offreemploi.description|length > 100 ? offreemploi.description|slice(0, 100) ~ '...' : offreemploi.description : '' }}
              </p>
              <div class=\"mb-3\">
                {% if statut == 'ouverte' %}
                  <span class=\"badge bg-success\"><i class=\"bi bi-unlock-fill me-1\"></i>OUVERTE</span>
                {% elseif statut == 'fermee' %}
                  <span class=\"badge bg-danger\"><i class=\"bi bi-lock-fill me-1\"></i>FERMÉE</span>
                {% elseif statut == 'pourvue' %}
                  <span class=\"badge bg-secondary\"><i class=\"bi bi-person-check-fill me-1\"></i>POURVUE</span>
                {% elseif statut == 'encours' %}
                  <span class=\"badge bg-info text-dark\"><i class=\"bi bi-hourglass-split me-1\"></i>EN COURS</span>
                {% else %}
                  <span class=\"badge bg-dark\"><i class=\"bi bi-question-circle-fill me-1\"></i>Non spécifié</span>
                {% endif %}
              </div>
              <div class=\"mt-auto\">
                <a href=\"{{ path('app_offreemploi_show', {'idOffre': offreemploi.idOffre}) }}\" class=\"btn btn-outline-primary w-100\">
                  <i class=\"bi bi-eye me-1\"></i> Voir l'offre
                </a>
              </div>
            </div>
          </div>
        </div>
      {% else %}
        <div class=\"col-12 text-center\" data-aos=\"fade-up\">
          <p class=\"text-muted fs-5\">Aucune offre d'emploi trouvée pour le moment.</p>
        </div>
      {% endfor %}
    </div>
  </div>
</section>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js\"></script>
  <script>
    AOS.init({
      duration: 1200,
      easing: 'ease-in-out-back',
      once: true,
      mirror: true
    });
  </script>
{% endblock %}
", "offreemploi/index.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\index.html.twig");
    }
}

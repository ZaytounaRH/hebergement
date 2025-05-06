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

/* formation/formations_par_employe.html.twig */
class __TwigTemplate_7afaa5a6950777aa7bc15897287b10eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/formations_par_employe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/formations_par_employe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/formations_par_employe.html.twig", 1);
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

        yield "Formations";
        
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
        yield "
<section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
  <div class=\"container\">
    <h2 class=\"text-white fw-bold\">Formations</h2>
       

  </div>
</section>

<section class=\"section\">
  <div class=\"container\">

    <form method=\"get\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_par_employe");
        yield "\" class=\"mb-5\">
      <label for=\"employeeSelect\" class=\"form-label\">Sélectionner un employé :</label>
      <select id=\"employeeSelect\" name=\"employee_id\" class=\"form-select\" onchange=\"this.form.submit()\">
        <option value=\"\">-- Choisir --</option>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            // line 23
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "employeeId", [], "any", false, false, false, 23), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "employeeId", [], "any", false, false, false, 23) == (isset($context["selectedEmployeeId"]) || array_key_exists("selectedEmployeeId", $context) ? $context["selectedEmployeeId"] : (function () { throw new RuntimeError('Variable "selectedEmployeeId" does not exist.', 23, $this->source); })()))) ? ("selected") : (""));
            yield ">
            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "user", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "user", [], "any", false, false, false, 24), "prenom", [], "any", false, false, false, 24), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "      </select>
    </form>


    ";
        // line 31
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 31, $this->source); })()))) {
            // line 32
            yield "      <div class=\"row\">
<!-- Boutons sous la sélection -->
    <div class=\"d-flex gap-2 flex-wrap mb-4\">
      <a class=\"btn btn-outline-success\" id=\"viewFavoritesBtn\">❤ Mes Favoris</a>
<a class=\"btn btn-outline-success\" href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_agenda", ["employee_id" => (isset($context["selectedEmployeeId"]) || array_key_exists("selectedEmployeeId", $context) ? $context["selectedEmployeeId"] : (function () { throw new RuntimeError('Variable "selectedEmployeeId" does not exist.', 36, $this->source); })())]), "html", null, true);
            yield "\">🗓 Agenda</a>

      <div class=\"dropdown\">
        <button class=\"btn btn-outline-success dropdown-toggle\" type=\"button\" id=\"filterRatingDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          🎯 Filtrer
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"filterRatingDropdown\">
          <li><a class=\"dropdown-item\" href=\"#\" id=\"filterBest\">⭐ Formations les mieux notées</a></li>
          <li><a class=\"dropdown-item\" href=\"#\" id=\"filterWorst\">⭐ Formations les moins notées</a></li>
        </ul>
      </div>

      <button class=\"btn btn-outline-success\" id=\"resetFiltersBtn\">🔄 Réinitialiser</button>
    </div>
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 51
                yield "          <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card h-100 shadow-sm border rounded p-3\">
            
<h5 class=\"card-title text-primary d-flex justify-content-between align-items-center\">
    ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 55), "html", null, true);
                yield "
     <div class=\"d-flex align-items-center\">
<i class=\"far fa-heart favorite-icon me-2\" data-id=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 57), "html", null, true);
                yield "\" style=\"cursor: pointer; color: red; font-size: 20px;\"></i>
        <div class=\"rating-stars\" data-id=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 58), "html", null, true);
                yield "\">
            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 60
                    yield "                <i class=\"fas fa-star star\" data-star=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\" style=\"cursor: pointer; color: lightgray;\"></i>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "        </div>
    </div>
</h5>
              
              <p class=\"card-text\">
                <strong>Description :</strong> ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "descriptionFormation", [], "any", false, false, false, 67), "html", null, true);
                yield "<br>
                <strong>Date :</strong> ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "dateDebutFormation", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true);
                yield "
              </p>
              <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_certif_show", ["idFormation" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 70)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success mt-auto\">
                Voir Certificat
              </a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "      </div>
    ";
        } elseif (        // line 77
(isset($context["selectedEmployeeId"]) || array_key_exists("selectedEmployeeId", $context) ? $context["selectedEmployeeId"] : (function () { throw new RuntimeError('Variable "selectedEmployeeId" does not exist.', 77, $this->source); })())) {
            // line 78
            yield "      <div class=\"alert alert-info\">Aucune formation trouvée pour cet employé.</div>
    ";
        }
        // line 80
        yield "
  </div>
</section>





<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- Favoris (existant) ---
    function updateHearts() {
        const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        document.querySelectorAll('.favorite-icon').forEach(icon => {
            if (favorites.includes(icon.dataset.id)) {
               icon.classList.remove('far');
            icon.classList.add('fas'); // Rempli
               
            } else {
                 icon.classList.remove('fas');
            icon.classList.add('far'); // Vide
            }
        });
    }

    document.querySelectorAll('.favorite-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            const id = this.dataset.id;
            if (favorites.includes(id)) {
                favorites = favorites.filter(favId => favId !== id);
            } else {
                favorites.push(id);
            }
            localStorage.setItem('favorites', JSON.stringify(favorites));
            updateHearts();
        });
    });

   document.getElementById('viewFavoritesBtn').addEventListener('click', function() {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    document.querySelectorAll('.card').forEach(card => {
        const id = card.querySelector('.favorite-icon').dataset.id;
        const col = card.closest('.col-md-6.col-lg-4');
        if (!favorites.includes(id)) {
            col.style.display = 'none';
        } else {
            col.style.display = 'block';
        }
    });
});

    updateHearts();

    // --- Nouveau : Gestion du Rating ---
    function updateStars() {
        const ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.rating-stars').forEach(ratingDiv => {
            const id = ratingDiv.dataset.id;
            const rating = ratings[id] || 0;
            ratingDiv.querySelectorAll('.star').forEach(star => {
                const starValue = parseInt(star.dataset.star);
                if (starValue <= rating) {
                    star.style.color = 'gold'; // Remplir étoiles dorées
                } else {
                    star.style.color = 'lightgray'; // Étoiles vides
                }
            });
        });
    }

    document.querySelectorAll('.rating-stars .star').forEach(star => {
        star.addEventListener('click', function() {
            const parent = this.closest('.rating-stars');
            const id = parent.dataset.id;
            const rating = parseInt(this.dataset.star);

            let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
            ratings[id] = rating;

            localStorage.setItem('ratings', JSON.stringify(ratings));
            updateStars();
        });
    });

    updateStars();
});

// --- Gestion du filtre formations notées ---
 document.getElementById('filterBest').addEventListener('click', function() {
        let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.card').forEach(card => {
            const id = card.querySelector('.favorite-icon').dataset.id;
            const rating = ratings[id] || 0;
            const col = card.closest('.col-md-6.col-lg-4');
            col.style.display = (rating >= 4) ? 'block' : 'none';
        });
    });

document.getElementById('filterWorst').addEventListener('click', function() {
        let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.card').forEach(card => {
            const id = card.querySelector('.favorite-icon').dataset.id;
            const rating = ratings[id] || 0;
            const col = card.closest('.col-md-6.col-lg-4');
            col.style.display = (rating <= 3) ? 'block' : 'none';
        });
    });
    
// --- Bouton Reset Filtres ---
document.getElementById('resetFiltersBtn').addEventListener('click', function() {
    document.querySelectorAll('.card').forEach(card => {
        const col = card.closest('.col-md-6.col-lg-4');
        if (col) {
            col.style.display = 'block'; // Réafficher toutes les colonnes
        }
    });
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
        return "formation/formations_par_employe.html.twig";
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
        return array (  247 => 80,  243 => 78,  241 => 77,  238 => 76,  226 => 70,  221 => 68,  217 => 67,  210 => 62,  201 => 60,  197 => 59,  193 => 58,  189 => 57,  184 => 55,  178 => 51,  174 => 50,  157 => 36,  151 => 32,  149 => 31,  143 => 27,  132 => 24,  125 => 23,  121 => 22,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formations{% endblock %}

{% block body %}

<section class=\"page-title\" style=\"background: #28c745; padding: 60px 0;\">
  <div class=\"container\">
    <h2 class=\"text-white fw-bold\">Formations</h2>
       

  </div>
</section>

<section class=\"section\">
  <div class=\"container\">

    <form method=\"get\" action=\"{{ path('app_formation_par_employe') }}\" class=\"mb-5\">
      <label for=\"employeeSelect\" class=\"form-label\">Sélectionner un employé :</label>
      <select id=\"employeeSelect\" name=\"employee_id\" class=\"form-select\" onchange=\"this.form.submit()\">
        <option value=\"\">-- Choisir --</option>
        {% for emp in employees %}
          <option value=\"{{ emp.employeeId }}\" {{ emp.employeeId == selectedEmployeeId ? 'selected' : '' }}>
            {{ emp.user.nom }} {{ emp.user.prenom }}
          </option>
        {% endfor %}
      </select>
    </form>


    {% if formations is not empty %}
      <div class=\"row\">
<!-- Boutons sous la sélection -->
    <div class=\"d-flex gap-2 flex-wrap mb-4\">
      <a class=\"btn btn-outline-success\" id=\"viewFavoritesBtn\">❤ Mes Favoris</a>
<a class=\"btn btn-outline-success\" href=\"{{ path('employee_agenda', {'employee_id': selectedEmployeeId}) }}\">🗓 Agenda</a>

      <div class=\"dropdown\">
        <button class=\"btn btn-outline-success dropdown-toggle\" type=\"button\" id=\"filterRatingDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
          🎯 Filtrer
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"filterRatingDropdown\">
          <li><a class=\"dropdown-item\" href=\"#\" id=\"filterBest\">⭐ Formations les mieux notées</a></li>
          <li><a class=\"dropdown-item\" href=\"#\" id=\"filterWorst\">⭐ Formations les moins notées</a></li>
        </ul>
      </div>

      <button class=\"btn btn-outline-success\" id=\"resetFiltersBtn\">🔄 Réinitialiser</button>
    </div>
        {% for formation in formations %}
          <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card h-100 shadow-sm border rounded p-3\">
            
<h5 class=\"card-title text-primary d-flex justify-content-between align-items-center\">
    {{ formation.nomFormation }}
     <div class=\"d-flex align-items-center\">
<i class=\"far fa-heart favorite-icon me-2\" data-id=\"{{ formation.idFormation }}\" style=\"cursor: pointer; color: red; font-size: 20px;\"></i>
        <div class=\"rating-stars\" data-id=\"{{ formation.idFormation }}\">
            {% for i in 1..5 %}
                <i class=\"fas fa-star star\" data-star=\"{{ i }}\" style=\"cursor: pointer; color: lightgray;\"></i>
            {% endfor %}
        </div>
    </div>
</h5>
              
              <p class=\"card-text\">
                <strong>Description :</strong> {{ formation.descriptionFormation }}<br>
                <strong>Date :</strong> {{ formation.dateDebutFormation|date('Y-m-d') }}
              </p>
              <a href=\"{{ path('app_formation_certif_show', {'idFormation': formation.idFormation}) }}\" class=\"btn btn-outline-success mt-auto\">
                Voir Certificat
              </a>
            </div>
          </div>
        {% endfor %}
      </div>
    {% elseif selectedEmployeeId %}
      <div class=\"alert alert-info\">Aucune formation trouvée pour cet employé.</div>
    {% endif %}

  </div>
</section>





<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- Favoris (existant) ---
    function updateHearts() {
        const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        document.querySelectorAll('.favorite-icon').forEach(icon => {
            if (favorites.includes(icon.dataset.id)) {
               icon.classList.remove('far');
            icon.classList.add('fas'); // Rempli
               
            } else {
                 icon.classList.remove('fas');
            icon.classList.add('far'); // Vide
            }
        });
    }

    document.querySelectorAll('.favorite-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            const id = this.dataset.id;
            if (favorites.includes(id)) {
                favorites = favorites.filter(favId => favId !== id);
            } else {
                favorites.push(id);
            }
            localStorage.setItem('favorites', JSON.stringify(favorites));
            updateHearts();
        });
    });

   document.getElementById('viewFavoritesBtn').addEventListener('click', function() {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    document.querySelectorAll('.card').forEach(card => {
        const id = card.querySelector('.favorite-icon').dataset.id;
        const col = card.closest('.col-md-6.col-lg-4');
        if (!favorites.includes(id)) {
            col.style.display = 'none';
        } else {
            col.style.display = 'block';
        }
    });
});

    updateHearts();

    // --- Nouveau : Gestion du Rating ---
    function updateStars() {
        const ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.rating-stars').forEach(ratingDiv => {
            const id = ratingDiv.dataset.id;
            const rating = ratings[id] || 0;
            ratingDiv.querySelectorAll('.star').forEach(star => {
                const starValue = parseInt(star.dataset.star);
                if (starValue <= rating) {
                    star.style.color = 'gold'; // Remplir étoiles dorées
                } else {
                    star.style.color = 'lightgray'; // Étoiles vides
                }
            });
        });
    }

    document.querySelectorAll('.rating-stars .star').forEach(star => {
        star.addEventListener('click', function() {
            const parent = this.closest('.rating-stars');
            const id = parent.dataset.id;
            const rating = parseInt(this.dataset.star);

            let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
            ratings[id] = rating;

            localStorage.setItem('ratings', JSON.stringify(ratings));
            updateStars();
        });
    });

    updateStars();
});

// --- Gestion du filtre formations notées ---
 document.getElementById('filterBest').addEventListener('click', function() {
        let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.card').forEach(card => {
            const id = card.querySelector('.favorite-icon').dataset.id;
            const rating = ratings[id] || 0;
            const col = card.closest('.col-md-6.col-lg-4');
            col.style.display = (rating >= 4) ? 'block' : 'none';
        });
    });

document.getElementById('filterWorst').addEventListener('click', function() {
        let ratings = JSON.parse(localStorage.getItem('ratings')) || {};
        document.querySelectorAll('.card').forEach(card => {
            const id = card.querySelector('.favorite-icon').dataset.id;
            const rating = ratings[id] || 0;
            const col = card.closest('.col-md-6.col-lg-4');
            col.style.display = (rating <= 3) ? 'block' : 'none';
        });
    });
    
// --- Bouton Reset Filtres ---
document.getElementById('resetFiltersBtn').addEventListener('click', function() {
    document.querySelectorAll('.card').forEach(card => {
        const col = card.closest('.col-md-6.col-lg-4');
        if (col) {
            col.style.display = 'block'; // Réafficher toutes les colonnes
        }
    });
});

</script>

{% endblock %}", "formation/formations_par_employe.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\formations_par_employe.html.twig");
    }
}

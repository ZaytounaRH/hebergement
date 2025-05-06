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

/* formation/_form.html.twig */
class __TwigTemplate_62a3112bcce453edc4d33742606af29d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "



<!-- Centered Card Form -->
<div class=\"d-flex justify-content-center mt-5\">
  <div class=\"card shadow-sm w-100\" style=\"max-width: 800px;\">
    <div class=\"card-header\">
      <h5 class=\"mb-0\">Formulaire de création</h5>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            yield "  ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), ["_token"])) {
                // line 15
                yield "    <div class=\"form-group col-md-12 mb-3\">
      ";
                // line 16
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                yield "

      ";
                // line 18
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18) == "employees")) {
                    // line 19
                    yield "        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-select-multi", "multiple" => "multiple"]]);
                    yield "
      ";
                } else {
                    // line 21
                    yield "        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                    yield "
      ";
                }
                // line 23
                yield "
      ";
                // line 24
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24)) > 0)) {
                    // line 25
                    yield "        <div class=\"text-danger mt-1\" style=\"font-size: 0.875rem;\">
          ";
                    // line 26
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                    yield "
        </div>
      ";
                }
                // line 29
                yield "    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <button class=\"btn btn-success\">
        <i class=\"fa fa-save\"></i> ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 37, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
      </button>
    </div>
  </div>
</div>

";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const selectElement = document.querySelector('.form-select-multi');

    if (selectElement) {
      const choices = new Choices(selectElement, {
        removeItemButton: true,
        searchEnabled: true,
        shouldSort: false,
        placeholderValue: 'Sélectionner des employés',
        maxItemCount: -1
      });

      // Affichage dynamique des boutons lors de l'ouverture
      selectElement.addEventListener('showDropdown', () => {
        const dropdown = document.querySelector('.choices__list--dropdown');

        // Évite les doublons
        if (!document.querySelector('#select-all-employees')) {
          const selectAll = document.createElement('div');
          selectAll.id = 'select-all-employees';
          selectAll.className = 'choices__item choices__item--selectable bg-light text-primary fw-semibold px-3 py-2';
          selectAll.style.cursor = 'pointer';
          selectAll.textContent = '✅ Tout sélectionner';

          selectAll.addEventListener('click', () => {
            selectElement.querySelectorAll('option').forEach(option => {
              option.selected = true;
              choices.setChoiceByValue(option.value);
            });
          });

          const deselectAll = document.createElement('div');
          deselectAll.id = 'deselect-all-employees';
          deselectAll.className = 'choices__item choices__item--selectable bg-light text-danger fw-semibold px-3 py-2';
          deselectAll.style.cursor = 'pointer';
          deselectAll.textContent = '❌ Tout désélectionner';

          deselectAll.addEventListener('click', () => {
            choices.removeActiveItems(); // Retire tout
            selectElement.querySelectorAll('option').forEach(option => {
              option.selected = false;
            });
          });

          const controlWrapper = document.createElement('div');
          controlWrapper.className = 'd-flex justify-content-around gap-2 mb-2';
          controlWrapper.appendChild(selectAll);
          controlWrapper.appendChild(deselectAll);

          dropdown.prepend(controlWrapper);
        }
      });
    }
  });
</script>
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
        return "formation/_form.html.twig";
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
        return array (  130 => 43,  121 => 37,  114 => 32,  106 => 29,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  86 => 21,  80 => 19,  78 => 18,  73 => 16,  70 => 15,  67 => 14,  63 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}



<!-- Centered Card Form -->
<div class=\"d-flex justify-content-center mt-5\">
  <div class=\"card shadow-sm w-100\" style=\"max-width: 800px;\">
    <div class=\"card-header\">
      <h5 class=\"mb-0\">Formulaire de création</h5>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        {% for field in form %}
  {% if field.vars.name not in ['_token'] %}
    <div class=\"form-group col-md-12 mb-3\">
      {{ form_label(field) }}

      {% if field.vars.name == 'employees' %}
        {{ form_widget(field, {'attr': {'class': 'form-select-multi', 'multiple': 'multiple'}}) }}
      {% else %}
        {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
      {% endif %}

      {% if field.vars.errors|length > 0 %}
        <div class=\"text-danger mt-1\" style=\"font-size: 0.875rem;\">
          {{ form_errors(field) }}
        </div>
      {% endif %}
    </div>
  {% endif %}
{% endfor %}

      </div>
    </div>
    <div class=\"card-footer text-end\">
      <button class=\"btn btn-success\">
        <i class=\"fa fa-save\"></i> {{ button_label|default('Enregistrer') }}
      </button>
    </div>
  </div>
</div>

{{ form_end(form) }}

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const selectElement = document.querySelector('.form-select-multi');

    if (selectElement) {
      const choices = new Choices(selectElement, {
        removeItemButton: true,
        searchEnabled: true,
        shouldSort: false,
        placeholderValue: 'Sélectionner des employés',
        maxItemCount: -1
      });

      // Affichage dynamique des boutons lors de l'ouverture
      selectElement.addEventListener('showDropdown', () => {
        const dropdown = document.querySelector('.choices__list--dropdown');

        // Évite les doublons
        if (!document.querySelector('#select-all-employees')) {
          const selectAll = document.createElement('div');
          selectAll.id = 'select-all-employees';
          selectAll.className = 'choices__item choices__item--selectable bg-light text-primary fw-semibold px-3 py-2';
          selectAll.style.cursor = 'pointer';
          selectAll.textContent = '✅ Tout sélectionner';

          selectAll.addEventListener('click', () => {
            selectElement.querySelectorAll('option').forEach(option => {
              option.selected = true;
              choices.setChoiceByValue(option.value);
            });
          });

          const deselectAll = document.createElement('div');
          deselectAll.id = 'deselect-all-employees';
          deselectAll.className = 'choices__item choices__item--selectable bg-light text-danger fw-semibold px-3 py-2';
          deselectAll.style.cursor = 'pointer';
          deselectAll.textContent = '❌ Tout désélectionner';

          deselectAll.addEventListener('click', () => {
            choices.removeActiveItems(); // Retire tout
            selectElement.querySelectorAll('option').forEach(option => {
              option.selected = false;
            });
          });

          const controlWrapper = document.createElement('div');
          controlWrapper.className = 'd-flex justify-content-around gap-2 mb-2';
          controlWrapper.appendChild(selectAll);
          controlWrapper.appendChild(deselectAll);

          dropdown.prepend(controlWrapper);
        }
      });
    }
  });
</script>
", "formation/_form.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\formation\\_form.html.twig");
    }
}

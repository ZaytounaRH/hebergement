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

/* offreemploi/statistique.html.twig */
class __TwigTemplate_4794d0e0a7cf8fd55ef794d1ca35f000 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/statistique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreemploi/statistique.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Statistiques des Offres d'Emploi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            color: #34495e;
        }
        .container {
            width: 85%;
            max-width: 1200px;
            margin-top: 20px;
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .container:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        h1 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 700;
        }
        #chart_div {
            width: 100%;
            height: 500px;
            margin: 30px 0;
            background-color: #f9f9f9;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            background-color: #3498db;
            color: white;
            padding: 15px 25px;
            font-size: 18px;
            border-radius: 50px;
            text-align: center;
            text-decoration: none;
            width: 180px;
            margin: 30px auto;
            display: block;
            transition: background-color 0.3s, transform 0.3s;
        }
        .back-button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }
        .back-button:active {
            background-color: #1f6b97;
        }
    </style>
</head>
<body>

<div class=\"container\">
    <h1>Statistiques des Offres d'Emploi</h1>

    <!-- Graphique -->
    <div id=\"chart_div\"></div>

    <!-- Bouton retour -->
    <a class=\"back-button\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_back_index");
        yield "\">Retour à la liste</a>
</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Statut', 'Nombre'],
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 91
            yield "                ['";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "statut", [], "any", false, false, false, 91), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "nombre", [], "any", false, false, false, 91), "html", null, true);
            yield "],
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "        ]);

        var options = {
            title: 'Nombre d\\'offres par statut',
            titleTextStyle: {
                fontSize: 24,
                bold: true,
                color: '#2c3e50'
            },
            chartArea: {
                width: '70%',
                height: '80%'
            },
            hAxis: {
                title: 'Nombre d\\'offres',
                minValue: 0,
                textStyle: {
                    fontSize: 14,
                    color: '#34495e'
                },
                gridlines: {
                    color: '#ecf0f1'
                },
                baselineColor: '#ecf0f1'
            },
            vAxis: {
                title: 'Statut',
                textStyle: {
                    fontSize: 14,
                    color: '#34495e'
                },
                gridlines: {
                    color: '#ecf0f1'
                },
                baselineColor: '#ecf0f1'
            },
            legend: {
                position: 'none',
            },
            bars: 'horizontal',
            backgroundColor: '#ecf0f1',
            colors: ['#3498db']
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

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
        return "offreemploi/statistique.html.twig";
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
        return array (  157 => 93,  146 => 91,  142 => 90,  128 => 79,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Statistiques des Offres d'Emploi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            color: #34495e;
        }
        .container {
            width: 85%;
            max-width: 1200px;
            margin-top: 20px;
            background-color: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .container:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        h1 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 700;
        }
        #chart_div {
            width: 100%;
            height: 500px;
            margin: 30px 0;
            background-color: #f9f9f9;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            background-color: #3498db;
            color: white;
            padding: 15px 25px;
            font-size: 18px;
            border-radius: 50px;
            text-align: center;
            text-decoration: none;
            width: 180px;
            margin: 30px auto;
            display: block;
            transition: background-color 0.3s, transform 0.3s;
        }
        .back-button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }
        .back-button:active {
            background-color: #1f6b97;
        }
    </style>
</head>
<body>

<div class=\"container\">
    <h1>Statistiques des Offres d'Emploi</h1>

    <!-- Graphique -->
    <div id=\"chart_div\"></div>

    <!-- Bouton retour -->
    <a class=\"back-button\" href=\"{{ path('app_offreemploi_back_index') }}\">Retour à la liste</a>
</div>

<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<script type=\"text/javascript\">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Statut', 'Nombre'],
            {% for stat in statistiques %}
                ['{{ stat.statut }}', {{ stat.nombre }}],
            {% endfor %}
        ]);

        var options = {
            title: 'Nombre d\\'offres par statut',
            titleTextStyle: {
                fontSize: 24,
                bold: true,
                color: '#2c3e50'
            },
            chartArea: {
                width: '70%',
                height: '80%'
            },
            hAxis: {
                title: 'Nombre d\\'offres',
                minValue: 0,
                textStyle: {
                    fontSize: 14,
                    color: '#34495e'
                },
                gridlines: {
                    color: '#ecf0f1'
                },
                baselineColor: '#ecf0f1'
            },
            vAxis: {
                title: 'Statut',
                textStyle: {
                    fontSize: 14,
                    color: '#34495e'
                },
                gridlines: {
                    color: '#ecf0f1'
                },
                baselineColor: '#ecf0f1'
            },
            legend: {
                position: 'none',
            },
            bars: 'horizontal',
            backgroundColor: '#ecf0f1',
            colors: ['#3498db']
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

</body>
</html>
", "offreemploi/statistique.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\offreemploi\\statistique.html.twig");
    }
}

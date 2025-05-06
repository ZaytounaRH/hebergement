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

/* contact.html.twig */
class __TwigTemplate_82f7cee59d0fa8e20563120bd34a8d92 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>ZaytounaRH</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
<link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png") . "?v=2"), "html", null, true);
        yield "\" rel=\"icon\">
<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">


<!-- Font Awesome pour les icônes -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">

<!-- Animate.css pour les animations -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">


 <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">


  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
<link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">


<link href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">



<!-- FORMATION-->

<!-- favoris formation -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
<!-- calendrier formation -->
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js\"></script>
<!-- Swiper CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\" />
<!-- Swiper JS -->
<script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>

<!-- FORMATION-->



  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
<img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png") . "?v=2"), "html", null, true);
        yield "\" alt=\"Logo\">
        <h1 class=\"sitename\">ZaytounaRH</h1><span>.</span>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
<li><a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" >Accueil</a></li>
<li><a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\"><span>Equipe</span></a></li>
<li><a href=\"presence\">Presence</a></li>
<li><a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_par_employe");
        yield "\">Formation</a></li>
 <li><a href=\"conge\">Congés</a></li>
          <li><a class=\"nav-link\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\">Offres d'emploi</a></li>
          <li><a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">Réclamations</a></li>
          <li><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"><span>Contact</span></a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

   

    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

    <!-- Google Maps -->
    <div class=\"mb-5\">
        <iframe
        style=\"width: 100%; height: 400px;\"
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12789.168775822634!2d10.2460664!3d36.8348302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302c93cb3f8aa3b%3A0xa97ac44a3e7e94c5!2sRue%20du%20Lac%20Mal%C3%A4ren%2C%20Tunis!5e0!3m2!1sfr!2stn!4v1714822305462!5m2!1sfr!2stn\"
        frameborder=\"0\"
        allowfullscreen=\"\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </div>

    <!-- Infos contact -->
    <div class=\"container\" data-aos=\"fade\">
        <div class=\"row gy-5 gx-lg-5 justify-content-center text-center\">
        <div class=\"col-lg-6\">

            <div class=\"info\">

            <h3>Contactez-nous</h3>
            <p>Notre équipe est à votre écoute pour toute question, suggestion ou demande d'information. N'hésitez pas à nous écrire !</p>

            <div class=\"info-item d-flex flex-column align-items-center mb-3\">
                <i class=\"bi bi-geo-alt fs-2 text-primary\"></i>
                <div>
                <h4>Localisation :</h4>
                <p>Rue du Lac Malären, Les Berges du Lac 3, 1053 Tunis, Tunisie</p>
                </div>
            </div>

            <div class=\"info-item d-flex flex-column align-items-center mb-3\">
                <i class=\"bi bi-envelope fs-2 text-primary\"></i>
                <div>
                <h4>Email :</h4>
                <p>zaytounarh@gmail.com</p>
                </div>
            </div>

            <div class=\"info-item d-flex flex-column align-items-center\">
                <i class=\"bi bi-phone fs-2 text-primary\"></i>
                <div>
                <h4>Mobile :</h4>
                <p>+216 55740899</p>
                </div>
            </div>

            </div>

        </div>
        </div>
    </div>

    </section>


  </main>

<footer id=\"footer\" class=\"footer dark-background\">
  <div class=\"container footer-top\">
    <div class=\"row gy-4\">
      <div class=\"col-lg-4 col-md-6 footer-about\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png") . "?v=2"), "html", null, true);
        yield "\" alt=\"Logo\">
          <h1 class=\"sitename\">ZaytounaRH</h1><span>.</span>
        </a>
        <div class=\"footer-contact pt-3\">
          <p><strong>Localisation:</strong> Rue du Lac Malären, Les Berges du Lac 3, 1053 Tunis, Tunisie</p>
          <p><strong>Email:</strong> <span>zaytounarh@gmail.com</span></p>
          <p><strong>Mobile:</strong> <span>+216 55740899</span></p>
        </div>
        <div class=\"social-links d-flex mt-4\">
          <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-3 footer-links\">
        <h4>Liens utiles</h4>
        <ul>
          <li><a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
          <li><a href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\">Équipe</a></li>
          <li><a href=\"presence\">Présence</a></li>
          <li><a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_par_employe");
        yield "\">Formation</a></li>
          <li><a href=\"conge\">Congés</a></li>
        </ul>
      </div>

      <div class=\"col-lg-2 col-md-3 footer-links\">
        <h4>Nos services</h4>
        <ul>
          <li><a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\">Offres d'emploi</a></li>
          <li><a href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">Réclamations</a></li>
        </ul>
      </div>

      <div class=\"col-lg-4 col-md-12 footer-newsletter\">
        <h4>Notre newsletter</h4>
        <p>Abonnez-vous à notre newsletter et recevez les dernières informations sur nos produits et services !</p>
        <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
          <div class=\"newsletter-form\">
            <input type=\"email\" name=\"email\" required>
            <input type=\"submit\" value=\"S'abonner\">
          </div>
          <div class=\"loading\">Chargement...</div>
          <div class=\"error-message\"></div>
          <div class=\"sent-message\">Votre demande d'abonnement a été envoyée. Merci !</div>
        </form>
      </div>

    </div>
  </div>

  <div class=\"container copyright text-center mt-4\">
    <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">ZaytounaRH</strong> <span>Tous droits réservés</span></p>
    <div class=\"credits\">
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=\"https://themewagon.com\">ThemeWagon</a>
    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>

<!-- Vendor JS Files -->
<script src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS File -->
<script src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "contact.html.twig";
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
        return array (  390 => 254,  384 => 251,  380 => 250,  376 => 249,  372 => 248,  368 => 247,  364 => 246,  360 => 245,  356 => 244,  317 => 208,  313 => 207,  302 => 199,  297 => 197,  293 => 196,  271 => 177,  184 => 93,  180 => 92,  176 => 91,  171 => 89,  166 => 87,  162 => 86,  153 => 80,  114 => 44,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  65 => 13,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>ZaytounaRH</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
<link href=\"{{ asset('assets/img/logo.png') ~ '?v=2' }}\" rel=\"icon\">
<link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">


<!-- Font Awesome pour les icônes -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">

<!-- Animate.css pour les animations -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">


 <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\" rel=\"stylesheet\">


  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
<link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">


<link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">



<!-- FORMATION-->

<!-- favoris formation -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
<!-- calendrier formation -->
<link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js\"></script>
<!-- Swiper CSS -->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\" />
<!-- Swiper JS -->
<script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js\"></script>

<!-- FORMATION-->



  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
<img src=\"{{ asset('assets/img/logo.png') ~ '?v=2' }}\" alt=\"Logo\">
        <h1 class=\"sitename\">ZaytounaRH</h1><span>.</span>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
<li><a href=\"{{ path('app_front') }}\" >Accueil</a></li>
<li><a href=\"{{ path('app_team') }}\"><span>Equipe</span></a></li>
<li><a href=\"presence\">Presence</a></li>
<li><a href=\"{{ path('app_formation_par_employe') }}\">Formation</a></li>
 <li><a href=\"conge\">Congés</a></li>
          <li><a class=\"nav-link\" href=\"{{ path('app_offreemploi_index') }}\">Offres d'emploi</a></li>
          <li><a href=\"{{ path('app_reclamation_index') }}\">Réclamations</a></li>
          <li><a href=\"{{ path('app_contact') }}\"><span>Contact</span></a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

   

    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

    <!-- Google Maps -->
    <div class=\"mb-5\">
        <iframe
        style=\"width: 100%; height: 400px;\"
        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12789.168775822634!2d10.2460664!3d36.8348302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302c93cb3f8aa3b%3A0xa97ac44a3e7e94c5!2sRue%20du%20Lac%20Mal%C3%A4ren%2C%20Tunis!5e0!3m2!1sfr!2stn!4v1714822305462!5m2!1sfr!2stn\"
        frameborder=\"0\"
        allowfullscreen=\"\"
        loading=\"lazy\"
        referrerpolicy=\"no-referrer-when-downgrade\">
        </iframe>
    </div>

    <!-- Infos contact -->
    <div class=\"container\" data-aos=\"fade\">
        <div class=\"row gy-5 gx-lg-5 justify-content-center text-center\">
        <div class=\"col-lg-6\">

            <div class=\"info\">

            <h3>Contactez-nous</h3>
            <p>Notre équipe est à votre écoute pour toute question, suggestion ou demande d'information. N'hésitez pas à nous écrire !</p>

            <div class=\"info-item d-flex flex-column align-items-center mb-3\">
                <i class=\"bi bi-geo-alt fs-2 text-primary\"></i>
                <div>
                <h4>Localisation :</h4>
                <p>Rue du Lac Malären, Les Berges du Lac 3, 1053 Tunis, Tunisie</p>
                </div>
            </div>

            <div class=\"info-item d-flex flex-column align-items-center mb-3\">
                <i class=\"bi bi-envelope fs-2 text-primary\"></i>
                <div>
                <h4>Email :</h4>
                <p>zaytounarh@gmail.com</p>
                </div>
            </div>

            <div class=\"info-item d-flex flex-column align-items-center\">
                <i class=\"bi bi-phone fs-2 text-primary\"></i>
                <div>
                <h4>Mobile :</h4>
                <p>+216 55740899</p>
                </div>
            </div>

            </div>

        </div>
        </div>
    </div>

    </section>


  </main>

<footer id=\"footer\" class=\"footer dark-background\">
  <div class=\"container footer-top\">
    <div class=\"row gy-4\">
      <div class=\"col-lg-4 col-md-6 footer-about\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"{{ asset('assets/img/logo.png') ~ '?v=2' }}\" alt=\"Logo\">
          <h1 class=\"sitename\">ZaytounaRH</h1><span>.</span>
        </a>
        <div class=\"footer-contact pt-3\">
          <p><strong>Localisation:</strong> Rue du Lac Malären, Les Berges du Lac 3, 1053 Tunis, Tunisie</p>
          <p><strong>Email:</strong> <span>zaytounarh@gmail.com</span></p>
          <p><strong>Mobile:</strong> <span>+216 55740899</span></p>
        </div>
        <div class=\"social-links d-flex mt-4\">
          <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter-x\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-3 footer-links\">
        <h4>Liens utiles</h4>
        <ul>
          <li><a href=\"{{ path('app_front') }}\">Accueil</a></li>
          <li><a href=\"{{ path('app_team') }}\">Équipe</a></li>
          <li><a href=\"presence\">Présence</a></li>
          <li><a href=\"{{ path('app_formation_par_employe') }}\">Formation</a></li>
          <li><a href=\"conge\">Congés</a></li>
        </ul>
      </div>

      <div class=\"col-lg-2 col-md-3 footer-links\">
        <h4>Nos services</h4>
        <ul>
          <li><a href=\"{{ path('app_offreemploi_index') }}\">Offres d'emploi</a></li>
          <li><a href=\"{{ path('app_reclamation_index') }}\">Réclamations</a></li>
        </ul>
      </div>

      <div class=\"col-lg-4 col-md-12 footer-newsletter\">
        <h4>Notre newsletter</h4>
        <p>Abonnez-vous à notre newsletter et recevez les dernières informations sur nos produits et services !</p>
        <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
          <div class=\"newsletter-form\">
            <input type=\"email\" name=\"email\" required>
            <input type=\"submit\" value=\"S'abonner\">
          </div>
          <div class=\"loading\">Chargement...</div>
          <div class=\"error-message\"></div>
          <div class=\"sent-message\">Votre demande d'abonnement a été envoyée. Merci !</div>
        </form>
      </div>

    </div>
  </div>

  <div class=\"container copyright text-center mt-4\">
    <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">ZaytounaRH</strong> <span>Tous droits réservés</span></p>
    <div class=\"credits\">
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=\"https://themewagon.com\">ThemeWagon</a>
    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>

<!-- Vendor JS Files -->
<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>

<!-- Main JS File -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>
", "contact.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\contact.html.twig");
    }
}

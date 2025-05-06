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

/* team.html.twig */
class __TwigTemplate_66018c57458f50a00df9b5f5168f1664 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team.html.twig"));

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
        yield "\">Accueil</a></li>
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

  <main class=\"main\"

    <!-- Team Section -->
<section id=\"team\" class=\"team section bg-light py-5\">
  <div class=\"container\">
    <div class=\"section-title text-center mb-5\">
      <h2 class=\"fw-bold\">Notre Équipe</h2>
      <p>Rencontrez les membres clés de ZaytounaRH</p>
    </div>

    <div class=\"row gy-4 justify-content-center\">

      <!-- Allani Oumayma -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Oumayma.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Oumayma\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Allani Oumayma</h5>
            <span class=\"text-muted small\">Responsable Formation & Certifications</span>
          </div>
        </div>
      </div>

      <!-- Bekri Ons -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Ons.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Ons\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Bekri Ons</h5>
            <span class=\"text-muted small\">Responsable Recrutement</span>
          </div>
        </div>
      </div>

      <!-- Mnif Mariem -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Mariem.jpeg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Mariem\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Mnif Mariem</h5>
            <span class=\"text-muted small\">Responsable Assurances & Réclamations</span>
          </div>
        </div>
      </div>

      <!-- Zheni Asma -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Asma.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Asma\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Zheni Asma</h5>
            <span class=\"text-muted small\">Responsable Congés & Présences</span>
          </div>
        </div>
      </div>

      <!-- Ouaghlani Manel -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Manel.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Manel\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Ouaghlani Manel</h5>
            <span class=\"text-muted small\">Responsable Finance</span>
          </div>
        </div>
      </div>

      <!-- Dammak Fares -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Fares.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Fares\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Dammak Fares</h5>
            <span class=\"text-muted small\">Responsable User</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
  .team .team-member {
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%; /* même hauteur pour tous */
}

.team-member:hover {
  transform: translateY(-10px);
}

.member-img img {
  transition: transform 0.3s ease;
  border-radius: 15px;
}

.team-member:hover .member-img img {
  transform: scale(1.05);
}

.member-info h5 {
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 5px;
}

.member-info span {
  font-size: 0.875rem;
  color: #6c757d;
}

.social {
  margin-top: 10px;
}

.social a {
  color: #212529;
  margin: 0 5px;
  transition: color 0.3s ease;
}

.social a:hover {
  color: #007bff;
}
.card.team-member {
  min-height: 350px; /* Ajuste selon le rendu souhaité */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 1rem;
}

.member-img img {
  height: 180px;
  object-fit: cover;
  border-radius: 12px;
}

.member-info {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.member-info h5,
.member-info span {
  margin: 0.25rem 0;
}

.social {
  margin-top: 0.5rem;
  display: flex;
  justify-content: center;
  gap: 10px;
  opacity: 1 !important;
  position: static !important;
}

</style>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
  <div class=\"container footer-top\">
    <div class=\"row gy-4\">
      <div class=\"col-lg-4 col-md-6 footer-about\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
          <img src=\"";
        // line 329
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
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
          <li><a href=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\">Équipe</a></li>
          <li><a href=\"presence\">Présence</a></li>
          <li><a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_par_employe");
        yield "\">Formation</a></li>
          <li><a href=\"conge\">Congés</a></li>
        </ul>
      </div>

      <div class=\"col-lg-2 col-md-3 footer-links\">
        <h4>Nos services</h4>
        <ul>
          <li><a href=\"";
        // line 359
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreemploi_index");
        yield "\">Offres d'emploi</a></li>
          <li><a href=\"";
        // line 360
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
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS File -->
<script src=\"";
        // line 406
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
        return "team.html.twig";
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
        return array (  542 => 406,  536 => 403,  532 => 402,  528 => 401,  524 => 400,  520 => 399,  516 => 398,  512 => 397,  508 => 396,  469 => 360,  465 => 359,  454 => 351,  449 => 349,  445 => 348,  423 => 329,  184 => 93,  180 => 92,  176 => 91,  171 => 89,  166 => 87,  162 => 86,  153 => 80,  114 => 44,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  65 => 13,  61 => 12,  48 => 1,);
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
<li><a href=\"{{ path('app_front') }}\">Accueil</a></li>
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

  <main class=\"main\"

    <!-- Team Section -->
<section id=\"team\" class=\"team section bg-light py-5\">
  <div class=\"container\">
    <div class=\"section-title text-center mb-5\">
      <h2 class=\"fw-bold\">Notre Équipe</h2>
      <p>Rencontrez les membres clés de ZaytounaRH</p>
    </div>

    <div class=\"row gy-4 justify-content-center\">

      <!-- Allani Oumayma -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Oumayma.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Oumayma\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Allani Oumayma</h5>
            <span class=\"text-muted small\">Responsable Formation & Certifications</span>
          </div>
        </div>
      </div>

      <!-- Bekri Ons -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Ons.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Ons\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Bekri Ons</h5>
            <span class=\"text-muted small\">Responsable Recrutement</span>
          </div>
        </div>
      </div>

      <!-- Mnif Mariem -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Mariem.jpeg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Mariem\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Mnif Mariem</h5>
            <span class=\"text-muted small\">Responsable Assurances & Réclamations</span>
          </div>
        </div>
      </div>

      <!-- Zheni Asma -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Asma.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Asma\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Zheni Asma</h5>
            <span class=\"text-muted small\">Responsable Congés & Présences</span>
          </div>
        </div>
      </div>

      <!-- Ouaghlani Manel -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Manel.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Manel\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Ouaghlani Manel</h5>
            <span class=\"text-muted small\">Responsable Finance</span>
          </div>
        </div>
      </div>

      <!-- Dammak Fares -->
      <div class=\"col-xl-3 col-md-6 d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
        <div class=\"card team-member border-0 shadow-sm rounded-4 w-100 text-center p-3\">
          <div class=\"member-img position-relative\">
            <img src=\"assets/img/team/Fares.jpg\" class=\"img-fluid rounded-3 mb-3\" alt=\"Fares\">
            <div class=\"social position-absolute top-0 end-0 p-2\">
              <a href=\"#\"><i class=\"bi bi-linkedin text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-instagram text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-facebook text-dark fs-5 me-2\"></i></a>
              <a href=\"#\"><i class=\"bi bi-twitter-x text-dark fs-5\"></i></a>
            </div>
          </div>
          <div class=\"member-info\">
            <h5 class=\"fw-bold mb-1\">Dammak Fares</h5>
            <span class=\"text-muted small\">Responsable User</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
  .team .team-member {
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%; /* même hauteur pour tous */
}

.team-member:hover {
  transform: translateY(-10px);
}

.member-img img {
  transition: transform 0.3s ease;
  border-radius: 15px;
}

.team-member:hover .member-img img {
  transform: scale(1.05);
}

.member-info h5 {
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 5px;
}

.member-info span {
  font-size: 0.875rem;
  color: #6c757d;
}

.social {
  margin-top: 10px;
}

.social a {
  color: #212529;
  margin: 0 5px;
  transition: color 0.3s ease;
}

.social a:hover {
  color: #007bff;
}
.card.team-member {
  min-height: 350px; /* Ajuste selon le rendu souhaité */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 1rem;
}

.member-img img {
  height: 180px;
  object-fit: cover;
  border-radius: 12px;
}

.member-info {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.member-info h5,
.member-info span {
  margin: 0.25rem 0;
}

.social {
  margin-top: 0.5rem;
  display: flex;
  justify-content: center;
  gap: 10px;
  opacity: 1 !important;
  position: static !important;
}

</style>

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
", "team.html.twig", "C:\\wamp64\\www\\ZaytounaRHintegff\\templates\\team.html.twig");
    }
}

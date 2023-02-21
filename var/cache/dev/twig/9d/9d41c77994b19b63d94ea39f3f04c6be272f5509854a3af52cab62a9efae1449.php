<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_98de6c54a8554f388b90e61dac90e8948f8a9859623ae5d2af4d553bc4e4bd62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"Geoffroy VARLEZ\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\">
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" 
          integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\"
          integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\">
    ";
        // line 21
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "\t</head>
\t<body>
    ";
        // line 29
        echo "\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/logo.png"), "html", null, true);
        echo "\" alt=\"logo Art et Décor\"/></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"mainMenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"button active\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"button\">Produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Histoire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">L'équipe</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Photos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"button\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"location\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/localisation.png"), "html", null, true);
        echo "\" alt=\"Localisation\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"cart\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/caddie.png"), "html", null, true);
        echo "\" alt=\"Caddie\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<div class=\"nav-btn\">
\t\t\t\t\t\t\t";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "              <li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" class=\"account\">
\t\t\t\t\t\t\t\t\t";
            // line 74
            echo "                  <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/user.png"), "html", null, true);
            echo "\" alt=\"User\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t\t</a>
              </li>
\t\t\t\t\t\t\t";
        } else {
            // line 78
            echo "              <li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"account\">
\t\t\t\t\t\t\t\t\t";
            // line 81
            echo "                  <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/user.png"), "html", null, true);
            echo "\" alt=\"User\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t\t</a>
              </li>
\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t</div>
              <div class=\"search\">
                <li>
                  <form class=\"search-container\">
                    <input type=\"text\" class=\"search-bar\" placeholder=\"Rechercher\">
                    <a href=\"#\"><i id=\"search-icon\" class=\"fa fa-search\"></i></a>
                  </form>
                </li>
              </div>
          </ul>
\t\t\t  </div>
\t\t\t<!-- <div class=\"burgerMenu\">
\t\t\t            <div class=\"burger-btn\">
\t\t\t                <i class=\"icon fas fa-bars\"></i>
\t\t\t            </div>
\t\t\t            <div class=\"dropdown-menu\">
\t\t\t                <ul>
\t\t\t                    <li><a href=\"index.html\">Home</a></li>
\t\t\t                    <li><a href=\"solutions.html\">Solutions</a></li>
\t\t\t                    <li><a href=\"product.html\">Product</a></li>
\t\t\t                    <li><a href=\"blog.html\">Blog</a></li>
\t\t\t                    <li><a href=\"team.html\">Team</a></li>
\t\t\t                </ul>
\t\t\t            </div>
\t\t\t        </div> -->
\t\t</nav>
</header>
<main>
  ";
        // line 113
        $this->displayBlock('content', $context, $blocks);
        // line 114
        echo "</main>
<footer class=\"footer-section\">
  <div class=\"container\">
    <div class=\"footer-cta pt-5 pb-5\">
      <div class=\"row\">
        <div class=\"agencies\">
          <h1>Agence Golfe Juan  :</h1>
          <h1>Agence Montauroux  :</h1>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
            <div class=\"cta-text\">
              <i class=\"fas fa-map-marker-alt\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Vos magasins :</span><br>
              <p style=\"margin-top:15px;\">13 avenue Clément Massier</p>
              <p>06220 Vallauris (Golfe Juan)</p>
              <hr>
              <p>Centre Commercial Centre Espace 1, RD 562</p>
              <p>83440 Montauroux</p>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
            <div class=\"cta-text\">
              <i class=\"fas fa-phone\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Contactez-nous :</span><br>
              <p style=\"margin:15px auto 40px auto; padding-left:35px;\">04-93-63-72-37</p>
              <hr>
              <p style=\"padding-left:35px\">04-94-50-81-16</p>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
          <div class=\"cta-text\">
            <i class=\"far fa-envelope-open\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Email :</span><br>
            <p style=\"margin:15px auto 40px auto; padding-left:10px;\">artetdecormb@orange.fr</p>
            <hr>
            <p style=\"padding-left:10px;\">artetdecormh@orange.fr</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-content pt-5 pb-5\">
      <div class=\"row\">
        <div class=\"col-xl-4 col-lg-4 mb-50\">
          <div class=\"footer-widget\">
            <div class=\"footer-logo\">
              <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/logo-ad.png"), "html", null, true);
        echo "\" alt=\"logo Art et Décor\"/></a>
            </div>
            <div class=\"footer-text\">
              <p style=\"padding-left:28px;\">
                Peintures et Revêtements
              </p>
            </div>
            <div class=\"footer-widget-heading\">
              <h2>Horaires d'ouverture :</h2>
              <table>
                <tr>
                  <td>Lundi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Mardi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Mercredi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Jeudi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Vendredi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Samedi :</td>
                  <td>Fermé</td>
                </tr>
                <tr>
                  <td>Dimanche :</td>
                  <td>Fermé</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class=\"col-xl-4 col-lg-4 col-md-6 mb-30\">
          <div class=\"footer-widget\">
            <div class=\"footer-widget-heading\">
              <h3>Liens utiles</h3>
            </div>
            <ul>
              <li><a href=\"#\">Accueil</a></li>
              <li><a href=\"#\">Produits</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Histoire</a></li>
              <li><a href=\"#\">Contact</a></li>
              <li><a href=\"#\">L'équipe</a></li>
              <li><a href=\"#\">Photos</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
          <div class=\"footer-widget\">
            <div class=\"footer-widget-heading\">
              <h3>Inscrivez-vous !</h3>
            </div>
            <div class=\"footer-text mb-25\">
              <p>Ne manquez pas nos dernières nouveautés ou promotions !</p>
            </div>
            <div class=\"subscribe-form\">
              <form action=\"#\">
                <input type=\"text\" placeholder=\"Adresse e-mail\">
                <button>
                  <i class=\"fab fa-telegram-plane\"></i>
                </button>
              </form>
            </div>
            <div class=\"footer-social-icon\">
               <div class=\"footer-widget-heading\">
                <h3>Réseaux sociaux</h3>
              </div>
              <a href=\"#\">
                <i class=\"fab fa-facebook-f fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-twitter fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-google-plus-g fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-instagram fa-2x\"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"copyright-area\">
      <div class=\"row\">
        <div class=\"col-xl-6 col-lg-6 text-center\">
          <div class=\"copyright-text\">
            <p>Copyright &copy; 2021, Tous droits résérvés</p>
            <p>- Conditions Générales de vente</p>
            <p>- Mentions légales</p>
            <p>Politique de confidentialité</p>
          </div>
        </div>
      </div>
  </div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js\" 
        integrity=\"sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js\" 
        integrity=\"sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
</body>
";
        // line 279
        $this->displayBlock('script', $context, $blocks);
        // line 280
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 279,  441 => 113,  423 => 21,  405 => 10,  394 => 280,  392 => 279,  387 => 277,  379 => 272,  258 => 156,  214 => 114,  212 => 113,  182 => 85,  174 => 81,  170 => 79,  167 => 78,  159 => 74,  155 => 72,  152 => 71,  150 => 70,  142 => 66,  138 => 64,  130 => 60,  123 => 55,  105 => 40,  99 => 37,  89 => 32,  84 => 29,  80 => 22,  78 => 21,  74 => 20,  64 => 13,  60 => 11,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"Geoffroy VARLEZ\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css\">
\t\t<link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" 
          integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css\"
          integrity=\"sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
    {% block javascript %}{% endblock %}
\t</head>
\t<body>
    {# <div class=\"preloader-wrapper\">
      <div class=\"preloader\">
          <img src=\"{{ asset('assets/pictures/loader.gif') }}\" alt=\"Loader\">
      </div>
    </div> #}
\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/pictures/logo.png') }}\" alt=\"logo Art et Décor\"/></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"mainMenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"button active\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('products') }}\" class=\"button\">Produits</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Histoire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">L'équipe</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Photos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('contact') }}\" class=\"button\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\" class=\"location\">
\t\t\t\t\t\t\t\t{# <i class=\"fas fa-map-marker-alt\"></i> #}
                <img src=\"{{ asset('assets/pictures/localisation.png') }}\" alt=\"Localisation\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('cart') }}\" class=\"cart\">
\t\t\t\t\t\t\t\t{# <i class=\"fas fa-shopping-cart\"></i> #}
                <img src=\"{{ asset('assets/pictures/caddie.png') }}\" alt=\"Caddie\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<div class=\"nav-btn\">
\t\t\t\t\t\t\t{% if app.user %}
              <li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('account') }}\" class=\"account\">
\t\t\t\t\t\t\t\t\t{# <i class=\"fas fa-user-circle\"></i> #}
                  <img src=\"{{ asset('assets/pictures/user.png') }}\" alt=\"User\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t\t</a>
              </li>
\t\t\t\t\t\t\t{% else %}
              <li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"account\">
\t\t\t\t\t\t\t\t\t{# <i class=\"fas fa-user-circle\"></i> #}
                  <img src=\"{{ asset('assets/pictures/user.png') }}\" alt=\"User\" style=\"width:25px;height:25px;vertical-align:center\"/>
\t\t\t\t\t\t\t\t</a>
              </li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
              <div class=\"search\">
                <li>
                  <form class=\"search-container\">
                    <input type=\"text\" class=\"search-bar\" placeholder=\"Rechercher\">
                    <a href=\"#\"><i id=\"search-icon\" class=\"fa fa-search\"></i></a>
                  </form>
                </li>
              </div>
          </ul>
\t\t\t  </div>
\t\t\t<!-- <div class=\"burgerMenu\">
\t\t\t            <div class=\"burger-btn\">
\t\t\t                <i class=\"icon fas fa-bars\"></i>
\t\t\t            </div>
\t\t\t            <div class=\"dropdown-menu\">
\t\t\t                <ul>
\t\t\t                    <li><a href=\"index.html\">Home</a></li>
\t\t\t                    <li><a href=\"solutions.html\">Solutions</a></li>
\t\t\t                    <li><a href=\"product.html\">Product</a></li>
\t\t\t                    <li><a href=\"blog.html\">Blog</a></li>
\t\t\t                    <li><a href=\"team.html\">Team</a></li>
\t\t\t                </ul>
\t\t\t            </div>
\t\t\t        </div> -->
\t\t</nav>
</header>
<main>
  {% block content %}{% endblock %}
</main>
<footer class=\"footer-section\">
  <div class=\"container\">
    <div class=\"footer-cta pt-5 pb-5\">
      <div class=\"row\">
        <div class=\"agencies\">
          <h1>Agence Golfe Juan  :</h1>
          <h1>Agence Montauroux  :</h1>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
            <div class=\"cta-text\">
              <i class=\"fas fa-map-marker-alt\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Vos magasins :</span><br>
              <p style=\"margin-top:15px;\">13 avenue Clément Massier</p>
              <p>06220 Vallauris (Golfe Juan)</p>
              <hr>
              <p>Centre Commercial Centre Espace 1, RD 562</p>
              <p>83440 Montauroux</p>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
            <div class=\"cta-text\">
              <i class=\"fas fa-phone\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Contactez-nous :</span><br>
              <p style=\"margin:15px auto 40px auto; padding-left:35px;\">04-93-63-72-37</p>
              <hr>
              <p style=\"padding-left:35px\">04-94-50-81-16</p>
            </div>
        </div>
        <div class=\"col-xl-4 col-md-4 mb-30\">
          <div class=\"cta-text\">
            <i class=\"far fa-envelope-open\" style=\"color:white; font-size:18px; margin-right:10px;\"></i><span style=\"color:white; font-size:20px;\">Email :</span><br>
            <p style=\"margin:15px auto 40px auto; padding-left:10px;\">artetdecormb@orange.fr</p>
            <hr>
            <p style=\"padding-left:10px;\">artetdecormh@orange.fr</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-content pt-5 pb-5\">
      <div class=\"row\">
        <div class=\"col-xl-4 col-lg-4 mb-50\">
          <div class=\"footer-widget\">
            <div class=\"footer-logo\">
              <a href=\"{{ path('home') }}\"><img src=\"{{ asset('assets/pictures/logo-ad.png') }}\" alt=\"logo Art et Décor\"/></a>
            </div>
            <div class=\"footer-text\">
              <p style=\"padding-left:28px;\">
                Peintures et Revêtements
              </p>
            </div>
            <div class=\"footer-widget-heading\">
              <h2>Horaires d'ouverture :</h2>
              <table>
                <tr>
                  <td>Lundi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Mardi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Mercredi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Jeudi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Vendredi :</td>
                  <td>7h30 - 12h00 / 13h30-18h00</td>
                </tr>
                <tr>
                  <td>Samedi :</td>
                  <td>Fermé</td>
                </tr>
                <tr>
                  <td>Dimanche :</td>
                  <td>Fermé</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class=\"col-xl-4 col-lg-4 col-md-6 mb-30\">
          <div class=\"footer-widget\">
            <div class=\"footer-widget-heading\">
              <h3>Liens utiles</h3>
            </div>
            <ul>
              <li><a href=\"#\">Accueil</a></li>
              <li><a href=\"#\">Produits</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Histoire</a></li>
              <li><a href=\"#\">Contact</a></li>
              <li><a href=\"#\">L'équipe</a></li>
              <li><a href=\"#\">Photos</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-xl-4 col-lg-4 col-md-6 mb-50\">
          <div class=\"footer-widget\">
            <div class=\"footer-widget-heading\">
              <h3>Inscrivez-vous !</h3>
            </div>
            <div class=\"footer-text mb-25\">
              <p>Ne manquez pas nos dernières nouveautés ou promotions !</p>
            </div>
            <div class=\"subscribe-form\">
              <form action=\"#\">
                <input type=\"text\" placeholder=\"Adresse e-mail\">
                <button>
                  <i class=\"fab fa-telegram-plane\"></i>
                </button>
              </form>
            </div>
            <div class=\"footer-social-icon\">
               <div class=\"footer-widget-heading\">
                <h3>Réseaux sociaux</h3>
              </div>
              <a href=\"#\">
                <i class=\"fab fa-facebook-f fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-twitter fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-google-plus-g fa-2x\"></i>
              </a>
              <a href=\"#\">
                <i class=\"fab fa-instagram fa-2x\"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"copyright-area\">
      <div class=\"row\">
        <div class=\"col-xl-6 col-lg-6 text-center\">
          <div class=\"copyright-text\">
            <p>Copyright &copy; 2021, Tous droits résérvés</p>
            <p>- Conditions Générales de vente</p>
            <p>- Mentions légales</p>
            <p>Politique de confidentialité</p>
          </div>
        </div>
      </div>
  </div>
</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('assets/js/purecounter_vanilla.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js\" 
        integrity=\"sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js\" 
        integrity=\"sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script src=\"{{ asset('assets/js/scripts.js') }}\"></script>
</body>
{% block script %}{% endblock %}
</html>
", "base.html.twig", "C:\\wamp64\\www\\artetdecor-master\\templates\\base.html.twig");
    }
}

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

/* home/home.html.twig */
class __TwigTemplate_3be40e854acc97f8c29572430d2f28c4822388735ba999930b875a2e422c8734 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Art et Décor | Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t</ol>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/salon-1.jpeg"), "html", null, true);
        echo "\" class=\"maison\" alt=\"maison\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPeintures, Décoration Intérieures et Extérieures
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Au service des professionnels et des particuliers à la recherche de produits de qualités et de conseils technique</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"discover\">Découvrez nos produits</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/nuancier.png"), "html", null, true);
        echo "\" class=\"fantasia\" alt=\"Polycrom\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Plus de 1300 couleurs</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Trouvez votre couleur qui vous correspond</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/bio-source.png"), "html", null, true);
        echo "\" alt=\"Peintures biosourcées\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Découvrez nos dernières nouveautés !</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Peinture à base de résines naturelles</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/Ulti.png"), "html", null, true);
        echo "\" alt=\"Ultimium\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>PROMO! 3 fûts achetés, 1 offert</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
\t</div>
\t<section>
\t\t<p>Présentation</p>
\t\t<div class=\"entete\">
\t\t\t<div class=\"entete1\">
\t\t\t\t<div class=\"entete-1\">
\t\t\t\t\t<small>Intérieur</small>
\t\t\t\t\t<h2>Découvrez notre gamme Intérieure</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDécouvrez toutes les peintures vendues par votre grossiste !
\t\t\t\t\t\t                        Découvrez notre éventail de produits de peinture intérieure : 
\t\t\t\t\t\t                        peinture murale, peinture sol, peinture plafond, mais également de la peinture pour différents matériaux d’intérieur comme le bois, 
\t\t\t\t\t\t                        le PVC, le carrelage, la faïence et le métal.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"discover1\">Découvrez nos produits intérieurs</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete-img\">
\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/intérieur.jpeg"), "html", null, true);
        echo "\" alt=\"Photo deco\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"entete2\">
\t\t\t\t<div class=\"entete2-img\">
\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/extérieur.jpeg"), "html", null, true);
        echo "\" alt=\"Photo deco 2\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete-2\">
\t\t\t\t\t<small>Extérieur</small>
\t\t\t\t\t<h2>Découvrez notre gamme Extérieure</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tNous avons une gamme riche en peinture extérieure afin de vous combler dans la rénovation complète de vos petits et gros œuvres. Peinture pour façade, métaux, 
\t\t\t\t\t\t                        peinture spéciale bois extérieur, pour chaque pot de peinture, 
\t\t\t\t\t\t                        vous pouvez choisir la couleur que vous souhaitez, la contenance (1L, 4L, 10L, 15L) et la quantité de pot nécessaire.
\t\t\t\t\t\t                        Nos kits façade seront parfaitement adéquats pour votre ravalement complet de votre façade, repeindre vos murs extérieurs, votre portail ou vos volets. 
\t\t\t\t\t\t                        Et toujours les rouleaux, pinceaux et montures à l'unité.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"discover1\">Découvrez nos produits extérieurs</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"entete3\">
\t\t\t\t<div class=\"entete-3\">
\t\t\t\t\t<small>Outillage</small>
\t\t\t\t\t<h2>Découvrez toute la gamme de matériel et outillage pour les travaux de peintures.</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tTout le matériel et l'outillage pour les travaux de peintures sont disponibles : rouleaux de peintures, bâches de protection peintures, brosses et pinceaux de peintures...         
\t\t\t\t\t\t                        Le matériel et l'outillage pour les travaux de peintures sont de qualité professionnelle et ont été testés par notre équipe d'experts.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"discover1\">Découvrez nos produits</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete3-img\">
\t\t\t\t\t<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/outillage.jpeg"), "html", null, true);
        echo "\" alt=\"Photo deco 3\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"categories\">
\t<h1>Que désirez vous peindre ?</h1>
\t<p class=\"title\">Trouvez comment procéder et choisissez le produit le plus adéquat pour votre espace et surface.</p>
\t<div class=\"places\">
\t\t<div class=\"content\">
\t\t\t<div class=\"salle-a-manger\">
\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/salle-a-manger.jpg"), "html", null, true);
        echo "\" alt=\"Salle a manger\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salle a manger</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"salon\">
\t\t\t\t<img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/salon.jpg"), "html", null, true);
        echo "\" alt=\"Salon\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salon</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"bureau\">
\t\t\t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/bureau.jpg"), "html", null, true);
        echo "\" alt=\"Bureau\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Bureau</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"boiseries\">
\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/boiseries.jpg"), "html", null, true);
        echo "\" alt=\"Boiseries\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Boiseries</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"salle-de-bain\">
\t\t\t\t<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/salle-de-bain.jpg"), "html", null, true);
        echo "\" alt=\"Salle de bain\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salle de bain</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"facade\">
\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/facade.jpeg"), "html", null, true);
        echo "\" alt=\"Façade\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Façade</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"chambre\">
\t\t\t\t<img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/chambre.jpg"), "html", null, true);
        echo "\" alt=\"Chambre\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Chambre</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"cuisine\">
\t\t\t\t<img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/cuisine.jpg"), "html", null, true);
        echo "\" alt=\"Cuisine\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Cuisine</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"fer\">
\t\t\t\t<img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/fer.jpeg"), "html", null, true);
        echo "\" alt=\"Fer\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Fer</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sol\">
\t\t\t\t<img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/garage.jpeg"), "html", null, true);
        echo "\" alt=\"Sol\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Sol</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<div class=\"data\">
\t\t<div class=\"col-md-4\" >
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"30\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span
\t\t\t\t\t>
\t\t<h2>années dans le secteur</h2>
\t\t<i class=\"fa-solid fa-cake-candles fa-4x\"></i>
\t\t</div> 
\t\t<div class=\"col-md-4\">
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"1300\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span
\t\t\t\t\t>
\t\t<h3>références de teintes</h3>
\t\t<i class=\"fa-solid fa-swatchbook fa-4x\"></i>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"20\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span>
\t\t<h3>partenaires</h3>
\t\t<br><br>
\t\t<i class=\"fa-solid fa-handshake fa-4x\"></i>
\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t<br><br>
\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"100\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span> <span>% <br><span>français</span></span>
\t\t\t\t\t\t<br><br>
\t\t<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAAX0lEQVRoge3ZwQnAMAwEwXNI/y0nPQSBjjDzt9Fi/5QAsOAkebaHmHBtDzDlHrzrfDw38iN+8yJC2ghpI6SNkDZC2ghpI6SNkDZC2ghpI6SNkDZC2ghpI6SNjRUAJHkBNVoDR5n8ImwAAAAASUVORK5CYII=\"/>
\t\t</div>
</div>
<section>
<div class=\"info2\">
<h1>Notre Engagement</h1>
<div class=\"info3\">
\t<div class=\"ecolabel\">
\t\t<img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/environnement.jpg"), "html", null, true);
        echo "\" alt=\"Icone Environnement\"/>
\t</div>
\t<div class=\"zone-verte\">
\t\t<img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/zone-verte.jpg"), "html", null, true);
        echo "\" alt=\"Icone Zone Verte\"/>
\t</div>
\t<div class=\"zone-bleue\">
\t\t<img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/zone-bleue.jpg"), "html", null, true);
        echo "\" alt=\"Icone Zone bleue\"/>
\t</div>
\t<div class=\"COV\">
\t\t<img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/cov.jpg"), "html", null, true);
        echo "\" alt=\"Icone COV\"/>
\t</div>
\t<div class=\"hygiene\">
\t\t<img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/hygiene.jpg"), "html", null, true);
        echo "\" alt=\"Icone Hygiene\"/>
\t</div>
\t<div class=\"qualite\">
\t\t<img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/air-qualite.png"), "html", null, true);
        echo "\" alt=\"Icone Qualité\"/>
\t</div>
</div></div></section><section class=\"presentation\"><div class=\"parallax\">
<h1>Nos Atouts</h1>
<div class=\"row mt-75 space-alignment mb-0\">
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Polyvalence</h2>
\t\t\t<img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/polyvalence.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tOffre une gamme complète
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Qualité</h2>
\t\t\t<img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/qualite.png"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tDe meilleurs ingrédients pour un meilleur aspect
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>100% Français</h2>
\t\t\t<img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/made-in-fr.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tTous nos produits sont fabriqués en France
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Ecoute et Analyse</h2>
\t\t\t<img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/analyse.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tEntendre vos besoins et vos attentes
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Expertise</h2>
\t\t\t<img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/expertise.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tProfessionnels venant d’horizons différents, possédant des compétences variées et complémentaires
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Accompagnement</h2>
\t\t\t<img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/accompagnement.jpg"), "html", null, true);
        echo "\"/>
\t\t\t<p>
\t\t\t\tLes solutions que nous vous proposons sont élaborées avec vous tout au long de notre intervention
\t\t\t</p>
\t\t</div>
\t</div>
</div></div></section><section class=\"partners\"><h1>Nos partenaires</h1><div class=\"partners-logos slider\">
<div class=\"slide\">
\t<img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/toupret.jpg"), "html", null, true);
        echo "\" alt=\"Toupret\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/san-marco.png"), "html", null, true);
        echo "\" alt=\"San Marco\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/keria2.png"), "html", null, true);
        echo "\" alt=\"Keria\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/logo-comus.jpg"), "html", null, true);
        echo "\" alt=\"Comus\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/soframap.png"), "html", null, true);
        echo "\" alt=\"Soframap\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/linitop.jpg"), "html", null, true);
        echo "\" alt=\"Linitop\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/domaterra.jpg"), "html", null, true);
        echo "\" alt=\"Domaterra\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/prestonett.jpg"), "html", null, true);
        echo "\" alt=\"Prestonett\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/outil-parfait.png"), "html", null, true);
        echo "\" alt=\"L'outil Parfait\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/flex.png"), "html", null, true);
        echo "\" alt=\"Flex\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/mirka.png"), "html", null, true);
        echo "\" alt=\"Mirka\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/bostik.jpg"), "html", null, true);
        echo "\" alt=\"Bostik\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/montana.png"), "html", null, true);
        echo "\" alt=\"Montana\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/julien.png"), "html", null, true);
        echo "\" alt=\"Julien\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/metylan.png"), "html", null, true);
        echo "\" alt=\"Metylan\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/henkel.png"), "html", null, true);
        echo "\" alt=\"Henkel\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/semin.png"), "html", null, true);
        echo "\" alt=\"Semin\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/sinto.jpg"), "html", null, true);
        echo "\" alt=\"Sinto\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/zinser.png"), "html", null, true);
        echo "\" alt=\"Rustoleum\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/dulary.jpg"), "html", null, true);
        echo "\" alt=\"Dulary\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/owatrol.jpg"), "html", null, true);
        echo "\" alt=\"Owatrol\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/euromair.png"), "html", null, true);
        echo "\" alt=\"Euromair\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/fluidemail.png"), "html", null, true);
        echo "\" alt=\"Fluidemail\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/stoppani.jpg"), "html", null, true);
        echo "\" alt=\"Stoppani\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/roulor.jpg"), "html", null, true);
        echo "\" alt=\"Roulor\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/nmc.png"), "html", null, true);
        echo "\" alt=\"NMC\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/rota.png"), "html", null, true);
        echo "\" alt=\"Rota\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/self-deco.jpg"), "html", null, true);
        echo "\" alt=\"Self Deco\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/sofec.png"), "html", null, true);
        echo "\" alt=\"Sofec\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/lms.png"), "html", null, true);
        echo "\" alt=\"La Maison du Sol\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/lutece.jpg"), "html", null, true);
        echo "\" alt=\"Lutèce\"/>
</div>
<div class=\"slide\">
\t<img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/vepro.png"), "html", null, true);
        echo "\" alt=\"Vepro\"/>
</div></div></section>

<section class=\"services\">
<h1>Nos services</h1>
<div class=\"info\">
<div class=\"contact\">
\t<img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/bucket.png"), "html", null, true);
        echo "\" alt=\"Seau\"/>
\t<p>Mise à la teinte</p>
</div>
<div class=\"stock\">
\t<img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/stock.png"), "html", null, true);
        echo "\" alt=\"stock\"/>
\t<p>Stock</p>
</div>
<div class=\"preco\">
\t<img src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/maison.png"), "html", null, true);
        echo "\" alt=\"Facade\"/>
\t<p>Diagnostic Façade</p>
</div>
<div class=\".paint\">
\t<img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/paint-roller.png"), "html", null, true);
        echo "\" alt=\"Rouleau\"/>
\t<p>
\t\tDu Sol au Plafond
\t</p>
</div>
<div class=\"paiement\">
\t<img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/payment.png"), "html", null, true);
        echo "\" alt=\"Paiement sécurisé\"/>
\t<p>
\t\tPaiement 100% sécurisé
\t</p>
</div>
<div class=\"port\">
\t<img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/livraison-gratuite.png"), "html", null, true);
        echo "\" alt=\"Port\"/>
\t<p>
\t\tFrais de port offerts dès 100€ d'achats
\t</p>
</div>
<div class=\"livraison\">
\t<img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pictures/camion.png"), "html", null, true);
        echo "\" alt=\"Livraison Rapide\"/>
\t<p>
\t\tLivraison rapide<br>
\t</p>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 483,  772 => 477,  763 => 471,  754 => 465,  747 => 461,  740 => 457,  733 => 453,  723 => 446,  717 => 443,  711 => 440,  705 => 437,  699 => 434,  693 => 431,  687 => 428,  681 => 425,  675 => 422,  669 => 419,  663 => 416,  657 => 413,  651 => 410,  645 => 407,  639 => 404,  633 => 401,  627 => 398,  621 => 395,  615 => 392,  609 => 389,  603 => 386,  597 => 383,  591 => 380,  585 => 377,  579 => 374,  573 => 371,  567 => 368,  561 => 365,  555 => 362,  549 => 359,  543 => 356,  537 => 353,  526 => 345,  514 => 336,  502 => 327,  490 => 318,  478 => 309,  466 => 300,  455 => 292,  449 => 289,  443 => 286,  437 => 283,  431 => 280,  425 => 277,  363 => 218,  354 => 212,  345 => 206,  336 => 200,  327 => 194,  318 => 188,  309 => 182,  300 => 176,  291 => 170,  282 => 164,  267 => 152,  261 => 149,  247 => 138,  232 => 126,  224 => 121,  218 => 118,  178 => 81,  154 => 60,  130 => 39,  122 => 34,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art et Décor | Accueil
{% endblock %}
{% block content %}
\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
\t\t</ol>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/salon-1.jpeg') }}\" class=\"maison\" alt=\"maison\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPeintures, Décoration Intérieures et Extérieures
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Au service des professionnels et des particuliers à la recherche de produits de qualités et de conseils technique</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<a href=\"{{ path('products') }}\" class=\"discover\">Découvrez nos produits</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/nuancier.png') }}\" class=\"fantasia\" alt=\"Polycrom\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Plus de 1300 couleurs</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Trouvez votre couleur qui vous correspond</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/bio-source.png') }}\" alt=\"Peintures biosourcées\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Découvrez nos dernières nouveautés !</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>Peinture à base de résines naturelles</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/Ulti.png') }}\" alt=\"Ultimium\"/>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t<p>PROMO! 3 fûts achetés, 1 offert</p>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
\t</div>
\t<section>
\t\t<p>Présentation</p>
\t\t<div class=\"entete\">
\t\t\t<div class=\"entete1\">
\t\t\t\t<div class=\"entete-1\">
\t\t\t\t\t<small>Intérieur</small>
\t\t\t\t\t<h2>Découvrez notre gamme Intérieure</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tDécouvrez toutes les peintures vendues par votre grossiste !
\t\t\t\t\t\t                        Découvrez notre éventail de produits de peinture intérieure : 
\t\t\t\t\t\t                        peinture murale, peinture sol, peinture plafond, mais également de la peinture pour différents matériaux d’intérieur comme le bois, 
\t\t\t\t\t\t                        le PVC, le carrelage, la faïence et le métal.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path('products') }}\" class=\"discover1\">Découvrez nos produits intérieurs</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete-img\">
\t\t\t\t\t<img src=\"{{ asset('assets/pictures/intérieur.jpeg') }}\" alt=\"Photo deco\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"entete2\">
\t\t\t\t<div class=\"entete2-img\">
\t\t\t\t\t<img src=\"{{ asset('assets/pictures/extérieur.jpeg') }}\" alt=\"Photo deco 2\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete-2\">
\t\t\t\t\t<small>Extérieur</small>
\t\t\t\t\t<h2>Découvrez notre gamme Extérieure</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tNous avons une gamme riche en peinture extérieure afin de vous combler dans la rénovation complète de vos petits et gros œuvres. Peinture pour façade, métaux, 
\t\t\t\t\t\t                        peinture spéciale bois extérieur, pour chaque pot de peinture, 
\t\t\t\t\t\t                        vous pouvez choisir la couleur que vous souhaitez, la contenance (1L, 4L, 10L, 15L) et la quantité de pot nécessaire.
\t\t\t\t\t\t                        Nos kits façade seront parfaitement adéquats pour votre ravalement complet de votre façade, repeindre vos murs extérieurs, votre portail ou vos volets. 
\t\t\t\t\t\t                        Et toujours les rouleaux, pinceaux et montures à l'unité.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path('products') }}\" class=\"discover1\">Découvrez nos produits extérieurs</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"entete3\">
\t\t\t\t<div class=\"entete-3\">
\t\t\t\t\t<small>Outillage</small>
\t\t\t\t\t<h2>Découvrez toute la gamme de matériel et outillage pour les travaux de peintures.</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tTout le matériel et l'outillage pour les travaux de peintures sont disponibles : rouleaux de peintures, bâches de protection peintures, brosses et pinceaux de peintures...         
\t\t\t\t\t\t                        Le matériel et l'outillage pour les travaux de peintures sont de qualité professionnelle et ont été testés par notre équipe d'experts.
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path('products') }}\" class=\"discover1\">Découvrez nos produits</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"entete3-img\">
\t\t\t\t\t<img src=\"{{ asset('assets/pictures/outillage.jpeg') }}\" alt=\"Photo deco 3\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"categories\">
\t<h1>Que désirez vous peindre ?</h1>
\t<p class=\"title\">Trouvez comment procéder et choisissez le produit le plus adéquat pour votre espace et surface.</p>
\t<div class=\"places\">
\t\t<div class=\"content\">
\t\t\t<div class=\"salle-a-manger\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/salle-a-manger.jpg') }}\" alt=\"Salle a manger\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salle a manger</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"salon\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/salon.jpg') }}\" alt=\"Salon\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salon</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"bureau\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/bureau.jpg') }}\" alt=\"Bureau\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Bureau</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"boiseries\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/boiseries.jpg') }}\" alt=\"Boiseries\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Boiseries</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"salle-de-bain\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/salle-de-bain.jpg') }}\" alt=\"Salle de bain\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Salle de bain</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"facade\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/facade.jpeg') }}\" alt=\"Façade\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Façade</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"chambre\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/chambre.jpg') }}\" alt=\"Chambre\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Chambre</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"cuisine\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/cuisine.jpg') }}\" alt=\"Cuisine\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Cuisine</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"fer\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/fer.jpeg') }}\" alt=\"Fer\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Fer</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sol\">
\t\t\t\t<img src=\"{{ asset('assets/pictures/garage.jpeg') }}\" alt=\"Sol\"/>
\t\t\t\t<div class=\"inside\">
\t\t\t\t\t<span>Sol</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<div class=\"data\">
\t\t<div class=\"col-md-4\" >
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"30\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span
\t\t\t\t\t>
\t\t<h2>années dans le secteur</h2>
\t\t<i class=\"fa-solid fa-cake-candles fa-4x\"></i>
\t\t</div> 
\t\t<div class=\"col-md-4\">
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"1300\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span
\t\t\t\t\t>
\t\t<h3>références de teintes</h3>
\t\t<i class=\"fa-solid fa-swatchbook fa-4x\"></i>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h1>Plus de </h1>
\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"20\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span>
\t\t<h3>partenaires</h3>
\t\t<br><br>
\t\t<i class=\"fa-solid fa-handshake fa-4x\"></i>
\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t<br><br>
\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\tdata-purecounter-duration=\"3.5\"
\t\t\t\t\t\tdata-purecounter-end=\"100\"
\t\t\t\t\t\tclass=\"purecounter\"
\t\t\t\t\t\t>0</span> <span>% <br><span>français</span></span>
\t\t\t\t\t\t<br><br>
\t\t<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAAX0lEQVRoge3ZwQnAMAwEwXNI/y0nPQSBjjDzt9Fi/5QAsOAkebaHmHBtDzDlHrzrfDw38iN+8yJC2ghpI6SNkDZC2ghpI6SNkDZC2ghpI6SNkDZC2ghpI6SNjRUAJHkBNVoDR5n8ImwAAAAASUVORK5CYII=\"/>
\t\t</div>
</div>
<section>
<div class=\"info2\">
<h1>Notre Engagement</h1>
<div class=\"info3\">
\t<div class=\"ecolabel\">
\t\t<img src=\"{{ asset('assets/pictures/environnement.jpg') }}\" alt=\"Icone Environnement\"/>
\t</div>
\t<div class=\"zone-verte\">
\t\t<img src=\"{{ asset('assets/pictures/zone-verte.jpg') }}\" alt=\"Icone Zone Verte\"/>
\t</div>
\t<div class=\"zone-bleue\">
\t\t<img src=\"{{ asset('assets/pictures/zone-bleue.jpg') }}\" alt=\"Icone Zone bleue\"/>
\t</div>
\t<div class=\"COV\">
\t\t<img src=\"{{ asset('assets/pictures/cov.jpg') }}\" alt=\"Icone COV\"/>
\t</div>
\t<div class=\"hygiene\">
\t\t<img src=\"{{ asset('assets/pictures/hygiene.jpg') }}\" alt=\"Icone Hygiene\"/>
\t</div>
\t<div class=\"qualite\">
\t\t<img src=\"{{ asset('assets/pictures/air-qualite.png') }}\" alt=\"Icone Qualité\"/>
\t</div>
</div></div></section><section class=\"presentation\"><div class=\"parallax\">
<h1>Nos Atouts</h1>
<div class=\"row mt-75 space-alignment mb-0\">
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Polyvalence</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/polyvalence.jpg') }}\"/>
\t\t\t<p>
\t\t\t\tOffre une gamme complète
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Qualité</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/qualite.png') }}\"/>
\t\t\t<p>
\t\t\t\tDe meilleurs ingrédients pour un meilleur aspect
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>100% Français</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/made-in-fr.jpg') }}\"/>
\t\t\t<p>
\t\t\t\tTous nos produits sont fabriqués en France
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Ecoute et Analyse</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/analyse.jpg') }}\"/>
\t\t\t<p>
\t\t\t\tEntendre vos besoins et vos attentes
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Expertise</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/expertise.jpg') }}\"/>
\t\t\t<p>
\t\t\t\tProfessionnels venant d’horizons différents, possédant des compétences variées et complémentaires
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t<div class=\"features dark-bg-shadow font-light\">
\t\t\t<h2>Accompagnement</h2>
\t\t\t<img src=\"{{ asset('assets/pictures/accompagnement.jpg') }}\"/>
\t\t\t<p>
\t\t\t\tLes solutions que nous vous proposons sont élaborées avec vous tout au long de notre intervention
\t\t\t</p>
\t\t</div>
\t</div>
</div></div></section><section class=\"partners\"><h1>Nos partenaires</h1><div class=\"partners-logos slider\">
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/toupret.jpg') }}\" alt=\"Toupret\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/san-marco.png') }}\" alt=\"San Marco\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/keria2.png') }}\" alt=\"Keria\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/logo-comus.jpg') }}\" alt=\"Comus\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/soframap.png') }}\" alt=\"Soframap\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/linitop.jpg') }}\" alt=\"Linitop\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/domaterra.jpg') }}\" alt=\"Domaterra\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/prestonett.jpg') }}\" alt=\"Prestonett\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/outil-parfait.png') }}\" alt=\"L'outil Parfait\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/flex.png') }}\" alt=\"Flex\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/mirka.png') }}\" alt=\"Mirka\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/bostik.jpg') }}\" alt=\"Bostik\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/montana.png') }}\" alt=\"Montana\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/julien.png') }}\" alt=\"Julien\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/metylan.png') }}\" alt=\"Metylan\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/henkel.png') }}\" alt=\"Henkel\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/semin.png') }}\" alt=\"Semin\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/sinto.jpg') }}\" alt=\"Sinto\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/zinser.png') }}\" alt=\"Rustoleum\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/dulary.jpg') }}\" alt=\"Dulary\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/owatrol.jpg') }}\" alt=\"Owatrol\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/euromair.png') }}\" alt=\"Euromair\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/fluidemail.png') }}\" alt=\"Fluidemail\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/stoppani.jpg') }}\" alt=\"Stoppani\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/roulor.jpg') }}\" alt=\"Roulor\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/nmc.png') }}\" alt=\"NMC\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/rota.png') }}\" alt=\"Rota\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/self-deco.jpg') }}\" alt=\"Self Deco\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/sofec.png') }}\" alt=\"Sofec\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/lms.png') }}\" alt=\"La Maison du Sol\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/lutece.jpg') }}\" alt=\"Lutèce\"/>
</div>
<div class=\"slide\">
\t<img src=\"{{ asset('assets/pictures/vepro.png') }}\" alt=\"Vepro\"/>
</div></div></section>

<section class=\"services\">
<h1>Nos services</h1>
<div class=\"info\">
<div class=\"contact\">
\t<img src=\"{{ asset('assets/pictures/bucket.png') }}\" alt=\"Seau\"/>
\t<p>Mise à la teinte</p>
</div>
<div class=\"stock\">
\t<img src=\"{{ asset('assets/pictures/stock.png') }}\" alt=\"stock\"/>
\t<p>Stock</p>
</div>
<div class=\"preco\">
\t<img src=\"{{ asset('assets/pictures/maison.png') }}\" alt=\"Facade\"/>
\t<p>Diagnostic Façade</p>
</div>
<div class=\".paint\">
\t<img src=\"{{ asset('assets/pictures/paint-roller.png') }}\" alt=\"Rouleau\"/>
\t<p>
\t\tDu Sol au Plafond
\t</p>
</div>
<div class=\"paiement\">
\t<img src=\"{{ asset('assets/pictures/payment.png') }}\" alt=\"Paiement sécurisé\"/>
\t<p>
\t\tPaiement 100% sécurisé
\t</p>
</div>
<div class=\"port\">
\t<img src=\"{{ asset('assets/pictures/livraison-gratuite.png') }}\" alt=\"Port\"/>
\t<p>
\t\tFrais de port offerts dès 100€ d'achats
\t</p>
</div>
<div class=\"livraison\">
\t<img src=\"{{ asset('assets/pictures/camion.png') }}\" alt=\"Livraison Rapide\"/>
\t<p>
\t\tLivraison rapide<br>
\t</p>
</div></div>{% endblock %}
", "home/home.html.twig", "C:\\wamp64\\www\\artetdecor-master\\templates\\home\\home.html.twig");
    }
}

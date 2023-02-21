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

/* order/add.html.twig */
class __TwigTemplate_2d6d3af17360d692c3542a45c77c364975342defa3cb0873cb32519ff869fabe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        echo " <script src=\"https://js.stripe.com/v3/\"></script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Art et Décor | Paiement de ma commande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 style=\"margin-top:150px;\">Votre récapitulatif</h1>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Récap de ma commande</p>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 13
            echo "            ";
            // line 14
            echo "                <div class=\"row ";
            if (($context["key"] > 0)) {
                echo "mt-4";
            }
            echo "\">
                    <div class=\"col-2\">
                        <img src=\"/assets/pictures/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 16), "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"img-fluid\" style=\"max-height:100px; max-width:100px;\"/>
                    </div>
                    <div class=\"col-8 my-auto\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "
                        <small>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 20), "subtitles", [], "any", false, false, false, 20), "html", null, true);
            echo "</small>
                        <br>
                        x";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22), "html", null, true);
            echo "
                    </div>
                    <div class=\"col-2 my-auto\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 25), "price", [], "any", false, false, false, 25) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25)) / 100), 2, ",", "."), "html", null, true);
            echo " €
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
        <strong>Sous Total : ";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 30, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €</strong>
        <strong>Livraison : ";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31) / 100), 2, ",", "."), "html", null, true);
        echo " €</strong>
        <strong>Total : ";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 32, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32) / 100)), 2, ",", "."), "html", null, true);
        echo " €</strong>
        <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer ";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 33, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 37
        echo "    <script type=\"text/javascript\">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe(\"pk_test_51Io2foBOHa9OUMPzhas42cGHBr21ruSbWK4bKGX11l5fX88topLgVJudgaHtb2RRZguGgauVIymnAyKU5R8IKin200nzf6cSJ9\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          if(session.error == 'order'){
            window.location.replace('";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "')
          }else{
            return stripe.redirectToCheckout({ sessionId: session.id });
          }
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error(\"Error:\", error);
        });
    });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 50,  207 => 42,  200 => 37,  190 => 36,  177 => 33,  173 => 32,  169 => 31,  165 => 30,  162 => 29,  152 => 25,  146 => 22,  141 => 20,  137 => 19,  129 => 16,  121 => 14,  119 => 13,  115 => 12,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %} <script src=\"https://js.stripe.com/v3/\"></script> {% endblock %}

{% block title %}Art et Décor | Paiement de ma commande{% endblock %}

{% block content %}
    <h1 style=\"margin-top:150px;\">Votre récapitulatif</h1>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Récap de ma commande</p>
            {% for key,product in cart %}
            {# Cibler la deuxième div #}
                <div class=\"row {% if key > 0 %}mt-4{% endif %}\">
                    <div class=\"col-2\">
                        <img src=\"/assets/pictures/{{ product.product.image }}\" alt=\"{{ product.product.name }}\" class=\"img-fluid\" style=\"max-height:100px; max-width:100px;\"/>
                    </div>
                    <div class=\"col-8 my-auto\">
                        {{ product.product.name }}
                        <small>{{ product.product.subtitles }}</small>
                        <br>
                        x{{ product.quantity }}
                    </div>
                    <div class=\"col-2 my-auto\">
                        {{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €
                    </div>
                </div>
            {% endfor %}
        </div>
        <strong>Sous Total : {{ (total / 100)|number_format(2, ',', '.') }} €</strong>
        <strong>Livraison : {{ (carrier.price / 100)|number_format(2, ',', '.') }} €</strong>
        <strong>Total : {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €</strong>
        <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €</a>
    </div>
{% endblock %}
{% block script %}
    <script type=\"text/javascript\">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe(\"pk_test_51Io2foBOHa9OUMPzhas42cGHBr21ruSbWK4bKGX11l5fX88topLgVJudgaHtb2RRZguGgauVIymnAyKU5R8IKin200nzf6cSJ9\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/{{ reference }}\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          if(session.error == 'order'){
            window.location.replace('{{ path('order') }}')
          }else{
            return stripe.redirectToCheckout({ sessionId: session.id });
          }
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error(\"Error:\", error);
        });
    });
  </script>
{% endblock %}
", "order/add.html.twig", "C:\\wamp64\\www\\artetdecor-master\\templates\\order\\add.html.twig");
    }
}

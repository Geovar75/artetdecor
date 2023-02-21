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

/* account/account_order.html.twig */
class __TwigTemplate_6e4230b7e97ca36888a2f95e8b137b49f9b81375f40287833a776b138f0f7fd8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account_order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/account_order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/account_order.html.twig", 1);
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

        echo "Art et Décor | Mes commandes";
        
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
        echo "<br>
<br>
    <h1 style=\"margin-top:50px;\">Mes commandes en cours</h1>
    <br>
    <p>Bonjour ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    <br><br>
    ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 12, $this->source); })())) == 0)) {
            // line 13
            echo "        <hr>
        <p class=\"text-center\">Vous n’avez pas encore passé de commande.</p>
    ";
        } else {
            // line 16
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Référence</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Passé le</th>
                    <th scope=\"col\">Produits</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 29
                echo "                <tr>
                    <td><span class=\"badge badge-secondary\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 30), "html", null, true);
                echo "</span></td>
                    <td>
                        ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 32) == 1)) {
                    echo "   
                            Paiement accepté
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 34
$context["order"], "state", [], "any", false, false, false, 34) == 2)) {
                    // line 35
                    echo "                            Préparation en cours
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 36
$context["order"], "state", [], "any", false, false, false, 36) == 3)) {
                    // line 37
                    echo "                            Livraison en cours
                        ";
                }
                // line 39
                echo "                    </td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 41)), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 42) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 42)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td class=\"text-right\"><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
                </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </tbody>
        </table>

    <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Retour</a>
 ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/account_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  172 => 46,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  148 => 39,  144 => 37,  142 => 36,  139 => 35,  137 => 34,  132 => 32,  127 => 30,  124 => 29,  120 => 28,  106 => 16,  101 => 13,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art et Décor | Mes commandes{% endblock %}

{% block content %}
<br>
<br>
    <h1 style=\"margin-top:50px;\">Mes commandes en cours</h1>
    <br>
    <p>Bonjour {{ app.user.firstname }}</p>
    <br><br>
    {% if orders|length == 0 %}
        <hr>
        <p class=\"text-center\">Vous n’avez pas encore passé de commande.</p>
    {% else %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Référence</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Passé le</th>
                    <th scope=\"col\">Produits</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                <tr>
                    <td><span class=\"badge badge-secondary\">{{ order.reference }}</span></td>
                    <td>
                        {% if order.state == 1 %}   
                            Paiement accepté
                        {% elseif order.state == 2 %}
                            Préparation en cours
                        {% elseif order.state == 3 %}
                            Livraison en cours
                        {% endif %}
                    </td>
                    <td>{{ order.createdAt|date('d/m/Y') }}</td>
                    <td>{{ order.orderDetails|length }}</td>
                    <td>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.') }} €</td>
                    <td class=\"text-right\"><a href=\"{{ path('account_order_show', { reference : order.reference }) }}\">Voir ma commande</a></td>
                </tr>
        {% endfor %}
            </tbody>
        </table>

    <a href=\"{{ path('account') }}\">Retour</a>
 {% endif %}
{% endblock %}", "account/account_order.html.twig", "C:\\wamp64\\www\\artetdecor-master\\templates\\account\\account_order.html.twig");
    }
}

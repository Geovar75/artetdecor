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

/* product/products.html.twig */
class __TwigTemplate_2645fc818d200645cd99a1e966e9f68fae223cd2a8e53524584b801cf74fc779 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/products.html.twig", 1);
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

        echo "Art et Décor | Produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t<h1 style=\"margin-top:150px; text-align: center;\">Nos Produits</h1>
\t<div class=\"products\">
\t\t";
        // line 78
        echo "
\t\t<form id=\"filters\">
\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 80, $this->source); })()), "string", [], "any", false, false, false, 80), 'widget');
        echo "
\t\t";
        // line 89
        echo "\t\t<ul class=\"accordion-menu\">
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-road\" aria-hidden=\"true\"></i>
\t\t\t\t\tAspect
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 98, $this->source); })()), "categories", [], "any", false, false, false, 98), 1, [], "any", false, false, false, 98), 'row', ["label_attr" => ["class" => "test"]]);
        // line 100
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 104, $this->source); })()), "categories", [], "any", false, false, false, 104), 2, [], "any", false, false, false, 104), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 107, $this->source); })()), "categories", [], "any", false, false, false, 107), 3, [], "any", false, false, false, 107), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 110, $this->source); })()), "categories", [], "any", false, false, false, 110), 4, [], "any", false, false, false, 110), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
\t\t\t\t\tFamilles
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 122, $this->source); })()), "categories", [], "any", false, false, false, 122), 8, [], "any", false, false, false, 122), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 125, $this->source); })()), "categories", [], "any", false, false, false, 125), 7, [], "any", false, false, false, 125), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 128, $this->source); })()), "categories", [], "any", false, false, false, 128), 24, [], "any", false, false, false, 128), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 131, $this->source); })()), "categories", [], "any", false, false, false, 131), 9, [], "any", false, false, false, 131), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 134, $this->source); })()), "categories", [], "any", false, false, false, 134), 10, [], "any", false, false, false, 134), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 137, $this->source); })()), "categories", [], "any", false, false, false, 137), 26, [], "any", false, false, false, 137), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 140, $this->source); })()), "categories", [], "any", false, false, false, 140), 6, [], "any", false, false, false, 140), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 143, $this->source); })()), "categories", [], "any", false, false, false, 143), 5, [], "any", false, false, false, 143), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\tPhase
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 155, $this->source); })()), "categories", [], "any", false, false, false, 155), 18, [], "any", false, false, false, 155), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 158, $this->source); })()), "categories", [], "any", false, false, false, 158), 19, [], "any", false, false, false, 158), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i>
\t\t\t\t\tRésines
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 170, $this->source); })()), "categories", [], "any", false, false, false, 170), 12, [], "any", false, false, false, 170), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 173, $this->source); })()), "categories", [], "any", false, false, false, 173), 13, [], "any", false, false, false, 173), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 176, $this->source); })()), "categories", [], "any", false, false, false, 176), 14, [], "any", false, false, false, 176), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 179, $this->source); })()), "categories", [], "any", false, false, false, 179), 15, [], "any", false, false, false, 179), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 182, $this->source); })()), "categories", [], "any", false, false, false, 182), 16, [], "any", false, false, false, 182), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 185, $this->source); })()), "categories", [], "any", false, false, false, 185), 17, [], "any", false, false, false, 185), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 188, $this->source); })()), "categories", [], "any", false, false, false, 188), 25, [], "any", false, false, false, 188), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i>
\t\t\t\t\tClasse
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 200, $this->source); })()), "categories", [], "any", false, false, false, 200), 20, [], "any", false, false, false, 200), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 203, $this->source); })()), "categories", [], "any", false, false, false, 203), 21, [], "any", false, false, false, 203), 'row');
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t\t";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProduct"]) || array_key_exists("formProduct", $context) ? $context["formProduct"] : (function () { throw new RuntimeError('Variable "formProduct" does not exist.', 208, $this->source); })()), "submit", [], "any", false, false, false, 208), 'widget');
        echo "
\t\t</form>


\t\t<div class=\"boucle\">
\t\t\t";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 213, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 214
            echo "\t\t\t\t<div class=\"product-item text-center\" style=\"width:100%;\">
\t\t\t\t\t<a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 215)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"assets/pictures/";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 216), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216), "html", null, true);
            echo "\" class=\"img-fluid\" style=\"max-height:200px; max-width:200px;\"/>
\t\t\t\t\t\t<h4>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 217), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t<h4>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 218), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t<h5>";
            // line 219
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 219) / 100), 2, ",", ""), "html", null, true);
            echo "€ HT</h5>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t<div class=\"paginator\">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 223, $this->source); })()));
        echo "</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 223,  323 => 219,  319 => 218,  315 => 217,  309 => 216,  305 => 215,  302 => 214,  298 => 213,  290 => 208,  282 => 203,  276 => 200,  261 => 188,  255 => 185,  249 => 182,  243 => 179,  237 => 176,  231 => 173,  225 => 170,  210 => 158,  204 => 155,  189 => 143,  183 => 140,  177 => 137,  171 => 134,  165 => 131,  159 => 128,  153 => 125,  147 => 122,  132 => 110,  126 => 107,  120 => 104,  114 => 100,  112 => 98,  101 => 89,  97 => 80,  93 => 78,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art et Décor | Produits
{% endblock %}

{% block content %}
\t<h1 style=\"margin-top:150px; text-align: center;\">Nos Produits</h1>
\t<div class=\"products\">
\t\t{# <div class=\"products-search\">
\t\t\t\t\t{{ form(formProduct.string) }}
\t\t\t\t\t<a class=\"block\">
\t\t\t\t\t\t<h2>Aspect</h2>
\t\t\t\t\t\t<div class=\"chevron\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t{{ form_row(formProduct.categories.1, {
\t\t\t\t\t\t\t'label_attr': {'class': 'test'}
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.2) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.3) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.4) }}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"block\">
\t\t\t\t\t\t<h2>Familles</h2>
\t\t\t\t\t\t<div class=\"chevron\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t{{ form_row(formProduct.categories.8) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.7) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.24) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.9) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.10) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.26) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.6) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.5) }}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"block\">
\t\t\t\t\t\t<h2>Phase</h2>
\t\t\t\t\t\t<div class=\"chevron\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t{{ form_row(formProduct.categories.18) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.19) }}
\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t<a class=\"block\">
\t\t\t\t\t\t<h2>Résines</h2>
\t\t\t\t\t\t<div class=\"chevron\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t{{ form_row(formProduct.categories.12) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.13) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.14) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.15) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.16) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.17) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.25) }}
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"block\">
\t\t\t\t\t\t<h2>Classe</h2>
\t\t\t\t\t\t<div class=\"chevron\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-down\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t{{ form_row(formProduct.categories.20) }}
\t\t\t\t\t\t{{ form_row(formProduct.categories.21) }}
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_widget(formProduct.submit) }}
\t\t\t\t</div> #}

\t\t<form id=\"filters\">
\t\t{{ form_widget(formProduct.string) }}
\t\t{# <form id=\"filters\">
\t\t\t{% for categorie in categories %}
\t\t\t\t<p>
\t\t\t\t\t<input type=\"checkbox\" name=\"categories[]\" id=\"cat{{categorie.id}}\" value=\"{{categorie.id}}\"/>
\t\t\t\t\t<label for=\"cat{{categorie.id}}\">{{categorie.name}}</label>
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t</form> #}
\t\t<ul class=\"accordion-menu\">
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-road\" aria-hidden=\"true\"></i>
\t\t\t\t\tAspect
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.1, {
\t\t\t\t\t\t\t'label_attr': {'class': 'test'}
\t\t\t\t\t\t\t}) }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.2) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.3) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.4) }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
\t\t\t\t\tFamilles
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.8) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.7) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.24) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.9) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.10) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.26) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.6) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.5) }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-quote-left\" aria-hidden=\"true\"></i>
\t\t\t\t\tPhase
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.18) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.19) }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i>
\t\t\t\t\tRésines
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.12) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.13) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.14) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.15) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.16) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.17) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.25) }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<div class=\"dropdownlink\">
\t\t\t\t\t<i class=\"fa fa-motorcycle\" aria-hidden=\"true\"></i>
\t\t\t\t\tClasse
\t\t\t\t\t<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"submenuItems\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.20) }}</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a>{{ form_row(formProduct.categories.21) }}</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t\t{{ form_widget(formProduct.submit) }}
\t\t</form>


\t\t<div class=\"boucle\">
\t\t\t{% for product in products %}
\t\t\t\t<div class=\"product-item text-center\" style=\"width:100%;\">
\t\t\t\t\t<a href=\"{{ path('product', { 'slug' : product.slug }) }}\">
\t\t\t\t\t\t<img src=\"assets/pictures/{{ product.image }}\" alt=\"{{ product.name }}\" class=\"img-fluid\" style=\"max-height:200px; max-width:200px;\"/>
\t\t\t\t\t\t<h4>{{ product.name }}</h4>
\t\t\t\t\t\t<h4>{{ product.description }}</h4>
\t\t\t\t\t\t<h5>{{ (product.price / 100)|number_format(2, ',', '') }}€ HT</h5>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"paginator\">{{ knp_pagination_render(products) }}</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "product/products.html.twig", "C:\\wamp64\\www\\artetdecor-master\\templates\\product\\products.html.twig");
    }
}

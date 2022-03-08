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

/* product/show.html.twig */
class __TwigTemplate_e966756c98da51ca5234c1c61d6c3101a1f5120112902f4c30b8278b3060775a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'productBody' => [$this, 'block_productBody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "product/productBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("product/productBase.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_productBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productBody"));

        // line 4
        echo "    <div class=\"row pt-3 product-show\">
        <div class=\"col-4\">
            <img
                alt=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\"
                src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/products/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "imageFilename", [], "any", false, false, false, 8))), "html", null, true);
        echo "\"
                class=\"d-block\"
            >
            <div class=\"p-2\">
                <small>brought to you by </small>
                <small class=\"d-inline\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "brand", [], "any", false, false, false, 13), "html", null, true);
        echo "</small>
            </div>
        </div>
        <div class=\"col-8 px-3\">
            <h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
            <div>
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "
            </div>
            <div class=\"p-3 mt-4 d-flex justify-content-between flex-wrap flex-lg-nowrap\">
                <div>
                    <strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "priceString", [], "any", false, false, false, 23), "USD"), "html", null, true);
        echo "</strong>
                    <br>
                    <strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "reviews", [], "any", false, false, false, 25)), "html", null, true);
        echo "</strong> Reviews
                    <br/>
                    <strong>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "averageStars", [], "any", false, false, false, 27), "html", null, true);
        echo "/5</strong><i class=\"fas fa-star ms-2\"></i>
                </div>
                <div>
                    ";
        // line 30
        echo twig_include($this->env, $context, "product/_cart_add_controls.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h3>Reviews</h3>

    ";
        // line 40
        echo twig_include($this->env, $context, "product/_reviews.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  120 => 30,  114 => 27,  109 => 25,  104 => 23,  97 => 19,  92 => 17,  85 => 13,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'product/productBase.html.twig' %}

{% block productBody %}
    <div class=\"row pt-3 product-show\">
        <div class=\"col-4\">
            <img
                alt=\"{{ product.name }}\"
                src=\"{{ asset('/uploads/products/'~product.imageFilename) }}\"
                class=\"d-block\"
            >
            <div class=\"p-2\">
                <small>brought to you by </small>
                <small class=\"d-inline\">{{ product.brand }}</small>
            </div>
        </div>
        <div class=\"col-8 px-3\">
            <h1>{{ product.name }}</h1>
            <div>
                {{ product.description }}
            </div>
            <div class=\"p-3 mt-4 d-flex justify-content-between flex-wrap flex-lg-nowrap\">
                <div>
                    <strong>{{ product.priceString|format_currency('USD') }}</strong>
                    <br>
                    <strong>{{ product.reviews|length }}</strong> Reviews
                    <br/>
                    <strong>{{ product.averageStars }}/5</strong><i class=\"fas fa-star ms-2\"></i>
                </div>
                <div>
                    {{ include('product/_cart_add_controls.html.twig') }}
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h3>Reviews</h3>

    {{ include('product/_reviews.html.twig') }}
{% endblock %}
", "product/show.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/product/show.html.twig");
    }
}

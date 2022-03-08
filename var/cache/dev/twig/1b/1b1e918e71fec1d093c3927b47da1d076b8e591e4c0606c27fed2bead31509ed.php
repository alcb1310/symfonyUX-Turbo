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

/* product/index.html.twig */
class __TwigTemplate_3276fa61029f5ee736a0f66e4468a1f298425a2b1144009db47c901b4c4e7788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'productAboveRow' => [$this, 'block_productAboveRow'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("product/productBase.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_productAboveRow($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAboveRow"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productAboveRow"));

        // line 4
        echo "    <div class=\"p-3 mb-4 text-center\" data-controller=\"counter\" style=\"background-color: #efefee;\">
        <button
            data-action=\"counter#increment\"
            class=\"btn btn-success btn-sm me-3\"
        >
            Click for a chance to win!
        </button>

        You've entered the contest
        <span data-counter-target=\"count\">0</span>
        times!
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_productBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "productBody"));

        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-3\">
            <h1>
                ";
        // line 22
        if ((isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "
                ";
        } else {
            // line 25
            echo "                    All Products
                ";
        }
        // line 27
        echo "            </h1>
        </div>
        <div class=\"col-9\">
            <form>
                <div
                    class=\"input-group\"
                    ";
        // line 33
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, ["autocomplete" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage", ["preview" => 1]), "skipHiddenProperty" => true], "autocomplete-transition" => []]);
        // line 39
        echo "
                    data-action=\"toggle->autocomplete-transition#toggle\"
                >
                    <input
                        name=\"q\"
                        value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\"
                        placeholder=\"Search products...\"
                        type=\"search\"
                        class=\"form-control\"
                        data-autocomplete-target=\"input\"
                    >

                    <div
                        class=\"search-preview\"
                        data-autocomplete-target=\"results\"
                        data-autocomplete-transition-target=\"results\"
                    ></div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row mt-4\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "            <div class=\"col-xs-12 col-6 mb-2 pb-2\">
                <div class=\"component-light\">
                    <div class=\"product-image\">
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                            <img
                                alt=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
                                src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 68))), "html", null, true);
            echo "\"
                                class=\"d-block mb-2\"
                            >
                        </a>
                        <div class=\"d-flex justify-content-between px-2 pt-3 mb-2\">
                            <h3>
                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">
                                    ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                </a>
                            </h3>
                            <p>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "averageStars", [], "any", false, false, false, 78), "html", null, true);
            echo "/5<i class=\"fas fa-star ms-2\"></i></p>
                        </div>
                    </div>
                    <div class=\"px-2 my-3 d-flex justify-content-between\">
                        <p class=\"p-0 d-inline\">
                            <strong>";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "priceString", [], "any", false, false, false, 83), "USD"), "html", null, true);
            echo "</strong>
                        </p>
                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-info\">View Product</a>
                    </div>
                </div>
                <hr>
                <div class=\"px-2 pb-2\">
                    <small>brought to you by ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 90), "html", null, true);
            echo "</small>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "            <div class=\"col-12\">
                <h5 class=\"ml-4 mt-4\" >
                    Whoopsie Daisy, no products found!
                </h5>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>

    <div class=\"row\">
        <span class=\"p-3\">
            Shipping takes 10-13 weeks, and products probably won't work
        </span>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 100,  223 => 94,  214 => 90,  206 => 85,  201 => 83,  193 => 78,  187 => 75,  183 => 74,  174 => 68,  170 => 67,  165 => 65,  160 => 62,  155 => 61,  135 => 44,  128 => 39,  126 => 33,  118 => 27,  114 => 25,  108 => 23,  106 => 22,  101 => 19,  91 => 18,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'product/productBase.html.twig' %}

{% block productAboveRow %}
    <div class=\"p-3 mb-4 text-center\" data-controller=\"counter\" style=\"background-color: #efefee;\">
        <button
            data-action=\"counter#increment\"
            class=\"btn btn-success btn-sm me-3\"
        >
            Click for a chance to win!
        </button>

        You've entered the contest
        <span data-counter-target=\"count\">0</span>
        times!
    </div>
{% endblock %}

{% block productBody %}
    <div class=\"row\">
        <div class=\"col-3\">
            <h1>
                {% if currentCategory %}
                    {{ currentCategory.name }}
                {% else %}
                    All Products
                {% endif %}
            </h1>
        </div>
        <div class=\"col-9\">
            <form>
                <div
                    class=\"input-group\"
                    {{ stimulus_controller({
                        'autocomplete': {
                            url: path('app_homepage', { preview: 1 }),
                            skipHiddenProperty: true
                        },
                        'autocomplete-transition': {}
                    }) }}
                    data-action=\"toggle->autocomplete-transition#toggle\"
                >
                    <input
                        name=\"q\"
                        value=\"{{ searchTerm }}\"
                        placeholder=\"Search products...\"
                        type=\"search\"
                        class=\"form-control\"
                        data-autocomplete-target=\"input\"
                    >

                    <div
                        class=\"search-preview\"
                        data-autocomplete-target=\"results\"
                        data-autocomplete-transition-target=\"results\"
                    ></div>
                </div>
            </form>
        </div>
    </div>
    <div class=\"row mt-4\">
        {% for product in products %}
            <div class=\"col-xs-12 col-6 mb-2 pb-2\">
                <div class=\"component-light\">
                    <div class=\"product-image\">
                        <a href=\"{{ path('app_product', { id: product.id }) }}\">
                            <img
                                alt=\"{{ product.name }}\"
                                src=\"{{ asset('/uploads/products/'~product.imageFilename) }}\"
                                class=\"d-block mb-2\"
                            >
                        </a>
                        <div class=\"d-flex justify-content-between px-2 pt-3 mb-2\">
                            <h3>
                                <a href=\"{{ path('app_product', { id: product.id }) }}\">
                                    {{ product.name }}
                                </a>
                            </h3>
                            <p>{{ product.averageStars }}/5<i class=\"fas fa-star ms-2\"></i></p>
                        </div>
                    </div>
                    <div class=\"px-2 my-3 d-flex justify-content-between\">
                        <p class=\"p-0 d-inline\">
                            <strong>{{ product.priceString|format_currency('USD') }}</strong>
                        </p>
                        <a href=\"{{ path('app_product', { id: product.id }) }}\" class=\"btn btn-info\">View Product</a>
                    </div>
                </div>
                <hr>
                <div class=\"px-2 pb-2\">
                    <small>brought to you by {{ product.brand }}</small>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <h5 class=\"ml-4 mt-4\" >
                    Whoopsie Daisy, no products found!
                </h5>
            </div>
        {% endfor %}
    </div>

    <div class=\"row\">
        <span class=\"p-3\">
            Shipping takes 10-13 weeks, and products probably won't work
        </span>
    </div>
{% endblock %}
", "product/index.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/product/index.html.twig");
    }
}

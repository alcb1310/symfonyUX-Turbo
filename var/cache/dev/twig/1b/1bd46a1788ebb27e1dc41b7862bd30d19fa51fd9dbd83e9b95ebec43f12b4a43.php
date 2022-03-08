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

/* cart/_cartList.html.twig */
class __TwigTemplate_02b6374bcba4c2076d255898fc172465eba6815e815ce324720b0d9c867b845e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_cartList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_cartList.html.twig"));

        // line 1
        echo "<div>
    <div class=\"row p-3\">
        <div class=\"col-3 fw-bold\">
            Item Name
        </div>
        <div class=\"col-3 fw-bold\">
            Quantity
        </div>
        <div class=\"col-3 fw-bold\">
            Price
        </div>
        <div class=\"col-3\"></div>
    </div>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "        <div
            class=\"cart-item row p-3\"
            data-action=\"submit-confirm:async:submitted->reload-content#refreshContent\"
        >
            <div class=\"col-2\">
                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "
            </div>
            <div class=\"col-1\">
                ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 23)) {
                // line 24
                echo "                    <span class=\"color-square\" style=\"background-color: rgb(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 24), "red", [], "any", false, false, false, 24), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 24), "green", [], "any", false, false, false, 24), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 24), "blue", [], "any", false, false, false, 24), "html", null, true);
                echo ");\"></span>
                ";
            }
            // line 26
            echo "            </div>
            <div class=\"col-3\">
                ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
            echo "
            </div>
            <div class=\"col-3\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "totalString", [], "any", false, false, false, 31), "USD"), "html", null, true);
            echo "
            </div>
            <div class=\"col-3\">
                <form
                    action=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove_item", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
$context["item"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "colorId" => ((twig_get_attribute($this->env, $this->source,             // line 37
$context["item"], "color", [], "any", false, false, false, 37)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)) : (null))]), "html", null, true);
            // line 38
            echo "\"
                    method=\"POST\"
                    ";
            // line 40
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "submit-confirm", ["title" => "Remove this item?", "icon" => "warning", "confirmButtonText" => "Yes, remove it", "submitAsync" => true]);
            // line 45
            echo "
                    data-action=\"submit-confirm#onSubmit\"
                >
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("remove_item"), "html", null, true);
            echo "\" />

                    <button class=\"btn btn-info btn-sm\">
                        Remove
                    </button>
                </form>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "        <div class=\"col text-center mt-5\">
            Your cart is empty! <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
            echo "\">Get to shopping!</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
    ";
        // line 62
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 62, $this->source); })()), "items", [], "any", false, false, false, 62)) > 0)) {
            // line 63
            echo "    <div class=\"p-3\">
        Total: <strong>";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 64, $this->source); })()), "totalString", [], "any", false, false, false, 64), "USD"), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 67
        echo "</div>

";
        // line 69
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()), "items", [], "any", false, false, false, 69)) > 0)) {
            // line 70
            echo "<div>
    <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            echo "\" class=\"btn btn-primary\">
        Check Out &gt;&gt;
    </a>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/_cartList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  166 => 70,  164 => 69,  160 => 67,  154 => 64,  151 => 63,  149 => 62,  146 => 61,  137 => 58,  134 => 57,  120 => 48,  115 => 45,  113 => 40,  109 => 38,  107 => 37,  106 => 36,  105 => 35,  98 => 31,  92 => 28,  88 => 26,  78 => 24,  76 => 23,  70 => 20,  63 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"row p-3\">
        <div class=\"col-3 fw-bold\">
            Item Name
        </div>
        <div class=\"col-3 fw-bold\">
            Quantity
        </div>
        <div class=\"col-3 fw-bold\">
            Price
        </div>
        <div class=\"col-3\"></div>
    </div>
    {% for item in cart.items %}
        <div
            class=\"cart-item row p-3\"
            data-action=\"submit-confirm:async:submitted->reload-content#refreshContent\"
        >
            <div class=\"col-2\">
                {{ item.product.name }}
            </div>
            <div class=\"col-1\">
                {% if item.color %}
                    <span class=\"color-square\" style=\"background-color: rgb({{ item.color.red }}, {{ item.color.green }}, {{ item.color.blue }});\"></span>
                {% endif %}
            </div>
            <div class=\"col-3\">
                {{ item.quantity }}
            </div>
            <div class=\"col-3\">
                {{ item.totalString|format_currency('USD') }}
            </div>
            <div class=\"col-3\">
                <form
                    action=\"{{ path('app_cart_remove_item', {
                        productId: item.product.id,
                        colorId: item.color ? item.color.id: null,
                    }) }}\"
                    method=\"POST\"
                    {{ stimulus_controller('submit-confirm', {
                        title: 'Remove this item?',
                        icon: 'warning',
                        confirmButtonText: 'Yes, remove it',
                        submitAsync: true,
                    }) }}
                    data-action=\"submit-confirm#onSubmit\"
                >
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('remove_item') }}\" />

                    <button class=\"btn btn-info btn-sm\">
                        Remove
                    </button>
                </form>
            </div>
        </div>
    {% else %}
        <div class=\"col text-center mt-5\">
            Your cart is empty! <a href=\"{{ path('app_homepage') }}\">Get to shopping!</a>
        </div>
    {% endfor %}

    {% if cart.items|length > 0 %}
    <div class=\"p-3\">
        Total: <strong>{{ cart.totalString|format_currency('USD') }}</strong>
    </div>
    {% endif %}
</div>

{% if cart.items|length > 0 %}
<div>
    <a href=\"{{ path('app_checkout') }}\" class=\"btn btn-primary\">
        Check Out &gt;&gt;
    </a>
</div>
{% endif %}
", "cart/_cartList.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/cart/_cartList.html.twig");
    }
}

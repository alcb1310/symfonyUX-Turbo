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

/* checkout/confirmation.html.twig */
class __TwigTemplate_44c6369327b436cffa9cc00513aa3363f794d3d4fd2b79277ac88a02da4af05a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "checkout/confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "checkout/confirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">
            Thank you for your purchase!
        </h1>
        <div class=\"component-light p-4\">
            <p>
                To complete the transaction, please print this page and mail it
                with a check or money order to the following address:
            </p>
            <code>
                1233 Nineties Dr.<br />
                10443 Vintage City, MI<br />
                USA
            </code>
            <p class=\"mt-2\">
                Your products will arrive within 12-24 weeks... or probably later. I wouldn't hold my breath.
            </p>

            <hr />

            Order Details<br /><br />

            <code>
                Customer Name: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 27, $this->source); })()), "customerName", [], "any", false, false, false, 27), "html", null, true);
        echo "<br />
                Address: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 28, $this->source); })()), "customerAddress", [], "any", false, false, false, 28), "html", null, true);
        echo "<br />
                Zip: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 29, $this->source); })()), "customerZip", [], "any", false, false, false, 29), "html", null, true);
        echo "<br />
                City: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 30, $this->source); })()), "customerCity", [], "any", false, false, false, 30), "html", null, true);
        echo "<br />
                Phone: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 31, $this->source); })()), "customerPhone", [], "any", false, false, false, 31), "html", null, true);
        echo "<br />
            </code>

            <table class=\"table mt-4\">
                <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 36, $this->source); })()), "purchaseItems", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "                        <tr>
                            <td>
                                ";
            // line 39
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 39))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            }
            // line 40
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["item"], "totalString", [], "any", false, false, false, 46), "USD"), "html", null, true);
            echo " <br>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <td class=\"flex-grow-1\">
                            Total Price:
                        </td>
                        <td></td>
                        <td>
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 59, $this->source); })()), "totalString", [], "any", false, false, false, 59), "USD"), "html", null, true);
        echo "
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "checkout/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  152 => 50,  142 => 46,  136 => 43,  129 => 40,  125 => 39,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">
            Thank you for your purchase!
        </h1>
        <div class=\"component-light p-4\">
            <p>
                To complete the transaction, please print this page and mail it
                with a check or money order to the following address:
            </p>
            <code>
                1233 Nineties Dr.<br />
                10443 Vintage City, MI<br />
                USA
            </code>
            <p class=\"mt-2\">
                Your products will arrive within 12-24 weeks... or probably later. I wouldn't hold my breath.
            </p>

            <hr />

            Order Details<br /><br />

            <code>
                Customer Name: {{ purchase.customerName }}<br />
                Address: {{ purchase.customerAddress }}<br />
                Zip: {{ purchase.customerZip }}<br />
                City: {{ purchase.customerCity }}<br />
                Phone: {{ purchase.customerPhone }}<br />
            </code>

            <table class=\"table mt-4\">
                <tbody>
                    {% for item in purchase.purchaseItems %}
                        <tr>
                            <td>
                                {% if item.color is not null %}{{ item.color.name }}{% endif %}
                                {{ item.product.name }}
                            </td>
                            <td>
                                {{ item.quantity }}
                            </td>
                            <td>
                                {{ item.totalString|format_currency('USD') }} <br>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>

                <tfoot>
                    <tr>
                        <td class=\"flex-grow-1\">
                            Total Price:
                        </td>
                        <td></td>
                        <td>
                            {{ purchase.totalString|format_currency('USD') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
{% endblock %}
", "checkout/confirmation.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/checkout/confirmation.html.twig");
    }
}

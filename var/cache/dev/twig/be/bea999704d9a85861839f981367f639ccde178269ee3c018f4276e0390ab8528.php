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

/* product/_searchPreview.html.twig */
class __TwigTemplate_ed26abe42051377556b10f8bffeb1d8401b83783161a0abb7593bc4849f850cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_searchPreview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_searchPreview.html.twig"));

        // line 1
        echo "<div class=\"list-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "        <a
            role=\"option\"
            class=\"list-group-item list-group-item-action\"
            href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"
        >
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <img
                        alt=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
                        src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "imageFilename", [], "any", false, false, false, 12))), "html", null, true);
            echo "\"
                        class=\"rounded\"
                    >
                    <span class=\"px-1\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
                </div>
                <em>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "priceString", [], "any", false, false, false, 17), "USD"), "html", null, true);
            echo "</em>
            </div>
        </a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <div class=\"list-group-item\" role=\"option\" aria-disabled=\"true\">No results found!</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_searchPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  88 => 21,  79 => 17,  74 => 15,  68 => 12,  64 => 11,  56 => 6,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-group\">
    {% for product in products %}
        <a
            role=\"option\"
            class=\"list-group-item list-group-item-action\"
            href=\"{{ path('app_product', { id: product.id }) }}\"
        >
            <div class=\"d-flex align-items-center justify-content-between\">
                <div>
                    <img
                        alt=\"{{ product.name }}\"
                        src=\"{{ asset('/uploads/products/'~product.imageFilename) }}\"
                        class=\"rounded\"
                    >
                    <span class=\"px-1\">{{ product.name }}</span>
                </div>
                <em>{{ product.priceString|format_currency('USD') }}</em>
            </div>
        </a>
    {% else %}
        <div class=\"list-group-item\" role=\"option\" aria-disabled=\"true\">No results found!</div>
    {% endfor %}
</div>
", "product/_searchPreview.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/product/_searchPreview.html.twig");
    }
}

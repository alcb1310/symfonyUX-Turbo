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

/* product/_cart_add_controls.html.twig */
class __TwigTemplate_8fc87db673ed9bf674d51811c48ce5b7779317d1c5ddba93823d03d20000af5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_cart_add_controls.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_cart_add_controls.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "cart-add-controls d-flex align-items-center justify-content-baseline"]]);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["addToCartForm"] ?? null), "color", [], "any", true, true, false, 4)) {
            // line 5
            echo "        <div
            ";
            // line 6
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension']->renderStimulusController($this->env, "color-square", ["colorId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "product", [], "any", false, false, false, 7), "colors", [], "any", false, false, false, 7), 1, [], "array", false, false, false, 7), "id", [], "any", false, false, false, 7)]);
            // line 8
            echo "
        >
            ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 10, $this->source); })()), "color", [], "any", false, false, false, 10), 'widget', ["attr" => ["data-color-square-target" => "select"]]);
            // line 12
            echo "

            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 14, $this->source); })()), "vars", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14), "product", [], "any", false, false, false, 14), "colors", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 15
                echo "                <button
                    class=\"color-square btn\"
                    type=\"button\"
                    data-action=\"color-square#selectColor\"
                    data-color-square-target=\"colorSquare\"
                    data-color-id=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\"
                    style=\"background-color: rgb(";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "red", [], "any", false, false, false, 21), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "green", [], "any", false, false, false, 21), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["color"], "blue", [], "any", false, false, false, 21), "html", null, true);
                echo ");\"
                ></button>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 27, $this->source); })()), "quantity", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "mx-3"]]);
        // line 29
        echo "

    <button class=\"btn btn-info btn-sm\" formnovalidate>
        +
    </button>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

<div>
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 37, $this->source); })()), 'errors');
        echo "
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["addToCartForm"] ?? null), "color", [], "any", true, true, false, 38)) {
            // line 39
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 39, $this->source); })()), "color", [], "any", false, false, false, 39), 'errors');
            echo "
    ";
        }
        // line 41
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addToCartForm"]) || array_key_exists("addToCartForm", $context) ? $context["addToCartForm"] : (function () { throw new RuntimeError('Variable "addToCartForm" does not exist.', 41, $this->source); })()), "quantity", [], "any", false, false, false, 41), 'errors');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_cart_add_controls.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  122 => 39,  120 => 38,  116 => 37,  110 => 34,  103 => 29,  101 => 27,  98 => 26,  94 => 24,  81 => 21,  77 => 20,  70 => 15,  66 => 14,  62 => 12,  60 => 10,  56 => 8,  54 => 7,  53 => 6,  50 => 5,  48 => 4,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(addToCartForm, {
    attr: { class: 'cart-add-controls d-flex align-items-center justify-content-baseline' }
}) }}
    {% if addToCartForm.color is defined %}
        <div
            {{ stimulus_controller('color-square', {
                colorId: addToCartForm.vars.data.product.colors[1].id
            }) }}
        >
            {{ form_widget(addToCartForm.color, {
                attr: { 'data-color-square-target': 'select' }
            }) }}

            {% for color in addToCartForm.vars.data.product.colors %}
                <button
                    class=\"color-square btn\"
                    type=\"button\"
                    data-action=\"color-square#selectColor\"
                    data-color-square-target=\"colorSquare\"
                    data-color-id=\"{{ color.id }}\"
                    style=\"background-color: rgb({{ color.red }}, {{ color.green }}, {{ color.blue }});\"
                ></button>
            {% endfor %}
        </div>
    {% endif %}

    {{ form_widget(addToCartForm.quantity, {
        attr: { class: 'mx-3' }
    }) }}

    <button class=\"btn btn-info btn-sm\" formnovalidate>
        +
    </button>
{{ form_end(addToCartForm) }}

<div>
    {{ form_errors(addToCartForm) }}
    {% if addToCartForm.color is defined %}
        {{ form_errors(addToCartForm.color) }}
    {% endif %}
    {{ form_errors(addToCartForm.quantity) }}
</div>
", "product/_cart_add_controls.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/product/_cart_add_controls.html.twig");
    }
}

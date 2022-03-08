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

/* product/_reviews.html.twig */
class __TwigTemplate_db17f1fb12a6f718a769b386321e2d3f2ac7c6b447eea5f77a5becc3008fd231 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_reviews.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_reviews.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "reviews", [], "any", false, false, false, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 2
            echo "    <div class=\"component-light my-3 p-3\">
        <p><i class=\"fas fa-user-circle me-2\"></i>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "owner", [], "any", false, false, false, 3), "email", [], "any", false, false, false, 3), "html", null, true);
            echo " <i class=\"fas fa-star ms-4\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "stars", [], "any", false, false, false, 3), "html", null, true);
            echo "/5</p>
        <div>
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "content", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "    <p>This product has not been reviewed yet!</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
<hr>

";
        // line 14
        if (((array_key_exists("reviewForm", $context)) ? (_twig_default_filter((isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 14, $this->source); })()), false)) : (false))) {
            // line 15
            echo "    <h4>Post your own review</h4>
    ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 16, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_reviews", ["id" => twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)])]);
            // line 18
            echo "
        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 19, $this->source); })()), "stars", [], "any", false, false, false, 19), 'row');
            echo "
        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), 'row');
            echo "

        <button class=\"btn btn-primary\" formnovalidate>Add Review</button>
    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reviewForm"]) || array_key_exists("reviewForm", $context) ? $context["reviewForm"] : (function () { throw new RuntimeError('Variable "reviewForm" does not exist.', 23, $this->source); })()), 'form_end');
            echo "
";
        } elseif ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 25
            echo "    <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Log in</a> to post your review</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  100 => 23,  94 => 20,  90 => 19,  87 => 18,  85 => 17,  84 => 16,  81 => 15,  79 => 14,  74 => 11,  67 => 9,  58 => 5,  51 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for review in product.reviews %}
    <div class=\"component-light my-3 p-3\">
        <p><i class=\"fas fa-user-circle me-2\"></i>{{ review.owner.email }} <i class=\"fas fa-star ms-4\"></i> {{ review.stars }}/5</p>
        <div>
            {{ review.content }}
        </div>
    </div>
{% else %}
    <p>This product has not been reviewed yet!</p>
{% endfor %}

<hr>

{% if reviewForm|default(false) %}
    <h4>Post your own review</h4>
    {{ form_start(reviewForm, {
        'action': path('app_product_reviews', { id: product.id })
    }) }}
        {{ form_row(reviewForm.stars) }}
        {{ form_row(reviewForm.content) }}

        <button class=\"btn btn-primary\" formnovalidate>Add Review</button>
    {{ form_end(reviewForm) }}
{% elseif not is_granted('ROLE_USER') %}
    <p><a href=\"{{ path('app_login') }}\">Log in</a> to post your review</p>
{% endif %}
", "product/_reviews.html.twig", "/Users/andrescourt/Public/GIT/html/Learning/symfonyTurbo/templates/product/_reviews.html.twig");
    }
}
